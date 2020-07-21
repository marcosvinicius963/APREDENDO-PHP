<?php

echo var_dump(true);//tanto faz o uso do echo no uso do (var_dump)(verdadeiro)
var_dump(true);//true é VERDADEIRO
var_dump(false);//false é FALSO
var_dump((bool)0);//o zero é false
var_dump((bool)20);//verdadeiro
var_dump((bool)+40);//verdadeiro
var_dump((bool)-50);//verdadeiro
var_dump((bool)"");//as aspa dupla sem espaço é false(falso)
var_dump((bool)" ");//as aspa dupla com espaço é true(verdadeiro)
var_dump((bool)'');//as aspa simples sem espaço é false(falso)
var_dump((bool)' ');//as aspa dupla com espaço é true(verdadeiro)
var_dump((bool)"0");//converte para false o 0 dentro das aspa dupla(falso)
var_dump((bool)"00");// dois 0 dentro da aspa dupla converte para true(verdadeiro)
var_dump((bool)'0');//converte para false o 0 dentro das aspa dupla(falso)
var_dump((bool)"00");// dois 0 dentro da aspa dupla converte para true(verdadeiro)
var_dump((bool)"marcos");//qualquer nome é true(verdadeiro)
var_dump((bool)"verdadeiro");//qualquer nome é true(verdadeiro)
var_dump(!!"verdaderio");//!! dois ponto der exclamação da true(verdadeiro)
var_dump(!"false");//! um ponto de exclamação da false(falso)



?>