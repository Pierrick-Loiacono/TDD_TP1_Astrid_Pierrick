<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class AdherentTest extends TestCase
{

    public function testCanBeCreated(){
        $adherent = new Adherent('bossy', 'astrid', new dateTime("01-01-2010"));
        $this->assertInstanceOf(
            Adherent::class,
            $adherent
        );
    }

    public function testCreateName(){
        $adherent = new Adherent('bossy', 'astrid', new dateTime("01-01-2010"));
        $this->assertEquals('BOSSY',
            $adherent->getNom()
        );
    }

    public function testConcatenation(){
        $adherent = new Adherent('bossy', 'astrid', new dateTime("01-01-2010"));

        $this->assertEquals($adherent->getNom().$adherent->getPrenom().$adherent->getDateNaissance(),
            $adherent->getAllConcat()
        );

    }


}