@extends('subadmindasboard')
@section('content')

<section class="content" >
  <div class="container-fluid">
    <h3>Report Generation</h3>
<form action="/report" method="post" style="margin-top:10px" >
    <div class="row">
      <div class="container">
      <h1>Laravel Bootstrap Datepicker</h1>
      <input class="date form-control" type="text">
  </div>
    <div class="row">
                <div class="col-sm-8">
                    <div class="form-group">
                        <div class="col-sm-3 control-label">
                            <label for="enddate">EndDate</label>
                        </div>
                        <div class="col-sm-5">
                            <div class="input-group date" id="enddate">
                                <input type="text" class="form-control" />
                                <span class="input-group-addon">
                                    <span class="glyphicon-calendar glyphicon"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                  </div>
    </div>
  </form>
  </div>
</section>
@endsection
