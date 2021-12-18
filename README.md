# SAVEPASS
<p>
Já pensou em manter suas senhas criptografadas e salvas em um banco de dados para futuras consultas? Este é o objetivo deste simples programa em PHP/MySQL.
</p>
<h3> Sistema em PHP e MySQL para salvar senhas de sites </h3>
<p>
Criar contas on-line é necessário no trabalho remoto, mas a comodidade oferecida pelos navegadores faz com que alguns usuários salvem logins e senhas nestes. Está pode ser considerada uma prática perigosa e visada por hackers. Este aplicativo basicamente se propõe a criar um caminho para assegurar seus dados. Escrito em PHP, JScript e MySQL, a aplicação pode ser baixada e melhorada seguindo seus padrões de segurança. A encriptação utilizada é Base 64, mas pode ser facilmente alterada pelo programador.
</p>
<p>
O sistema conta com sistema de backup e restauração dos dados e possui alguns requisitos mínimos para seu funcionamento.
</p>
<p>
Requisitos do sistema:
</p>
<ul>
<li> Xampp - servidor Apache e MySQL.</li>
<li> Download/Clone do projeto em um diretório em htdocs (mylib).</li>
<li> Criação do banco de dados savepass.</p></li> 
 </ul>   
 <h3>Esquema da tabela do banco de dados:</h3>
<code>CREATE DATABASE savepass</code></br>
<code>DROP TABLE IF EXISTS `senhas`;</code></br>
<code>CREATE TABLE `senhas` (</code></br>
<code>  `id` int(11) NOT NULL AUTO_INCREMENT,</code></br>
<code>  `site` varchar(128) DEFAULT NULL,</code></br>
<code>  `login` varchar(64) DEFAULT NULL,</code></br>
<code>  `senha` varchar(32) DEFAULT NULL,</code></br>
<code>  PRIMARY KEY (`id`)</code></br>
<code>) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;</code>
<h3>Sobre</h3>
Professor Cristiano José Cecanho é formado em Sistemas de Informação (2004) pelas faculdades Claretianas, especialista em Tecnologias e Educação a Distância, programador em linguagens como JAVA, PHP, PASCAL, C, C++, Android, com conhecimentos em SQL para bancos de dados como MySQL, MS SQL Server e Firebird.
<h3>Vídeo de apoio/apresentação</h3>
<a href="https://www.youtube.com/user/crispdg">Prof. Cristiano José Cecanho</a>

