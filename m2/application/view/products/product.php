<div class="container">
    <h2>You are in the View: application/view/products/product.php (everything in this box comes from that file)</h2>
   	<div class="box">
	<label> Sort by:</label><br>
        <form action="<?php echo URL; ?>products/sortBy" method="POST">
        <input type="submit" name="lowprice" value="Lowest Price">
        <input type="submit" name="highprice" value="Highest Price">
        <input type="submit" name="date" value="Newly Listed"><br><br>
        
        <label>Less than: $</label>
        <!-- <input type="text" name="priceinput" value="" required />-->
	</div>

	<div class="box">	
	<h4>Search Results:</h4>
                <td></td>
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>Title</td>
                <td>Description</td>
                <td>Price</td>
                <td>Condition</td>
                <td>Date</td>

            </tr>
            </thead>
            <tbody>
            <?php foreach ($products as $product) { ?>
                <tr>
                    <td><?php if (isset($product->Title)) echo htmlspecialchars($product->Title, ENT_QUOTES, 'UTF-8'); ?></td>
                    
                    <td><?php if (isset($product->Description)) echo htmlspecialchars($product->Description, ENT_QUOTES, 'UTF-8'); ?></td>
                    
                    <td><?php if (isset($product->Price)) echo htmlspecialchars($product->Price, ENT_QUOTES, 'UTF-8'); ?></td>
                    
                    <td><?php if (isset($product->Condition)) echo htmlspecialchars($product->Condition, ENT_QUOTES, 'UTF-8'); ?></td>

                    <td><?php if (isset($product->Postdate)) echo htmlspecialchars($product->Postdate, ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>

