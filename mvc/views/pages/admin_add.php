
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
							