 <!-- Content Wrapper. Contains page content -->
 @extends('layouts.frontend.master')
 @section('link')
 {{-- <link rel="stylesheet" href="{{asset('storage/assets/vendor/datatables/css/jquery.dataTables.min.css')}}"> --}}
 {{-- <link rel="stylesheet" href="{{asset('storage/assets2/vendor/datatables-bs4/dataTables.bootstrap4.min.css')}}"> --}}
  
  <style>
    /* .file {
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
  } */
  </style>
 @endsection
 @section('content')

      <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Withdraw</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Element</a></li>
            </ol>
        </div>
      </div>

      {{-- content --}}
      <div class="row">
        <div class="col-xl-6 col-xxl-12">
          {{-- start card --}}
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
                  <table  class="table table-sm text-center table-bordered text-dark" id="datatable">
                    <thead>
                      <tr>
                        <th>SL</th>
                        <th>Date</th>
                        <th>Ammount</th>
                        <th>Number</th>
                        <th>Method</th>
                        <th>status</th>
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
                  <h5 class="modal-title" id="exampleModalLabel">Add New Package</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form  method="POST" id="withdraw-form">
                    @csrf
                    <input type="hidden" id="id">
                    <div class="row text-dark">
                      <div class="col-md-8 mr-auto ml-auto">
                        <div class="form-group">
                          <label for="message-text" class="col-form-label">Ammount:</label>
                          <input type="number" class="form-control" id="ammount" placeholder="0.00" name="ammount">
                          <div class="invalid-feedback" id="ammount_msg">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-8 mr-auto ml-auto">
                        <div class="form-group">
                          <label for="message-text" class="col-form-label">Number:</label>
                          <input type="number" class="form-control" id="number" placeholder="01XXXXXXXXX" name="ammount">
                          <div class="invalid-feedback" id="number_msg">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-8 mr-auto ml-auto">
                        <div class="form-group">
                          <label for="message-text" class="col-form-label">Method:</label>
                          <select type="number" class="form-control" id="method" name="method">
                            <option value="">--select--</option>
                            <option value="1">Rocket</option>
                            <option value="2">Bkash</option>
                            <option value="3">Nagad</option>
                          </select>
                          <div class="invalid-feedback" id="method_msg">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-8 mr-auto ml-auto">
                        <div class="form-group">
                          <label for="message-text" class="col-form-label">Password:</label>
                          <input type="password" class="form-control" id="password" name="password" placeholder="">
                          <div class="invalid-feedback" id="password_msg">
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary submitBtn" onclick="formRequest()">Save</button>
                </div>
              </div>
            </div>
          </div>
          {{-- end card --}}
        </div>
      </div>
      {{-- end content --}}
  @endsection

  @section('script')

  <script src="{{asset('storage/assets/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('storage/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('storage/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{asset('storage/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.0/axios.min.js" integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  @include('frontend.withdraw.internal-assets.js.script')
  <script>
    function formSubmit(){
      var withdrawForm=document.getElementById('withdraw-form');
      withdrawForm.submit();
    }
  </script>
  
  @endsection