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
use Premierstacks\PhpStack\JsonApi\JsonApi;
use Premierstacks\PhpStack\JsonApi\JsonApiAttributes;
use Premierstacks\PhpStack\JsonApi\JsonApiDocument;
use Premierstacks\PhpStack\JsonApi\JsonApiLink;
use Premierstacks\PhpStack\JsonApi\JsonApiLinks;
use Premierstacks\PhpStack\JsonApi\JsonApiMeta;
use Premierstacks\PhpStack\JsonApi\JsonApiRelationship;
use Premierstacks\PhpStack\JsonApi\JsonApiRelationships;
use Premierstacks\PhpStack\JsonApi\JsonApiResource;
use Premierstacks\PhpStack\JsonApi\JsonApiSerializer;

$meta = new JsonApiMeta(
    [
        'meta' => 'meta',
    ],
);

$link = new JsonApiLink(
    'https://example.com',
    'rel',
    'https://example.com/describedby',
    'Example',
    'text/html',
    [
        'en',
    ],
    $meta,
);

$links = new JsonApiLinks(
    [
        'self' => $link,
    ],
);

$attributes = new JsonApiAttributes(
    [
        'key' => 'value',
    ],
);

$product = new JsonApiResource(
    '1',
    'milk-shake',
    'products',
    $attributes,
    null,
    $links,
    $meta,
);

$relationship = new JsonApiRelationship(
    $product,
    $links,
    $meta,
);

$relationships = new JsonApiRelationships(
    [
        'product' => $relationship,
    ],
);

$company = new JsonApiResource(
    '1',
    'milk-shake-shop',
    'companies',
    $attributes,
    $relationships,
    $links,
    $meta,
);

$jsonApi = new JsonApi(
    '1.0',
    [
        'https://jsonapi.org/ext/atomic',
    ],
    [
        'http://example.com/profiles/flexible-pagination',
    ],
    $meta,
);

$document = new JsonApiDocument(
    [
        $company,
    ],
    null,
    $meta,
    $links,
    $jsonApi,
);

$serializer = new JsonApiSerializer();

$serialized = $serializer->serialize($document);

echo Json::encode($serialized, \JSON_PRETTY_PRINT);
