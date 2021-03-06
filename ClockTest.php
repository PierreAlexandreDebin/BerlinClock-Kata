<?php
require "vendor/autoload.php";
require "BerlinClock.php";

use PHPUnit\Framework\TestCase;

class ClockTest extends TestCase
{

    private $berlinClock;

    protected function setUp(): void
    {
        parent::setUp();
        $this->berlinClock = new BerlinClock();
    }

    public function test_simpleMinute_given00m_shouldReturnOOOO()
    {
        $actual = $this->actSimpleMinute("00");

        $this->assertEquals("OOOO", $actual);
    }

    public function test_simpleMinute_given01m_shouldReturnYOOO()
    {
        $actual = $this->actSimpleMinute("01");

        $this->assertEquals("YOOO", $actual);
    }

    public function test_simpleMinute_given02m_shouldReturnYYOO()
    {
        $actual = $this->actSimpleMinute("02");

        $this->assertEquals("YYOO", $actual);
    }

    public function test_simpleMinute_given03m_shouldReturnYYYO()
    {
        $actual = $this->actSimpleMinute("03");

        $this->assertEquals("YYYO", $actual);
    }

    public function test_simpleMinute_given04m_shouldReturnYYYY()
    {
        $actual = $this->actSimpleMinute("04");

        $this->assertEquals("YYYY", $actual);
    }

    public function test_simpleMinute_given05m_shouldReturnOOOO()
    {
        $actual = $this->actSimpleMinute("05");

        $this->assertEquals("OOOO", $actual);
    }

    public function test_simpleMinute_given06m_shouldReturnYOOO()
    {
        $actual = $this->actSimpleMinute("06");

        $this->assertEquals("YOOO", $actual);
    }

    public function test_simpleMinute_given07m_shouldReturnYYOO()
    {
        $actual = $this->actSimpleMinute("07");

        $this->assertEquals("YYOO", $actual);
    }

    public function test_simpleMinute_given08m_shouldReturnYYYO()
    {
        $actual = $this->actSimpleMinute("08");

        $this->assertEquals("YYYO", $actual);
    }

    public function test_simpleMinute_given09m_shouldReturnYYYY()
    {
        $actual = $this->actSimpleMinute("09");

        $this->assertEquals("YYYY", $actual);
    }

    public function test_simpleMinute_given10m_shouldReturnOOOO()
    {
        $actual = $this->actSimpleMinute("10");

        $this->assertEquals("OOOO", $actual);
    }

    public function test_blockOf5Minutes_given00to04m_shouldReturnOOOOOOOOOOO()
    {
        $actual = $this->actBlockOf5Minutes("00");

        $this->assertEquals("OOOOOOOOOOO", $actual);
    }

    public function test_blockOf5Minutes_given05to09m_shouldReturnYOOOOOOOOOO()
    {
        $actual = $this->actBlockOf5Minutes("05");

        $this->assertEquals("YOOOOOOOOOO", $actual);
    }

    public function test_blockOf5Minutes_given10to14m_shouldReturnYYOOOOOOOOO()
    {
        $actual = $this->actBlockOf5Minutes("11");

        $this->assertEquals("YYOOOOOOOOO", $actual);
    }

    public function test_blockOf5Minutes_given15to19m_shouldReturnYYROOOOOOOO()
    {
        $actual = $this->actBlockOf5Minutes("16");

        $this->assertEquals("YYROOOOOOOO", $actual);
    }

    public function test_blockOf5Minutes_given20to24m_shouldReturnYYRYOOOOOOO()
    {
        $actual = $this->actBlockOf5Minutes("22");

        $this->assertEquals("YYRYOOOOOOO", $actual);
    }

    public function test_blockOf5Minutes_given25to29m_shouldReturnYYRYYOOOOOO()
    {
        $actual = $this->actBlockOf5Minutes("27");

        $this->assertEquals("YYRYYOOOOOO", $actual);
    }

    public function test_blockOf5Minutes_given30to34m_shouldReturnYYRYYROOOOO()
    {
        $actual = $this->actBlockOf5Minutes("33");

        $this->assertEquals("YYRYYROOOOO", $actual);
    }

    public function test_blockOf5Minutes_given35to39m_shouldReturnYYRYYRYOOOO()
    {
        $actual = $this->actBlockOf5Minutes("38");

        $this->assertEquals("YYRYYRYOOOO", $actual);
    }

    public function test_blockOf5Minutes_given40to44m_shouldReturnYYRYYRYYOOO()
    {
        $actual = $this->actBlockOf5Minutes("44");

        $this->assertEquals("YYRYYRYYOOO", $actual);
    }

    public function test_blockOf5Minutes_given45to49m_shouldReturnYYRYYRYYROO()
    {
        $actual = $this->actBlockOf5Minutes("49");

        $this->assertEquals("YYRYYRYYROO", $actual);
    }

    public function test_blockOf5Minutes_given50to54m_shouldReturnYYRYYRYYRYO()
    {
        $actual = $this->actBlockOf5Minutes("50");

        $this->assertEquals("YYRYYRYYRYO", $actual);
    }

    public function test_blockOf5Minutes_given55to59m_shouldReturnYYRYYRYYRYY()
    {
        $actual = $this->actBlockOf5Minutes("55");

        $this->assertEquals("YYRYYRYYRYY", $actual);
    }

    public function test_simpleHour_given00h_shouldReturnOOOO()
    {
        $actual = $this->actSimpleHour("00");

        $this->assertEquals("OOOO", $actual);
    }

    public function test_simpleHour_given01h_shouldReturnROOO()
    {
        $actual = $this->actSimpleHour("01");

        $this->assertEquals("ROOO", $actual);
    }

    public function test_simpleHour_given02h_shouldReturnRROO()
    {
        $actual = $this->actSimpleHour("02");

        $this->assertEquals("RROO", $actual);
    }

    public function test_simpleHour_given03h_shouldReturnRRRO()
    {
        $actual = $this->actSimpleHour("03");

        $this->assertEquals("RRRO", $actual);
    }

    public function test_simpleHour_given04h_shouldReturnRRRR()
    {
        $actual = $this->actSimpleHour("04");

        $this->assertEquals("RRRR", $actual);
    }

    public function test_simpleHour_given15h_shouldReturnOOOO()
    {
        $actual = $this->actSimpleHour("15");

        $this->assertEquals("OOOO", $actual);
    }

    public function test_simpleHour_given16h_shouldReturnROOO()
    {
        $actual = $this->actSimpleHour("16");

        $this->assertEquals("ROOO", $actual);
    }

    public function test_simpleHour_given17h_shouldReturnRROO()
    {
        $actual = $this->actSimpleHour("17");

        $this->assertEquals("RROO", $actual);
    }

    public function test_simpleHour_given18h_shouldReturnRRRO()
    {
        $actual = $this->actSimpleHour("18");

        $this->assertEquals("RRRO", $actual);
    }

    public function test_simpleHour_given19h_shouldReturnRRRR()
    {
        $actual = $this->actSimpleHour("19");

        $this->assertEquals("RRRR", $actual);
    }

    public function test_simpleHour_given20h_shouldReturnOOOO()
    {
        $actual = $this->actSimpleHour("20");

        $this->assertEquals("OOOO", $actual);
    }

    public function test_blockOf5Hours_given00to04h_shouldReturnOOOO()
    {
        $actual = $this->actBlockOf5Hours("00");

        $this->assertEquals("OOOO", $actual);
    }

    public function test_blockOf5Hours_given05to09h_shouldReturnROOO()
    {
        $actual = $this->actBlockOf5Hours("05");

        $this->assertEquals("ROOO", $actual);
    }

    public function test_blockOf5Hours_given10to14h_shouldReturnRROO()
    {
        $actual = $this->actBlockOf5Hours("11");

        $this->assertEquals("RROO", $actual);
    }

    public function test_blockOf5Hours_given15to19h_shouldReturnRRRO()
    {
        $actual = $this->actBlockOf5Hours("17");

        $this->assertEquals("RRRO", $actual);
    }

    public function test_blockOf5Hours_given20to24h_shouldReturnRRRR()
    {
        $actual = $this->actBlockOf5Hours("23");

        $this->assertEquals("RRRR", $actual);
    }

    public function test_secondPair_given00_shouldReturnR()
    {
        $actual = $this->actSecond("00");

        $this->assertEquals("R", $actual);
    }

    public function test_secondNotPair_given01_shouldReturnO()
    {
        $actual = $this->actSecond("01");

        $this->assertEquals("O", $actual);
    }

    public function test_berlinClock_given00h00m00s_shouldReturnR_OOOO_OOOO_OOOOOOOOOOO_OOOO()
    {
        $actual = $this->actClock("00", "00", "00");

        $this->assertEquals("R\nOOOO\nOOOO\nOOOOOOOOOOO\nOOOO", $actual);
    }

    public function test_berlinClock_given23h59m59s_shouldReturnO_RRRR_RRRR_YYRYYRYYRYY_YYYY()
    {
        $actual = $this->actClock("23", "59", "59");

        $this->assertEquals("O\nRRRR\nRRRO\nYYRYYRYYRYY\nYYYY", $actual);
    }

    public function test_berlinClock_given17h32m14s_shouldReturnR_RRRO_RROO_YYRYYROOOOO_YYOO()
    {
        $actual = $this->actClock("17", "32", "14");

        $this->assertEquals("R\nRRRO\nRROO\nYYRYYROOOOO\nYYOO", $actual);
    }

    private function actSimpleMinute(string $minute): string
    {
        return $this->berlinClock->simpleMinute($minute);
    }

    private function actBlockOf5Minutes(string $minute): string
    {
        return $this->berlinClock->blockOf5Minutes($minute);
    }

    private function actSimpleHour(string $hour): string
    {
        return $this->berlinClock->simpleHour($hour);
    }

    private function actBlockOf5Hours(string $hour): string
    {
        return $this->berlinClock->blockOf5Hours($hour);
    }

    private function actSecond(string $second): string
    {
        return $this->berlinClock->second($second);
    }

    private function actClock(string $hour, string $minute, string $second): string
    {
        return $this->berlinClock->clock($hour, $minute, $second);
    }

}