<?php

namespace Idez\Inspire;

use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class Quotes
{
    private const INSPIRING = [
        'Se você pode sonhar, você pode fazer. - Walt Disney',
    ];

    /**
     * Get an inspiring quote.
     *
     * Taylor & Dayle made this commit from Jungfraujoch. (11,333 ft.)
     *
     * May McGinnis always control the board. #LaraconUS2015
     *
     * RIP Charlie - Feb 6, 2018
     *
     * @return string
     */
    public static function inspire()
    {
        return Arr::random(self::INSPIRING);
    }

    /**
     * Formats the given quote for a pretty console output.
     *
     * @param  string  $quote
     * @return string
     */
    protected static function format($quote): string
    {
        [$text, $author] = str($quote)->explode('-');

        return sprintf(
            "\n  <options=bold>“ %s ”</>\n  <fg=gray>— %s</>\n",
            trim($text),
            trim($author),
        );
    }
}
