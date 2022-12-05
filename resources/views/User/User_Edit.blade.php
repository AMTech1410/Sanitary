


@extends('layouts.master')

  @section('styles')
  @endSection
 @section('content')
 <div class="content-wrapper">
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
          <div class="row">
          <div class="col-md-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body" >
                 <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title"> Add Admin Data</h3>
                </div>
              </div>
                <form action="/updateUser" method="post" >
                  <div class="card-body">
                    <div class="form-group">
                      @if(Session::has('success'))
          <div class="alert alert-success">{{Session::get('success')}}</div>
          @endif
          @if(Session::has('fail'))
          <div class="alert alert-danger">{{Session::get('fail')}}</div>
          @endif
          @csrf

          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <input type="hidden" name="id" value="{{$User['id']}}">
                <div class="form-group">
                  <label>First Name</label>
                  <input type="text" name="firstName" class="form-control select2bs4" style="width: 100%;" value="{{$User['firstName']}}"placeholder="Enter First Name">

                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Mobile Number</label>
                  <input type="tel" name="phone" id="phone"  class="form-control select2bs4" style="width: 100%;" value="{{$User['phone']}}" placeholder="Enter Mobile Number">
                   </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Last Name</label>
                  <input type="text" name="lastName" class="form-control select2bs4" style="width: 100%;" value="{{$User['lastName']}}" placeholder="Enter Last Name">

                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control select2bs4" style="width: 100%;" value="{{$User['email']}}" placeholder="Enter Email">

                </div>
                <!-- /.form-group -->
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="text" class="form-control select2bs4" style="width: 100%;" value="{{$User['password']}}"placeholder="Enter Password">

              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>

                    </div>
                   <div >
                    <button type="submit" class="btn btn-primary" style="float: right;">Upadate</button>
                  </div>
                </form>
              </div>
          </div>
      </div>
  </div>

  </div>

</section>
  @endsection










