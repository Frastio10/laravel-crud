@extends("layouts.main")

@section("title","Create Data")

@section("css")
<style>
	.form-wrapper{
		display: -webkit-flex;
		display: -moz-flex;
		display: -ms-flex;
		display: -o-flex;
		display: flex;
		justify-content: center;
		-ms-align-items: center;
		align-items: center;
		vertical-align: middle;
		height: 100vh;
	}
</style>
@endsection

@section("content")

<div class="container">
	<div class="row form-wrapper">
		<div class="col-md-5 mx-auto">
			<h1>Create Data</h1>
			<form method="post" action="/" enctype="multipart/form-data">
				@csrf
			  @if ($errors->any())
			  	<div class="alert alert-danger">
			  		<ul>
			  			@foreach ($errors->all() as $error)
			  				<li>{{ $error }}</li>
			  			@endforeach
			  		</ul>
			  	</div>
			  @endif
			  <div class="form-row">
			  	<div class="form-group col-md-6">
			      <label for="inputName">Name</label>
			      <input type="text" class="form-control" id="inputName" placeholder="Name" name="name" value="{{ old('name') }}">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputEmail4">Email</label>
			      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email" value="{{ old('email') }}">
			    </div>
			    <div class="form-group col-md-3">
			      <label for="inputAge">Age</label>
			      <input type="number" class="form-control" id="inputAge" placeholder="Age" name="age" value="{{ old('age') }}">
			    </div>
			     <div class="form-group col-md-6">
			      <label for="inputBorn">Born</label>
			      <input type="date" class="form-control" id="inputBorn" placeholder="Born" name="born" value="{{ old('born') }}">
			    </div>
			     <div class="form-group col-md-3">
			      <label for="inputHobby">Hobby</label>
			      <input type="text" class="form-control" id="inputHobby" placeholder="Hobby" name="hobby" value="{{ old('hobby') }}">
			    </div>
			    <div class="form-group col-md-12">
			      <label for="inputPassword4">Password</label>
			      <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
			    </div>
			  </div>
			  <div class="form-group d-flex flex-column">
			  	<label for="image">Profile Image</label>
			  	<input type="file" name="image" id="">
			  </div>
			  <div class="form-group">
			    <label for="inputAddress">Address</label>
			    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address" value="{{ old('address') }}">
			  </div>
			  <button type="submit" class="btn btn-primary">Create</button>
			  <a href="/">Back</a>
			  
			</form>
		</div>
	</div>
</div>

@endsection