<?php
// $onlinecon=mysqli_connect("localhost","id20415269_nourish32","Animation@32","id20415269_nourish");
$onlinecon=mysqli_connect("sql203.epizy.com","epiz_33754431","jaLNksaMZJkwe0M","epiz_33754431_nourish");

//$oflinecon=mysqli_connect("localhost","root","","id20372397_nourish");

// if(!$onlinecon){
//     echo "not connected";
// }
// else
if(!$onlinecon){
    echo "offline not conected";
}
else{
    echo" online connected";
}


$fnm=$_POST['fname'];
$lnm=$_POST['lname'];
$amt=$_POST['amount'];
$term="monthly";
$add=$_POST['address'];
$email=$_POST['email'];
$pwd=$_POST['password'];
{
    $id=0;
    $count="SELECT * FROM member;";
    if($onlinecon){
        $res=mysqli_query($onlinecon,$count);
        while($row=mysqli_fetch_row($res)){
            // echo "<br>".$memid;
            $memid="NM"."$id";
            // echo $memid;
            $id++;
        }
    }
}

// echo "<br>".$memid;


$ins="INSERT INTO member VALUES ('$memid','$fnm','$lnm','$amt','$term','$add','$email','$pwd')";
 $done=mysqli_query($onlinecon,$ins);
if($done){
    echo "<br>Member Data Inserted";
    header("Location:index.php");
}
else{
    echo ("Can't insert");

}
?>