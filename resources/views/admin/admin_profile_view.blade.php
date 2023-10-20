@extends('admin.admin_master')

@section('admin')
<div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">PROFILE</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1"  >Name : {{ $adminData->name }} </label>
                    
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email : {{ $adminData->email }} </label> 
                  </div>
                  <div class="form-group">
                    <img src="{{ asset('backend/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary"> <a href="{{ route('edit.profile') }}">Edit Profile</a> </button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
@endsection