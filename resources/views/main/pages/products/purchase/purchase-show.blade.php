@push('css')
	<link href="{{ asset('assets/css/input-form.css') }}" rel="stylesheet" />
@endpush

@extends('main.layouts.app')

@section('title', 'Product Purchase')

@section('content')


    <div class="app-content">
        <div class="side-app">
        <div class="page-header">    
            						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">Form-Wizard</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Purchase</a></li>
									<li class="breadcrumb-item active" aria-current="page">Form-Wizard</li>
								</ol>
							</div>							
						<!-- PAGE-HEADER END -->
            <!-- /Notification -->
							@include('main.components.notification')
<!-- /Notification Ends -->
  
		</div> 

			<h4 class="col-auto text-primary">Purchase Add</h4>
			<div class="container py-5">
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="card rounded-0 border-0 shadow">
                <div class="card-body p-5">
				<form action="{{ route('purchase.store') }}" method="POST">
				@csrf
				<div class="form-group ml-auto col-lg-3">
                <h4><i>Date</i></h4>
					<input class="form-control" type="date" name="date">
				</div>
                
                <div class="col-auto">
					<label class="sr-only" for="inlineFormInputGroup">Supplier Name</label>
					<div class="input-group mb-2">
					<div class="input-group-prepend">
					<div class="input-group-text"><i class="fa fa-user-circle-o" data-toggle="tooltip" title="fa fa-user-circle-o"></i></div>
					</div>
					<input type="text" name="sname" class="form-control col-lg-3" id="inlineFormInputGroup" placeholder="Supplier Name">
				</div>
				</div>
				<div class="col-auto">
					<label class="sr-only" for="inlineFormInputGroup">Supplier Email</label>
					<div class="input-group mb-2">
					<div class="input-group-prepend">
					<div class="input-group-text"><i class="fa fa-envelope" data-toggle="tooltip" title="fa fa-envelope"></i></div>
					</div>
					<input type="text" name="email" class="form-control col-lg-3" id="inlineFormInputGroup" placeholder="Email">
				</div>
                    
                    <!--  Bootstrap table-->
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Unit Cost</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Free Quantity</th>
                                    <th scope="col">Sub Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                    <th scope="row">1</th>
                                    <td><input class="form-control rounded-0" type="text" name="product[]" placeholder="Product"></td>
                                    <td><input class="form-control rounded-0" type="number" name="unit[]" placeholder="Unit Cost"></td>
                                    <td><input class="form-control rounded-0" type="number" name="quantity[]" placeholder="Quantity"></td>
                                    <td><input class="form-control rounded-0" type="number" name="fquantity[]" placeholder="Free Quantity"></td>
                                    <td><input class="form-control rounded-0" type="number" name="stotal[]" placeholder="Sub Total"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Add rows button-->
                    <button type="submit" class="btn btn-primary rounded-0 mb-2">Purchase</button>
                    <button class="btn btn-primary rounded-0 btn-block" id="insertRow">Add Product</button>
                </div>
				</form>
            </div>
        </div>
    </div>
</div>
		</div>
					</div>
				</div>
				<!-- CONTAINER CLOSED -->
			</div>

@endsection

@push('js')
<script src="{{ asset('assets/js/input-form.js') }}"></script>

@endpush