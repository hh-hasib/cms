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
                    <h5 class="card-title">Account Settings</h5>


                    <form class="row g-3" action="" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="col-12">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" value="{{ $getUser->name }}" name="name" required>
                        </div>

                        <div class="col-12">
                            <label class="form-label">Email</label>
                            <input type="text" readonly class="form-control" value="{{ $getUser->email }}">
                        </div>

                        <div class="col-12">
                            <label class="form-label">Profile</label>
                            <input type="file" class="form-control" name="profile_pic">
                            <img src="{{ $getUser->getProfile() }}" style="height: 100px; width: 100px;">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Update Profile</button>
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