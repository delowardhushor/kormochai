@extends('app')
@section('title', "Post a Job")

<style type="text/css">
  option{
    background-color: #525f7f;
    color: #fff;
  }
</style>

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h5 class="title">Job Details</h5>
      </div>
      <div class="card-body">
        <form method="POST" action="{{url('/jobs')}}">
          @csrf
          <input type="text" required style="display: none;" value="0" name="employers_id" />
          <input type="text" required style="display: none;" value="true" name="from_web" />
          <div class="row">
            <div class="col-md-12 pr-md-1">
              <div class="form-group">
                <label>Name</label>
                <input type="text" required name="name" class="form-control" > 
              </div>
            </div>
            <div class="col-md-12 pr-md-1">
              <div class="form-group">
                <label>Mobile</label>
                <input type="text" required name="mobile" class="form-control" >
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 pr-md-1">
              <div class="form-group">
                <label>Job Title</label>
                <input type="text" required name="job_title" class="form-control" >
              </div>
            </div>
            <div class="col-md-12 pr-md-1">
              <div class="form-group">
                <label>Company Name</label>
                <input type="text" required name="company_name" class="form-control" >
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 pr-md-1">
              <div class="form-group">
                <label>Area</label>
                <input type="text" required name="area" class="form-control" >
              </div>
            </div>
            <div class="col-md-12 pr-md-1">
              <div class="form-group">
                <label>Thana</label>
                <input type="text" required name="thana" class="form-control" >
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 pr-md-1">
              <div class="form-group">
                <label>District</label>
                <input type="text" required name="zila" class="form-control" >
              </div>
            </div>
            <div class="col-md-12 pr-md-1">
              <div class="form-group">
                <label>House</label>
                <input type="text" required name="house" class="form-control" >
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 pr-md-1">
              <div class="form-group">
                <label>Job Location</label>
                <select type="text" required name="location" class="form-control" >
                  @foreach($locations as $location)
                  <option >{{$location->location}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-12 pr-md-1">
              <div class="form-group">
                <label>Category</label>
                <select type="text" required name="category" class="form-control" >
                  @foreach($cats as $cat)
                  <option >{{$cat->cat}}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 pr-md-1">
              <div class="form-group">
                <label>Salary</label>
                <input type="text" required style="display: none;" name="salary" value="not set" class="form-control" >
                <select type="text" required name="salary_type" class="form-control" >
                  <option value="monthly">monthly</option>
                  <option value="weekly">weekly</option>
                  <option value="daily">daily</option>
                </select>
              </div>
            </div>
            <div class="col-md-12 pr-md-1">
              <div class="form-group">
                <label>Admin Salary</label>
                <input value="" required name="admin_salary" type="text" class="form-control" >
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 pr-md-1">
              <div class="form-group">
                <label>Salary Date</label>
                <input type="text" required required name="salary_date" class="form-control" >
              </div>
            </div>
            <div class="col-md-12 pr-md-1">
              <div class="form-group">
                <label>Office Hour</label>
                <input type="text" required name="office_hour" class="form-control" >
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 pr-md-1">
              <div class="form-group">
                <label>Number of Employee</label>
                <input type="text" required name="employee_number" class="form-control" >
              </div>
            </div>
            <div class="col-md-12 pr-md-1">
              <div class="form-group">
                <label>Male / Female?</label>
                <select type="text" required name="employee_type" class="form-control" >
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="any">Any</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 pr-md-1">
              <div class="form-group">
                <label>Interview Need?</label>
                <select type="text" required name="interview" class="form-control" >
                  <option value="1">Yes</option>
                  <option value="0">No</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 pr-md-1">
              <div class="form-group">
                <label>Interview Date</label>
                <input required type="text" name="interview_date" class="form-control" >
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 pr-md-1" >
              <div class="form-group">
                <label>Interview Time</label>
                <div style="display: flex;flex-direction: row">
                  <select name="hour" class="form-control">
                    <option value="01">01</option>
                    <option  value="02">02</option>
                    <option  value="03">03</option>
                    <option  value="04">04</option>
                    <option  value="05">05</option>
                    <option  value="06">06</option>
                    <option  value="07">07</option>
                    <option  value="08">08</option>
                    <option  value="09">09</option>
                    <option  value="10">10</option>
                    <option  value="11">11</option>
                    <option  value="12">12</option>
                  </select>
                  <select name="min" class="form-control">
                    <option value="00">00</option>
                    <option value="15">15</option>
                    <option value="30">30</option>
                    <option value="45">45</option>
                  </select>
                  <select name="ampm" class="form-control">
                    <option value="AM">AM</option>
                    <option value="PM">PM</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 pr-md-1">
              <div class="form-group">
                <label>Job Type</label>
                <select type="text" required name="job_type" class="form-control" >
                  <option value="parttime">Part Time</option>
                  <option value="fulltime">Full Time</option>
                </select>
              </div>
            </div>
            <div class="col-md-12 pr-md-1">
              <div class="form-group">
                <label>Join Date</label>
                <input type="text" required name="job_date" class="form-control" >
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Educational Requirment</label>
                <input type="text" required name="education" class="form-control" >
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Job Responsibility</label>
                <textarea required="" class="form-control" name="job_responsibility" ></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label style="margin-right: 20px;">Publish This Job</label>
                <label  style="margin-right: 5px">YES</label>
                <input checked style="margin-right: 20px" type="radio" name="publish" value="1">
                <label style="margin-right: 5px">NO</label>
                <input type="radio" name="publish" value="0">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <button class="btn btn-sm btn-primary" type="submit">Post</button>
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