{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                    welcome
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}



@extends('layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-12">

         </div><!-- /.col -->

       </div><!-- /.row -->
     </div><!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->

   <!-- Main content -->
   <div class="content">
     <div class="container-fluid">
       <div class="row">
         <div class="col-lg-12">
            <div class="col-md-12">

   {{-- <form class="form-horizontal" action="" method="post">
       @csrf
     <div class="card-body">
       <div class="form-group row">
         <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
         <div class="col-sm-10">
           <input type="email" class="form-control" name="email" id="inputEmail3" value="{{old('email')}}" placeholder="Email">
           <span class="text-danger">@error('email'){{$message}}@enderror</span>
       </div>
       </div>
       <div class="form-group row">
         <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
         <div class="col-sm-10">
           <input type="password" class="form-control" name="password" value="{{old('password')}}" id="inputPassword3" placeholder="Password">
           <span class="text-danger">@error('password'){{$message}}@enderror</span>
        </div>
       </div>
       <div class="form-group row">
         <div class="offset-sm-2 col-sm-10">
           <div class="form-check">
             <input type="checkbox" class="form-check-input" id="exampleCheck2">
             <label class="form-check-label" for="exampleCheck2">Remember me</label>
           </div>
         </div>
       </div>
     </div>
     <!-- /.card-body -->
     <div class="card-footer">
       <button type="submit" class="btn btn-primary">Sign in</button>

     </div>
     <!-- /.card-footer -->
   </form> --}}

   <div class="row">
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3>{{$superAdmins}}</h3>

          <p>SuperAdmin Registration</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3>{{ $users }}</h3>

          <p>SubAdmin Registration</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="{{route('dashboard')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>44</h3>

          <p>Customer Registrations</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>65</h3>

          <p>Number of Inquiry</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>
 </div>
                 </div>
             </div>
</div>
@endsection
