<?php
namespace BrizyPlaceholdersTests\Sample;

use BrizyPlaceholders\ContentPlaceholder;
use BrizyPlaceholders\ContextInterface;

class CounterPlaceholder extends TestPlaceholder
{
    public $calls = 0;

    public function getValue(ContextInterface $context, ContentPlaceholder $placeholder)
    {
        return 'value' . (++$this->calls);
    }
}
