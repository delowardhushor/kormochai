@extends('app')
@section('title', "Category")

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h5 class="title">ADD Category</h5>
      </div>
      <form action="{{route('cats.store')}}" method='POST'>
        @csrf
      <div class="card-body">
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <input name="cats" placeholder="Category" type="text" class="form-control" >
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
        <h4 class="card-title">Categories List</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
              <tr>
                <th>
                  Category
                </th>
                <th class="text-center">
                  Action
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach($cats as $cat)
              <tr>
                <td>
                  {{$cat->cat}}
                </td>
                <td class="text-center">
                  <button class="btn btn-sm btn-fill btn-primary"
                  onclick="event.preventDefault();
                    if(confirm('Delete Category')){
                    document.getElementById('delete-form-{{$cat->id}}').submit();
                  }">delete</button>
                  <form id="delete-form-{{$cat->id}}" action="{{ url('/delcats') }}" method="POST" style="display: none;">
                          @csrf
                          <input value="{{$cat->id}}" name="id" />
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