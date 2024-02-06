<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\category;
use App\Models\product_register;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class productController extends Controller
{
    //
    function show_productform()
    {
        $category = category::all();
        return view('admin.product_form', compact('category'));
    }



    function insert_product(Request $request)
    {

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = time() . '_' . $file->getClientOriginalExtension();
            $file->move(public_path("admin/productimages/"), $imageName);





            $data = new product_register([
                'image' => $imageName,
                "name" => $request->name,
                "slug" => $request->slug,
                "describtion" => $request->describtion,
                "small_description" => $request->small_description,
                "orignal_price" => $request->orignal_price,
                "selling_price" => $request->selling_price,
                "status" => $request->status == true ? '1' : '0',
                "trending" => $request->trending == true ? '1' : '0',
                "cate_id" => $request->cate_id,
                "qty" => $request->qty,
                "tax" => $request->tax,
                "meta_title" => $request->meta_title,
                "meta_keywords" => $request->meta_keywords,
                "meta_description" => $request->meta_description,


            ]);
            $data->save();
        }
        return back()->with('status', 'Product added successful');
    }



    public function show_product()
    {

        $product = product_register::all();
        return view('admin.products', compact('product'));
    }
    function get_Product($id)
    {
        $category = category::all();
        $product = product_register::where('id', $id)->get();
        return view('admin.update_product', compact('product', 'category'));
    }







    function  update_product(Request $request, $id)
    {


        $data = product_register::find($id);
        $data->name = $request->input('name');
        $data->small_description = $request->input('small_description');
        $data->selling_price = $request->input('selling_price');
        $data->orignal_price = $request->input('orignal_price');
        $data->tax = $request->input('tax');
        $data->qty = $request->input('qty');
        $data->cate_id = $request->input('cate_id');
        $data->slug = $request->input('slug');
        $data->trending = $request->input('trending') == true ? '1' : '0';
        $data->status = $request->input('status') == true ? '1' : '0';
        $data->meta_title = $request->input('meta_title');
        $data->meta_description = $request->input('meta_description');
        $data->meta_keywords = $request->input('meta_keywords');

        if ($request->hasFile('image')) {
            $destination = 'admin/productimages/' . $data->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $imageName = time() . '.' . $extension;
            $file->move(("admin/productimages/"), $imageName);
            $data->image = $imageName;
        }
        $data->save();
        return redirect('/show_product')->with('status', 'Product updated successful');
    }
    function delete_Product($id)
    {
        $product = product_register::find($id);
        $product->delete();
        return redirect('/show_product')->with('status', 'product deleted successful');
    }




    function addtocart(Request $request)
    {
        if ($request->session()->has('user')) {
            return "show_product";
        } else {
            return redirect('/login');
        }
    }
   
}
