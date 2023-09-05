<?php
$onlinecon=mysqli_connect("localhost","id20415269_nourish32","Animation@32","id20415269_nourish");
//$oflinecon=mysqli_connect("localhost","root","","id20372397_nourish");

if(!$onlinecon){
//     echo "not connected";
// }
// else
//if(!$oflinecon){
    echo "offline not conected";
}
else{
    //echo" offline connected";
}


$id=0;
$nm=$_POST['dname'];
$age=$_POST['dage'];
$amt=$_POST['damount'];
global $donid;
$donid="ND"."$id";
{
    $count="SELECT * FROM donors;";
    if($onlinecon){
        $res=mysqli_query($onlinecon,$count);
        while($row=mysqli_fetch_row($res)){
            // echo "<br>".$memid;
             $donid="ND"."$id";
            // echo $memid;
            $id++;
        }
    }
}
// echo $donid;

$ins="INSERT INTO donors VALUES ('$donid','$nm','$age','$amt')";
 $done=mysqli_query($onlinecon,$ins);
if($done){
    echo "<br>Donor Data  Inserted";
    header("Location:index.php");

}
else{
    echo "Cant insert";

}
?>