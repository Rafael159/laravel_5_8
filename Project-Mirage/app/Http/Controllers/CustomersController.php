<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomersController extends Controller
{
    public function list(){
        $activeCustomers = Customer::active()->get();
        $inactiveCustomers = Customer::inactive()->get();

        return view('internals.customers', compact('activeCustomers', 'inactiveCustomers'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|unique:customers|min:3',
            'email' => 'required|unique:customers|email',
            'active' => 'required'
        ]);

        Customer::create($data);

        return back();
    }
}
