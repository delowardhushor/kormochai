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
	      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$partnerservices->name}}">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="staticEmail" class="col-sm-4 col-form-label">Mobile: </label>
	    <div class="col-sm-8">
	      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$partnerservices->phone}}">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="staticEmail" class="col-sm-4 col-form-label">Company name: </label>
	    <div class="col-sm-8">
	      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$partnerservices->compnay_name}}">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="staticEmail" class="col-sm-4 col-form-label">Present Address: </label>
	  </div>
	  <div class="form-group row">
	    <label for="staticEmail" class="col-sm-4 col-form-label">Area: </label>
	    <div class="col-sm-8">
	      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$partnerservices->pre_area}}">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="staticEmail" class="col-sm-4 col-form-label">Thana: </label>
	    <div class="col-sm-8">
	      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$partnerservices->pre_thana}}">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="staticEmail" class="col-sm-4 col-form-label">District: </label>
	    <div class="col-sm-8">
	      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$partnerservices->pre_district}}">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="staticEmail" class="col-sm-4 col-form-label">House: </label>
	    <div class="col-sm-8">
	      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$partnerservices->pre_house}}">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="staticEmail" class="col-sm-4 col-form-label">Permament Address: </label>
	  </div>
	  <div class="form-group row">
	    <label for="staticEmail" class="col-sm-4 col-form-label">Area: </label>
	    <div class="col-sm-8">
	      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$partnerservices->per_area}}">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="staticEmail" class="col-sm-4 col-form-label">Thana: </label>
	    <div class="col-sm-8">
	      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$partnerservices->per_thana}}">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="staticEmail" class="col-sm-4 col-form-label">District: </label>
	    <div class="col-sm-8">
	      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$partnerservices->per_district}}">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="staticEmail" class="col-sm-4 col-form-label">House: </label>
	    <div class="col-sm-8">
	      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$partnerservices->per_house}}">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="staticEmail" class="col-sm-4 bold col-form-label">Professional Details: </label>
	  </div>
	  <?php
        $profession = json_decode($partnerservices->profession, true);
      ?>
	  <div class="form-group row">
	    <label for="staticEmail" class="col-sm-4 col-form-label">profession: </label>
	    <div class="col-sm-8">
	      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$profession['cat']}}">
	    </div>
	  </div>
	  @foreach(json_decode($profession['question']) as $question)
	  <div class="form-group row">
	    <label for="staticEmail" class="col-sm-4 col-form-label">{{$question->qus}}: </label>
	    <div class="col-sm-8">
	      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$question->ans}}">
	    </div>
	  </div>
	  @endforeach
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