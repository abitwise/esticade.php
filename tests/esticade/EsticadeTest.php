<?php

class EsticadeTest extends PHPUnit_Framework_TestCase
{
    public function testEsticadeCreation()
    {
        $serviceName = "TestService";
        $esticade = new \Esticade\Esticade($serviceName);
        $this->assertInstanceOf('\Esticade\Esticade', $esticade, "Expecting Esticade class");
        $this->assertEquals($serviceName, $esticade->getServiceName(), "Expecting correct service name");

        $callback = function ($message) {};
        $this->assertEquals($esticade, $esticade->on("TestEvent", $callback), "Expecting on to return Esticade object");
        $this->assertEquals($esticade, $esticade->alwaysOn("TestEvent", $callback), "Expecting on to return Esticade object");
        $this->assertNull($esticade->emit("TestEvent", null), "Expecting to have emit function");
        $this->assertEquals($esticade, $esticade->emitChain("TestEvent", null), "Expecting to have emitChain function");
        $this->assertNull($esticade->execute(), "Expecting to have execute function");
        $this->assertNull($esticade->shutdown(), "Expecting to have shutdown function");
    }
    
    
}