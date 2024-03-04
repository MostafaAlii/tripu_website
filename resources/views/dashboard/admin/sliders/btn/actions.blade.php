<div class="btn-group">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{trans('dashboard/general.progress')}}
    </button>
    <div class="dropdown-menu">
        <button type="button" class="modal-effect btn btn-sm btn-success dropdown-item"
            style="text-align: center !important" data-toggle="modal" data-target="#edit{{$slider->id}}"
            data-effect="effect-scale">
            <span class="icon text-wight text-bold">
                {{trans('dashboard/general.edit')}}
            </span>
        </button>
        <button type="button" class="modal-effect btn btn-sm btn-danger dropdown-item"
            style="text-align: center !important" data-toggle="modal" data-target="#delete{{$slider->id}}"
            data-effect="effect-scale">
            <span class="icon text-wight text-bold">
                {{trans('dashboard/general.delete')}}
            </span>
        </button>
    </div>
</div>

@include('dashboard.admin.sliders.btn.modals.edit')
@include('dashboard.admin.sliders.btn.modals.delete')