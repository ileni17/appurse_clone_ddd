<?php

declare(strict_types=1);

namespace App\Domain\App;

use App\Domain\App\VO\AppDescription;
use App\Domain\App\VO\AppGooglePlayId;
use App\Domain\App\VO\AppIcon;
use App\Domain\App\VO\AppName;
use App\Domain\App\VO\AppScore;
use App\Domain\App\VO\AppUrl;

class App
{
    public function __construct(
        private AppId $id,
        private AppGooglePlayId $identificator,
        private AppName $name,
        private AppDescription $description,
        private AppScore $score,
        private AppUrl $url,
        private AppIcon $icon
    ) {
    }

    public function id(): AppId
    {
        return $this->id;
    }

    public function identificator(): AppGooglePlayId
    {
        return $this->identificator;
    }

    public function name(): AppName
    {
        return $this->name;
    }

    public function description(): AppDescription
    {
        return $this->description;
    }

    public function score(): AppScore
    {
        return $this->score;
    }

    public function url(): AppUrl
    {
        return $this->url;
    }

    public function icon(): AppIcon
    {
        return $this->icon;
    }

    public function update(
        AppName $name,
        AppDescription $description,
        AppScore $score
    ): void {
        $this->name = $name;
        $this->description = $description;
        $this->score = $score;
    }
}
