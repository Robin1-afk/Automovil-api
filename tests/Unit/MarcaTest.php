<?php

namespace Tests\Unit;

use Test\TestCase;
use App\Models\Marca;
use Illuminate\Database\Enloquent\Collection;

class MarcaTest extends TestCase
{

    public function test_marca()
    {
  
        $marca = new Marca;

        $this->assertInstanceOf(Collection::class, $marca->post);

    }
}
