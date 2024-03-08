@extends('layouts.master')
@section('title', 'File Manager')

@section('css')

@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Document Management</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Document Management</li>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-3 box-col-6 pe-0">
      <div class="file-sidebar">
        <div class="card">
          <div class="card-body">
            <ul>
              <li>
                <div class="btn btn-primary"><i data-feather="home">                                    </i>Home </div>
              </li>
              <li>
                <div class="btn btn-light"><i data-feather="folder"></i>All    </div>
              </li>
              <li>
                <div class="btn btn-light"><i data-feather="clock"></i>Recent    </div>
              </li>
              <li>
                <div class="btn btn-light"><i data-feather="star"></i>Starred      </div>
              </li>
              <li>
                <div class="btn btn-light"><i data-feather="alert-circle"></i>Recovery        </div>
              </li>
              <li>
                <div class="btn btn-light"><i data-feather="trash-2"></i>Deleted </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-9 col-md-12 box-col-12">
      <div class="file-content">
        <div class="card min-vh-100">
          <div class="card-header">
            <div class="media">
              <form class="form-inline" action="#" method="get">
                <div class="form-group mb-0">                                      <i class="fa fa-search"></i>
                  <input class="form-control-plaintext" type="text" placeholder="Search...">
                </div>
              </form>
              <div class="media-body text-end">
              <button class="btn btn-primary" type="submit">Add Folder</button>
              <button class="btn btn-outline-primary" type="submit" data-bs-toggle="modal" data-bs-target="#tooltipmodal"><i data-feather="upload"></i>Upload</button>
                <!-- <form class="d-inline-flex" action="{{ route('upload') }}" method="POST" enctype="multipart/form-data" name="myForm">
                    @csrf
                    <div class="btn btn-primary" onclick="getFile()"> <i data-feather="plus-square"></i>Add New</div>
                    <div style="height: 0px;width: 0px; overflow:hidden;">
                        <input id="upfile" type="file" onchange="sub(this)" name="file">
                    </div>
                    <button type="submit" class="btn btn-outline-primary ms-2"><i data-feather="upload"></i>Upload</button>
                </form> -->
                <!-- <div class="btn btn-outline-primary ms-2"><i data-feather="upload"></i>
                <a href="{{route('upload')}}">Upload</a>
                </div> -->
              </div>
            </div>
          </div>
          <div class="card-body file-manager">
            <h4 class="mb-3">All Files</h4>

            @if ($message = Session::get('success'))
                  <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert">
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      <strong>{{ $message }}</strong>
                  </div>
                  <script>
                      // Close success alert after 3 seconds
                      setTimeout(function() {
                          $('#success-alert').alert('close');
                      }, 3000);
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
                      }, 3000);
                  </script>
              @endif
            <!-- <h6>Recently opened files</h6>
            <ul class="files">
              <li class="file-box">
                <div class="file-top">  <i class="fa fa-file-image-o txt-primary"></i><i class="fa fa-ellipsis-v f-14 ellips"></i></div>
                <div class="file-bottom">
                  <h6>Logo.psd </h6>
                  <p class="mb-1">2.0 MB</p>
                  <p> <b>last open : </b>1 hour ago</p>
                </div>
              </li>
              <li class="file-box">
                <div class="file-top">  <i class="fa fa-file-archive-o txt-secondary"></i><i class="fa fa-ellipsis-v f-14 ellips"></i></div>
                <div class="file-bottom">
                  <h6>Project.zip </h6>
                  <p class="mb-1">1.90 GB</p>
                  <p> <b>last open : </b>1 hour ago</p>
                </div>
              </li>
              <li class="file-box">
                <div class="file-top">  <i class="fa fa-file-excel-o txt-success"></i><i class="fa fa-ellipsis-v f-14 ellips"></i></div>
                <div class="file-bottom">
                  <h6>Backend.xls</h6>
                  <p class="mb-1">2.00 GB</p>
                  <p> <b>last open : </b>1 hour ago</p>
                </div>
              </li>
              <li class="file-box">
                <div class="file-top">  <i class="fa fa-file-text-o txt-info"></i><i class="fa fa-ellipsis-v f-14 ellips"></i></div>
                <div class="file-bottom">
                  <h6>requirements.txt </h6>
                  <p class="mb-1">0.90 KB</p>
                  <p> <b>last open : </b>1 hour ago</p>
                </div>
              </li>
            </ul> -->
            <h6 class="mt-4">Folders</h6>
            <ul class="folder">
              <li class="folder-box">
                <div class="media">
                  <i class="fa fa-folder f-36 txt-warning"></i>
                  <div class="media-body ms-3">
                    <h6 class="mb-0">Project Managament</h6>
                    <p>0 files</p>
                  </div>
                </div>
              </li>
              <li class="folder-box">
                <div class="media">
                  <i class="fa fa-folder f-36 txt-warning"></i>
                  <div class="media-body ms-3">
                    <h6 class="mb-0">Financial</h6>
                    <p>0 files</p>
                  </div>
                </div>
              </li>
            </ul>
            <h6 class="mt-4">Files</h6>
            <!-- <ul class="files">
              <li class="file-box">
                <div class="file-top">  <i class="fa fa-file-archive-o txt-secondary"></i><i class="fa fa-ellipsis-v f-14 ellips"></i></div>
                <div class="file-bottom">
                  <h6>Project.zip </h6>
                  <p class="mb-1">1.90 GB</p>
                  <p> <b>last open : </b>1 hour ago</p>
                </div>
              </li>
              <li class="file-box">
                <div class="file-top">  <i class="fa fa-file-excel-o txt-success"></i><i class="fa fa-ellipsis-v f-14 ellips"></i></div>
                <div class="file-bottom">
                  <h6>Backend.xls</h6>
                  <p class="mb-1">2.00 GB</p>
                  <p> <b>last open : </b>1 hour ago</p>
                </div>
              </li>
              <li class="file-box">
                <div class="file-top">  <i class="fa fa-file-text-o txt-info"></i><i class="fa fa-ellipsis-v f-14 ellips"></i></div>
                <div class="file-bottom">
                  <h6>requirements.txt </h6>
                  <p class="mb-1">0.90 KB</p>
                  <p> <b>last open : </b>1 hour ago</p>
                </div>
              </li>
              <li class="file-box">
                <div class="file-top">  <i class="fa fa-file-text-o txt-primary"></i><i class="fa fa-ellipsis-v f-14 ellips"></i></div>
                <div class="file-bottom">
                  <h6>Logo.psd </h6>
                  <p class="mb-1">2.0 MB</p>
                  <p> <b>last open : </b>1 hour ago</p>
                </div>
              </li>
            </ul> -->
            <div class="container">
              <div class="row d-flex">
                  <ul class="files">
                      @foreach($uploadedFiles as $file)
                              <div class="file-box">
                                  <div class="file-top">
                                      @if($file->extension == 'pdf')
                                          <i class="fa fa-file-pdf-o txt-secondary"></i>
                                      @elseif($file->extension == 'doc' || $file->extension == 'docx')
                                          <i class="fa fa-file-word-o txt-secondary"></i>
                                      @elseif($file->extension == 'xls' || $file->extension == 'xlsx')
                                          <i class="fa fa-file-excel-o txt-secondary"></i>
                                      {{-- Add more conditions for other file types --}}
                                      @else
                                          <i class="fa fa-file-o txt-secondary"></i> {{-- Default icon for unknown file types --}}
                                      @endif
                                      <i class="fa fa-ellipsis-v f-14 ellips"></i>
                                  </div>
                                  <div class="file-bottom">
                                      <h6>{{ $file->name }}</h6>
                                      <p class="mb-1">{{ formatFileSize($file->size) }}</p>
                                      <p><b>Last open:</b> {{ $file->last_open }}</p>
                                  </div>
                              </div>
                      @endforeach
                  </ul>
              </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<!-- <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uploadModalLabel">Upload File</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               
                <form class="d-inline-flex" id="uploadForm" action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
                    @csrf

               
                    <div class="form-group">
                        <label for="file">Choose File</label>
                        <input type="file" class="form-control-file" id="file" name="file" required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-sm"><i data-feather="upload"></i> Upload</button>
                </form>
            </div>
        </div>
    </div>
</div> -->

<div class="modal fade" id="tooltipmodal" tabindex="-1" role="dialog" aria-labelledby="tooltipmodal" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title">Upload File</h5>
                           <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <!-- Form for file upload -->
                          <form class="d-inline-flex" id="uploadForm" action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
                              @csrf

                              <!-- Input for file selection -->
                              <div class="form-group">
                                  <label for="file">Choose File</label>
                                  <input type="file" class="form-control-file" id="file" name="file" required>
                              </div>

                              <!-- Button to submit the form -->
                              <button type="submit" class="btn btn-primary btn-sm"><i data-feather="upload"></i> Upload</button>
                          </form>
                      </div>
                     </div>
                  </div>
               </div>

@endsection

@section('script')
<script src="{{asset('assets/js/icons/feather-icon/feather-icon-clipart.js')}}"></script>
<script src="{{asset('assets/js/typeahead/handlebars.js')}}"></script>
<script src="{{asset('assets/js/typeahead/typeahead.bundle.js')}}"></script>
<script src="{{asset('assets/js/typeahead/typeahead.custom.js')}}"></script>
<script src="{{asset('assets/js/typeahead-search/handlebars.js')}}"></script>
<script src="{{asset('assets/js/typeahead-search/typeahead-custom.js')}}"></script>
@endsection

