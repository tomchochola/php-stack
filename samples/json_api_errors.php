<?php

/**
 * @author Tomáš Chochola <chocholatom1997@gmail.com>
 * @copyright © 2024–Present Tomáš Chochola <chocholatom1997@gmail.com>. All rights reserved.
 *
 * @license
 *
 * This software is proprietary and licensed under specific terms set by its owner.
 * Any form of access, use, or distribution requires a valid and active license.
 * For full licensing terms, refer to the LICENSE.md file accompanying this software.
 *
 * @see {@link https://premierstacks.com} Website
 * @see {@link https://github.com/tomchochola} GitHub Personal
 * @see {@link https://github.com/premierstacks} GitHub Organization
 * @see {@link https://github.com/sponsors/tomchochola} GitHub Sponsors
 */

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use Premierstacks\PhpStack\Encoding\Json;
use Premierstacks\PhpStack\JsonApi\JsonApiDocument;
use Premierstacks\PhpStack\JsonApi\JsonApiError;
use Premierstacks\PhpStack\JsonApi\JsonApiErrors;
use Premierstacks\PhpStack\JsonApi\JsonApiSerializer;
use Premierstacks\PhpStack\JsonApi\JsonApiSource;

$errors = new JsonApiErrors(
    [
        new JsonApiError(
            'bfe952eb-53ce-474a-ba8e-cef101b3cb9d',
            null,
            '400',
            '1000',
            'name is required',
            'the name field is required for the resource',
            new JsonApiSource(
                '/data/attributes/name',
            ),
        ),
    ],
);

$document = new JsonApiDocument(
    null,
    $errors,
);

$serializer = new JsonApiSerializer();

$serialized = $serializer->serialize($document);

echo Json::encode($serialized, \JSON_PRETTY_PRINT);
