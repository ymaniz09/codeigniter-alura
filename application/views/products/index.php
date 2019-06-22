<html lang="en">
<head>
    <link rel="stylesheet" href="<? echo base_url('public/css/bootstrap.css') ?>">


</head>
<body>
    <div class="container">
        <h1>Products</h1>

        <table class="table">
            <?php foreach ($products as $product) : ?>
                <tr>
                    <td><?= $product['name'] ?></td>
                    <td><?= $product['price'] ?></td>
                </tr>

            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>