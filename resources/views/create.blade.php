@extends("layouts.main")

@section("content")

<div class="container">
	<div class="row">
		<form method="post" action="/" class="mt-3">
			@csrf
		  <div class="form-row">
		  	<div class="form-group col-md-6">
		      <label for="inputName">Name</label>
		      <input type="text" class="form-control" id="inputName" placeholder="Name" name="name">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">Email</label>
		      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
		    </div>
		    <div class="form-group col-md-3">
		      <label for="inputAge">Age</label>
		      <input type="number" class="form-control" id="inputAge" placeholder="Age" name="age">
		    </div>
		     <div class="form-group col-md-6">
		      <label for="inputBorn">Born</label>
		      <input type="text" class="form-control" id="inputBorn" placeholder="Born" name="born">
		    </div>
		     <div class="form-group col-md-3">
		      <label for="inputHobby">Hobby</label>
		      <input type="text" class="form-control" id="inputHobby" placeholder="Hobby" name="hobby">
		    </div>
		    <div class="form-group col-md-12">
		      <label for="inputPassword4">Password</label>
		      <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputAddress">Address</label>
		    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
		  </div>
		  <button type="submit" class="btn btn-primary">Create</button>
		</form>
	</div>
</div>

@endsection