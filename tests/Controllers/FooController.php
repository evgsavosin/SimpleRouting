<?php 

declare(strict_types=1);

namespace Tests\Controllers;

use SimpleRouting\Attribute\Route;

final class FooController 
{
    #[Route('GET', '/foo')]
    public function testAttribute(): void
    {
        
    }
}