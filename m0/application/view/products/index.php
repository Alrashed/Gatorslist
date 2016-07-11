<div class="container">
    <h2>You are in the View: application/view/products/index.php (everything in this box comes from that file)</h2>
    <!-- add song form -->
    <div class="box">
        <h3>Search an item</h3>
        <form action="<?php echo URL; ?>products/searchproducts" method="POST">
            <label>Item Name: </label>
            <input type="text" name="searchinput" value="" required />
            <input type="submit" name="submit_search_product" value="Search" />
        </form>
    </div>
    <!-- main content output -->
</div>