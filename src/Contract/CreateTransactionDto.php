<?php

declare(strict_types=1);

namespace Sumsub\Contract;

readonly class CreateTransactionDto
{
    public function __construct(
        public string $applicantId,
        public string $txnId,
        public ?string $txnDate = null,
        public ?string $type = null,
        public ?string $infoDirection = null,
        public ?float $infoAmount = null,
        public ?float $infoAmountInDefaultCurrency = null,
        public ?string $infoCurrencyType = null,
        public ?string $infoCurrencyCode = null,
        public ?string $infoCryptoParamsAttemptId = null,
        public ?int $infoCryptoParamsOutputIndex = null,
        public ?string $infoCryptoParamsCryptoChain = null,
        public ?string $infoPaymentTxnId = null,
        public ?string $infoPaymentDetails = null,
        public ?string $infoType = null,
        public ?string $sourceKey = null,
        public ?string $applicantType = null,
        public ?string $applicantExternalUserId = null,
        public ?string $applicantFullName = null,
        public ?string $applicantPlaceOfBirth = null,
        public ?string $applicantDob = null,
        public ?string $applicantAddressCountry = null,
        public ?string $applicantAddressPostCode = null,
        public ?string $applicantAddressTown = null,
        public ?string $applicantAddressStreet = null,
        public ?string $applicantAddressSubStreet = null,
        public ?string $applicantAddressState = null,
        public ?string $applicantAddressBuildingName = null,
        public ?string $applicantAddressFlatNumber = null,
        public ?string $applicantAddressBuildingNumber = null,
        public ?string $applicantAddressFormattedAddress = null,
        public ?string $applicantPaymentMethodType = null,
        public ?string $applicantPaymentMethodAccountId = null,
        public ?string $counterpartyType = null,
        public ?string $counterpartyExternalUserId = null,
        public ?string $counterpartyFullName = null,
        public ?string $counterpartyPlaceOfBirth = null,
        public ?string $counterpartyDob = null,
        public ?string $counterpartyAddressCountry = null,
        public ?string $counterpartyAddressPostCode = null,
        public ?string $counterpartyAddressTown = null,
        public ?string $counterpartyAddressStreet = null,
        public ?string $counterpartyAddressSubStreet = null,
        public ?string $counterpartyAddressState = null,
        public ?string $counterpartyAddressBuildingName = null,
        public ?string $counterpartyAddressFlatNumber = null,
        public ?string $counterpartyAddressBuildingNumber = null,
        public ?string $counterpartyAddressFormattedAddress = null,
        public ?string $counterpartyPaymentMethodType = null,
        public ?string $counterpartyPaymentMethodAccountId = null,
    ) {
    }
}