<?php
foreach ($data['Array'] as $row)
{
?>
    <div class="n420-product-box">
        <a href="<?php echo $row['id'] . ".php" ?>">
            <img class="n420-product-image" src="public/<?php echo $row['img_path'] ?>" alt="" />
            <!--img class="n420-product-icon" src="" alt=""-->
            <div class="n420-product-name-price">
                <b><?php echo $row['name'] ?></b>
                <span><?php echo $row['price'] ?></span>
            </div>
        </a>
    </div>
<?php
}