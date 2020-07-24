
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">product table</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Properties</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                                <option value="">Option 3</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <button class="au-btn-filter">
                                            <i class="zmdi zmdi-filter-list"></i>filters</button>
                                    </div>
                                    <div class="table-data__tool-right">
                                        <!-- <a href="../Admin/AddProduct"> -->
                                            <button class="au-btn au-btn-icon au-btn--green au-btn--small" id="btn-add">
                                                <i class="zmdi zmdi-plus"></i>add item</button>
                                        <!-- </a> -->
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <div class="au-task-list js-scrollbar3">
                                        <table class="table table-data2">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>no.</th>
                                                    <th>brand</th>
                                                    <th>name</th>
                                                    <th>category</th>
                                                    <th>quantity</th>
                                                    <th>price</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($data["ProductArray"] as $product)
                                                    {
                                                ?>
                                                    <tr class="tr-shadow">
                                                        <td><img src="<?php echo $product["img_path"] ?>" /></td>
                                                        <td><?php echo $product["id"] ?></td>
                                                        <td>
                                                            <span class="block-email"><?php echo $data["BrandArray"][$product["brand_id"]-1]["name"]; ?></span>
                                                        </td>
                                                        <td class="desc"><?php echo $product["name"] ?></td>
                                                        <td>
                                                            <span class="block-email"><?php echo $data["CategoryArray"][$product["cate_id"]-1]["name"]; ?></span>
                                                        </td>
                                                        <td>
                                                            <?php echo $product["quantity"] ?>
                                                        </td>
                                                        <td><?php echo $product["price"] ?></td>
                                                        <td>
                                                            <div class="table-data-feature">
                                                                <a href="../Admin/EditProduct/<?php echo $product["id"] ?>"><button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </button></a>
                                                                <form class="formDel"
                                                                    
                                                                    method="POST"
                                                                    action='../Admin/RemoveProduct/<?php echo $product["id"] ?>'
                                                                    onsubmit="return(myFunction());"
                                                                >
                                                                    <button type="submit" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                        <i class="zmdi zmdi-delete"></i>
                                                                    </button>
                                                                    <input type="hidden" name="btn-remove" value="yes" />
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="spacer"></tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
        <h2>
            <strong>Add Item </strong> Product
        </h2>
    
        <span class="close">&times;</span>
      
    </div>
    <div class="modal-body">
        <form action="../Admin/AddProduct" method="post" enctype="multipart/form-data" class="form-horizontal">
									<div class="row form-group">
										<div class="col col-md-3">
											<label for="brand-input" class=" form-control-label">Brand</label>
										</div>
										<div class="col-12 col-md-9">
											<select id="brand-input" name="brand-input">
												<?php 
													foreach($data["BrandList"] as $brand)
													{
												?>
													<option value="<?php echo $brand["brand_id"]; ?>"><?php echo $brand["name"]; ?></option>
												<?php
													}
												?>
											</select>
										</div>
									</div>
									<div class="row form-group">
										<div class="col col-md-3">
											<label for="product-input" class=" form-control-label">Product Name</label>
										</div>
										<div class="col-12 col-md-9">
											<input type="text" id="product-input" name="product-input" placeholder="Product Name" class="form-control">
										</div>
									</div>
									<div class="row form-group">
										<div class="col col-md-3">
											<label for="cate-input" class=" form-control-label">Category</label>
										</div>
										<div class="col-12 col-md-9">
											<select id="cate-input" name="cate-input">
												<?php 
													foreach($data["CategoryList"] as $category)
													{
												?>
													<option value="<?php echo $category["cat_id"]; ?>"><?php echo $category["name"]; ?></option>
												<?php
													}
												?>
											</select>
										</div>
									</div>
									<!-- <div class="row form-group">
										<div class="col col-md-3">
											<label for="date-input" class=" form-control-label">Date</label>
										</div>
										<div class="col-12 col-md-9">
											<input type="date" id="date-input" name="date-input" value=<?php echo date('Y-m-d'); ?> class="form-control">
											<small class="help-block form-text">Please enter the date</small>
										</div>
									</div> -->
									<div class="row form-group">
										<div class="col col-md-3">
											<label class=" form-control-label">Price</label>
										</div>
										<div class="col-12 col-md-9">
											<input type="number" id="price-input" name="price-input" min="1" value="1" placeholder="1" class="form-control">
										</div>
									</div>
									<div class="row form-group">
										<div class="col col-md-3">
											<label class=" form-control-label">Quantity</label>
										</div>
										<div class="col-12 col-md-9">
											<input type="number" id="quantity-input" name="quantity-input" min="1" value="1" placeholder="1" class="form-control">
										</div>
									</div>
									<div class="row form-group">
										<div class="col col-md-3">
											<label for="file-input" class=" form-control-label">Picture input</label>
										</div>
										<div class="col-12 col-md-9">
											<input type="file" id="file-input" name="file-input" class="form-control-file">
										</div>
									</div>
									<div class="row form-group">
										<div class="col col-md-3">
											<label for="description-input" class=" form-control-label">Description</label>
										</div>
										<div class="col-12 col-md-9">
											<input type="text" id="description-input" name="description-input" placeholder="Description" class="form-control">
										</div>
									</div>
									<div class="card-footer">
										<a href="../Admin/Product"><button type="submit" name="btn_add_product" class="btn btn-primary btn-sm">
											<i class="fa fa-dot-circle-o"></i>Submit
										</button></a>
										<button type="reset" class="btn btn-danger btn-sm">
											<i class="fa fa-ban"></i> Reset
										</button>
										<!-- <a href="../Admin/Product" type="button" class="btn btn-outline-success" style="border: none; float:right;">Back to Admin</a> -->
										<?php
											if(isset($data["Result"]))
											{
												if($data["Result"])
												{	
													echo "<span>Added a product</span>";
												}
												else
												{
													echo "<span>There was an error adding new product</span>";
												}
											}
										?>
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
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("btn-add");

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

<?php require_once "./mvc/views/blocks/swal.html"; ?>

