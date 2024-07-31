<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sms extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('twilio');
    }

    public function send() {
        $to = '+91 7827539302';  // Recipient's phone number
        $message = 'Hello from CodeIgniter and Twilio!';

        if ($this->twilio->send_sms($to, $message)) {
            echo 'Message sent successfully!';
        } else {
            echo 'Failed to send message.';
        }
    }
}
