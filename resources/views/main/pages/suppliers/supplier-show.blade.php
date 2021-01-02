@extends('main.layouts.app')

@section('title', 'User Add')



@section('content')


    <div class="app-content">
        <div class="side-app">
        <div class="page-header">    
            						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">Form-Wizard</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Forms</a></li>
									<li class="breadcrumb-item active" aria-current="page">Form-Wizard</li>
								</ol>
							</div>							
						<!-- PAGE-HEADER END -->
            <!-- /Notification -->
							@include('main.components.notification')
<!-- /Notification Ends -->
  
		</div> 

			<h4 class="col-auto text-primary">Supplier Add Here</h4>
			<div class="form-row">
				<div class="col-md-6 mb-3">
					@if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <h5 class="text-center">{{ $message }}</h5>
                </div>
                @endif
			<form action="{{ route('supplier.store') }}" method="POST" enctype="multipart/form-data">
			@csrf
				<div class="col-auto">
					<label class="sr-only" for="inlineFormInputGroup">Supplier Name</label>
					<div class="input-group mb-2">
					<div class="input-group-prepend">
					<div class="input-group-text"><i class="fa fa-user-circle-o" data-toggle="tooltip" title="fa fa-user-circle-o"></i></div>
					</div>
					<input type="text" name="name" class="form-control" id="inlineFormInputGroup" placeholder="User Name">
				</div>
				</div>
				<div class="col-auto">
					<label class="sr-only" for="inlineFormInputGroup">Supplier Email</label>
					<div class="input-group mb-2">
					<div class="input-group-prepend">
					<div class="input-group-text"><i class="fa fa-envelope" data-toggle="tooltip" title="fa fa-envelope"></i></div>
					</div>
					<input type="text" name="email" class="form-control" id="inlineFormInputGroup" placeholder="Email">
				</div>
				</div>
				<div class="col-auto">
					<label class="sr-only" for="inlineFormInputGroup">Supplier Company</label>
					<div class="input-group mb-2">
					<div class="input-group-prepend">
					<div class="input-group-text"><i class="fa fa-unlock" data-toggle="tooltip" title="fa fa-unlock"></i></div>
					</div>
					<input type="text" name="company" class="form-control" id="inlineFormInputGroup" placeholder="Password">
				</div>
				</div>
				<div class="col-auto">
					<label class="sr-only" for="inlineFormInputGroup">Supplier Contact Number</label>
					<div class="input-group mb-2">
					<div class="input-group-prepend">
					<div class="input-group-text"><i class="fa fa-phone-square" data-toggle="tooltip" title="fa fa-phone-square"></i></div>
					</div>
					<input type="text" name="contact" class="form-control" id="inlineFormInputGroup" placeholder="Contact Number">
				</div>
				</div>
				<div class="col-auto">
					<label class="sr-only" for="inlineFormInputGroup">Supplier Image</label>
					<div class="input-group mb-2">
					<div class="input-group-prepend">
					<div class="input-group-text"><i class="fa fa-file-o" data-toggle="tooltip" title="fa fa-file-o"></i></div>
					</div>
					<input type="file" name="file" class="form-control" id="inlineFormInputGroup">
					</div>
				</div>
				<div class="col-auto">
					<label class="sr-only" for="inlineFormInputGroup">Gender</label>
					<div class="input-group mb-2">
					<div class="input-group-prepend">
					<div class="input-group-text"><i class="fa fa-group" data-toggle="tooltip" title="fa fa-group"></i></div>
					</div>
					<label for="customRadio2">&nbsp;<b> Gender</b></label>
					<input type="radio" class="m-1" id="customRadio1" name="gender" value="male">Male
					<input type="radio" class="m-1" id="customRadio2" name="gender" value="female">Female
				</div>
				</div>
				<div class="col-auto">
					<label class="sr-only" for="inlineFormInputGroup">Supplier Type</label>
					<div class="input-group mb-2">
					<div class="input-group-prepend">
					<div class="input-group-text"><i class="fa fa-user-o" data-toggle="tooltip" title="fa fa-user-o"></i></div>
					</div>
					<select id="check" class="form-control" name="type">
						<option>Select Supplier Type</option>
						@foreach ($supplierType as $key => $value)
							<option value="{{ $value->id }}"> 
								{{ $value->name }} 
							</option>
						@endforeach    
					</select>
				</div>
			</div>
				<button type="submit" class="btn btn-primary">Submit</button>
		</form>
			</div>
		</div>
    

					</div>
				</div>
				<!-- CONTAINER CLOSED -->
			</div>

@endsection