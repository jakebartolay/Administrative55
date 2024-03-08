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
    <!-- 1. Full Name -->
    <div class="mb-2">
    <label for="first_name" class="col-md-4 col-form-label text-md-right">First Name</label>
    <div class="col-md-6">
        <input type="text" id="first_name" name="first_name" class="form-control" required placeholder="(FIRST NAME)">
    </div>
</div>

<div class="mb-2">
    <label for="middle_name" class="col-md-4 col-form-label text-md-right">Middle Name</label>
    <div class="col-md-6">
        <input type="text" id="middle_name" name="middle_name" class="form-control" required placeholder="(Optional or MIDDLE NAME)">
    </div>
</div>

<div class="mb-2">
    <label for="last_name" class="col-md-4 col-form-label text-md-right">Last Name</label>
    <div class="col-md-6">
        <input type="text" id="last_name" name="last_name" class="form-control" required placeholder="(LAST NAME)">
    </div>
</div>


    <!-- 2. Contact Information -->
    <div class="mb-2">
        <label for="contact_info" class="col-md-4 col-form-label text-md-right">Contact Information</label>
        <div class="col-md-6">
            <!-- Include multiple inputs for address, phone number, email, etc. -->
            <!-- Example: -->
            <input type="text" id="address" name="address" class="form-control" placeholder="(Address)" required>
            <input type="tel" id="phone" name="phone" class="form-control" placeholder="(Phone Number)" required>
            <input type="email" id="email" name="email" class="form-control" placeholder="(Email Address)" required>
        </div>
    </div>

    <!-- 3. Identification -->
    <div class="mb-2">
        <label for="identification" class="col-md-4 col-form-label text-md-right">Identification</label>
        <div class="col-md-6">
            <input type="text" id="identification" name="identification" class="form-control" required>
            <!-- Include appropriate placeholder text based on whether it's SSN or TIN -->
            <!-- Example: -->
            <small class="text-muted">Enter SSN (for individuals) or TIN (for companies)</small>
        </div>
    </div>

    <!-- 4. Date of Birth -->
    <div class="mb-2">
        <label for="dob" class="col-md-4 col-form-label text-md-right">Date of Birth</label>
        <div class="col-md-6">
            <input type="date" id="dob" name="dob" class="form-control" required>
        </div>
    </div>

    <!-- 5. Title/Position -->
    <div class="mb-2">
        <label for="title" class="col-md-4 col-form-label text-md-right">Company/Position</label>
        <div class="col-md-6">
            <input type="text" id="title" name="title" class="form-control" placeholder="(Your Position or Your Company)"required >
        </div>
    </div>

    <!-- 6. Legal Entity Type -->
    <div class="mb-2">
        <label for="entity_type" class="col-md-4 col-form-label text-md-right">Legal Entity Type</label>
        <div class="col-md-6">
            <input type="text" id="entity_type" name="entity_type" class="form-control" placeholder="(specify whether it's a corporation, partnership, etc.)" required>
        </div>
    </div>

    <!-- 7. Witnesses -->
    <div class="mb-2">
        <label for="witnesses" class="col-md-4 col-form-label text-md-right">Witnesses</label>
        <div class="col-md-6">
            <input type="text" id="witnesses" name="witnesses" class="form-control" placeholder="(Names and signatures of any witnesses)" required>
        </div>
    </div>

    <!-- 8. Effective Date -->
    <div class="mb-2">
        <label for="effective_date" class="col-md-4 col-form-label text-md-right">Effective Date</label>
        <div class="col-md-6">
            <input type="date" id="effective_date" name="effective_date" class="form-control" required>
        </div>
    </div>

    <!-- 9. Terms and Conditions -->
    <div class="mb-2">
        <label for="terms_conditions" class="col-md-4 col-form-label text-md-right">Terms and Conditions</label>
        <div class="col-md-6">
            <!-- Include a textarea for detailed terms -->
            <textarea id="terms_conditions" name="terms_conditions" class="form-control" rows="4" placeholder="( Detailed terms of the agreement)" required></textarea>
        </div>
    </div>

    <!-- 10. Payment Information -->
    <div class="mb-2">
        <label for="payment_info" class="col-md-4 col-form-label text-md-right">Payment Information</label>
        <div class="col-md-6">
            <input type="text" id="payment_info" name="payment_info" class="form-control" placeholder="(Include payment terms: amount, method, and schedule.)"required>
        </div>
    </div>

    <!-- 11. Jurisdiction -->
    <div class="mb-2">
        <label for="jurisdiction" class="col-md-4 col-form-label text-md-right">Jurisdiction</label>
        <div class="col-md-6">
            <input type="text" id="jurisdiction" name="jurisdiction" class="form-control" placeholder="(Jurisdiction and governing laws.)"required>
        </div>
    </div>

    <!-- 12. Signatures -->
    <div class="mb-2">
        <label for="signatures" class="col-md-4 col-form-label text-md-right">Signatures</label>
        <div class="col-md-6">
            <!-- Include multiple inputs for signatures of all parties -->
            <!-- Example: -->
            <input type="text" id="signature_party1" name="signature_party1" class="form-control" placeholder="Involved Person" required>
            <input type="text" id="signature_party2" name="signature_party2" class="form-control" placeholder="Involved Person" required>
        </div>
    </div>

    <!-- 13. Notary Public -->
    <div class="mb-2">
        <label for="notary_public" class="col-md-4 col-form-label text-md-right">Notary Public</label>
        <div class="col-md-6">
            <input type="text" id="notary_public" name="notary_public" class="form-control" placeholder="notarization for added legal validity">
        </div>
    </div>
</div>

                        
						<div class="mb-2">
							<div class="col-form-label">Select File Type</div>
							<select class="js-example-basic-single col-sm-12">
								<optgroup label="Folder">
									<option value="F">Financial</option>
									<option value="P">Project</option>
								</optgroup>
								
							</select>
						</div>
						
					</div>
				</div>
			</div>
		
            <button class="btn btn-primary" type="button">Create Contract</button>        <button class="btn btn-warning" type="button">Reset</button>
@endsection

@section('script')
<script src="{{asset('assets/js/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/js/select2/select2-custom.js')}}"></script>
@endsection