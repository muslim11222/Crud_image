
<!-- Kivabe data delete korbo seta dekhano holo and . display.php file delete button ta neuya hyce seta vlo kore dekhte hbe -->

<?php 

     $hostname = 'localhost';
     $username = 'root';
     $password = '';
     $db_name  = 'crud_image';

     $database_conn = mysqli_connect($hostname, $username, $password, $db_name);

     if($database_conn==true) {
          echo '';
     } else {
          echo 'Database connection failed';
     }

     if(isset($_GET['id'])) {
          $S_id = $_GET['id'];
     }

     $query = "DELETE FROM list WHERE id = '$S_id'";
     $result = mysqli_query($database_conn, $query);


     if($result==true) {
          header("location: display.php");
     } else {
          echo 'Database not deleted successfully';
     }

?>     