<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Twilio\Rest\Client;

class Twilio {
    protected $ci;
    protected $client;
    protected $twilio_number;

    public function __construct() {
        $this->ci = &get_instance();
        $this->ci->config->load('twilio', TRUE);

        $sid = $this->ci->config->item('sid', 'twilio');
        $token = $this->ci->config->item('token', 'twilio');
        $this->twilio_number = $this->ci->config->item('twilio_number', 'twilio');

        $this->client = new Client($sid, $token);
    }

    public function send_sms($to, $message) {
        try {
            $this->client->messages->create(
                $to,
                [
                    'from' => $this->twilio_number,
                    'body' => $message
                ]
            );
            return true;
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
            return false;
        }
    }
}
