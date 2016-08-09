
  <div class="row" style="width:80%; margin-left:10%;opacity: 1;padding: 4%;border-radius: 5px">
  	  <div class="panel-heading  col-xs-12"  style="background: #f2f2f2" ><h1 class=" col-xs-offset-1"  style="border-radius:10px"><?php if (isset($productDetail->Title)) echo htmlspecialchars($productDetail->Title, ENT_QUOTES, 'UTF-8'); ?></h1><div>
      <div class="row">
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
          <div class="col-xs-5 float-left panel-body"  style="height: 60vh; width: 30vw;overflow-y:auto;"><h5>Description:<i><?php if (isset($productDetail->Description)) echo htmlspecialchars($productDetail->Description, ENT_QUOTES, 'UTF-8'); ?></i></h5></div>
      </div>
      <div class="row">
          <div class="col-xs-6 col-xs-offset-1 float-left" style="background: #f2f2f2;height: 30vh; width: 30vw">
              
              <h5>Price &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <b>$<?php if (isset($productDetail->Price)) echo htmlspecialchars($productDetail->Price, ENT_QUOTES, 'UTF-8'); ?></b></h5>
              <h5>Condition: <i><?php if (isset($productDetail->ItemCondition)) echo htmlspecialchars($productDetail->ItemCondition, ENT_QUOTES, 'UTF-8'); ?></i></h5>
              <h5>Seller&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php if (isset($productDetail->Email)) echo htmlspecialchars($productDetail->Email, ENT_QUOTES, 'UTF-8'); ?></h5>
              
          </div>
          <div class="col-xs-2 " style="margin-top: 5vh;padding-left:4vw">
                <a class="btn btn-warning  btn-xlarge buy-button-border"  href="<?php echo URL.'confirm/showitem/'. htmlspecialchars($productDetail->Product_id, ENT_QUOTES, 'UTF-8'); ?>" role="button">BUY THIS ITEM</a>
           </div>
      </div>
</div>


