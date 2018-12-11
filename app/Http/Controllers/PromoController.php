<?php

namespace App\Http\Controllers;

use App\Promo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PromoController extends Controller
{
    public function redirect(){
        $promo = Promo::all();
        return view('Promo/manage',compact('promo'));
    }
    public function insert(){
        return view('Promo/insert');
    }
    public function insertNew(Request $req){
        $validate = Validator::make($req->all(),[
            'promoName' => 'required',
            'promoCode' => array(
                'required',
                'between:10,30',
                'alpha_dash',
                'unique:promo,promoCode'
            ),
            'promoDisc' => array('required','integer','between:1,99'),
            'startDate' => array('required','date'),
            'endDate' => array('required','date')
        ]);

        if($validate->fails() ){
            return redirect() ->back()->withErrors($validate);
        } else {
            $newPromo = new Promo();
            $newPromo->promoName = $req->promoName;
            $newPromo->promoCode = $req->promoCode;
            $newPromo->promoDisc = $req->promoDisc;
            $newPromo->startDate = $req->startDate;
            $newPromo->endDate = $req->endDate;
            $newPromo->save();
            return redirect('/promo');
        }
    }
    public function redirectUpdate($id){
        $promo = Promo::where('id',$id)->first();
        return view('Promo/update',compact('promo'));
    }
    public function updateCurrent(Request $req,$id){
        $validate = Validator::make($req->all(),[
            'promoName' => 'required',
            'promoCode' => array(
                'required',
                'between:10,30',
                'alpha_dash',
                'unique:promo,promoCode,'.$id
            ),
            'promoDisc' => array('required','integer','between:1,99'),
            'startDate' => array('required','date'),
            'endDate' => array('required','date')
        ]);

        if($validate->fails() ){
            return redirect() ->back()->withErrors($validate);
        } else {
            $promo = Promo::where('id',$id)->first();
            $promo->promoName = $req->promoName;
            $promo->promoCode = $req->promoCode;
            $promo->promoDisc = $req->promoDisc;
            $promo->startDate = $req->startDate;
            $promo->endDate = $req->endDate;
            $promo->save();
            return redirect('/promo');
        }
    }
    public function remove($id)
    {
        $promo = Promo::where('id',$id)->first();
        $promo->delete();
        return redirect('/promo');
    }
}
