
<div class="row" style="width:80%; margin-left:10%;opacity: 1;border-radius: 5px;padding-bottom: 5vh;">
      <div class="row panel-body" style="background: #f2f2f2" >
      <div class="col-xs-6 col-xs-offset-1 float-left panel-body"  style="height: 60vh; width: 30vw;">
        <a href="#" class="thumbnail" >
          <img  style="height: 55vh; width: 30vw;"<?php if (isset($productDetail->Image_blob1) && $productDetail->Image_blob1 != "")
            echo 'src="data:image/jpeg;base64,'.base64_encode($productDetail->Image_blob1).'" height="800" width="600"';?> >
          <img  <?php if (isset($productDetail->Image_blob2) && $productDetail->Image_blob2 != "")
            echo 'src="data:image/jpeg;base64,'.base64_encode($productDetail->Image_blob2).'" height="800" width="600"';?> >
          <img  <?php if (isset($productDetail->Image_blob3) && $productDetail->Image_blob3 != "")
            echo 'src="data:image/jpeg;base64,'.base64_encode($productDetail->Image_blob3).'" height="800" width="600"';?> >
          <img  <?php if (isset($productDetail->Image_blob4) && $productDetail->Image_blob4 != "")
            echo 'src="data:image/jpeg;base64,'.base64_encode($productDetail->Image_blob4).'" height="800" width="600"';?> >
        </a>
      </div>
      		<div class="float-left" style="background: #f2f2f2;height: 60vh; width: 30vw;">
              <h1><?php if (isset($productDetail->Title)) echo htmlspecialchars($productDetail->Title, ENT_QUOTES, 'UTF-8'); ?></h1>
              <h5>Price &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <b>$<?php if (isset($productDetail->Price)) echo htmlspecialchars($productDetail->Price, ENT_QUOTES, 'UTF-8'); ?></b></h5>
              <h5>Condition: <i><?php if (isset($productDetail->ItemCondition)) echo htmlspecialchars($productDetail->ItemCondition, ENT_QUOTES, 'UTF-8'); ?></i></h5>
              <h5>Seller&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php if (isset($productDetail->Email)) echo htmlspecialchars($productDetail->Email, ENT_QUOTES, 'UTF-8'); ?></h5>
              <h5 style="">Description:<i><?php if (isset($productDetail->Description)) echo htmlspecialchars($productDetail->Description, ENT_QUOTES, 'UTF-8'); ?></i></h5>
              <a class="btn btn-warning  btn-xlarge buy-button-border col-xs-offset-3" style="margin-top: 5vh;margin-bottom: 5vh;" href="<?php echo URL.'confirm/showitem/'. htmlspecialchars($productDetail->Product_id, ENT_QUOTES, 'UTF-8'); ?>" role="button">BUY THIS ITEM</a>
          </div>
      </div>
</div>
  