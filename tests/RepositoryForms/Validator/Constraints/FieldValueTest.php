<?php

/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace EzSystems\RepositoryForms\Tests\Validator\Constraints;

use EzSystems\RepositoryForms\Validator\Constraints\FieldValue;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Validator\Constraint;

class FieldValueTest extends TestCase
{
    public function testConstruct()
    {
        $constraint = new FieldValue();
        self::assertSame('ez.field.value', $constraint->message);
    }

    public function testValidatedBy()
    {
        $constraint = new FieldValue();
        self::assertSame('ezrepoforms.validator.field_value', $constraint->validatedBy());
    }

    public function testGetTargets()
    {
        $constraint = new FieldValue();
        self::assertSame(Constraint::CLASS_CONSTRAINT, $constraint->getTargets());
    }
}
