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
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
    $('#applicants').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
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
      if(this.files.length){
        $(".btn-for-pds").removeAttr("disabled");
      }
      else{
        $(".btn-for-pds").attr("disabled","disabled");
      }
    });

    $("#saln").change(function(){
      if(this.files.length){
        $(".btn-for-saln").removeAttr("disabled");
      }
      else{
        $(".btn-for-saln").attr("disabled","disabled");
      }
    });
    
  });
</script>
</body>
</html>