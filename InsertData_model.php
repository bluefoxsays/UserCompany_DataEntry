<?php
/**
 * Created by PhpStorm.
 * User: janha_000
 * Date: 11/18/2018
 * Time: 1:33 PM
 */
class InsertData_model extends CI_Model
{

    public function _construct()
    {
        $this->load->database();
    }

    public function set_user(){
//place the user submitted information in an array to insert in database
        //In post is the name of the form field
        $data = array(
            'userFirst' => $this->input->post('firstN'),
            'userLast' => $this->input->post('lastN'),
            'userAdd1' => $this->input->post('userAdd1'),
            'userAdd2' => $this->input->post('userAdd2'),
            'userCity' => $this->input->post('userCity'),
            'userState' => $this->input->post('userState'),
            'userZip' => $this->input->post('userZip'),
            'userPhone' => $this->input->post('userPhone'),
            'userEmail' => $this->input->post('userEmail'),
            'compName' => $this->input->post('compName'),

        );

        return $this->db->insert('userTable', $data);
    }

    public function set_comp(){
        //Inputs the company data into the database
       $data = array (
            'compName' => $this->input->post('compName'),
            'compAdd' => $this->input->post('compAdd2'),
            'compCity' => $this->input->post('compCity'),
            'compState' => $this->input->post('compState'),
            'compZip' => $this->input->post('compZip'),
            'compPhone' => $this->input->post('compPhone'),
           'pathToInvoice' => $this->input->post('invoice'),

       );
        return $this->db->insert('companytable', $data);
    }
    public function get_userData(){
        //gets the information from the database and places it in a table on the admin page
        //allows admin to delete data



    }

}