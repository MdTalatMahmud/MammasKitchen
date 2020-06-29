<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index(){
        $reservations = Reservation::all();
        return view('admin.reservation.index', compact('reservations'));
    }
}
