 <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
     <h1 class="dulelisthead">Due List</h1>
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
                             <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                                 Add Due List <i class="fas fa-plus"></i>
                             </button>
                         </div>
                         <div class="card-body">
                             <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                 <div class="modal-dialog modal-lg" role="document">
                                     <div class="modal-content">
                                         <div class="modal-header">
                                             <h5 class="modal-title" id="exampleModalLabel">Due List</h5>
                                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                 <span aria-hidden="true">&times;</span>
                                             </button>
                                         </div>
                                         <div class="modal-body">
                                             <form action="<?php echo base_url(); ?>duelistadd" method="POST">
                                                 <div class="form-group row">
                                                     <label for="inputPassword" class="col-sm-2 col-form-label">Order Date</label>
                                                     <div class="col-sm-10">
                                                         <input type="date" class="form-control" id="date-picker-example" placeholder="Enter Order Date" name="Orderdate" required>
                                                     </div>
                                                 </div>

                                                 <div class="form-group row">
                                                     <label for="dueCustomerName" class="col-sm-2 col-form-label">Customer Name</label>
                                                     <div class="col-sm-10">
                                                         <input type="text" class="form-control" placeholder="Enter Customer Name" name="dueCustomerName" required>
                                                     </div>
                                                 </div>
                                                 <div class="form-group row">
                                                     <label for="CustomerAddress" class="col-sm-2 col-form-label">Enter Customer Address</label>
                                                     <div class="col-sm-10">
                                                         <input type="text" class="form-control" placeholder="Enter Customer Address" name="CustomerAddress" required>
                                                     </div>
                                                 </div>
                                                 <div class="form-group row">
                                                     <label for="CustomerMobil" class="col-sm-2 col-form-label">Customer Mobil No</label>
                                                     <div class="col-sm-10">
                                                         <input type="text" class="form-control" placeholder="Enter Customer Mobil No" name="CustomerMobil" required>
                                                     </div>
                                                 </div>
                                                 <div class="form-group row">
                                                     <label for="forPurpose" class="col-sm-2 col-form-label">For Purpose</label>
                                                     <div class="col-sm-10">
                                                         <input type="text" class="form-control" placeholder="Enter Customer Mobil No" name="forPurpose" required>
                                                     </div>
                                                 </div>
                                                 <div class="form-group row">
                                                     <label for="TotalAmoun" class="col-sm-2 col-form-label">Total Amount</label>
                                                     <div class="col-sm-10">
                                                         <input type="text" class="form-control" placeholder="Enter Total Amoun" name="TotalAmoun" required>
                                                     </div>
                                                 </div>
                                                 <div class="form-group row">
                                                     <label for="TotalAdvance" class="col-sm-2 col-form-label">Advance</label>
                                                     <div class="col-sm-10">
                                                         <input type="text" class="form-control" placeholder="Enter Advance" name="TotalAdvance" required>
                                                     </div>
                                                 </div>
                                                 <div class="form-group row">
                                                     <label for="TotalDue" class="col-sm-2 col-form-label">Due</label>
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
                             <div class="table-main">
                                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                     <thead class="ordertable">
                                         <tr>
                                             <th class="date">Date</th>
                                             <th class="cname">Customer Name</th>
                                             <th class="name">Address</th>
                                             <th class="phone">Phone Number</th>
                                             <th>Purpase</th>
                                             <th>Total</th>
                                             <th class="advance">Advance</th>
                                             <th>Due</th>
                                             <th>Edit/Delet</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <?php
                                                    if($duelist){
                                                     foreach ($duelist as $s_due){

                                                    ?>
                                         <tr>
                                             <td><?php echo $s_due->Date ?></td>
                                             <td><?php echo $s_due->CustomerName ?></td>
                                             <td><?php echo $s_due->Address ?></td>
                                             <td><?php echo $s_due->PhoneNumber ?></td>
                                             <td><?php echo $s_due->Purpase ?></td>
                                             <td><?php echo $s_due->Total ?></td>
                                             <td><?php echo $s_due->Advance ?></td>
                                             <td><?php echo $s_due->Dew ?></td>
                                             <td>
                                                 <a href="<?php echo base_url(); ?>deweditdata/<?php echo $s_due->due_id ?>"><i class="fas fa-edit edit" data-toggle="modal" data-target="#exampleModal"></i></a><a href="<?php echo base_url(); ?>dewdelet/<?php echo $s_due->due_id?>"><i class="fas fa-trash detet"></i></a>
                                             </td>
                                         </tr>

                                         <?php 
                                                        } 
                                                         }
                                                    ?>

                                         <tr style="background:#444;color:#fff">
                                             <td colspan="4"></td>
                                             <td>Total =</td>
                                             <td><?php echo $sum; ?></td>
                                             <td>T.Dew =</td>
                                             <td><?php echo $sumdew; ?></td>
                                         </tr>

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