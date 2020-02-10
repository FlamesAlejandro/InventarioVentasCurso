<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification;

class NotificationController extends Controller
{
    public function get(){

        //return Notification::all();

        return Auth::user()->notifications;

    }
}
