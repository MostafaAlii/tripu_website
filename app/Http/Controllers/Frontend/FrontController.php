<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Slider};
class FrontController extends Controller {
    public function index() {
        $data = [];
        $data['sliders'] = Slider::active()->get();
        //dd($data);
        return view('website.home',['title' => 'Trip U', 'data' => $data]);
    }
}