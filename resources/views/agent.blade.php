@extends('adminlte')
@section('content')
<section class="content" >
  <div class="container-fluid">
    <h3>Ticket Available</h3>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Assets</th>
      <th scope="col">Priority</th>
      <th scope="col">TicketStatus</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach ($users as $user)
      <td>{{$user->assets}}</td>
      <td>{{$user->priority}}</td>
      <td>{{$user->ticketStatus}}</td>
      <td><a href = 'edit/{{ $user->id }}' class="btn btn-primary">Update Status</td>
      @endforeach
    </tr>
  </tbody>
</table>
  </div>
</section>
@endsection
