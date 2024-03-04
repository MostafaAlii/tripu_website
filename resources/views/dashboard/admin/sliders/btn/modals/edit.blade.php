<div class="modal fade" id="edit{{$slider->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark white">
                <h5 class="text-white modal-title" id="exampleModalLabel">{{trans('dashboard/general.edit') . ' ' . $slider?->title }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('sliders.update', $slider->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <!-- Start Name -->
                            <div class="form-group">
                                <label for="name">title</label>
                                <input type="text" class="form-control" name="title" id="title" value="{{$slider->title}}">
                                @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- End Name -->
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <!-- Start Status Status -->
                            <div class="p-1 form-group">
                                <label for="status">Status</label>
                                <select name="status" class="p-1 form-control">
                                    <option selected disabled>Select <span class="text-primary">{{$slider->name}}</span>
                                        Status...</option>
                                    <option value="1" {{ (old('status', $slider->status) == '1') ? 'selected' : '' }}>
                                        Active
                                    </option>
                                    <option value="0" {{ (old('status', $slider->status) == '0') ? 'selected' : '' }}>
                                        Not Active
                                    </option>
                                </select>
                                @error('status')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- End Status Selected -->
                        </div>
                    </div>
                    

                    

                    <!-- Start Notes -->
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <label for="description" class="cursor-pointer card-title">Notes Description</label>
                                </div>
                                <div class="card-body center">
                                    <fieldset class="form-group">
                                        <textarea name="description" class="form-control" style="height: 240px;" id="description" rows="3">{!! $slider->description !!}</textarea>
                                    </fieldset>
                                    @error('description')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <!-- Start Image -->
                            <div class="form-group">
                                <label>Image : <span style="color:rgb(199, 8, 8)">*</span></label>
                                <input class="form-control img" name="image" type="file" accept="image/*" onchange="previewImage(this);">
                                <img class="img-thumbnail img-fluid" id="image-preview" src="{{$slider->ImagePath()}}" alt="{{$slider->name}}">
                            </div>
                            <!-- End Image -->
                        </div>
                    </div>
                    <!-- End Notes -->

                    

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>