<?php
Class BlogModel extends Model{
	public function delete($id){

	}

	public function update($data){
		return $this->save($data);
	}
}
?>