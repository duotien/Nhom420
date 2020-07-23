
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
                                        <a href="../Admin/AddProduct"><button class="au-btn au-btn-icon au-btn--green au-btn--small" >
                                            <i class="zmdi zmdi-plus"></i>add item</button></a>
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
<?php require_once "./mvc/views/blocks/swal.html"; ?>

