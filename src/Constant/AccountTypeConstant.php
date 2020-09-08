<?php

declare(strict_types=1);

namespace Bigoen\Contracts\Parasut\Constant;

/**
 * @author Şafak Saylam <safak@bigoen.com>
 */
class AccountTypeConstant
{
    const CASH = 'cash';
    const BANK = 'bank';
    const SYS = 'sys';

    public static function getTypes(): array
    {
        return [
            self::CASH,
            self::BANK,
            self::SYS,
        ];
    }
}
