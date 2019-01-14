@extends('app')
@section('title', 'Home')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title">ALL JOBS</h4>
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
            @foreach($Jobs as $Job)
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
                  {{$Job->employers->phone}}
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