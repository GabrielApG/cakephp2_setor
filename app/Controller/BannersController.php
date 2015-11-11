<?php

class BannersController extends AppController{

	public function admin_index(){
		//$setores = $this->Setor->find('all');
		$this->paginate = array('limit' => 10);
		$banners = $this->Paginate();

		$this->set(compact('banners'));
	}

	public function admin_view($id){
		if ($this->request->is('get') && is_numeric($id))
			$this->set('banner', $this->Banner->read(null, $id));
		else
			$this->redirect($this->referer());
	}

	public function admin_add(){
		if ($this->request->is('post')) {
			try {
				if ($this->Banner->save($this->data)) {
					$this->Session->setFlash('Banner salvo com sucesso!');
					$this->request->data = array();
				} else
					throw new Exception('Falha ao tentar salvar o banner!');
			} catch (Exception $e) {
				$this->Session->setFlash($e->getMessage());
			}
		}

		$this->set('setores', $this->Banner->Setor->find('list', array('fields' => array('id','setor'))));
	}

	public function admin_edit($id){
		if ($this->request->is('get') && is_numeric($id))
			$this->request->data = $this->Banner->read(null, $id);

		if ($this->request->is('post') || $this->request->is('put')) {
			try {
				if ($this->Banner->save($this->data)) {
					$this->Session->setFlash('Banner salvo com sucesso!');
					$this->redirect(array('action' => 'index'));
				} else
					throw new Exception('Falha ao tentar salvar o banner!');
			} catch (Exception $e) {
				$this->Session->setFlash($e->getMessage());
			}
		}

		$this->set('setores', $this->Banner->Setor->find('list', array('fields' => array('id','setor'))));
	}

	public function admin_remover($id){
		if ($this->request->is('get')) {
			try {
				if ($this->Banner->delete($id))
					$this->Session->setFlash('Banner deletado com sucesso!');
				else
					throw new Exception('Banner não pode ser deletado!');
			} catch (Exception $e) {
				$this->Session->setFlash($e->getMessage());
			}
		}

		$this->redirect(array('action' => 'index'));
	}

}

?>