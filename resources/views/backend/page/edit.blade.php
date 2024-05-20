@extends('backend.layouts.app')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ url('assets/tagsinput/bootstrap-tagsinput.css') }}">
@endsection
@section('content')
 
  <section class="section">
      <div class="row">
  
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Page</h5>


              <form class="row g-3" action="" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="col-12">
                  <label class="form-label">Slug *</label>
                  <input type="text" class="form-control" value="{{ $getRecord->slug }}" name="slug" required >
                </div>


                <div class="col-12">
                  <label class="form-label">Title *</label>
                  <input type="text" class="form-control" value="{{ $getRecord->title }}" name="title" required >
                </div>

                <div class="col-12">
                  <label class="form-label">Description *</label>
                  <textarea class="form-control tinymce-editor" name="description">{{ $getRecord->description }}</textarea>
                </div>
           
                <hr>

                <div class="col-12">
                  <label class="form-label">Meta Title</label>
                  <input type="text" class="form-control" value="{{ $getRecord->meta_title }}" name="meta_title" >
                </div>

                <div class="col-12">
                  <label class="form-label">Meta Description</label>
                   <textarea class="form-control" name="meta_description">{{ $getRecord->meta_description }}</textarea>
                </div>


                <div class="col-12">
                  <label class="form-label">Meta Keywords</label>
                  <input type="text" class="form-control" value="{{ $getRecord->meta_keywords }}" name="meta_keywords" >
                </div>

                
                <div class="col-12" style="margin-top: 30px;">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>

            </div>
          </div>

        
        </div>
      </div>
    </section>
    

@endsection

@section('script')
  <script src="{{ url('assets/tagsinput/bootstrap-tagsinput.js') }}"></script>
  

  <script type="text/javascript">
    $("#tags").tagsinput();
  </script>
@endsection
