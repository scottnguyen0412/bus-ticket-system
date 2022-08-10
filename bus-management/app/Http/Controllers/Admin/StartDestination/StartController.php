<?php

namespace App\Http\Controllers\Admin\StartDestination;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StartDestination;
use Yajra\Datatables\Datatables;


class StartController extends Controller
{
    public function index(StartDestination $startdest)
    {
        return view('admin.map.startDestination.index');
    }

    public function getAllRowData()
    {
        $start_destination = StartDestination::all();
        return Datatables::of($start_destination)
            ->editColumn('name' , function($data) {
                return ' 
                    <a href="' . route('admin.startdestination.detail', $data->id) . '">' . $data->name . '</a>
                ';
            })
            ->editColumn('action', function($data) {
                return '
                
                ';
            })
            ->rawColumns(['action', 'name'])
            ->setRowAttr([
                'data-row' => function ($data) {
                    return $data->id;
                }
            ])
            ->make(true);
    }

    public function create()
    {
        return view('admin.map.startDestination.create');
    }

    public function store(Request $request)
    {
        StartDestination::create([
            'name' => $request->name,
            'address'  => $request->address,
            'longitude' => $request->longitude,
            'latitude' => $request->latitude,
        ]);
        return redirect()->route('admin.startdestination.index')->with('status', 'Start Destination Created Successfully');
    }

    // show Detail with map
    public function Detail($id)
    {
        $start_destination = StartDestination::findOrFail($id);
        return view('admin.map.startDestination.detail', [
            'start_destination' => $start_destination
        ]);
    }
}
