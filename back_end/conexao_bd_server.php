
<?php
try {

	$pdo = new PDO("mysql:dbname=tecnob39_sist_boquinha;host=localhost","tecnob39_sist_boquinha_adm","velhooeste49");
} catch (Exception $e){

	echo "ERRO NA CONEXÃO  ".$e;}




//OUTRA MANEIRA DE REALIZAR A COMUNICAÇÃO SEM O PDO.

class db{


	//host
	private $host = 'localhost';
	//usuario
	private $usuario ='tecnob39_sist_boquinha_adm';
	//senha
	private $senha = 'velhooeste49';
	//banco de dados
	private $database = 'tecnob39_sist_boquinha';

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