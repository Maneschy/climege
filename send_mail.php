<?php
if (isset($_POST['BTEnvia'])){
 
        //Variaveis de POST, Alterar para ajustar com os campos do formulário
        //====================================================
        $nome = $_POST['nome']; // o nome que está entre colchetes é o nome da variável que consta no campo name do html so formulário... sacou ??
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $mensagem = $_POST['mensagem'];
        $subject = $_POST['assunto'];
        $dominio = "www.seudominio.com.br";
        //====================================================
 
 
        //REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
        //====================================================
        $email_remetente = "clinicaclimege@clinicaclimege.com"; // deve ser um email do dominio e que já tenha sido criado , ou seja um email VÁLIDO  .. muito importante
        //====================================================
 
 
        //Configurações do email, ajustar conforme necessidade
        //====================================================
        $email_destinatario = "igor@maneschy.com"; // qualquer email pode receber os dados
        $email_reply = "$email";
        $email_assunto = "$subject";
        //====================================================
 
 
        //Monta o Corpo da Mensagem
        // AQUI VC PODE CONFIGURAR A REAPOSTA PARA CONTER HTML COMO SEGUE NO EXEMPLO:
        // $email_conteudo = " 
        // <html>
       // <head>
       // <meta charset="UTF-8">
       // <title>Title of the document</title>
       // </head>
       // <body>
       // aqui vai a formatação que vc quiser .
       // $nome ;
       // $mensagem;
       // etc ...
       // </body>
       //  </html>   
        //"
        //====================================================
        $email_conteudo = "Nome = $nome \n";
        $email_conteudo .= "Email = $email \n";
        $email_conteudo .=  "Telefone = $telefone \n";
		$email_conteudo .=  "Assunto = $subject \n";
        $email_conteudo .=  "Mensagem = $mensagem \n";
        //====================================================


        //RESPOSTA AUTOMÁTICA
        //===================================================
        $email_resposta = "Obrigado $nome pelo contato , em breve retornaremos o email. $dominio ";
        $header_resposta = "From: $email_remetente";
        //===================================================
 
        //Seta os Headers (Alerar somente caso necessario)
        //====================================================
        $email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Subject: $email_assunto","Return-Path:  $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
        //====================================================
 
 
        //Enviando o email
        //====================================================
        if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){
                mail ($email, "Obrigado pelo contato, ", nl2br($email_resposta), $header_resposta); // essa linha dispara o email de resposta automática
                $response = "E-Mail enviado com sucesso!"; 
        }
        else{
                $response = "Falha no envio do E-Mail!";
        }
        //====================================================
}