<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">



            <div class="card">
                <div class="card-header">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                Add Product <i class="fas fa-plus"></i>
                </button>
                </div>
                <div class="card-body">
                <div class="table-main">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead class="ordertable">
                            <tr>
                               
                                <th class="cname">Box Catagory</th>
                                <th class="name">Price</th>
                                <th class="phone">Details</th>
                                <th>Image</th>
                                <th>Edit/Delet</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            if($productdp){
                            foreach ($productdp as $s_productdp){
                            ?>
                            <tr>
                                
                                <td><?php echo $s_productdp->catagory ?></td>
                                <td><?php echo $s_productdp->product_price ?></td>
                                <td><?php echo $s_productdp->details ?></td>
                                <td><img src="<?php echo $s_productdp->image ?>" alt="" style="width:135px; height:95px;"></td>
                                <td>
                                    <a href=""><i class="fas fa-edit edit" data-toggle="modal" data-target="#exampleModal"></i></a><a href="<?php echo base_url(); ?>productdelet/<?php echo $s_productdp->id ?>"><i class="fas fa-trash detet"></i></a>
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
                                         <form action="<?php echo base_url(); ?>getproduct" method="POST" enctype="multipart/form-data">

                                            <div class="form-group row">
                                                <label for="PeoductCatagory" class="col-sm-2 col-form-label">Peoduct Catagory</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="Enter Peoduct Catagory" name="PeoductCatagory" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="PeoductPrice" class="col-sm-2 col-form-label">Peoduct Price</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="Enter Price" name="PeoductPrice" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="PeoductDetails" class="col-sm-2 col-form-label">Peoduct Details</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="Enter Peoduct Details" name="PeoductDetails" required>
                                                </div>
                                            </div>
                                            <div class="form-group row ml-5">
                                                <label class="input-file">
                                                <input type="file" class="fileInput" name="productimage">
                                                </label>
                                            </div>



                                            <div class="save-btn text-center">
                                                <input type="submit" class="btn-default">
                                            </div>
                                            </form>
                                         </div>
                                     </div>
                                 </div>
                             </div>
</section>