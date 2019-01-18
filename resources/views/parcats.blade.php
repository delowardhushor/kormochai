@extends('app')
@section('title', "Category")

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h5 class="title">ADD Service Category</h5>
      </div>
      <form action="{{route('parcats.store')}}" method='POST'>
        @csrf
      <div class="card-body">
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <input name="cat" placeholder="Category" type="text" class="form-control" >
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
                <th>
                  Questions
                </th>
                <th class="text-center">
                  Action
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach($parcats as $parcat)
              <tr>
                <td>
                  {{$parcat->cat}}
                </td>
                <td>
                  <?php 
                      $questions = json_decode($parcat->question, true); 
                  ?>
                  @foreach($questions as $question)
                      <li>{{$question['qus']}}</li>
                  @endforeach
                </td>
                <td class="text-center">
                  <button class="btn btn-sm btn-fill btn-primary">
                    <i class="fa fa-search"></i>
                  </button>
                  <button class="btn btn-sm btn-fill btn-primary"
                  onclick="event.preventDefault();
                    if(confirm('Delete parcategory')){
                    document.getElementById('delete-form-{{$parcat->id}}').submit();
                  }">delete</button>
                  <form id="delete-form-{{$parcat->id}}" action="{{ url('/delparcats') }}" method="POST" style="display: none;">
                          @csrf
                          <input value="{{$parcat->id}}" name="id" />
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