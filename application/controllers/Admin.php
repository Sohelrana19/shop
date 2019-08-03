<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


//dashbord
    public function dashbord_longin()
	{
		$data=array();
		$data['productdp']=$this->DataModel->getshowproduct();
		$data['sum']=$this->DataModel->getsum();
		$data['sumdew']=$this->DataModel->getsumdew();
		$data['count']=$this->DataModel->getcoun();
		$data['main_theme_contant']=$this->load->view('page/dashbord',$data,true);
		$this->load->view('maintheme',$data);
	}
//product

public function product_longin()
{
	$data=array();
	$data['main_theme_contant']=$this->load->view('page/product',$data,true);
	$this->load->view('maintheme',$data);
}

//productlist

public function productlist_longin()
{
	$data=array();
	$data['productdp']=$this->DataModel->getshowproduct();
	$data['main_theme_contant']=$this->load->view('page/productlist',$data,true);
	$this->load->view('maintheme',$data);
}



//loging
	public function admin_longin()
	{
		$email=$this->input->post('useremail',true);
		$password=$this->input->post('password',true);
		$this->load->model('DataModel','m');
		$result=$this->m->logininfo($email,$password);
		$sdata=array();
		if($result){
			
			$sdata['id']=$result->$id;
			$sdata['email']=$result->$email;
			$sdata['password']=$result->$password;
			$this->session->set_userdata($sdata);
			redirect('dashbord');
		}else{
			$sdata['message']='Your email or Password is incorrect';
			$this->session->set_userdata($sdata);
			redirect('http://localhost/Dpcomputure/');
		}

	}

//order page
  public function order_longin()
	{
		$data=array();
		$data['order']=$this->DataModel->grtorderinfo();
		$data['main_theme_contant']=$this->load->view('page/orderlist',$data,true);
		$this->load->view('maintheme',$data);
	}
//due page
	public function due_longin()
	{
		$data=array();
		$data['duelist']=$this->DataModel->grtdueinfo();
		$data['sum']=$this->DataModel->getsum();
		$data['sumdew']=$this->DataModel->getsumdew();
		$data['main_theme_contant']=$this->load->view('page/duelist',$data,true);
		$this->load->view('maintheme',$data);
	}

	//singin page
	public function singinpage()
	
	{
		$data=array();
		$this->load->model('DataModel','m');
		$data['blogs']=$this->m->getsingin();
		$this->load->view('welcome_message');
		redirect('http://localhost/Dpcomputure/');
	}


//order page
	public function orderlogin()
	
	{
		$data=array();
		$this->DataModel->ordersing();
		redirect('orderlist');
	}
	
	
	public function orderedite($order_id)
	
	{
		$data=array();
		$data['orderbyid']=$this->DataModel->getediteitem($order_id);
		$data['main_theme_contant']=$this->load->view('page/edit',$data,true);
		$this->load->view('maintheme',$data);
	}


	
	public function getupdateedit(){
		$this->DataModel->insertupdate();
		redirect('orderlist');
	}
	

	public function deletorder($order_id)
	
	{
		$this->DataModel->getdeleteitem($order_id);
		redirect('orderlist');
	}
//order page end
	


	public function duelistinsert()
	
	{
		$this->DataModel->getduelist();
		redirect('duelist');
		
	}


	public function dewedite($due_id)
	
	{
		$data=array();
		$data['dweeditbyid']=$this->DataModel->getdewediteitem($due_id);
		$data['main_theme_contant']=$this->load->view('page/dueedit',$data,true);
		$this->load->view('maintheme',$data);
	}

	public function updateduelist(){
		$this->DataModel->insertupdatedue();
		redirect('duelist');
	}
	

	public function deletdwe($due_id)
	
	{
		$this->DataModel->getdeletedew($due_id);
		redirect('duelist');
	}

	//dashbord
	public function getproductinsert(){

		$data=$this->DataModel->getproductsave();
		$sdata=array();
		$sdata['messeage']='image_added';
		$this->session->set_userdata($sdata);
		redirect('productlist');
	}

	public function deletproduct($id)
	
	{
		$this->DataModel->getdeleteproduct($id);
		redirect('productlist');
	}

}
