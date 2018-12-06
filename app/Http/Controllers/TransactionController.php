<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Cloth;
use App\TransactionDetail;
use App\TransactionHeader;
use App\User;
use Carbon\carbon;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function redirectCart(){
        $cart = Cart::where('userID',$userid);
        return view('cart',compact('cart'));
    }
    public function addToCart(Request $req,$id){        
        $cart = Cart::where('clothID',$id)->where('userID',$userid)->first();
        if($cart !== null){
            $cart->qty = $cart->qty + 1;
        }
        else{
            $newCart = new Cart();
            $newCart->clothID = $id;
            $newCart->userID = $userid;
            $newCart->qty = 1;
        }
        return redirect('/cloth');
    }
    public function removeFromCart($id){
        $cart = Cart::where('id',$id)->first();
        $cart->delete();
        return redirect('/cart');
    }
    public function checkout(Request $req){
        $promo = null;
        if($req->has('promoCode')){
            $promo = Promo::where('promoCode',$req->promoCode)->first();
            if($promo !== null){
                //check current date, else return
            }
            else{
                //return false
            }
        }
        
        $cart = Cart::where('userID',$userid);

        $transheader = new TransactionHeader();
        $transheader->userID = $userID;
        if($promo !== null){
            $transheader->promoID = $promo->id;
        }
        $transheader->date = Carbon::now()->toDateTimeString();
        $transheader->save();
        
        $totalPrice = 0;
        foreach($cart as $c){
            $transdetail = new TransactionDetail();
            $transdetail->transactionHeaderID = $transheader->id;
            $transdetail->clothID = $c->clothes->id;
            $transdetail->qty = $c->qty;

            $totalPrice += $c->clothes->clothPrice;
            $cloth = Cloth::where('id',$c->clothID);
            $cloth->clothStock -= $c->qty;
        }
        
        if($promo !== null){
            $transheader->totalPrice = clothPrice - (clothPrice * $promo->promoDisc);
        }
        else{
            $transheader->totalPrice = clothPrice;
        }
        $transheader->save();

        $cart->delete();
        return redirect('/cloth');
    }
}
