@extends('adminlte')
@section('content')
<section class="content" >
  <div class="container-fluid">
    <h3>Ticket Update</h3>
    <form action="/update" method="post" style="margin-top:10px" >
        @csrf
        <input type="hidden" name="id" value="{{$data['id']}}">
      <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Ticket Status</label>
            <select class="form-control" aria-label="Default select example" name="ticketstatus"> <br/>
              <option selected>{{$data['ticketStatus']}}</option>
              <option value="Approved">Approved</option>
              <option value="Ready to Dispatch">Ready to Dispatch</option>
              <option value="Dispatched">Dispatched</option>
              <option value="Closed">Closed</option>
            </select>
          </div>
      </div>
        <br>
      <button type="submit" class="btn btn-primary" style="margin-bottom: 15px;">Update</button>
  </form>
  </div>
</section>
@endsection
