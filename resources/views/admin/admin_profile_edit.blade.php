@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">EDIT PROFILE</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="name" class="form-control" id="name" placeholder="name" value="{{ $editData->name }}">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" value="{{ $editData->email }}">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputFile">Profile Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <img id="showImg" src="{{ asset('backend/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image" height="200" style="border-radius: 50%">
                  </div>
                </div>
                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <!-- /.card -->

          </div>

          <script type="text/javascript">
          $(document).ready(function(){
            $('#image').change(function(e){
              let reader = new FileReader()
              reader.onload = function(e){
                $('#showImg').attr('src',e.target.result)
              }
              reader.readAsDataURL(e.target.files['0'])
            })
          })
          </script>
@endsection