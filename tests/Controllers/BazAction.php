<?php 

declare(strict_types=1);

namespace Tests\Controllers;

use ChocoRouter\Attribute\Route;

#[Route('GET', '/baz')]
final class BazAction
{
    public function __invoke(): void
    {
        
    }
}