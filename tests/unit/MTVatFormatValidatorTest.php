<?php

namespace rocketfellows\MTVatFormatValidator\tests\unit;

use PHPUnit\Framework\TestCase;

class MTVatFormatValidatorTest extends TestCase
{
    /**
     * @var MTVatFormatValidator
     */
    private $validator;

    protected function setUp(): void
    {
        parent::setUp();

        $this->validator = new MTVatFormatValidator();
    }

    /**
     * @dataProvider getVatNumbersProvidedData
     */
    public function testValidationResult(string $vatNumber, bool $isValid): void
    {
        $this->assertEquals($isValid, $this->validator->isValid($vatNumber));
    }

    public function getVatNumbersProvidedData(): array
    {
        return [
            [
                'vatNumber' => 'MT12345678',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'MT00000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'MT11111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'MT99999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => '12345678',
                'isValid' => true,
            ],
            [
                'vatNumber' => '11111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => '00000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => '99999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'MT123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'MT1234567',
                'isValid' => false,
            ],
            [
                'vatNumber' => '123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1234567',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'DE12345678',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'D12345678',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1234567A',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'MT1234567A',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1',
                'isValid' => false,
            ],
            [
                'vatNumber' => '0',
                'isValid' => false,
            ],
            [
                'vatNumber' => '',
                'isValid' => false,
            ],
        ];
    }
}
