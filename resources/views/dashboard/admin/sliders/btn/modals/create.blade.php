<div class="modal fade" id="createsliders" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark white">
                <h5 class="modal-title text-white" id="exampleModalLabel">Create New {{ ucfirst($title) }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route( $title . '.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="admin_id" value="{{get_user_data()->id}}">
                    <!-- Start Name -->
                    <div class="form-group">
                        <label for="name">Title</label>
                        <input type="text" class="form-control" required name="title" id="title" value="">
                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- End Name -->

                    {{--<div class="form-group">
                        <label>Image :  <span style="color:rgb(199, 8, 8)">*</span></label>
                        <input  class="form-control img" name="image"  type="file" accept="image/*" required >
                    </div>--}}
                    <br>
                    <!-- Start Notes -->
                    <div class="form-group">
                        <label for="notes">Description</label>
                        <textarea type="notes" class="form-control" name="description" id="description" placeholder="Type Your Description"></textarea>
                        @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- End Notes -->

                    <!-- Start Status Status -->
                    <div class="p-1 form-group">
                        <label for="status">Status</label>
                        <select name="status" class="form-control">
                            <option selected disabled>Select {{$title}} Status...</option>
                            <option value="1" {{ old('status')=='1' ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ old('status')=='0' ?'selected' : '' }}>Not Active</option>
                        </select>
                        @error('status')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- End Status Selected -->


                    <hr>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>