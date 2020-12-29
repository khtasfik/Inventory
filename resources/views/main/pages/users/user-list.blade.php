@extends('main.layouts.app')

@section('title', 'User List')

@section('content')

        <div class="app-content">
        <div class="side-app">
        <div class="page-header">    
            						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">User list</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Advanced Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">User list</li>
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
								<div class="card">
									<div class=" userlist bg-primary ">
										<div class="card-body text-center">
											<div class="userprofile mt-0">
												<div class="userpic"> <img src="{{asset('storage/file'). '/' . Auth::user()->file }}" alt="" class="userpicimg"> </div><br>
												<h3 class="username">{{ Auth::user()->name }}</h3>
												<p class="text-white mb-1">Administrator</p>
												<p class="text-white">Green Road Dhaka</p>
											</div>
											  <br>
											<p class="mb-0"><span class="text-white">Email : </span><a href="#" class="text-white-transparent">tasfik@gmail.com</a></p>
											<p class="mb-0"><span class="text-white">Phone no :</span><span class="text-white-transparent"> 01629167778</span></p>
										</div>
									</div>
									<div class="panel-footer border-0">
										<div class="text-center ">
											<div class="flex-c-m ">
												<a href="#" class="login100-social-item bg1">
													<i class="fa fa-facebook"></i>
												</a>

												<a href="#" class="login100-social-item bg2">
													<i class="fa fa-twitter"></i>
												</a>

												<a href="#" class="login100-social-item bg3">
													<i class="fa fa-google"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
								
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
										<h2 class="card-title">{{ $userSum }} Users are Available</h2>
										<div class="page-options d-flex float-right">
											<a href="{{ route('users.create') }}" class="btn btn-sm btn-primary badge"><i class="mdi mdi-apps"></i>Add User</a>
										</div>
									</div>
									<div class="e-table px-5 pb-5">
										<div class="table-responsive table-lg">
											<table class="table table-bordered mb-0">
												<thead>
													<tr>
														<th class="text-center">Photo</th>
														<th >Name</th>
														<th>Date</th>
														<th>User Type</th>
														<th class="text-center">Actions</th>
													</tr>
												</thead>
												<tbody>
													@foreach($users as $value)
													<tr>
														<td class="align-middle text-center"><img alt="image" class="avatar avatar-md rounded-circle" src="{{asset('storage/file'). '/' . $value->file }}"></td>
														<td class="text-nowrap align-middle">{{ $value->aname }}</td>
														<td class="text-nowrap align-middle"><span>{{ $value->updated_at }}</span></td>
														<td class="text-nowrap align-middle"><span>{{ $value->uname }}</span></td>

														<td class="text-center align-middle">
															<div class="btn-group align-top">
																<form action="{{ route('users.destroy', [$value->id]) }}" method="POST" enctype="multipart/form-data">
																@csrf
																<a href="{{ route('users.edit', [$value->id] ) }}" class="btn btn-sm btn-primary badge">Edit</a> 
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