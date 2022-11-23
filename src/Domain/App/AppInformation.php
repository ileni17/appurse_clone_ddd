<?php

declare(strict_types=1);

namespace App\Domain\App;

use App\Domain\App\VO\Description;
use App\Domain\App\VO\Icon;
use App\Domain\App\VO\Identificator;
use App\Domain\App\VO\Name;
use App\Domain\App\VO\Score;
use App\Domain\App\VO\Url;

class AppInformation
{
    public function __construct(
        private AppInformationId $id,
        private Identificator $identificator,
        private Name $name,
        private Description $description,
        private Score $score,
        private Url $url,
        private Icon $icon,
    ) {
    }

    public function viewModel(): AppInformationViewModel
    {
        return new AppInformationViewModel(
            (string) $this->id,
            (string) $this->identificator,
            (string) $this->name,
            (string) $this->description,
            (float) $this->score,
            (string) $this->url,
            (string) $this->icon,
        );
    }
}
