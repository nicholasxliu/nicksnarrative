<?php

class AdministrativeReviewModel
{
    function __construct($db) {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    public function getCalendarEvents()
    {
        $sql = "SELECT user_id FROM users "."WHERE (user_university = :user_university) AND (user_account_type = 1)";
        $query = $this->db->prepare($sql);
        $query->execute(array(':user_university' => Session::get('user_university')));
        
        

        $universityprofessors = $query->fetchAll();
        foreach ($universityprofessors as $universityprofessor){
            $universityprof = array();
            $universityprof = $universityprofessor -> user_id;
            $universityprofs_array[] = $universityprof;
        }

        $implodedprofessors = implode(',', $universityprofs_array);

        $sql = "SELECT user_name, user_firstname, user_lastname, grant_id, org_name, deadline, status_submitted, status_saved FROM applicationinfo JOIN grants ON grant_id = grantid JOIN users ON applicationinfo.user_id = users.user_id WHERE applicationinfo.user_id IN ($implodedprofessors) ORDER BY deadline ASC";

        
        $query = $this->db->prepare($sql);

        foreach ($universityprofs_array as $k => $universityprof_array){
            $query -> bindValue(($k+1), $universityprof_array);
        }
        $query->execute();
        

        
        $universityapplications = $query->fetchAll();

        $jsonarray = array();

        foreach ($universityapplications as $universityapplication) {
            $grantjson = array();
            $grantjson["userName"] = $universityapplication->user_name;
            $grantjson["userFirstname"] = $universityapplication->user_firstname;
            $grantjson["userLastname"] = $universityapplication->user_lastname;
            $grantjson["grantName"] = $universityapplication->grant_id;
            $grantjson["grantOrganization"] = $universityapplication->org_name;
            $grantjson["submitted"] = $universityapplication->status_submitted;
            $grantjson["saved"] = $universityapplication->status_saved;

            $jsonarray[] = $grantjson;
        }

        

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // libs/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change libs/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return json_encode($jsonarray);
        //return json_encode($grant_id_array);
        
    }
}