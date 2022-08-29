<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\Bus;
use App\Models\ImageBus;
use App\Models\Destination;
use Carbon\Carbon;
use \stdClass;
use DB;

class SchedulesController extends Controller
{
    public function index(Request $request)
    {
        $all_schedules = Schedule::all();
        if(\Request::get('sort') == 'price_asc')
        {
            $all_schedules = Schedule::orderBy('price_schedules', 'asc')->get();
        }
        elseif(\Request::get('sort') == 'price_desc')
        {
            $all_schedules = Schedule::orderBy('price_schedules', 'desc')->get();
        }
        elseif(\Request::get('sort') == 'newest')
        {
            $all_schedules = Schedule::orderBy('created_at', 'desc')->get();
        }
        
        // Search by bus house
        $search_bus = $request->input('bus_name');
        // Check if have input request
        if($search_bus)
        {
            // Check name from input request have same name in table buses
            $bus = DB::table('buses')->where('bus_name','LIKE',"%{$search_bus}%")->get();
            foreach($bus as $bus_search)
            {
                // Display value on view
                $all_schedules = Schedule::where('bus_id', $bus_search->id)->get();
            }
        }

        // Search by start destination
        $search_start_destination = $request->input('start_destination');
        if($search_start_destination)
        {
            $start_destination = DB::table('start_destination')->where('name','LIKE',"%{$search_start_destination}%")->get();
            foreach($start_destination as $start)
            {
                // Display value on view
                $all_schedules = Schedule::where('start_destination_id', $start->id)->get();
            }
        }

        // Search by Destination
        $search_destination = $request->input('destination');
        if($search_destination)
        {
            $destination = DB::table('destination')->where('name','LIKE',"%{$search_destination}%")->get();
            foreach($destination as $des)
            {
                // Display value on view
                $all_schedules = Schedule::where('destination_id', $des->id)->get();
            }
        }

        // Search by Schedule
        $start_schedule = $request->input('start_schedule');
        $destination = $request->input('destination_schedule');
        $chekin_date = $request->input('checkin_date');
 
        if($start_schedule)
        {
            $start = DB::table('start_destination')->where('name','LIKE',"%{$start_schedule}%")->get();
            foreach($start as $starts)
            {
                $all_schedules = Schedule::where('start_destination_id', $starts->id)
                                            ->where('destination_id', $destination)
                                            ->orWhereDate('start_at', Carbon::parse($chekin_date)->format('Y/m/d'))
                                            ->get();   
            }
        }
        
        // Filter by Price
        // Get min and max to set price in range
        $min_price = Schedule::min('price_schedules');
        $max_price = Schedule::max('price_schedules');

        // get request from range form
        $filter_min_price = $request->min_price;
        $filter_max_price = $request->max_price;

        // Nếu có request thực thi
        if($filter_min_price && $filter_max_price){
            if($filter_min_price >0 && $filter_max_price >0)
            {
                $all_schedules = Schedule::whereBetween('price_schedules',[$filter_min_price,$filter_max_price])->get();
            }
        }

        $schedules = array();
        foreach($all_schedules as $schedule)
        {
            $item = new stdClass(); //Create new object store schedule
            $item->schedule = $schedule;
            $item->images_bus = ImageBus::where('bus_id', $schedule->bus_id )->pluck('image_bus')->toArray();
            array_push($schedules, $item);
        }
        return view('frontend.schedule', [
            'schedules'=> $schedules,
            'all_schedules' => $all_schedules,
            'request' => $request,
            'min_price' => $min_price,
            'max_price' => $max_price,
            'filter_min_price'=> $filter_min_price,
            'filter_max_price'=> $filter_max_price,
        ]);
    }

    // public function searchBusHouseByAjax()
    // {
    //     $bus = Bus::join('schdules', 'schdules.bus_id','buses.id')->first();
    //     $schedule = Schedule::where('bus_id', $bus)->select('bus_id')->get();
    //     $data = [];
    //     foreach ($schedule as $items)
    //     {
    //         $data[] = $items['price_schedules'];
    //     }
    //     dd($data);
    //     return $data;
    // }

}
