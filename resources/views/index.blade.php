@extends("layouts.main")

@section("title","User Data")

@section("content")

<div class="container">
	<div class="row pt-5">
		<div class="input-group float-right">
			  <h3 class="float-left">User's Data</h3>

			 <form class="form-inline my-2 my-lg-0 ml-auto" method="get" action="/search">
		      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		      <a href="/create" class="btn btn-primary ml-2">Create Data</a>
		    </form>
		</div>
		<table class="table border mt-3">
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
		      <th scope="col">Images</th>	
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
			      	<img src="{{ asset('assets/images/userprofile-1.jpg') }}" class="user-image" alt="">
			      </td>
			      <td>
			      	<a href="/user/{{ $user->id }}/edit" class="badge badge-primary">Edit</a>
			       	<a  href="{{ route('user.delete',  $user->id) }}" class="badge badge-danger">Delete</a>
			      </td>
			     
			    </tr>
			@endforeach
		  </tbody>
		</table>
		{{ $users->links() }}
	</div>
</div>

@endsection

@section("js")

@endsection

@section("css")

@endsection
