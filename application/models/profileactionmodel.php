<?php

class ProfileActionModel
{
    function __construct($db) {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    public function getProfileAction()
    {

                $user_firstname_input=$_POST['firstname'];
                $user_lastname_input=$_POST['lastname'];
                $user_email_input=$_POST['email'];
                $user_phone_input=$_POST['phone'];

            $path = "./images/profilepictures/";

            $valid_formats = array("jpg", "png", "gif", "bmp","jpeg");
   
            $name = $_FILES['profilepicture']['name'];
            $size = $_FILES['profilepicture']['size'];
                if(strlen($name))
                  {
                  list($txt, $ext) = explode(".", $name);
                  if(in_array($ext,$valid_formats))
                    {
                    if($size<(2000*2000)) // Image size max 1 MB
                      {
                      $user_profilepicture_input = time().Session::get('user_name').".".$ext;
                      $tmp = $_FILES['profilepicture']['tmp_name'];
                      if(move_uploaded_file($tmp, $path.$user_profilepicture_input))
                        {
                        $sql = "UPDATE users SET user_profilepicture=:user_profilepicture WHERE user_name=:user_name";
                        $query = $this->db->prepare($sql);
                        $query->execute(array(':user_name' => Session::get('user_name'),
                          ':user_profilepicture' => "$user_profilepicture_input"));
                        echo "<img src='uploads/".$user_profilepicture_input."' class='preview'>";
                        }
                        else
                        echo "failed";
                      }
                   else
                   echo "Image file size max 1 MB"; 
                   }
                 else
                 echo "Invalid file format.."; 
                 }

                $sql = "UPDATE users SET user_firstname=:user_firstname, user_lastname = :user_lastname, user_email= :user_email, user_phone = :user_phone WHERE user_name = :user_name";
                $query = $this->db->prepare($sql);
                $query->execute(array(':user_name' => Session::get('user_name') , ':user_firstname' => "$user_firstname_input", ':user_lastname' => "$user_lastname_input" , ':user_email' => "$user_email_input" , ':user_phone' => "$user_phone_input"  ));

    }
}