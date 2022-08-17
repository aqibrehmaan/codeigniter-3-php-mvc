<?php


class Users extends CI_Controller {

    public function show($user_id) {

        $data['results'] = $this->user_model->get_users($user_id, 'user 1');

        $this->load->view('user_view', $data);
        
    }
}

?>