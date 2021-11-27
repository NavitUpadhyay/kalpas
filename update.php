<?php

include("conn.php");
$myObj = new stdClass();

$myObj->status =  "Failure";

if($_SERVER["REQUEST_METHOD"] == "GET" or $_SERVER["REQUEST_METHOD"] == "POST") 
{
    

    $o = "";
    $e = "";
    $p = "";
    $pa = "";
    $id = "";
    
    if(isset( $_REQUEST['option'] ))
    {
        $o = mysqli_real_escape_string($db,$_REQUEST['option']);
    }
    if(isset( $_REQUEST['email'] ))
    {
        $e = mysqli_real_escape_string($db,$_REQUEST['email']);
    }
    if(isset( $_REQUEST['phone'] ))
    {
        $p = mysqli_real_escape_string($db,$_REQUEST['phone']); 
    }
    if(isset( $_REQUEST['password'] ))
    {
        $pa = mysqli_real_escape_string($db,$_REQUEST['password']); 
    }
    if(isset( $_REQUEST['id'] ))
    {
        $id = mysqli_real_escape_string($db,$_REQUEST['id']); 
    }

      
   $d=0;

   if($o=='phone' and $p!="" and $pa!="")
   {
        $sql = "UPDATE `user` SET `email`=null,`phone`='$p',`password`='$pa' WHERE `id` = '$id'";
        $d=1;
        
   }
   else if($o=='email' and $e!="" and $pa!="")
   {
    $sql = "UPDATE `user` SET `phone`=null,`email`='$e',`password`='$pa' WHERE `id` = '$id'";
        $d=1;
   }
   else
   {
        $myObj->message =  "Enter all fields";
        $sql="";
   }  
   
   
   if($d)  
   {
        $result = mysqli_query($db,$sql);
        
        if($result==1)
        {
            $myObj->status = "Success";
            if($o=='phone')
            {
                $sql = "SELECT `id` FROM `user` WHERE phone = '$p' and password = '$pa'";
                
            }
            else if($o=='email')
            {
                $sql = "SELECT `id` FROM `user` WHERE email = '$e' and password = '$pa'";
            }
            else
            {
                $sql = "";
            } 
             
            $result = mysqli_query($db,$sql);
            $row = $result->fetch_assoc();
            $myObj->userID = $row['id'];
        }
        else
        {
            $myObj->status =  "Failure";
        }
    }
    
}
else
{
    $myObj->message =  "NO GET or POST";
}
$myJSON = json_encode($myObj);
echo $myJSON;

?>