<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Models\CategoryModel;


class SubCategoryController extends Controller
{
    public function index(){
        $product = CategoryModel::get();
        //$product = Subcategory::join('category','category.category_id','subcategories.subcategory_id')->get();
        return view('subcategory',compact('product'));
        //return view('Subcategory');
    }
    public function store(Request $request)
    {
        $product=new Subcategory;
        $product->category_id=$request->input('category_id'); //General error: 1364 Field 'category_id' doesn't have a default value
        $product->subcategory_name=$request->input('subcategory_name');
        $product->save();
        return  redirect('subcategoryTable');
    }



    public function Category()
    {
        return Subcategory::with('product')->get();
    }
// update
    public function edit($id)
    {
        // dd($id);
        // $product = ProductCategory::find($id);
        // dd($product);
        $product= Subcategory::where('subcategory_id',$id)->first();
        return view('edit_subcategory',compact('product'));

    }

    public function update(Request $request)
    {
        $input = $request->all();

        unset($input['_token']);
        unset($input['submit']);
        // dd($input);
        Subcategory::where('subcategory_id',$input['subcategory_id'])->update($input);
        toastr()->success('Subcategory Updated');
        return redirect('subcategoryTable');


    }

    public function destroy($id)
    {
        Subcategory::where('subcategory_id',$id)->delete();
        toastr()->error('Subcategory Deleted');
        return redirect('subcategoryTable');
    }

    public function subcategoryTable(){
        $product = Subcategory::join('category','category.category_id','subcategories.category_id')->get();
        // $product = Subcategory::with('getSubCategory')->get();
        return view('subcategoryTable',compact('product'));
    }

}
