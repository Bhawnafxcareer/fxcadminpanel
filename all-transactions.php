<?php include('include/header.php'); ?>
<?php include('include/sidebar.php'); ?>
<!-- Start::app-content -->
<div class="main-content app-content">
    <div class="container-fluid">


        <!-- Page Header -->
        <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
            <div>
                <nav>
                    <ol class="breadcrumb mb-1">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">All Transactions</li>
                    </ol>
                </nav>
                <h1 class="page-title fw-medium fs-18 mb-0">All Transactions</h1>
            </div>

        </div>
        <!-- Page Header Close -->

        <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="EnquiriesTable" class="table table-bordered table-striped text-nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>S.No.</th>
                                        <th>Payment For </th>
                                        <th>Amount.</th>
                                        <th>Transaction ID</th>
                                        <th>Date</th>
                                        <th>Payment Status</th>
                                        <th>Actions</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td class="toggle-details">
                                            Studar Littlegfdg fghgf
                                        </td>
                                        <td>6753</td>
                                        <td>pay_OeOSFxMzBMU4lJ</td>
                                        <td>24-12-2024
                                        </td>
                                        <td><span class="badge bg-success-transparent">Paid</span></td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a href="enroll.php"
                                                    class="btn btn-sm btn-success btn-wave waves-effect waves-light">  <i class="ri-download-2-line align-middle me-2 d-inline-block"></i> Download Invoice</a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-icon btn-sm btn-danger-transparent dlt rounded-pill"><i
                                                        class="ri-delete-bin-line"></i></a>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td class="toggle-details">
                                            Studar Littlegfdg fghgf
                                        </td>
                                        <td>6753</td>
                                        <td>pay_OeOSFxMzBMU4lJ</td>
                                        <td>24-12-2024
                                        </td>
                                        <td><span class="badge bg-danger-transparent">Failed</span></td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a href="enroll.php"
                                                    class="btn btn-sm btn-success btn-wave waves-effect waves-light">  <i class="ri-download-2-line align-middle me-2 d-inline-block"></i> Download Invoice</a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-icon btn-sm btn-danger-transparent dlt rounded-pill"><i
                                                        class="ri-delete-bin-line"></i></a>
                                            </div>
                                        </td>


                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End::row-1 -->
    </div>
</div>
<?php include('include/footer.php'); ?>
