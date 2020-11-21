<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploads</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/form_style.css">
    <link rel="stylesheet" href="../css/error.css">
    <link rel="stylesheet" href="../css/table.css">
    <?php
    include_once('upload.php');
    include_once('write_files.php');
  
    ?>
</head>
<body>
    <main>
        <div class="header">
            <h2 class="title"><i class="fas fa-cloud-download-alt"></i>Modificar Ficheros</h2>
        </div>
        <?php
            print_rights($rights);
            print_errors($errors);

            if(count($files) > 0){
        ?>
        <div class="files">
            <table>
                <tr>
                    <th>Número del fichero</th>
                    <th>Nombre del fichero</th>
                    <th>Descargar fichero</th>
                </tr>
            <?php
                $index = 0;
                foreach($files as $file){
                    
                    echo "<tr>\n";
                    echo    "<td>" . ++$index . "</td>\n";
                    echo    "<td>$file</td>\n";
                    echo    "<td><a href = 'download.php?file=$file'><img src = '../images/download.svg'></a></td>\n";
                    echo "</tr>";
                }
            ?>
            </table>
        </div>
        <?php
            }
        ?>
    </main>
</body>
</html>