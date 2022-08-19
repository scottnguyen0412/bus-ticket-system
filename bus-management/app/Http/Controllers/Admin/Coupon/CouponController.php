<?php

namespace App\Http\Controllers\Admin\Coupon;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\Coupon;


class CouponController extends Controller
{
    public function index()
    {
        return view('admin.coupon.index');
    }

    // Show coupon
    public function getAllRowData(Request $request)
    {
        $coupon = Coupon::all();
        return Datatables::of($coupon)
            ->editColumn('status', function($data) {
                $show = 1;
                $not_show = 0;
                if($data->status == $show)
                {
                    return '<div class="bg-success text-white rounded text-center font-weight-bold">Show</div>';
                }elseif($data->status == $not_show)
                {
                    return '<div class="bg-warning text-white rounded text-center font-weight-bold">Not Show</div>';
                }
            })
            ->editColumn('action', function ($data) {
                return '
                    <a class="btn btn-warning btn-sm rounded-pill" href="'.route("admin.coupon.edit",['id'=>$data->id]).'"><i class="fas fa-edit" title="Edit Coupon"></i></a>
                ';
            })
            ->rawColumns(['status','action'])
            ->setRowAttr([
                'data-row' => function ($data) {
                    return $data->id;
                }
            ])
            ->make(true);
    }

    public function create(Request $request)
    {
        $coupon = Coupon::create([
            'name_coupon' => $request->name_coupon,
            'coupon_code' => $this->autoRandomString(10),
            'coupon_limited_quantity' => $request->coupon_limited_quantity,
            'price_coupon' => $request->price_coupon,
            'valid_from' => $request->valid_from,
            'valid_until' => $request->valid_until,
            'status' => $request->status == TRUE?'1':'0',
        ]);
        return redirect('/admin/coupon')->with('status', 'Coupon Created Successfully');
    }

    public function edit($id)
    {
        $coupon = Coupon::findOrFail($id);
        return view('admin.coupon.edit', [
            'coupon' => $coupon
        ]);
    }

    public function update(Request $request, $id)
    {
        $coupon = Coupon::findOrFail($id);
        $coupon->update([
            'name_coupon' => $request['name_coupon'],
            'coupon_limited_quantity' => $request['coupon_limited_quantity'],
            'price_coupon' => $request['price_coupon'],
            'valid_from' => $request['valid_from'],
            'valid_until'=> $request['valid_until'],
            'status' => $request['status'] == TRUE?'1':'0',
        ]);
        return redirect('/admin/coupon')->with('status', 'Coupon Updated Successfully');
    }

    // Random string
    private function autoRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
