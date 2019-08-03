 <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="orderlisthead">Order List</h1>
                    
                </div>

                <!-- Content Row -->
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="product-list">

                                    <!-- DataTales Example -->
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary"><a href="#" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Add Order <i class="fas fa-plus"></i></a></h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-main">
                                                <table class="table table-bordered table-striped odrertable" id="dataTable" cellspacing="0">
                                                    <thead class="ordertable">
                                                        <tr >
                                                            <th class="date">Date</th>
                                                            <th class="return">Return Date</th>
                                                            <th class="name">Name</th>
                                                            <th class="address">Address</th>
                                                            <th>Phone</th>
                                                            <th>Days</th>
                                                            <th>Total</th>
                                                            <th class="advance">Advance</th>
                                                            <th>Due</th>
                                                            <th>Edit/Delet</th>
                                                        </tr>
                                                    </thead>
                                                
                                                    <tbody>
                                                    <?php
                                                    if($order){
                                                     foreach ($order as $s_order){

                                                    ?>
                                                        <tr>
                                                            <td><?php echo $s_order->Date ?></td>
                                                            <td><?php echo $s_order->returndate ?></td>
                                                            <td><?php echo $s_order->Name ?></td>
                                                            <td><?php echo $s_order->Address ?></td>
                                                            <td><?php echo $s_order->Phone ?></td>
                                                            <td><?php echo $s_order->days ?></td>
                                                            <td><?php echo $s_order->Total ?></td>
                                                            <td><?php echo $s_order->Advance ?></td>
                                                            <td><?php echo $s_order->Dew ?></td>
                                                            <td>
                                                                <a href="<?php echo base_url(); ?>editdata/<?php echo $s_order->order_id ?>"><i class="fas fa-edit edit"></i></a><a href="<?php echo base_url(); ?>delet/<?php echo $s_order->order_id ?>"><i class="fas fa-trash detet"></i></a>
                                                            </td>
                                                        </tr>

                                                    <?php 
                                                        } 
                                                         }
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                                            <form action="<?php echo base_url(); ?>getorder" method="POST">
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
                                                                        <input type="text" class="form-control" placeholder="Enter Total Amoun"  name="TotalAmoun" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Advance</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" placeholder="Enter Advance"   name="TotalAdvance" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="inputPassword" class="col-sm-2 col-form-label">Due</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" placeholder="Enter Due"  name="TotalDue" required>
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