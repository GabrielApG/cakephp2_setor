<?php

class Foto extends AppModel{

	public $belongsTo = array(
		'Produto' => array(
			'className' => 'Produto',
			'foreignKey' => 'produto_id'
		)
	);

	public function beforeSave($options = array()){
		if (is_numeric(key($this->data['Foto']))) {
			$produto_id = $this->data['Foto']['produto_id'];

			foreach ($this->data['Foto'] as $key => $foto) {
				if (is_numeric($key)) {
					if (!empty($foto['tmp_name'])) {
						App::uses('upload', 'Vendor');
						
						$imagem = new upload($foto);

						if ($imagem->uploaded) {
							$imagem->resize   		= true;
							$imagem->imagem_x 		= 100;
							$imagem->imagem_ratio_y = true;
							$imagem->process('img/produtos/');

							if ($imagem->processed) {
								$_foto = array(
									'produto_id' => $produto_id,
									'arquivo' => $imagem->file_dst_name
								);

								$this->create();
								$this->save($_foto);
							} else
								throw new Exception($imagem->error);
						} else
							throw new Exception($imagem->error);
					}
				}
			}

			if (!isset($_foto))
				return false;

			$this->data['Foto'] = $_foto;
		}
	}

}

?>