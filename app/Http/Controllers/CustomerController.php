<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CustomerController extends Controller
{
    public function create(){
        return view('customer.create');
    }

    public function index()
    {
        $customer = Customer::select('name', 'phone', 'address', 'city', 'photo','id')->get();
        return view('customer.index', compact('customer'));
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'shopName'=>'required',
            'city'=>'required',
            'accountNumber'=>'required',
            'accountHolder'=>'required',
            'bankName'=>'required',
            'bankBranch'=>'required',
            'address'=>'required',
        ]);

        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'shopName'=>$request->shopName,
            'city'=>$request->city,
            'accountNumber'=>$request->accountNumber,
            'accountHolder'=>$request->accountHolder,
            'bankName'=>$request->bankName,
            'bankBranch'=>$request->bankBranch,
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
            Customer::create($data);
            return Redirect()->back()->with('message','Insert Successfull!');
        }else{
            Customer::create($data);
            return Redirect()->back()->with('message','Insert Successfull!');
        }
    }

    public function view($id)
    {
        $viewCustomer = Customer::find($id);
        return view('customer.view', compact('viewCustomer'));
    }

    public function destroy($id)
    {
        $deleteCustomer = Customer::find($id);
        $deleteCustomer->delete();
        return Redirect()->back()->with('message','delete Successfull!');
    }

    public function edit($id)
    {
        $editCustomer = Customer::find($id);
        return view('customer.edit',compact('editCustomer'));
    }
    public function update(Request $request, $id)
    {
        $updateCustomer = Customer::find($id);
        $oldphoto = $updateCustomer->photo;
        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'shopName'=>$request->shopName,
            'city'=>$request->city,
            'accountNumber'=>$request->accountNumber,
            'accountHolder'=>$request->accountHolder,
            'bankName'=>$request->bankName,
            'bankBranch'=>$request->bankBranch,
            'address'=>$request->address
        ];
        $img =$request-> file('photo');
        if($img){
            @unlink($oldphoto);
            $img_name = uniqid();
            $ext = $img->getClientOriginalExtension();
            $img_full_name = $img_name.'.'.$ext;

            $img_path = 'upload/';
            $img_url = $img_path.$img_full_name;
            $img->move($img_path,$img_full_name);
            $data['photo']=$img_url;
            $updateCustomer->update($data);
            return Redirect()->route('index.customer')->with('message','update Successfull!');
        }else{
            $updateCustomer->update($data);
            return Redirect()->route('index.customer')->with('message','upate Successfull!');
        }
    }
}
