@extends('app')
@section('title', "Partner Category Details")

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h5 class="title">ADD Category Question</h5>
      </div>
      <form action="{{url('/parcats/addqus')}}" method='POST'>
        @csrf
      <div class="card-body">
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <input name="question" placeholder="Question" type="text" class="form-control" >
                <input name="id" value="{{$parcats->id}}" style="display: none">
              </div>
            </div>
            <div class="col-md-6 pr-md-1">
              <button type="submit" class="btn btn-sm btn-fill btn-primary">Add</button>
            </div>
          </div>
      </div>
      </form>
    </div>
  </div>
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title">Question List</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
              <tr>
                <th>
                  Questions
                </th>
                <th class="text-center">
                  Action
                </th>
              </tr>
            </thead>
            <tbody>
              <?php 
                $index = 0;
                $questions = json_decode($parcats->question, true); 
              ?>
              @foreach($questions as $question)
              <tr>
                <td>
                  {{$question['qus']}}
                </td>
                <td class="text-center">
                  <button class="btn btn-sm btn-fill btn-primary"
                  onclick="event.preventDefault();
                    if(confirm('Delete Question')){
                    document.getElementById('delete-form-{{$index}}').submit();
                  }">delete</button>
                  <form id="delete-form-{{$index}}" action="{{ url('/parcats/delqus') }}" method="POST" style="display: none;">
                          @csrf
                          <input value="{{$parcats->id}}" name="id" />
                          <input value="{{$index}}" name="index" />
                      </form>
                </td>
              </tr>
              <?php $index = $index + 1; ?>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection