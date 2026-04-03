<?php
/**
 * Tests for NexusStackFull
 */

use PHPUnit\Framework\TestCase;
use Nexusstackfull\Nexusstackfull;

class NexusstackfullTest extends TestCase {
    private Nexusstackfull $instance;

    protected function setUp(): void {
        $this->instance = new Nexusstackfull(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nexusstackfull::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
