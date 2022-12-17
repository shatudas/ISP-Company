@extends('backend.layouts.master')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

 <!-- Main content -->
 <section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">

        <div class="card">
   
              <!-- /.card-header -->
              <div class="card-body">
               <form method="POST" action="{{route('profiles.update')}}" id="myForm" enctype="multipart/form-data">
                @csrf
                <div class="form-row">

                <div class="form-group col-md-4">
                 <label for="name">Name</label>
                 <input type="text" name="name" value="{{$editData->name}}" class="form-control">
                 <font style="color:red">{{($errors->has('name'))?($errors->first('name')):'' }}</font>
                </div>

                <div class="form-group col-md-4">
                 <label for="email">Email</label>
                 <input type="email" name="email" value="{{$editData->email}}" class="form-control">
                 <font style="color:red">{{($errors->has('email'))?($errors->first('email')):'' }}</font>
                </div>


                <div class="form-group col-md-4">
                 <label for="mobile">Mobile</label>
                 <input type="number" name="mobile" value="{{$editData->mobile}}" class="form-control">
                 <font style="color:red">{{($errors->has('mobile'))?($errors->first('mobile')):'' }}</font>
                </div>


                <div class="form-group col-md-4">
                 <label for="address">Address</label>
                 <input type="text" name="address" value="{{$editData->address}}" class="form-control">
                 <font style="color:red">{{($errors->has('address'))?($errors->first('address')):'' }}</font>
                </div>

                <div class="form-group col-md-4">
                 <label for="gender">gender</label>
                 <select name="gender" id="usertype" class="form-control">
                  <option value="">Select Admin</option>
                  <option value="Male" {{$editData->gender=="Male"?"selected":""}}>Male</option>
                  <option value="Female" {{$editData->gender=="Female"?"selected":""}}>Female</option>
                 </select>
                </div>
                
                <div class="form-group col-md-4">
                 <label for="image">Image</label>
                 <input type="file" name="image" class="form-control" id="image">
               </div>


               <div class="form-group col-md-2">
                <img id="showImage" src="{{!empty($editData->image)?url('public/upload/user_images/'.$editData->image):url('public/upload/No-image.jpg')}}" style="width:150px; height:160px; border:1px solid #000;">
              </div>


                <div class="form-group col-md-6" style="padding-top:30px;">
                 <input type="submit" value="Update"  class="btn btn-primary">
                </div>


                </div>
               </form>

        
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->




{{--   <script>
$(function () {
  $('#myForm').validate({
    rules: {
     user_type: {
     required: true,
    },

    name: {
     required: true,
    },
     email: {
     required: true,
     email: true,
    },
     password: {
     required: true,
     minlength: 6
    },
     password2: {
     required: true,
     equalTo : '#password'
    },
    },
    messages: {
     name: {
        required: "Please enter name",
      },
     user_type: {
        required: "Please select user role",
      },
      email: {
        required: "Please enter a email address",
        email: "Please enter a <em>valid</em> email address",
      },
      password: {
        required: "Please enter password",
        minlength: "Your password must be at least 6 characters long",
      },
      password2: {
        required: "Please enter confirm password",
        equalTo: "Confirm password does not match",
      },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script> --}}


  @endsection