<?php


echo "<hr><h1> Métodos Estáticos </h1><hr>"; 

class Documento{

	private $numero;

	public function setDocumento($ndoc){
		$resultado = Docoumento::validarCPF($ndoc);
		$this ->numero = $ndoc;
		if($resultado === false) {

			throw new exception("O CPF informado não é válido", 1);

		}
	}

	public function getDocumento():int{

		return $this ->numero;

	}

	public static function validarCPF($cpf):bool{

	// VERIFICA SE UM NÚMERO FOI INFORMADO:

		 if(empty($cpf)) {
        return false;
    }
 	
 	// ELIMINA POSSÍVEL MÁSCARA:

    $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;

    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
     
    // VERIFICA SE O NÚMERO DE DÍGITOS INFORMADOS É IGUAL A 11:
    
    if (strlen($cpf) != 11) {
        echo "length";
        return false;
    }

    /* VERIFICA SE NENHUMA DAS SEQUENCIAS INVALIDAS ABAIXO FOI DIGITADA
       CASO AFIMATIVO, RETORNA FALSO: */

    else if ($cpf == '00000000000' || 
        $cpf == '11111111111' || 
        $cpf == '22222222222' || 
        $cpf == '33333333333' || 
        $cpf == '44444444444' || 
        $cpf == '55555555555' || 
        $cpf == '66666666666' || 
        $cpf == '77777777777' || 
        $cpf == '88888888888' || 
        $cpf == '99999999999') {
        return false;

    // CALCULA OS DÍGITOS VERIFICADORES, PARA VERIFICAR SE O CPF É VÁLIDO:

     } else {   
         
        for ($t = 9; $t < 11; $t++) {
             
            for ($d = 0, $c = 0; $c < $t; $c++) 
            {
                $d += $cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{$c} != $d) {
                return false;
            }
        }
 
        return true;
    }

	}

}
	
$cpf = new Documento();
$cpf ->setDocumento(12345678912);

var_dump($cpf ->getDocumento());



?>