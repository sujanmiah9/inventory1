<?php

namespace App\Http\Controllers;

use App\Models\Attendence;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

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
            return Redirect()->back()->with('error','Attendence Already Taken');
        }else{
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
            DB::table('attendences')->insert($data);
            return Redirect()->back()->with('message','Successfully Added');
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
                
            //     $update = DB::table('attendences')->where(['date'=>$request->date, 'id'=>$id])->first();
                
            //     $update->update($data);
            }

    }
}
