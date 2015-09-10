<?php
class Client extends CI_Controller {

  public function show($id) {
    $data['glump'] = ['meh', 'more meh'];
    $this->load->view('client', $data);
  }
}
