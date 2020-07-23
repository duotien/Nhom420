<form method="POST" action="../Admin/EdittingUser">
    <div>
        <p>Username: <?php echo $data["SelectedCustomer"]["username"]; ?></p>
    </div>
    <div>
        <label for="email">Email: </label>
        <input type="email" class="form-input" name="email" id="email" placeholder="Email" value="<?php echo $data["SelectedCustomer"]["email"]; ?>" />
    </div>
    <div>
        <label for="name">Name: </label>
        <input type="text" class="form-input" name="name" id="name" placeholder="Your Name" value="<?php echo $data["SelectedCustomer"]["name"]; ?>" />
    </div>
    <div>
        <label for="phone_number">Phone Number: </label>
        <input type="tel" pattern="[0-9]*" class="form-input" name="phone_number" id="phone_number" placeholder="Phone Number" value="<?php echo $data["SelectedCustomer"]["phone_number"]; ?>" />
    </div>
    <div class="card-footer">
        <button type="submit" name="btn_edit_customer" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i>Submit
        </button>
        <button type="reset" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Reset
        </button>
        <a href="../Admin/User" type="button" class="btn btn-outline-success" style="border: none; float:right;">Back to Admin</a>
    </div>
</form>