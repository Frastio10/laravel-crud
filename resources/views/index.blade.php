@extends("layouts.main")

@section("content")

<div class="container">
	<div class="row pt-5">
		<a href="/create" class="btn btn-primary mb-3">Create Data</a>
		<table class="table border">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Name</th>
		      <th scope="col">Email</th>
		      <th scope="col">Password</th>
		      <th scope="col">Address</th>	
		      <th scope="col">Age</th>	
		      <th scope="col">Born</th>	
		      <th scope="col">Hobby</th>	
		      <th scope="col">Action</th>	
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($users as $user)
			    <tr>
			      <th scope="row">{{ $loop->iteration }}</th>
			      <td>{{ $user->name }}</td>
			      <td>{{ $user->email }}</td>
			      <td>{{ $user->password }}</td>
			      <td>{{ $user->address }}</td>
			      <td>{{ $user->age }}</td>
			      <td>{{ $user->born }}</td>	
			      <td>{{ $user->hobby }}</td>
			      <td>
			      	<a href="/user/{{ $user->id }}/edit" class="badge badge-primary">Edit</a>
			       	<a  href="{{ route('user.delete',  $user->id) }}" class="badge badge-danger">Delete</a>
			    </td>
			    </tr>
			@endforeach
		  </tbody>
		</table>
	</div>
</div>

@endsection

@section("js")

@endsection

@section("css")

@endsection
