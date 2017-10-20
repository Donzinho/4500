<?php
require_once(dirname(__FILE__).'/dados/alunos.php');
# funções de gerenciamento de aluno
# e controle de matriculas

// Função Get Aluno
echo("<pre>");
#print_r($alunos);
function buscaAluno($campo, $valor, $array){
	$aluno = array();
	foreach($array as $id => $dados){
		
		if($dados[$campo] == $valor ) {
			$aluno = $dados;
		}
	}
	return $aluno;
}


// Função Get Matricula


$resp =  buscaAluno('name','Heath Ledger',$alunos);

print_r($resp);

