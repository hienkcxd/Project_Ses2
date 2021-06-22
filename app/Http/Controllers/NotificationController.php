<?php

namespace App\Http\Controllers;

use App\Models\AboutUs\EmployeeList;
use App\Models\admin\account;
use App\Notifications\MessNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class NotificationController extends Controller
{
    //$empID giúp chỉ lấy các đối tượng notification của đối tượng đang đăng nhập.
    //Khoa chinh cua doi tương nhan notification duoc dung lam notifiable_id cua bảng notifications
    public function sendNotification($status, $ContentID, $ContentName){
        $dataNoti = account::where('Role', '=', 2)->get();
        $empID = account::where('id','=', session('LoggedAdmin'))->first()->EmployeeID;
        $empName = EmployeeList::where('EmployeeID', '=', $empID)->first()->EmpName;
        $Detail = [
            'EmpID' => $empID,
            'EmpName' => $empName,
            'Status' => $status,
            'ContentID' => $ContentID,
            'ContentName' => $ContentName,
        ];
        Notification::send($dataNoti, new MessNotification($Detail));
    }

    public function renderNotification(){

        $empID = account::where('id','=', session('LoggedAdmin'))->first()->EmployeeID;
        $dataNoti = account::where('EmployeeID', '=', $empID)->first();
        return $dataNoti;
    }

    public function markAsRead(Request $request){
        $Notification_ID = $request->route()->parameter('ID');
        $empID = account::where('id','=', session('LoggedAdmin'))->first()->EmployeeID;
        $dataNoti = account::where('EmployeeID', '=', $empID)->first();
        foreach ($dataNoti->unreadNotifications as $value){
            if($Notification_ID == $value->id){
                $value->markAsRead();
            }
        }
        return redirect()->back();
    }

    public function markReadAll(){
        $empID = account::where('id','=', session('LoggedAdmin'))->first()->EmployeeID;
        $dataNoti = account::where('EmployeeID', '=', $empID)->first();
        $dataNoti->unreadNotifications->markAsRead();
        return redirect()->back();
    }

}
