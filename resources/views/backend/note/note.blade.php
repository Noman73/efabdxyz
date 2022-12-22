 <!-- Content Wrapper. Contains page content -->
 @extends('layouts.admin.master')
 @section('link')
 {{-- <link rel="stylesheet" href="{{asset('storage/assets/vendor/datatables/css/jquery.dataTables.min.css')}}"> --}}
 {{-- <link rel="stylesheet" href="{{asset('storage/assets2/vendor/datatables-bs4/dataTables.bootstrap4.min.css')}}"> --}}
  
  <style>
    .file {
      border: 1px solid #ccc;
      display: inline-block;
      width: 100px;
      cursor: pointer;
      background-color:green;
      color:white;
  }
  .file:hover{
    background-color:#fff000;
  }
  .image-upload{
    margin:0 auto;
  }
  </style>
 @endsection
 @section('content')
    <!-- Content Header (Page header) -->
    <div class="row page-titles mx-0">
      <div class="col-sm-6 p-md-0">
          <div class="welcome-text">
              <h4>Note</h4>
          </div>
      </div>
      <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
              <li class="breadcrumb-item active"><a href="javascript:void(0)">Note</a></li>
          </ol>
      </div>
    </div>
              <!-- /# row -->


              <div class="row">
                <div class="col-xl-6 col-xxl-12">
                  <div class="card ">
                    <div class="card-header">
                      <div class="container-fluid">
                        <div class="row">
                          <button id='modalBtn' class="btn btn-primary" data-toggle="modal" data-target="#modal" data-whatever="@mdo">Add New</button>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="bootstrap-data-table-panel">
                        <div class="table-responsive">
                          <table class="table table-sm text-center table-bordered text-dark" id="datatable">
                            <thead>
                              <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Fathers Name</th>
                                <th>Mobile</th>
                                <th>Note</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                  {{-- modal --}}
                  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Add New Note</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form>
                            <input type="hidden" id="id">

                            <div class="row">
                              <div class="col-md-8 mr-auto ml-auto">
                                <div class="form-group">
                                  <label for="recipient-name" class="col-form-label">Name:</label>
                                  <input type="text" class="form-control" id="name" placeholder="Enter Name">
                                  <div class="invalid-feedback" id="name_msg">
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-8 mr-auto ml-auto">
                                <div class="form-group">
                                  <label for="recipient-name" class="col-form-label">Fathers Name:</label>
                                  <input type="text" class="form-control" id="fathers_name" placeholder="Enter Name">
                                  <div class="invalid-feedback" id="fathers_name_msg">
                                  </div>
                                </div>
                              </div>
                             
                              <div class="col-md-8 mr-auto ml-auto">
                                <div class="form-group">
                                  <label for="message-text" class="col-form-label">Phone:</label>
                                  <input type="number" class="form-control" id="phone" placeholder="Enter Phone Number">
                                  <div class="invalid-feedback" id="phone_msg">
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-8 mr-auto ml-auto"> 
                                <div class="form-group">
                                  <label for="message-text" class="col-form-label">Note:</label>
                                  <textarea name="" id="note" class="form-control" rows="5"></textarea>
                                  <div class="invalid-feedback" id="note_msg">
                                  </div>
                                </div>
                              </div>
                              {{-- <div class="password"> --}}
                              {{-- </div> --}}
                            </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary" onclick="formRequest()">Save</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  {{-- end modal --}}
                </div>
              </div>

  @endsection

  @section('script')
  <script src="{{asset('storage/assets/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('storage/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  {{-- <script src="{{asset('storage/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script> --}}
  {{-- <script src="{{asset('storage/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script> --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.0/axios.min.js" integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  @include('backend.note.internal-assets.js.script')
  
  @endsection