<?php

namespace App\Data;

use Spatie\LaravelData\Data;

class InstallationData extends Data
{
    public string $access_token;
    public string $expires_at;
    public string $repository_selection;
}
