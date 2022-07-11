


<?php

if (isset($_POST['submit']))
{
    $conn = mysqli_connect("localhost", "root", "", "test");
            
    $name=$_POST['name'];
    $gen=$_POST['gender'];
    $num=$_POST['cno'];
    $mail=$_POST['mail'];
   
$query= "INSERT INTO `tblcontact` (`user_name`, `gender`, `number`, `user_email`) VALUES ($name,$gen,$num,$mail)";

  
//   if ($_SERVER["REQUEST_METHOD"] === "POST") {
 
//     // collect value of input field
//     $data = $_REQUEST['val1'];
 
//     if (empty($data)) {
//         echo "data is empty";
//     } else {
//         echo $data;
//     }
// }

 mysqli_query($conn, $query);
 
 
// Close connection
mysqli_close($conn);
}
// $insert_id = mysqli_insert_id($conn);
  
// if(!empty($insert_id)) {
// $message = "Your contact information is saved successfully";}
// echo $message;


?>
