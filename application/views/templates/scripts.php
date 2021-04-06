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
<script src="<?php echo base_url(); ?>assets/plugins/amcharts4/core.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/amcharts4/charts.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/amcharts4/themes/dark.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/amcharts4/themes/animated.js"></script>

<script>
$(function () {
  
    
  initializeCharts();
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
      if(parseInt(this.files[0].size / 1000000) > 10){
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
          '<input type="hidden" id="award_id'+award_counter+'" name="award_id'+award_counter+'">'+
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
              '<button type="button" class="btn btn-flat btn-danger" onclick="removeAward(this,'+award_counter+')">Remove</button>'+
              '</div>'+
          '</div>'+
      '</div>';
      $(".no_awards").remove();
      $("#list_of_awards").append(award);
    });

    $(".btn-add-workhistory").click(function(){
      
      var workhistory_counter = parseInt($("#workhistory_counter").val()) + 1;
      $("#workhistory_counter").val(workhistory_counter);
      var workhistory = '<div class="row mb-3">'+
          '<input type="hidden" id="workhistory_id'+workhistory_counter+'" name="workhistory_id'+workhistory_counter+'">'+
          '<div class="col-sm-6">'+
              '<div class="form-group">'+
                  '<label>Company/Agency<sup class="text-danger"></sup></label>'+
                  '<input type="text" class="form-control" name="we_agency'+workhistory_counter+'">'+
              '</div>'+
          '</div>'+
          '<div class="col-sm-6">'+
              '<div class="form-group">'+
                  '<label>Position<sup class="text-danger"></sup></label>'+
                  '<input type="text" class="form-control" name="we_position'+workhistory_counter+'" >'+
              '</div>'+
          '</div>'+
          
          '<div class="col-sm-3">'+
              '<div class="form-group">'+
                  '<label>From<sup class="text-danger"></sup></label>'+
                  '<input onfocus="(this.type=\'date\')" onblur="(this.type=\'text\')"  class="form-control" name="we_from'+workhistory_counter+'">'+
              '</div>'+
          '</div>'+

          
          '<div class="col-sm-3">'+
              '<div class="form-group">'+
                  '<label>To<sup class="text-danger"></sup></label>'+
                  '<input onfocus="(this.type=\'date\')" onblur="(this.type=\'text\')"  class="form-control"  name="we_to'+workhistory_counter+'">'+
              '</div>'+
          '</div>'+

          
          '<div class="col-sm-3">'+
              '<div class="form-group">'+
                  '<label>Monthly Salary<sup class="text-danger"></sup></label>'+
                  '<input type="number" class="form-control" name="we_salary'+workhistory_counter+'">'+
              '</div>'+
          '</div>'+
          '<div class="col-sm-1">'+
              '<div class="form-group">'+
              '<label style="visibility:hidden;">Remove</label>'+
              '<button type="button" class="btn btn-flat btn-danger btn-block" onclick="removeWorkHistory(this,'+workhistory_counter+')">Remove</button>'+
              '</div>'+
          '</div>';
          
      $(".no_workhistory").remove();
      $("#list_of_workhistory").append(workhistory);
    });

    $("#ar_1_status").change(function(){
      var status_text = $('#ar_1_status option:selected').text()
      var chartconfig = {};
      chartconfig['data'] = doSomeAjaxRequest({"url":"<?php echo base_url(); ?>home/getNoOfApplicants","type":"POST","data":{"year" : $("#ar_1_year").val(),"status":this.value}});
      chartconfig['element'] = "no_of_applicants_applied";
      chartconfig['categoryField'] = "month";
      chartconfig['valueField'] = "count";
      chartconfig['fieldName'] = this.value == "*" ? "No. of Applicants" :  "No. of "+status_text+" Applicants";
      createLineChartSolo(chartconfig);
    });

    $("#ar_1_year").change(function(){
      var status_text = $('#ar_1_status option:selected').text()
      var chartconfig = {};
      chartconfig['data'] = doSomeAjaxRequest({"url":"<?php echo base_url(); ?>home/getNoOfApplicants","type":"POST","data":{"year" : this.value,"status":$("#ar_1_status").val()}});
      chartconfig['element'] = "no_of_applicants_applied";
      chartconfig['categoryField'] = "month";
      chartconfig['valueField'] = "count";
      chartconfig['fieldName'] = this.value == "*" ? "No. of Applicants" :  "No. of "+status_text+" Applicants";
      createLineChartSolo(chartconfig);
    });

    $("#er_1_type").change(function(){
      var type_text = $('#er_1_type option:selected').text()
      var chartconfig = {};
      chartconfig['data'] = doSomeAjaxRequest({"url":"<?php echo base_url(); ?>home/getHiredEmployees","type":"POST","data":{"year" : $("#er_1_year").val(),"type":this.value}});
      chartconfig['element'] = "no_of_employees_hired";
      chartconfig['categoryField'] = "month";
      chartconfig['valueField'] = "count";
      chartconfig['fieldName'] = this.value == "*" ? "No. of Employees" :  "No. of "+type_text+" Employees";
      createLineChartSolo(chartconfig);
    });

    $("#er_1_year").change(function(){
      var type_text = $('#er_1_type option:selected').text()
      var chartconfig = {};
      chartconfig['data'] = doSomeAjaxRequest({"url":"<?php echo base_url(); ?>home/getHiredEmployees","type":"POST","data":{"year" : this.value,"type":$("#er_1_type").val()}});
      chartconfig['element'] = "no_of_employees_hired";
      chartconfig['categoryField'] = "month";
      chartconfig['valueField'] = "count";
      chartconfig['fieldName'] = this.value == "*" ? "No. of Employees" :  "No. of "+type_text+" Employees";
      createLineChartSolo(chartconfig);
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

  function viewSALN(saln, url){
    if(saln){
      window.open(url,'_blank');
    }
    else{
      alert("SALN not found. Please upload one.");
    }
  }

  function removeAward(e,i){
    var r = confirm("Are you sure you want to remove this award?");
    if (r == true) {
      $.ajax({
        type: "POST",
        url: "<?php echo base_url().'home/remove_award';?>",
        data: {
          "id": $("#award_id"+i).val()
        },
        success: function(response) {
          $(e).closest('.row').remove();
          var award_counter = parseInt($("#award_counter").val()) - 1;
          $("#award_counter").val(award_counter);
          if(award_counter == 0){
            $("#list_of_awards").append("<span class='no_awards'>No Awards & Achievements Yet.</span>");
          }
        },
        error: function(response) {
            alert("Error removing award.");
        }
      });
    }

  }

  function removeWorkHistory(e,i){
    var r = confirm("Are you sure you want to remove this work history?");
    if (r == true) {
      $.ajax({
        type: "POST",
        url: "<?php echo base_url().'home/remove_workhistory';?>",
        data: {
          "id": $("#we_id"+i).val()
        },
        success: function(response) {
          $(e).closest('.row').remove();
          var workhistory_counter = parseInt($("#workhistory_counter").val()) - 1;
          $("#workhistory_counter").val(workhistory_counter);
          if(workhistory_counter == 0){
            $("#list_of_workhistory").append("<span class='no_workhistory'>No Work History Yet.</span>");
          }
        },
        error: function(response) {
            alert("Error removing work history.");
        }
      });
    }

  }

  function removeRelatedDocuments(id,filename){
    var r = confirm("Are you sure you want to remove this document?");

    if (r == true) {
      $.ajax({
        type: "POST",
        url: "<?php echo base_url().'home/remove_document';?>",
        data: {
          "id": id,
          "filename": filename
        },
        success: function(response) {
          $('.rd'+id).remove();
        },
        error: function(response) {
            alert("Error removing work history.");
        }
      });
    }
  }
</script>
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_dark);
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
var chart = am4core.create("chartdiv", am4charts.PieChart);

// Add data
chart.data = [ {
  "country": "Pending",
  "litres": 2
}, {
  "country": "Hired",
  "litres": 5
}, {
  "country": "Rejected",
  "litres": 1
}, 
];

// Add and configure Series
var pieSeries = chart.series.push(new am4charts.PieSeries());
pieSeries.dataFields.value = "litres";
pieSeries.dataFields.category = "country";
pieSeries.slices.template.stroke = am4core.color("#fff");
pieSeries.slices.template.strokeOpacity = 1;

// This creates initial animation
pieSeries.hiddenState.properties.opacity = 1;
pieSeries.hiddenState.properties.endAngle = -90;
pieSeries.hiddenState.properties.startAngle = -90;

chart.hiddenState.properties.radius = am4core.percent(0);


}); // end am4core.ready()


function initializeCharts(){
  var current_page = "<?php echo $current_page; ?>";
  if(current_page == "reports"){
   
  $.ajax({ type:'GET', url: "<?php echo base_url(); ?>home/get_ar_1_year", success: function(data){console.log(data); var years = ""; for(var e in data){ years+= '<option value="'+data[e].year+'">'+data[e].year+'</option>'; } $("#ar_1_year").html(years); }, dataType:'json' })
  .done(function(){
    //applicant report 1
    var status_text = $('#ar_1_status option:selected').text()
    var chartconfig = {};
    chartconfig['data'] = doSomeAjaxRequest({"url":"<?php echo base_url(); ?>home/getNoOfApplicants","type":"POST","data":{"year" : $("#ar_1_year").val(),"status":$("#ar_1_status").val()}});
    chartconfig['element'] = "no_of_applicants_applied";
    chartconfig['categoryField'] = "month";
    chartconfig['valueField'] = "count";
    chartconfig['fieldName'] = this.value == "*" ? "No. of Applicants" :  "No. of "+status_text+" Applicants";
    createLineChartSolo(chartconfig);
    //end applicant report 1
  });
  $.ajax({ type:'GET', url: "<?php echo base_url(); ?>home/get_er_1_year", success: function(data){console.log(data); var years = ""; for(var e in data){ years+= '<option value="'+data[e].year+'">'+data[e].year+'</option>'; } $("#er_1_year").html(years); }, dataType:'json' })
  .done(function(){
    //employee report 1
    var type_text = $('#er_1_type option:selected').text()
    var chartconfig = {};
    chartconfig['data'] = doSomeAjaxRequest({"url":"<?php echo base_url(); ?>home/getHiredEmployees","type":"POST","data":{"year" : $("#er_1_year").val(),"type":$("#er_1_type").val()}});
    chartconfig['element'] = "no_of_employees_hired";
    chartconfig['categoryField'] = "month";
    chartconfig['valueField'] = "count";
    chartconfig['fieldName'] = this.value == "*" ? "No. of Employees" :  "No. of "+type_text+" Employees";
    createLineChartSolo(chartconfig);
    //end employee report 1
  });

  }
  if(current_page == "dashboard"){

  }
}

function doSomeAjaxRequest(config){
  var data = null;
  $.ajax({
    url:config.url,
    type:config.type,
    async:false,
    dataType:'json',
    cache : false,
    data:config.data,
    success:function(e){
      data = e;
    },
    error:function(e){
      console.log("error " + e);
    },
  });
  return data;
}



//============================================ # of Hired Applicants
function createLineChartSolo(config){
  am4core.ready(function() {

  am4core.useTheme(am4themes_dark);
  am4core.useTheme(am4themes_animated);
  var chart = am4core.create(config.element, am4charts.XYChart);

  chart.colors.step = 2;

  // Add data
  chart.data = config.data;

  chart.exporting.menu = new am4core.ExportMenu();
  chart.exporting.menu.align = "right";
  chart.exporting.menu.verticalAlign = "top";

  // Create axes
  var xAxis = chart.xAxes.push(new am4charts.CategoryAxis())
  xAxis.dataFields.category = config.categoryField
  xAxis.renderer.cellStartLocation = 0.1
  xAxis.renderer.cellEndLocation = 0.9
  xAxis.renderer.grid.template.location = 0;
  xAxis.renderer.labels.template.fontSize = 12;
  xAxis.renderer.labels.template.fill = am4core.color("white");

  // Create series
  function createAxisAndSeries(field, name, opposite, bullet) {
    var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
    if(chart.yAxes.indexOf(valueAxis) != 0){
      valueAxis.syncWithAxis = chart.yAxes.getIndex(0);
    }
    
    var series = chart.series.push(new am4charts.LineSeries());
    series.dataFields.valueY = field;
    series.dataFields.categoryX =config.categoryField;
    series.strokeWidth = 2;
    series.yAxis = valueAxis;
    series.name = name;
    series.tooltipText = "{name}: [bold]{valueY}[/]";
    series.tensionX = 1;
    series.fillOpacity = 0.1;
    series.showOnInit = true;
    
    var interfaceColors = new am4core.InterfaceColorSet();

    var bullet = series.bullets.push(new am4charts.CircleBullet());
    bullet.circle.stroke = am4core.color("#ffffff");
    bullet.circle.strokeWidth = 1;
    
    valueAxis.renderer.line.strokeOpacity = 1;
    valueAxis.renderer.line.strokeWidth = 2;
    valueAxis.renderer.line.stroke = series.stroke;
    valueAxis.renderer.labels.template.fill = series.stroke;
    valueAxis.renderer.opposite = opposite;
  }

  createAxisAndSeries(config.valueField, config.fieldName, false, "circle");
  chart.cursor = new am4charts.XYCursor();
});
}


//=========================================================== end # of Applicants
</script>
</body>
</html>