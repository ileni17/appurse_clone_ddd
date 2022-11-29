<?php

declare(strict_types=1);

namespace App\Application\Command\App;

use App\Application\Command\Command;
use App\Domain\App\AppId;
use App\Domain\App\VO\AppDescription;
use App\Domain\App\VO\AppGooglePlayId;
use App\Domain\App\VO\AppIcon;
use App\Domain\App\VO\AppName;
use App\Domain\App\VO\AppScore;
use App\Domain\App\VO\AppUrl;

/** @psalm-immutable */
final class CreateAppCommand implements Command
{
    public function __construct(
        public AppId $id,
        public AppGooglePlayId $identificator,
        public AppName $name,
        public AppDescription $description,
        public AppScore $score,
        public AppUrl $url,
        public AppIcon $icon
    ) {
    }
}
