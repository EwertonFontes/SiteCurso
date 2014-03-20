<?php

/*
 #Via o metodo POST obtem os dados, preenchidos no formulario, e coloca eles em cada objeto
 
 #Ex:
 #No campo texto preenchido o nome do aluno : João;
 #chama-se $nomeAluno = $_POST['nomeAluno'];
 
 #Onde 'nomeAluno' é o nome dado no HTML
 #<input type="text" id="nameAluno" name="nomeAluno" />
 
 #Apos a variavel $nomeAluno receber o $_POST['nomeAluno']
 #ela passara ter o valor do campo preenchido,
 
 #se o comando echo $nomeAluno o valor apresentado será João;
 
*/

$nomeAluno = $_POST['nomeAluno'];
$cpf = $_POST['cpf'];
$emailAluno = $_POST['emailAluno'];
$ddd = $_POST['DDD'];
$telefone = $_POST['telefone'];
$dataNascimento = $_POST['dataNascimento'];

$emaildestinatario = 'ewerton.p.fontes@gmail.com';
$assunto           = 'Novo Aluno Cadastrado';
 
/* 
  #Montando a mensagem a ser enviada no corpo do e-mail. 
*/

$mensagemHTML = '<P>FORMULARIO PREENCHIDO</P>
<p><b>Nome do Aluno:</b> '.$nomeAluno.'
<p><b>CPF:</b> '.$cpf.'
<p><b>Data de Nascimento:</b> '.$dataNascimento.'
<p><b>Email Aluno:</b> '.$emailAluno.'
<p><b>Telefone:</b> ('.$DDD.') - '.$telefone.'
<hr>';


/* 
 #O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
 #O return-path deve ser ser o mesmo e-mail do remetente.
*/ 
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $emailAluno\r\n"; // remetente
$headers .= "Return-Path: $emaildestinatario \r\n"; // return-path
$envio = mail($emaildestinatario, $assunto, $mensagemHTML, $headers); 

/*
 #Se a mensagem for enviada, direciona para a proxima pagina;
*/ 
if($envio)
 echo "<script>location.href='curso-alunos.html'</script>";    
?>
