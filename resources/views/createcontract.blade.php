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
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="first_name" class="col-form-label text-md-right">First Name</label>
                                    <input type="text" id="first_name" name="first_name" class="form-control" required placeholder="Firstname">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="title" class="col-form-label text-md-right">Lastname</label>
                                    <input type="text" id="title" name="title" class="form-control" placeholder="Lastname" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="title" class="col-form-label text-md-right">Address</label>
                                    <input type="text" id="title" name="title" class="form-control" placeholder="Address" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="title" class="col-form-label text-md-right">Phone Number</label>
                                    <input type="text" id="title" name="title" class="form-control" placeholder="Number" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="title" class="col-form-label text-md-right">Email Address</label>
                                    <input type="text" id="title" name="title" class="form-control" placeholder="example@gmail.com" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="title" class="col-form-label text-md-right">Identification</label>
                                    <input type="text" id="title" name="title" class="form-control" placeholder="XXX-XXX-XXX-XXX" required>
                                    <small class="text-muted">Enter SSN (for individuals) or TIN (for companies)</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="title" class="col-form-label text-md-right">Date of Birth</label>
                                    <input type="date" id="title" name="title" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="title" class="col-form-label text-md-right">Company/Position</label>
                                    <input type="text" id="title" name="title" class="form-control" placeholder="Company/Position" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="title" class="col-form-label text-md-right">Witnesses</label>
                                    <input type="text" id="title" name="title" class="form-control" placeholder="Witnesses" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="title" class="col-form-label text-md-right">Effective Date</label>
                                    <input type="text" id="title" name="title" class="form-control" placeholder="Effective Date" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="title" class="col-form-label text-md-right">Terms and Conditions</label>
                                    <checkbox>yes</checkbox>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="title" class="col-form-label text-md-right">Payment Information</label>
                                    <input type="text" id="title" name="title" class="form-control" placeholder="Include payment terms: amount, method, and schedule." required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="title" class="col-form-label text-md-right">Jurisdiction</label>
                                    <input type="text" id="title" name="title" class="form-control" placeholder="Jurisdiction and governing laws." required>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="title" class="col-form-label text-md-right">Signatures</label>
                                    <input type="text" id="signature_party1" name="signature_party1" class="form-control" placeholder="Involved Person" required>
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
                            <label for="terms_conditions" class="col-form-label text-md-right">Terms and Conditions</label>
                            <textarea id="terms_conditions" name="terms_conditions" class="form-control" rows="4" placeholder="(Detailed terms of the agreement)" required></textarea>
                        </div>

                        <!-- Add other form fields -->

                        <div class="mb-2">
                            <div class="col-form-label">Select File Type</div>
                            <select class="js-example-basic-single col-sm-12">
                                <optgroup label="Folder">
                                    <option value="F">Financial</option>
                                    <option value="P">Project</option>
                                </optgroup>
                            </select>
                        </div>

                        <button class="btn btn-primary" type="button">Create Contract</button>
                        <button class="btn btn-warning" type="button">Reset</button>
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