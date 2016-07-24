<div class="container">
    <h2>You are in the View: application/view/products/index.php (everything in this box comes from that file)</h2>
    
    <div class="box">
        <h3>Search an item (book, furniture, laptop... etc)<h3>
        <form action="<?php echo URL; ?>products/searchproducts" method="POST">
            <label>Item Name: </label>
            <input type="text" name="searchinput" value="" required />
            <select type = "text" name="category">
                <option value=""></option>
                <option value="book">Book</option>
                <option value="furniture">Furniture</option>
                <option value="laptop">Laptop</option>
            </select>
            <input type="submit" name="submit_search_product" value="Search" />
        </form>
    </div>
            
</div>
