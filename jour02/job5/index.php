<?php
   //Variable de type string
$chaine='Ma chaine de caracteres';
// Affiche la variable "chaine" qui contient une chaine de caractères.
echo ($chaine);

$chaine="blablabla";
echo"<p>Voici le contenu de ma variable : $chaine</p>";
echo '<p>Une chaine dans un simple guillemet la variable php n\'est pas remplacée par son contenu : $chaine </p>';
echo"<p>Pour afficher des guillemets \"hhhhh\" j' utilise le caractère \\ d'échapement</p>" ;
echo'<p>je peux aussi concatener des chaines : '.$chaine.", et je peux aussi utiliser des simples ou doubles guillemets. Pour que le code s'execute plus vite j'utilise des guillemets simples</p>";
?>