<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class PaymentController extends Controller
{
    public function checkout(Course $course){
        return view('payment.checkout', compact('course'));
    }
}
