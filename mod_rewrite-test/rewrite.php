<?php

/* 
mod_rewrite Test Page - Copyright 2006 Webune.com
Translation and customization by Paulino Michelazzo - paulino@michelazzo.com.br
*/
?>

<html>
	<body style="font-family: arial">
		<h2 align=center>
			<?php
			if($_GET['link']==1){
				echo '<span style="color:red">voc� n�o est� usando o mod_rewrite - verifique agora o link 2</span>';
			}
			elseif($_GET['link']==2){
				echo'<span style="color:green">parab�ns! Seu servidor est� com o mod_rewrite configurado corretamente</span>';
			}
			else{
				echo '<span style="color:blue">Teste de mod_rewrite em servidores Apache</span>';
			}
			?>
		</h2>
		<hr>
		<h2>Testes</h2>
		<ul>
			<li>Link 1 - Clique <a href="rewrite.php?link=1">aqui</a> para verificar as URL's <strong>sem</strong> mod_rewrite</li>
			<li>Link 2 - Clique <a href="link2.html">aqui</a> para verificar as URL's <strong>com</strong> mod_rewrite</li>
		</ul>

		<h2>Como Funciona</h2>
			Os links acima se redirecionam para esta mesma p�gina mas usando ou n�o mod_rewrite. O primeiro link verifica se o servidor est� 
			respondendo corretamente as requisi��es e o segundo link, se o m�dulo mod_rewrite est� habilitado e funcionando.
		<p>
			Clicando no primeiro link voc� ir� receber a mensagem: <em>voc� n�o est� usando o mod_rewrite - verifique agora o link 2</em>
		</p>
		<p>
			Clicando no segundo link voc� ir� receber a mensagem: <em>parab�ns! seu servidor est� com o mod_rewrite configurado corretamente</em>
		</p>
		<h2>Poss�veis problemas</h2>
		<p><strong>ERRO 404 (404 error)</strong>
			<br/>
			Se voc� ao clicar no link 2 receber uma mensagem de erro de n�mero 404 ou algo como: <pre>The requested URL /link2.html was not found on this server.</pre> 
			seu servidor Apache n�o est� com o m�dulo mod_rewrite instalado ou habilitado para uso.<br/>
			Para usar URL's limpas � necess�rio que este m�dulo esteja corretamente configurado e funcionando.
		</p>
		<p><strong>ERRO 500 (500 error)</strong>
			<br/>
			Se voc� ao clicar no link 2 receber uma mensagem de erro de n�mero 500, � sinal que voc� fez cometeu algum erro na cria��o do 
			arquivo .htaccess ou ainda que seu servidor n�o permite o uso de arquivos .htaccess.
			<br/><br/>
			Verifique se as linhas do arquivo .htaccess est�o iguais a estas:
<pre>
	RewriteEngine On
	RewriteRule ^link([^/]*).html$ rewrite.php?link=$1 [L]
</pre>
			Se n�o estiverem, copie-as e cole dentro do arquivo .htaccess
		</p>
		<p>
			<br/>
			Este arquivo foi customizado por <a href="http://www.michelazzo.com.br">Paulino Michelazzo (paulino@michelazzo.com.br)</a> e desenvolvido inicialmente por <a href="http://www.webune.com">Webune Hosting</a>
		</p>
	</body>
</html>