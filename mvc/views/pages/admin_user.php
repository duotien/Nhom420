
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Customer</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Properties</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <button class="au-btn-filter">
                                            <i class="zmdi zmdi-filter-list"></i>filters</button>
                                    </div>
                                    <div class="table-data__tool-right">
                                        <a href="adduser.html"><button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>add user</button></a>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>username</th>
                                                <th>email</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach($data["CustomerList"] as $customer)
                                                {
                                            ?>
                                                <tr class="tr-shadow">
                                                    <td></td>
                                                    <td><?php echo $customer["username"]; ?></td>
                                                    
                                                    <td>
                                                        <span class="block-email"><?php echo $customer["email"]; ?></span>
                                                    </td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                        <a href="../Admin/EditUser/<?php echo $customer["id"] ?>"><button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </button></a>
                                                                <form class="formDel"
                                                                    onsubmit="return(myFunction());"
                                                                    method="POST"
                                                                    action='../Admin/RemoveUser/<?php echo $customer["id"] ?>'
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
                                            <?php
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div></br>

                        <div class="row">
                            <div class="col-md-12">
                            <!-- USER DATA-->
                            <div class="user-data m-b-30">
                                <h3 class="title-3 m-b-30">
                                    <i class="zmdi zmdi-account-calendar"></i>Admin User</h3>
                                <div class="filters m-b-45">
                                    <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                                        <select class="js-select2" name="property">
                                            <option selected="selected">All Properties</option>
                                            <option value="">Products</option>
                                            <option value="">Services</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    <div class="rs-select2--dark rs-select2--sm rs-select2--border">
                                        <select class="js-select2 au-select-dark" name="time">
                                            <option selected="selected">All Time</option>
                                            <option value="">By Month</option>
                                            <option value="">By Day</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                                <div class="table-responsive table-data">
                                    <div class="au-task-list js-scrollbar3">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <td></td>
                                                <td>username</td>
                                                <td>role</td>
                                                <td></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                foreach($data["AdminList"] as $adminuser)
                                                {
                                            ?>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h6><?php echo $adminuser["username"]; ?></h6>
                                                            <span>
                                                                <a href="#"><?php $adminuser["email"] ?></a>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            if($adminuser["type"] == 1)
                                                            {
                                                                echo "<span class='role admin'>Admin</span>";
                                                            }
                                                            else if($adminuser["type"] == 0)
                                                            {
                                                                echo "<span class='role member'>User</span>";
                                                            }
                                                        ?>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                            <!-- END USER DATA-->
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