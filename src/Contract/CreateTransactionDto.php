<?php

declare(strict_types=1);

namespace Sumsub\Contract;

class CreateTransactionDto
{
    public function __construct(
        public readonly string $applicantId,
        public readonly string $txnId,
        public readonly ?string $txnDate,
        public readonly ?string $type,
        public readonly ?string $infoDirection,
        public readonly ?string $infoAmount,
        public readonly ?string $infoAmountInDefaultCurrency,
        public readonly ?string $infoCurrencyType,
        public readonly ?string $infoCurrencyCode,
        public readonly ?string $infoCryptoParamsAttemptId,
        public readonly ?int $infoCryptoParamsOutputIndex,
        public readonly ?string $infoCryptoParamsCryptoChain,
        public readonly ?string $infoPaymentTxnId,
        public readonly ?string $infoPaymentDetails,
        public readonly ?string $infoType,
        public readonly ?string $sourceKey,
        public readonly ?string $applicantType,
        public readonly ?string $applicantExternalUserId,
        public readonly ?string $applicantFullName,
        public readonly ?string $applicantPlaceOfBirth,
        public readonly ?string $applicantDob,
        public readonly ?string $applicantAddressCountry,
        public readonly ?string $applicantAddressPostCode,
        public readonly ?string $applicantAddressTown,
        public readonly ?string $applicantAddressStreet,
        public readonly ?string $applicantAddressSubStreet,
        public readonly ?string $applicantAddressState,
        public readonly ?string $applicantAddressBuildingName,
        public readonly ?string $applicantAddressFlatNumber,
        public readonly ?string $applicantAddressBuildingNumber,
        public readonly ?string $applicantAddressFormattedAddress,
        public readonly ?string $applicantPaymentMethodType,
        public readonly ?string $applicantPaymentMethodAccountId,
        public readonly ?string $counterpartyType,
        public readonly ?string $counterpartyExternalUserId,
        public readonly ?string $counterpartyFullName,
        public readonly ?string $counterpartyPlaceOfBirth,
        public readonly ?string $counterpartyDob,
        public readonly ?string $counterpartyAddressCountry,
        public readonly ?string $counterpartyAddressPostCode,
        public readonly ?string $counterpartyAddressTown,
        public readonly ?string $counterpartyAddressStreet,
        public readonly ?string $counterpartyAddressSubStreet,
        public readonly ?string $counterpartyAddressState,
        public readonly ?string $counterpartyAddressBuildingName,
        public readonly ?string $counterpartyAddressFlatNumber,
        public readonly ?string $counterpartyAddressBuildingNumber,
        public readonly ?string $counterpartyAddressFormattedAddress,
        public readonly ?string $counterpartyPaymentMethodType,
        public readonly ?string $counterpartyPaymentMethodAccountId,
    ) {
    }
}