<?php

abstract class Creator
{
    
    abstract public function factoryMethod();

   
    public function someOperation(): string
    {
        
        $product = $this->factoryMethod();
       
        $result = "Creator: O mesmo código de Creator acabou de trabalho com" .
            $product->operation();

        return $result;
    }
}
