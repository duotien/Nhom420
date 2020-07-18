
<hr>

<br>

        <div class="container">
            <div class="row" style="display: flex;">
                <div id="img-container" class="col-md-6">
                    <img id="zoom_01" src="./<?php echo $data["Product"]['img_path'] ?>" data-zoom-image="./<?php echo $data["Product"]['img_path'] ?>" width="80%"/>
                </div>
                <div class="col-md-6">
                    <h1><?php echo $data["Product"]['name'] ?></h1>
                        <span class="price"><?php echo $data["Product"]['price'] . " VNĐ" ?></span>
                        <!-- <div>
                            <label for="">Color</label>
                            <span style="background-color: red; width: 100px; height: 100px; border: red 1px solid;">RED</span>
                        </div> -->
                        <div class="size">
                            <label for="">Size</label>
                            <span>35</span>
                            <span>36</span>
                            <span>37</span>
                            <span>38</span>
                            <span>39</span>
                            <span>40</span>
                        </div>
                        <button type="button" class="btn btn-success">Add to your cart</button>
                </div>
            </div>
        </div>
        
        <div class="container mt-3">
            <br>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#home">Mô tả</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu">Nhận xét</a>
              </li>
            </ul>
            <hr>
            <!-- Tab panes -->
            <div class="tab-content">
              <div id="home" class="container tab-pane active"><br>
                <h3>Mô tả</h3>
                <?php echo $data["Product"]['description'] ?>
              </div>
              <div id="menu" class="container tab-pane fade"><br>
                <h3>Nhận xét</h3>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
          </div>