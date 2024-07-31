<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load the Send_mail library
        $this->load->library('send_mail');
    }

    public function send_email() {
        $to = 'recipient_email@domain.com';
        $subject = 'Test Email';
        $body = 'This is a test email body <b>in bold</b>';

        $result = $this->send_mail->sendMail($to, $subject, $body);
        echo $result;
    }
}
?>
