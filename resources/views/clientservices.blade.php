@extends('app')
@section('title', 'Services')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title">ALL Requested Service</h4>
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
                  District
                </th>
                <th >
                  Service
                </th>
                <th class="text-center">
                  Action
                </th>
              </tr>
            </thead>
            <tbody>
            @foreach($clientservices as $clientservice)
              <tr>
                <td>
                  {{$clientservice->name}}
                </td>
                <td>
                  {{$clientservice->phone}}
                </td>
                <td>
                  {{$clientservice->district}}
                </td>
                <td>
                  <?php 
                    $service = json_decode($clientservice->service, true);
                  ?>
                  {{$service['cat']}}
                </td>
                <td class="text-center">
                  <a href="{{url('clientservices/'.$clientservice->id)}}"  class="btn btn-fill btn-primary btn-sm"><i class="fa fa-search"></i></a>
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