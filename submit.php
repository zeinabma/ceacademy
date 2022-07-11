<?php

$d1=$_POST['name'];
$d2=$_POST['email'];
$d3=$_POST['pswd'];

$ins="INSERT INTO urers_info(NAME,EMAIL,PASS)
 VALUES('$d1','$d2','$d3')";
$con=mysqli_connect("localhost" , "root" , "" , "acadmydb");
if(mysqli_query($con,$ins)){
    echo "اطلاعات شما با موفقیت ثبت شد";
}
else{
    echo "اطلاعات شما ثبت نشد";
}

?>