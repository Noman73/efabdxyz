 <!-- Content Wrapper. Contains page content -->
 @extends('layouts.admin.master')
 @section('link')
 <link rel="stylesheet" href="{{asset('storage/assets/vendor/datatables/css/jquery.dataTables.min.css')}}">
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
                  <h4>Setting</h4>
              </div>
          </div>
          <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                  <li class="breadcrumb-item active"><a href="javascript:void(0)">Setting</a></li>
              </ol>
          </div>
        </div>
        {{-- content --}}

        @php
            $data=App\Models\Setting::first();
        @endphp

        <div class="row">
          <div class="col-xl-6 col-xxl-12">
            <div class="card ">
              <div class="card-header">
                <div class="container-fluid">
                  <h5>Setting</h5>
                </div>
              </div>
              <div class="card-body">
                <form>
                    <input type="hidden" id="id">
                    <div class="row text-dark">
                      <div class="col-md-8 mr-auto ml-auto">
                        <div class="form-group">
                          <label for="recipient-name" class="col-form-label">Company Name:</label>
                          <input type="text" class="form-control" id="company_name" placeholder="Enter Name" value="{{($data!=null ? $data->company_name : '')}}">
                          <div class="invalid-feedback" id="company_name_msg">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-8 mr-auto ml-auto">
                        <div class="form-group">
                          <label for="message-text" class="col-form-label">Matching Commision:</label>
                          <input type="number" class="form-control" id="matching_commision" placeholder="0.00" value="{{($data!=null ? $data->matching_comm : '')}}">
                          <div class="invalid-feedback" id="matching_commision_msg">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-8 mr-auto ml-auto">
                        <div class="form-group">
                          <label for="message-text" class="col-form-label">Direct Commision:</label>
                          <input type="number" class="form-control" id="direct_commision" placeholder="0.00" value="{{($data!=null ? $data->direct_comm : '')}}">
                          <div class="invalid-feedback" id="direct_commision_msg">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-8 mr-auto ml-auto">
                        <div class="form-group">
                          <label for="message-text" class="col-form-label">Sales  Ambassador Commision:</label>
                          <input type="number" class="form-control" id="sales_ambassador_commision" placeholder="0.00" value="{{($data!=null ? $data->sales_amb_comm : '')}}">
                          <div class="invalid-feedback" id="sales_ambassador_commision_msg">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-8 mr-auto ml-auto">
                        <div class="form-group">
                          <label for="message-text" class="col-form-label">Marketing Director Commision:</label>
                          <input type="number" class="form-control" id="marketing_director_commision" placeholder="0.00" value="{{($data!=null ? $data->marketing_dir_comm : '')}}">
                          <div class="invalid-feedback" id="marketing_director_commision_msg">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-8 mr-auto ml-auto">
                        <div class="form-group">
                          <label for="message-text" class="col-form-label">Diamond Member Commision:</label>
                          <input type="number" class="form-control" id="diamond_member_commision" placeholder="0.00" value="{{($data!=null ? $data->diamond_mmb_comm : '')}}">
                          <div class="invalid-feedback" id="diamond_member_commision_msg">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-8 mr-auto ml-auto">
                        <div class="form-group">
                          <label for="message-text" class="col-form-label">Crown Member Commision:</label>
                          <input type="number" class="form-control" id="crown_member_commision" placeholder="0.00" value="{{($data!=null ? $data->crown_mmb_comm : '')}}">
                          <div class="invalid-feedback" id="crown_member_commision_msg">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-8 mr-auto ml-auto">
                        <div class="form-group">
                          <label for="message-text" class="col-form-label">Share Holder Commision:</label>
                          <input type="number" class="form-control" id="share_holder_commision" placeholder="0.00" value="{{($data!=null ? $data->share_holder_comm : '')}}">
                          <div class="invalid-feedback" id="share_holder_commision_msg">
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                  <div class="col-md-8 mr-auto ml-auto">
                    <button class="btn btn-sm btn-primary" onclick="formRequest()">Save</button>
                  </div>
              </div>
            </div>
          </div>
        </div>

  @endsection
  @section('script')
  <script src="{{asset('storage/assets/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('storage/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('storage/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{asset('storage/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.0/axios.min.js" integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  @include('backend.setting.internal-assets.js.script')
  
  @endsection