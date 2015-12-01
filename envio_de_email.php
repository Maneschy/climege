<?php
include "send_mail.php";
?>
 
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>

<body>
<!-- ESSA LINHA ABAIXO , A PARTE EM PHP É O QUE IMPRIME A MENSSAGEM DE SUCESSO ou erro , BASTA ADICIONALA DETRO DE UMA DIV OU ENTRE UMA TAG COMO TÁ AI QUE FUNCIONA. -->
<h3 style="color:#FF6633;"><?php if (isset($response)){ echo $response; }?></h3> 

<form action="<? $PHP_SELF; ?>" method="POST">
    <p>
        Nome:<br />
        <input type="text" size="30" name="nome">
    </p>
 
    <p>
        E-mail:<br />
        <input type="text" size="30" name="email">
    </p>
 
    <p>
        Telefone:<br />
        <input type="text" size="35" name="telefone">
    </p>
    <p>
        <label for="assunto">ASSUNTO: </label>
        <select name="assunto">                                
            <option value="atendimento">Atendimento</option>
            <option value="estetica">Medicina Estética</option>
            <option value="geriatrica">Medicina Geriátrica</option>
            <option value="plastica">Cirurgia Plástica</option>
        </select>
    </p>
 
    <p>
        Mensagem:<br />
        <input type="text" size="35" name="mensagem">
    </p>
 
    <p>
        <input type="submit" name="BTEnvia" value="Enviar">
        <input type="reset" name="BTApaga" value="Apagar">
    </p>
</body>

</html> 
