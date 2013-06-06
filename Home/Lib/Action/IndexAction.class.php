<?php
class IndexAction extends Action {
    public function index(){
    	$this->display();
    	$this->redirect("__GROUP__/Blog/index");
	}
}