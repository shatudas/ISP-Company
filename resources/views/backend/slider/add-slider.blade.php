@extends('backend.layouts.master')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Slider</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Slider</li>
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
         <div class="card-header">
                <h3>Add Slider
                  <a href="{{route('slider.view')}}" class=" btn btn-success btn-sm float-right"> <i class="fa fa-list"></i>Slider List</a>
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               <form method="POST" action="{{route('slider.store')}}" enctype="multipart/form-data" id="myForm"> 
                @csrf
                <div class="form-row">
               
                <div class="form-group col-md-6">
                 <label for="sl">sl</label>
                 <input type="number" name="sl" class="form-control" >
                 <font style="color:red">{{($errors->has('sl'))?($errors->first('sl')):'' }}</font>
                </div>

                <div class="form-group col-md-6">
                 <label for="title">Title</label>
                 <input type="text" name="title" class="form-control">
                 <font style="color:red">{{($errors->has('title'))?($errors->first('title')):'' }}</font>
                </div>


                <div class="form-group col-md-6">
                 <label for="status">Status</label>
                 <select name="status" class="form-control">
                  <option value="">Select Role</option>
                  <option value="0">Active</option>
                  <option value="1">Inactive</option>
                 </select>
                </div>



                <div class="form-group col-md-4">
                 <label for="image">Image</label>
                 <input type="file" name="image" class="form-control" id="image">
                 <font style="color:red">{{($errors->has('image'))?($errors->first('image')):'' }}</font>
               </div>


               <div class="form-group col-md-2">
                <img id="showImage" src="{{url('public/upload/No-image.jpg')}}" style="width:150px; height:100px; border:1px solid #000;">
              </div>

                <div class="form-group col-md-6">
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




  <script>
$(function () {
  $('#myForm').validate({
    rules: {
     sl: {
     required: true,
    },

    status: {
     required: true,
    },

    image: {
     required: true,
    },
     
    
     
    },
    messages: {
     sl: {
        required: "Please enter Sl",
      },
     status: {
        required: "Please select status",
      },
      image: {
        required: "Please file upload",
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
</script>


  @endsection