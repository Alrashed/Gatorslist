<div class="page-header text-center">
  <h1>Welcome to Gatorslist!</h1>
  <h1><small>Here you can purchase a variety of items sold by your fellow SFSU students.</small></h1>
</div>

<div class="row">
  <form action="<?php echo URL; ?>products/searchproducts" method="POST">
    <div class="col-lg-4 col-lg-offset-4" >
              <div class="input-group float-left">
            <select name="category" class="form-control">
              <option value="">All Categories</option>
              <option value="book">Books</option>
              <option value="furniture">Furniture</option>
              <option value="laptop">Laptops</option>
            </select>
          </div>
      <div class="input-group">
        <input class="form-control" type="text" name="searchinput" value="" placeholder="Search for book, furniture, laptop, etc" required />
        <div class="input-group-btn">
          <input class="btn btn-default" type="submit" name="submit_search_product" value="Search" />
        </div>
      </div><!-- /input-group -->
    </div><!-- /.col-lg-4 -->
  </form>
</div>
