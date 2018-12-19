<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Kyc;

final class RejectionReasons
{
    const REASON_MISSING_DOCUMENT_PHOTO = 1;
    const REASON_DOCUMENT_NOT_ACCEPTED = 2;
    const REASON_DATA_IN_DOCUMENT_DOES_NOT_MATCH = 3;
    const REASON_MATCHED_IN_SANCTIONS_LISTS = 4;
    const REASON_MISSING_INDIVIDUAL_MEDIA = 5;
    const REASON_FACE_IN_SELFIE_DOES_NOT_MATCH = 6;
    const REASON_POOR_PHOTO_QUALITY = 7;
    const REASON_POOR_LIGHTNING_PHOTO_IS_TOO_DARK = 8;
    const REASON_BLURRED_PHOTO = 9;
    const REASON_FACE_PHOTO_UPLOAD_FORMAT = 10;
    const REASON_MISCELLANEOUS = 11;
}