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
<li class="breadcrumb-item active">Create Contract</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="select2-drpdwn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Create Contract</h5>
                    </div>
                    <div class="card-body o-hidden">
                    <form action="{{ route('contracts.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @if ($message = Session::get('success'))
                                <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <strong>{{ $message }}</strong>
                                </div>
                                <script>
                                    // Close success alert after 3 seconds
                                    setTimeout(function() {
                                        $('#success-alert').alert('close');
                                    }, 12000);
                                </script>
                            @endif

                            @if (count($errors) > 0)
                                <div id="error-alert" class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <ul class="mb-0 p-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <script>
                                    // Close error alert after 3 seconds
                                    setTimeout(function() {
                                        $('#error-alert').alert('close');
                                    }, 12000);
                                </script>
                            @endif
                                    
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="first_name" class="col-form-label text-md-right">First Name</label>
                                    <input type="text" id="first_name" name="first_name" class="form-control" required placeholder="Firstname">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="last_name" class="col-form-label text-md-right">Lastname</label>
                                    <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Lastname" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="title" class="col-form-label text-md-right">Address</label>
                                    <input type="text" id="title" name="address" class="form-control" placeholder="Address" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="title" class="col-form-label text-md-right">Phone Number</label>
                                    <input type="number" id="title" name="phone_number" class="form-control" placeholder="Number" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="title" class="col-form-label text-md-right">Email Address</label>
                                    <input type="text" id="title" name="email_address" class="form-control" placeholder="example@gmail.com" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="title" class="col-form-label text-md-right">Identification</label>
                                    <input type="text" id="title" name="identification" class="form-control" placeholder="XXX-XXX-XXX-XXX" required>
                                    <small class="text-muted">Enter SSN (for individuals) or TIN (for companies)</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="title" class="col-form-label text-md-right">Date of Birth</label>
                                    <input type="date" id="title" name="date_of_birth" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="title" class="col-form-label text-md-right">Company/Position</label>
                                    <input type="text" id="title" name="company_position" class="form-control" placeholder="Company/Position" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="title" class="col-form-label text-md-right">Witnesses</label>
                                    <input type="text" id="title" name="witnesses" class="form-control" placeholder="Witnesses" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="title" class="col-form-label text-md-right">Effective Date</label>
                                    <input type="date" id="title" name="effective_date" class="form-control" placeholder="Effective Date" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="title" class="col-form-label text-md-right">Payment Information</label>
                                    <input type="text" id="title" name="payment_information" class="form-control" placeholder="Include payment terms: amount, method, and schedule." required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="title" class="col-form-label text-md-right">Jurisdiction</label>
                                    <input type="text" id="title" name="jurisdiction" class="form-control" placeholder="Jurisdiction and governing laws." required>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="title" class="col-form-label text-md-right">Signatures</label>
                                    <input type="file" id="signature_party1" name="signature_party1" class="form-control" placeholder="Involved Person" required>
                                </div>
                            </div>

                            
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="title" class="col-form-label text-md-right">Notary Public</label>
                                    <input type="text" id="notary_public" name="notary_public" class="form-control" placeholder="notarization for added legal validity">
                                </div>
                            </div>
                            
                        </div>

                        <!-- Repeat the above structure for other sections -->

                        <div class="mb-2">
        <textarea id="terms_conditions" name="terms_conditions" class="form-control" rows="4" placeholder="(Detailed terms of the agreement)" required></textarea>
    </div>

                        <!-- Add other form fields -->

                        <div class="mb-2">
                                <div class="col-form-label">Select File Type</div>
                                <select class="js-example-basic-single col-sm-12" name="file_type"> <!-- Added name attribute -->
                                    <optgroup label="Folder">
                                        <option value="Financial">Financial</option>
                                        <option value="Project">Project</option>
                                    </optgroup>
                                </select>
                            </div>

                            <label for="terms_conditions" class="col-form-label text-md-right"><input type="checkbox" name="terms_and_conditions"> Terms and Conditions</label>

                            <br>

                            <button class="btn btn-primary" type="submit">Create Contract</button>
                            <button class="btn btn-warning" type="reset">Reset</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script src="{{asset('assets/js/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/js/select2/select2-custom.js')}}"></script>
@endsection