</div>
<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>


<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script>
$(function () {

    bsCustomFileInput.init();
    $('#employees').DataTable({
      "responsive": true,
      // Processing indicator
      "processing": true,
        // DataTables server-side processing mode
        "serverSide": true,
        // Initial no order.
        "order": [],
        // Load data from an Ajax source
        "ajax": {
            "url": "<?php echo base_url().'home/getEmployeeLists'; ?>",
            "type": "POST",
        },
        //Set column definition initialisation properties
        "columnDefs": [{ 
            "targets": [0],
            "orderable": false
        }]
    });

    $('#applicants').DataTable({
      "responsive": true,
      // Processing indicator
      "processing": true,
        // DataTables server-side processing mode
        "serverSide": true,
        // Initial no order.
        "order": [],
        // Load data from an Ajax source
        "ajax": {
            "url": "<?php echo base_url().'home/getApplicantLists'; ?>",
            "type": "POST",
        },
        //Set column definition initialisation properties
        "columnDefs": [{ 
            "targets": [0],
            "orderable": false
        }]
    });
    //pds
    $('.btn-change-pds').click(function(){
      $(".form-for-pds").show();
      $(".pds-change-section").hide();
    });
    //saln
    $('.btn-change-saln').click(function(){
      $(".form-for-saln").show();
      $(".saln-change-section").hide();
    });
    //pds
    $('.btn-cancel-pds').click(function(){
      $(".form-for-pds").hide();
      $(".pds-change-section").show();
    });
    //saln
    $('.btn-cancel-saln').click(function(){
      $(".form-for-saln").hide();
      $(".saln-change-section").show();
    });

    $("#pds").change(function(){
      if(parseInt(this.files[0].size / 100000) > 10){
        this.value = "";
        $(this).siblings('.custom-file-label').text("Choose file");
        alert("Maximum file size is 10 MB.");
      }
      else{
        if(this.files.length){
          $(".btn-for-pds").removeAttr("disabled");
        }
        else{
          $(".btn-for-pds").attr("disabled","disabled");
        }
      }
    });

    $("#saln").change(function(){
      if(parseInt(this.files[0].size / 100000) > 10){
        this.value = "";
        $(this).siblings('.custom-file-label').text("Choose file");
        alert("Maximum file size is 10 MB.");
      }
      else{
        if(this.files.length){
          $(".btn-for-saln").removeAttr("disabled");
        }
        else{
          $(".btn-for-saln").attr("disabled","disabled");
        }
      }
    });
    
    $(".btn-add-award").click(function(){
      var award_counter = parseInt($("#award_counter").val()) + 1;
      $("#award_counter").val(award_counter);
      var award =  '<div class="row">'+
          '<div class="col-sm-3">'+
              '<div class="form-group">'+
                  '<label>Name <sup class="text-danger"></sup></label>'+
                  '<input type="text" class="form-control" placeholder="" name="award_name'+award_counter+'">'+
              '</div>'+
          '</div>'+
          '<div class="col-sm-6">'+
              '<div class="form-group">'+
                  '<label>Description <sup class="text-danger"></sup></label>'+
                  '<input type="text" class="form-control" placeholder="" name="award_description'+award_counter+'">'+
              '</div>'+
          '</div>'+
          '<div class="col-sm-2">'+
              '<div class="form-group">'+
                  '<label>Date <sup class="text-danger"></sup></label>'+
                  '<input onfocus="(this.type=\'date\')" onblur="(this.type=\'text\')"  class="form-control" placeholder="" name="award_date'+award_counter+'">'+
              '</div>'+
          '</div>'+
          '<div class="col-sm-1">'+
              '<div class="form-group">'+
              '<label style="visibility:hidden;">Remove</label>'+
              '<button type="button" class="btn btn-flat btn-danger" onclick="removeAward(this)">Remove</button>'+
              '</div>'+
          '</div>'+
      '</div>';

      $("#list_of_awards").append(award);
    });

  });

  
  function viewPDS(pds, url){
    if(pds){
      window.open(url,'_blank');
    }
    else{
      
      alert("PDS not found. Please upload one.");
    }
  }

  function removeAward(e){
    $(e).closest('.row').remove();
    var award_counter = parseInt($("#award_counter").val()) - 1;
    $("#award_counter").val(award_counter);
  }
</script>
</body>
</html>