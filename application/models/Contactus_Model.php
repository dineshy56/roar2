<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contactus_Model extends CI_Model {

	function __construct() {
        // Call the Model constructor
        parent::__construct();
        // date_default_timezone_set('Asia/Calcutta');
        // $this->load->helper('url');
        $this->load->database();
        date_default_timezone_set("Asia/Kolkata");
        
    }
    
	public function insertContactUs($contactUsData)
	{
        $this->db->insert('contactus', $contactUsData);
        return ($this->db->affected_rows() > 0) ? true : false;
    }
}