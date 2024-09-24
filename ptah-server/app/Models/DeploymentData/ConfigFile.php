<?php

namespace App\Models\DeploymentData;

use Spatie\LaravelData\Data;

class ConfigFile extends Data
{
    public function __construct(
        public string $path,
        public string $content,
        public ?string $dockerName,
    ) {
        $this->content = $content ?? '';
    }

    public function base64(): string
    {
        return base64_encode($this->content);
    }

    public function sameAs(?ConfigFile $older): bool
    {
        if ($older === null) {
            return false;
        }

        return $this->content === $older->content;
    }
}
