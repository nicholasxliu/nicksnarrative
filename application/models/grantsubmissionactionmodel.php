<?php

class GrantSubmissionActionModel
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

    $org_name=$_POST['org_name'];
    if ($_POST['publicprivate']=="public"){
      $publicgrant=1;
    }
    else {
      $publicgrant=0;
    }
    $topic=$_POST['topic'];
    $subtopic=$_POST['subtopic'];
    $tags_important=$_POST['tags_important'];
    $field1=$_POST['field1'];
    if ($_POST['field1_type']=="text"){
      $field1_type=0;
    }
    else if ($_POST['field1_type']=="multiplechoice"){
      $field1_type=1;
    }
    else if ($_POST['field1_type']=="multiplechoice"){
      $field1_type=2;
    }
    else {
      $field1_type=3;
    }
    $mc_choice1=$POST['mc_choice1'];
    $mc_choice2=$POST['mc_choice2'];
    $mc_choice3=$POST['mc_choice3'];
    $mc_choice4=$POST['mc_choice4'];


    $sql = "INSERT INTO grants(org_name, publicgrant, topic, subtopic, tags_important, field1, field1_type, mc_choice1, mc_choice2, mc_choice3, mc_choice4) VALUES ('org_name','public_grant','topic','subtopic','tags_important','field1','field1_type','mc_choice1','mc_choice2','mc_choice3','mc_choice4')";
    $query = $this->db->prepare($sql);
    $query->execute(array(

    
      ));

  }
}