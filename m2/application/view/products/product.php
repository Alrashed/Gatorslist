<div class="container">
    <h2>You are in the View: application/view/products/product.php (everything in this box comes from that file)</h2>
    <div class="box">
        <h3>Search Results:</h3>
<!--        <form action="--><?php //echo URL; ?><!--products/searchProducts" method="POST">-->
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>Image</td>
<!--                <td>ID</td>-->
                <td>Title</td>
                <td>Description</td>
                <td>Price</td>
                <td>Condition</td>
                <td>Date</td>
<!--                <td>Detail</td>-->

            </tr>
            </thead>
            <tbody>
            <?php foreach ($products as $product) { ?>
                <tr>
                    <td><?php if (isset($product->Image_blob1) && $product->Image_blob1 != "") echo '<img src="data:image/jpeg;base64,'.base64_encode($product->Image_blob1).'"  height="100" width="100" />'; ?>

<!--                    <td>--><?php //if (isset($product->Product_id)) echo htmlspecialchars($product->Product_id, ENT_QUOTES, 'UTF-8'); ?><!--</td>-->

                    <td><?php if (isset($product->Title)) echo htmlspecialchars($product->Title, ENT_QUOTES, 'UTF-8'); ?></td>
                    
                    <td><?php if (isset($product->Description)) echo htmlspecialchars($product->Description, ENT_QUOTES, 'UTF-8'); ?></td>
                    
                    <td><?php if (isset($product->Price)) echo "$" . htmlspecialchars($product->Price, ENT_QUOTES, 'UTF-8'); ?></td>
                    
                    <td><?php if (isset($product->ItemCondition)) echo htmlspecialchars($product->ItemCondition, ENT_QUOTES, 'UTF-8'); ?></td>

                    <td><?php if (isset($product->Postdate)) echo htmlspecialchars($product->Postdate, ENT_QUOTES, 'UTF-8'); ?></td>
                    
<!--                    <td><a href="--><?php //echo URL . 'sell/getItem/' . htmlspecialchars($product->Product_id, ENT_QUOTES, 'UTF-8'); ?><!--">View Detail</a></td>-->
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>

