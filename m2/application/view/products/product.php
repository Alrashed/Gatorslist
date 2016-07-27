<div class="container">
    <h2>You are in the View: application/view/products/product.php (everything in this box comes from that file)</h2>
   	<div class="box">
	
        	<form action="<?php echo URL; ?>products/searchproducts" method="GET">
        		<input type="hidden" name="searchinput" value="<?php echo htmlspecialchars($_GET['searchinput']);?>">
        		<input type="hidden" name="category" value="<?php echo htmlspecialchars($_GET['category']);?>">        
			<label> Sort by:</label><br><br>
				<input type="submit" name="lowprice" value="Lowest Price">  
				<input type="submit" name="highprice" value="Highest Price">
				<input type="submit" name="date" value="Newly Listed"><br><br>
        	</form>
	</div> 

	<div class="box">	
        	<form action="<?php echo URL; ?>products/searchproducts" method="GET">
			<input type="hidden" name="searchinput" value="<?php echo htmlspecialchars($_GET['searchinput']);?>">
        		<input type="hidden" name="category" value="<?php echo htmlspecialchars($_GET['category']);?>">
       			<br><label>Filter by:</label><br><br>
				
				<label>Minimum Price: </label>
				<input type="text" name="minprice" value="" required /><br>
				
				<label>Maximim Price: </label>
        			<input type="text" name="maxprice" value="" required />
        			<input type="submit" name="submit_filter_price_product" value=">>"> <br><br>
		</form>

		<form action="<?php echo URL; ?>products/searchproducts" method="GET">
			<input type="hidden" name="searchinput" value="<?php echo htmlspecialchars($_GET['searchinput']);?>">
        		<input type="hidden" name="category" value="<?php echo htmlspecialchars($_GET['category']);?>">
	
				<label>Condition: </label>
				<select type="text" name="itemcondition">
					<option value"New">New</option>
                			<option value"Used">Used</option>
				</select>
				<input type="submit" name="submit_condition_product" value=">>" /><br>
		</form>
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
                    
                    <td><?php if (isset($product->ItemCondition)) echo htmlspecialchars($product->ItemCondition, ENT_QUOTES, 'UTF-8'); ?></td>

                    <td><?php if (isset($product->Postdate)) echo htmlspecialchars($product->Postdate, ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>

