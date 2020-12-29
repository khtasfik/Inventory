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
						<div class="row">
							<div class="col-lg-4 col-xl-4 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-body">
										<div class="text-center">
											<div class="userprofile">
												<div class="userpic  brround"> <img src="assets/images/users/10.jpg" alt="" class="userpicimg"> </div>
												<h3 class="username text-dark mb-2">Elizabeth Dyer</h3>
												<p class="mb-1 text-muted">Administrator, USA</p>
												<div class="text-center mb-4">
													<span><i class="fa fa-star text-warning"></i></span>
													<span><i class="fa fa-star text-warning"></i></span>
													<span><i class="fa fa-star text-warning"></i></span>
													<span><i class="fa fa-star-half-o text-warning"></i></span>
													<span><i class="fa fa-star-o text-warning"></i></span>
												</div>
												<div class="socials text-center mt-3">
													<a href="#" class="btn btn-circle btn-primary ">
													<i class="fa fa-facebook"></i></a> <a href="#" class="btn btn-circle btn-danger ">
													<i class="fa fa-google-plus"></i></a> <a href="#" class="btn btn-circle btn-info ">
													<i class="fa fa-twitter"></i></a> <a href="#" class="btn btn-circle btn-warning "><i class="fa fa-envelope"></i></a>
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
									<form>
									<div class="card-body">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="form-group">
													<label for="exampleInputname">First Name</label>
													<input type="text" class="form-control" id="exampleInputname" placeholder="First Name">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="form-group">
													<label for="exampleInputname1">Last Name</label>
													<input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Last Name">
												</div>
											</div>
										</div>
										<div class="form-group">
											<label for="exampleInputEmail1">Email address</label>
											<input type="email" class="form-control" id="exampleInputEmail1" placeholder="email address">
										</div>
										<div class="form-group">
											<label for="exampleInputnumber">Conatct Number</label>
											<input type="number" class="form-control" id="exampleInputnumber" placeholder="ph number">
										</div>
										<div class="form-group">
											<label class="form-label">About Me</label>
											<textarea class="form-control" rows="6">My bio.........</textarea>
										</div>
										<div class="form-group">
											<label class="form-label">Website</label>
											<input class="form-control" placeholder="http://splink.com/">
										</div>
										<div class="form-group">
											<label class="form-label">Date Of Birth</label>
											<div class="row">
												<div class="col-md-4">
													<select class="form-control">
														<option value="0">Date</option>
														<option value="1">01</option>
														<option value="2">02</option>
														<option value="3">03</option>
														<option value="4">04</option>
														<option value="5">05</option>
														<option value="6">06</option>
														<option value="7">07</option>
														<option value="8">08</option>
														<option value="9">09</option>
														<option value="10">10</option>
														<option value="11">11</option>
														<option value="12">12</option>
														<option value="13">13</option>
														<option value="14">14</option>
														<option value="15">15</option>
														<option value="16">16</option>
														<option value="17">17</option>
														<option value="18">18</option>
														<option value="19">19</option>
														<option value="20">20</option>
														<option value="21">21</option>
														<option value="22">22</option>
														<option value="23">23</option>
														<option value="24">24</option>
														<option value="25">25</option>
														<option value="26">26</option>
														<option value="27">27</option>
														<option value="28">28</option>
														<option value="29">29</option>
														<option value="30">30</option>
														<option value="31">31</option>
													</select>
												</div>
												<div class="col-md-4">
													<select class="form-control">
														<option value="0">Mon</option>
														<option value="1">Jan</option>
														<option value="2">Feb</option>
														<option value="3">Mar</option>
														<option value="4">Apr</option>
														<option value="5">May</option>
														<option value="6">June</option>
														<option value="7">July</option>
														<option value="8">Aug</option>
														<option value="9">Sep</option>
														<option value="10">Oct</option>
														<option value="11">Nov</option>
														<option value="12">Dec</option>
													</select>
												</div>
												<div class="col-md-4">
													<select class="form-control">
														<option value="0">Year</option>
														<option value="1">2018</option>
														<option value="2">2017</option>
														<option value="3">2016</option>
														<option value="4">2015</option>
														<option value="5">2014</option>
														<option value="6">2013</option>
														<option value="7">2102</option>
														<option value="8">2012</option>
														<option value="9">2011</option>
														<option value="10">2010</option>
														<option value="11">2009</option>
														<option value="12">2008</option>
														<option value="13">2007</option>
														<option value="14">2006</option>
														<option value="15">2005</option>
														<option value="16">2004</option>
														<option value="17">2003</option>
														<option value="18">2002</option>
														<option value="19">2001</option>
														<option value="20">1999</option>
														<option value="21">1998</option>
														<option value="22">1997</option>
														<option value="23">1996</option>
														<option value="24">1995</option>
														<option value="25">1994</option>
														<option value="26">1993</option>
														<option value="27">1992</option>
														<option value="28">1991</option>
														<option value="29">1990</option>
														<option value="30">1989</option>
														<option value="31">1988</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<a href="#" class="btn btn-success mt-1">Save</a>
										<a href="#" class="btn btn-danger mt-1">Cancel</a>
									</div>
									</form>
								</div>
							</div>
						</div>
						<!-- ROW-1 CLOSED -->
					</div>
				</div>
				<!--CONTAINER CLOSED -->
			</div>
@endsection