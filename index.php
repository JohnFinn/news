<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>easyToFindWorkaround</title>
</head>
<body class="container-fluid bg-secondary">
    <?php 
        for ($r = 0; $r < 4; $r += 1) {
    ?>
    <div class="row">
        <?php
            for ($i = 0; $i < 3; $i += 1) {
        ?>
        <div class="col-lg-4">
            <div class="pl-sm-1 bg-dark text-center text-white">
                <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum in</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam cupiditate, ipsam pariatur vel quia repudiandae eaque doloremque magni repellat mollitia blanditiis expedita omnis necessitatibus a suscipit cumque, sed ratione eos.</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit, repellendus! Sint amet, sit ullam cum laudantium sequi dignissimos deserunt illum eius molestias alias et magnam. Reprehenderit esse quo id neque.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam voluptatibus libero labore odit iusto et blanditiis natus obcaecati tempora, nulla dolor, ducimus omnis, excepturi est. Eos itaque laudantium vitae ipsum.</p>
            </div>
        </div>
        <?php } ?>
    </div>
    <?php
        }
    ?>
</body>
</html>
