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
						<form method="post" action="{{ route('supplier.update', $suppliers->id) }}" enctype="multipart/form-data">
						@csrf
                		@method('PATCH')
						<div class="row">
							<div class="col-lg-4 col-xl-4 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-body">
										<div class="text-center">
											<div class="userprofile">
												<div class="userpic  brround"> 
												<img src="{{ asset('storage/Suppliers'). '/' . $suppliers->file }}" alt="" class="userpicimg"><br><br>
												<input type="hidden" name="image" value="{{ $suppliers->file }}" />
												<input type="file" name="file" class="form-control" /> <br>
												</div>
												<h3 class="username text-dark mb-2"></h3>
												<p class="mb-1 text-muted"></p>
												<div class="text-center mb-4">
													
												</div>
												<div class="socials text-center mt-3">
													
												</div>
											</div>
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
													<input type="text" name="name" class="form-control" value="{{ $suppliers->sname }}" id="exampleInputname">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="form-group">
													<label for="exampleInputname1">Email</label>
													<input type="text" name="email" class="form-control" value="{{ $suppliers->email }}" id="exampleInputname1">
												</div>
											</div>
										</div>
										<div class="form-group">
											<label for="exampleInputEmail1">Contact Number</label>
											<input type="text" name="contact" class="form-control" value="{{ $suppliers->contact }}" id="exampleInputEmail1">
										</div>
										<div class="form-group">
											<label for="exampleInputnumber">Company Name</label>
											<input type="text" name="company" class="form-control" value="{{ $suppliers->company }}" id="exampleInputnumber">
										</div>
										<div class="form-group">
											<label for="exampleInputnumber">&nbsp; Gender</label>
											<input type="radio" class="m-1" id="exampleInputnumber" name="gender" value="male" {{ $suppliers->gender == 'male' ? 'checked' : ''}}>Male
											<input type="radio" class="m-1" id="exampleInputnumber" name="gender" value="female" {{ $suppliers->gender == 'female' ? 'checked' : ''}}>Female
										</div>
										<div class="form-group">
											<label for="exampleInputnumber">Supplier Type</label>
											<select id="check" class="form-control" name="type">
    											<option value="{{ $suppliers->id }}"> {{ $suppliers->name }} </option>
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