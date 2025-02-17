<?php

declare(strict_types=1);

namespace Sumsub\Contract;

class CreateApplicantDto
{
    // https://docs.sumsub.com/reference/create-applicant
    public function __construct(
        public readonly string $externalUserId,
        public readonly string $levelName,
        public readonly ?string $sourceKey,
        public readonly ?string $email,
        public readonly ?string $phone,
        public readonly ?string $lang,
        public readonly ?string $type,
        public readonly ?string $fixedInfoFirstName,
        public readonly ?string $fixedInfoMiddleName,
        public readonly ?string $fixedInfoLastName,
        public readonly ?string $fixedInfoLegalName,
        public readonly ?string $fixedInfoGender,
        public readonly ?string $fixedInfoDob,
        public readonly ?string $fixedInfoPlaceOfBirth,
        public readonly ?string $fixedInfoCountryOfBirth,
        public readonly ?string $fixedInfoStateOfBirth,
        public readonly ?string $fixedInfoCountry,
        public readonly ?string $fixedInfoNationality,
        public readonly ?string $fixedInfoTin,
        public readonly ?string $fixedInfoTaxResidenceCountry,
        public readonly ?string $fixedInfoAddressCountry,
        public readonly ?string $fixedInfoAddressPostCode,
        public readonly ?string $fixedInfoAddressTown,
        public readonly ?string $fixedInfoAddressStreet,
        public readonly ?string $fixedInfoAddressSubStreet,
        public readonly ?string $fixedInfoAddressState,
        public readonly ?string $fixedInfoAddressBuildingName,
        public readonly ?string $fixedInfoAddressFlatNumber,
        public readonly ?string $fixedInfoAddressBuildingNumber,
        public readonly ?string $fixedInfoAddressFormattedAddress,
    ) {
    }
}