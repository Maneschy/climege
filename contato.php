<?php
///  NUNCA MAIS PERDE ISSO NA TUA VIDA ... SÓ ADAPTAR A QUALQUER FORMULÁRIO E LAY OUT QUE VAI FUNCINAR!!!!!!

if (isset($_POST['BTEnvia'])){
 
        //Variaveis de POST, Alterar para ajustar com os campos do formulário
        //====================================================
        $nome = $_POST['nome']; // o nome que está entre colchetes é o nome da variável que consta no campo name do html so formulário... sacou ??
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $mensagem = $_POST['mensagem'];
        $subject = $_POST['assunto'];
        $dominio = "www.clinicaclimege.com.br";
        //====================================================
 
 
        //REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
        //====================================================
        $email_remetente = "clinicaclimege@clinicaclimege.com"; // deve ser um email do dominio e que já tenha sido criado , ou seja um email VÁLIDO  .. muito importante
        //====================================================
 
 
        //Configurações do email, ajustar conforme necessidade
        //====================================================
        $email_destinatario = "dessana.upper@gmail.com, thiago@maneschy.com"; // qualquer email pode receber os dados
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
?>
<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
	
<head>
		<!--charset-->
		<meta charset="UTF-8">
		
		<!--Add your page title -->
		<title>Clinica Climege :: Corpo Clínico</title>
		
		<!--Add meta description and Auther -->
		<meta name="description" content ="">
		<meta name="author" content ="">
		 
		<!--favicon -->
		<link rel="shortcut icon" href="favicon.ico">	
			
		<!--iOS/android/handheld specific -->	
		<link rel="apple-touch-icon" href="apple-touch-icon.png">			
		<meta name="viewport" content="width=device-width; initial-scale=1.0">						
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		
		<!--The Main CSS file -->
		<link rel="stylesheet" href="css/base.css">
				
		<!--Fonts we are using @font-face **See the Documentation for more options	-->
		<link  id ="font" rel="stylesheet" href="css/fonts/google-droidsans-droidserif-georgia.css">		

		<!--And then the skin **Refer to the Documentation for more options-->
		<link  id ="skin" rel="stylesheet" href="css/skins/orange.css">

		<!-- Modernizr - mainly used to detect html5/css3/etc. features supported by the current UA -->
		<script src="js/modernizr.min.js"></script>
		
		<!--[if lt IE 9 ]>
			<link rel="stylesheet" href="css/ie.css">		
		<![endif]-->
		
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style type="text/css">
body {
	background-image: url(images/sample-content/fundo.jpg);
	background-color: #FFF;
	background-repeat: no-repeat;
	background-size: 100%;
	background-position:top;
	background-attachment: fixed;
}
</style>
</head>
	
<body id ="home">
   <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
		<!--START Main header -->
		<header>
		
					
		
		
			<!--START .container-->
			<div class = "container" >
			
				<!--START #header-logo -->
				<div id="header-logo">
					<a href="index.html">
						<img src="images/logo-climege.png" alt="Clinica Climege"/>
					</a>	
				</div>			
				<!--END/ #header-logo -->
						
				<!--START #navigation -->
				<nav id="navigation">
					<ul style="font-size:15px;">
					
						<!--START menu item -->
						<li>	
							<a href="index.html">• Home</a>
						</li>
						<!--END/ menu item -->
						
						<!--START menu item -->
						<li>
							<a href="medicina_estetica.html">• Medicina Estética</a>
                        </li>
						<!--END/ menu item -->
						
						<!--START menu item -->
						<li>
							<a href="medicina_geriatrica.html">• Medicina Geriátrica</a>
						</li>
						<!--END/ menu item -->	

						<!--START menu item -->
						<li>
							<a href="http://www.eulerfilho.com" target="_blank">• Cirurgia Plástica</a>
						</li>
						<!--END/ menu item -->	
                         <!--START menu item -->
						<li class ="current">
							<a href="#">• Contato</a>
						</li>
						<!--END/ menu item --				

						<!--START #top-bar toggle button
						<li data-toggle ="#top-bar" class="skin">
							<a href="#top-bar">+</a>
						</li>
						END/ #top-bar toggle button -->							
						
					</ul>
				</nav>
				<!--END/ #navigation-->
				
			</div>
			<!--END/ .container -->
			

			
		</header>
		<!--END/ Main header -->
	
    
	
		<!--START #page -->
		<div id="page">
        <!--START #page-header-->
				<div id ="page-header">	
					
					<!-- START page title Note : you can also use h1 , h2 etc. -  make sure you add .title and .sub -->
					<h2 class=" title" style="font-size:34px;">CONTATOS</h2>
					<!-- END/ page title -->			

				</div>	
				<!--END/ #page-header-->
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1991.9821916554295!2d-60.020313099999996!3d-3.1041179000000003!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x926c0554a050c693%3A0x7d50099f805250db!2sR.+Rio+Madeira%2C+456+-+Ns.+das+Gra%C3%A7as%2C+Manaus+-+AM%2C+69053-030!5e0!3m2!1spt-BR!2sbr!4v1411585007998" width="980" height="400" frameborder="0" style="border:0; text-align:center; margin-bottom:35px;"></iframe>
	

			<!-- START noscript alert -->
			<noscript>
				<div  class="alert">
					<h5 class="title">O Javascript está desativado em seu navegador :(</h5>
Ele é necessário para o site funcionar corretamente.	
			</div>	
			</noscript>	
			<!-- END/ noscript alert -->	
			
		
			<!--a little intro ?-->
			<p class="title-format-3 f-20">Entre em contato com a gente, retornaremos o mais breve possível. Obrigado!</p>

			
			<!--divider-->
			<hr>

			<!-- START .row -->					
			<div class="row gutter-width-1">	
				
				<!-- START GRID COLUMN-->						
				<div class="c-8-12">
				
        		<h3 style="color:#FF6633;"><?php if (isset($response)){ echo $response; }?></h3>
					<!--START  #contact-form-->
					<div id="contact-form" class="g p-r divider-right">
					

						
						

						<form action="<? $PHP_SELF; ?>" method="POST">
							
							<!--Name-->
							<p>
								<label for=" name">NOME: <span class="orange-text">*</span></label>
								<input type="text" name=" nome" placeholder="Coloque seu nome completo aqui" required ="required"/>
							</p>
							
							<!--Email Address-->
							<p>
								<label for="email">EMAIL: <span class="orange-text">*</span></label>
								<input type="email"  name="email"  placeholder="seuemail@seuemail.com" required ="required" />
							</p>
							
							<!--Telephone-->
							<p>
								<label for="telefone">TELEFONE: </label>
								<input type="text" name="telefone"/>
							</p>
							
							<!--Enquiry-->
							<p>
								<label for="assunto">ASSUNTO: </label>
								<select name="assunto">                                
									<option value="atendimento" "selected='selected'">Atendimento</option>
									<option value="estetica">Medicina Estética</option>
									<option value="geriatrica">Medicina Geriátrica</option>
									<option value="plastica">Cirurgia Plástica</option>
								</select>
							</p>
							
							<!--Message-->
						  <p>
								<label for="mensagem">MENSAGEM: <span class="orange-text">*</span></label>
								<textarea cols="45" rows="8" name="mensagem" placeholder="Sua mensagem deve ter no mínimo 20 caractéres" required ="required" data-minlength="20"></textarea>
							</p>
							
							<!--Submit button-->
							<p>
								<input class ="medium skin button fontart-x1" type="submit" name="BTEnvia" value="Enviar" />
								<!--loading spinner-->
								<span id="mail-processing" class="loading hidden"></span>								
                                
                                		
						  </p>
							<p class="italic"><span class="h2 orange-text">*</span> campos obrigatórios</p>
							
						</form>
						
					</div>						
					<!--END / #contact-form-->		

				</div>
				<!-- END/ GRID COLUMN-->	
				
				<!-- START GRID COLUMN .sidebar-->	
				<div class="sidebar c-4-12">
					<div class="g">
                            

                            
						<p class="title-format-3 gray-text m-0 ">ATENDIMENTO</p>
						<p class=" f-20 title-format-2 divider-bottom m-b-1" style="font-size:30px;"> 92.3584-5952</p>							
						
						<p class="title-format-3 gray-text m-0 ">ENDEREÇO</p>
						<address>
							<p>Rua Rio Madeira, 456, Nossa Senhora das Graças, Manaus, Amazonas CEP: 69053-100</p>
						</address>
						<a href="https://www.google.com.br/maps/place/R.+Rio+Madeira,+456+-+Ns.+das+Graças,+Manaus+-+AM,+69053-030/@-3.1041179,-60.0203131,18z/data=!3m1!4b1!4m7!1m4!3m3!1s0x926c0554a050c693:0x7d50099f805250db!2sR.+Rio+Madeira,+456+-+Ns.+das+Graças,+Manaus+-+AM,+69053-030!3b1!3m1!1s0x926c0554a050c693:0x7d50099f805250db" target="_blank" class="skin button">ver no Google Maps</a>
						<a href="https://www.google.com.br/maps/@-3.1040965,-60.0203955,3a,75y,99.18h,84.11t/data=!3m4!1e1!3m2!1s3bdqYKtqgNXcLdNdg1CyMw!2e0" target="_blank" class="skin button">ver no Google Street View</a>
					
					</div>
				</div>
				<!-- END/ GRID COLUMN .sidebar-->	
				
			</div>					
			<!-- END/ .row-->						

		</div>
		<!-- END/ #page-->	
		
<!-- START global footer -->			
		<footer>		
			<section class = "container" >

				<!-- START .row-->	
				<div class ="row gutter-width-2">
				
					<!-- START GRID COLUMN-->	
					<section class ="c-5-16">
						<!-- START .about-us widget-->
						<div class ="g about-us widget">
							
							<h3 class="title ">Clínica CLimege</h3>
                            Uma família de médicos amazonenses que trabalha com extrema dedicação em suas especialidades. Visite-nos e conheça pessoalmente os diferenciais da nossa clínica.
							
							
						</div>
						<!-- END/ .about-us widget-->
					</section>
					<!-- END/ GRID COLUMN-->
				
					<!-- START GRID COLUMN-->	
					<aside class ="c-6-16">
						<!-- START .about-us widget-->
						<div class ="g twitter widget">
							
							<h3 class="title ">Facebook</h3>
							 <div class="fb-like-box" data-href="https://www.facebook.com/clinica.climege" data-width="37.5%" data-show-faces="true" data-header="false" data-stream="true" data-show-border="true"></div>
           
							
						</div>
						<!-- END/ .about-us widget-->
					</aside>
					<!-- END/ GRID COLUMN-->

					<aside class="c-5-16">
						<!-- START .flickr widget-->
						<div class="g flickr widget animate-all">
							
							<p class="title-format-3 gray-text f-13 m-0 ">Entre em contato</p>
                            <p>Rua Rio Madeira, 456, Nossa Senhora das Graças, Manaus, Amazonas CEP: 69053-100</p>

							<p class=" f-20 fontart-3 fontface-2 divider-bottom m-b-1">Atendimento<strong> 92.3584-5952</strong></p>
	
							<p>Cadastre seu e-mail e receba novidades </p>
							
							<form>
								<input placeholder="Coloque seu e-mail"> <button class="skin button">Enviar </button>							
							</form>	
						
						</div>	
						<!-- END/ .flickr widget-->
					</aside>	
				
					
				</div>
				<!-- END/ .row -->
			
				<!-- START #copyright-note-->
				<div class ="row" id ="copyright-note">
				
					<!--START #footer-nav-->
					<div  id ="footer-nav" class="semi-left uppercase">
						<a href="index.html">Home</a> <a href="medicina_estetica.html">medicina estética</a> <a href="medicina_geriatrica.html">medicina geriátrica</a> <a href="http://www.eulerfilho.com" target="_blank">cirurgia plástica</a><a href="planos.html">planos</a> <a href="contatos.html">contatos</a> 
					</div>
					<!--END/ #footer-nav-->
					
					<!--Add your copyright here-->
					<p>Copyright &copy; 2014 | Todos os direitos reservados | by <a href="http://www.maneschy.com" target="_blank">Maneschy.com</a></p>
					
				</div>
				<!-- END/ #copyright-note -->			
			

			</section><!-- END/ container -->			
		</footer>		
		<!-- END/ global footer -->		

		
		
		<!-- START JS -->
		
			<!-- jQuery Javascript Library-->
			<script src="js/jquery.min.js"></script>
			
			<!--10 JQuery plugins -concatenated - see the documentation for more info -->
			<script src="js/essential.plugins.min.js"></script>
					
			<!--Contact form script 
			<script src="js/all/contact-form/js.js"></script>	-->
            
			<!-- Custom js for GearBox HTML template-->
			<script src="js/custom.js"></script>
		
		<!-- END/ JS -->
			
	</body>

</html>