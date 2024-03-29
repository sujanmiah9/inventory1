<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Throwable;

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
            $supplier = Supplier::create($data);
            try{
                if($supplier){
                    $notification = array(
                        'message'=>'Supplier Added Successfull!',
                        'alert-type'=>'success',
                    );
                    return Redirect()->back()->with($notification);
                }
            }catch(Throwable $exception){
                $notification = array(
                    'message'=>'Something is Wrong !!',
                    'alert-type'=>'error',
                );
                return Redirect()->back()->with($notification);
            }
        }else{
            $supplier = Supplier::create($data);
            try{
                if($supplier){
                    $notification = array(
                        'message'=>'Supplier Added Successfull!',
                        'alert-type'=>'success',
                    );
                    return Redirect()->back()->with($notification);
                }
            }catch(Throwable $exception){
                $notification = array(
                    'message'=>'Something is Wrong',
                    'alert-type'=>'error',
                );
                return Redirect()->back()->with($notification);
            }
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
        $delete = $deleteSupplier->delete();
        if($delete){
            $notification = array(
                'message'=>'Data Deleted Successfull!',
                'alert-type'=>'success',
            );
            return Redirect()->back()->with($notification);
        }
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
            @unlink($oldphoto);
            $img_name = uniqid();
            $ext = $img->getClientOriginalExtension();
            $img_full_name = $img_name.'.'.$ext;

            $img_path = 'upload/';
            $img_url = $img_path.$img_full_name;
            $img->move($img_path,$img_full_name);
            $data['photo']=$img_url;
            $update = $updateSupplier->update($data);
            try{
                if($update){
                    $notification = array(
                        'message'=>'Data Update Successfull!',
                        'alert-type'=>'success',
                    );
                    return Redirect()->route('index.supplier')->with($notification);
                }
            }catch(Throwable $exception){
                $notification = array(
                    'message'=>'Something is Wrong!',
                    'alert-type'=>'error',
                );
                return Redirect()->back()->with($notification);
            }
        }else{
            $update = $updateSupplier->update($data);
            try{
                if($update){
                    $notification = array(
                        'message'=>'Data Update Successfull!',
                        'alert-type'=>'success',
                    );
                    return Redirect()->route('index.supplier')->with($notification);
                }
            }catch(Throwable $exception){
                $notification = array(
                    'message'=>'Something is Wrong!',
                    'alert-type'=>'error',
                );
                return Redirect()->back()->with($notification);
            }
        }
    }
}
