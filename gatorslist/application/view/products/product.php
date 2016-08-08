<div class="" style="width:80%; margin-left:10%">
     <div class="panel panel-default" style="background:#f7f7f7">
      	<div class="panel-heading clearfix" style="background:#d0d0d0">
      		<h5 class="panel-title pull-left" style="padding-top: 7.5px;"><b>Search Results (<?php echo count($products) ?> items) > Highest Price > $0-$100 > Used</b></h5>
    </div>
    <div class="row text-center">
        <div class="col-md-3">
            <h5>Sort by:</h5>
            <form action="<?php echo URL; ?>products/searchproducts" method="GET">
                    <input type="hidden" name="searchinput" value="<?php echo htmlspecialchars($_GET['searchinput']);?>">
                    <input type="hidden" name="category" value="<?php echo htmlspecialchars($_GET['category']);?>">
                    <input type="hidden" name="minprice" value="<?php if(isset($_GET['minprice']))echo htmlspecialchars($_GET['minprice']);?>">
                                    <input type="hidden" name="maxprice" value="<?php if(isset($_GET['maxprice']))echo htmlspecialchars($_GET['maxprice']);?>">
                        <input type="hidden" name="itemcondition" value="<?php if(isset($_GET['itemcondition'])) echo htmlspecialchars($_GET['itemcondition']);?>">
    
                    <input class="btn btn-default btn-sm" type="submit" name="highprice" value="Highest Price"/>
                </form>

                                <form action="<?php echo URL; ?>products/searchproducts" method="GET">
                                        <input type="hidden" name="searchinput" value="<?php echo htmlspecialchars($_GET['searchinput']);?>">
                                        <input type="hidden" name="category" value="<?php echo htmlspecialchars($_GET['category']);?>">
                                        <input type="hidden" name="minprice" value="<?php if(isset($_GET['minprice'])) echo htmlspecialchars($_GET['minprice']);?>">
                                        <input type="hidden" name="maxprice" value="<?php if(isset($_GET['maxprice'])) echo htmlspecialchars($_GET['maxprice']);?>">
                                        <input type="hidden" name="itemcondition" value="<?php if(isset($_GET['itemcondition'])) echo htmlspecialchars($_GET['itemcondition']);?>">

                <input class="btn btn-default btn-sm" type="submit" name="lowprice" value="Lowest Price"/>
                </form>
                                <form action="<?php echo URL; ?>products/searchproducts" method="GET">
                            <input type="hidden" name="searchinput" value="<?php if(isset($_GET['searchinput'])) echo htmlspecialchars($_GET['searchinput']);?>">
                                        <input type="hidden" name="category" value="<?php echo htmlspecialchars($_GET['category']);?>">
                                        <input type="hidden" name="minprice" value="<?php if(isset($_GET['minprice'])) echo htmlspecialchars($_GET['minprice']);?>">
                                        <input type="hidden" name="maxprice" value="<?php if(isset($_GET['maxprice'])) echo htmlspecialchars($_GET['maxprice']);?>">
                                        <input type="hidden" name="itemcondition" value="<?php if(isset($_GET['itemcondition'])) echo htmlspecialchars($_GET['itemcondition']);?>">             
                <input class="btn btn-default btn-sm" type="submit" name="date" value="Newly Listed"/>
                </form>
        </div>
        <div class="col-md-3">
            <h5>Filter by Price Range:</h5>
            <form action="<?php echo URL; ?>products/searchproducts" method="GET">
                        <input type="hidden" name="searchinput" value="<?php echo htmlspecialchars($_GET['searchinput']);?>">
                                        <input type="hidden" name="category" value="<?php echo htmlspecialchars($_GET['category']);?>">
                    <input type="hidden" name="sortby" value="<?php if(isset($_GET['highprice'])) echo  htmlspecialchars($_GET['highprice']); else if(isset($_GET['lowprice'])) echo htmlspecialchars($_GET['lowprice']); else if (isset($_GET['date'])) echo htmlspecialchars($_GET['date']);?>">
                                        <input type="hidden" name="itemcondition" value="<?php if(isset($_GET['itemcondition'])) echo htmlspecialchars($_GET['itemcondition']);?>">                         
                <input class="form-control" type="text" name="minprice" value="" placeholder="Minimum Price" required/>
                <input class="form-control" type="text" name="maxprice" value="" placeholder="Maximum Price" required/>
                                <input type="submit" name="submit_filter_price_product" value="Submit"><br><br>
</form>
                                <form action="<?php echo URL; ?>products/searchproducts" method="GET">
                                        <input type="hidden" name="searchinput" value="<?php echo htmlspecialchars($_GET['searchinput']);?>">
                                        <input type="hidden" name="category" value="<?php echo htmlspecialchars($_GET['category']);?>">
                                        <input type="hidden" name="sortby" value="<?php if(isset($_GET['highprice'])) echo  htmlspecialchars($_GET['highprice']); else if(isset($_GET['lowprice'])) echo htmlspecialchars($_GET['lowprice']); else if (isset($_GET['date'])) echo htmlspecialchars($_GET['date']);?>">
                                        <input type="hidden" name="minprice" value="<?php if(isset($_GET['minprice'])) echo htmlspecialchars($_GET['minprice']);?>">
                                        <input type="hidden" name="maxprice" value="<?php if(isset($_GET['maxprice'])) echo htmlspecialchars($_GET['maxprice']);?>">
        </div>
        <div class="col-md-3">
            <h5>Filter by Condition:</h5>
            <select name="itemcondition" class="form-control">
                        <option>Used</option>
                        <option>New</option>
                    </select>
                    <input type="submit" name="submit_condition_product" value="Submit"></form>
        </div>
        <div class ="col-md-3">
        <h5>Reset Filter:</h5>
        <form action="<?php echo URL; ?>products/searchproducts" method="GET">
                                        <input type="hidden" name="searchinput" value="<?php echo htmlspecialchars($_GET['searchinput']);?>">
                                        <input type="hidden" name="category" value="<?php echo htmlspecialchars($_GET['category']);?>">
                    <br>
                    <input type="submit" name="reset_filter" value="Reset">

                </form>
        </div>
    </div>
    <br>
    <div class="btn-group">
            
    </div>
            <div class="row">
                <?php foreach ($products as $product) { ?>
<!--        <div class="panel-heading" style="background:#d0d0d0">Search Results:         Number of results:<?php echo count($products) ?>  </div>
            <div class="row">
                <tr>-->

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
</div>
</div><br>

                                <input type="hidden" name ="itemcondition" value="<?php echo htmlspecialchars($_GET['itemcondition']);?>">
<input type="hidden" name="minimumprice" value="<?php echo htmlspecialchars($_GET['minprice']);?>">
                                <input type="hidden" name="highestprice" value="<?php echo htmlspecialchars($_GET['maxprice']);?>">
