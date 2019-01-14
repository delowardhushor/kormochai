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
                <div type="text" class="form-control" >
                  {{$employee->name}}
                </div>
              </div>
            </div>
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Age</label>
                <div type="text" class="form-control" >
                  {{$employee->age}}
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Phone</label>
                <div type="text" class="form-control" >
                  {{$employee->phone}}
                </div>
              </div>
            </div>
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Refer Code</label>
                <div type="text" class="form-control" >
                  {{$employee->refer_code}}
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card ">
                <div class="card-header">
                  <h4 class="card-title">Employee Education Details</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table tablesorter" id="">
                      <thead class=" text-primary">
                        <tr>
                          <th>
                            Institution Name
                          </th>
                          <th>
                            Degree Name
                          </th>
                          <th>
                            Result
                          </th>
                          <th>
                            Time
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach(json_decode($employee->education, true) as $education)
                        <tr>
                          <td>
                            {{$education['institutionName']}}
                          </td>
                          <td>
                            {{$education['degreeName']}}
                          </td>
                          <td>
                            {{$education['result']}}
                          </td>
                          <td>
                            {{$education['startDate']}} - <?php if($education['endDate'] == ''){ echo 'Present';}else{echo $education['endDate']; }?>
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
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Reffered</label>
                <div type="text" class="form-control" >
                  {{$employee->referred}}
                </div>
              </div>
            </div>
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Area</label>
                <div type="text" class="form-control" >
                  {{$employee->area}}
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Post</label>
                <div type="text" class="form-control" >
                  {{$employee->post}}
                </div>
              </div>
            </div>
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Thana</label>
                <div type="text" class="form-control" >
                  {{$employee->thana}}
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>District</label>
                <div type="text" class="form-control" >
                  {{$employee->district}}
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Address</label>
                <div type="text" class="form-control" >
                  {{$employee->address}}
                </div>
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