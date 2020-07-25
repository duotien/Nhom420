<link rel="stylesheet" href="admin/css/main.css">
<hr>
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">YOUR SHOPPING CART</h1>
    </div>
</section>

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Product</th>
                            <th scope="col">Available</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-right">Price</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $total = 0;
                        $index = 0;
                        if (isset($data["ShoppingCart"])) {
                            foreach ($data["ShoppingCart"] as $key) {
                                $key["index"] = $index;
                                $index++;
                        ?>

                                <tr>
                                    <td><img src="<?php echo $key["img_path"] ?>" /> </td>
                                    <td><?php echo $key["name"] ?></td>
                                    <td>In stock</td>
                                    <td><input class="form-control" type="number" name="quantity" id="quantity" min="1" max="10" value="1"/></td>



                                    <td id="content"><?php echo $key['price'];?></td>
                                    
                                    
                                    <td class="text-right"><a href="../Cart/Remove/<?php echo $key["index"]; ?>"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button></a> </td>
                                </tr>
                                        
                                <?php

                                $total = $total + ($key["price"]);
                                ?>

                        <?php }
                        } ?>

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total</strong></td>
                            <td class="text-right"><strong>$ <?php echo number_format($total, 3); ?></strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <!-- <div class="col-sm-12  col-md-6">
                            <button class="btn btn-block btn-light">Continue Shopping</button>
                        </div> -->
                <div class="col-sm-12 col-md-6 text-right">
                    <button class="btn btn-lg btn-block btn-success text-uppercase" id="btn-checkout">Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- The Add Modal -->
<div id="Modal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
        <h2>
            Checkout
        </h2>
    
        <span class="close">&times;</span>
      
    </div>
    <div class="modal-body">
    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">									
									<div class="row form-group">
										<div class="col col-md-3">
											<label for="name-input" class=" form-control-label">Customer Name<span style="color: red;">*</span></label>
										</div>
										<div class="col-12 col-md-9">
											<input type="text" id="name-input" name="name-input" placeholder="Customer Name" class="form-control" required>
										</div>
									</div>
									<div class="row form-group">
										<div class="col col-md-3">
											<label for="email-input" class=" form-control-label">Email address<span style="color: red;">*</span></label>
										</div>
										<div class="col-12 col-md-9">
                                        <input type="mail" id="email-input" name="email-input" placeholder="Email address" class="form-control" required>  
										</div>
									</div>
									<div class="row form-group">
										<div class="col col-md-3">
											<label for="address-input" class=" form-control-label">Address<span style="color: red;">*</span></label>
										</div>
										<div class="col-12 col-md-9">
											<input type="text" id="address-input" name="address-input" placeholder="Address" class="form-control" required>
										</div>
									</div>
									<div class="row form-group">
										<div class="col col-md-3">
											<label class=" form-control-label">Payment<span style="color: red;">*</span></label>
										</div>
										<div class="col-12 col-md-9">
                                            <input type="radio" id="cod" name="cod" value="cod" checked="checked">
                                            <label for="cod">COD</label><br>
                                            <!-- <input type="radio" id="other" name="other" value="other">
                                            <label for="other">Other</label><br> -->
										</div>
									</div>
									
									<div class="card-footer">
										<a href=""><button type="submit" name="btn_submit" class="btn btn-primary btn-sm">
											Submit
										</button></a>
										
									</div>
								</form>
    </div>
    <div class="modal-footer">
      <!-- <h3>Modal Footer</h3> -->
    </div>
  </div>

</div>
<script>
// Get the modal
var modal = document.getElementById("Modal");

// Get the button that opens the modal
var btn = document.getElementById("btn-checkout");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>