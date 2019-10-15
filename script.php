<?php

/**
 * Created by phpstorm.
 * User: Jaguaraci
 * Date: 14/10/2019
 * Time: 20:52
 */

 session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome))
{$_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio por favor preencha-o novamente';
    header(string'location:index.php');
}

if(strlen($nome) < 3)
{$_SESSION['mensagem-de-erro'] = 'O nome não pode ter menos de três caracteres';
    header( string: 'location: index.php');
}

if(strlen($nome) > 40)
{$_SESSION['mensagem-de-erro'] = 'O nome não pode ser ter mais de quarenta caracteres';
    header( string: 'location: index.php');
    }

if(!is_numeric($idade))
{$_SESSION['mensagem-de-erro'] = 'Informe um número para idade';
    header( string: 'location: index.php');
    }

if($idade >= 6 && $idade <=12)

{for($i = 0; $i <= count ($categorias); $i++)

{if($categorias[$i] == 'infantil')
echo "O nadador ",$nome, "compete na categoria infantil",$categorias[$i];
}}

else if($idade >= 13 && $idade <=18)

{for($i = 0; $i <= count ($categorias); $i++)
{if($categorias[$i] == 'adolescente')
echo "O nadador ",$nome, "compete na categoria adolescente";
}}

else if($idade >= 19 && $idade <=100)

{for($i = 0; $i <= count($categorias); $i++)
{if($categorias[$i] == 'adulto')
echo "O nadador ",$nome, " compete na categoria adulto";
}}

?>