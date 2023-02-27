<?php
class Login_model extends CI_Model
{

    public function login($username, $password)
    {
      $query = $this->db->get_where('users', array('email' => $username, 'password' => md5($password)));
      $user = $query->row();

      if ($user) {
          $this->session->set_userdata('user_id', $user->id);
          $this->session->set_userdata('logged_in', true);
          return true;
      } else {
          return false;
      }
    }
    public function validate($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $result = $this->db->get('users', 1);
        return $result;
    }

}
