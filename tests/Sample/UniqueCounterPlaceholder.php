<?php
namespace BrizyPlaceholdersTests\Sample;

use BrizyPlaceholders\ContentPlaceholder;
use BrizyPlaceholders\UniquePerOccurrenceInterface;

/**
 * Unique per occurrence, except when a "key" attribute is set.
 */
class UniqueCounterPlaceholder extends CounterPlaceholder implements UniquePerOccurrenceInterface
{
    public function isUniquePerOccurrence(ContentPlaceholder $placeholder): bool
    {
        return !$placeholder->getAttribute('key');
    }
}
