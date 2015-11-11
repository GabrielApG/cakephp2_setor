<?php 

class Setor extends AppModel{


	//relacionamento com a Classe Banner
	public $hasMany = array(
		'setores_banners' => array(
			'className' => 'Banner',    //tem muitos da Model Banner
			'foreignKey' => 'setor_id'  // Pode passar outros parametros
		)
	);


										//primary implementado apenas para corrigir erro alerta do Cake
	public function afterFind($results, $primary = false)
	{

		if($results){

			foreach ($results as $key => $result) {
				
				if(isset($result['Setor']['created']))
					$results[$key]['Setor']['created'] = date('d/m/Y H:m:s', strtotime($result['Setor']['created']));
			
			if(isset($result['Setor']['modified']))
					$results[$key]['Setor']['modified'] = date('d/m/Y H:m:s', strtotime($result['Setor']['modified']));
			
			}
 
		}

		return $results;
	}
	
}

 ?>