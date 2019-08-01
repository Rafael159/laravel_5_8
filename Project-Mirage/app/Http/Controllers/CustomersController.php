<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomersController extends Controller
{
    public function list(){
        $customers = Customer::all();

        return view('internals.customers',[
            'customers' => $customers
        ]);
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|unique:customers|min:3',
            'email' => 'required|unique:customers|email'
        ]);

        $customer = new Customer();
        $customer->name = request('name');
        $customer->email = request('email');
        $customer->save();

        return back();
    }
}
