<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function redirect(){
        $category = Category::all();
        return view('Category/manage',compact('category'));
    }
    public function insert(){
        return view('Category/insert');
    }
    public function insertNew(Request $req){
        $validate = Validator::make($req->all(),[
            'categoryName' => 'required',
            'categoryGender' => array('required','in:Male,Female,Unisex'),
            'categoryAge' => array('required','integer','min:1')
        ]);

        if($validate->fails() ){
            return redirect() ->back()->withErrors($validate);
        } else {
            $newCategory = new Category();
            $newCategory->categoryName = $req->categoryName;
            $newCategory->categoryGender = $req->categoryGender;
            $newCategory->categoryAge = $req->categoryAge;
            $newCategory->save();
            return redirect('/category');
        }
    }
    public function redirectUpdate($id){
        $category = Category::where('id',$id)->first();
        return view('Category/update',compact('category'));
    }
    public function updateCurrent(Request $req,$id){
        $validate = Validator::make($req->all(),[
            'categoryName' => 'required',
            'categoryGender' => array('required','in:Male,Female,Unisex'),
            'categoryAge' => array('required','integer','min:1')
        ]);

        if($validate->fails() ){
            return redirect()->back()->withErrors($validate);
        } else {
            $category = Category::where('id',$id)->first();
            $category->categoryName = $req->categoryName;
            $category->categoryGender = $req->categoryGender;
            $category->categoryAge = $req->categoryAge;
            $category->save();
            return redirect('/category');
        }
    }
    public function remove($id)
    {
        $category = Category::where('id',$id)->first();
        $category->delete();
        return redirect('/category');
    }
}
