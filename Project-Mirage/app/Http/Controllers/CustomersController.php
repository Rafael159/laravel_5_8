<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Company;

class CustomersController extends Controller
{
    public function index(){
        $customers = Customer::all();

        return view('customers.index', compact('customers'));
    }

    public function create(){
        $companies = Company::all();

        return view('customers.create', compact('companies'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|unique:customers|min:3',
            'email' => 'required|unique:customers|email',
            'active' => 'required',
            'company_id' => 'required'
        ]);

        Customer::create($data);

        return redirect('customers');
    }

    public function show(Customer $customer){
       
        return view('customers.show', compact('customer'));
    }

    public function edit(Customer $customer){
        return view('customers.edit', compact('customer'));
    }

    public function update(Customer $customer){

    }
}
