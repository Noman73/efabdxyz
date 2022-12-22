






<script>
$('#start_date,#end_date').daterangepicker({
    showDropdowns: true,
    singleDatePicker: true,
    // parentEl: ".bd-example-modal-lg .modal-body",
    locale: {
        format: 'DD-MM-YYYY',
    }
});


function formRequest()
{
    fromDate=$('#start_date').val();
    endDate=$('#end_date').val();
    axios.post("{{URL::to('/admin/dashboard')}}",{fromDate:fromDate,toDate:endDate})
    .then((res)=>{
        console.log(res)

        $('#total_sale').text((res.data.total_sale))
        $('#matching_comm').text(parseFloat(res.data.matching_comm).toFixed(2))
        $('#direct_comm').text(parseFloat(res.data.direct_comm).toFixed(2))
        $('#total_withdraw').text(parseFloat(res.data.withdraw).toFixed(2))
        $('#total_customer').text(res.data.total_customer)
        $('#pending_withdraws').text(res.data.pending_withdraws)
    })
}

$(document).ready(function(){
    formRequest();
})

$(document).on('change','#start_date,#end_date',function(){
    formRequest();
})
</script>

