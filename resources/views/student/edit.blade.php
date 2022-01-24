<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{url('assets/css/style.css')}}">
	<link rel="stylesheet" href="{{url('assets/css/responsive.css')}}">
</head>
<body>
	
<a href="{{url('../student')}}" type="submit" class="btn btn-primary" style="margin-top:20px; margin-left:380px;margin-bottom:-50px;">Back</a><br><br><br>

	<div class="wrap shadow">
	
		<div class="card">
			<div class="card-body">
				<h2>Edit Data</h2>
				<form action="{{url('update/'.$data['id'])}}" method="POST">
				@csrf
				@method('PUT')
				<!-- <input name="id" type="hidden" value="{{$data['id']}}"> -->
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" value="{{$data['name']}}" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" value="{{$data['email']}}" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" value="{{$data['cell']}}" type="text">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input name="uname" class="form-control" value="{{$data['uname']}}" type="text">
					</div>
					<div class="form-group">
						<input class="btn btn-primary" type="submit" value="Sign Up">
					</div>
				</form>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="{{url('assets/js/jquery-3.4.1.min.js')}}"></script>
	<script src="{{url('assets/js/popper.min.js')}}"></script>
	<script src="{{url('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{url('assets/js/custom.js')}}"></script>
</body>
</html>