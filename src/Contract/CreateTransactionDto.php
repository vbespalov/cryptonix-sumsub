<?php

declare(strict_types=1);

namespace Sumsub\Contract;

class CreateTransactionDto
{
    public function __construct(
        public readonly string $applicantId,
        public readonly string $txnId,
        public readonly ?string $txnDate = null,
        public readonly ?string $type = null,
        public readonly ?string $infoDirection = null,
        public readonly ?string $infoAmount = null,
        public readonly ?string $infoAmountInDefaultCurrency = null,
        public readonly ?string $infoCurrencyType = null,
        public readonly ?string $infoCurrencyCode = null,
        public readonly ?string $infoCryptoParamsAttemptId = null,
        public readonly ?int $infoCryptoParamsOutputIndex = null,
        public readonly ?string $infoCryptoParamsCryptoChain = null,
        public readonly ?string $infoPaymentTxnId = null,
        public readonly ?string $infoPaymentDetails = null,
        public readonly ?string $infoType = null,
        public readonly ?string $sourceKey = null,
        public readonly ?string $applicantType = null,
        public readonly ?string $applicantExternalUserId = null,
        public readonly ?string $applicantFullName = null,
        public readonly ?string $applicantPlaceOfBirth = null,
        public readonly ?string $applicantDob = null,
        public readonly ?string $applicantAddressCountry = null,
        public readonly ?string $applicantAddressPostCode = null,
        public readonly ?string $applicantAddressTown = null,
        public readonly ?string $applicantAddressStreet = null,
        public readonly ?string $applicantAddressSubStreet = null,
        public readonly ?string $applicantAddressState = null,
        public readonly ?string $applicantAddressBuildingName = null,
        public readonly ?string $applicantAddressFlatNumber = null,
        public readonly ?string $applicantAddressBuildingNumber = null,
        public readonly ?string $applicantAddressFormattedAddress = null,
        public readonly ?string $applicantPaymentMethodType = null,
        public readonly ?string $applicantPaymentMethodAccountId = null,
        public readonly ?string $counterpartyType = null,
        public readonly ?string $counterpartyExternalUserId = null,
        public readonly ?string $counterpartyFullName = null,
        public readonly ?string $counterpartyPlaceOfBirth = null,
        public readonly ?string $counterpartyDob = null,
        public readonly ?string $counterpartyAddressCountry = null,
        public readonly ?string $counterpartyAddressPostCode = null,
        public readonly ?string $counterpartyAddressTown = null,
        public readonly ?string $counterpartyAddressStreet = null,
        public readonly ?string $counterpartyAddressSubStreet = null,
        public readonly ?string $counterpartyAddressState = null,
        public readonly ?string $counterpartyAddressBuildingName = null,
        public readonly ?string $counterpartyAddressFlatNumber = null,
        public readonly ?string $counterpartyAddressBuildingNumber = null,
        public readonly ?string $counterpartyAddressFormattedAddress = null,
        public readonly ?string $counterpartyPaymentMethodType = null,
        public readonly ?string $counterpartyPaymentMethodAccountId = null,
    ) {
    }
}