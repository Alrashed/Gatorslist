<div class="jumbotron" style= "text-align: center">
  <h1> <?php if (isset($productDetail->Title)) echo htmlspecialchars($productDetail->Title, ENT_QUOTES, 'UTF-8'); ?> : $<?php if (isset($productDetail->Price)) echo htmlspecialchars($productDetail->Price, ENT_QUOTES, 'UTF-8'); ?></h1>
  <div class="row" style= "text-align:center">
  <div class="col-xs-6 col-md-3" style = "text-align:center">
    <a href="#" class="thumbnail" style= "text-align:center">

          <img  <?php if (isset($productDetail->Image_blob1) && $productDetail->Image_blob1 != "")
              echo 'src="data:image/jpeg;base64,'.base64_encode($productDetail->Image_blob1). '"height="300" width="300"';?>>
</a>
  <div class="row text-center" style= "text-align:center">
      <p>Condition: "<?php if (isset($productDetail->ItemCondition)) echo htmlspecialchars($productDetail->ItemCondition, ENT_QUOTES, 'UTF-8'); ?>"</p>
      <p><?php if (isset($productDetail->Description)) echo htmlspecialchars($productDetail->Description, ENT_QUOTES, 'UTF-8'); ?> </p>
        <a class="btn btn-primary btn-xlarge" href="<?php echo URL.'confirm/showitem/'. htmlspecialchars($productDetail->Product_id, ENT_QUOTES, 'UTF-8'); ?>" role="button">BUY</a>
<!--      <div class="col-lg-offset-0" style="float:left;"><form action="--><?php //echo URL . 'item/showitem/' . htmlspecialchars($productDetail->Product_id, ENT_QUOTES, 'UTF-8'); ?><!--"><button class="view-item-button" >View Item</button></div></form>-->
  </div>
  <h2>Seller : <?php if (isset($productDetail->Seller_id)) echo htmlspecialchars($productDetail->Seller_id, ENT_QUOTES, 'UTF-8'); ?></h2>
</div>
</div>


