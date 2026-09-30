<?php

namespace BrizyPlaceholders;

/**
 * By default identical placeholders share one UID, so their value is computed once
 * and reused for every occurrence in the content.
 *
 * Implement this interface on placeholders whose value must be computed for each
 * occurrence (random ids, blocks that render random ids, etc.).
 */
interface UniquePerOccurrenceInterface
{
    /**
     * @param ContentPlaceholder $placeholder
     *
     * @return bool true if this occurrence must get its own value
     */
    public function isUniquePerOccurrence(ContentPlaceholder $placeholder): bool;
}
