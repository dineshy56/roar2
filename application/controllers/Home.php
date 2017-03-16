<?php
header('Access-Control-Allow-Origin: *');
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
        parent::__construct();
        $this->load->model('Rider_Model', 'rider');
        $this->load->model('Contactus_Model', 'contactus');
        //$this->load->library('Encryptdecrypt');
        // $this->load->helper('string');// appsturf changes
        date_default_timezone_set('Asia/Calcutta');
        // $this->load->database();
        // $this->load->helper('url');
        $this->load->library('session');

    }

	public function index()
	{
		$this->load->view('home/home');
		// echo "Home";
	}

	public function aboutUs()
	{
		$this->load->view('home/aboutUs');
	}

	public function contactUs()
	{
		$this->load->view('home/contactUs');
	}

	public function ridingRules()
	{
		$this->load->view('home/ridingRules');
	}

	public function registerRider()
	{
		// print_r($this->input->post());exit;
		if ($this->input->post()) {

			//is userName exists
			$userNameExist = $this->rider->isUserNameExists(strtolower($this->input->post('userName')));
			//is email exists
			$isEmailExist = $this->rider->isEmailExists(strtolower($this->input->post('email')));
			//is phone exists
			$isMobileExist = $this->rider->isMobileNoExists(strtolower($this->input->post('mobileNo')));

			if ($userNameExist) {
				$arrayResponse = array('status'=>0, 'message'=>'User Name already Exists.');
			}elseif ($isEmailExist) {
				$arrayResponse = array('status'=>0, 'message'=>'User with this Email already exists.');
			}elseif ($isMobileExist) {
				$arrayResponse = array('status'=>0, 'message'=>'User with this Mobile no alreay exists.');
			} else {
				$fname = strtolower($this->input->post('fname'));
				$lname = strtolower($this->input->post('lname'));
				$userName = strtolower($this->input->post('userName'));
				$mobileNo = strtolower($this->input->post('mobileNo'));
				$email = strtolower($this->input->post('email'));
				$address = strtolower($this->input->post('address'));
				$password = strtolower($this->input->post('password'));
				$joinRegister = $this->input->post('joinRegister');
				$joinRegisterTripID = $this->input->post('joinRegisterTripID');

				$riderData = array(
					'fname'=>$fname,
					'lname'=>$lname,
					'userName'=>$userName,
					'mobileNo'=>$mobileNo,
					'email'=>$email,
					'address'=>$address,
					'password'=>$password,
					'created'=>date('Y-m-d H:i:s')
				);

				$result = $this->rider->insertRaider($riderData);
				// redirect('home/forgotPassword');
				// $lastInsertRiderID = $this->db->insert_id();



				if ($result) {
					// $arraReturn['txtsuccess'] = true;
					if (($joinRegister== 'true') && ($joinRegisterTripID == '1')) {
						//sign up for trip 
						$this->rider->joinTripLogin($email, $password, $joinRegisterTripID);
					}
					$arrayResponse = array('status'=>1);
				} else {
					// $arraReturn['txtsuccess'] = false;
					$arrayResponse = array('status'=>0, 'message'=>'Please Try Again Later.');
				}
			}	
		} else {
			// $arraReturn['txtsuccess'] = false;
			$arrayResponse = array('status'=>0, 'message'=>'invalid method');
		}

		echo json_encode($arrayResponse);
	}

	public function joinTripLogin()
	{
		if ($this->input->post()) {

			$email = strtolower($this->input->post('email'));
			$password = strtolower($this->input->post('password'));
			$tripID = 1;

				// $result = $this->rider->insertRaider($riderData);
				// redirect('home/forgotPassword');
			$result = $this->rider->joinTripLogin($email, $password, $tripID);
			if ($result) {
					// $arraReturn['txtsuccess'] = true;
				$arrayResponse = array('status'=>1);
			} else {
					// $arraReturn['txtsuccess'] = false;
				$arrayResponse = array('status'=>0, 'message'=>'Invalid Email / Password.');
			}
		} else {
			// $arraReturn['txtsuccess'] = false;
			$arrayResponse = array('status'=>0, 'message'=>'invalid method');
		}

		echo json_encode($arrayResponse);
	}

	public function joinTrip()
	{
		if ($this->input->post()) {
			$fname = strtolower($this->input->post('fname'));
			$lname = strtolower($this->input->post('lname'));
			$mobileNo = strtolower($this->input->post('mobileNo'));
			$email = strtolower($this->input->post('email'));
			$address = strtolower($this->input->post('address'));
			$password = strtolower($this->input->post('password'));

			$riderData = array(
				'fname'=>$fname,
				'lname'=>$lname,
				'mobileNo'=>$mobileNo,
				'email'=>$email,
				'address'=>$address,
				'password'=>$password,
				'created'=>date('Y-m-d H:i:s')
			);

			$result = $this->rider->insertRaider($riderData);
			// redirect('home/forgotPassword');
			if ($result) {
				$arraReturn['txtsuccess'] = true;
			} else {
				$arraReturn['txtsuccess'] = false;
			}	
		} else {
			$arraReturn['txtsuccess'] = false;
		}

		echo json_encode($arraReturn);
	}

	public function contactUsForm()
	{
		if ($this->input->post()) {
			$name = strtolower($this->input->post('name'));
			$email = strtolower($this->input->post('email'));
			$comments = strtolower($this->input->post('comments'));

			$contactUsData = array(
				'name'=>$name,
				'email'=>$email,
				'message'=>$comments,
				'created'=>date('Y-m-d H:i:s')
			);

			$result = $this->contactus->insertContactUs($contactUsData);
			// redirect('home/forgotPassword');
			if ($result) {
				$arraReturn['txtsuccess'] = true;
			} else {
				$arraReturn['txtsuccess'] = false;
			}	
		} else {
			$arraReturn['txtsuccess'] = false;
		}

		echo json_encode($arraReturn);
	}

	public function doEnterNewPassword(){
        if($_POST){
            $arraReturn = array('txtsuccess'=>true,'txtmessage'=>'');
            $password = $this->input->post('password');
            $userID = $this->input->post('userID');
            //$forgotPassword = $this->input->post('forgotPassword');
            //check if this email exists in
            $userData = array();

           
            $hashPassword = password_hash($password, PASSWORD_DEFAULT);
            $userData['password'] = $hashPassword;

            $result = $this->api->updateUser($userID,$userData);
            if($result){
                $userData['forgotPassword'] = '';
                $this->api->updateUser($userID,$userData);
                $arraReturn['txtsuccess'] = true;

                //show modal 
            }else{
                $arraReturn['txtsuccess'] = false;
            }
        }

        echo json_encode($arraReturn);
    }

	public function dbtest()
	{
		$allRiderArray = $this->rider->getRider();
		print_r($allRiderArray);
	}

}
