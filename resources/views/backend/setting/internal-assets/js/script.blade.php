<script>
    var datatable;
    $(document).ready(function(){
        datatable= $('#datatable').DataTable({
        processing:true,
        serverSide:true,
        responsive:true,
        ajax:{
          url:"{{route('package.index')}}"
        },
        columns:[
          {
            data:'DT_RowIndex',
            name:'DT_RowIndex',
            orderable:false,
            searchable:false
          },
          {
            data:'title',
            name:'title',
          },
          {
            data:'description',
            name:'description',
          },
          {
            data:'ammount',
            name:'ammount',
          },
          {
            data:'total_sale',
            name:'total_sale',
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
    let company_name=$('#company_name').val();
    let matching_commision=$('#matching_commision').val();
    let direct_commision=$('#direct_commision').val();
    let sales_ambassador_commision=$('#sales_ambassador_commision').val();
    let marketing_director_commision=$('#marketing_director_commision').val();
    let diamond_member_commision=$('#diamond_member_commision').val();
    let crown_member_commision=$('#crown_member_commision').val();
    let share_holder_commision=$('#share_holder_commision').val();
   
    let id=$('#id').val();
    console.log(status)
    let formData= new FormData();
    formData.append('company_name',company_name);
    formData.append('matching_commision',matching_commision);
    formData.append('direct_commision',direct_commision);
    formData.append('sales_ambassador_commision',sales_ambassador_commision);
    formData.append('marketing_director_commision',marketing_director_commision);
    formData.append('diamond_member_commision',diamond_member_commision);
    formData.append('crown_member_commision',crown_member_commision);
    formData.append('share_holder_commision',share_holder_commision);
    $('#exampleModalLabel').text('Edit Package');
    if(id!=''){
      formData.append('_method','PUT');
    }
    //axios post request
    if (id==''){
         axios.post("{{route('setting.store')}}",formData)
        .then(function (response){
            if(response.data.message){
                toastr.success(response.data.message)
                datatable.ajax.reload();
            }else if(response.data.error){
              var keys=Object.keys(response.data.error);
              keys.forEach(function(d){
                $('#'+d).addClass('is-invalid');
                $('#'+d+'_msg').text(response.data.error[d][0]);
              })
            }
        })
    }else{
      axios.post("{{URL::to('admin/setting/')}}/"+id,formData)
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
}
$(document).on("click","#modalBtn",  function(event){
    console.log('fire')
    Clear();
    $('#exampleModalLabel').text('Add New Customer');
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
    Clear()
    $('.password').addClass('d-none')
    $('#exampleModalLabel').text('Edit Customer');
    let route=$(this).data('url');
    axios.get(route)
    .then((data)=>{
      var editKeys=Object.keys(data.data);
      editKeys.forEach(function(key){
        
        if (key=='status') {

          $("input[value='" + data.data[key] + "']").attr('checked', true);
        }
         $('#'+key).val(data.data[key]);
         $('#modal').modal('show');
         $('#id').val(data.data.id);
      })
    })
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
