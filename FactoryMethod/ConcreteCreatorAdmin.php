<?php

class ConcreteCreatorAdmin extends Creator
{
    
    public function factoryMethod()
    {
        return new UsuarioAdmin();
    }
}