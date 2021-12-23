<?php
include_once('koneksi.php');
if (isset($_POST['UPDATE'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $isDone = $_POST['isDone'];

    $result = mysqli_query($mysqli, "UPDATE todo_list set title='$title', description='$description, is_done=$isDone where id='$id'");
    header("location:index.php");
}
$id = $_GET['id'];
$result=mysqli_query($mysqli, "SELECT * from todo_list where id='$id'");


while ($data=mysqli_fetch_array($result)) {
    $id = $data['id'];
    $title = $data['title'];
    $description = $data['description'];
    $isDone = $data['is_done'];
}

?>

<html>
    <head>
        <title>Edit Kegiatan</title>


    </head>

    <body>
        <a href="index.php">Kemabali ke landing page</a>
        <form action=edit.php method="POST" name="form1">
            <table>
                <tr>
                    <td>id</td>
                    <td>:</td>
                    <td><input type="text" name="id" value=<?php echo $id; ?>></td>
                </tr>

                <tr>
                    <td>title</td>
                    <td>:</td>
                    <td><input type="text" name="title" value=<?php echo $title; ?>></td>
                </tr>

                <tr>
                    <td>description</td>
                    <td>:</td>
                    <td><input type="text" name="description" value="<?php echo $description; ?>"></td>
                </tr>

                <tr>
                    <td>is_done</td>
                    <td>:</td>
                    <td><input type="text" name="is_done" value=<?php echo $isDone; ?>></td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="UPDATE" value="update"></td>
                </tr>
            </table>
            </form>


    </body>
</html>