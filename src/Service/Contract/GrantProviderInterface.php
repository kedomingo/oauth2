<?php declare(strict_types=1);

namespace KOA2\Service\Contract;

use KOA2\Model\Token;

interface GrantProviderInterface
{
    /**
     * @param array $parameters
     * @return Token
     */
    public function grantToken(array $parameters) : Token;
}