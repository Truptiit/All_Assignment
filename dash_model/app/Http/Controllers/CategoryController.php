<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CategoryModel;

class CategoryController extends Controller
{
    public function index(){
        $product = CategoryModel::get();
        return view('category',compact('product'));
        // return view('category');
    }


    public function Category()
    {
        return CategoryModel::with('product')->get();
    }

    public function store(Request $request)
    {
        $product=new CategoryModel;
        $product->category_name=$request->input('category_name');
        $product->save();
        return  redirect('categoryTable');
    }

    public function edit($id)
    {
        // dd($id);
        // $product = ProductCategory::find($id);
        // dd($product);
        $product= CategoryModel::where('category_id',$id)->first();
        return view('edit_category',compact('product'));

    }

    public function update(Request $request)
    {
        $input = $request->all();

        unset($input['_token']);
        unset($input['submit']);
        // dd($input);
        CategoryModel::where('category_id',$input['category_id'])->update($input);
        toastr()->success('Updated');
        return redirect('categoryTable');


    }

    public function destroy($id)
    {
        CategoryModel::where('category_id',$id)->delete();
        toastr()->error('Deleted');
        return redirect('categoryTable');
    }

    public function categoryTable(){
        $product = CategoryModel::get();
        // $product = Subcategory::with('getSubCategory')->get();
        return view('categoryTable',compact('product'));
    }



}
