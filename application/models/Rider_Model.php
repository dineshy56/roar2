<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Rider_Model extends CI_Model {

	function __construct() {
        // Call the Model constructor
        parent::__construct();
        // date_default_timezone_set('Asia/Calcutta');
        // $this->load->helper('url');
        $this->load->database();
        date_default_timezone_set("Asia/Kolkata");
        
    }

	// public function insertRaider($riderData)
	// {
	// 	$
	// }

    public function getRider()
    {
    	$query = $this->db->get('riderDetails');
    	return $query->result_array();
    }
    
	public function insertRaider($riderData)
	{
        $this->db->insert('riderDetails', $riderData);
        return ($this->db->affected_rows() > 0) ? true : false;
    }

	public function isUserNameExists($userName)
	{
		$sql= "SELECT riderID FROM `riderDetails` WHERE userName=?";
        $query = $this->db->query($sql,array($userName));
        if($query->num_rows()>0){
            $res = $query->row_array();
            return $res;
        } else {
            return false;
        }
	}

	public function isEmailExists($email)
	{
		$sql= "SELECT riderID FROM `riderDetails` WHERE email=?";
        $query = $this->db->query($sql,array($email));
        if($query->num_rows()>0){
            $res = $query->row_array();
            return $res;
        } else {
            return false;
        }
	}

	public function isMobileNoExists($mobileNo)
	{
		$sql= "SELECT riderID FROM `riderDetails` WHERE mobileNo=?";
        $query = $this->db->query($sql,array($mobileNo));
        if($query->num_rows()>0){
            $res = $query->row_array();
            return $res;
        } else {
            return false;
        }
	}

	public function joinTripLogin($email, $password, $tripID)
	{
		$sql = "SELECT riderID FROM `riderDetails` WHERE email = ? AND password = ?";
        $query = $this->db->query($sql,array($email, $password));
        if ($query->num_rows()>0) {
        	$row = $query->row();

        	// has user already joined the trip 
            $riderJoinedTrip = $this->hasUserJoinedTheTrip($tripID,$row->riderID);
            if (!$riderJoinedTrip) {
                $allTripSql = "SELECT tripTotalDistance FROM `allTrip` WHERE tripID = ?";
                $allTripQuery = $this->db->query($allTripSql,array($tripID));

                $row2 = $allTripQuery->row();
                $tripDetailsData = array(
                    'tripID' => $tripID,
                    'riderID' => $row->riderID,
                    'kilometer' => $row2->tripTotalDistance
                );
                $this->db->insert('tripDetails', $tripDetailsData);
                return true;
            } else {
                return true;
            }
        } else {
        	return false;
        }
        
	}

    public function hasUserJoinedTheTrip($tripID,$riderID)
    {
        $sql = "SELECT * FROM `tripDetails` WHERE tripID = ? AND riderID = ?";
        $query = $this->db->query($sql,array($tripID, $riderID));
        if ($query->num_rows()>0) {
            return true;
        } else {
            return false;
        }
        
    }

	// public function joinTripLogin($email, $password, $tripID)
	// {
	// 	$sql = "SELECT riderID FROM `riderDetails` WHERE email = ? AND password = ?";
 //        $query = $this->db->query($sql,array($email, $password));
 //        if ($query->num_rows()>0) {
 //        	$row = $query->row();
 //        	return $row->riderID;
 //        } else {
 //        	return false;
 //        }
        
	// }
}