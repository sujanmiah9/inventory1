<?php

namespace App\Http\Controllers;

use App\Models\Attendence;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Throwable;

class AttendenceController extends Controller
{
    public function dailyAttendence()
    {
        $employee = Employee::select('name', 'photo', 'id')->get();
        return view('attendence.dailyAttendence', compact('employee'));
    }

    public function storeAttendence(Request $request)
    {
        $request->validate([
            'attendence'=>'required',
        ]);

        $date = $request->date;
        $check = DB::table('attendences')->where('date',$date)->first();
        if($check){
                $notification = array(
                    'message'=>'Attendence Already Taken',
                    'alert-type'=>'error',
                );
                return redirect()->back()->with($notification);
            }
        else{
            foreach($request->emp_id as $id)
            {
                $data[] = [
                    'emp_id'=>$id,
                    'attendence'=>$request->attendence[$id],
                    'date'=>$request->date,
                    'edit_date'=>$request->edit_date,
                    'month'=>$request->month
                ];
            }
            $attendence = DB::table('attendences')->insert($data);
            try{
                if($attendence){
                    $notification = array(
                        'message'=>'Successfully Attendence Taken',
                        'alert-type'=>'success',
                    );
                    return redirect()->back()->with($notification);
                }
            }catch(Throwable $exception){
                return redirect()->back();
            }
        }   
    }

    public function allAttendence()
    {  
        $edit_date = date('d_m_y');
        $attendence = DB::table('attendences')->select('edit_date')->groupBy('edit_date')->get();
        return view('attendence.allAtttendence', compact('attendence'));
    }

    public function editAttendence($edit_date)
    {
        $employee = DB::table('attendences')
                    ->join('employees', 'attendences.emp_id', 'employees.id')
                    ->select('employees.name', 'employees.photo', 'attendences.*')
                    ->where('edit_date',$edit_date)
                    ->get();
        return view('attendence.editAttendence',compact('employee'));
    }

    public function updateAttendence(Request $request)
    {
    
        foreach($request->id as $id)
            {
                $data = [
                    'emp_id'=>$id,
                    'attendence'=>$request->attendence[$id],
                    'date'=>$request->date,
                    'edit_date'=>$request->edit_date,
                    'month'=>$request->month
                ];
            }

    }
}
