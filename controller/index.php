<?php
require_once('db.php');
require_once('model/gallery.php');
session_start();
   $result = "";
 
   if(empty($_SESSION['sym']))
   {
   $_SESSION['sym'] = "";
   }
        
		if(isset($_POST['sym']))
		{
        $_SESSION['sym'] = $_SESSION['sym'] . $_POST['sym'];
        $result = $_SESSION['sym'];
        update_num($_SESSION['sym']);
        }
               
			   if(isset($_POST['res']))
			   {
               update_num($_SESSION['sym']);
               $result = select_num();
               $_SESSION['sym'] = $result;
               }

			           if(isset($_POST['des']))
			           {
                       session_destroy();
                       update_num('null');
                       header("Location: index.php");
                       exit;
                       }

					           if(isset($_POST['min']))
							   {
                               $_SESSION['sym'] = substr($_SESSION['sym'], 0, strlen($_SESSION['sym'])-1);
                               $result = $_SESSION['sym'];
                               update_num($_SESSION['sym']);
                               }
							   
    require_once('view/main_view.php');