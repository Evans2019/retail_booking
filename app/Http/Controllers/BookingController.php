<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::orderBy('id','ASC')->get();
        return view('welcome', compact('bookings'))
            ->with('i',(request()->input('page',1) - 1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bookings = new Booking();
        $bookings->pickUpAddress = $request->pickUpAddress;
        $bookings->Name = $request->Name;
        $bookings->PhoneNumber = $request->PhoneNumber;
        $bookings->pickUpDate = $request->pickUpDate;
        $bookings->pickUpTime = $request->pickUpTime;
        $bookings->NumberOFLabour = $request->NumberOFLabour;
        $bookings->DropoffAddress = $request->DropoffAddress;
        $bookings->VehicleType = $request->VehicleType;
        $bookings->Price = $request->Price;
        $bookings->comment = $request->comment;
        $bookings->save();
        return response()->json($bookings);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Booking::where('id',$id)->delete();
        return redirect()->back()->with('success','record deleted');
    }
}
