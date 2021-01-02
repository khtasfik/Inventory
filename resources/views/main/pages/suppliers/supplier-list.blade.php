@extends('main.layouts.app')

@section('title', 'Suppliers List')

@section('content')

        <div class="app-content">
        <div class="side-app">
        <div class="page-header">    
            						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">Suppliers list</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Supplier</a></li>
									<li class="breadcrumb-item active" aria-current="page">Suppliers list</li>
								</ol>
							</div>							
						<!-- PAGE-HEADER END -->
			<!-- /Notification -->
			
				@include('main.components.notification')
				
                <!-- /Notification Ends -->
  
        </div> 
            						<!-- ROW OPEN -->
						<div class="row row-cards">
							<div class="col-lg-4 col-xl-3">
								
							</div><!-- COL-END -->
							<div class="col-lg-8 col-xl-9">
								<div class="input-group mb-5">
									<input type="text" class="form-control" placeholder="">
									<div class="input-group-append ">
										<button type="button" class="btn btn-secondary">
											<i class="fa fa-search" aria-hidden="true"></i>
										</button>
									</div>
								</div>
								<div class="card">
									<div class="card-header border-bottom-0 p-4">
										<h2 class="card-title"> Suppliers are Available</h2>
										<div class="page-options d-flex float-right">
											<a href="{{ route('supplier.create') }}" class="btn btn-sm btn-primary badge"><i class="mdi mdi-apps"></i>Add Suppliers</a>
										</div>
									</div>
									<div class="e-table px-5 pb-5">
										<div class="table-responsive table-lg">
											<table class="table table-bordered mb-0">
												@if ($message = Session::get('success'))
												<div class="alert alert-success">
													<h5 class="text-center">{{ $message }}</h5>
												</div>
												@endif
												<thead>
													<tr>
														<th class="text-center">Photo</th>
														<th>Supplier Name</th>
														<th>Email</th>
														<th>Phone</th>
														<th>Company Name</th>
														<th class="text-center">Actions</th>
													</tr>
												</thead>
												<tbody>
													@foreach($suppliers as $value)
													<tr>
														<td class="align-middle text-center"><img alt="image" class="avatar avatar-md rounded-circle" src="{{asset('storage/Suppliers'). '/' . $value->file }}"></td>
														<td class="text-nowrap align-middle">{{ $value->name }}</td>
														<td class="text-nowrap align-middle"><span>{{ $value->email }}</span></td>
														<td class="text-nowrap align-middle"><span>{{ $value->contact }}</span></td>
														<td class="text-nowrap align-middle"><span>{{ $value->company }}</span></td>

														<td class="text-center align-middle">
															<div class="btn-group align-top">
																<form action="{{ route('supplier.destroy', [$value->id]) }}" method="POST" enctype="multipart/form-data">
																@csrf
																<a href="{{ route('supplier.edit', [$value->id] ) }}" class="btn btn-sm btn-primary badge">Edit</a> 
                                                				@method('DELETE')
																<button type="submit" class="btn btn-sm btn-primary badge"><i class="fa fa-trash"></i></button>
																</form>
															</div>
														</td>
													</tr>
													@endforeach
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="mb-5">
									<ul class="pagination float-right">
										<li class="page-item page-prev disabled">
											<a class="page-link" href="#" tabindex="-1">Prev</a>
										</li>
										<li class="page-item active"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item"><a class="page-link" href="#">4</a></li>
										<li class="page-item"><a class="page-link" href="#">5</a></li>
										<li class="page-item page-next">
											<a class="page-link" href="#">Next</a>
										</li>
									</ul>
								</div>
							</div><!-- COL-END -->
						</div>
						<!-- ROW CLOSED -->
					</div>
				</div>
				<!-- CONTAINER CLOSED -->
			</div>
@endsection