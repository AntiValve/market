<?php
use App\Library\View;

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <script src="/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <title><?php echo $viewParams['title']; ?> - Магазин</title>
</head>
<body>
    <?php View::view('navbar'); ?>
    <div class="container">
        <?php View::view($viewParams['view'], $viewParams['params']); ?>
    </div>
    <script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
    </script>
</body>
</html>
