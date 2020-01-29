<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class AdherentTest extends TestCase
{

    public function testCanBeCreated(){
        $adherent = new Adherent();
        $this->assertInstanceOf(
            Adherent::class,
            $adherent
        );
    }


}