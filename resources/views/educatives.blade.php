@extends('app')
@section('title', "Educatives")

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h5 class="title">ADD EDUCATIVES</h5>
      </div>
      <form action="{{route('educatives.store')}}" enctype="multipart/form-data" method='POST'>
        @csrf
      <div class="card-body">
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Educative Title</label>
                <input required="" name="title" placeholder="Title" type="text" class="form-control" >
              </div>
            </div>
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Thumble</label>
                <input required="" name="thumble" style="position: relative; opacity: 1;" placeholder="Thumble Image" type="file"  />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Educative Link</label>
                <input required="" name="link" placeholder="Video Link" type="text" class="form-control" >
              </div>
            </div>
            <div class="col-md-6 pr-md-1">
              <button type="submit" class="btn btn-fill btn-primary mt-4">ADD</button>
            </div>
          </div>
      </div>
      </form>
    </div>
  </div>
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title">Educatives List</h4>
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
                  Thumble
                </th>
                <th>
                  Vedio Link
                </th>
                <th class="text-center">
                  Action
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach($educatives as $educative)
              <tr>
                <td>
                  {{$educative->title}}
                </td>
                <td>
                  <img style="width: 100px" src='img/{{$educative->thumble}}'  />
                </td>
                <td>
                  <a target="_blank" href="{{$educative->link}}">{{$educative->link}}</a>
                </td>
                <td class="text-center">
                  <button class="btn btn-sm btn-fill btn-primary"
                  onclick="event.preventDefault();
                    if(confirm('Delete educative')){
                    document.getElementById('delete-form-{{$educative->id}}').submit();
                  }">delete</button>
                  <form id="delete-form-{{$educative->id}}" action="{{ url('/deledue') }}" method="POST" style="display: none;">
                          @csrf
                          <input value="{{$educative->id}}" name="id" />
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