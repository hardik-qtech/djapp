<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryModel;
use App\Common;

class CategoryController extends Controller
{
    public function add_category()
    {
        return view('category.add');
    }
    public function insert(Request $request)
    {

        $category= new CategoryModel;
        $category->name=$request->name;
        $category->save();

        return redirect()->route('category.table')->with('success','Category Created Successfully');

    }
    public function table()
    {
        return view('category.table');
    }
    public function get_data()
    {
        $categories=CategoryModel::all();
        return view('category.table')->with('categories',$categories);
    }
    public function edit_category($id)
    {
        $category=CategoryModel::find($id);
        return view('category.edit_category')->with('category',$category);
    }
    public function update_category(Request $request)
    {

        $category=CategoryModel::find($request->id);
        $category->name=$request->name;
        $category->save();
        return redirect()->route('category.table')->with('success','Category Updated Successfully');
    }
    public function delete_category($id)
    {
        CategoryModel::find($id)->delete();
        return redirect()->route('category.table')->with('success','Category Deleted Successfully');
    }
}
