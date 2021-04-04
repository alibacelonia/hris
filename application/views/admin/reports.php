<style>
#no_of_applicants_applied,#no_of_employees_hired {
  width: 100%;
  height: 450px;
}

</style>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?php echo $title; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><?php echo $title; ?></li>
                    </ol>
                </div>
            </div>
            <div class="row">
            <div class="col-sm-12">
                <div class="card card-primary card-outline card-outline-tabs">
                    <div class="card-header p-0 border-bottom-0">
                        <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="applicant-report-tab" data-toggle="pill" href="#applicant-report" role="tab" aria-controls="applicant-report" aria-selected="false">Applicant</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="employee-report-tab" data-toggle="pill" href="#employee-report" role="tab" aria-controls="employee-report" aria-selected="true">Employee</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-four-tabContent">
                            <div class="tab-pane fade" id="employee-report" role="tabpanel" aria-labelledby="employee-report-tab">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card bg-gradient-dark">
                                            <div class="card-header border-0 ui-sortable-handle">
                                                <span class="card-title text-center">No. of Employees Hired Per Month</span>
                                                <div class="card-tools">
                                                    
                                                    <select name="year" id="er_1_year">
                                                        <option value="2021">2021</option>
                                                    </select>
                                                    <select name="year" id="er_1_type">
                                                        <option value="*">All</option>
                                                        <option value="COS">Contract of Service</option>
                                                        <option value="JO">Job Order</option>
                                                        <option value="CASUAL">Casual</option>
                                                        <option value="REGULAR">Regular</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div id="no_of_employees_hired"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade active show" id="applicant-report" role="tabpanel" aria-labelledby="applicant-report-tab">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card bg-gradient-dark">
                                            <div class="card-header border-0 ui-sortable-handle">
                                                <span class="card-title text-center">No. of Applicants Applied Per Month</span>
                                                <div class="card-tools">
                                                    
                                                    <select name="year" id="ar_1_year">
                                                        <option value="2021">2021</option>
                                                    </select>
                                                    <select name="year" id="ar_1_status">
                                                        <option value="*">All</option>
                                                        <option value="P">Pending</option>
                                                        <option value="H">Hired</option>
                                                        <option value="R">Rejected</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div id="no_of_applicants_applied"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                
            </div>
        </div>
    </div>
</div>
