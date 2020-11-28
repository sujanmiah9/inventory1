<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SupplierController extends Controller
{
    public function create()
    {
        return view('supplier.createSupplier');
    }

    public function store(Request $request)
    {
        $request->validate([
            'sup_name'=>'required',
            'email'=>'required|unique:suppliers',
            'phone'=>'required',
            'address'=>'required',
            'accountNumber'=>'required',
            'accountHolder'=>'required',
            'bankName'=>'required',
            'bankBranch'=>'required',
            'type'=>'required',
        ]);

        $data = [
            'sup_name'=>$request->sup_name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'shopName'=>$request->shopName,
            'city'=>$request->city,
            'accountNumber'=>$request->accountNumber,
            'accountHolder'=>$request->accountHolder,
            'bankName'=>$request->bankName,
            'bankBranch'=>$request->bankBranch,
            'type'=>$request->type,
            'address'=>$request->address,
        ];
        $img =$request->file('photo');
        if($img){
            $img_name = uniqid();
            $ext = $img->getClientOriginalExtension();
            $img_full_name = $img_name.'.'.$ext;

            $img_path = 'upload/';
            $img_url = $img_path.$img_full_name;
            $img->move($img_path,$img_full_name);
            $data['photo']=$img_url;
            Supplier::create($data);
            return Redirect()->back()->with('message','Insert Successfull!');
        }else{
            Supplier::create($data);
            return Redirect()->back()->with('message','Insert Successfull!');
        }
    }

    public function index()
    {
        $suppliers = Supplier::all();
        return view('supplier.allSupplier', compact('suppliers'));
    }

    public function view($id)
    {
        $viewSupplier = Supplier::find($id);
        return view('supplier.viewSupplier', compact('viewSupplier'));
    }

    public function destroy($id)
    {
        $deleteSupplier = Supplier::find($id);
        $deleteSupplier->delete();
        return Redirect()->back()->with('message', 'Delete Successfull!');
    }

    public function edit($id)
    {
        $editSupplier = Supplier::find($id);
        return view('supplier.editSupplier', compact('editSupplier'));
    }

    public function update(Request $request, $id)
    {
        $updateSupplier = Supplier::find($id);
        $oldphoto = $updateSupplier->photo;

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
            'type'=>$request->type,
            'address'=>$request->address,
        ];
        $img =$request->file('photo');
        if($img){
            @unlink($oldphoto);
            $img_name = uniqid();
            $ext = $img->getClientOriginalExtension();
            $img_full_name = $img_name.'.'.$ext;

            $img_path = 'upload/';
            $img_url = $img_path.$img_full_name;
            $img->move($img_path,$img_full_name);
            $data['photo']=$img_url;
            $updateSupplier->update($data);
            return Redirect()->route('index.supplier')->with('message','Update Successfull!');
        }else{
            $updateSupplier->update($data);
            return Redirect()->route('index.supplier')->with('message','Update Successfull!');
        }
    }
}
