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
       
            <div class="media">
             
                <div class="form-group mb-0">                          
                </div>
              </form>
              <div class="media-body text-end">
                <form class="d-inline-flex" action="#" method="POST" enctype="multipart/form-data" name="myForm">
                  <div class="btn btn-primary" onclick="getFile()"> <i data-feather="plus-square"></i>Add New</div>
                  <div style="height: 0px;width: 0px; overflow:hidden;">
                    <input id="upfile" type="file" onchange="sub(this)">
                  </div>
                </form>
                <div class="btn btn-outline-primary ms-2"><i data-feather="upload">   </i>Upload  </div>
              </div>
            </div>
          </div>
                       
                            
                            <table class="display" id="data-source-1" style="width:100%">
                            
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Company</th>
                                        <th>Type of Files</th>
                                        <th>File</th>
                                        <th>Status</th>
                                        <th>E-mail</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                               
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

