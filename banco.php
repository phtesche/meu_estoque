<?php
define("HOST", "localhost:3306");    #Para o host com o qual você quer se conectar.
define("USER", "root");          #O nome de usuário para o banco de dados. 
define("PASSWORD", "thsbm2646");           #A senha do banco de dados. 
define("DATABASE", "operadora_tm");       #O nome do banco de dados. 
$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
?>