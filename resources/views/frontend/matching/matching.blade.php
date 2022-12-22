 <!-- Content Wrapper. Contains page content -->
 @extends('layouts.frontend.master')
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
        <div class="row page-titles mx-0">
          <div class="col-sm-6 p-md-0">
              <div class="welcome-text">
                  <h4>Matching Commision</h4>
              </div>
          </div>
          <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                  <li class="breadcrumb-item active"><a href="javascript:void(0)">Element</a></li>
              </ol>
          </div>
        </div>




        <div class="row">
          <div class="col-xl-6 col-xxl-12">
            <div class="card ">
              <div class="card-header">
                <div class="container-fluid">
                  <div class="row">
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="bootstrap-data-table-panel">
                  <div class="table-responsive">
                    <table class="table table-sm text-center table-bordered text-dark" id="datatable">
                      <thead>
                        <tr>
                          <th width="25%">SL</th>
                          <th width="25%">Date</th>
                          <th width="25%">Total Match</th>
                          <th width="25%">Amount</th>
                        </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
   
  @endsection

  @section('script')
  <script src="{{asset('storage/assets/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('storage/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  {{-- <script src="{{asset('storage/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script> --}}
  {{-- <script src="{{asset('storage/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script> --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.0/axios.min.js" integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  @include('frontend.matching.internal-assets.js.script')
  
  @endsection