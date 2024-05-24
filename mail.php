<?php
if (isset($_POST['email']))
{
 extract($_POST);
 
if($_POST['email']){
$subject=" Karma Story Query Form";
$subject=$subject;
$to = 'info.thekarmastory@gmail.com';		
/*Enter ur Subject */
$msg = '<html>
<head>
<title> Karma Story Query Form </title>

<style>
table {
  border-collapse: collapse;
}

table, th, td {
  border: 1px solid black;
}
td{
    padding :5px;
    font-size: 18px;
}

</style>

</head>

<body>

<div style="margin: auto;background: whitesmoke;padding: 25px;max-width: 900px;border: 1px solid #c1adad;">

<h3 style="text-align:center"> Karma Story Query Form </h3>

<table cellspacing=\"4\" cellpadding=\"4\" border=\"1\" align=\"center\" style="margin:auto">
 
 <tr>
 <td align=\"center\">Name</td>
 <td align=\"center\">'.$name.'</td>
  </tr>
  <tr>
 <td align=\"center\">Emaill</td>
 <td align=\"center\">'.$email.'</td>
 </tr>

  <tr>
 <td align=\"center\">Phone no.</td>
 <td align=\"center\">'.$phone.'</td>
 </tr>
 
 <tr>
 <td align=\"center\">Services.</td>
 <td align=\"center\">'.$Services.'</td>
 </tr>
 
  <tr>
 <td align=\"center\">Message</td>
 <td align=\"center\">'.$message.'</td>
 </tr>

 
</table>
<br>
<br>
<hr>


</div>
</body>
</html>';




// Make sure to escape quotes

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: Karma Story <info.thekarmastory@gmail.com>' . "\r\n";		
	/*domain name and support email enter */

    if (mail($to, $subject, $msg, $headers))
    {?>
       <script>
     alert("Thanks for Query.   We will get in touch with you shortly");
     window.location.href="thank_you.php" ;		/return on page which u want/ 
     </script>
    <?php
    } else{
        echo"<script>alert('Error, Please try again.');window.location.href='index.php'</script>"; ?>
           
    <?PHP }
    }else{ ?>
    
<script>
 alert("Error, Please insert all mendotory filed!!.");
 window.location.href="index.php" ;		/return on page which u want/ 
 </script>
    
<?php }

}
?>