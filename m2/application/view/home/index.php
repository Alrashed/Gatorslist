<div class="page-header text-center ">
  <h1>Welcome to Gatorslist!</h1>
  <h1><small>Here you can purchase a variety of items sold by your fellow SFSU students.</small></h1>
</div>

<div class="margin-left-350">
  <form action="<?php echo URL; ?>products/searchproducts" method="POST">
    <div class="" >
      <div class="float-left">
        <input class="form-control input-attributes float-left" type="text" name="searchinput" value="" placeholder="Search for book, furniture, laptop, etc" required />
          <div class="margin-right-1 float-left">
            <select name="category" class="form-control">
              <option value="">All Categories</option>
              <option value="book">Books</option>
              <option value="furniture">Furniture</option>
              <option value="laptop">Laptops</option>
              <option value="office suppies">Office Supplies</option>
            </select>
          </div>
        <div class="float-left">
          <input class="btn btn-default" type="submit" name="submit_search_product" value="Search" />
        </div>
      </div><!-- /input-group -->
    </div><!-- /.col-lg-4 -->
  </form>
</div>
