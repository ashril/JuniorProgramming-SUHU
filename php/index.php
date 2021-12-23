<?php

include_once("koneksi.php");
$result = mysqli_query($mysqli, "select * from todo_list");

?>

<html>
    <head>
        <title>Landing Page</title>


    </head>
    <body>
        <table>
            <tr>
                <th>ID</th>
                <th>TITLE</th>
                <th>DESCRIPTION</th>
                <th>IS DONE</th>
                <th>DELETE</th>
                <th>edit</th>
            </tr>
            <?php
                while ($data = mysqli_fetch_array($result)) {
                    echo "<tr>";
                        echo "<td>".$data['id']."</td>";
                        echo "<td>".$data['title']."</td>";
                        echo "<td>".$data['description']."</td>";
                        echo "<td>".$data['is_done']."</td>";
                        echo "<td><a href='delete.php?id=$data[id]'>DELETE</a></td>";
                        echo "<td><a href='edit.php?id=$data[id]'>edit</a></td>";
                    echo "</tr>";
                }
            ?>
        </table>

        <a href="add.php">Tambah data baru</a>


    </body>
</html>