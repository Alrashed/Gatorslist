
<div class="" style="width:80%; margin-left:10%">
     <div class="panel panel-default" style="background:#f7f7f7">
        <div class="panel-heading" style="background:#d0d0d0">Search Results:         Number of results:<?php echo count($products) ?>  </div>
            <div class="row">
                <?php foreach ($products as $product) { ?>
                <tr>

                <div class="col-sm-4">
                    <div class="panel-body"><a href="<?php echo URL. 'item/showitem/' . htmlspecialchars($product->Product_id, ENT_QUOTES, 'UTF-8'); ?>"><img  <?php if (isset($product->Image_blob1) && $product->Image_blob1 != "")
                                                        echo 'src="data:image/jpeg;base64,'.base64_encode($product->Image_blob1).'" height="150" width="150"';
                                                        else echo 'src="http://placehold.it/150x80?text=IMAGE" ' ?>class="img-responsive " style="width:304px;height:228px;" alt="Image"></a></div>
                    <div class="panel-body meta-style" style="float:left; margin-top: -5%; width:100%">
                     <div class=" " style="float:left">Item Name</div>
                     <div class=" " style="float:left;"> : <?php if (isset($product->Title)) echo htmlspecialchars($product->Title, ENT_QUOTES, 'UTF-8'); ?></div></br>
                     <div class=" " style="float:left">Price </div>
                     <div class=" " style="float:left;"> : <?php if (isset($product->Price)) echo "$" . htmlspecialchars($product->Price, ENT_QUOTES, 'UTF-8'); ?></div></br>
                     <div class=" " style="float:left">Item Condition </div>
                     <div class=" " style="float:left;"> : <?php if (isset($product->ItemCondition)) echo htmlspecialchars($product->ItemCondition, ENT_QUOTES, 'UTF-8'); ?></div></br>
                     <div class=" " style="float:left">Date Upload : </div>
                     <div class=" " style="float:left;"> <?php if (isset($product->Postdate)) echo htmlspecialchars($product->Postdate, ENT_QUOTES, 'UTF-8'); ?></div></br></br>
                     <div class="row col-lg-offset-2">                               
                         <div class="col-lg-offset-0" style="float:left;"><form action="<?php echo URL . 'item/showitem/' . htmlspecialchars($product->Product_id, ENT_QUOTES, 'UTF-8'); ?>"><button class="view-item-button" >View Item</button></div></form>
                         <div class="col-lg-offset-0" style="float:left" id="contact"><form action="<?php echo URL. 'confirm/showitem/' . htmlspecialchars($product->Product_id, ENT_QUOTES, 'UTF-8'); ?>"><button class="contact-seller-button">Buy Now</button></div></form>
                           </div>
                    </div>
                </div>
                </tr>
                <?php } ?>
            </div>
      </div>
</div><br>
