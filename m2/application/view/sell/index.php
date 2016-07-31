<div class="margin-left-25" style="padding-top: 25%">
  <form action="<?php echo URL; ?>products/searchproducts" method="POST">
      <div class="float-left">
        <div class="margin-right-1 float-left">
            <select name="category" class="form-control">
              <option value="">All Categories</option>
              <option value="book">Books</option>
              <option value="furniture">Furniture</option>
              <option value="laptop">Laptops</option>
              <option value="office suppies">Office Supplies</option>
            </select>
          </div>
        <input id ="search_field" class="form-control input-attributes float-left" type="text" name="searchinput" value="" placeholder="Search for book, furniture, laptop, etc" required />
          
        <div class="float-left">
          <input class="btn btn-default" type="submit" name="submit_search_product" value="Search" />
        </div>
      </div><!-- /input-group -->
  </form> 
</div><hr>
<div class="container" style="">
    <!-- register form -->
    <div class="box">
        <div class="col-lg-6 col-lg-offset-3" style="margin-top:2%" >
        	<!-- Panel container -->
            <div class="panel panel-default ">
            	<!-- panel head-->
            	<div class="panel-heading" style="text-align:center; font-weight:800; font-size:20px">Sell your item</div>
				<!-- panel body -->                
                <form class="panel-body col-lg-offset-0" style="font-size: 16px;background-color: #87CEFA"  role="form" action="<?php echo URL; ?>sell/createitem" method="POST" enctype="multipart/form-data">
                      
                      <div class="form-group form-inline">
                          <div class="form-group" >
                            <label class="" for="item title" >Item title:</label>
                            <div class="">
                              <input type="text" class="form-control input-md" name='Title' id="item_title" style="font-size:14px" placeholder="Enter item name">
                            </div>
                          </div>
                          <div class="form-group" style="margin-left:20%">  
                            <label class="" for="price" >Price: </label>
                            <div class="">
                              <input type="number" class="form-control input-md " name='Price' id="item_price" style="font-size:14px" placeholder="">
                            </div>
                           </div>
                      </div>
                          <div class="form-group">
                          	  <label class="" for="categories" >Choose Categories:</label>
                              <div class=""  id="categories">                              
                                  <select name="Category_Id" class="form-control  ">
                                      <option value="">All Categories</option>
                                      <option value="1">Books</option>
                                      <option value="2">Furniture</option>
                                      <option value="3">Electronics</option>
                                      <option value="4">Office Supplies</option>
                                      <option value="5">Clothing</option>
                                      <option value="6">Other</option>
                                  </select>
                              </div>
                          </div>
                          <div class="form-group">
                          	  <label class="" for="condition" >Choose Condition:</label>
                              <div class="" id="item_condition" style="margin-left:0%">                              	  
                                  <select name="Condition" class="form-control ">
                                      <option value="">All Kinds</option>
                                      <option value="new">New</option>
                                      <option value="used">Used</option>
                                  </select>
                              </div>  
                          </div> 
                      <div class="form-group">
                          <label class="" for="condition">Description: </label>
                          <textarea class="form-control" rows="5"  name='Description' id="description" placeholder="Describe your item here..."></textarea>
                      </div>

                    <div class="form-group">
                        <label for='image' >Select image to upload:</label>
                        <input type="file" name="fileToUpload" id="fileToUpload" />
                    </div>

                    <div class="form-group">
                        <label for='image' >Select image to upload:</label>
                        <input type="file" name="fileToUpload2" id="fileToUpload2" />
                    </div>

                    <div class="form-group">
                        <label for='image' >Select image to upload:</label>
                        <input type="file" name="fileToUpload3" id="fileToUpload3" />
                    </div>

                    <div class="form-group">
                        <label for='image' >Select image to upload:</label>
                        <input type="file" name="fileToUpload4" id="fileToUpload4" />
                    </div>

                    <div class="form-group" >
                        <div class="" >
                          <button type="submit" class="btn btn-default col-lg-offset-4" name="submit" value="submit" id="submit">Submit</button>
                        </div>
                      </div>
              </form>
            </div>
         </div>
    </div>
</div>

