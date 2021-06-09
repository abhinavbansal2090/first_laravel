@extends('adminlte')
@section('content')
<section class="content" >
  <div class="container-fluid">
    <h3>Create Agents/Subadmin</h3>
    <form action = "submit" method = "post" enctype="multipart/form-data"  style="margin-top:10px" >
        @csrf
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Username</label>
          <input type="email" class="form-control" id="inputEmail4" name="username" required>
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Mobile</label>
          <input type="text" class="form-control" id="inputPassword4" name="mobile" pattern="[789][0-9]{9}" required>
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Firstname</label>
        <input type="text" class="form-control" id="inputAddress" name="firstname" minlength="5" maxlength="15" required>
      </div>
      <div class="form-group">
        <label for="inputAddress">Lastname</label>
        <input type="text" class="form-control" id="inputAddress" name="lastname" minlength="5" maxlength="15">
      </div>
      <div class="form-group">
        <label for="inputAddress">Role</label>
        <select class="form-select" aria-label="Default select example" name="role"> <br/>
          <option selected>Select</option>
          <option value="1">{{$role}}</option>
          <option value="Subadmin">Subadmin</option>
            <option value="Agent">Agent</option>
          <option value="User">User</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlFile1">Profile Pic </label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="profile_pic">
      </div>
      <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input" id="switch1" name="status" checked>
        <label class="custom-control-label" for="switch1">Status</label>
    </div><br>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
     </div>
      <button type="submit" class="btn btn-primary" style="margin-bottom: 15px;">Create</button>
</form>
  </div>
</section>
@endsection
