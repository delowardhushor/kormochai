@extends('app')
@section('title', "Employee's Details")

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h5 class="title">{{$employee->name}}'s Details</h5>
      </div>
      <div class="card-body">
        <form>
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" value="{{$employee->name}}" />
              </div>
            </div>
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Age</label>
                <input type="text" class="form-control" value="{{$employee->age}}" />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" value="{{$employee->phone}}" />
              </div>
            </div>
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Refer Code</label>
                <input type="text" class="form-control" value="{{$employee->refer_code}}" />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Education</label>
                <input type="text" class="form-control" value="{{$employee->education}}" />
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Reffered</label>
                <input type="text" class="form-control" value="{{$employee->referred}}" />
              </div>
            </div>
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Area</label>
                <input type="text" class="form-control" value="{{$employee->area}}" />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Post</label>
                <input type="text" class="form-control" value="{{$employee->post}}" />
              </div>
            </div>
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Thana</label>
                <input type="text" class="form-control" value="{{$employee->thana}}" />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>District</label>
                <input type="text" class="form-control" value="{{$employee->district}}" />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" value="{{$employee->address}}" />
              </div>
            </div>
          </div>
        </form>
      </div>
      <!-- <div class="card-footer">
        <button type="submit" class="btn btn-fill btn-primary">Save</button>
      </div> -->
    </div>
  </div>
</div>
@endsection