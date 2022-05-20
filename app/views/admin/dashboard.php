<!Doctype html>
<html>
    <head>
        <link rel="stylesheet" href="../../../public/css/admin_root.css" />
        <link rel="stylesheet" href="../../../public/css/admin_leftbar.css" />
        <link rel="stylesheet" href="../../../public/css/admin_header.css" />
        <link rel="stylesheet" href="../../../public/css/admin/dashboard.css" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="col-10" id="head-bar">
            <?php
                require '../components/admin_header.php';
            ?>
        </div>
        <?php 
            require '../components/admin_leftbar.php';
        ?>
        <div class="col-10" id="content">
            <div id="body">
                This is Body
            </div>
        </div>
    </body>
</html>