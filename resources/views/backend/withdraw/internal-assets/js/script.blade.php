<script>
    var datatable;
    var data_id;
    $(document).ready(function(){
        datatable= $('#datatable').DataTable({
        processing:true,
        serverSide:true,
        responsive:true,
        ajax:{
          url:"{{route('withdraw_authorization.index')}}"
        },
        columns:[
          {
            data:'DT_RowIndex',
            name:'DT_RowIndex',
            orderable:false,
            searchable:false
          },
          {
            data:'date',
            name:'date',
          },
          {
            data:'username',
            name:'username',
          },
          {
            data:'ammount',
            name:'ammount',
          },
          {
            data:'method',
            name:'method',
          },
          {
            data:'phone',
            name:'phone',
          },
          {
            data:'status',
            name:'status',
          },
          {
            data:'action',
            name:'action',
          }

        ]
    });
  })
    

window.formRequest= function(){
    $('input,select').removeClass('is-invalid');
    let authorize=$('#authorize').val();
  
    let id=$('#id').val();
    console.log(status)
    let formData= new FormData();
    formData.append('authorize',authorize);
    $('#exampleModalLabel').text('Edit Package');
    if(data_id!=''){
      formData.append('_method','PUT');
    }
    //axios post request
    
      axios.post("{{URL::to('admin/withdraw_authorization/')}}/"+data_id,formData)
        .then(function (response){
          if(response.data.message){
              toastr.success(response.data.message);
              datatable.ajax.reload();
              Clear();
          }else if(response.data.error){
              var keys=Object.keys(response.data.error);
              keys.forEach(function(d){
                $('#'+d).addClass('is-invalid')
                $('#'+d+'_msg').text(response.data.error[d][0]);
              })
            }
        })
}
$(document).on("click","#modalBtn",  function(event){
    console.log('fire')
    Clear();
    $('#exampleModalLabel').text('Authorization');
    $('.password').removeClass('d-none')
});

    function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
            document.getElementById('imagex').setAttribute('src', e.target.result)
          };
          reader.readAsDataURL(input.files[0]);
      }
    }
$(document).delegate(".editRow", "click", function(){
    id=$(this).data('id');
    data_id=id;
    Clear()
    $('.password').addClass('d-none')
    $('#exampleModalLabel').text('Authorize');
    $('.modal').modal('show')
});
$(document).delegate(".deleteRow", "click", function(){
    let route=$(this).data('url');
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.value==true) {
        axios.delete(route)
        .then((data)=>{
          if(data.data.message){
            toastr.success(data.data.message);
            datatable.ajax.reload();
          }else if(data.data.warning){
            toastr.error(data.data.warning);
          }
        })
      }
    })
});

$('#dateofbirth').daterangepicker({
        showDropdowns: true,
        singleDatePicker: true,
        // parentEl: ".bd-example-modal-lg .modal-body",
        locale: {
            format: 'DD-MM-YYYY',
        }
  });

function Clear(){
  $("input").removeClass('is-invalid').val('');
  $(".invalid-feedback").text('');
  $('input').val('');
  $("select[name='status']").val('');
  $("select[name='role']").text('Select').trigger('change');
}


</script>
