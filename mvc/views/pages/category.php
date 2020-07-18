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
                    <div class="n420-filter-search-status">
                        <div class="n420-filter-search-status_text" style="font-size: 17px; margin-left: 5px;">BỘ LỌC SẢN PHẨM<br>---------------</br></div>
                    </div>
                    <div class="n420-filter-group n420-facet-filter" style="margin-left: 5px;">
                        <div class="n420-filter-group-header">Theo Danh Mục</div>
                        <div class="folding-items n420-filter-group_body folding-items--folded">
                            <div class="n420-filter n420-checkbox-filter">
                                <div class="n420-checkbox">
                                    <label class="420-checkbox_control">
                                        <input type="checkbox"/>
                                    </label>
                                    <span class="n420-checkbox_label">Nike</span>
                                </div>
                            </div>
                            <div class="n420-filter n420-checkbox-filter">
                                <div class="420-checkbox">
                                    <label class="n420-checkbox_control">
                                        <input type="checkbox"/>
                                    </label>
                                    <span class="n420-checkbox_label">Adidas</span>
                                </div>
                            </div>
                            <div class="n420-filter n420-checkbox-filter">
                                <div class="n420-checkbox">
                                    <label class="n420-checkbox_control">
                                        <input type="checkbox"/>
                                    </label>
                                    <span class="n420-checkbox_label">Converse</span>
                                </div>
                            </div>
                            <div class="n420-filter n420-checkbox-filter">
                                <div class="n420-checkbox">
                                    <label class="n420-checkbox_control">
                                        <input type="checkbox"/>
                                    </label>
                                    <span class="n420-checkbox_label">Puma</span>
                                </div>
                            </div>
                            <div class="n420-filter n420-checkbox-filter">
                                <div class="n420-checkbox">
                                    <label class="n420-checkbox_control">
                                        <input type="checkbox"/>
                                    </label>
                                    <span class="n420-checkbox_label">Vans</span>
                                </div>
                            </div>
                        </div>
                        <div class="n420-filter-group-header">Theo Size</div>
                        <div class="folding-items n420-filter-group_body folding-items--folded">
                            <div class="n420-filter n420-checkbox-filter">
                                <div class="n420-checkbox">
                                    <label class="n420-checkbox_control">
                                        <input type="checkbox"/>
                                    </label>
                                    <span class="n420-checkbox_label">38</span>
                                </div>
                            </div>
                            <div class="n420-filter n420-checkbox-filter">
                                <div class="420-checkbox">
                                    <label class="n420-checkbox_control">
                                        <input type="checkbox"/>
                                    </label>
                                    <span class="n420-checkbox_label">39</span>
                                </div>
                            </div>
                            <div class="n420-filter n420-checkbox-filter">
                                <div class="n420-checkbox">
                                    <label class="n420-checkbox_control">
                                        <input type="checkbox"/>
                                    </label>
                                    <span class="n420-checkbox_label">40</span>
                                </div>
                            </div>
                            <div class="n420-filter n420-checkbox-filter">
                                <div class="n420-checkbox">
                                    <label class="n420-checkbox_control">
                                        <input type="checkbox"/>
                                    </label>
                                    <span class="n420-checkbox_label">41</span>
                                </div>
                            </div>
                            <div class="n420-filter n420-checkbox-filter">
                                <div class="n420-checkbox">
                                    <label class="n420-checkbox_control">
                                        <input type="checkbox"/>
                                    </label>
                                    <span class="n420-checkbox_label">42</span>
                                </div>
                            </div>
                            <div class="n420-filter n420-checkbox-filter">
                                <div class="n420-checkbox">
                                    <label class="n420-checkbox_control">
                                        <input type="checkbox"/>
                                    </label>
                                    <span class="n420-checkbox_label">43</span>
                                </div>
                            </div>
                            <div class="n420-filter n420-checkbox-filter">
                                <div class="n420-checkbox">
                                    <label class="n420-checkbox_control">
                                        <input type="checkbox"/>
                                    </label>
                                    <span class="n420-checkbox_label">44</span>
                                </div>
                            </div>
                            <div class="n420-filter n420-checkbox-filter">
                                <div class="n420-checkbox">
                                    <label class="n420-checkbox_control">
                                        <input type="checkbox"/>
                                    </label>
                                    <span class="n420-checkbox_label">45</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="n420-filter-button" style="margin-left: 5px ;">
                        <button class="n420-filter-button-submit" type="submit">Lọc</button>
                        
                        <button class="n420-filter-button-reset" type="reset">Làm mới</button>
                    </div>
                </div>
                <div class="right-bodyContainer col-md-10">
                    <h2 class="n420-product-title">Trending</h2>
                    <?php
                    foreach ($data['Array'] as $row)
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
                    <h2 class="n420-product-title">Featured</h2>
                    <?php
                    foreach ($data['Array'] as $row)
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
                    <h2 class="n420-product-title">By You Favorites</h2>
                    <?php
                    foreach ($data['Array'] as $row)
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

