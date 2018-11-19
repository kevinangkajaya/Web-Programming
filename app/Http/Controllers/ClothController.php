<?php

namespace App\Http\Controllers;

use App\Cloth;
use Illuminate\Http\Request;

class ClothController extends Controller
{
    public function redirect(){
        $cloth = Cloth::all();
        return view('Cloth/manage',compact('cloth'));
    }
    public function insert(){        
        $category = Category::all();
        return view('Cloth/insert',compact('category'));
    }
    public function insertNew(Request $req){
        $validate = Validator::make($req->all(),[
            'clothCategory' => 'required',
            'clothName' => array('required'),
            'clothPrice' => array('required','integer','min:10000'),
            'clothDescription' => 'required',
            'clothStock' => array('required','integer','min:1'),
            'clothImage' => array('required','image','size:5000')
        ]);

        if($validate->fails() ){
            return redirect() ->back()->withErrors($validate);
        } else {
            $image = $req->clothImage;
            $image->move('images/clothing', $image->getClientOriginalname());

            $newCloth = new Cloth();
            $newCloth->clothCategory = $req->clothCategory;
            $newCloth->clothName = $req->clothName;
            $newCloth->clothPrice = $req->clothPrice;
            $newCloth->clothDescription = $req->clothDescription;
            $newCloth->clothStock = $req->clothStock;
            $newCloth->clothDirectory = $image->getClientOriginalname();
            $newCloth->save();
            return redirect('/cloth');
        }
    }
    public function redirectUpdate($id){
        $cloth = Cloth::where('id',$id)->first();
        $category = Category::all();
        return view('Cloth/update',compact('cloth','category'));
    }
    public function updateCurrent(Request $req,$id){
        $validate = Validator::make($req->all(),[
            'clothCategory' => 'required',
            'clothName' => array('required'),
            'clothPrice' => array('required','integer','min:10000'),
            'clothDescription' => 'required',
            'clothStock' => array('required','integer','min:1'),
            'clothImage' => array('required','image','size:5000')
        ]);

        if($validate->fails() ){
            return redirect()->back()->withErrors($validate);
        } else {
            $cloth = Cloth::where('id',$id)->first();

            $image = $req->clothImage;
            $image->move('images/clothing', $image->getClientOriginalname());

            $cloth->clothCategory = $req->clothCategory;
            $cloth->clothName = $req->clothName;
            $cloth->clothPrice = $req->clothPrice;
            $cloth->clothDescription = $req->clothDescription;
            $cloth->clothStock = $req->clothStock;
            $cloth->clothDirectory = $image->getClientOriginalname();
            $cloth->save();
            return redirect('/cloth');
        }
    }
    public function remove($id)
    {
        $cloth = Cloth::where('id',$id)->first();
        $cloth->delete();
        return redirect('/cloth');
    }
    public function search(Request $request){
        $query = $request->get('name');
        $cloth = Cloth::where('clothName', 'LIKE', '%'.$query.'%')->orWhere('clothDescription', 'LIKE', '%'.$query.'%')->paginate(8);
        // $cloth = Cloth::where('clothName', 'LIKE', '%'.$query.'%')->with('categories')->orWhere('clothDescription', 'LIKE', '%'.$query.'%')->with('categories')->paginate(8);
        $cloth->appends($request->only('name'));

        return view('Cloth/manage',compact('cloth'));
    }
}
