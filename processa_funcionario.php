<html>
    <head>
      <link rel="stylesheet" type="text/css" href="folha_estilo.css">
    	<title>Preenchimento de Contratação</title>
    </head>
    
	<body>
      <div class="classe01">
      	<form name="form1" method="post" action="funcionario.php">
      	<legend>
      	<span class="numero">2</span>
      	 Registro
      	</legend>
      	<span class="enunciado">
        
      


            <hr>  
            <br>
            <br>
        </span>
      	<br>
		<span class="resposta">
		<?php


		$nome                = $_POST['nome'];

		$data                = $_POST['data'];

		$cpf                 = $_POST['cpf'];

		$email               = $_POST['email'];

		$contato             = $_POST['contato'];
		$contato             = wordwrap ($contato, 55, "<br />", true);

		$estadocivil         = $_POST['estadocivil'];

		$Sexo                = $_POST['Sexo'];

		$estado              = $_POST['estado'];

		$areas               = $_POST['areas'];
		$areas               = wordwrap ($areas, 55, "<br />", true);

		$objetivo            = $_POST['objetivo'];
		$objetivo            = wordwrap ($objetivo, 55, "<br />", true);

		$experiencia         = $_POST['experiencia'];
		$experiencia         = wordwrap ($experiencia, 55, "<br />", true);

		$formacao            = $_POST['formacao'];
		$formacao            = wordwrap ($formacao, 55, "<br />", true);

		$habilidade          = $_POST['habilidade'];
		$habilidade          = wordwrap ($habilidade, 55, "<br />", true);

		$perfilprofissional  = $_POST['perfilprofissional'];
		$perfilprofissional  = wordwrap ($perfilprofissional, 55, "<br />", true);



		echo "<b> Nome: </b>";
		echo $nome;
		echo "<br><br>";

		echo "<b> Data de Nascimento: </b>";
		echo $data;
		echo "<br><br>";
		
		echo "<b> CPF: </b>";
		echo $cpf;
		echo "<br><br>";

		echo "<b> E-mail: </b>";
		echo $email;
		echo "<br><br>";

		echo "<b> Contatos: </b>";
		echo $contato;
		echo "<br><br>";

		echo "<b> Estado Civil: </b>";
		echo $estadocivil;
		echo "<br><br>";

		echo "<b> Sexo: </b>";
		echo $Sexo;
		echo "<br><br>";

		echo "<b> Estado: </b>";
        echo $estado;
		echo "<br><br>";

		echo "<b> Áreas de Atuação: </b>";
        echo $areas;
		echo "<br><br>";
		
		echo "<b> Objetivo: </b>";
        echo $objetivo;
		echo "<br><br>";
		
		echo "<b> Experiência: </b>";
        echo $experiencia;
		echo "<br><br>";
		
		echo "<b> Formação: </b>";
        echo $formacao;
		echo "<br><br>";

		echo "<b> Habilidade: </b>";
        echo $habilidade;
        echo "<br><br>";
		
		echo "<b> Perfil Profissional: </b>";
        echo $perfilprofissional;
		echo "<br><br>";
		echo "<br><br>";

	
		?>
	    </span>
        <input name="botao" type="submit" value="Voltar" />
		</form>
		</div>
    </body>
</html>
