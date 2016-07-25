<div class="container" style="border:none; margin-left:5%; margin-right:5%">
    <!-- register form -->
    <div class="box">
        <div class=" col-sm-8 col-lg-offset-2" >
        	<!-- Panel container -->
            <div class="panel panel-default ">
            	<!-- panel head-->
            	<div class="panel-heading" style="text-align:center; font-weight:800; font-size:20px">Sell your item</div>
				<!-- panel body -->                
                <form class="panel-body col-lg-offset-0" style="padding-right:5%;padding-left:5%;font-size: 16px;background-color: #87CEFA"  role="form" action="<?php echo URL; ?>login/account" method="POST">
                      
                      <div class="form-group form-inline">
                          <div class="form-group" >
                            <label class="" for="item title" >Item title:</label>
                            <div class="">
                              <input type="text" class="form-control input-md" id="item_title" style="font-size:14px" placeholder="Enter item name">
                            </div>
                          </div>
                          <div class="form-group" style="margin-left:30%">  
                            <label class="" for="price" >Price: </label>
                            <div class="">
                              <input type="text" class="form-control input-md " id="item_price" style="font-size:14px" placeholder="$$$">
                            </div>
                           </div>
                      </div>
                          <div class="form-group">
                          	  <label class="" for="categories" >Choose Categories:</label>
                              <div class="" id="categories">                              
                                  <select name="category" class="form-control  ">
                                      <option value="">All Categories</option>
                                      <option value="book">Books</option>
                                      <option value="furniture">Furniture</option>
                                      <option value="laptop">Laptops</option>
                                      <option value="office suppies">Office Supplies</option>
                                  </select>
                              </div>
                          </div>
                          <div class="form-group">
                          	  <label class="" for="condition" >Choose Condition:</label>
                              <div class="" id="item_condition" style="margin-left:0%">                              	  
                                  <select name="item condition" class="form-control ">
                                      <option value="">All Kinds</option>
                                      <option value="new">New</option>
                                      <option value="used">Used</option>
                                  </select>
                              </div>  
                          </div> 
                      <div class="form-group">
                          <label for="comment">Description: </label>
                          <textarea class="form-control" rows="5" id="description" placeholder="Describe your item here..."></textarea>
                      </div>       
                      <div class="form-group" > 
                        <div class="" >
                          <button type="submit" class="btn btn-default col-lg-offset-4" id="submit">Submit</button>
                        </div>
                      </div>
              </form>
            </div>
         </div>
    </div>
</div>

