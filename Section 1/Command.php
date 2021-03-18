<?php

   if($_SERVER["REQUEST_METHOD"] == "POST") {

$ip = $_POST['ip'];


system("ping $ip");


   }

   

?>

<html>

   

   <head>

      <title>Login Page</title>

     

      <style type = "text/css">

         body {

            font-family:Arial, Helvetica, sans-serif;

            font-size:14px;

         }

         label {

            font-weight:bold;

            width:100px;

            font-size:14px;

         }

         .box {

            border:#666666 solid 1px;

         }

      </style>

     

   </head>

   

   <body bgcolor = "#FFFFFF">

      <div align = "center">

         <div style = "width:300px; border: solid 1px #333333; " align = "left">

            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>

            <div style = "margin:30px">

               

               <form action = "" method = "post">

                  <label>IP:</label><input type = "text" name = "ip" class = "box"/><br /><br />

                  <input type = "submit" value = " Submit "/><br />

               </form>

            </div>

         </div>

      </div>


   </body>

</html>