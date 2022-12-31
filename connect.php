<?php
       session_start();
       $con = mysql_connect("localhost","root","","registration 1");
       if (isset($_POST['Send application'])) {
           $Full name=$_POST['Full name'];
           $Email address=$_POST['Email address'];
           $Phone Number=$_POST['Phone Number'];
           $Roll No.=$_POST['Roll No.'];
           $Gender:=$_POST['Gender:'];
           $Sem=$_POST['Sem'];
           $Branch=$_POST['Branch'];

           $query="INSERT INTO registration 1(Full name,Email addrress,Phone Number,Roll No.,Gender:,Sem,Branch)VALUES('$Full name','$Email address','$Phone Number','$Roll No.',' $Gender:','$Sem',' $Branch')";
           $query_run = mysql_query($con,$query);
           if($query_run){
            $_SESSION['status']="Inserted Successfully";
            header("Location: index.html");
           }
           else{
            $_SESSION['status']="Inserted Successfully";
            header("Location: index.html");
           }

       }
?>