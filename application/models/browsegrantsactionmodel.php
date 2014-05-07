<?php

class BrowseGrantsActionModel
{
    function __construct($db) {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    public function getGrants()
    {

        $input=isset($_POST['search']) ? $_POST['search'] : null;
        $restriction_country_input=isset($_POST['restriction_country_input']) ? $_POST['restriction_country_input'] : null;
        $restriction_state_input=isset($_POST['restriction_state_input']) ? $_POST['restriction_state_input'] : null;
        $restriction_city_input=isset($_POST['restriction_city_input']) ? $_POST['restriction_city_input'] : null;
        $restriction_citizenship_input=isset($_POST['restriction_citizenship_input']) ? $_POST['restriction_citizenship_input'] : null;
        $restriction_age_input=isset($_POST['restriction_age_input']) ? $_POST['restriction_age_input'] : null;
        $restriction_gender_input=isset($_POST['restriction_gender_input']) ? $_POST['restriction_gender_input'] : null;
        $restriction_school_input=isset($_POST['restriction_school_input']) ? $_POST['restriction_school_input'] : null;
        $restriction_nonprofit_input=isset($_POST['restriction_nonprofit_input']) ? $_POST['restriction_nonprofit_input'] : 1;
        $restriction_degree_input=isset($_POST['restriction_degree_input']) ? $_POST['restriction_degree_input'] : null;
        $restriction_language_input=isset($_POST['restriction_language_input']) ? $_POST['restriction_language_input'] : null;
        $restriction_occupation_input=isset($_POST['restriction_occupation_input']) ? $_POST['restriction_occupation_input'] : null;
        $restriction_org_input=isset($_POST['restriction_org_input']) ? $_POST['restriction_org_input'] : 1;

        $sql = "SELECT *,
                      MATCH (org_name) AGAINST (:keyword) AS org_relevance,
                      MATCH (org_name, subject, topic, subtopic, tags_important, tags_secondary) AGAINST (:keyword) AS relevance


            FROM grants WHERE (
            MATCH (org_name, subject, topic, subtopic, tags_important, tags_secondary) AGAINST (:keyword) AND
            ((INSTR(LOWER(restriction_country), LOWER(:restriction_country)) > 0) OR (restriction_country LIKE '')) AND
            ((INSTR(LOWER(restriction_state), LOWER(:restriction_state)) > 0) OR (restriction_state LIKE '')) AND
            ((INSTR(LOWER(restriction_city), LOWER(:restriction_city)) > 0) OR (restriction_city LIKE '')) AND
            ((INSTR(LOWER(restriction_citizenship), LOWER(:restriction_citizenship)) > 0) OR (restriction_citizenship LIKE '')) AND 
            ((INSTR(LOWER(restriction_age), LOWER(:restriction_age)) > 0) OR (restriction_age LIKE '')) AND 
            ((INSTR(LOWER(restriction_gender), LOWER(:restriction_gender)) > 0) OR (restriction_gender LIKE '')) AND 
            ((INSTR(LOWER(restriction_school), LOWER(:restriction_school)) > 0) OR (restriction_school LIKE '')) AND
            ((restriction_nonprofit <= :restriction_nonprofit) OR (restriction_nonprofit LIKE '')) AND
            ((INSTR(LOWER(restriction_degree), LOWER(:restriction_degree)) > 0) OR (restriction_degree LIKE '')) AND
            ((INSTR(LOWER(restriction_language), LOWER(:restriction_language)) > 0) OR (restriction_language LIKE '')) AND
            ((INSTR(LOWER(restriction_occupation), LOWER(:restriction_occupation)) > 0) OR (restriction_occupation LIKE '')) AND
            ((restriction_org <= :restriction_org) OR (restriction_org LIKE '')) 
            )
            ORDER BY org_relevance + relevance DESC";
        $query = $this->db->prepare($sql);

        $query->execute(array(':keyword' => "$input"
            , ':restriction_country' => "$restriction_country_input"
            , ':restriction_state' => "$restriction_state_input"
            , ':restriction_city' => "$restriction_city_input"
            , ':restriction_citizenship' => "$restriction_citizenship_input"
            , ':restriction_age' => "$restriction_age_input"
            , ':restriction_gender' => "$restriction_gender_input"
            , ':restriction_school' => "$restriction_school_input"
            , ':restriction_nonprofit' => "$restriction_nonprofit_input"
            , ':restriction_degree' => "$restriction_degree_input"
            , ':restriction_language' => "$restriction_language_input"
            , ':restriction_occupation' => "$restriction_occupation_input"
            , ':restriction_org' => "$restriction_org_input"           
            ));

        $grants = $query->fetchAll();

        $jsonarray = array();

        foreach ($grants as $grant) {
            $grantjson = array();

            $grantjson["grantName"] = $grant->grantid;
            $grantjson["grantOrganization"] = $grant->org_name;


            $jsonarray[] = $grantjson;
        }

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // libs/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change libs/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return json_encode($jsonarray);
    }
}