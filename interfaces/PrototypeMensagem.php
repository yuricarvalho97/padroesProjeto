<?php

/*
    Fazendo uso do padrão prototype para implementar clones para as mensagens
*/
interface PrototypeMensagem
{
    //método responsável por clonar as mensagens
    function clone();
}
