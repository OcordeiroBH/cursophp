<?php 
	
$hierarquia = array(
	array(
		'nome_cargo' => 'CEO',
		'subordinados' => array(
			//inicio diretor comercial
			array(
			'nome_cargo' => 'Diretor comercial',
			'subordinados' => array(
				array(
				//inicio gerente de vendas
				'nome_cargo' => 'Gerente de vendas'
				)
				//final gerente de vendas
							)
			),
			//final diretor comercial
			array(
			//inicio diretor financeiro
			'nome_cargo' => 'Diretor Financeiro',
			'subordinados' => array(
				//inicio gerente de pagamento
				array('nome_cargo' => 'Gerente de pagamentos',
				'subordinados' => array(
					array('nome_cargo' => 'Supervisor de contas a pagar'
					)
					
				)
				
					)
				//final gerente de pagamentos
									)
			)
			//final diretor financeiro	
		)
	)
);

function exibe($cargos){

	$html = "<ul>";

	foreach ($cargos as $cargo){

		$html .= "<li>";

		$html .= $cargo['nome_cargo']; 

		i (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){

			$html .= exibe($cargo['subordinados']);
		}

		$html .= "</li>";
	}
	
	$html .= "</ul>";

	return $html; 
}

echo exibe($hierarquia);


?>