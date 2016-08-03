<div class="jumbotron">
  <div class="row">
  <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img <?php if (isset($productDetail->Image_blob1) && $productDetail->Image_blob1 != "")
              echo 'src="data:image/jpeg;base64,'.base64_encode($productDetail->Image_blob1).'" height="800" width="600"';?> >
    </a>
  </div>

  <h1><?php if (isset($productDetail->Title)) echo htmlspecialchars($productDetail->Title, ENT_QUOTES, 'UTF-8'); ?></h1>
  <h4>Price: $<?php if (isset($productDetail->Price)) echo htmlspecialchars($productDetail->Price, ENT_QUOTES, 'UTF-8'); ?></h4>
  <h4>Condition: <?php if (isset($productDetail->ItemCondition)) echo htmlspecialchars($productDetail->ItemCondition, ENT_QUOTES, 'UTF-8'); ?></h4>
  <h4>Seller: <?php if (isset($productDetail->Seller_id)) echo htmlspecialchars($productDetail->Seller_id, ENT_QUOTES, 'UTF-8'); ?></h4>
  <h4>Description:</h4>
  <p><?php if (isset($productDetail->Description)) echo htmlspecialchars($productDetail->Description, ENT_QUOTES, 'UTF-8'); ?></p>
</div>

<div class="row text-center">
  <a class="btn btn-primary btn-xlarge" href="<?php echo URL.'confirm/showitem/'. htmlspecialchars($productDetail->Product_id, ENT_QUOTES, 'UTF-8'); ?>" role="button">BUY</a>
  </div>
  <h2>Seller : <?php if (isset($productDetail->Seller_id)) echo htmlspecialchars($productDetail->Seller_id, ENT_QUOTES, 'UTF-8'); ?></h2>
</div>
</div>


