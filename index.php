

                         <!-- connection and submit korle database kmne jabe seta dekhano hyce -->

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
          $bd_name = 'crud_image';

          $bd_conn = mysqli_connect($hostname, $username, $password, $bd_name);

          if($bd_conn=== false) {
               die('Could not connect'. mysqli_error($bd_conn));
          }

          if(isset($_POST['submit'])) {
               $name = $_POST['name'];
               $phone = $_POST['phone'];

               $file = $_FILES['image']['name'];
               $dst = "./image/" . $file;
               $db_dst = "image/" .$file;

               move_uploaded_file($_FILES['image']['tmp_name'], $dst);

               $query = "INSERT INTO list (name, phone, image) VALUES ('$name', '$phone', '$db_dst')";

               $result = mysqli_query($bd_conn, $query);


               if($result == true) {
                    echo 'data inserted';
               } else {
                    echo 'data not inserted';
               }
          }
     ?>
     
     <div align="center">

          <form action="index.php" method="POST" enctype="Multipart/form-data">
     
               <div>
                    <label> Student Name </label>
                    <input type="text" name="name" placeholder="Enter Your Name">
               </div>

               <div>
                    <label> Student Phone </label>
                    <input type="number" name="phone" placeholder="Enter Your phone">
               </div>

               <div>
                    <label> Student image </label>
                    <input type="file" name="image" placeholder="Upload Your Image">
               </div>

               <div>
                    
                    <input type="submit" name="submit" value="submit data">
               </div>

          </form>
     </div>
</body>
</html>