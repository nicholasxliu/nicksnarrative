<?php

class ReviewGrantsModel
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
        $sql = "SELECT grant_id, org_name, deadline, status_submitted, status_saved FROM applicationinfo JOIN grants ON grant_id = grantid ".
            "WHERE (user_id= :user_id) ORDER BY deadline ASC";
        $query = $this->db->prepare($sql);
        $query->execute(array(':user_id' => Session::get('user_id')));

        $grants = $query->fetchAll();

        $jsonarray = array();

        foreach ($grants as $grant) {
            $grantjson = array();
            $grantjson["grantName"] = $grant->grant_id;
            $grantjson["grantOrganization"] = $grant->org_name;
            $grantjson["submitted"] = $grant->status_submitted;
            $grantjson["saved"] = $grant->status_saved;

            $jsonarray[] = $grantjson;
        }

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // libs/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change libs/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return json_encode($jsonarray);
    }
}