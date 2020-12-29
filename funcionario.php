<html>
    <head>
      <link rel="stylesheet" type="text/css" href="folha_estilo.css">
    	<title>Preenchimento de Contratação</title>
    </head>
    
	<body>
       <div class="classe01">
    	   <form name="form1" method="post" action="processa_funcionario.php">
              <legend>
                <span class="numero">1</span>
                Currículo
              </legend>
               <span class="enunciado">
                  <hr>  
                  <br>
                  <br>
               </span>
			   
    			  Nome: <input type="text" name="nome" id="nome" /> 
              	  <br><br>  
              	  Data de Nascimento: <input type="text" name="data" id="data" />
				  <br><br>
				  CPF: <input type="text" name="cpf" id="cpf" />
              	  <br><br>
				  E-mail: <input type="text" name="email" id="email" />
              	  <br><br>
				  Contatos:<textarea name="contato" cols="12" rows="3">Meios de contato</textarea>
				  <br><br>
				  Estado Civil: <input type="text" name="estadocivil" id="estadocivil" />
				  <br><br>
				  Sexo:
              	  <br>
           		  <input name="Sexo" type="radio" value="Masculino" checked="checked" />
              	  Masculino
              	  <br>
           		  <input type="radio" name="Sexo" value="Feminino" />
              	  Feminino 
              	  <br><br> 
				  Estado: 
                  <select name="estado">
                  <option value="AC" selected="selected">Acre</option>
                  <option value="AL">Alagoas</option>
				  <option value="AP">Amapá</option>
				  <option value="AM">Amazonas</option>
				  <option value="BA">Bahia</option>
				  <option value="CE">Ceará</option>
				  <option value="DF">Distrito Federal</option>
				  <option value="ES">Espírito Santo</option>
				  <option value="GO">Goiás</option>
				  <option value="MA">Maranhão</option>
				  <option value="MT">Mato Grosso</option>
				  <option value="MS">Mato Grosso do Sul</option>
				  <option value="MG">Minas Gerais</option>
				  <option value="PA">Pará</option>
				  <option value="PB">Paraíba</option>
				  <option value="PR">Paraná</option>
				  <option value="PE">Pernambuco</option>
				  <option value="PI">Piauí</option>
				  <option value="RJ">Rio de Janeiro</option>
				  <option value="RN">Rio Grande do Norte</option>
				  <option value="RS">Rio Grande do Sul</option>
				  <option value="RO">Rondônia</option>
				  <option value="SC">Roraima</option>
				  <option value="SC">Santa Catarina</option>
				  <option value="SP">São Paulo</option>
				  <option value="SE">Sergipe</option>
				  <option value="TO">Tocantins</option>
                  </select>
				  <br><br>
				  Áreas de Atuação: <textarea name="areas" cols="24" rows="3">Áreas especializadas</textarea>
                  <br><br>
                  Objetivo:
				  <br>
				  <textarea name="objetivo" cols="20" rows="3">Objetivos para o devido trabalho</textarea>
				  <br><br>
				  Experiência:
				  <br>
				  <textarea name="experiencia" cols="20" rows="3">Experiências que já passou</textarea>
				  <br><br>
				  Formação:
				  <br>
				  <textarea name="formacao" cols="20" rows="3">Acadêmico</textarea>
				  <br><br>
				  Habilidade:
				  <br>
				  <textarea name="habilidade" cols="20" rows="3">Pontos Fortes</textarea>
				  <br><br>
				  Perfil Profissional:
				  <br>
				  <textarea name="perfilprofissional" cols="20" rows="3">Descrição pessoal</textarea>
				  <br><br>
                  <br><br>
          		  <input name="botao" type="submit" value="Enviar" />
         	</form>
        </div>
    </body>
</html>
