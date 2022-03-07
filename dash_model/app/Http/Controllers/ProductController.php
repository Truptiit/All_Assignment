<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Models\CategoryModel;
use App\Models\Subcategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

use App\Traits\CommonTrait;

class ProductController extends Controller
{
    use CommonTrait;

    public function index(){
         $categoryData = $this->getCategory(2);
        // dd($categoryData);
        $product = CategoryModel::get(); //use CategoryModel to get data from category table
        $product2 = Subcategory::get(); //use SubCategoryModel to get data from subcategory table
        //dd($product);
        return view('product',compact('product','product2','categoryData'));
    }

    //  public function Getid($id)
    // {
    //     $category=(DB::table('category')->where('category_id',$id)->get());
    //     return json_encode($category);
    // }
    public function getSubCategory($id){
        //$id=$request->get('cid');
        $sub_category= Subcategory::where('category_id',$id)->get();

        $html='<option value="">Select Sub-Category</option>';
        foreach($sub_category as $sub_categories){
            $html.='<option value=" '.$sub_categories->subcategory_id.' ">'.$sub_categories->subcategory_name.'</option>';
        }
        echo $html;
    }


    public function in(){
        return view('dashboard');
    }

    public function table(){
        //$product = ProductModel::join('category','category.category_id','product.category_id')->get();
        $product = ProductModel::join('subcategories', 'subcategories.subcategory_id', '=', 'product.subcategory_id')
        ->join('category', 'category.category_id', '=', 'subcategories.category_id')
        ->get();
        //$product = ProductModel::with('getcategory')->get(); //relationship
        return view('table',compact('product'));
    }


    public function store(Request $request)
    {
        //$input = $request->all();
        $this->validate($request,[
            'product_name'=>'required'

        ]);

        $product=new ProductModel;
        $product->product_name=$request->input('product_name');
        $product->product_description=$request->input('product_description');
        $product->category_id=$request->input('category_id');
        $product->subcategory_id=$request->input('subcategory_id');
        //dd($product);

        if($request->hasfile('image'))
        {
            $filename=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('uploads',$filename);
            $product->image=$filename;
            // $input['image'] = $filename;
        }

        //$product->product_description=$request->input('product_description');
        $product->save();
        // ProductModel::create($input);
        toastr()->success('Product Inserted');
        return  redirect('table');
    }



    public function edit($id)
    {
        // dd($id);
        $product = ProductModel::find($id);
        // dd($product);
        //$product= ProductModel::where('product_id',$id)->first();
        return view('edit_product',compact('product'));
        // return view('edit_product');
    }

    public function update(Request $request)
    {
        //$product = ProductModel::find($request->product_id);
        // $product = ProductCategory::find($input['product_category_id']);

        //method 2
        $input = $request->all();
        unset($input['_token']);
        unset($input['submit']);
        ProductModel::where('product_id',$input['product_id'])->update($input);
        toastr()->success('Updated');
        return redirect('table');

        //method 3
        // $input = $request->all();
        // $searchInput['product_id'] = $input['product_id'];
        // ProductModel::updateorcreate($searchInput,$input);
        // return redirect('table');


    }

    public function destroy(request $request)
    {
        $product_id=$request->input('product_id');  // store id

        $product= ProductModel::where('product_id',$product_id)->first(); //get id (SELECT * FROM)
        // dd($product);
        $destination='uploads/'.$product->image; // detele image from vs code folder path .$product->image : ->col_name
        if(File::exists($destination)){
                    File::delete($destination);
                }
        // ProductModel::where('product_id',$product_id)->delete();
        $product->delete();
        toastr()->error('Deleted');
        return redirect('table');
    }

    // public function destroy($id){
    //     // $product=ProductModel::find($id);
    //     // dd($product);

    //     $product= ProductModel::where('product_id',$id)->first();
    //     //dd($product);
    //     $destination='uploads/'.$product->image; // detele image from vs code folder path .$product->image : ->col_name
    //     if(File::exists($destination)){
    //         File::delete($destination);
    //     }
    //     ProductModel::where('product_id',$id)->delete();   //delete record from table & also image from database
    //     toastr()->error('Deleted');
    //     return redirect('table');
    // }

    public function upload(Request $request){
        // echo "<pre>";
        // print_r($request->all());
        $filename = time()."-image.".$request->file('image')->getClientOriginalExtension();

        echo $request->file('image')->storeas('uploads',$filename);
    }
    public function changeStatus(Request $request)
    {
        //$input = $request->all();
        $product=new ProductModel;
        $product->status=$request->input('status');

        // $product = ProductModel::find($request->product_id);
        // dd($product);
        // update query
        //$product->status = $request->status;
        dd($product);
        $product->save();

        return response()->json(['success'=>'Status change successfully.']);
    }
}
