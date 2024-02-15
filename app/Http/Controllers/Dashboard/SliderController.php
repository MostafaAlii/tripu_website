<?php
namespace App\Http\Controllers\Dashboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\DataTables\SliderDatatable;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Models\Slider;
class SliderController extends Controller {
    public function index(SliderDatatable $slider) {
		return $slider->render('dashboard.admin.sliders.index', ['title' => 'sliders']);
	}

    public function store(Request $request) {
        try {
            $slider = Slider::create($request->input());
            /*if ($request->hasFile('image')) {
                $fileName = 'slider-' . time() . '.' . $request->file('image')->getClientOriginalExtension();
                $slider->storeImage($request->file('image')->storeAs('slider', $fileName, 'upload_image'));
            }*/
            Session::flash('message', 'data create success');
            Session::flash('alert-class', 'alert-success');
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Try again later Something went wrong');
        }
    }

    public function show(string $id) {
        //
    }

    public function edit(string $id) {
        //
    }

    public function update(Request $request, string $id) {
        //
    }

    public function destroy(string $id) {
        //
    }
}
