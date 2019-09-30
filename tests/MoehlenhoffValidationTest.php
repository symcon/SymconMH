<?php

declare(strict_types=1);
include_once __DIR__ . '/stubs/Validator.php';
class MoehlenhoffValidationTest extends TestCaseSymconValidation
{
    public function testValidateMoehlenhoff(): void
    {
        $this->validateLibrary(__DIR__ . '/..');
    }
    public function testValidateAlpha2Module(): void
    {
        $this->validateModule(__DIR__ . '/../Alpha2');
    }
}