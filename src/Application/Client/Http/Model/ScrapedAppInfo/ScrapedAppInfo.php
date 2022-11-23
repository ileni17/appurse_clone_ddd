<?php

declare(strict_types=1);

namespace App\Application\Client\Http\Model\ScrapedAppInfo;

use App\Domain\App\VO\Description;
use App\Domain\App\VO\Icon;
use App\Domain\App\VO\Name;
use App\Domain\App\VO\Score;
use App\Domain\App\VO\Url;
use App\Domain\Word\VO\NegativeResult;
use App\Domain\Word\VO\PositiveResult;

/** @psalm-immutable */
final class ScrapedAppInfo
{
    public function __construct(
        public Name $name,
        public Description $description,
        public Score $score,
        public Url $url,
        public Icon $icon
    ){
    }
}
