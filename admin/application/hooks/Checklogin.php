<?php 

class Checklogin 
{
	private $ci ;
    
    
    public function __construct(){

       $this->ci = & get_instance();
        
    }

	public function check()
	{
		$classname = $this->ci->router->class;
		$methodname = $this->ci->router->method;
		if($this->ci->session->userdata("ss_admin_id")=='' && $methodname!="login" ){
			redirect("Admin/login");	
		}

	}

	

}

 ?>