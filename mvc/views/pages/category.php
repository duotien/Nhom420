        <hr>
        <div id="titleContainer">
            <b style="font-size: 22px; color: red;">CÁC SẢN PHẨM NỔI BẬT NHẤT</b>
            <div class="dropdown" id="btnDropdown">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Sort by </button>
                <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Ascending ↑</a>
                <a class="dropdown-item" href="#">Decrease ↓</a>
                </div>
            </div>
            <div class="HideFilter" id="btnHideFilter">
                <button type="button" class="btn btn-primary" >HideFilter</button>
            </div>
        </div>

        <div id="category" class="container-fluid">
            <div class="row">
                <div class="left-420-filter-panel col-md-2">
                    <form action="../Admin" method="post">
                        <div class="n420-filter-search-status">
                            <div class="n420-filter-search-status_text" style="font-size: 17px; margin-left: 5px;">BỘ LỌC SẢN PHẨM<br>---------------</br></div>
                        </div>
                        <div class="n420-filter-group n420-facet-filter" style="margin-left: 5px;">
                            <div class="n420-filter-group-header">Theo Danh Mục</div>
                            <div class="folding-items n420-filter-group_body folding-items--folded">
                                <?php
                                    foreach($data["BrandList"] as $brand)
                                    {
                                ?>
                                    <div class="n420-filter n420-checkbox-filter">
                                        <div class="n420-checkbox">
                                            <label class="420-checkbox_control">
                                                <input type="checkbox" id="opt_<?php echo $brand["id"];?>"/>
                                            </label>
                                            <span class="n420-checkbox_label"><?php echo $brand["name"];?></span>
                                        </div>
                                    </div>
                                <?php
                                    }
                                ?>
                            </div>
                            <div class="n420-filter-group-header">Theo Size</div>
                            <div class="folding-items n420-filter-group_body folding-items--folded">
                                <div class="n420-filter n420-checkbox-filter">
                                    <div class="n420-checkbox">
                                        <label class="n420-checkbox_control">
                                            <input type="checkbox" id="opt_6"/>
                                        </label>
                                        <span class="n420-checkbox_label">38</span>
                                    </div>
                                </div>
                                <div class="n420-filter n420-checkbox-filter">
                                    <div class="420-checkbox">
                                        <label class="n420-checkbox_control">
                                            <input type="checkbox" id="opt_7"/>
                                        </label>
                                        <span class="n420-checkbox_label">39</span>
                                    </div>
                                </div>
                                <div class="n420-filter n420-checkbox-filter">
                                    <div class="n420-checkbox">
                                        <label class="n420-checkbox_control">
                                            <input type="checkbox" id="opt_8"/>
                                        </label>
                                        <span class="n420-checkbox_label">40</span>
                                    </div>
                                </div>
                                <div class="n420-filter n420-checkbox-filter">
                                    <div class="n420-checkbox">
                                        <label class="n420-checkbox_control">
                                            <input type="checkbox" id="opt_9"/>
                                        </label>
                                        <span class="n420-checkbox_label">41</span>
                                    </div>
                                </div>
                                <div class="n420-filter n420-checkbox-filter">
                                    <div class="n420-checkbox">
                                        <label class="n420-checkbox_control">
                                            <input type="checkbox" id="opt_10"/>
                                        </label>
                                        <span class="n420-checkbox_label">42</span>
                                    </div>
                                </div>
                                <div class="n420-filter n420-checkbox-filter">
                                    <div class="n420-checkbox">
                                        <label class="n420-checkbox_control">
                                            <input type="checkbox" id="opt_11"/>
                                        </label>
                                        <span class="n420-checkbox_label">43</span>
                                    </div>
                                </div>
                                <div class="n420-filter n420-checkbox-filter">
                                    <div class="n420-checkbox">
                                        <label class="n420-checkbox_control">
                                            <input type="checkbox" id="opt_12" />
                                        </label>
                                        <span class="n420-checkbox_label">44</span>
                                    </div>
                                </div>
                                <div class="n420-filter n420-checkbox-filter">
                                    <div class="n420-checkbox">
                                        <label class="n420-checkbox_control">
                                            <input type="checkbox" id="opt_13"/>
                                        </label>
                                        <span class="n420-checkbox_label">45</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="n420-filter-button" style="margin-left: 5px ;">
                            <button id="btnSubmit" class="n420-filter-button-submit" type="submit">Lọc</button>
                            
                            <button id="btnReset" class="n420-filter-button-reset" type="reset">Làm mới</button>
                        </div>
                    </form>
                    
                </div>
                <div class="right-bodyContainer col-md-10">
                    <h2 class="n420-product-title">Trending</h2>
                    <?php
                    foreach ($data['ProductArray'] as $row)
                    {
                    ?>
                        <div class="n420-product-box">
                            <a href="../Product/Detail/<?php echo $row['id']; ?>">
                                <img class="n420-product-image" src="./<?php echo $row['img_path'] ?>" alt="" />
                                <!--img class="n420-product-icon" src="" alt=""-->
                                <div class="n420-product-name-price">
                                    <b><?php echo $row['name'] ?></b>
                                    <span><?php echo $row['price'] ?></span>
                                </div>
                            </a>
                        </div>
                    <?php
                    } ?>
                    <hr>
                    <h2 class="n420-product-title">Featured</h2>
                    <?php
                    foreach ($data['ProductArray'] as $row)
                    {
                    ?>
                        <div class="n420-product-box">
                            <a href="../Product/Detail/<?php echo $row['id']; ?>">
                                <img class="n420-product-image" src="./<?php echo $row['img_path'] ?>" alt="" />
                                <!--img class="n420-product-icon" src="" alt=""-->
                                <div class="n420-product-name-price">
                                    <b><?php echo $row['name'] ?></b>
                                    <span><?php echo $row['price'] ?></span>
                                </div>
                            </a>
                        </div>
                    <?php
                    } ?>
                    <hr>
                    <h2 class="n420-product-title">By You Favorites</h2>
                    <?php
                    foreach ($data['ProductArray'] as $row)
                    {
                    ?>
                        <div class="n420-product-box">
                            <a href="../Product/Detail/<?php echo $row['id']; ?>">
                                <img class="n420-product-image" src="./<?php echo $row['img_path'] ?>" alt="" />
                                <!--img class="n420-product-icon" src="" alt=""-->
                                <div class="n420-product-name-price">
                                    <b><?php echo $row['name'] ?></b>
                                    <span><?php echo $row['price'] ?></span>
                                </div>
                            </a>
                        </div>
                    <?php
                    } ?>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function(){
                $(".btn").click(function(){
                    if($(this).text() == "HideFilter"){
                        $(".left-420-filter-panel").hide(100);
                        $(this).text("ShowFilter");
                        $(".right-bodyContainer").css("margin-left","10%");
                    }
                    else if($(this).text() == "ShowFilter"){
                        $(".left-420-filter-panel").show(100);
                        $(this).text("HideFilter");
                        $(".right-bodyContainer").css("margin-left","0%");
                        }
                });
                $(".folding-items").append("<div><p>-----------------</p></div>");
                $("#btnReset").click(function(){
                    $("[id^='opt_']").prop("checked", false);
                    $(".folding-items").attr("data-value","");
                    $(".right-bodyContainer").ready(100);
                });
            });
        </script>

