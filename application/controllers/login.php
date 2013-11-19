<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index() {

        $this->load->helper('url');

        $data = array();
        $data['base_url'] = base_url();
        $this->load->view('login', $data);
    }

    public function checkin() {

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if ($username != '' && $password != '') {
            $this->db->from('admin');
            $this->db->where(array('username' => $username, 'password' => $password));
            $this->db->limit(1);
            $query = $this->db->get();

            if ($query->num_rows() > 0) {

                foreach ($query->result() as $row) {

                    if ($row->id > 0) {

//                        $cookie = $this->load->helper('cookie');
//
//                        $cookie_data = array(
//                            'name' => 'pb_admin',
//                            'value' => 'The Value',
//                            'expire' => '86500',
//                            //'domain' => '.some-domain.com',
//                            'path' => '/',
//                                //'prefix' => 'myprefix_',
//                                //'secure' => TRUE
//                        );
//
//                        $cookie->set_cookie($cookie_data);

                                
                    }
                }
            //    echo 'login';
                header('location: /index.php/main');
                
            } else {
                header('location: /index.php/main');
                echo ' 登录失败 ';
            }
        }
    }

}

