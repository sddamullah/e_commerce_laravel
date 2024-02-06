<?php

namespace App\Http\Controllers\Admin;



use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class categoryController extends Controller
{
    //
    function show_categoryform()
    {
        return view('admin.category_form');
    }
    function insert_category(request $request)
    {

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = time() . '_' . $file->getClientOriginalExtension();
            $file->move(public_path("admin/categoryimages/"), $imageName);





            $data = new category([
                'image' => $imageName,
                "name" => $request->name,
                "slug" => $request->slug,
                "describtion" => $request->describtion,
                "status" => $request->status == true ? '1' : '0',
                "popular" => $request->popular == true ? '1' : '0',

                "meta_title" => $request->meta_title,
                "meta_kewords" => $request->meta_kewords,
                "meta_descrip" => $request->meta_descrip,


            ]);
            $data->save();
        }
        return back()->with('status', 'Category added successful');
    }

    function show_category()
    {
        $catgory = category::all();
        return view('admin.categories', compact('catgory'));
    }






    function delete_category($id)
    {
        $category = category::find($id);
        $category->delete();
        return redirect('/show_category')->with('status', 'Category deleted successful');
    }
    function get_category($id)
    {
        $category = category::where('id', $id)->get();

        return view('admin.update_category', compact('category'));
    }
    function update_catagory(Request $request, $id)
    {


        $data = category::find($id);
        $data->name = $request->input('name');
        $data->slug = $request->input('slug');
        $data->describtion = $request->input('describtion');
        $data->popular = $request->input('popular') == true ? '1' : '0';
        $data->status = $request->input('status') == true ? '1' : '0';
        $data->meta_title = $request->input('meta_title');
        $data->meta_descrip = $request->input('meta_descrip');
        $data->meta_kewords = $request->input('meta_kewords');

        if ($request->hasFile('image')) {
            $destination = 'admin/categoryimages/' . $data->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $imageName = time() . '.' . $extension;
            $file->move(("admin/categoryimages/"), $imageName);
            $data->image = $imageName;
        }
        $data->save();
        return redirect('/show_category')->with('status', 'Category updated successful');
    }


  
}
