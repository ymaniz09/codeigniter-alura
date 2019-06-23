<html lang="en">
<head>
    <link rel="stylesheet" href="<? echo base_url('public/css/bootstrap.css') ?>">
    <meta http-equiv="content-type" content="text/html" charset="x-UTF-16LE-BOM">

</head>
<body>
    <div class="container">

        <?php if($this->session->flashdata("success")) :?>
        <p class="alert alert-success"><?= $this->session->flashdata("success") ?></p>
        <? endif ?>

        <?php if($this->session->flashdata("danger")) :?>
        <p class="alert alert-danger"><?= $this->session->flashdata("danger") ?> </p>
        <? endif ?>

        <h1>Products</h1>

        <table class="table">
            <?php foreach ($products as $product) : ?>
                <tr>
                    <td><?= $product['name'] ?></td>
                    <td><?= toBrazilMoney($product['price']) ?></td>
                </tr>

            <?php endforeach; ?>
        </table>

        <?php if($this->session->userdata("signedUser")) :?>
            <?= anchor("products/form", "Add product", ["class" => "btn btn-primary"]) ?>
            <?= anchor("authentication/logout", "Logout", ["class" => "btn btn-primary"]) ?>

        <?php else :?>
        <h1>SignIn</h1>
        <?php
        echo form_open("authentication/login");
        echo form_label("Email", "email");
        echo form_input(
            [
                "name" => "email",
                "id" => "email",
                "class" => "form-control",
                "maxlength" => "255"
            ]
        );

        echo form_label("Password", "password");
        echo form_password(
            [
                "name" => "password",
                "id" => "password",
                "class" => "form-control",
                "maxlength" => "255"
            ]
        );

        echo form_button(
            [
                "class" => "btn btn-primary",
                "content" => "Sign In",
                "type" => "submit"
            ]
        );
        echo form_close();
        ?>

        <h1>SignUp</h1>
        <?php
        echo form_open("users/new");

        echo form_label("Name", "name");
        echo form_input(
                [
                    "name" => "name",
                    "id" => "name",
                    "class" => "form-control",
                    "maxlength" => "255"
                ]
        );

        echo form_label("Email", "email");
        echo form_input(
            [
                "name" => "email",
                "id" => "email",
                "class" => "form-control",
                "maxlength" => "255"
            ]
        );

        echo form_label("Password", "password");
        echo form_password(
            [
                "name" => "password",
                "id" => "password",
                "class" => "form-control",
                "maxlength" => "255"
            ]
        );

        echo form_button(
                [
                    "class" => "btn btn-primary",
                    "content" => "Sign Up",
                    "type" => "submit"
                ]
        );

        echo form_close();
        ?>
        <?php endif ?>
    </div>
</body>
</html>