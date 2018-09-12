<?php
session_start();
$errors = array();
include ("db.php");

if(isset($_POST['login']))
    {
        $id = $_POST ['username'];
        $pass = $_POST ['pass'];
    
        if(count($errors) == 0)
        {
            
          $sqli = "select * from admin where username =
          '".$id. "'AND pass = '".$pass."'";
            $result = mysqli_query($connection,$sqli);
            
            if(mysqli_num_rows($result) == 1)
            {
                
                $_SESSION['username'] = $username;
                header('location: lamanutama.php');
                
            }
            
            
            
            
            else
            {
                array_push($errors,"<strong>Wrong Username or Password</strong>");
            }
            
         }
    
    
    {
            
          $sqli = "select * from polis where username =
          '".$id. "'AND pass = '".$pass."'";
            $result = mysqli_query($connection,$sqli);
            
            if(mysqli_num_rows($result) == 1)
            {
                
                $_SESSION['username'] = $username;
                header('location: guard/lamanutama.php');
                
            }
            
            
            
            
         }
    
    
    {
            
          $sqli = "select * from kerani where user =
          '".$id. "'AND pas = '".$pass."'";
            $result = mysqli_query($connection,$sqli);
            
            if(mysqli_num_rows($result) == 1)
            {
                
                $_SESSION['username'] = $username;
                header('location: admin/lamanutama.php');
                
            }
            
            
            
            
         }
    
      
      }
?>