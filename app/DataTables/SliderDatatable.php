<?php
namespace App\DataTables;
use App\Models\Slider;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;

class SliderDataTable extends DataTable {
    public function dataTable(QueryBuilder $query): EloquentDataTable {
        return (new EloquentDataTable($query))
            ->addColumn('action', function (Slider $slider) {
                return view('dashboard.admin.sliders.btn.actions', compact('slider'));
            })
            ->editColumn('status', function (Slider $slider) {
                return $slider->status();
            })
            ->editColumn('created_at', function (Slider $slider) {
                return $slider->created_at->format('Y-m-d');
            })
            ->editColumn('updated_at', function (Slider $slider) {
                return $slider->created_at->format('Y-m-d');
            })
            ->addColumn('image', function (Slider $slider) {
                return '<img src="' . $slider->ImagePath() . '" width="100">';
            })
            ->editColumn('admin_id', function(Slider $slider){
                return $slider->admin->name;
            })
        ->rawColumns(['action', 'admin_id', 'status', 'created_at', 'updated_at', 'image']); 
    }

    public function query(): QueryBuilder {
        return Slider::query();
    }


    public function html() {
		return $this->builder()
            ->setTableId('slider-table')
		    ->columns($this->getColumns())
			->minifiedAjax()
			->parameters([
				'dom'        => 'Blfrtip',
				'lengthMenu' => [[10, 25, 50, 100], [10, 25, 50, 'All Records']],
				'buttons'    => [
					['extend' => 'print', 'className' => 'btn btn-primary', 'text' => 'Print'],
					['extend' => 'csv', 'className' => 'btn btn-info', 'text' => 'Export CSV'],
					['extend' => 'excel', 'className' => 'btn btn-success', 'text' => 'Export EXCEL'],
					['extend' => 'reload', 'className' => 'btn btn-default', 'text' => 'Refresh'],

				],
				'initComplete' => " function () {
		            this.api().columns([1]).every(function () {
		                var column = this;
		                var input = document.createElement(\"input\");
		                $(input).appendTo($(column.footer()).empty())
		                .on('keyup', function () {
		                    column.search($(this).val(), false, false, true).draw();
		                });
		            });
		        }",

			]);
	}

    protected function getColumns() {
		return [
            ['name' => 'id', 'data' => 'id', 'title' => '#','searchable' => false,],
            ['name' => 'title', 'data' => 'title', 'title' => trans('dashboard/slider.title'),],
            ['name' => 'image', 'data' => 'image', 'title' => 'Image', 'orderable' => false, 'searchable' => false,],
            ['name' => 'description', 'data' => 'description', 'title' => trans('dashboard/slider.description'),],
            ['name' => 'status', 'data' => 'status', 'title' => trans('dashboard/general.status'), 'orderable' => false, 'searchable' => false,],
            ['name' => 'admin_id', 'data' => 'admin_id', 'title' => trans('dashboard/general.add_by'), 'orderable' => false, 'searchable' => false,],
            ['name' => 'created_at', 'data' => 'created_at', 'title' => trans('dashboard/general.created_at'), 'orderable' => false, 'searchable' => false,],
            ['name' => 'updated_at', 'data' => 'updated_at', 'title' => trans('dashboard/general.updated_at'), 'orderable' => false, 'searchable' => false,],
            ['name' => 'action', 'data' => 'action', 'title' => trans('dashboard/general.actions'), 'orderable' => false, 'searchable' => false, 'printable' => false, 'exportable' => false],
        ];
	}

    protected function filename(): string {
        return 'Slider_' . date('YmdHis');
    }
}