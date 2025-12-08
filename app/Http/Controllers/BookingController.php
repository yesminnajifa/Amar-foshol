<?php
namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'mobile'       => 'required',
            'pickup_date'  => 'required|date',
            'return_date'  => 'required|date',
            'division'     => 'required',
            'district'     => 'required',
            'house_no'     => 'required',
            'road_no'      => 'required',
        ]);

        Booking::create([
            'product_name' => $request->product_name,
            'mobile'       => $request->mobile,
            'pickup_date'  => $request->pickup_date,
            'return_date'  => $request->return_date,
            'division'     => $request->division,
            'district'     => $request->district,
            'house_no'     => $request->house_no,
            'road_no'      => $request->road_no,
        ]);

        return response()->json(['success' => true]);
    }
}
