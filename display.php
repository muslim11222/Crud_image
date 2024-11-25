


                  <!-- DataBase Theke ki Vabe data Fornt end show korbo seta vlo vabe dekhano holo  -->

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

          ?>
               <!-- table form area -->
               <table border="1 px" align="center">
                    <tr>
                         <th> Name </th>
                         <th> Phone Number </th>
                         <th> Student Image </th>
                         <th> Delete </th>
                         <th> Update </th>
                    </tr>
          <?php

               $query = "SELECT * FROM list";
               $result = mysqli_query($database_conn, $query);

               while($row = $result->fetch_assoc()) {

                    ?>
                         <tr>
                    <?php
                              echo "<td> {$row['name']} </td>";
                              echo "<td> {$row['phone']} </td>";
                              echo "<td> <img src='{$row['image']}'width=150px height=150px </td>";
                              
                              echo "<td> <a href='delete.php?id={$row['id']}'> Delete </a> </td>";
                              echo "<td> <a href='update.php?id= {$row['id']}'> Update </a> </td>";
                    ?>
                         </tr>
                    <?php                   
               }         
          ?>
               </table>
     </body>
</html>