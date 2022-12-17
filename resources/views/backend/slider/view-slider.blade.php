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
                <h3>User List
                  <a href="{{route('slider.add')}}" class=" btn btn-success btn-sm float-right"> <i class="fa fa-plus-circle"></i> Add Slider</a>


                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  
                <thead>
                  <tr>
                    <th>Show Sl</th>
                    <th>Sl</th>
                    <th>Title</th>
                    <th align="center">Image</th>
                    <th align="center">Status</th>
                    <th align="center">Action</th>
                  </tr>
                  </thead>

                  <tbody>

                  @foreach($alldata as $key => $slider)
                  <tr>
                
                    <td>{{$key+1}}</td>
                    <td>{{$slider->sl}}</td>
                    <td>{{$slider->title}}</td>

                    <td>
                     <center><img src="{{(!empty($slider->image))?url('public/upload/slider_image/'.$slider->image):url('public/upload/No-image.jpg')}}" width="130px;" height="70px;"></center></td>

                     <td align="center">
                       @if($slider->status=='0')
                        <a href="" class="btn btn-primary btn-sm">Active</a>
                       @else
                        <a href="" class="btn btn-danger btn-sm">Inactive</a>
                       @endif

                     </td>
              
                    <td>           
                      <a title="Edit" href="{{route('slider.edit',$slider->id)}}" class="btn btn-sm btn-primary" ><i class="fa fa-edit"></i></a>

                      <a title="Delete" href="{{route('slider.delete',$slider->id)}}" id="delete" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>

                    </td>

                   
                  </tr>

                   @endforeach



                </table>
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


  @endsection