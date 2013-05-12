<?php
class IndexAction extends Action {
	public function index(){
		if(!isset($_SESSION[C('USER_AUTH_KEY')])){
			$this->redirect('__URL__/Public/login');
		}else{
			$this->redirect('__URL__/Blog/index');
		}
    }
}

?>