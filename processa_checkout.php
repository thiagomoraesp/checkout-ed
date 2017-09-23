<?php


/*Sim eu sei que o código está
 desnescessáriamente grande mas
 não posso ir além do que já
mostrei em sala de aula*/
$valor_produto1 = 0;
switch($_POST['selecao_produto_1'])
{
  case 'banana':
    $valor_produto1=5.66;
    break;
  case 'batata':
    $valor_produto1=3;
    break;
  case 'maca':
    $valor_produto1=1.6;
    break;
  case 'Uva':
    $valor_produto1=2.1;
    break;
  case 'abacaxi':
    $valor_produto1=1.6;
    break;
  case 'melancia':
    $valor_produto1=1;
    break;
}

switch($_POST['selecao_produto_2'])
{
  case 'banana':
    $valor_produto2=5.66;
    break;
  case 'batata':
    $valor_produto2=3;
    break;
  case 'maca':
    $valor_produto2=1.6;
    break;
  case 'Uva':
    $valor_produto2=2.1;
    break;
  case 'abacaxi':
    $valor_produto2=1.6;
    break;
  case 'melancia':
    $valor_produto2=1;
    break;
}

switch($_POST['selecao_produto_3'])
{
  case 'banana':
    $valor_produto3=5.66;
    break;
  case 'batata':
    $valor_produto3=3;
    break;
  case 'maca':
    $valor_produto3=1.6;
    break;
  case 'Uva':
    $valor_produto3=2.1;
    break;
  case 'abacaxi':
    $valor_produto3=1.6;
    break;
  case 'melancia':
    $valor_produto3=1;
    break;
}

switch($_POST['selecao_produto_4'])
{
  case 'banana':
    $valor_produto4=5.66;
    break;
  case 'batata':
    $valor_produto4=3;
    break;
  case 'maca':
    $valor_produto4=1.6;
    break;
  case 'Uva':
    $valor_produto4=2.1;
    break;
  case 'abacaxi':
    $valor_produto4=1.6;
    break;
  case 'melancia':
    $valor_produto4=1;
    break;
}

$total_produto_1 = $valor_produto1*$_POST['quantidade_produto_1'];
$total_produto_2 = $valor_produto2*$_POST['quantidade_produto_2'];
$total_produto_3 = $valor_produto3*$_POST['quantidade_produto_3'];
$total_produto_4 = $valor_produto4*$_POST['quantidade_produto_4'];

echo $_POST['selecao_produto_1'].'- R$'.$valor_produto1.'- x'.$_POST['quantidade_produto_1'].' - R$'.$total_produto_1;
echo "<br />";
echo $_POST['selecao_produto_2'].'- R$'.$valor_produto2.'- x'.$_POST['quantidade_produto_2'].' - R$'.$total_produto_2;
echo "<br />";
echo $_POST['selecao_produto_3'].'- R$'.$valor_produto3.'- x'.$_POST['quantidade_produto_3'].' - R$'.$total_produto_3;
echo "<br />";
echo $_POST['selecao_produto_4'].'- R$'.$valor_produto4.'- x'.$_POST['quantidade_produto_4'].' - R$'.$total_produto_4;

$total_geral = $total_produto_4+$total_produto_3+$total_produto_2+$total_produto_1;

echo "<br />total:".$total_geral;
