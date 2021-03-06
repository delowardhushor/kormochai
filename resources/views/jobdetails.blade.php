@extends('app')
@section('title', "Job's Details")

<style type="text/css">
  option{
    background-color: #525f7f;
    color: #fff;
  }
</style>

@section('content')
<div class="row">
  <div class="col-md-7">
    <div class="card">
      <div class="card-header">
        <h5 class="title">Job Details</h5>
      </div>
      <div class="card-body">
        <form method="POST" action="{{url('/job/update')}}">
          @csrf
          <input type="text" required style="display: none;" value="{{$Job->id}}" name="id" />
          <input type="text" required style="display: none;" value="{{$Job->employers_id}}" name="employers_id" />
          <div class="row">
            <div class="col-md-12 pr-md-1">
              <div class="form-group">
                <label>Name</label>
                <input type="text" value="{{$Job->name}}" required name="name" class="form-control" > 
              </div>
            </div>
            <div class="col-md-12 pr-md-1">
              <div class="form-group">
                <label>Mobile</label>
                <input type="text" value="{{$Job->mobile}}" required name="mobile" class="form-control" >
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 pr-md-1">
              <div class="form-group">
                <label>Job Title</label>
                <input type="text" value="{{$Job->job_title}}" required name="job_title" class="form-control" >
              </div>
            </div>
            <div class="col-md-12 pr-md-1">
              <div class="form-group">
                <label>Company Name</label>
                <input type="text" required value="{{$Job->company_name}}" name="company_name" class="form-control" >
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 pr-md-1">
              <div class="form-group">
                <label>Area</label>
                <input type="text" required name="area" value="{{$Job->area}}" class="form-control" >
              </div>
            </div>
            <div class="col-md-12 pr-md-1">
              <div class="form-group">
                <label>Thana</label>
                <input type="text" required name="thana" value="{{$Job->thana}}" class="form-control" >
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 pr-md-1">
              <div class="form-group">
                <label>District</label>
                <input type="text" required name="zila" value="{{$Job->zila}}" class="form-control" >
              </div>
            </div>
            <div class="col-md-12 pr-md-1">
              <div class="form-group">
                <label>House</label>
                <input type="text" required name="house" value="{{$Job->house}}" class="form-control" >
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 pr-md-1">
              <div class="form-group">
                <label>Job Location</label>
                <select type="text" required name="location" class="form-control" >
                  @foreach($locations as $location)
                  <option <?php if($location->location == $Job->location){echo"selected";} ?> >{{$location->location}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-12 pr-md-1">
              <div class="form-group">
                <label>Category</label>
                <select type="text" required name="category" class="form-control" >
                  @foreach($cats as $cat)
                  <option <?php if($cat->cat == $Job->category){echo "selected";} ?>>{{$cat->cat}}</option>
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
                  <option <?php if($Job->salary_type == "monthly"){echo "selected";} ?> value="monthly">monthly</option>
                  <option <?php if($Job->salary_type == "weekly"){echo "selected";} ?> value="weekly">weekly</option>
                  <option <?php if($Job->salary_type == "daily"){echo "selected";} ?> value="daily">daily</option>
                </select>
              </div>
            </div>
            <div class="col-md-12 pr-md-1">
              <div class="form-group">
                <label>Admin Salary</label>
                <input value="{{$Job->admin_salary}}" required name="admin_salary" type="text" class="form-control" >
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 pr-md-1">
              <div class="form-group">
                <label>Salary Date</label>
                <input type="text" value="{{$Job->salary_date}}" required required name="salary_date" class="form-control" >
              </div>
            </div>
            <div class="col-md-12 pr-md-1">
              <div class="form-group">
                <label>Office Hour</label>
                <input type="text" value="{{$Job->office_hour}}" required name="office_hour" class="form-control" >
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 pr-md-1">
              <div class="form-group">
                <label>Number of Employee</label>
                <input type="text" value="{{$Job->employee_number}}" required name="employee_number" class="form-control" >
              </div>
            </div>
            <div class="col-md-12 pr-md-1">
              <div class="form-group">
                <label>Male / Female?</label>
                <select type="text" required name="employee_type" class="form-control" >
                  <option <?php if($Job->employee_type == "male"){echo "selected";} ?> value="male">Male</option>
                  <option <?php if($Job->employee_type == "female"){echo "selected";} ?> value="female">Female</option>
                  <option <?php if($Job->employee_type == "any"){echo "selected";} ?> value="any">Any</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 pr-md-1">
              <div class="form-group">
                <label>Interview Need?</label>
                <select type="text" required name="interview" class="form-control" >
                  <option <?php if($Job->interview == 1){echo "selected";} ?>  value="1">Yes</option>
                  <option <?php if($Job->interview == 0){echo "selected";} ?> value="0">No</option>
                </select>
              </div>
            </div>
          </div>
          @if($Job->interview == 1)
          <div class="row">
            <div class="col-md-12 pr-md-1">
              <div class="form-group">
                <label>Interview Date</label>
                <input required value="{{$Job->interview_date}}" type="text" name="interview_date" class="form-control" >
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 pr-md-1" >
              <div class="form-group">
                <label>Interview Time</label>
                <div style="display: flex;flex-direction: row">
                  <select name="hour" class="form-control">
                    <option <?php if($Job->hour == '01'){echo "selected";} ?> value="01">01</option>
                    <option <?php if($Job->hour == '02'){echo "selected";} ?>  value="02">02</option>
                    <option <?php if($Job->hour == '03'){echo "selected";} ?>  value="03">03</option>
                    <option <?php if($Job->hour == '04'){echo "selected";} ?>  value="04">04</option>
                    <option <?php if($Job->hour == '05'){echo "selected";} ?>  value="05">05</option>
                    <option <?php if($Job->hour == '06'){echo "selected";} ?>  value="06">06</option>
                    <option <?php if($Job->hour == '07'){echo "selected";} ?>  value="07">07</option>
                    <option <?php if($Job->hour == '08'){echo "selected";} ?>  value="08">08</option>
                    <option <?php if($Job->hour == '09'){echo "selected";} ?>  value="09">09</option>
                    <option <?php if($Job->hour == '10'){echo "selected";} ?>  value="10">10</option>
                    <option <?php if($Job->hour == '11'){echo "selected";} ?>  value="11">11</option>
                    <option <?php if($Job->hour == '12'){echo "selected";} ?>  value="12">12</option>
                  </select>
                  <select name="min" class="form-control">
                    <option <?php if($Job->min == '00'){echo "selected";} ?>  value="00">00</option>
                    <option <?php if($Job->min == '15'){echo "selected";} ?>  value="15">15</option>
                    <option <?php if($Job->min == '30'){echo "selected";} ?>  value="30">30</option>
                    <option <?php if($Job->min == '45'){echo "selected";} ?>  value="45">45</option>
                  </select>
                  <select name="ampm" class="form-control">
                    <option <?php if($Job->ampm == 'AM'){echo "selected";} ?>  value="AM">AM</option>
                    <option <?php if($Job->ampm == 'PM'){echo "selected";} ?>  value="PM">PM</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          @endif
          <div class="row">
            <div class="col-md-12 pr-md-1">
              <div class="form-group">
                <label>Job Type</label>
                <select type="text" required name="job_type" class="form-control" >
                  <option <?php if($Job->job_type == "parttime"){echo "selected";} ?> value="parttime">Part Time</option>
                  <option <?php if($Job->job_type == "fulltime"){echo "selected";} ?> value="fulltime">Full Time</option>
                </select>
              </div>
            </div>
            <div class="col-md-12 pr-md-1">
              <div class="form-group">
                <label>Join Date</label>
                <input value="{{$Job->job_date}}" type="text" required name="job_date" class="form-control" >
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Educational Requirment</label>
                <input value="{{$Job->education}}" type="text" required name="education" class="form-control" >
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Job Responsibility</label>
                <textarea required="" class="form-control" name="job_responsibility" >{{$Job->job_responsibility}}</textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label style="margin-right: 20px;">Publish This Job</label>
                <label  style="margin-right: 5px">YES</label>
                <input <?php if($Job->active == 1){echo "checked"; }?> style="margin-right: 20px" type="radio" name="publish" value="1">
                <label style="margin-right: 5px">NO</label>
                <input <?php if($Job->active == 0){echo "checked"; }?> type="radio" name="publish" value="0">
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
  <div class="col-md-5">
    <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title">Who applied this job so far?</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter" id="">
            <thead class=" text-primary">
              <tr>
                <th>
                  Name
                </th>
                <th>
                  Phone
                </th>
                <th>
                  Age
                </th>
                <th class="text-center">
                  Action
                </th>
              </tr>
            </thead>
            <tbody>
            @foreach($Job->employees as $employee)
              <tr>
                <td>
                  {{$employee->name}}
                </td>
                <td>
                  {{$employee->phone}}
                </td>
                <td>
                  {{$employee->age}}
                </td>
                <td class="text-center">
                  <a href="{{url('employees/'.$employee->id)}}"  class="btn btn-fill btn-primary btn-sm"><i class="fa fa-search"></i></a>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
@endsection