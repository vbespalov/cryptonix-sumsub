<?php

declare(strict_types=1);

namespace Sumsub;

use GuzzleHttp\Client as GuzzleClient;
use Sumsub\Contract\CreateApplicantDto;
use Sumsub\Contract\CreateTransactionDto;
use Sumsub\Contract\VerificationLinkDto;
use Sumsub\Contract\WalletAddressDto;

class Client
{
    private const BASE_URL = 'https://api.sumsub.com';

    public function __construct(
        private readonly ?string $token = null,
        private readonly ?string $secretKey = null,
    ) {
    }

    public function createApplicant(CreateApplicantDto $dto): array
    {
        // https://docs.sumsub.com/reference/create-applicant
        $uri = '/resources/applicants?levelName=' . $dto->levelName;

        $data = [
            'externalUserId' => $dto->externalUserId,
            'sourceKey' => $dto->sourceKey,
            'email' => $dto->email,
            'phone' => $dto->phone,
            'lang' => $dto->lang,
            'fixedInfo' => [
                'firstName' => $dto->fixedInfoFirstName,
                'middleName' => $dto->fixedInfoMiddleName,
                'lastName' => $dto->fixedInfoLastName,
                'legalName' => $dto->fixedInfoLegalName,
                'gender' => $dto->fixedInfoGender,
                'dob' => $dto->fixedInfoDob,
                'placeOfBirth' => $dto->fixedInfoPlaceOfBirth,
                'countryOfBirth' => $dto->fixedInfoCountryOfBirth,
                'stateOfBirth' => $dto->fixedInfoStateOfBirth,
                'country' => $dto->fixedInfoCountry,
                'nationality' => $dto->fixedInfoNationality,
                'addresses' => [
                    [
                        'country' => $dto->fixedInfoAddressCountry,
                        'postCode' => $dto->fixedInfoAddressPostCode,
                        'town' => $dto->fixedInfoAddressTown,
                        'street' => $dto->fixedInfoAddressStreet,
                        'subStreet' => $dto->fixedInfoAddressSubStreet,
                        'state' => $dto->fixedInfoAddressState,
                        'buildingName' => $dto->fixedInfoAddressBuildingName,
                        'flatNumber' => $dto->fixedInfoAddressFlatNumber,
                        'buildingNumber' => $dto->fixedInfoAddressBuildingNumber,
                        'formattedAddress' => $dto->fixedInfoAddressFormattedAddress,
                    ],
                ],
                'tin' => $dto->fixedInfoTin,
                'taxResidenceCountry' => $dto->fixedInfoTaxResidenceCountry,
            ],
            'type' => $dto->type,
        ];

        return $this->sendRequest($uri, 'POST', $data);
    }

    public function getApplicantData(string $applicantId): array
    {
        // https://docs.sumsub.com/reference/get-applicant-data
        $uri = sprintf('/resources/applicants/%s/one', $applicantId);
        return $this->sendRequest($uri, 'GET');
    }

    public function getTransactionInfo(string $sumsubTxnId): array
    {
        // https://docs.sumsub.com/reference/get-transaction
        $uri = sprintf('/resources/kyt/txns/%s/one', $sumsubTxnId);
        return $this->sendRequest(
            $uri,
            'GET'
        );
    }

    public function submitTransaction(CreateTransactionDto $dto): array
    {
        // https://docs.sumsub.com/reference/submit-transaction-for-existing-applicant
        $uri = sprintf('/resources/applicants/%s/kyt/txns/-/data', $dto->applicantId);
        $data = [
            'txnId' => $dto->txnId,
            'txnDate' => $dto->txnDate,
            'type' => $dto->type,
            'info' => [
                'direction' => $dto->infoDirection,
                'amount' => $dto->infoAmount,
                'amountInDefaultCurrency' => $dto->infoAmountInDefaultCurrency,
                'currencyType' => $dto->infoCurrencyType,
                'currencyCode' => $dto->infoCurrencyCode,
                'cryptoParams' => [
                    'attemptId' => $dto->infoCryptoParamsAttemptId,
                    'outputIndex' => $dto->infoCryptoParamsOutputIndex,
                    'cryptoChain' => $dto->infoCryptoParamsCryptoChain,
                ],
                'paymentTxnId' => $dto->infoPaymentTxnId,
                'paymentDetails' => $dto->infoPaymentDetails,
                'type' => $dto->infoType,
            ],
            'sourceKey' => $dto->sourceKey,
            'applicant' => [
                'type' => $dto->applicantType,
                'externalUserId' => $dto->applicantExternalUserId,
                'fullName' => $dto->applicantFullName,
                'placeOfBirth' => $dto->applicantPlaceOfBirth,
                'dob' => $dto->applicantDob,
                'address' => [
                    'country' => $dto->applicantAddressCountry,
                    'postCode' => $dto->applicantAddressPostCode,
                    'town' => $dto->applicantAddressTown,
                    'street' => $dto->applicantAddressStreet,
                    'subStreet' => $dto->applicantAddressSubStreet,
                    'state' => $dto->applicantAddressState,
                    'buildingName' => $dto->applicantAddressBuildingName,
                    'flatNumber' => $dto->applicantAddressFlatNumber,
                    'buildingNumber' => $dto->applicantAddressBuildingNumber,
                    'formattedAddress' => $dto->applicantAddressFormattedAddress,
                ],
                'paymentMethod' => [
                    'type' => $dto->applicantPaymentMethodType,
                    'accountId' => $dto->applicantPaymentMethodAccountId,
                ],
            ],
            'counterparty' => [
                'type' => $dto->counterpartyType,
                'externalUserId' => $dto->counterpartyExternalUserId,
                'fullName' => $dto->counterpartyFullName,
                'placeOfBirth' => $dto->counterpartyPlaceOfBirth,
                'dob' => $dto->counterpartyDob,
                'address' => [
                    'country' => $dto->counterpartyAddressCountry,
                    'postCode' => $dto->counterpartyAddressPostCode,
                    'town' => $dto->counterpartyAddressTown,
                    'street' => $dto->counterpartyAddressStreet,
                    'subStreet' => $dto->counterpartyAddressSubStreet,
                    'state' => $dto->counterpartyAddressState,
                    'buildingName' => $dto->counterpartyAddressBuildingName,
                    'flatNumber' => $dto->counterpartyAddressFlatNumber,
                    'buildingNumber' => $dto->counterpartyAddressBuildingNumber,
                    'formattedAddress' => $dto->counterpartyAddressFormattedAddress,
                ],
                'paymentMethod' => [
                    'type' => $dto->counterpartyPaymentMethodType,
                    'accountId' => $dto->counterpartyPaymentMethodAccountId,
                ],
            ],
        ];

        return $this->sendRequest(
            $uri,
            'POST',
            $data
        );
    }

    public function patchTransactionWithChainTransactionId(string $sumsubTransactionId, string $paymentTxnId): array
    {
        // https://docs.sumsub.com/reference/patch-transaction-with-chain-txid
        $uri = sprintf('/resources/kyt/txns/%s/data/info', $sumsubTransactionId);
        return $this->sendRequest(
            $uri,
            'PATCH',
            ['paymentTxnId' => $paymentTxnId]
        );
    }

    /**
     * @param WalletAddressDto[] $walletAddresses
     * @return array
     */
    public function submitWalletAddresses(array $walletAddresses): array
    {
        // https://docs.sumsub.com/reference/import-wallet-addresses
        $uri = '/resources/kyt/walletAddress/import';
        $body = [];
        foreach ($walletAddresses as $walletAddress) {
            $body[] = (array)$walletAddress;
        }

        return $this->sendRequest(
            $uri,
            'POST',
            $body
        );
    }

    /**
     * @param VerificationLinkDto $dto
     * @param int $ttl
     * @return array|\Exception[]
     */
    public function getExternalWebSdkLink(VerificationLinkDto $dto, int $ttl = 1800): array
    {
        // https://docs.sumsub.com/reference/generate-websdk-external-link
        $uri = '/resources/sdkIntegrations/levels/-/websdkLink';
        $body = [
            'levelName' => $dto->levelName,
            'userId' => $dto->userUuid,
            'applicantIdentifiers' => [
                'email' => $dto->email,
            ],
            'ttlInSecs' => $ttl,
        ];

        return $this->sendRequest(
            $uri,
            'POST',
            $body
        );
    }

    public function getVerificationLevels(): array
    {
        // https://docs.sumsub.com/reference/get-applicant-levels
        $uri = '/resources/applicants/-/levels';
        return $this->sendRequest(
            $uri,
            'GET'
        );
    }

    public function changeApplicantStatus(string $applicantId, bool $isActive = false): array
    {
        // https://docs.sumsub.com/reference/deactivate-applicant-profile
        $status = $isActive ? 'activated' : 'deactivated';
        $uri = sprintf('/resources/applicants/%s/presence/%s', $applicantId, $status);

        return $this->sendRequest(
            $uri,
            'PATCH'
        );
    }

    public function getApplicantInfo(string $applicantId): array
    {
        // https://docs.sumsub.com/reference/get-applicant-data
        $uri = sprintf('/resources/applicants/%s/one', $applicantId);

        return $this->sendRequest(
            $uri,
            'GET'
        );
    }

    public function moveApplicantToLevel(string $applicantId, string $nextLevel): array
    {
        // https://docs.sumsub.com/reference/change-level-and-reset-steps
        $uri = sprintf('/resources/applicants/%s/moveToLevel?name=%s', $applicantId, rawurlencode($nextLevel));

        return $this->sendRequest(
            $uri,
            'POST'
        );
    }

    public function getApplicantReviewStatus(string $applicantId): array
    {
        // https://docs.sumsub.com/reference/get-applicant-review-status
        $uri = sprintf('/resources/applicants/{%s}/status', $applicantId);

        return $this->sendRequest(
            $uri,
            'GET'
        );
    }

    public function requestApplicantCheck(string $applicantId): array
    {
        // https://docs.sumsub.com/reference/request-applicant-check
        $uri = sprintf('/resources/applicants/%s/status/pending', $applicantId);

        return $this->sendRequest(
            $uri,
            'POST'
        );
    }

    private function sendRequest(string $uri, string $method, array $body = []): array
    {
        if (!$this->token || !$this->secretKey) {
            return [];
        }

        $body = $this->removeEmptyValues($body);

        $client = new GuzzleClient();
        $currentTimestamp = time();

        if ($method === 'GET' && !empty($body)) {
            $uri .= '?' . http_build_query($body);
        }

        try {
            $options = [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'X-App-Token' => $this->token,
                    'X-App-Access-Sig' => $this->signRequest($currentTimestamp, $method, $uri, $body),
                    'X-App-Access-Ts' => $currentTimestamp
                ],
            ];

            if (!empty($body)) {
                $options['json'] = $body;
            }

            $response = $client->request($method, self::BASE_URL . $uri, $options);

            $responseBody = $response->getBody()->getContents();
            return json_decode($responseBody, true);
        } catch (\Exception $e) {
            return ['exception' => $e];
        }
    }

    private function signRequest(int $timestamp, string $method, string $uri, array $body = []): string
    {
        $signatureString = sprintf(
            '%s%s%s%s',
            $timestamp,
            $method,
            $uri,
            $body ? json_encode($body) : ''
        );

        return hash_hmac('sha256', $signatureString, $this->secretKey);
    }

    private function removeEmptyValues(array $array): array
    {
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $array[$key] = $this->removeEmptyValues($value);
                if (empty($array[$key])) {
                    unset($array[$key]);
                }
            } elseif ($value === null || $value === '') {
                unset($array[$key]);
            }
        }

        return $array;
    }
}