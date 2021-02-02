<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        $catCount=Category::get()->count();
        return view('admin.dashboard')->with('categoriesCount',$catCount);
    }
}
