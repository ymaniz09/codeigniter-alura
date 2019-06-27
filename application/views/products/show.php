<html>
<head>
    <link rel="stylesheet" href="<? echo base_url('public/css/bootstrap.css') ?>">
    <meta http-equiv="content-type" content="text/html" charset="x-UTF-16LE-BOM">
</head>
<body>
    <div class="container">
        <h1>
            <?= $product["name"] ?>
            <br/>
        </h1>
        Price: <?= $product["price"] ?><br/>
        <?= auto_typography($product["description"]) ?><br/>
    </div>

</body>
</html>