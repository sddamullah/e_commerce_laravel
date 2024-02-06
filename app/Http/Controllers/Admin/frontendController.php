<?php

namespace App\Http\Controllers\Admin;

use App\Models\category;
use App\Models\product_register;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class frontendController extends Controller
{
    //
    public function index()
    {
        return view('admin.dashboard');
    }



    function t_category()
    {
        $category = category::where('status', '0')->get();
        return view('frontend.trendingcategory', compact('category'));
    }
    function iindex()
    {
        $category = category::where('popular', '1')->get();
        $product = product_register::where('trending', '1')->take(15)->get();
        return view('frontend.index', compact('product', 'category'));
    }

    function view_category($slug)
    {
        if (category::where('slug', $slug)->exists()) {
            $category = category::where('slug', $slug)->first();
            $product = product_register::where('cate_id', $category->id)->where('status', '0')->get();
            return view('frontend.categoryproduct', compact('product', 'category'));
        } else {
            return redirect('/')->with('status', 'No slug exists');
        }
    }


    // function view_product($cate_slug, $pro_slug)
    // {

    //     if (category::where('slug', $cate_slug)->exists()) {

    //         if (product_register::where('slug', $pro_slug)->exists()) {
    //             product_register::where('slug', $pro_slug)->first();
    //             return view('frontend.viewproduct', compact('product'));
    //         } else {
    //             return redirect('/')->with('status', 'No slug exists');
    //         }
    //     } else {
    //         return redirect('/')->with('status', 'No slug exists');
    //     }
    // }
    function view_product($id)
    {
        $product = product_register::where('id', $id)->get();
        return view('frontend.viewproduct', compact('product'));
    }
}
