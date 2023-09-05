<?php
$onlinecon=mysqli_connect("localhost","id20415269_nourish32","Animation@32","id20415269_nourish");
//$oflinecon=mysqli_connect("localhost","root","","id20372397_nourish");

 if(!$onlinecon){
//     //echo "not connected";
// }
// else
//if(!$oflinecon){
    //echo "offline not conected";
}
else{
    //echo" offline connected";
}


$did=$mid=$mamt=$damt=0;
{
    $count="SELECT * FROM donors;";
    if($onlinecon){
        $res=mysqli_query($onlinecon,$count);
        while($row=mysqli_fetch_assoc($res)){
            $am=$row["amount"];
            $did++;
            $damt+=$am;
        }
    }
}
{
    $count="SELECT * FROM member;";
    if($onlinecon){
        $res=mysqli_query($onlinecon,$count);
        while($row=mysqli_fetch_assoc($res)){
            $mmt=$row["amount"];
            $mid++;
            $mamt+=$mmt;
        }
    }
}
// echo $donid;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donations</title>
</head>
<body>
    <style>
        table{
    justify-items: center;
    font-size: 25px;
    padding: 15px;
    empty-cells: hide;
    font-family: 'Times New Roman', Times, serif;
    text-align: center;
    background-color: turquoise; 
    max-height: 500px;
    min-width: 900px;
    border: 1px solid;
    /* background-image: linear-gradient(to left bottom,rgb(77, 38, 44),rgb(62, 54, 54),black,rgb(93, 31, 31)); */
}
th,td{
    border: 3px dashed;
    padding: 15px;
}
marquee{
    height: 55px;
    width: 900px;
    font-size:35px;
    text-decoration: solid;
    color: red;
}
    </style>
<center><table  cellpadding='08' cellspacing='15'>
        <tr>
        <th>Sno.</th>
        <th>Toatal Nourish <br>Network Members</th>
        <th>Toatal Amount From Members</th>
        </tr>
        <tr>
            <td>1</td>
            <td><?php echo $mid ?></td>
            <td><?php echo $mamt ?></td>
        </tr>
        <tr>
        <th></th>
        <th>Toatal Nourish Network <br> Anonymous Donors</th>
        <th>Toatal Amount From Donors</th>
        </tr>
        <tr>
            <td>2</td>
            <td><?php echo $did ?></td>
            <td><?php echo $damt ?></td>
        </tr>
        <!-- <tr>
            <td>3</td>
            <td><?php echo $mid+$did ?></td>
            <td><?php echo $mamt+$damt ?></td>
        </tr> -->

        <marquee bgcolor='lightgreen' behavior="blink" direction="left">Total Amount From Both Members and Anonymous Donors is "<strong><?php echo $mamt+$damt ?></strong>"</marquee>
    </table></center>
</body>
</html>