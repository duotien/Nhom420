<div class="page-container">
    <div class="main-content">
		<div class="section__content section__content--p30">
								<img src="<?php echo $data["SelectedProduct"]["img_path"] ?>" width="30%" style="padding-bottom: 10px;"/>

								<form action="../Admin/EditingProduct/<?php echo $data["SelectedProduct"]["id"]; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
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
													<option
														value="<?php echo $brand["brand_id"]; ?>"
														<?php if($brand["brand_id"] == $data["SelectedProduct"]["brand_id"]){ echo "selected='selected'"; }?>
													>
														<?php echo $brand["name"]; ?>
													</option>
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
											<input type="text" id="product-input" name="product-input" placeholder="Product Name" class="form-control" value="<?php echo $data["SelectedProduct"]["name"]; ?>">
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
													<option 
														value="<?php echo $category["cat_id"]; ?>"
														<?php if($category["cat_id"] == $data["SelectedProduct"]["cate_id"]){ echo "selected='selected'"; }?>
													>
														<?php echo $category["name"]; ?>
													</option>
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
											<input type="number" id="price-input" name="price-input" min="1" placeholder="1" class="form-control" value="<?php echo $data["SelectedProduct"]["price"]; ?>">
										</div>
									</div>
									<div class="row form-group">
										<div class="col col-md-3">
											<label class=" form-control-label">Quantity</label>
										</div>
										<div class="col-12 col-md-9">
											<input type="number" id="quantity-input" name="quantity-input" min="1" placeholder="1" class="form-control" value="<?php echo $data["SelectedProduct"]["quantity"]; ?>">
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
											<input type="text" id="description-input" name="description-input" placeholder="Description" class="form-control" value="<?php echo $data["SelectedProduct"]["description"]; ?>">
										</div>
									</div>
									<div class="card-footer">
										<button type="submit" name="btn_edit_product" class="btn btn-primary btn-sm">
											<i class="fa fa-dot-circle-o"></i>Submit
										</button>
										<button type="reset" class="btn btn-danger btn-sm">
											<i class="fa fa-ban"></i> Reset
										</button>
										<a href="../Admin/Product" type="button" class="btn btn-outline-success" style="border: none; float:right;">Back to Admin</a>
									</div>
								</form>
		</div>
	</div>
</div>
