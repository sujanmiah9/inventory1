<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function create()
    {
        return view('category.createCategory');
    }

    public function store(Request $request)
    {
        $request->validate([
            'cat_name'=>'required',
        ]);

        $data = [
            'cat_name'=>$request->cat_name,
            'description'=>$request->description,
        ];
        Category::create($data);
        return Redirect()->back()->with('message', 'Insert Successfully!');
    }

    public function index()
    {
        $category = Category::select('cat_name','id')->get();
        return view('category.allCategory', compact('category'));
    }

    public function view($id)
    {
        $viewCategory = Category::find($id);
        return view('category.viewCategory', compact('viewCategory'));
    }

    public function destroy($id)
    {
        $deleteCategory = Category::find($id);
        $deleteCategory->delete();
        return Redirect()->back()->with('message', 'Delete Successfully!');
    }

    public function edit($id)
    {  
        $editCategory = Category::find($id);
        return view('category.editCategory', compact('editCategory'));
    }

    public function update(Request $request, $id)
    {
        $updateCategory = Category::find($id);

        $data = [
            'cat_name'=>$request->cat_name,
            'description'=>$request->description,
        ];
        $updateCategory->update($data);
        return Redirect()->route('index.category')->with('message', 'Update Successfully!');
    }
}
