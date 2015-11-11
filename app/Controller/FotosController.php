<?php

class FotosController extends AppController{

	public function admin_remove_foto($id){
		
	}

	public function admin_loadImage($id){
		$fotos = $this->Foto->find('all', array('conditions' => array('produto_id' => $id)));
		$this->set(compact('fotos'));
		$this->layout = 'ajax';
	}

}

?>