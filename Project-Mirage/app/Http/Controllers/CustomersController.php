<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list(){
        $customers  = [
            'John Doe',
            'Jane Doe',
            'Bob the Builder',
            'Caleb the Kid'
        ];

        return view('internals.customers',[
            'customers' => $customers,
        ]);
    }
}
