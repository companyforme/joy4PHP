<?php
class testController extends Controller{
	public function demoAction() {
		//echo "this is module:".MODULE."; and action:".ACTION;
		
		$db = new DBMysql();
		$users = $db->query("select * from user");
		echo "this is the users :<br>";
		D($users);
		exit;
		if ($this->isPost()) {
			$data = new stdClass();
			$data->name = $this->getPost("name");
			$data->pwd = $this->getPost("pwd");
			require_once WEB_ROOT.DIRECTORY_SEPARATOR."Models".DIRECTORY_SEPARATOR."User.php";
			$user = new User();
			if($user->insert($data)){
				$this->display("system:success");
			}else{
				$this->display("system:error");
			}
			
		}else{
			$this->view->title = "this is assigned in View";
			$this->display();
		}
	}
	public function __empty() {
		echo "we do not have the ".ACTION." action";
	}
}