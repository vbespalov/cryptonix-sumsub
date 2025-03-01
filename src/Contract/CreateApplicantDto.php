<?php

declare(strict_types=1);

namespace Sumsub\Contract;

readonly class CreateApplicantDto
{
    // https://docs.sumsub.com/reference/create-applicant
    public function __construct(
        public string $externalUserId,
        public string $levelName,
        public ?string $sourceKey = null,
        public ?string $email = null,
        public ?string $phone = null,
        public ?string $lang = null,
        public ?string $type = null,
        public ?string $fixedInfoFirstName = null,
        public ?string $fixedInfoMiddleName = null,
        public ?string $fixedInfoLastName = null,
        public ?string $fixedInfoLegalName = null,
        public ?string $fixedInfoGender = null,
        public ?string $fixedInfoDob = null,
        public ?string $fixedInfoPlaceOfBirth = null,
        public ?string $fixedInfoCountryOfBirth = null,
        public ?string $fixedInfoStateOfBirth = null,
        public ?string $fixedInfoCountry = null,
        public ?string $fixedInfoNationality = null,
        public ?string $fixedInfoTin = null,
        public ?string $fixedInfoTaxResidenceCountry = null,
        public ?string $fixedInfoAddressCountry = null,
        public ?string $fixedInfoAddressPostCode = null,
        public ?string $fixedInfoAddressTown = null,
        public ?string $fixedInfoAddressStreet = null,
        public ?string $fixedInfoAddressSubStreet = null,
        public ?string $fixedInfoAddressState = null,
        public ?string $fixedInfoAddressBuildingName = null,
        public ?string $fixedInfoAddressFlatNumber = null,
        public ?string $fixedInfoAddressBuildingNumber = null,
        public ?string $fixedInfoAddressFormattedAddress = null,
    ) {
    }
}