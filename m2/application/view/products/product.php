
<div class="" style="width:80%; margin-left:10%">
     <div class="panel panel-default">
        <div class="panel-heading">Search Results</div>
            <div class="row">
                <?php foreach ($products as $product) { ?>
                <tr>
<!--                    <td>--><?php //if (isset($product->Title)) echo htmlspecialchars($product->Title, ENT_QUOTES, 'UTF-8'); ?><!--</td>-->
<!---->
<!--                    <td>--><?php //if (isset($product->Description)) echo htmlspecialchars($product->Description, ENT_QUOTES, 'UTF-8'); ?><!--</td>-->
<!---->
<!--                    <td>--><?php //if (isset($product->Price)) echo htmlspecialchars($product->Price, ENT_QUOTES, 'UTF-8'); ?><!--</td>-->
<!---->
<!--                    <td>--><?php //if (isset($product->ItemCondition)) echo htmlspecialchars($product->ItemCondition, ENT_QUOTES, 'UTF-8'); ?><!--</td>-->
<!---->
<!--                    <td>--><?php //if (isset($product->Postdate)) echo htmlspecialchars($product->Postdate, ENT_QUOTES, 'UTF-8'); ?><!--</td>-->
                <div class="col-sm-4">
                    <div class="panel-body"><a href="<?php echo URL; ?>item/index"><img <?php if (isset($product->Image_blob1) && $product->Image_blob1 != "")
                                                        echo 'src="data:image/jpeg;base64,'.base64_encode($product->Image_blob1).'" height="150" width="150"';
                                                        else echo 'src="http://placehold.it/150x80?text=IMAGE" ' ?>class="img-responsive" style="width:100% " alt="Image"></a></div>
                    <div class="panel-body meta-style" style="float:left; margin-top: -5%; width:100%">
                     <div class=" " style="float:left">Item Name</div>
                     <div class=" " style="float:left;"> : <?php if (isset($product->Title)) echo htmlspecialchars($product->Title, ENT_QUOTES, 'UTF-8'); ?></div></br>
                     <div class=" " style="float:left">Price </div>
                     <div class=" " style="float:left;"> : <?php if (isset($product->Price)) echo "$" . htmlspecialchars($product->Price, ENT_QUOTES, 'UTF-8'); ?></div></br>
                     <div class=" " style="float:left">Item Condition </div>
                     <div class=" " style="float:left;"> : <?php if (isset($product->ItemCondition)) echo htmlspecialchars($product->ItemCondition, ENT_QUOTES, 'UTF-8'); ?></div></br>
                     <div class=" " style="float:left">Date Upload : </div>
                     <div class=" " style="float:left;"> <?php if (isset($product->Postdate)) echo htmlspecialchars($product->Postdate, ENT_QUOTES, 'UTF-8'); ?></div></br></br>
                     <div style="text-align:center; width:100%;"><a type="button" class="btn btn-primary btn-md " href="<?php echo URL; ?>item/index" >View item detail</a></div>
                    </div>
                </div>
                </tr>
                <?php } ?>
            </div>
      </div>
</div><br>
