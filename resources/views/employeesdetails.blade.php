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
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Reffered</label>
                <input type="text" class="form-control" value="{{$employee->referred}}" />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <h3>Present Address</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Area</label>
                <input type="text" class="form-control" value="{{$employee->area}}" />
              </div>
            </div>
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Post</label>
                <input type="text" class="form-control" value="{{$employee->post}}" />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Thana</label>
                <input type="text" class="form-control" value="{{$employee->thana}}" />
              </div>
            </div>
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>District</label>
                <input type="text" class="form-control" value="{{$employee->district}}" />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <h3>Permanent Address</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Area</label>
                <input type="text" class="form-control" value="{{$employee->perarea}}" />
              </div>
            </div>
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Post</label>
                <input type="text" class="form-control" value="{{$employee->perpost}}" />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Thana</label>
                <input type="text" class="form-control" value="{{$employee->perthana}}" />
              </div>
            </div>
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>District</label>
                <input type="text" class="form-control" value="{{$employee->perdistrict}}" />
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
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title">Applied Job</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
              <tr>
                <th>
                  Title
                </th>
                <th>
                  Location
                </th>
                <th>
                  Salary
                </th>
                <th >
                  Posted By
                </th>
                <th >
                  Total Apply
                </th>
                <th class="text-center">
                  Action
                </th>
              </tr>
            </thead>
            <tbody>
            @foreach($employee->jobs as $Job)
              <tr>
                <td>
                  {{$Job->job_title}}
                </td>
                <td>
                  {{$Job->location}}
                </td>
                <td>
                  ৳ {{$Job->salary}} / {{$Job->salary_type}}
                </td>
                <td>
                  <?php 
                    if($Job->employers_id > 0){
                      echo $Job->employers->phone;
                    }else{
                      echo "Admin";
                    } 
                  ?>
                </td>
                <td>
                  {{count($Job->employees)}}
                </td>
                <td class="text-center">
                  <a href="{{url('jobs/'.$Job->id)}}"  class="btn btn-fill btn-primary btn-sm"><i class="fa fa-search"></i></a>
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
@endsection