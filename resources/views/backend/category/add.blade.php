@extends('backend.layouts.app')
@section('style')
@endsection
@section('content')
 
  <section class="section">
      <div class="row">
  
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add New Categroy</h5>


              <form class="row g-3" action="" method="post">
                {{ csrf_field() }}
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Name *</label>
                  <input type="text" class="form-control" value="{{ old('name') }}" name="name" required id="inputNanme4">
                   <div style="color:red">{{ $errors->first('name') }}</div>
                </div>


                <div class="col-12">
                  <label class="form-label">Title *</label>
                  <input type="text" class="form-control" value="{{ old('title') }}" name="title" required >
                   <div style="color:red">{{ $errors->first('title') }}</div>
                </div>
           
                <hr>


                <div class="col-12">
                  <label class="form-label">Meat Title *</label>
                  <input type="text" class="form-control" value="{{ old('meta_title') }}" name="meta_title" required >
                   <div style="color:red">{{ $errors->first('meta_title') }}</div>
                </div>


                <div class="col-12">
                  <label class="form-label">Meat Description</label>
                   <textarea class="form-control" name="meta_description"></textarea>
                   <div style="color:red">{{ $errors->first('meta_description') }}</div>
                </div>


                <div class="col-12">
                  <label class="form-label">Meat Keywords</label>
                  <input type="text" class="form-control" value="{{ old('meta_keywords') }}" name="meta_keywords" >
                   <div style="color:red">{{ $errors->first('meta_keywords') }}</div>
                </div>



              
                <hr>      

               <div class="col-12">
                  <label for="inputPassword4" class="form-label">Menu *</label>
                  <select class="form-control" name="is_menu">
                      <option value="0">No</option>
                      <option value="1">Yes</option>
                  </select>
                </div>          

                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Status *</label>
                  <select class="form-control" name="status">
                      <option value="1">Active</option>
                      <option value="0">Inactive</option>
                  </select>
                </div>
                
                <div class="col-12">
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
@endsection
