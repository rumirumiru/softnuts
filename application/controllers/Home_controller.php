<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_controller extends CI_Controller
{
    public function index()
    {
        $this->load->view('register');
    }
   
   
    public function register_info()
    {
        if ($_SERVER["REQUEST_METHOD"]=="POST") {
            if (isset($_POST['full_name'])) {
                $Name   = $_POST['full_name'];
            }
            if (isset($_POST['email_address'])) {
                $Email   = $_POST['email_address'];
            }

            if (isset($_POST['password'])) {
                $Password   = $_POST['password'];
            }
            $middle_name='kumar';
            $last_name='panditji';
            $contact_number='7000125306';
            $address_one='ho 39';
            $address_two='radha kunj';
            $city='Bhopal';
            $state='mp';
            $zipcode='462022';
           
            $login_type='internal';
            $ssn_digits='456655';
            $dob='30/06/1990';
            $Gender='male';

            $data = array(
                        'first_name' => $Name,
                        'email' => $Email,
                        'password' => md5($Password),
                        'last_name'=>$last_name,
                        'contact_number'=>$contact_number,
                        'address_one'=> $address_one,
                        'address_two'=> $address_two,
                        'city'=> $city,
                        'state'=> $state,
                        'zipcode'=>$zipcode,
                        'login_type'=> $login_type,
                        'ssn_digits'=> $ssn_digits,
                        'dob'=>$dob,
                        'gender'=>$Gender,
                        'middle_name'=>$middle_name
                    );
            $apiKey='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MX0.By2r2BwheJsbrEGrHOaMQwrrmlY7wHVFzWtuEmv39fM';
            $ch = curl_init('https://softonauts.com/clients/Android/register-user');
            $header=[  'Authorization:' . $apiKey,
                       ];
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            curl_setopt($ch, CURLOPT_POST, 1);
            //   curl_setopt($ch, CURLOPT_POSTFIELDS, "first_name=$Name&email=$Email&password=md5($Password)&last_name=$last_name");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $res=curl_exec($ch);
            // $res= curl_getinfo($ch);
            var_dump(json_decode($res, true));
            curl_close($ch);
            if ($status==1) {
                redirect('login');
            } else {
                $this->index();
            }
        } else {
            $this->load->view('register');
        }
    }


     public function appointment_details()
     {
         $this->load->view('appointment-details');
     }

      public function login_view()
      {
          $this->load->view('login');
      }




     public function login_check()
     {
         if ($_SERVER["REQUEST_METHOD"]=="POST") {
             $status=1;
             if (isset($_POST['email_address'])) {
                 $username   = $_POST['email_address'];
             }
             if (isset($_POST['password'])) {
                 $Password   = $_POST['password'];
             }
             $data = array(
   
                        'username' => $username,
                        'password' => md5($Password),

                    );
             $apiKey='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MX0.By2r2BwheJsbrEGrHOaMQwrrmlY7wHVFzWtuEmv39fM';
             $ch = curl_init('https://softonauts.com/clients/Android/users-login');
             $header=[  'Authorization:' . $apiKey,
                        ];
             curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
             curl_setopt($ch, CURLOPT_POST, 1);
             curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
             curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
             $res=curl_exec($ch);
 
             $response=json_decode($res, true);

             curl_close($ch);
             if (!empty($res)&&$response['message']=='success') {
                 $sessdata = array(
                'userid'  => $response['data']['id'],
                'email'     => $response['data']['email']
                );
                 
                 ///set session after login
                 $this->session->set_userdata('user_id', $response['data']['id']);

                 redirect('Dashboard_controller/dashboard');
             } else {
                 $this->login_view();
             }
         }
     }
}