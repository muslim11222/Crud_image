

           <!-- atai sesh file ..ata vlo vabe sikhe nite hbe ..and mone rakhte hbe  -->

<?php 

$hostname = 'localhost';
$username = 'root';
$password = '';
$bd_name = 'crud_image';

$database_conn = mysqli_connect($hostname, $username, $password, $bd_name);


if (isset($_POST['update'])) {

     $id = $_POST['id'];
     $name = $_POST['name'];
     $phone = $_POST['phone'];

     $file = $_FILES['image']['name'];
     $dst = "./image/" . $file;
     $db_dst = "image/" .$file;

     move_uploaded_file($_FILES['image']['tmp_name'], $dst);

     $query = "UPDATE list SET name='$name', phone='$phone', image= '$db_dst' WHERE id = '$id' ";

     $result = mysqli_query($database_conn, $query);

     if ($result == true) {
         echo 'updated successfully';
     } else {
          echo 'Update failed';
     }
}



?>