<?php

declare(strict_types=1);

namespace Foo;

use Elastica\Query\MatchQuery;

final class QueryMatching
{
    public function run(): void
    {
        $matchQuery = new MatchQuery();
    }
}
