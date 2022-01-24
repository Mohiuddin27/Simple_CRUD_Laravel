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
	
		<h2 class="text-center">Profile data</h2>
		<div class="card">
		<img style="width:200px;display:block;margin:0 auto;border-radius:50%"src="{{url('assets/media/img/pp_photo/istockphoto-615279718-612x612.jpg')}}" alt="">
		<div class="card-body">
		<table class="table table-striped">
                     <tr>
                         <td>Name :</td>
                         <td>{{$data->name}}</td>
                     </tr>
                     <tr>
                         <td>Email :</td>
                         <td>{{$data->email}}</td>
                     </tr>
                     <tr>
                         <td>Cell :</td>
                         <td>{{$data->cell}}</td>
                     </tr>
					 <tr>
                         <td>Uname :</td>
                         <td>{{$data->uname}}</td>
                     </tr>
                     
                 </table>
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