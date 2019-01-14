@extends('app')
@section('title', "Locations")

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h5 class="title">ADD LOCATION</h5>
      </div>
      <form action="{{route('locations.store')}}" method='POST'>
        @csrf
      <div class="card-body">
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <input name="location" placeholder="Location" type="text" class="form-control" >
              </div>
            </div>
            <div class="col-md-6 pr-md-1">
              <button type="submit" class="btn btn-sm btn-fill btn-primary">Save</button>
            </div>
          </div>
      </div>
      </form>
    </div>
  </div>
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title">Simple Table</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
              <tr>
                <th>
                  Location
                </th>
                <th class="text-center">
                  Action
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach($locations as $location)
              <tr>
                <td>
                  {{$location->location}}
                </td>
                <td class="text-center">
                  <button class="btn btn-sm btn-fill btn-primary"
                  onclick="event.preventDefault();
                    if(confirm('Delete Location')){
                    document.getElementById('delete-form-{{$location->id}}').submit();
                  }">delete</button>
                  <form id="delete-form-{{$location->id}}" action="{{ url('/dellocations') }}" method="POST" style="display: none;">
                          @csrf
                          <input value="{{$location->id}}" name="id" />
                      </form>
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