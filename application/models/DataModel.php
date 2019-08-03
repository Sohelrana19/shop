<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataModel extends CI_Model{



    public function logininfo($email,$password){
        $this->db->select('*');
        $this->db->from('user_table');
		$this->db->where('email',$email);
        $this->db->where('password',$password);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
	}
    public function grtorderinfo(){
        $this->db->select('*');
        $this->db->order_by('order_id', 'desc');
        $this->db->from('order_table');
        $query_result=$this->db->get();
        $order_info=$query_result->result();
        return $order_info;
	}
    
    public function grtdueinfo(){
        $this->db->select('*');
        //  $this->db->select_sum('Total', 'Advance');
        $this->db->from('due_table');
        //  $this->db->where('dew', $dew);
        $query_result=$this->db->get();
        $order_info=$query_result->result();
        return $order_info;
    }
    
    public function getsum(){
        $sql="SELECT sum(Total) as Total FROM due_table";
        $result=$this->db->query($sql);
        return $result->row()->Total;
    }
    public function getsumdew(){
        $sql="SELECT sum(Dew) as Dew FROM due_table";
        $result=$this->db->query($sql);
        return $result->row()->Dew;
    }
    public function getcoun(){
        $sql="SELECT count(Total) as Total FROM order_table";
        $result=$this->db->query($sql);
        return $result->row()->Total;
    }


    //api admissionsetting start
	public function getsingin()
        {
    $data=array();
    $data['name']=$this->input->post('nameuser',true);
    $data['email']=$this->input->post('email',true);
    $data['password']=$this->input->post('password',true);
    $data['phonenumber']=$this->input->post('number',true);

    $this->db->order_by('id', 'desc');
    $this->db->insert('user_table',$data);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }

    }
    

    public function ordersing()
        {
    $data=array();
    $data['Date']=$this->input->post('Orderdate',true);
    $data['returndate']=$this->input->post('RetarnDate',true);
    $data['Name']=$this->input->post('CustomerName',true);
    $data['Address']=$this->input->post('CustomerAddress',true);
    $data['Phone']=$this->input->post('CustomerMobil',true);
    $data['Total']=$this->input->post('TotalAmoun',true);
    $data['Advance']=$this->input->post('TotalAdvance',true);
    $data['Dew']=$this->input->post('TotalDue',true);
    $data['days']=$this->input->post('TotalDays',true);


    $this->db->insert('order_table',$data);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }

    }


//api admissionsetting end
public function getediteitem($order_id)
        {
            $this->db->select('*');
            $this->db->from('order_table');
            $this->db->where('order_id',$order_id);
            $query_result=$this->db->get();
            $result=$query_result->row();
            return $result;

    }

    public function insertupdate()
    {
        $data=array();
        $order_id=$this->input->post('order_id',true);
        $data['Date']=$this->input->post('Orderdate',true);
        $data['returndate']=$this->input->post('RetarnDate',true);
        $data['Name']=$this->input->post('CustomerName',true);
        $data['Address']=$this->input->post('CustomerAddress',true);
        $data['Phone']=$this->input->post('CustomerMobil',true);
        $data['Total']=$this->input->post('TotalAmoun',true);
        $data['Advance']=$this->input->post('TotalAdvance',true);
        $data['Dew']=$this->input->post('TotalDue',true);
        $data['days']=$this->input->post('TotalDays',true);
        $this->db->where('order_id',$order_id);
        $this->db->update('order_table',$data);

    }
    
   public function getdeleteitem($order_id)
    {
        $this->db->where('order_id',$order_id);
        $this->db->delete('order_table');
    }



    
    public function getduelist()
        {
    $data=array();
    
    $data['Date']=$this->input->post('Orderdate',true);
    $data['CustomerName']=$this->input->post('dueCustomerName',true);
    $data['Address']=$this->input->post('CustomerAddress',true);
    $data['PhoneNumber']=$this->input->post('CustomerMobil',true);
    $data['Total']=$this->input->post('TotalAmoun',true);
    $data['Advance']=$this->input->post('TotalAdvance',true);
    $data['Dew']=$this->input->post('TotalDue',true);
    $data['Purpase']=$this->input->post('forPurpose',true);

    
    $this->db->insert('due_table',$data);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }

    }



    public function getdewediteitem($due_id)
        {
            $this->db->select('*');
            $this->db->from('due_table');
            $this->db->where('due_id', $due_id);
            $query_result=$this->db->get();
            $result=$query_result->row();
            return $result;

    }



    public function insertupdatedue()
    {
        $data=array();
        $due_id=$this->input->post('due_id',true);
        $data['Date']=$this->input->post('Orderdate',true);
        $data['CustomerName']=$this->input->post('dueCustomerName',true);
        $data['Address']=$this->input->post('CustomerAddress',true);
        $data['PhoneNumber']=$this->input->post('CustomerMobil',true);
        $data['Total']=$this->input->post('TotalAmoun',true);
        $data['Advance']=$this->input->post('TotalAdvance',true);
        $data['Dew']=$this->input->post('TotalDue',true);
        $data['Purpase']=$this->input->post('forPurpose',true);
        $this->db->where('due_id',$due_id);
        $this->db->update('due_table',$data);
        

    }
    

public function getdeletedew($due_id)
    {
        $this->db->where('due_id',$due_id);
        $this->db->delete('due_table');
    }

   
//dashbord data insert
public function getproductsave()
{
    $data=array();
    
    $data['product_price']=$this->input->post('PeoductPrice',true);
    $data['details']=$this->input->post('PeoductDetails',true);
    $data['catagory']=$this->input->post('PeoductCatagory',true);
  
    $sdata=array();
    $error="";
    $config['upload_path']          = 'uploads/';
    $config['allowed_types']        = '*';
    //$config['max_size']             = 600000;
    //$config['max_width']            = 102400;
    //$config['max_height']           = 76800;

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('productimage'))
    {
            $error =$this->upload->display_errors();
    }
    else
    {
             $sdata =$this->upload->data();
             $data['image']=$config['upload_path'].$sdata['file_name'];
     }	
     $this->db->insert('image_table', $data);
     if($this->db->affected_rows() > 0){
         return true;
     }else{
         return false;
 }
}
 public function getshowproduct()
 {
    $this->db->select('*');
    // $this->db->order_by('id', 'desc');
    $this->db->from('image_table');
    $query_result=$this->db->get();
    $order_info=$query_result->result();
    return $order_info;
 }


 public function getdeleteproduct($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('image_table');
    }

}
