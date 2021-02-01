<?php

/**
 * 1. Créez une constante contenant le nombre 12
 * 2. Créez une deuxième constante qui contient le nombre 2
 * 3. Affichez le résultat de la première constante multipliée par la deuxième constante
 * 4. Créez une constante contenant la chaîne: C'est cool PHP
 * 5. Calculez le résultat de la première constante additionnée de la deuxième constante, le tout multiplié par la
 *    longueur de la chaîne de la troisième constante ( attention aux priorités )
 */
// TODO Votre code ici.
const CONST1 = 12;
const CONST2 = 2;
echo CONST1 * CONST2 ."<br>";

const CONST3 = "c'est cool PHP";
echo CONST1 * CONST2 * strlen(CONST3) . "<br>";


/**
 * 6. Utilisez la bonne constante magique et éventuellement la bonne fonction pour afficher un maximum d'informations sur la page actuelle4
 */
// TODO Votre code ici.

echo $_SERVER["PHP_SELF"]. "<br>";
echo $_SERVER["REMOTE_ADDR"]. "<br>";
echo $_SERVER["REQUEST_TIME"]. "<br>";

echo basename(__DIR__) ."<br>";
echo basename(__FILE__)."<br>";
echo basename(__METHOD__). "<br>";
echo basename(__NAMESPACE__);