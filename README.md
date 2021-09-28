# savepass
Sistema em PHP e MySQL para salvar senhas de sites

Criar contas on-line é necessário no trabalho remoto, mas a comodidade oferecida pelos navegadores faz com que alguns usuários salvem logins e senhas nestes. Está pode ser considerada uma prática perigosa e visada por hackers. Este aplicativo basicamente se propõe a criar um caminho para assegurar seus dados. Escrito em PHP, JScript e MySQL, a aplicação pode ser baixada e melhorada seguindo seus padrões de segurança. A encriptação utilizada é Base 64, mas pode ser facilmente alterada pelo programador. 

O sistema conta com sistema de backup e restauração dos dados e possui alguns requisitos mínimos para seu funcionamento.

<h3>Requisitos do sistema:</h3>
<ul>
  <li>Xampp - servidor Apache e MySQL.</li>
  <li>Download/Clone do projeto em um diretório em htdocs (mylib).</li>
  <li>Criação do banco de dados biblioteca.</li>
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

<h3>Vídeo explicativo:</h3>
<a href="https://www.youtube.com/user/crispdg">Prof. Cristiano José Cecanho</a>

