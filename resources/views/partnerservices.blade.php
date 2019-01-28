@extends('app')
@section('title', 'Services')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title">ALL Service</h4>
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
                  Company Name
                </th>
                <th >
                  Service / Profession
                </th>
                <th class="text-center">
                  Action
                </th>
              </tr>
            </thead>
            <tbody>
            @foreach($partnerservices as $partnerservice)
              <tr>
                <td>
                  {{$partnerservice->name}}
                </td>
                <td>
                  {{$partnerservice->phone}}
                </td>
                <td>
                  {{$partnerservice->compnay_name}}
                </td>
                <td>
                  <?php 
                    $profession = json_decode($partnerservice->profession, true);
                  ?>
                  {{$profession['cat']}}
                </td>
                <td class="text-center">
                  <a href="{{url('partnerservices/'.$partnerservice->id)}}"  class="btn btn-fill btn-primary btn-sm"><i class="fa fa-search"></i></a>
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