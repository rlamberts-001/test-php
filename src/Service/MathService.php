<?php

// src/Service/MessageGenerator.php
namespace App\Service;

class MathService
{
    public function suma(float $valor1, float $valor2): float
    {
		try {
			return $valor1 + $valor2;
		} catch (Exception $e) {
			through($e);
		}
        
    }
}