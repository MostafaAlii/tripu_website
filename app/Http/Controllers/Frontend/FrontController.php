<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class FrontController extends Controller {
    public function index() {
        return view('website.home',['title' => 'Trip U']);
    }
}