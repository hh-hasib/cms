@extends('backend.layouts.app')
@section('style')
@endsection
@section('content')
 
  <section class="section">
      <div class="row">
  
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit User</h5>


              <form class="row g-3" action="" method="post">
                {{ csrf_field() }}
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Name</label>
                  <input type="text" value="{{ $getRecord->name }}" class="form-control" name="name" required id="inputNanme4">
                    <div style="color:red">{{ $errors->first('name') }}</div>
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Email</label>
                  <input type="email" value="{{ $getRecord->email }}" class="form-control" name="email" required id="inputEmail4">
                  <div style="color:red">{{ $errors->first('email') }}</div>
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Password</label>
                  <input type="text"   name="password" class="form-control" id="inputPassword4">
                  <p style="margin-bottom: 0px;margin-top: 5px;font-size: 14px;">Due you want change password so please fill password input box</p>
                </div>

                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Status</label>
                  <select class="form-control" name="status">
                      <option {{ ($getRecord->status == 1) ? 'selected' : '' }} value="1">Active</option>
                      <option {{ ($getRecord->status == 0) ? 'selected' : '' }} value="0">Inactive</option>
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
