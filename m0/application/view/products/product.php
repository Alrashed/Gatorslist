<div class="container">
    <h2>You are in the View: application/view/products/product.php (everything in this box comes from that file)</h2>
    <div class="box">
        <h3>Search Results:</h3>
        <form action="<?php echo URL; ?>products/searchproducts" method="POST">
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>Title</td>
                <td>Description</td>
                <td>Price</td>
                <td>Condition</td>
<!--                <td>Quantity</td>-->
                <td>Date</td>

            </tr>
            </thead>
            <tbody>
            <?php foreach ($products as $song) { ?>
                <tr>
                    <td><?php if (isset($song->Title)) echo htmlspecialchars($song->Title, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($song->Description)) echo htmlspecialchars($song->Description, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($song->Price)) echo htmlspecialchars($song->Price, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($song->Condition)) echo htmlspecialchars($song->Condition, ENT_QUOTES, 'UTF-8'); ?></td>
<!--                    <td>--><?php //if (isset($song->Quantity)) echo htmlspecialchars($song->Quantity, ENT_QUOTES, 'UTF-8'); ?><!--</td>-->
                    <td><?php if (isset($song->Postdate)) echo htmlspecialchars($song->Postdate, ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>

