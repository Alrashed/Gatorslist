<div class="jumbotron">
<h1 class="text-center">Order Confirmation</h1>
<div class="row text-center">
  <h2><?php if (isset($productDetail->Title)) echo htmlspecialchars($productDetail->Title, ENT_QUOTES, 'UTF-8'); ?> - $<?php if (isset($productDetail->Price)) echo htmlspecialchars($productDetail->Price, ENT_QUOTES, 'UTF-8'); ?></h2>
  <p><a class="btn btn-primary btn-lg" href="<?php echo URL; ?>contact/index" role="button">Contact Seller</a></p>
    <p>"Contact the seller to arrange a time to meet up and purchase the item."</p>
  <p><a class="btn btn-primary btn-lg" href="<?php echo URL; ?>checkout/index" role="button">Pay in Advance</a></p>
  <p>"Pay in advance and get in touch with the seller to arrange a time and pick up the item."</p>
  </div>
</div>


