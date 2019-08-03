 <!-- DataTales Example -->
 <div class="card shadow mb-4">

<h3 style="background: #444; padding: 18px 46px; color: #fff; font-size: 40px;">Edit Order list</h3>
 <a href="<?php echo base_url(); ?>orderlist" class="btn btn-success col-lg-2 m-2">Back</a>

<div class="card-body">
    <form action="<?php echo base_url(); ?>updateedit" method="POST">
        <div class="form-group row">
            <div class="col-sm-10">
                <input type="hidden" class="form-control" value="<?php echo $orderbyid->order_id; ?>" name="order_id" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Order Date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" value="<?php echo $orderbyid->Date; ?>"  name="Orderdate" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Retarn Date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" value="<?php echo $orderbyid->returndate; ?>" name="RetarnDate" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Customer Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo $orderbyid->Name; ?>" name="CustomerName" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Enter Customer Address</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo $orderbyid->Address; ?>" name="CustomerAddress" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Customer Mobil No</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo $orderbyid->Phone; ?>" name="CustomerMobil" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Days</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo $orderbyid->days; ?>" name="TotalDays" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Total Amount</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo $orderbyid->Total; ?>" name="TotalAmoun" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Advance</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo $orderbyid->Advance; ?>" name="TotalAdvance" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Due</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo $orderbyid->Dew; ?>" name="TotalDue" required>
            </div>
        </div>
        <div class="save-btn text-center">
            <input type="submit" class="btn-default">
        </div>
    </form>
</div>
</div>