<?php

declare(strict_types=1);

namespace Sumsub\Contract;

class CreateApplicantDto
{
    // https://docs.sumsub.com/reference/create-applicant
    public function __construct(
        public readonly string $externalUserId,
        public readonly string $levelName,
        public readonly ?string $sourceKey = null,
        public readonly ?string $email = null,
        public readonly ?string $phone = null,
        public readonly ?string $lang = null,
        public readonly ?string $type = null,
        public readonly ?string $fixedInfoFirstName = null,
        public readonly ?string $fixedInfoMiddleName = null,
        public readonly ?string $fixedInfoLastName = null,
        public readonly ?string $fixedInfoLegalName = null,
        public readonly ?string $fixedInfoGender = null,
        public readonly ?string $fixedInfoDob = null,
        public readonly ?string $fixedInfoPlaceOfBirth = null,
        public readonly ?string $fixedInfoCountryOfBirth = null,
        public readonly ?string $fixedInfoStateOfBirth = null,
        public readonly ?string $fixedInfoCountry = null,
        public readonly ?string $fixedInfoNationality = null,
        public readonly ?string $fixedInfoTin = null,
        public readonly ?string $fixedInfoTaxResidenceCountry = null,
        public readonly ?string $fixedInfoAddressCountry = null,
        public readonly ?string $fixedInfoAddressPostCode = null,
        public readonly ?string $fixedInfoAddressTown = null,
        public readonly ?string $fixedInfoAddressStreet = null,
        public readonly ?string $fixedInfoAddressSubStreet = null,
        public readonly ?string $fixedInfoAddressState = null,
        public readonly ?string $fixedInfoAddressBuildingName = null,
        public readonly ?string $fixedInfoAddressFlatNumber = null,
        public readonly ?string $fixedInfoAddressBuildingNumber = null,
        public readonly ?string $fixedInfoAddressFormattedAddress = null,
    ) {
    }
}