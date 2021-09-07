
<?php

try {

	$pdo = new PDO("mysql:dbname=sist_boquinha;host=localhost","root","");
} catch (Exception $e){

	echo "ERRO NA CONEXÃO  ".$e;}




//OUTRA MANEIRA DE REALIZAR A COMUNICAÇÃO SEM O PDO.

class db{

                        //Quando for web usar os campos comentados e vice versa
	//host
	private $host = 'localhost'; //
	//usuario
	private $usuario ='root'; //tecnob39_sist_boquinha_adm  
	//senha
	private $senha = ''; //bli@Q8~H$W_Q  
	//banco de dados
	private $database = 'sist_boquinha'; //tecnob39_sist_boquinha 

	//OBSERVAÇÃO IMPORTANTE, de acordo com ATUALIZAÇÃO php7 
	// Deve-se usat mysql+"i" :)


	public function conecta_mysqli(){
		//criando a conexão
		$con = mysqli_connect( $this->host,  $this->usuario,  $this->senha,  $this->database);
        //charset de comunicação entre aplicação e banco de dados
		mysqli_set_charset($con,'utf8');


		//verificar se há erro de conexão com retorno de uma função
		if (mysqli_connect_errno()) {
			echo 'Houve um erro na conxão do banco de dados: '. mysqli_connect_error();
		}
		return $con;
	}
} 

?> 