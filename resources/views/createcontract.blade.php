@extends('layouts.master')
@section('title', 'Select2')

@section('css')

@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/select2.css')}}">
@endsection

@section('breadcrumb-title')
<h3>Legal Contract</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Contract Table</li>
<li class="breadcrumb-item active">Create Contract</li>
@endsection

@section('content')
<div class="container-fluid">
	<div class="select2-drpdwn">
		<div class="row">
			<!-- Default Textbox start-->
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title">Create Contract</h5>
					</div>
					<div class="card-body o-hidden">
                        <div class="mb-2">
						<label for="client_name" class="col-md-4 col-form-label text-md-right">First Name</label>

						<div class="col-md-6">
						<input type="text" class="form-control" required>
						</div>
						</div>
                        <div class="mb-2">
						<label for="client_name" class="col-md-4 col-form-label text-md-right">Last Name</label>

						<div class="col-md-6">
						<input type="text" class="form-control" required>
						</div>
						</div>
                        
						<div class="mb-2">
							<div class="col-form-label">Select2 single select</div>
							<select class="js-example-basic-single col-sm-12">
								<optgroup label="Developer">
									<option value="AL">Alabama</option>
									<option value="WY">Wyoming</option>
								</optgroup>
								<optgroup label="Designer">
									<option value="WY">Peter</option>
									<option value="WY">Hanry Die</option>
									<option value="WY">John Doe</option>
								</optgroup>
							</select>
						</div>
						
					</div>
				</div>
			</div>
		
@endsection

@section('script')
<script src="{{asset('assets/js/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/js/select2/select2-custom.js')}}"></script>
@endsection