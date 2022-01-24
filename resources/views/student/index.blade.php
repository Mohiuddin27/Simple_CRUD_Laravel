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
	
	<a href="{{url('student/create')}}" type="submit" class="btn btn-primary" style="margin-top:20px; margin-left:140px;margin-bottom:-50px;">Add Student</a><br><br><br>
	<div class="wrap-table shadow">
		<div class="card">
			<div class="card-body">
				<h2>All Data</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($data as $item)
						<tr>
							<td>{{$item->id}}</td>
							<td>{{$item->name}}</td>
							<td>{{$item->email}}</td>
							<td>{{$item->cell}}</td>
							<td><img src="assets/media/img/pp_photo/istockphoto-615279718-612x612.jpg" alt=""></td>
							<td>
								<a class="btn btn-sm btn-info" href={{"student/show/".$item['id']}}>View</a>
								<a class="btn btn-sm btn-warning" href="{{url('student/edit/'.$item['id'])}}">Edit</a>
								<a class="btn btn-sm btn-danger" href="{{"delete/".$item['id']}}">Delete</a>
							</td>
						</tr>
						@endforeach

					</tbody>
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