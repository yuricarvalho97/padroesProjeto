<?php
class ConcreteCreatorComum extends Creator
{
    public function factoryMethod()
    {
        return new UsuarioComum();
    }
}