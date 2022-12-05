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

   </div>
   <!-- /.content-header -->

   <!-- Main content -->
   <div class="content">
     <div class="container-fluid">
       <div class="row">
         <div class="col-lg-12">
            <div class="col-md-12">
              <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">SubAdmin List</h3>
                  </div>

   <div class="card-body p-0">
    <table class="table" id="subtbl">

      <thead>
        <tr>
          <th>id</th>
          <th>Name </th>
          <th>Email</th>
          <th>Phone</th>
          <th>Role</th>
         <th>Status</th>
         <th>Action</th>
        </tr>
      </thead>
      <tbody>
    @foreach ($users as $user)
        <tr>
          <td><h5>{{ $user->id }}</h5></td>
          <td><h5>{{ $user->firstName }}  {{ $user->lastName }}</h5></td>
          <td><h5>{{ $user->email}}</h5></td>
          <td><h5>{{ $user->phone}}</h5></td>
         <td><h5>{{ $user->roles}}</h5></td>
         <td><input data-id="{{$user->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $user->status ? 'checked' : '' }}>

         <td>
            <button class="btn btn-warning"><a style="color: white;font-weight: bold;" href="{{url('editUser/'.$user->id)}}">edit</a></button>
            <button  class="btn btn-danger"><a style="color: white;font-weight: bold;" href="{{url('removeUser/'.$user->id)}}">delete</a></button>
            </td>
         <td><h5> <div class="row">
            <div class="col-sm-6">
              <!-- select -->
              <div class="form-group">

                {{-- <input data-id="{{$user->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $user->status ? 'checked' : '' }}> --}}

              </div>
            </div>
        </div></h5></td>
         </tr>
    </tbody>

    @endforeach
    <script>
        $(function() {
          $('.toggle-class').change(function() {
              var status = $(this).prop('checked') == true ? 1 : 0;
              var user_id = $(this).data('id');

              $.ajax({
                  type: "GET",
                  dataType: "json",
                  url: '/changeStatus',
                  data: {'status': status, 'user_id': user_id},
                  success: function(data){
                    console.log(data.success)
                  }
              });
          })
        })
      </script>

    </table>
    {!! $users->links() !!}


  </div>
 </div>
                 </div>
             </div>
</div>
     </div></div>
@endsection
