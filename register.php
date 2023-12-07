<?php
$name=$_POST['name'];
$pass=$_POST['password'];
$servername="localhost";
$username="root";
$password="";
$dname="assignment";
$conn=mysqli_connect($servername,$username,$password,$dname);
if($conn)
{
    echo "header("Location:D:\Assignment\userprofile.html")";
}
else
{
    die("connection failed".mysqli_connect_error());
}

    if($name!="" && $pass!="")
    {
        $query="insert into loginform values('$name','$pass')";
        $data=mysqli_query($conn,$query);
        if($data)
        {
            echo "data inserted into database!";
        }
}
    else
        {
            echo "data not inserted!! all fields are required";
        }
?>