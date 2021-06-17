<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model {

	function cek_user($IdUser)
    {
        $this->db->where('IdUser', $IdUser);
        return $this->db->get('Users')->row();
    }

}

/* End of file M_auth.php */
