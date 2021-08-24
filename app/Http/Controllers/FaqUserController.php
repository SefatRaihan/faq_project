<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Faq;

class FaqUserController extends Controller
{
    public function faqIndex(){
        $faqs = Faq::take(5)->get();
        
        return view('faq-page.index', compact('faqs'));
    }
}