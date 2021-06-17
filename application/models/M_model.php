<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_model extends CI_Model {

	function insert($table, $data)
    {
        $this->db->insert($table, $data);
    }

    function delete($table, $where)
    {
        $this->db->where($where)->delete($table);
    }

    function update($table, $where, $data)
    {
        $this->db->where($where)->update($table, $data);
    }

	function get_user_by_nip($IdUser)
    {
        return $this->db->get_where('users', ['IdUser' => $IdUser])->row();
    }

    function get_user_by_email($Email)
    {
        return $this->db->get_where('users', ['Email' => $Email])->row();
    }

    function get_users($IdUser = '')
    {
        if ($IdUser == '') {
            return $this->db->get('users')->result();
        } else {
            return $this->db->get_where('users', ['IdUser' => $IdUser])->row();
        }
    }

	function get_branch ($id = '')
	{
		if ($id == ''){
			return $this->db->get('branchs')->result();
		} else {
			return $this->db->get_where('branchs', ['IdBranch' => $id])->row();
		}
	}

	function get_visimisi ()
	{
		return $this->db->get_where('visimisi')->row();
	}

	function get_service ($id = '')
	{
		if ($id == ''){
			return $this->db->get('services')->result();
		} else {
			return $this->db->get_where('services', ['IdService' => $id])->row();
		}
	}

	function fn_service($Slug = '')
    {
        if ($Slug == '') {
            $this->db->where('Status',1);
            return $this->db->get('services')->result();
        } else {
            $this->db->where('Slug', $Slug); 
            $query = $this->db->get('services');   
            return $query->row();
        }
    }

	function get_testimonial ($id = '')
	{
		if ($id == ''){
			return $this->db->get('testimonials')->result();
		} else {
			return $this->db->get_where('testimonials', ['IdTestimonial' => $id])->row();
		}
	}

	function get_reason ($IdReason = '')
	{
		if ($IdReason == ''){
			return $this->db->get('reasons')->result();
		} else {
			return $this->db->get_where('reasons', ['IdReason' => $IdReason])->row();
		}
	}

	function get_project ($id = '')
	{
		if ($id == ''){
			return $this->db->get('projects')->result();
		} else {
			return $this->db->get_where('projects', ['IdProject' => $id])->row();
		}
	}

	function fn_project($Slug = '')
    {
        if ($Slug == '') {
            $this->db->where('Status',1);
            return $this->db->get('projects')->result();
        } else {
            $this->db->where('Slug', $Slug); 
            $query = $this->db->get('projects');   
            return $query->row();
        }
    }

	function get_projectpage ()
	{
		return $this->db->get_where('projectpages')->row();
	}


	function get_servicepage ()
	{
		return $this->db->get_where('servicepages')->row();
	}

	function get_aboutpage ()
	{
		return $this->db->get_where('aboutpages')->row();
	}

	function get_sosmed ()
	{
		return $this->db->get_where('sosmed')->row();
	}

	function get_bg ()
	{
		return $this->db->get_where('bgpages')->row();
	}

	function get_gallery ($id = '')
	{
		if ($id == ''){
			return $this->db->get('gallery')->result();
		} else {
			return $this->db->get_where('gallery', ['IdGallery' => $id])->row();
		}
	}

	function get_client ($id = '')
	{
		if ($id == ''){
			return $this->db->get('clients')->result();
		} else {
			return $this->db->get_where('clients', ['IdClient' => $id])->row();
		}
	}

	function get_slide($IdSlide = '')
    {
        if ($IdSlide == '') {
			return $this->db->get('slides')->result();
        } else {
            return $this->db->get_where('slides', ['IdSlide' => $IdSlide])->row();
        }
	}
	
	function fn_slide()
    {
        $this->db->where('Status', 1);
        return $this->db->get('slides')->result();
    }

}

/* End of file ModelName.php */
