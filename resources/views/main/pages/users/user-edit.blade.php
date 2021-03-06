@extends('main.layouts.app')

@section('title', 'User Add')

@section('content')

<!-- /Mobile Header -->
        <div class="app-content">
        <div class="side-app">
        <div class="page-header">    
            						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">Edit Profile</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Pages</a></li>
									<li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
								</ol>
							</div>							
						<!-- PAGE-HEADER END -->
            <!-- /Notification -->
							@include('main.components.notification')
<!-- /Notification Ends -->
  
        </div> 
									<!-- ROW-1 OPEN -->
						<form method="POST" action="{{ route('users.update', [$users->id]) }}" enctype="multipart/form-data">
						@csrf
                		@method('PATCH')
						<div class="row">
							<div class="col-lg-4 col-xl-4 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-body">
										<div class="text-center">
											<div class="userprofile">
												<div class="userpic  brround"> 
													<img src="{{ asset('storage/file'). '/' . $users->file }}" alt="" class="userpicimg"><br><br>
												</div>
											</div>
										</div>
									</div>
									<div class="p-3">
											<input type="hidden" name="file" value="{{ $users->file }}" class="form-control" />
											<input type="file" name="file" class="form-control" />
										</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div class="card-title">Edit Password</div>
									</div>
									<div class="card-body">
										<div class="form-group">
											<label class="form-label">New Password</label>
											<input type="password" name="password" class="form-control">
										</div>
										<div class="form-group">
											<label class="form-label">Confirm Password</label>
											<input type="password" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-8 col-xl-8 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Edit Profile</h3>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="form-group">
													<label for="exampleInputname">Name</label>
													<input type="text" name="name" class="form-control" id="exampleInputname" value="{{ $users->aname }}">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="form-group">
													<label for="exampleInputname1">Email</label>
													<input type="email" name="email" class="form-control" id="exampleInputname1"value="{{ $users->email }}">
												</div>
											</div>
										</div>
										<div class="form-group">
											<label for="exampleInputEmail1">Contact Number</label>
											<input type="number" name="contact" class="form-control" id="exampleInputEmail1" value="{{ $users->contact }}">
										</div>
										<div class="form-group">
											<label for="exampleInputnumber">&nbsp; Gender</label>
											<input type="radio" class="m-1" name="gender" value="male" {{ $users->gender == 'male' ? 'checked' : ''}}>Male
											<input type="radio" class="m-1" name="gender" value="female" {{ $users->gender == 'female' ? 'checked' : ''}}>Female
										</div>
										<div class="form-group">
											<label for="exampleInputnumber">User Type</label>
											<select id="check" class="form-control" name="type">
    											<option value="{{ $users->id }}"> {{ $users->name }} </option>
											</select>
										</div>
									</div>
									<div class="card-footer">
										<button type="submit" class="btn btn-success mt-1">Save</button>
										<button type="submit" class="btn btn-danger mt-1">Cancel</button>
									</div>
								</div>
							</div>
						</div>
						</form>
						<!-- ROW-1 CLOSED -->
					</div>
				</div>
				<!--CONTAINER CLOSED -->
			</div>
@endsection