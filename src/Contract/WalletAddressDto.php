<?php

declare(strict_types=1);

namespace Sumsub\Contract;

readonly class WalletAddressDto
{
    public function __construct(
        public string $walletAddress,
        public string $asset,
        public string $chain,
    ) {
    }
}