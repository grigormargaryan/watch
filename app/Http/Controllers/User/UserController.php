<?php

namespace App\Http\Controllers\User;

use App\Color;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use \Flash;
use Illuminate\Support\Facades\Session;
use App\SubCategorys;
use App\ProductsImages;
use App\Products;
use App\Order;
use App\Category;
use \Mapper;
use Illuminate\Cookie\CookieJar;

class UserController extends Controller
{

    public function Welcome(){
        $categorys = Category::all();
        $colors = Color::all();
        $products = Products::with('projectsImg')->where('quantity', '>', 0)->paginate(2);
        return view('welcome', compact('categorys', 'products', 'colors'));
    }

    public function WelcomeAjax(Request $request){
        if($request->ajax()){
            $products = Products::with('projectsImg');
            if(count($request->data) > 0){
                if($request->data['name']){
                    $name = $request->data['name'];
                    $products = $products->where('name', 'LIKE', "%$name%");
                }
                if($request->data['color']){
                    $products = $products->whereIn('color_id', $request->data['color']);
                }
                if($request->data['category'] !== 'all' && $request->data['category']){
                    $products = $products->where('category_id', $request->data['category']);
                }
                if($request->data['lowerPrice']){
                    $products = $products->where('price', '>=', $request->data['lowerPrice']);
                }
                if($request->data['higherPrice']){
                    $products = $products->where('price', '<=', $request->data['higherPrice']);
                }
                if($request->data['sort']){
                    if($request->data['sort'] == 'DESC'){
                        $products = $products->orderBy('price','desc');
                    }else{
                        $products = $products->orderBy('price','asc');
                    }
                }
            }
            $products = $products->paginate(2);
            return view('user.welcomepagination', compact('products'))->render();
        }
    }

    public function contactUs(){
        Mapper::map(53.381128999999990000, -1.470085000000040000);
        return view('contact');
    }
    public function aboutUs(){

        return view('about');
    }

    public function sendContactMessage (Request $request) {
            $this->validate($request, [
                'email' => 'required|email|max:255',
            ]);
        Mail::send('contact.contact', ['request' => $request], function ($m) use($request) {
                    $m->from('margaryanmgrigor@gmail.com','GreenLad');
                    $m->to('margaryanmgrigor@gmail.com')->subject('New Contact');
                });

                return redirect()->to('/contact')->with(Session::flash('message_successfully', "Please check your email address"));
    }

    public function product ($id) {
        $products = Products::with('projectsImg')
            ->with('belt')
            ->with('category')
            ->with('color')
            ->where('id',$id)->first();
        $allproducts = Products::with('projectsImg')->where('id','!=', $id )->get();
        return view('product', compact('products','allproducts'));
    }

    public function getBasket () {
        return view('basket');
    }

    public function addBasket (Request $request,CookieJar $cookieJar) {
        $product = Products::with('projectsImg')->whereIn('id', $request->id)->get();
        return response()->json($product);
    }

    public function addHeart (Request $request,CookieJar $cookieJar) {
        $product = Products::with('projectsImg')->whereIn('id', $request->id)->get();
        return response()->json($product);
    }

    public function addOrder (Request $request) {
        $order = new Order();
        $order->name = $request->data['info'][0];
        $order->phone = $request->data['info'][1];
        $order->address = $request->data['info'][2];
        $order->products = $request->data['info'][3];
        if($request->data['info'][4]){
            $order->description = $request->data['info'][4];
        }
        $order->save();

        foreach ($request->data['product'] as $product){
            $prod = Products::where('id', $product);
            if($prod && ($prod->first()->quantity > 0)){
                $prod->update([
                   'quantity' => $prod->first()->quantity - 1
                ]);
            }else{
                return response()->json($err = 'Պատվերի ընթացքում առաջացել է սխալ! Խնդրում եմ կապ հաստատել մեզ հետ');
            }
        }

        $emails = ['margaryanmgrigor@gmail.com', 'grigor.margaryan89@mail.ru'];

        Mail::send('email.order', ['request' => $request], function ($m) use($emails) {
            $m->from('margaryanmgrigor@gmail.com','2ntOne');
            $m->to($emails)->subject('New Order');
        });

        return response()->json(true);

    }

}
