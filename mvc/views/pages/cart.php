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
                        $total= 0;
                        $index=0;
                        foreach ($data["ShoppingCart"] as $key) {
                            $key["index"] = $index;
                            $index++;
                        ?>

                            <tr>
                                <td><img src="<?php echo $key["img_path"] ?>" /> </td>
                                <td><?php echo $key["name"] ?></td>
                                <td>In stock</td>
                                <td><input class="form-control" type="number" name="quantity" min="1"/></td>
                                <td><?php echo $key["price"] ?></td>
                            
                                <td class="text-right"><a href="../Cart/Remove/<?php echo $key["index"]; ?>"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button></a> </td>
                            </tr>
                            <?php
                                $total = $total + ($key["price"]);
                            ?>
                    <?php } ?>

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
                    <button class="btn btn-lg btn-block btn-success text-uppercase">Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>