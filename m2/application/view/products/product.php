<input type="hidden" name="searchinput" value="<?php echo htmlspecialchars($_GET['searchinput']);?>">
<input type="hidden" name="category" value="<?php echo htmlspecialchars($_GET['category']);?>">
<input type="hidden" name="sorttype" value="<?php echo htmlspecialchars($_GET['highprice']);?>">
<input type="hidden" name="sorttype" value="<?php echo htmlspecialchars($_GET['lowprice']);?>">
<input type="hidden" name="sorttype" value="<?php echo htmlspecialchars($_GET['date']);?>">
<input type="hidden" name="filtertype" value="<?php echo htmlspecialchars($_GET['itemcondition']);?>">


<div class="" style="width:80%; margin-left:10%">
     <div class="panel panel-default" style="background:#f7f7f7">
     <!--`   <h6 class="panel-heading" style="background:#d0d0d0">Search Results</h6>
<div class="btn-group pull-right">
        <a href="#" class="btn btn-default btn-sm">## Lock</a>
        <a href="#" class="btn btn-default btn-sm">## Delete</a>
        <a href="#" class="btn btn-default btn-sm">## Move</a>
      </div>-->
      	<div class="panel-heading clearfix" style="background:#d0d0d0">
      		<h5 class="panel-title pull-left" style="padding-top: 7.5px;"><b>Search Results</b></h5>
      		<div class="btn-group pull-right">
			<form action="<?php echo URL; ?>products/searchproducts" method="GET">
		                        <h6 style="background:#d0d0d0;"><b>Sort by</b></h6>
	
			<input type="hidden" name="searchinput" value="<?php echo htmlspecialchars($_GET['searchinput']);?>">
				<input type="hidden" name="category" value="<?php echo htmlspecialchars($_GET['category']);?>">
                                <input type="hidden" name="filter" value="<?php echo htmlspecialchars($_GET['itemcondition']);?>">
				<input class="btn btn-default btn-sm" type="submit" name="highprice" value="Highest Price"/>
              			<input class="btn btn-default btn-sm" type="submit" name="lowprice" value="Lowest Price"/>
        			<input class="btn btn-default btn-sm" type="submit" name="date" value="Newly Listed"/>

                                        <h6 style="background:#d0d0d0;"><b>Filter by</b></h6>
                                <input class="btn btn-default btn-sm" type="submit" name="minprice" value="Price"/>
    				<select name="itemcondition" class="form-control">
     					<option>New</option>
      					<option>Used</option>
    				</select>
    				<input type="submit" name="submit_condition_product" value="Submit">
</form>

			
	</div>
    </div>
            <div class="row">
                <?php foreach ($products as $product) { ?>
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
                <?php } ?>
            </div>
      </div>
</div><br>
