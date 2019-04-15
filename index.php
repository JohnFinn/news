<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>easyToFindWorkaround</title>
</head>
<?php 
    include('news.php');
    $conn = new mysqli('localhost', 'root', '123', 'news');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $news = new NewsDatabase($conn);
    $newsGen = $news->get(0,12);
?>
<body class="container-fluid bg-secondary">
    <?php for ($r = 0; $r < 4; $r += 1) { ?>
    <div class="row">
        <?php for ($i = 0; $i < 3; $i += 1) { ?>
        <div class="col-lg-4">
            <div class="pl-sm-1 bg-dark text-center text-white"  <?php printf('onclick="location.href=\'single.php?id=%d\';"', $newsGen->current()->id); ?>>
                <h2><?php echo $newsGen->current()->title ?></h2>
                <p><?php  echo substr($newsGen->current()->content, 0, 512) ?></p>
            </div>
            <?php $newsGen->next(); ?>
        </div>
        <?php } ?>
    </div>
    <?php } ?>
</body>
</html>
