<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
      
        $this->load->library('encryption');
        date_default_timezone_set('Asia/Kolkata');
        
        //checking session data after login
        // if (!$this->session->userdata('email')) {
        //     // do something when exist
        //     redirect('Home_controller');
        // }
    }

      public function kit_request()
      {
          $data=array();
          $user_id='96';
          $data = array(
           'user_id' => $user_id,
             );
          $apiKey='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MX0.By2r2BwheJsbrEGrHOaMQwrrmlY7wHVFzWtuEmv39fM';
          $ch = curl_init('https://softonauts.com/clients/Android/get-drop-in-navigator-list');
          $header=[  'Authorization:' . $apiKey,
                     ];
          curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
          curl_setopt($ch, CURLOPT_POST, 1);
          //   curl_setopt($ch, CURLOPT_POSTFIELDS, "first_name=$Name&email=$Email&password=md5($Password)&last_name=$last_name");
          curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
          $data['nv_list']=json_decode(curl_exec($ch))->drop_in_navigator_list;
          $data['size']=sizeof(json_decode(curl_exec($ch))->drop_in_navigator_list);
          curl_close($ch);
          $this->load->view('Kit-request', $data);
      }

      
           public function appoint()
           {
               //2nd curl call for get time slots
               $location_id='16';
               $data = array(
                'location_id' => $location_id,
   
                  );
               $apiKey='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MX0.By2r2BwheJsbrEGrHOaMQwrrmlY7wHVFzWtuEmv39fM';
               $ch = curl_init('https://softonauts.com/clients/Android/get-time-slots');
               $header=[  'Authorization:' . $apiKey,
                          ];
               curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
               curl_setopt($ch, CURLOPT_POST, 1);
               curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
               curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
               $data1['timeslot']=curl_exec($ch);

               $this->load->view('appointment-details');
           }

            public function dashboard()
            {
                $data=array();
                $user_id='96';
                $data = array(
                'user_id' => $user_id
                    );
                $apiKey='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MX0.By2r2BwheJsbrEGrHOaMQwrrmlY7wHVFzWtuEmv39fM';
                $ch = curl_init('https://softonauts.com/clients/Android/get-drop-in-navigator-list');
                $header=[  'Authorization:' . $apiKey,
                            ];
                curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $data['nv_list']=json_decode(curl_exec($ch))->drop_in_navigator_list;
                $data['size']=sizeof(json_decode(curl_exec($ch))->drop_in_navigator_list);
                curl_close($ch);
                $this->load->view('Kit-request', $data);
            }




        public function get_time()
        {
            $status=1;
            $location_id='16';
            $data = array(
            'location_id' => $location_id,
    
                );
            $apiKey='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MX0.By2r2BwheJsbrEGrHOaMQwrrmlY7wHVFzWtuEmv39fM';
            $ch = curl_init('https://softonauts.com/clients/Android/get-time-slots');
            $header=[  'Authorization:' . $apiKey,
                        ];
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $res=curl_exec($ch);
            curl_close($ch);
            if ($status==1) {
                // $this->login();
                redirect('login');
            }
        }
}

/* End of file Dashboard_controller.php */
