<?php

namespace App\Http\Controllers;
use App\Models\Booking;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $bookings = Booking::orderBy('id','DESC')->get();
        return view('home', compact('bookings'))
            ->with('i',(request()->input('page',1) - 1) *5);
    }

    public function store(Request $request)
    {
        $bookings = new Booking();
        $bookings->pickUpAddress = $request->pickUpAddress;
        $bookings->Name = $request->Name;
        $bookings->PhoneNumber = $request->PhoneNumber;
        $bookings->pickUpDate = $request->pickUpDate;
        $bookings->pickUpTime = $request->pickUpTime;
        $bookings->NumberOFLabour = $request->NumberOFLabour;
        $bookings->VehicleType = $request->VehicleType;
        $bookings->Price = $request->Price;
        $bookings->comment = $request->comment;
        $bookings->save();
        return response()->json($bookings);
    }
}
