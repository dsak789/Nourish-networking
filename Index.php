<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nourish Network</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   

    <link rel="stylesheet" href="Styling.css">
</head>
<body>
<nav>
    <div class="navbar navbar-expand-lg navbar-light" id="header">
        <label class="navbar-brand">Nourish Network</label>
        <ul>
            <li><a href="#beamember">Be a Member</a></li>
            <li><a href="#donate">Donate Now</a></li>
        </ul>
    </div>
</nav>
    
    <div id="promotion">
        <div id="body">
            <iframe src="Nourish.mp4" width="900" height="650"></iframe>
        </div>
    </div>



    <div class="donations">
        <?php
        echo"<br><hr>";
        include("donations.php");
        echo"<br><hr>";

        ?>
    </div>
<!-- <div>
    4.3. You will see the folder you just shared. Copy the shared folder to anywhere else based on your needs.

As you see, you can only share one folder once. It will be time-consuming if you have dozens of files from different folders to transfer. Is there an easier way to transfer files between computers on same network?


Advanced way to transfer files between computers on same network
As long as the two computers are on the same wireless or wired network, you can transfer files from PC to PC even without an Ethernet cable. AOMEI Backupper Standard, the best free PC to PC file transfer software, can complete the task easily. You can benefit a lot from its following features:

✦ Various sources and destinations: you can synchronize PC files to local folders, network shared folders, NAS devices or cloud drives and vice versa. You can also sync two external hard drives and the like.
✦ Automatic file sync: it enables you to create a schedule to auto run the file sync task daily/weekly/monthly.
✦ Batch file transfer: it supports transferring multiple folders simultaneously, thus saving you from tedious work.
✦ Compatibility: it works with all Windows PCs running Windows 11/10/8.1/8/7/Vista/XP (32 bit and 64 bit).
4.3. You will see the folder you just shared. Copy the shared folder to anywhere else based on your needs.

As you see, you can only share one folder once. It will be time-consuming if you have dozens of files from different folders to transfer. Is there an easier way to transfer files between computers on same network?


Advanced way to transfer files between computers on same network
As long as the two computers are on the same wireless or wired network, you can transfer files from PC to PC even without an Ethernet cable. AOMEI Backupper Standard, the best free PC to PC file transfer software, can complete the task easily. You can benefit a lot from its following features:

✦ Various sources and destinations: you can synchronize PC files to local folders, network shared folders, NAS devices or cloud drives and vice versa. You can also sync two external hard drives and the like.
✦ Automatic file sync: it enables you to create a schedule to auto run the file sync task daily/weekly/monthly.
✦ Batch file transfer: it supports transferring multiple folders simultaneously, thus saving you from tedious work.
✦ Compatibility: it works with all Windows PCs running Windows 11/10/8.1/8/7/Vista/XP (32 bit and 64 bit).
4.3. You will see the folder you just shared. Copy the shared folder to anywhere else based on your needs.

As you see, you can only share one folder once. It will be time-consuming if you have dozens of files from different folders to transfer. Is there an easier way to transfer files between computers on same network?


Advanced way to transfer files between computers on same network
As long as the two computers are on the same wireless or wired network, you can transfer files from PC to PC even without an Ethernet cable. AOMEI Backupper Standard, the best free PC to PC file transfer software, can complete the task easily. You can benefit a lot from its following features:

✦ Various sources and destinations: you can synchronize PC files to local folders, network shared folders, NAS devices or cloud drives and vice versa. You can also sync two external hard drives and the like.
✦ Automatic file sync: it enables you to create a schedule to auto run the file sync task daily/weekly/monthly.
✦ Batch file transfer: it supports transferring multiple folders simultaneously, thus saving you from tedious work.
✦ Compatibility: it works with all Windows PCs running Windows 11/10/8.1/8/7/Vista/XP (32 bit and 64 bit).4.3. You will see the folder you just shared. Copy the shared folder to anywhere else based on your needs.

As you see, you can only share one folder once. It will be time-consuming if you have dozens of files from different folders to transfer. Is there an easier way to transfer files between computers on same network?


Advanced way to transfer files between computers on same network
As long as the two computers are on the same wireless or wired network, you can transfer files from PC to PC even without an Ethernet cable. AOMEI Backupper Standard, the best free PC to PC file transfer software, can complete the task easily. You can benefit a lot from its following features:

✦ Various sources and destinations: you can synchronize PC files to local folders, network shared folders, NAS devices or cloud drives and vice versa. You can also sync two external hard drives and the like.
✦ Automatic file sync: it enables you to create a schedule to auto run the file sync task daily/weekly/monthly.
✦ Batch file transfer: it supports transferring multiple folders simultaneously, thus saving you from tedious work.
✦ Compatibility: it works with all Windows PCs running Windows 11/10/8.1/8/7/Vista/XP (32 bit and 64 bit).
</div> -->

    <div id="beamember">
        <form  action="member.php" method="post">
            <fieldset id="fbeamember">
                <legend>Be A Member</legend>
                <label>First Name </label><input name="fname" type="textbox" id="first" placeholder="Enter your First name" required/> <br/>
                <label>Last Name </label><input name="lname" type="textbox" id="last" placeholder="Enter your Last name" required/> <br/>
                <label>Pay Amount </label><input name="amount" type="textbox" id="pay" placeholder="Enter Payment Amount" required/> <br/>
                <label>Choose Term </label>
                <select id="term" name="term">
                <option selected>Select</option>
                <option name="term" value="once" required>Once</option>
                <option name="term" value="monthly" required>Monthly</option>
                </select><br/>
                <label>Address </label><input type="textfield" name="address" rows="4" id="address" placeholder="Your Address" required/> <br/>
                <hr><center> You can use these as <strong>Login</strong> Credentials</center><hr>
                <label>Username </label><input type="email" name="email" id="email" placeholder="Enter your Email" required/><br/>
                <label>Password</label><input type="password" name="password" placeholder="Enter Password">
                <input type="submit"  id="preview-btn">
            </fieldset>
        </form>
    </div>






    <div id="donate">
        <form action="donor.php" method="post">
            <fieldset id="fdonate">
                <legend>Donate</legend>
                NAME:<input type="text" name="dname" placeholder="Enter Your Name" required />
                AGE:<input type="number" name="dage" placeholder="Age"  required />
                Amount you want to Donate: <input type="text" name="damount" id="amt" placeholder="$AMOUNT" required>
                <input type="submit" value="Donate">
            </fieldset>
        </form>
    </div>

    <div id="footer">
        <p>follow us on : </p>
        <i class="fa fa-facebook"></i>
        <i class="fa fa-instagram"></i>
        <i class="fa fa-youtube"></i>
        <i class="fa fa-twitter"></i>
    </div>
    <script src="Affidavit.js"></script>

</body>
</html>