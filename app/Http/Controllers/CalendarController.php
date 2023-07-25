<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function __invoke(){
        $categories = Category::orderBy('created_at', 'desc')->paginate(3);
        return view("calendar", compact("categories"));
    }
}
