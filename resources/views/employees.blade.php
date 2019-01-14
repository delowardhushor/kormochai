@extends('app')
@section('title', 'Employees')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title">All Employees</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">
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
                <th>
                  Gender
                </th>
                <th >
                  EDucation
                </th>
                <th >
                  Refer Code
                </th>
                <th>
                  Referred
                </th>
                <th class="text-center">
                  Action
                </th>
              </tr>
            </thead>
            <tbody>
            @foreach($employees as $employee)
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
                <td>
                  {{$employee->gender}}
                </td>
                <td>
                  <?php 
                      $educations = json_decode($employee->education, true); 
                  ?>
                  @foreach($educations as $education)
                      <li>{{$education['degreeName']}} from {{$education['institutionName']}}</li>
                  @endforeach
                </td>
                <td>
                  {{$employee->refer_code}}
                </td>
                <td>
                  {{$employee->referred}}
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
@endsection