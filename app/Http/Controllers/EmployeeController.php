<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function create()
    {
        return view('employee.createEmployee');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'city'=>'required',
            'nid'=>'required',
            'salary'=>'required',
            'address'=>'required',
        ]);
        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'experiense'=>$request->experiense,
            'nid'=>$request->nid,
            'salary'=>$request->salary,
            'vacation'=>$request->vacation,
            'city'=>$request->city,
            'address'=>$request->address
        ];
        $img =$request-> file('photo');
        if($img){
            $img_name = uniqid();
            $ext = $img->getClientOriginalExtension();
            $img_full_name = $img_name.'.'.$ext;

            $img_path = 'upload/';
            $img_url = $img_path.$img_full_name;
            $img->move($img_path,$img_full_name);
            $data['photo']=$img_url;
            Employee::create($data);
            return Redirect()->back()->with('message','Insert Successfull!');
        }else{
            Employee::create($data);
            return Redirect()->back()->with('message','Insert Successfull!');
        }
    }

    public function index()
    {
        $employee = Employee::all();
        return view('employee.allemployee',compact('employee'));
    }

    public function view($id)
    {
        $viewEmployee = Employee::find($id);
        return view('employee.viewEmployee', compact('viewEmployee'));
    }

    public function destroy($id)
    {
        $deleteEmployee = Employee::find($id);
        $deleteEmployee->delete();
        return Redirect()->route('index.employee')->with('message','Delete Successfull!');
    }

    public function edit($id)
    {
        $editEmployee = Employee::find($id);
        return view('employee.editEmployee', compact('editEmployee'));
    }

    public function update(Request $request, $id)
    {   
        $updateEmployee = Employee::find($id);
        $photo = $updateEmployee->photo;
        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'experiense'=>$request->experiense,
            'nid'=>$request->nid,
            'salary'=>$request->salary,
            'vacation'=>$request->vacation,
            'city'=>$request->city,
            'address'=>$request->address
        ];
        $img =$request-> file('photo');
        if($img){
            @unlink($photo);
            $img_name = uniqid();
            $ext = $img->getClientOriginalExtension();
            $img_full_name = $img_name.'.'.$ext;

            $img_path = 'upload/';
            $img_url = $img_path.$img_full_name;
            $img->move($img_path,$img_full_name);
            $data['photo']=$img_url;
            $updateEmployee->update($data);
            return Redirect()->route('index.employee')->with('message','Update Successfull!');
        }else{
            $updateEmployee->update($data);
            return Redirect()->route('index.employee')->with('message','Update Successfull!');
        }
    }
}
