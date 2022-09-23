<?php

namespace Webjump\Hex\Services;

use Webjump\Hex\Api\JoojPhrase;

class MotivationalPhrases implements JoojPhrase
{
    /**
     * @inheirtDoc
     */
    public function joojPhrase($amount): string
    {
        $phrase = sprintf('te agaro pela cabeça e te j%sj', str_repeat('o', (int) $amount));
        $message = ['message' => 'success webapi: '. $phrase];

        return json_encode($message);
    }

    /**
     * @inheirtDoc
     */
    public function superJooj(int $amount): string
    {
        $phrase = sprintf('TE AGARO PELA CABEÇA E TE J%sJ!', str_repeat('O', $amount));
        $message = ['message' => 'success POST webapi: '. $phrase];

        return json_encode($message);
    }
}
