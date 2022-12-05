 {{-- @section('styles')
@endSection

@section('content')
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
      <h3 class="card-title">Select2 (Default Theme)</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Minimal</label>
            <select class="form-control select2" style="width: 100%;">
              <option selected="selected">Alabama</option>
              <option>Alaska</option>
              <option>California</option>
              <option>Delaware</option>
              <option>Tennessee</option>
              <option>Texas</option>
              <option>Washington</option>
            </select>
          </div>
          <!-- /.form-group -->
          <div class="form-group">
            <label>Disabled</label>
            <select class="form-control select2" disabled="disabled" style="width: 100%;">
              <option selected="selected">Alabama</option>
              <option>Alaska</option>
              <option>California</option>
              <option>Delaware</option>
              <option>Tennessee</option>
              <option>Texas</option>
              <option>Washington</option>
            </select>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
          <div class="form-group">
            <label>Multiple</label>
            <select class="select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
              <option>Alabama</option>
              <option>Alaska</option>
              <option>California</option>
              <option>Delaware</option>
              <option>Tennessee</option>
              <option>Texas</option>
              <option>Washington</option>
            </select>
          </div>
          <!-- /.form-group -->
          <div class="form-group">
            <label>Disabled Result</label>
            <select class="form-control select2" style="width: 100%;">
              <option selected="selected">Alabama</option>
              <option>Alaska</option>
              <option disabled="disabled">California (disabled)</option>
              <option>Delaware</option>
              <option>Tennessee</option>
              <option>Texas</option>
              <option>Washington</option>
            </select>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <h5>Custom Color Variants</h5>
      <div class="row">
        <div class="col-12 col-sm-6">
          <div class="form-group">
            <label>Minimal (.select2-danger)</label>
            <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
              <option selected="selected">Alabama</option>
              <option>Alaska</option>
              <option>California</option>
              <option>Delaware</option>
              <option>Tennessee</option>
              <option>Texas</option>
              <option>Washington</option>
            </select>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6">
          <div class="form-group">
            <label>Multiple (.select2-purple)</label>
            <div class="select2-purple">
              <select class="select2" multiple="multiple" data-placeholder="Select a State" data-dropdown-css-class="select2-purple" style="width: 100%;">
                <option>Alabama</option>
                <option>Alaska</option>
                <option>California</option>
                <option>Delaware</option>
                <option>Tennessee</option>
                <option>Texas</option>
                <option>Washington</option>
              </select>
            </div>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->

      </div>
      <!-- /.row -->
    </div>
    <!-- /.card-body -->

  </div>
  @endsection
  @section('scripts')
  @endsection --}}


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
                <form action="/storeSubAdmin" method="post" >
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
                <div class="form-group">
                  <label>First Name</label>
                  <input type="text" name="firstName" class="form-control select2bs4" style="width: 100%;" placeholder="Enter First Name">

                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Mobile Number</label>
                  <input type="tel" name="phone" id="phone"  class="form-control select2bs4" style="width: 100%;" placeholder="Enter Mobile Number">
                   </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Last Name</label>
                  <input type="text" name="lastName" class="form-control select2bs4" style="width: 100%;" placeholder="Enter Last Name">

                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control select2bs4" style="width: 100%;" placeholder="Enter Email">

                </div>
                <!-- /.form-group -->
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control select2bs4" style="width: 100%;" placeholder="Enter Password">

              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>

                    </div>
                   <div >
                    <button type="submit" class="btn btn-primary" style="float: right;">Give Access</button>
                  </div>
                </form>
              </div>
          </div>
      </div>
  </div>

  </div>

</section>
  @endsection









