<?php

declare(strict_types=1);

namespace HelpScout\Api\Reports\Happiness;

use HelpScout\Api\Reports\Report;

class Overall extends Report
{
    public const ENDPOINT = '/v2/reports/happiness';
    public const QUERY_FIELDS = [
        'start',
        'end',
        'previousStart',
        'previousEnd',
        'mailboxes',
        'tags',
        'types',
        'folders',
    ];
}
