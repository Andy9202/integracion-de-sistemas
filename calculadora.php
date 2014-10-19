<?php
class calculadora
{
    public function suma($a,$b)
    {
        return $a+$b;
    }
    public function multiplicacion($a,$b)
    {
        return $a*$b;
    }
    public function divicion($a,$b)
    {
        if($a==null){
            throw new Exception("Division x cero");
            
        }
        return $a/$b;
    }
    public function resta($a,$b)
    {
        return $a-$b;
    }
    
    
}
?>