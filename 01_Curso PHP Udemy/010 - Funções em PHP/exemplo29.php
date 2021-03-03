<?php

echo "<h1>Funções Recursivas - (Quando uma função chama a si mesma):</h1>";
echo "<h3>Usar as funções recursivas somente em casos excepcionais, quando não der para aplicar for, foreach, while...</h3>";

// Criação de uma váriável que será um array bi-dimensional: 
$hierarquia = array(

				array(
			// Início hierarquia 'CEO'		
			'nome_cargo'=>'CEO',
			'subordinados'=>array(
			// Início diretor Comercial	
					array(
						'nome_cargo'=>'Diretor Comercial',
						'subordinados'=> array(
							// Início Gerente de Vendas
							array(
								'nome_cargo'=>'Gerente de Vendas'
								)
								// Término Gerente de Vendas
							)

						),
						// Término Diretor Comercial
						// Início Diretor Financeiro 
					array(
						'nome_cargo'=>'Diretor Financeiro',
						'subordinados'=> array(
						// Início Gerente Financeiro
							array(
							'nome_cargo'=>'Gerente de Contas a Pagar',
							'subordinados'=> array(
							// Início Supervisor Financeiro
								array(
									'nome_cargo'=>'Supervisor de Contas'	
									)
								// Término Supervisor de Contas
								)

							),	
						// Término Gerente de Contas a Pagar
						// Início Gerente de Compras
						array(
							'nome_cargo'=>'Gerente de Compras',
							'subordinados'=> array(
							// Início Supervisor de Suprimentos
								array(
									'nome_cargo'=>'Supervisor de Suprimentos'
								)	
							// Término Supervisor de Suprimentos	
							)
						)
						// Término Gerente de Compras	
						)
					
					),
						// Término Diretor Financeiro	
						// Início Diretor 
				)
				
			)		

		);


function exibe($cargos){

// Criação da estrutura de listas em html com a váriável $html.
$html = '<ul>';

foreach ($cargos as $cargo) {
	
	$html .= '<li>';

	$html .= $cargo['nome_cargo'];
	
// Isset para percorrer dentro de $cargo e verificar se existe 'subordinados' e saber se existe valor em subordinados.
	if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){

		$html .= exibe($cargo['subordinados']);

	}

	$html .= '</li>';

}

$html .= '</ul>';
return $html;

}

echo exibe($hierarquia);

echo "<br><hr>";
///////////////////////////////////////////////////////////////////////////////////////////
echo "<br><hr>";

?>