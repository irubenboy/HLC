<?php
include_once('../lib/container.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HLC</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <div class="header">
        <h1>HLC</h1>
    </div>
    <div class="main-container">
        <?php
            show_files(".");
        ?>
    </div>
    <script>
        var divs = document.getElementsByClassName("subdirectory");

        for(let i = 0; i < divs.length; i++){
            divs[i].addEventListener('click', function (){
                location.href += this.getAttribute("type");
            })
        }
    </script>
</body>
</html>