<?php

class SetoresController extends AppController
{

	public function admin_index(){

		//$setores = $this->Setor->find('all');
		$this->paginate = array('limit' => 10);
		$setores = $this->Paginate();

		$this->set(compact('setores'));

	}
	
	public function admin_add(){
		
		//POde ser
		// $this->request->isPost();
		if($this->request->is('post')){
			//Cria um Setor já tem implementado o save no Cake
			if($this->Setor->save($this->request->data)){
				$this->Session->setFlash('O setor foi salvo com sucesso!');
				$this->request->data = array();
			}else{
				$this->Session->setFlash('O setor não foi salvo!');
			}
		}
	}

	public function admin_edit($id) {
		if ($this->request->is('get') && is_numeric($id))
			$this->request->data = $this->Setor->read(null, $id);

		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Setor->save($this->data)) {
				$this->Session->setFlash('Setor salvo com sucesso!');
				$this->redirect(array('action' => 'index'));
			} else
				$this->Session->setFlash('Setor não foi salvo!');
		}
	}

	public function admin_remover($id){
		if($this->request->is('get')){
				if($this->Setor->delete($id)){
					$this->Session->setFlash('Setor deletado com sucesso!');
			}else{
				$this->Session->setFlash('Setor não foi deletado!');
			}

			//Pode usar tbm o referer(); que retonará para a Url que enviou este método;
			//$this->referer();
			$this->redirect(array('action' => 'index'));
		}
	}

	public function admin_view($id){
		if($this->request->is('get') && is_numeric($id)){
			$this->set('setor', $this->Setor->read(null, $id));

		}else{
			$this->redirect($this->referer());
		}
	}

}

?>