<?php

declare(strict_types=1);

namespace Laravel\Pennant\Contracts;

interface ScopeIdentifier
{
    public function getScopeIdentifier(): string;
}
