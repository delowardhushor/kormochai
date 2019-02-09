<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<style type="text/css">
		.page{
			padding: 20px 80px 50px;
			position: absolute;
			top: 200px;
			right: 0;
			bottom: : 0;
			left: 0;

		}
		.logo{
			width: 100px;
			margin:0 auto;
		}
		.logo-wrapper{
			display: flex;
			align-items: center;			
		}
		.form-control-plaintext{
			border-bottom: 1px dotted grey !important;
		}

	</style>

</head>
<body style="position: relative;">
	<img style="width:100%" src="{{asset('img/print.jpg')}}">
	<div class="page">
		<!-- <div class="logo-wrapper">
			<img class="logo" src="{{asset('img/logo.png')}}">
		</div>
		<h2 class="text-center" style="margin-bottom: 30px;">KORMOCHAI</h2> -->
	  <div class="form-group row">
	    <label for="staticEmail" class="col-sm-4 col-form-label">Name: </label>
	    <div class="col-sm-8">
	      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$Jobs->name}}">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="staticEmail" class="col-sm-4 col-form-label">Mobile: </label>
	    <div class="col-sm-8">
	      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$Jobs->mobile}}">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="staticEmail" class="col-sm-4 col-form-label">Company Name: </label>
	    <div class="col-sm-8">
	      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$Jobs->company_name}}">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="staticEmail" class="col-sm-4 col-form-label">Company Address: </label>
	  </div>
	  <div class="form-group row">
	    <label for="staticEmail" class="col-sm-4 col-form-label">Area: </label>
	    <div class="col-sm-8">
	      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$Jobs->area}}">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="staticEmail" class="col-sm-4 col-form-label">Thana: </label>
	    <div class="col-sm-8">
	      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$Jobs->thana}}">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="staticEmail" class="col-sm-4 col-form-label">District: </label>
	    <div class="col-sm-8">
	      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$Jobs->zila}}">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="staticEmail" class="col-sm-4 col-form-label">House: </label>
	    <div class="col-sm-8">
	      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$Jobs->house}}">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="staticEmail" class="col-sm-4 col-form-label">Job Type: </label>
	    <div class="col-sm-8">
	      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$Jobs->job_type}} / {{$Jobs->office_hour}}">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="staticEmail" class="col-sm-4 col-form-label">Job Type: </label>
	    <div class="col-sm-8">
	      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$Jobs->job_type}} / {{$Jobs->office_hour}}">
	    </div>
	  </div>
	  <fieldset class="form-group">
	    <div class="row">
	      <legend class="col-form-label col-sm-4 pt-0">Gender</legend>
	      <div class="col-sm-8">
	        <div class="form-check">
	          <input <?php if($Jobs->employee_type == 'male'){ echo "checked"; }?> class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
	          <label  class="form-check-label" for="gridRadios1">
	            Male
	          </label>
	        </div>
	        <div class="form-check">
	          <input <?php if($Jobs->employee_type == 'female'){ echo "checked"; }?> class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
	          <label class="form-check-label" for="gridRadios2">
	            Female
	          </label>
	        </div>
	      </div>
	    </div>
	  </fieldset>
	  <div class="form-group row">
	    <label for="staticEmail" class="col-sm-4 col-form-label">Interview Need? </label>
	    <div class="col-sm-8">
	      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php if($Jobs->interview == 1){echo "Yes";}else{echo "No";} ?>">
	    </div>
	  </div>
	  <?php if($Jobs->interview == 1){?>
	  <div class="form-group row">
	    <label for="staticEmail" class="col-sm-4 col-form-label">Interview Date? </label>
	    <div class="col-sm-8">
	      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$Jobs->interview_date}}">
	    </div>
	  </div>
	  <?php } ?>
	  <div class="form-group row">
	    <label for="staticEmail" class="col-sm-4 col-form-label">Employee Number </label>
	    <div class="col-sm-8">
	      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$Jobs->employee_number}}">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="staticEmail" class="col-sm-4 col-form-label">Salary </label>
	    <div class="col-sm-8">
	      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$Jobs->salary}} / {{$Jobs->salary_type}}">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="staticEmail" class="col-sm-4 col-form-label">Salary Date</label>
	    <div class="col-sm-8">
	      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$Jobs->salary_date}}">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="staticEmail" class="col-sm-4 col-form-label">Location</label>
	    <div class="col-sm-8">
	      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$Jobs->location}}">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="staticEmail" class="col-sm-4 col-form-label">Education</label>
	    <div class="col-sm-8">
	      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$Jobs->education}}">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="staticEmail" class="col-sm-4 col-form-label">Responsibility</label>
	    <div class="col-sm-8">
	      <textarea type="text" readonly class="form-control-plaintext" id="staticEmail" >{{$Jobs->job_responsibility}}"</textarea>
	    </div>
	  </div>
	</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script>
window.onload = function myFunction() {
    window.print();
}
</script>
</body>
</html>