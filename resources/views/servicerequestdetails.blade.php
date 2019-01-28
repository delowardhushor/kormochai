@extends('app')
@section('title', "Service Request Details")

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h5 class="title">Service Requested Details</h5>
      </div>
      <div class="card-body">
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Name</label>
                <div type="text" class="form-control" >
                  {{$clientservices->name}}
                </div>
              </div>
            </div>
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Mobile</label>
                <div type="text" class="form-control" >
                  {{$clientservices->phone}}
                </div>
              </div>
            </div>
          </div>
          <?php
            $service = json_decode($clientservices->service, true);
          ?>
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Service</label>
                <div type="text" class="form-control" >
                  {{$service['cat']}}
                </div>
              </div>
            </div>
          </div>
          @foreach(json_decode($service['question']) as $question)
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>{{$question->qus}}</label>
                <div type="text" class="form-control" >
                  {{$question->ans}}
                </div>
              </div>
            </div>
          </div>
          @endforeach
          <div class="row">
            <div class="col-md-12">
              <h5 class="title">Address</h5>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Area</label>
                <div type="text" class="form-control" >
                  {{$clientservices->area}}
                </div>
              </div>
            </div>
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Thana</label>
                <div type="text" class="form-control" >
                  {{$clientservices->thana}}
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>District</label>
                <div type="text" class="form-control" >
                  {{$clientservices->district}}
                </div>
              </div>
            </div>
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>House</label>
                <div type="text" class="form-control" >
                  {{$clientservices->house}}
                </div>
              </div>
            </div>
          </div>
          
          <!-- <div class="row">
            <div class="col-md-12">
              <button class="btn btn-sm btn-primary" type="submit">Update</button>
            </div>
          </div> -->
      </div>
      <!-- <div class="card-footer">
        <button type="submit" class="btn btn-fill btn-primary">Save</button>
      </div> -->
    </div>
  </div>
</div>
@endsection