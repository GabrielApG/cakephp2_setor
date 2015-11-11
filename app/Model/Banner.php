<?php 


class Banner extends AppModel
{
	//Relacionamento entre Banner e Setor
	public $belongsTo = array(
		'Setor' => array(
			'className' => 'Setor',
			'foreignKey' => 'setor_id'
		)
	);


	public function beforeSave($options = array()){
		if (!empty($this->data['Banner']['arquivo']['tmp_name'])) {

			
			App::uses('upload', 'Vendor');

			$imagem = new upload($this->data['Banner']['arquivo']);

			if ($imagem->uploaded) {
				
				$imagem->process('img/banners/');

				if ($imagem->processed)
					$this->data['Banner']['arquivo'] = $imagem->file_dst_name;
				else
					throw new Exception($imagem->error);
			} else
				throw new Exception($imagem->error);
		} elseif (isset($this->data['Banner']['id'])) {
			$banner = $this->findById($this->data['Banner']['id']);
			$this->data['Banner']['arquivo'] = $banner['Banner']['arquivo'];
		} else
			throw new Exception('Nenhum arquivo foi enviado!');
	}


	public function beforeDelete($cascade = true) {
		$this->read();
		
		if (file_exists(APP . WEBROOT_DIR . DS . 'img' . DS . 'banners' . DS . $this->data['Banner']['arquivo'])) {
			if (!@unlink(APP . WEBROOT_DIR . DS . 'img' . DS . 'banners' . DS . $this->data['Banner']['arquivo']))
				throw new Exception('Falha ao deletar o arquivo!');
		}
	}
	
}
 ?>