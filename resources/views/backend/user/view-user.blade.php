@extends('backend.layouts.master')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User</li>
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
                  <a href="{{route('user.add')}}" class=" btn btn-success btn-sm float-right"> <i class="fa fa-plus-circle"></i> Add User</a>


                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  
                <thead>
                  <tr>
                    <th>SL</th>
                    <th>Role</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                  </tr>
                  </thead>

                  <tbody>

                  @foreach($allData as $key => $user)
                  <tr>
                   

                    <td>{{$key+1}}</td>
                    <td>{{$user->user_type}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                      <a title="Edit" href="{{route('user.edit',$user->id)}}" class="btn btn-sm btn-primary" ><i class="fa fa-edit"></i></a>

                      <a title="Delete" href="{{route('user.delete',$user->id)}}" id="delete" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>

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