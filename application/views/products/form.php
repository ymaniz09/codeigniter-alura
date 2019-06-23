<html lang="en">
<head>
    <link rel="stylesheet" href="<? echo base_url('public/css/bootstrap.css') ?>">
    <meta http-equiv="content-type" content="text/html" charset="x-UTF-16LE-BOM">
</head>
<body>
    <div class="container">
        <h1>Add a new product</h1>
        <?php
        echo form_open("products/new");
        echo form_label("Name", "name");
        echo form_input(
            [
                "name" => "name",
                "id" => "name",
                "class" => "form-control",
                "maxlength" => "255"
            ]
        );

        echo form_label("Price", "price");
        echo form_input(
            [
                "name" => "price",
                "id" => "price",
                "class" => "form-control",
                "maxlength" => "255",
                "type" => "number"
            ]
        );


        echo form_label("Description", "description");
        echo form_textarea(
            [
                "name" => "description",
                "id" => "description",
                "class" => "form-control",
                "maxlength" => "255"
            ]
        );

        echo form_button(
            [
                "class" => "btn btn-primary",
                "content" => "Add",
                "type" => "submit"
            ]
        );
        echo form_close();
        ?>
    </div>
</body>
</html>
