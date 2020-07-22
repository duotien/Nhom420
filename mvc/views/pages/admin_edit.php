<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Add Item</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="main-content">
		<div class="section__content section__content--p30">
			<div class="container-fluid">
						<div class="card">
							<div class="card-header">
								<strong>Add Item</strong> Product 
							</div>
							<div class="card-body card-block">
								<form action="../Admin/EdittingProduct/<?php echo $data["SelectedProduct"]["id"]; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
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
									<div class="row form-group">
										<div class="col col-md-3">
											<label for="date-input" class=" form-control-label">Date</label>
										</div>
										<div class="col-12 col-md-9">
											<input type="date" id="date-input" name="date-input" value=<?php echo date('Y-m-d'); ?> class="form-control">
											<small class="help-block form-text">Please enter the date</small>
										</div>
									</div>
									<div class="row form-group">
										<div class="col col-md-3">
											<label class=" form-control-label">Price</label>
										</div>
										<div class="col-12 col-md-9">
											<input type="number" id="price-input" name="price-input" placeholder="1" class="form-control" value="<?php echo $data["SelectedProduct"]["price"]; ?>">
										</div>
									</div>
									<div class="row form-group">
										<div class="col col-md-3">
											<label class=" form-control-label">Quantity</label>
										</div>
										<div class="col-12 col-md-9">
											<input type="number" id="quantity-input" name="quantity-input" placeholder="1" class="form-control" value="<?php echo $data["SelectedProduct"]["quantity"]; ?>">
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
										<a href="../Admin" type="button" class="btn btn-outline-success" style="border: none; float:right;">Back to Admin</a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->