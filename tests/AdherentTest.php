<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class AdherentTest extends TestCase
{

    public function testCanBeCreated(){
        $adherent = new Adherent('bossy', 'astrid', '01/01/1999');
        $this->assertInstanceOf(
            Adherent::class,
            $adherent
        );
    }

    public function testCreateName(){
        $adherent = new Adherent('bossy', 'astrid', '01/01/1999');
        $this->assertEquals('BOSSY',
            $adherent->getNom()
        );
    }


}