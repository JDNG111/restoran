<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food\Food;
use App\Models\Admin\Admin;
use App\Models\Food\Booking;
use App\Models\Food\Checkout;
use Illuminate\Support\Facades\Hash;
use File;

class AdminsController extends Controller
{
    public function viewLogin(){
        return view('admins.login');
    }

    public function checkLogin(Request $request){
        $remember_me = $request->has('remember_me') ? true : false;

        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {
            return redirect()->route('admins.dashboard');
        }
        return redirect()->back()->with(['error' => 'error logging in']);
    }

    public function index(){
    $foodCount = Food::count();
    $checkoutCount = Checkout::count(); 
    $bookingCount = Booking::count(); 
    $adminCount = Admin::count(); 
    
    // Datos para actividades recientes
    $recentBookings = Booking::latest()->take(5)->get();
    $recentOrders = Checkout::latest()->take(5)->get();
    
    return view("admins.index", compact(
        'foodCount', 
        'checkoutCount', 
        'bookingCount', 
        'adminCount',
        'recentBookings',
        'recentOrders'
    ));
}

    /**
     * Logout para administradores
     */
    public function logout(Request $request)
    {
        // Cierra la sesión del guard 'admin'
        Auth::guard('admin')->logout();
        
        // Invalida la sesión actual
        $request->session()->invalidate();
        
        // Regenera el token CSRF
        $request->session()->regenerateToken();
        
        // Redirige al login de admin
        return redirect()->route('view.login');
    }


    public function allAdmins(){
        $admins = Admin::select()->orderBy('id', 'desc')->get();


        return view("admins.alladmins", compact('admins'));
    }

    public function createAdmins(){

        return view("admins.createadmins");
    }

    public function storeAdmins(Request $request){

    Request()->validate([
        "name" => "required|max:40",
        "email" => "required|max:40",
        "password" => "required|max:80",
       ]);

        $admins =Admin::create([
      "name" => $request->name,
      "email" => $request->email,
      "password" => Hash::make($request->password),
    ]);

if ($admins){
   return redirect()->route('admins.all')->with(['success'=>'Admin created succesfully']);
}
    }

    public function allOrders(){
        $orders = Checkout::select()->orderBy('id', 'desc')->get();


        return view("admins.allorders", compact('orders'));
    }

    public function editOrders($id){

$order=Checkout::find($id);
        return view("admins.editorders", compact('order'));
    }

public function updateOrders(Request $request, $id){

$order=Checkout::find($id);
$order->update($request->all());
        if ($order){
   return redirect()->route('orders.all')->with(['success'=>'Order Updated succesfully']);
}
    }

     public function deleteOrders($id){
        $order = Checkout::find($id);
$order->delete();

         if ($order){
   return redirect()->route('orders.all')->with(['delete'=>'Order Deleted succesfully']);
}
    }

    public function allBookings(){
        $bookings = Booking::select()->orderBy('id', 'desc')->get();


        return view("admins.allbookings", compact('bookings'));
    }


    public function editBookings($id){

$booking=Booking::find($id);
        return view("admins.editbookings", compact('booking'));
    }

    public function updateBookings(Request $request, $id){

$booking=Booking::find($id);
$booking->update(["status"=>$request->status]);
        if ($booking){
   return redirect()->route('bookings.all')->with(['update'=>'Booking Updated succesfully']);
}
    }

    public function deleteBookings($id){
        $booking = Booking::find($id);
$booking->delete();

         if ($booking){
   return redirect()->route('bookings.all')->with(['delete'=>'Booking Deleted succesfully']);
}
    }
    
//foods
 public function allFoods(){
       $foods = Food::select()->orderBy('id', 'desc')->get();


        return view("admins.allfoods", compact('foods'));
    }

    public function createFood(){


        return view("admins.createfoods");
    }


    public function storeFood(Request $request){

    // Request()->validate([
    //     "name" => "required|max:40",
    //     "email" => "required|max:40",
    //     "password" => "required|max:80",
    //    ]);

 $destinationPath = 'assets/img/';
        $myimage = $request->image->getClientOriginalName();
        $request->image->move(public_path($destinationPath), $myimage);

        $foods =Food::create([
      "name" => $request->name,
      "price" => $request->price,
      "description" => $request->description,
      "category" => $request->category,
      "image" => $myimage
    ]);

if ($foods){
   return redirect()->route('all.foods')->with(['success'=>'Food Item created succesfully']);
}
    }

    public function deleteFood($id){
       $food = Food::find($id);
 if(File::exists(public_path('assets/img/' . $food->image))){
            File::delete(public_path('assets/img/' . $food->image));
        }else{
            //dd('File does not exists.');
        }

        $food->delete();

         if ($food){
   return redirect()->route('all.foods')->with(['delete'=>'Food Item Deleted Succesfully']);
}
    }

}