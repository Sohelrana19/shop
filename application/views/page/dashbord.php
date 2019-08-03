<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            <h3 style="font-size: 21px;">Total (Amount)</h3>
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <h2>
                                <?php echo $sum; ?><span style="margin-left: 10px;">TK</span></h2>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            <h3 style="color:red;font-size: 21px;">TOTAL (Due)</h3>
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <h2>
                                <?php echo $sumdew; ?><span style="margin-left: 10px;">TK</span></h2>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                            <h3 style="font-size: 21px;">TOTAL(Orders)</h3>
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <h2>
                                    <?php echo $count; ?><span style="margin-left: 10px; font-size: 21px;">Order</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Content Row -->

<section>
    <div class="container">
        <div class="row">
            <?php
            if($productdp){
             foreach ($productdp as $s_productdp){

             ?>
                <div class="col-lg-3" style="margin-bottom: 25px;">
                    <div class="card productimg">
                        <img src="<?php echo $s_productdp->image ?>" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">
                                <?php echo $s_productdp->catagory ?>
                            </h5>
                            <p class="card-text">1 Day & 1 Night For <span style="color:#444;font-weight: bold !important;font-size: 20px;"><?php echo $s_productdp->product_price ?>TK</span> </p>
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Get Order Now</a>
                        </div>
                    </div>
                </div>
                <?php 
                 } 
                  }
                ?>

        </div>

    </div>
</section>

<!-- Content Row -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Order List</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url(); ?>getorderdash/<?php echo $s_productdp->id?>" method="POST">
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Order Date</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" placeholder="Enter Order Date" name="Orderdate" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Retarn Date</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" placeholder="Enter Retarn Date" name="RetarnDate" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Customer Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Enter Customer Name" name="CustomerName" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Enter Customer Address</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Enter Customer Address" name="CustomerAddress" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Customer Mobil No</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Enter Customer Mobil No" name="CustomerMobil" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Days</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Enter Total Days" name="TotalDays" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Total Amount</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?php echo $s_productdp->product_price ; ?>" name="TotalAmoun" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Advance</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Enter Advance" name="TotalAdvance" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Due</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Enter Due" name="TotalDue" required>
                        </div>
                    </div>
                    <div class="save-btn text-center">
                        <input type="submit" class="btn-default">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- /.container-fluid -->