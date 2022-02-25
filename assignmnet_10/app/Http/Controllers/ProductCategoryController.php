<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Dotenv\Validator;
use Illuminate\Http\Request;


class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = ProductCategory::get();
        return view('Product_Category',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        
        // $this->validate($request,[
        //     'product_category_name' => 'required|min:3',
        //     'product_description' => 'required'
        // ]);

        $product = ProductCategory::create($input);
        if ($product) {
            toastr()->success('Success Message');
            return redirect('Product_Category');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        // $product = ProductCategory::find($id);
        // dd($product);
        $product= ProductCategory::where('product_category_id',$id)->first();
        return view('edit_product',compact('product'));
        // return view('edit_product');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $input = $request->all();
        // $product = ProductCategory::find($request->product_category_id);
        // $product = ProductCategory::find($input['product_category_id']);
        
        //method 2
        unset($input['_token']);
        unset($input['submit']);
        ProductCategory::where('product_category_id',$input['product_category_id'])->update($input);
        toastr()->success('Updated');
        return redirect('Product_Category');

        //metho 3
        // $searchInput['product_category_id'] = $input['product_category_id'];
        // ProductCategory::updateorcreate($searchInput,$input);
        // return redirect('Product_Category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProductCategory::where('product_category_id',$id)->delete();
        toastr()->error('Deleted');
        return redirect('Product_Category');
    }
}
