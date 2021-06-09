@extends('subadmindasboard')
@section('content')
<section class="content" >
  <div class="container-fluid">
    <h3>Create Ticket</h3>
    <form action = "form" method = "post" style="margin-top:10px" >
        @csrf
      <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">User</label>
            <select class="form-control" aria-label="Default select example" name="user"> <br/>
              <option selected>Select</option>
              @foreach ($users as $user)
                <option value="{{$user->firstname}}">{{$user->firstname}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Mobile</label>
            <input type="text" class="form-control" id="inputPassword4" value = "" name="mobile" pattern="[789][0-9]{9}" required>
          </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">assets</label>
        <input type="text" class="form-control" id="inputAddress" name="assets" minlength="5" maxlength="15" required>
      </div>
      <div class="form-group">
        <label for="inputAddress">Priority</label>
        <select class="form-select" aria-label="Default select example" name="priority"> <br/>
          <option selected>Select</option>
          <option value="Low">Low</option>
          <option value="Medium">Medium</option>
          <option value="High">High</option>
          <option value="Emergency">Emergency</option>
        </select>
      </div>
      <div class="form-group">
        <label for="inputAddress">SerialNo</label>
        <input type="text" class="form-control" id="inputAddress" name="serialNo" minlength="5" maxlength="15">
      </div>
      <div class="form-group">
        <label for="inputAddress">ModelNo</label>
        <input type="text" class="form-control" id="inputAddress" name="modelNo" minlength="5" maxlength="15">
      </div>
      <div class="form-group">
        <label for="inputAddress">Agent Name</label>
        <input type="text" class="form-control" id="inputAddress" name="agent" minlength="5" maxlength="15" required>
      </div>
      <div class="form-group">
        <label for="inputAddress">Ticket Status</label>
        <input type="text" class="form-control" id="inputAddress" value="Pending" readonly minlength="5" maxlength="15">
      </div>
        <br>
      <button type="submit" class="btn btn-primary" style="margin-bottom: 15px;">Create</button>
</form>
  </div>
</section>
@endsection
