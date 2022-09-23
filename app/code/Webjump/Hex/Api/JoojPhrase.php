<?php

declare(strict_types=1);

namespace Webjump\Hex\Api;

interface JoojPhrase
{
    /**
     * @api
     * @param int $amount
     * @return string
     */
    public function joojPhrase(int $amount): string;

    /**
     * @param int $amount
     * @return string
     */
    public function superJooj(int $amount): string;
}
