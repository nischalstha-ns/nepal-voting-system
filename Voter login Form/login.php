<?php
$conn =mysqli_connect('localhowt', 'root', 'your_password', 'voterdatabase');

$cnic=$_POST['cnic'];
$mobile= $_POST['mobile'];
$pass= $_POST['pass'];
$check=mysqli_query($conn, "SELECT * voterregistration WHERE cnic='$cnic' AND mobile='$mobile' AND pass='$pass'");
if(mysqli_num_rows($check)>0){
    $voterdata = mysqli_fetch_array($check);

    $_SESSION['voterdata']=$voter;
    echo '
    <script>
    location="dashboard.php";

    
    </script>
    ';

}
else{
    echo "some error";
}

 ?>
