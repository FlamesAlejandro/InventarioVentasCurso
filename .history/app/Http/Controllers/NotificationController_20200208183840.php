<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification;

class NotificationController extends Controller
{
    public function get(){

        //return Notification::all();

        $unreadnotifications = Auth::user()->unreadnotifications;
        $fechaActual = date('Y-m-d');
        foreach ($unreadnotifications as $notification){
            if ($fechaActual != $notification->created_at->toDateString()){
                $notification->markAsRead();
            }
        }

        return Auth::user()->notifications;

    }
}
