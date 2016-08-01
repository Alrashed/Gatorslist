<div class="jumbotron">
    <h1 class="text-center">Order Confirmation</h1>
    <div class="container">
        <div class="row">
          <img  <?php if (isset($productDetail->Image_blob1) && $productDetail->Image_blob1 != "")
          echo 'src="data:image/jpeg;base64,'.base64_encode($productDetail->Image_blob1).'" height="300" width="300"';?>
        </div>
    </div>
    <div class="row text-center">
        <h2>Item Title:  <?php if (isset($productDetail->Title)) echo htmlspecialchars($productDetail->Title, ENT_QUOTES, 'UTF-8'); ?> - Price:$  <?php if (isset($productDetail->Price)) echo htmlspecialchars($productDetail->Price, ENT_QUOTES, 'UTF-8'); ?></h2>
        <p><a class="btn btn-primary btn-lg" href="<?php echo URL; ?>contact/index" role="button">Contact Seller</a></p>
        <p>"Contact the seller to arrange a time to meet up and purchase the item."</p>
        <div class="col-lg-offset-0" style="float:left;"><form action="<?php echo URL . 'checkout/purchase/' . htmlspecialchars($productDetail->Product_id, ENT_QUOTES, 'UTF-8'); ?>"><button class="view-item-button" > Pay in Advance</button></div></form>
<!--        <p><a class="btn btn-primary btn-lg" href="--><?php //echo URL. 'checkout/purchase/ '. htmlspecialchars($productDetail->Product_id, ENT_QUOTES, 'UTF-8'); ?><!--" role="button">Pay in Advance</a></p>-->
        <p>"Pay in advance and get in touch with the seller to arrange a time and pick up the item."</p>
    </div>
</div>