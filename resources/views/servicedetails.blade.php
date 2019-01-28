@extends('app')
@section('title', "Job's Details")

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h5 class="title">Service Details</h5>
      </div>
      <div class="card-body">
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Name</label>
                <div type="text" class="form-control" >
                  {{$partnerservices->name}}
                </div>
              </div>
            </div>
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Mobile</label>
                <div type="text" class="form-control" >
                  {{$partnerservices->phone}}
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Company Name</label>
                <div type="text" class="form-control" >
                  {{$partnerservices->compnay_name}}
                </div>
              </div>
            </div>
          </div>
          
          <?php
            $profession = json_decode($partnerservices->profession, true);
          ?>
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Service</label>
                <div type="text" class="form-control" >
                  {{$profession['cat']}}
                </div>
              </div>
            </div>
          </div>
          @foreach(json_decode($profession['question']) as $question)
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
              <h5 class="title">Permament Address</h5>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Area</label>
                <div type="text" class="form-control" >
                  {{$partnerservices->per_area}}
                </div>
              </div>
            </div>
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Thana</label>
                <div type="text" class="form-control" >
                  {{$partnerservices->per_thana}}
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>District</label>
                <div type="text" class="form-control" >
                  {{$partnerservices->per_district}}
                </div>
              </div>
            </div>
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>House</label>
                <div type="text" class="form-control" >
                  {{$partnerservices->per_house}}
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <h5 class="title">Present Address</h5>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Area</label>
                <div type="text" class="form-control" >
                  {{$partnerservices->pre_area}}
                </div>
              </div>
            </div>
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>Thana</label>
                <div type="text" class="form-control" >
                  {{$partnerservices->pre_thana}}
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>District</label>
                <div type="text" class="form-control" >
                  {{$partnerservices->pre_district}}
                </div>
              </div>
            </div>
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>House</label>
                <div type="text" class="form-control" >
                  {{$partnerservices->pre_house}}
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