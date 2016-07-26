<div class="container">
    <h2>You are in the View: application/view/products/product.php (everything in this box comes from that file)</h2>
    <div class="box">
        <h3>Search Results:</h3>
<!--        <form action="--><?php //echo URL; ?><!--products/searchProducts" method="POST">-->
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>Image</td>
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
                    <td><?php if (isset($product->thumbnail) && $product->thumbnail != "") echo '<img src="data:image/jpeg;base64,'.base64_encode($product->thumbnail).'"  height="100" width="200" />'; ?>

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

