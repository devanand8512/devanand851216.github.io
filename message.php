
    <?php
if(isset($_POST['name']))
{
    $server='localhost';
    $username="root";
    $password="";
    $con=mysqli_connect($server,$username,$password);

    if(!$con)
    {
        die('connection to databas eto failed due to '.mysqli_connect_error());
    }
    // echo 'suuceesfully connect to db';
   
     $name=$_POST['name'];
    $email=$_POST['email'];
    $textarea=$_POST['email'];
   

    $sql="INSERT INTO `student`.`student` (`name`, `email`, `textarea`) VALUES ('$name','$email', '$textarea',current_timestamp())";


if($con->query($sql)==true)
{
    echo "suceesfully submitted form";
}
else{
     echo 'ERROR:$sql <br> $con->error';
    // echo "erroe inn docu";
}
}
    ?>