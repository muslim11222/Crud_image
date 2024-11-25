
         <!-- Amra jodi data gulo update korte chai tahole 2 ta file niye kaj korbo ....ata holo real file tar por onno file  -->


<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     


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


          $S_id = $_GET['id'];

          $query = "SELECT * FROM list WHERE id = '$S_id'";

          $result = mysqli_query($database_conn, $query);

          $info = $result->fetch_assoc();

          // echo '<pre>';
          // var_dump($info);
          // echo '</pre>';
     ?>


          <form action="update_data.php" method="POST" enctype="multipart/form-data">

                 <h2> Update Area Here </h2>
               <div>
                    
                    <input type="text" name="id" value="<?php echo "{$info['id']}"; ?>"hidden>
               </div>

               <div>
                    <label> Full Name </label>
                    <input type="text" name="name" value="<?php echo "{$info['name']}"; ?>">
               </div>

               <div>
                    <label> Phone Number </label>
                    <input type="phone" name="phone" value="<?php echo "{$info['phone']}"; ?>">
               </div>


               <div>
                    <label> Old Image </label>
                    <img height="150" width="150" src="<?php echo "{$info['image']}"; ?>" alt="">
               </div>


               <div>
                    <label> Change Image </label>
                    <input type="file" name="image">
               </div>


               <div>
                    <input type="submit" name="update" value="Update Data">
               </div>
          </form>

     <?php 

     ?>
</body>
</html>