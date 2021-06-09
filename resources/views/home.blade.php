@extends('adminlte')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Dashboard</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Starter Page</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
              <h5 class="m-0">Active Tickets</h5>
            </div>
            <div class="card-body">
              <p class="card-text">{{$record->where('ticketStatus', 'pending')->count()}}</p>
            </div>
        </div>

        <div class="card">
          <div class="card-header">
            <h5 class="m-0">Resolved Tickets</h5>
          </div>

            <div class="card-body">
              <p class="card-text">{{$record->where('ticketStatus', 'Ready to Dispatch')->count()}}</p>
            </div>

        </div><!-- /.card -->
      </div>
      <!-- /.col-md-6 -->
  <div class="col-lg-6">
        <div class="card">
          <div class="card-header">
            <h5 class="m-0">Closed Tickets</h5>
          </div>

          <div class="card-body">
            <p class="card-text">{{$record->where('ticketStatus', 'Closed')->count()}}</p>
          </div>

        </div>

        <div class="card">
          <div class="card-header">
            <h5 class="m-0">Active Agents</h5>
          </div>
          <div class="card-body">
            <p class="card-text"></p>
          </div>
        </div>
      </div>
    <!--/.col-md-6 -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
  <div class="p-3">
    <h5>Title</h5>
    <p>Sidebar content</p>
  </div>
</aside>
@endsection
