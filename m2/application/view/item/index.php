<div class="jumbotron" style="width:80%; margin-left:10%; margin-top:1%">
  <div class="row" style="width:80%; margin-left:10%;">
  <div class="col-xs-6 float-left">
    <a href="#" class="thumbnail">
      <img <?php if (isset($productDetail->Image_blob1) && $productDetail->Image_blob1 != "")
              echo 'src="data:image/jpeg;base64,'.base64_encode($productDetail->Image_blob1).'" height="800" width="600"';?> >
    </a>
  </div>
  <div class="col-xs-6 float-left">
  <h2><?php if (isset($productDetail->Title)) echo htmlspecialchars($productDetail->Title, ENT_QUOTES, 'UTF-8'); ?></h2>
  <h4 >Price &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <b>$<?php if (isset($productDetail->Price)) echo htmlspecialchars($productDetail->Price, ENT_QUOTES, 'UTF-8'); ?></b></h4>
  <h4>Condition: <i><?php if (isset($productDetail->ItemCondition)) echo htmlspecialchars($productDetail->ItemCondition, ENT_QUOTES, 'UTF-8'); ?></i></h4>
  <h4>Seller&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php if (isset($productDetail->Seller_id)) echo htmlspecialchars($productDetail->Seller_id, ENT_QUOTES, 'UTF-8'); ?></h4>
  <h4>Description:
  <i><?php if (isset($productDetail->Description)) echo htmlspecialchars($productDetail->Description, ENT_QUOTES, 'UTF-8'); ?></i></h4>
  <div class="row text-center col-lg-offset-3 ">
  	<a class="btn btn-warning btn-xlarge buy-button-border" href="<?php echo URL.'confirm/showitem/'. htmlspecialchars($productDetail->Product_id, ENT_QUOTES, 'UTF-8'); ?>" role="button">BUY</a>
  </div>
  </div>
</div>


</div>


