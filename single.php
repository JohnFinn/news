<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>easyToFindWorkaround</title>
</head>
<body class="bg-dark text-white">
    <?php
        include('news.php');
        $conn = new mysqli('localhost', 'root', '123', 'news');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $news = new NewsDatabase($conn);
        $current = $news->get_one($_GET['id']);
    ?>
    <h1><?php echo $current->title ?></h1>
    <p><?php  echo $current->content?>></p>
</body>
</html>
