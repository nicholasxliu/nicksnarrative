<?php

class GrantsModel
{
    function __construct($db) {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    public function getGrant($id)
    {
        $sql = "SELECT grantid, org_name, website, contact_name, contact_email, contact_phone, subject, topic, subtopic" .
                " FROM grants WHERE grantid = :grant_id";
        $query = $this->db->prepare($sql);
        $query->execute(array(':grant_id' => $id));

        $count =  $query->rowCount();
        if ($count == 0) {
            return null;
        }

        $grant = $query->fetchAll();
        $grant = $grant[0];

        $grantjson = array();
        $grantjson["grantID"] = $grant->grantid;
        $grantjson["orgName"] = $grant->org_name;
        $grantjson["website"] = $grant->website;
        $grantjson["contactName"] = $grant->contact_name;
        $grantjson["contactEmail"] = $grant->contact_email;
        $grantjson["contactPhone"] = $grant->contact_phone;
        $grantjson["subject"] = $grant->subject;
        $grantjson["topic"] = $grant->topic;
        $grantjson["subtopic"] = $grant->subtopic;

        return json_encode($grantjson);
    }

    public function saveGrant($id)
    {
        $sql = "INSERT INTO applicationinfo (grant_id, user_id, status_saved) VALUES (:grant_id, :user_id, 1) ON DUPLICATE KEY UPDATE status_saved=1";
        print $sql;
        $query = $this->db->prepare($sql);
        $query->execute(array(':grant_id' => $id, ':user_id' => Session::get('user_id')));

        $count =  $query->rowCount();
        if ($count == 0) {
            return null;
        }
    }

    public function completeGrant($id)
    {
        $sql = "INSERT INTO applicationinfo (grant_id, user_id, status_submitted) VALUES (:grant_id, :user_id, 1) ON DUPLICATE KEY UPDATE status_submitted=1";
        print $sql;
        $query = $this->db->prepare($sql);
        $query->execute(array(':grant_id' => $id, ':user_id' => Session::get('user_id')));

        $sql = "INSERT INTO applicationinfo (grant_id, user_id, status_saved) VALUES (:grant_id, :user_id, 0) ON DUPLICATE KEY UPDATE status_saved=0";
        print $sql;
        $query = $this->db->prepare($sql);
        $query->execute(array(':grant_id' => $id, ':user_id' => Session::get('user_id')));

        $count =  $query->rowCount();
        if ($count == 0) {
            return null;
        }
    }
}