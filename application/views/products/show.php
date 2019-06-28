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
        <?= auto_typography(html_escape($product["description"])) ?><br/>

        <h2>Buy it!</h2>

        <?php
        echo form_open("sales/new");

        echo form_hidden("product_id", $product["id"]);
        echo form_label("Deliver Date", "deliver_date");
        echo form_input(
            [
                "name" => "deliver_date",
                "id" => "deliver_date",
                "class" => "form-control",
                "maxlength" => "255",
                "value" => set_value("deliver_date", "")
            ]
        );

        echo form_button(
            [
                "class" => "btn btn-primary mt-2",
                "content" => "Buy",
                "type" => "submit"
            ]
        );
        echo form_close();
        ?>
    </div>

</body>
</html>