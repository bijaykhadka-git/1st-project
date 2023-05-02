<?php
if(isset($_POST['submit'])){
    $name=$_POST['username'];
    $password=$_POST['password'];
    $usertype=$_POST['user-type'];
    $query="INSERT INTO khadka values(' $name','$password',' $usertype')";
    $data = mysqli_query($conn,$query);
    if ($data) {
  echo "Connected successfully";
}
else {
    echo "Connection is failed";
}
}
?>