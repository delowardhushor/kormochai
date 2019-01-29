@extends('app')
@section('title', "Job's Details")

@section('content')
<div class="row">
  <div class="col-md-7">
    <div class="card">
      <div class="card-header">
        <h5 class="title">{{$Job->job_title}}'s Details</h5>
      </div>
      <div class="card-body">
        <form method="POST" action="{{url('job/update')}}">
          @csrf
          <input type="text" style="display: none;" value="{{$Job->id}}" name="id" />
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Name</label>
                <div type="text" class="form-control" >
                  {{$Job->name}}
                </div>
              </div>
            </div>
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Mobile</label>
                <div type="text" class="form-control" >
                  {{$Job->mobile}}
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Job Title</label>
                <div type="text" class="form-control" >
                  {{$Job->job_title}}
                </div>
              </div>
            </div>
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Company Name</label>
                <div type="text" class="form-control" >
                  {{$Job->company_name}}
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Area</label>
                <div type="text" class="form-control" >
                  {{$Job->area}}
                </div>
              </div>
            </div>
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Thana</label>
                <div type="text" class="form-control" >
                  {{$Job->thana}}
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>District</label>
                <div type="text" class="form-control" >
                  {{$Job->zila}}
                </div>
              </div>
            </div>
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>House</label>
                <div type="text" class="form-control" >
                  {{$Job->house}}
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Job Location</label>
                <div type="text" class="form-control" >
                  {{$Job->location}}
                </div>
              </div>
            </div>
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Category</label>
                <div type="text" class="form-control" >
                  {{$Job->category}}
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Salary</label>
                <div type="text" class="form-control" >
                  {{$Job->salary}} / {{$Job->salary_type}}
                </div>
              </div>
            </div>
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Admin Salary</label>
                <input value="{{$Job->admin_salary}}" name="admin_salary" type="text" class="form-control" >
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Salary Date</label>
                <div type="text" class="form-control" >
                  {{$Job->salary_date}}
                </div>
              </div>
            </div>
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Office Hour</label>
                <div type="text" class="form-control" >
                  {{$Job->office_hour}}
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Number of Employee</label>
                <div type="text" class="form-control" >
                  {{$Job->employee_number}}
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Interview Need?</label>
                <div type="text" class="form-control" >
                  <?php if($Job->interview){echo "Yes";}else{ echo'NO';} ?>
                </div>
              </div>
            </div>
            <?php if($Job->interview){?>
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Interview Date</label>
                <div type="text" class="form-control" >
                  {{$Job->interview_date}}
                </div>
              </div>
            </div>
          <?php } ?>
          </div>
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Job Type</label>
                <div type="text" class="form-control" >
                  {{$Job->job_type}}
                </div>
              </div>
            </div>
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Job Date</label>
                <div type="text" class="form-control" >
                  {{$Job->job_date}}
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Educational Requirment</label>
                <div type="text" class="form-control" >
                  {{$Job->education}}
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Job Responsibility</label>
                <div type="text" class="form-control" >
                  {{$Job->job_responsibility}}
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label style="margin-right: 20px;">Publish This Job</label>
                <label style="margin-right: 5px">YES</label>
                <input <?php if($Job->active == 1){echo'checked';} ?> style="margin-right: 20px" type="radio" name="publish" value="1">
                <label style="margin-right: 5px">NO</label>
                <input <?php if($Job->active == 0){echo'checked';} ?> type="radio" name="publish" value="0">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <button class="btn btn-sm btn-primary" type="submit">Update</button>
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