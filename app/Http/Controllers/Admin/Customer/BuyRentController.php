<?php

namespace App\Http\Controllers\Admin\Customer;

use App\Http\Controllers\Controller;
use App\Models\MessageProperty;
use Illuminate\Http\Request;

class BuyRentController extends Controller
{
    public function index()
    {
        $title = 'Buy or Rent';
        $buy_rent = MessageProperty::paginate(10);
        return view('admin.customer.buy-rent', compact('title', 'buy_rent'));
    }
}
