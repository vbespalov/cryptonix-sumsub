<?php

declare(strict_types=1);

namespace Sumsub\Contract;

readonly class VerificationLinkDto
{
    public function __construct(
        public string $userUuid,
        public string $email,
    ){
    }
}