<html>
    <head>
        <title>Display</title>
        <style>
          body{
            background: aquamarine;
          }
        table{
            background-color: white;
        }
          
         .update , .delete
         {
            background-color: green;
            color: white;
            border: 0;
            outline: none;
            border-radius: 5px;
            height: 30px;
            width: 80px;
            font-weight: bold;
            cursor: pointer;
         }

         .delete
         {
            background-color: red;
          
         }

        </style>
    </head>
</html>




<?php
include("connection.php");

$query="SELECT * FROM tableform";
$data=mysqli_query($conn, $query);

$total=mysqli_num_rows($data);





//echo $total;

if($total != 0)
{
    ?>
        <h2 align="center"><mark>Displaying All Records</mark></h2>

     <center><table border="4px" cellspacing="7" width="100%">
        <tr>
        <th width="3%">ID</th>
        <th width="5%">First Name</th>
        <th width="8%">Last Name</th>
        <th width="15%">Email</th>
        <th width="10%">Password</th>
        <th width="10%">Confirm Password</th>
        <th width="8%">Gender</th>
        <th width="20%">Address</th>
        <th width="8%">Comment</th>
        <th width="12%">Operations</th>
        </tr>




    <?php
   while($result=mysqli_fetch_assoc($data))
   {
   echo " <tr>
              <td>".$result['id']."</th>
              <td>".$result['fname']."</th>
              <td>".$result['lname']."</th>
              <td>".$result['email']."</th>
              <td>".$result['password']."</th>
              <td>".$result['conpassword']."</th>
              <td>".$result['gender']."</th>
              <td>".$result['address']."</th>
              <td>".$result['comment']."</th>


              <td><a href='update_design.php?id=$result[id]'><input type='submit' value='Update' class='update'></a>

              <a href='delete.php?id=$result[id]'><input type='submit' value='Delete' class='delete' onclick='return checkdelete()'></a></td>




         </tr>";
   }
}
else{
    echo "N0 records found";
}
?>
 </table>
     </center>

     <script>

         function checkdelete()
         {
            return confirm('Are you sure you want to delete this record?');
         }
     </script>







 