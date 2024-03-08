@extends('layouts.master')

@section('title', 'Default')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h1>Contract</h1>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item active">Create Table</li>
@endsection

@section('breadcrumb-title')

@section('content')

</section>
 
 
<div class="container-fluid">
        <div class="row">
            <!-- HTML (DOM) sourced data  Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0 card-no-border">
                    <div class="file-content">                        
                            <table class="display" id="data-source-1" style="width:100%">
                            
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Company/Position</th>
                                    <th>Type of Files</th>
                                    <th>File</th>
                                    <th>Phone Number</th>
                                    <th>E-mail</th>
                                    <th>Signature</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $dat)
                                <tr>
                                    <td>{{ $dat->first_name }} {{ $dat->last_name }}</td>
                                    <!-- Add other columns based on your Contract model fields -->
                                    <td>{{ $dat->company_position }}</td>
                                    <td>{{ $dat->file_type }}</td>

                                   
                                    <td><a href="test">PDF</a></td>

                                    <td>{{ $dat->phone_number }}</td>

                                    <td>{{ $dat->email_address }}</td>
                                    <td>
                                        <a href="{{ asset('storage/signature_files/' . $dat->signature_party1) }}" target="_blank">View File</a>
                                    </td>
                                    
                                </tr>
                                @endforeach
                            </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- HTML (DOM) sourced data  Ends-->
            
@endsection

@section('script')
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>   
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.css">  
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.css"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>


@endsection


@section('script')
@endsection

