<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Cloth;
use App\TransactionDetail;
use App\TransactionHeader;
use App\User;
use App\Promo;
use Carbon\carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TransactionController extends Controller
{
    public function redirectCart(){
        $user = User::where('email',Session::get('email'))->first();
        $cart = Cart::where('userID',$user->id)->get();
        return view('cart',compact('cart'));
    }
    public function addToCart(Request $req,$id){    
        $user = User::where('email',Session::get('email'))->first();    
        $cart = Cart::where('clothID',$id)->where('userID',$user->id)->first();
        if($cart != null){
            $cart->qty = $cart->qty + 1;
            $cart->save();
        }
        else{
            $newCart = new Cart();
            $newCart->clothID = $id;
            $newCart->userID = $user->id;
            $newCart->qty = 1;
            $newCart->save();
        }
        return redirect('/cloth');
    }
    public function removeFromCart($id){
        $cart = Cart::where('id',$id)->first();
        $cart->delete();
        return redirect('/cart');
    }
    public function checkout(Request $req, $total){
        if($total == 0) return redirect()->back()->withErrors('Nothing to checkout!');

        $promo = null;
        if($req->has('promoCode')){
            if($req->promoCode != ""){
                $promo = Promo::where('promoCode',$req->promoCode)->first();
                if($promo !== null){
                    if(Carbon::now() < $promo->startDate || Carbon::now() > $promo->endDate ){
                        return redirect()->back()->withErrors('Promo Code cannot be used');
                    }
                }
                else{
                    return redirect()->back()->withErrors('Promo does not exist');
                }
            }
        }
        
        $user = User::where('email',Session::get('email'))->first();
        $cart = Cart::where('userID',$user->id)->get();

        $transheader = new TransactionHeader();
        $transheader->userID = $user->id;
        if($promo != null){
            $transheader->promoID = $promo->id;
        }
        $transheader->date = Carbon::now()->toDateTimeString(); 
        if($promo != null){
            $transheader->totalPrice = $total - ($total * ($promo->promoDisc/100));
        }
        else{
            $transheader->totalPrice = $total;
        }
        $transheader->save();
        
        foreach($cart as $c){
            $transdetail = new TransactionDetail();
            $transdetail->transactionHeaderID = $transheader->id;
            $transdetail->clothID = $c->clothes->id;
            $transdetail->qty = $c->qty;
            $transdetail->save();

            $cloth = Cloth::where('id',$c->clothID)->first();
            $cloth->clothStock = $cloth->clothStock - $c->qty;
            $cloth->save();

            $c->delete();
        }
        return redirect('/');
    }
    public function historyPage(){
        $transHeader = TransactionHeader::all();
        $transDetail = TransactionDetail::all();
        return view('transactionHistory',compact('transHeader', 'transDetail'));
    }
}
