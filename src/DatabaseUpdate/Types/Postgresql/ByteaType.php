<?php

namespace MspPack\DDSGenerate\DatabaseUpdate\Types\Postgresql;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use MspPack\DDSGenerate\DatabaseUpdate\Types\Type;

class ByteaType extends Type
{
    const NAME = 'bytea';

    public function getSQLDeclaration(array $field, AbstractPlatform $platform)
    {
        return 'bytea';
    }
}
