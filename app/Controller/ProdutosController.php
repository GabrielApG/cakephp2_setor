<?php 

/**
* 
*/
class ProdutosController extends AppController
{

	public function admin_index(){
		$this->paginate = array('limit' => 10);
		$this->set('produtos', $this->Paginate());
	}

	public function admin_view($id)
	{
		if($this->request->is('get') && is_numeric($id)){
			$this->set('produto', $this->Produto->read(null, $id));

		}else{
			$this->redirect($this->referer());
		}
	}

	public function admin_edit($id) {
		if ($this->request->is('get') && is_numeric($id))
			$this->request->data = $this->Produto->read(null, $id);

		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Produto->save($this->data)) {
				$this->Session->setFlash('Produto salvo com sucesso!');
				$this->redirect(array('action' => 'index'));
			} else
				$this->Session->setFlash('Falha ao tentar salvar o produto!');
		}

		$categorias = $this->Produto->Categoria->find('list', array('fields' => array('id','nome')));
		$this->set(compact('categorias'));
	}

	public function admin_remover($id)
	{
		if ($this->request->is('get')) {
			try {
				if ($this->Produto->delete($id))
					$this->Session->setFlash('Produto deletado com sucesso!');
				else
					throw new Exception('Produto não pode ser deletado!');
			} catch (Exception $e) {
				$this->Session->setFlash($e->getMessage());
			}
		}

		$this->redirect(array('action' => 'index'));

	}
	
	public function admin_add()
	{
		if($this->request->is('post')){
			if($this->Produto->save($this->data)){
				$this->Session->setFlash('Produto Salvo com Sucesso!');
				$this->request->data = array();
			}else{
				$this->Session->setFlash('Não foi possivel salvar o Produto.');
			}
		}
		
		$categorias = $this->Produto->Categoria->find('list', array('fields' => array('id','nome')));
		$this->set(compact('categorias'));
	}	



}
 ?>