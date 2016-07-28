<div class="text-center ">
  <h1>Welcome to Gatorslist!</h1>
  <h1><small>Here you can purchase a variety of items sold by your fellow SFSU students.</small></h1>
</div>

<div class="margin-left-350">
  <form action="<?php echo URL; ?>products/searchproducts" method="POST">
      <div class="float-left">
        <input id ="search_field" class="form-control input-attributes float-left" type="text" name="searchinput" value="" placeholder="Search for book, furniture, laptop, etc" required />
          <div class="margin-right-1 float-left">
            <select name="category" class="form-control">
                <option value="">All Categories</option>
                <option value="book">Books</option>
                <option value="furniture">Furniture</option>
                <option value="electronics">Electronics</option>
                <option value="clothing">Clothing</option>
                <option value="office suppies">Office Supplies</option>
                <option value="other">Other</option>
            </select>
          </div>
        <div class="float-left">
          <input class="btn btn-default" type="submit" name="submit_search_product" value="Search" />
        </div>
      </div><!-- /input-group -->
  </form> 
</div></br></br><hr>
<div class="" style="width:80%; margin-left:10%">
     <div class="panel panel-default">
        <div class="panel-heading">Recently Added Items</div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="panel-body"><img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                    <div class="panel-body meta-style" style="float:left; margin-top: -5%; width:100%">
                         <div class=" " style="float:left">Item name</div>
                         <div class=" " style="float:left; margin-left: 5%"> : {Retrieve name in db}</div></br>
                         <div class=" " style="float:left">Price </div>
                         <div class=" " style="float:left; margin-left: 16%"> : {Retrieve price}</div></br>
                         <div class=" " style="float:left">Date Upload : </div>
                         <div class=" " style="float:left; margin-left: 1%"> {Retrieve date uploaded}</div></br></br>
                         <div style="text-align:center; width:100%"><a type="button" class="btn btn-primary btn-md " href="<?php echo URL; ?>item/index" >View item detail</a></div>
                    </div>
                    
                </div>
                <div class="col-sm-4">
                    <div class="panel-body"><img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                    <div class="panel-body meta-style" style="float:left; margin-top: -5%; width:100%">
                         <div class=" " style="float:left">Item name</div>
                         <div class=" " style="float:left; margin-left: 5%"> : {Retrieve name in db}</div></br>
                         <div class=" " style="float:left">Price </div>
                         <div class=" " style="float:left; margin-left: 16%"> : {Retrieve price}</div></br>
                         <div class=" " style="float:left">Date Upload : </div>
                         <div class=" " style="float:left; margin-left: 1%"> {Retrieve date uploaded}</div></br></br>
                         <div style="text-align:center; width:100%"><a type="button" class="btn btn-primary btn-md " href="<?php echo URL; ?>item/index" >View item detail</a></div>
                    </div>
            
                </div>
                <div class="col-sm-4">
                    <div class="panel-body"><img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                    <div class="panel-body meta-style" style="float:left; margin-top: -5%; width:100%">
                         <div class=" " style="float:left">Item name</div>
                         <div class=" " style="float:left; margin-left: 5%"> : {Retrieve name in db}</div></br>
                         <div class=" " style="float:left">Price </div>
                         <div class=" " style="float:left; margin-left: 16%"> : {Retrieve price}</div></br>
                         <div class=" " style="float:left">Date Upload : </div>
                         <div class=" " style="float:left; margin-left: 1%"> {Retrieve date uploaded}</div></br></br>
                         <div style="text-align:center; width:100%"><a type="button" class="btn btn-primary btn-md " href="<?php echo URL; ?>item/index" >View item detail</a></div>
                    </div>
                </div>
           </div>
           <div class="row">
            <div class="col-sm-4">
                <div class="panel-body"><img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-body meta-style" style="float:left; margin-top: -5%; width:100%">
                     <div class=" " style="float:left">Item name</div>
                     <div class=" " style="float:left; margin-left: 5%"> : {Retrieve name in db}</div></br>
                     <div class=" " style="float:left">Price </div>
                     <div class=" " style="float:left; margin-left: 16%"> : {Retrieve price}</div></br>
                     <div class=" " style="float:left">Date Upload : </div>
                     <div class=" " style="float:left; margin-left: 1%"> {Retrieve date uploaded}</div></br></br>
                     <div style="text-align:center; width:100%"><a type="button" class="btn btn-primary btn-md " href="<?php echo URL; ?>item/index" >View item detail</a></div>
                </div>
                
            </div>
            <div class="col-sm-4">
                <div class="panel-body"><img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-body meta-style" style="float:left; margin-top: -5%; width:100%">
                     <div class=" " style="float:left">Item name</div>
                     <div class=" " style="float:left; margin-left: 5%"> : {Retrieve name in db}</div></br>
                     <div class=" " style="float:left">Price </div>
                     <div class=" " style="float:left; margin-left: 16%"> : {Retrieve price}</div></br>
                     <div class=" " style="float:left">Date Upload : </div>
                     <div class=" " style="float:left; margin-left: 1%"> {Retrieve date uploaded}</div></br></br>
                     <div style="text-align:center; width:100%"><a type="button" class="btn btn-primary btn-md " href="<?php echo URL; ?>item/index" >View item detail</a></div>
                </div>
        
            </div>
            <div class="col-sm-4">
                <div class="panel-body"><img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-body meta-style" style="float:left; margin-top: -5%; width:100%">
                     <div class=" " style="float:left">Item name</div>
                     <div class=" " style="float:left; margin-left: 5%"> : {Retrieve name in db}</div></br>
                     <div class=" " style="float:left">Price </div>
                     <div class=" " style="float:left; margin-left: 16%"> : {Retrieve price}</div></br>
                     <div class=" " style="float:left">Date Upload : </div>
                     <div class=" " style="float:left; margin-left: 1%"> {Retrieve date uploaded}</div></br></br>
                     <div style="text-align:center; width:100%"><a type="button" class="btn btn-primary btn-md " href="<?php echo URL; ?>item/index" >View item detail</a></div>
                </div>
            </div>
          </div>
      </div>
</div><br>

