@extends('backend.layouts.app')
@section('style')
@endsection
@section('content')
 
  <section class="section">
      <div class="row">
  
        <div class="col-lg-12">
          @include('layouts._message')
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Change Password</h5>


              <form class="row g-3" action="" method="post">
                {{ csrf_field() }}
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Old Password</label>
                  <input type="password" class="form-control"  name="old_password" required id="inputNanme4">
                   
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">New Passoword</label>
                  <input type="password" class="form-control" name="new_password" required id="inputEmail4">
                   

                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Confirm Passoword</label>
                  <input type="password" required  name="confirm_password" class="form-control" id="inputPassword4">
                
                </div>

            
                
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Update Password</button>
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
