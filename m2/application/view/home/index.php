<div class="container">

  <h2>You are in the View: application/view/home/index.php (everything in the box comes from this file)</h2>
  <div class="row">
    <div class="col-lg-6">
      <div class="input-group">
          
        <div class="box">
            <h3>Search an item (book, furniture, laptop... etc)<h3>
            <form action="<?php echo URL; ?>products/searchproducts" method="POST">
                <label>Item Name: </label>
                <input type="text" name="searchinput" value="" required />
                <input type="submit" name="submit_search_product" value="Search" />
            </form>
        </div>
                
      </div><!-- /input-group -->
    </div><!-- /.col-lg-6 -->
  </div><!-- /.row -->

</div>
