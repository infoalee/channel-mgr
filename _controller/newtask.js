$(document).ready(function(){
  //datepicker
    $('#from-dt').datepicker({
      format: "dd-mm-yyyy",
      //startDate: "today",
      autoclose: true,
      todayHighlight: true
    });
     $('#to-dt').datepicker({
       format: "dd-mm-yyyy",
      //startDate: "today",
      autoclose: true,
      todayHighlight: true
    });
  
    $('#cnt-dt').datepicker({
       format: "dd-mm-yyyy",
      startDate: "today",
      autoclose: true,
      todayHighlight: true
    });
  //\\ datepicker

  $('.s-control').hide();

    $('#btnClear').on('click', function () {
        $('#newtaskForm').trigger("reset");
        $('#campaigncode').focus();
        $('.s-control').hide();
    });

    $("#btnCampaingChk").click( function(){

      if($('#campaigncode').val() ==''){

        alert("Please enter Camapign Code.");

      }else{

      //$('.modal-loading').show();
      var id_search = $("#campaigncode").val();
      			$.ajax({
                url: "./_model/func-newtask.php",
                type: "POST",
		data: { key_search : id_search},
    //dataType: "json",
    cache: false,
				beforeSend:function(){

				},
        success: function(data) {
					
					//alert(data);
          if(trimStr(data) == ''){
            alert('No Data');
          }else{
            $('.s-control').show();
            var result = data.split("|");
            var name = trimStr(result[0]);
            var objective = result[1];
            var product = trimStr(result[2].toUpperCase());
            var startDate = result[3];
            var endDate = result[4];
              $('#campaignName').val(name);
              $('#slProduct').val(product);
              $('#campaignObj').val(objective);
              $('#from-dt').val(startDate);
              $('#from-dt').datepicker('update', startDate);
              $('#to-dt').val(endDate);
              $('#to-dt').datepicker('update', endDate);
          }
          
          //$('.modal-loading').hide();
					console.log('Search Finished');
                },
         error: function(xhr, ajaxOptions, thrownError) {
                    // Fail message
          console.log('error: ' + thrownError + ' ' + ajaxOptions);
                    $('#success_sm').html("<div class='alert alert-danger'>");
                    $('#success_sm > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success_sm > .alert-danger').append("<strong>ขออภัย เกิดข้อผิดพลาดในขณะนี้. กรุณาลองใหม่อีกครั้ง!<br>" + xhr.status + "<br>" + thrownError);
                    $('#success_sm > .alert-danger').append('</div>');
                    //clear all fields
                    $('#smSearchForm').trigger("reset");

                }
            }) ;
// result display // 
      }
    });
});