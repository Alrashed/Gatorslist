<div class="container">
    <div class="box">
        <h3>Search Results:</h3>
<!--        <form action="--><?php //echo URL; ?><!--products/searchProducts" method="POST">-->
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>

            </tr>
            </thead>
            <tbody>
            <?php foreach ($products as $product) { ?>
                <tr>
                </tr>

                    <div class="col-sm-4">
                <div class="panel-body"><img style="margin-left: 10%;"<?php if (isset($product->Image_blob1) && $product->Image_blob1 != "") echo 'src="data:image/jpeg;base64,'.base64_encode($product->Image_blob1).'"  height="100" width="100" />'; else echo 'src="http://placehold.it/150x80?text=IMAGE"' ?></div>
                <div class="panel-body meta-style" style="float:left; margin-top: -5%; width:100%">
                     <div class=" " style="float:left">Item Name</div>
                     <div class=" " style="float:left; margin-left: 5%"> : <?php if (isset($product->Title)) echo htmlspecialchars($product->Title, ENT_QUOTES, 'UTF-8'); ?></div></br>
                     <div class=" " style="float:left">Price </div>
                     <div class=" " style="float:left; margin-left: 16%"> : <?php if (isset($product->Price)) echo "$" . htmlspecialchars($product->Price, ENT_QUOTES, 'UTF-8'); ?></div></br>
                     <div class=" " style="float:left">Item Condition </div>
                     <div class=" " style="float:left; margin-left: 16%"> : <?php if (isset($product->ItemCondition)) echo htmlspecialchars($product->ItemCondition, ENT_QUOTES, 'UTF-8'); ?></div></br>
                     <div class=" " style="float:left">Date Upload : </div>
                     <div class=" " style="float:left; margin-left: 1%"> <?php if (isset($product->Postdate)) echo htmlspecialchars($product->Postdate, ENT_QUOTES, 'UTF-8'); ?></div></br></br>
                     <div style="text-align:center; width:100%; margin-left: -15%;"><a type="button" class="btn btn-primary btn-md " href="<?php echo URL; ?>item/index" >View item detail</a></div>
                </div>
        
            </div>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>

