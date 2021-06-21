<?php

namespace App\Http\Controllers;

use App\Models\AboutUs\EmployeeList;
use App\Models\admin\account;
use App\Notifications\MessNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class NotificationController extends Controller
{
    public function sendNotification($status, $ContentID, $ContentName){
        $dataNoti = account::where('Role', '=', 2)->get();
        $empID = account::where('id','=', session('LoggedAdmin'))->first()->EmployeeID;
        $empName = EmployeeList::where('EmployeeID', '=', $empID)->first()->EmpName;
        $Project_Notification = [
            'EmpID' => $empID,
            'EmpName' => $empName,
            'Status' => $status,
            'ContentID' => $ContentID,
            'ContentName' => $ContentName,
        ];
        Notification::send($dataNoti, new MessNotification($Project_Notification));
    }

    public function renderNotification(){
        $empID = account::where('id','=', session('LoggedAdmin'))->first()->EmployeeID;
        $dataNoti = account::where('EmployeeID', '=', $empID)->first();
        return $dataNoti;
    }
}
