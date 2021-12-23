<html>
    <head>
        <title>Tambah Kegiatan</title>


    </head>

    <body>
        <a href="index.php">Kemabali ke landing page</a>
        <form action=add.php method="POST" name="form1">
            <table>
                <tr>
                    <td>title</td>
                    <td>:</td>
                    <td><input type="text" name="title"></td>
                </tr>

                <tr>
                    <td>description</td>
                    <td>:</td>
                    <td><input type="text" name="description"></td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="SUBMIT" value="add"></td>
                </tr>
            </table>
            </form>
            <?php
            if (isset($_POST['SUBMIT'])) {
                $title = $_POST['title'];
                $description = $_POST['description'];
                include_once("koneksi.php");
                $result = mysqli_query($mysqli, "INSERT INTO todo_list(title, description, is_done) VALUES ('$title', '$description', '0')");
                echo "tambah data berhasil";
            }
            ?>


    </body>
</html>