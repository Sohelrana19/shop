 <!-- DataTales Example -->
 <div class="card shadow mb-4">

<h3 style="background: #444; padding: 18px 46px; color: #fff; font-size: 40px;">Edit Order list</h3>
 <a href="<?php echo base_url(); ?>duelist" class="btn btn-success col-lg-2 m-2">Back</a>

<div class="card-body">
    <form action="<?php echo base_url(); ?>updatedue" method="POST">
        <div class="form-group row">
            <div class="col-sm-10">
                <input type="hidden" class="form-control" value="<?php echo $dweeditbyid->due_id; ?>" name="due_id" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Order Date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" value="<?php echo $dweeditbyid->Date; ?>"  name="Orderdate" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Customer Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo $dweeditbyid->CustomerName; ?>" name="dueCustomerName" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Customer Address</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo $dweeditbyid->Address; ?>" name="CustomerAddress" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Customer Mobil</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo $dweeditbyid->PhoneNumber; ?>" name="CustomerMobil" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Purpose</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo $dweeditbyid->Purpase; ?>" name="forPurpose" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Total Amoun</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo $dweeditbyid->Total; ?>" name="TotalAmoun" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Advance</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo $dweeditbyid->Advance; ?>" name="TotalAdvance" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Total Due</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo $dweeditbyid->Dew; ?>" name="TotalDue" required>
            </div>
        </div>
        <div class="save-btn text-center">
            <input type="submit" class="btn-default">
        </div>
    </form>
</div>
</div>