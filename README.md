# Premierstacks Public Preview

**This file has been extracted from: [https://github.com/premierstacks//home/tom/src/github/premierstacks/php-stack/](https://github.com/premierstacks//home/tom/src/github/premierstacks/php-stack/)**

Premierstacks is a collection of proprietary stacks and templates for PHP, JavaScript, TypeScript, React, and Laravel. Because these repositories are private and accessible only through a valid license, we offer this public preview to provide transparency and allow potential users to review the content before making a purchase.

By extracting key documentation and selected sample files to public repositories, we ensure that you can evaluate the quality, structure, and approach of Premierstacks without needing full access. This way, you can make an informed decision about whether our solutions are the right fit for your projects.

To access the complete repositories, along with continuous updates and premium support, a valid Premierstacks license is required.

**Purchase a license here: [GitHub Sponsors](https://github.com/sponsors/tomchochola).**

---

**Original content starts here!**

---

# [PHP Stack](https://github.com/premierstacks/php-stack) by [Tomáš Chochola](https://github.com/tomchochola)

✨ _**Clone and Win!**_

The PHP Stack is a versatile set of utility libraries and helper functions for PHP projects, designed to simplify common development tasks and provide robust support for building scalable and maintainable applications. It offers a cohesive set of tools that integrate seamlessly into any PHP project, helping developers work more efficiently.

## What is PHP Stack?

The PHP Stack is a specialized set of utility libraries and helper functions designed to optimize the development experience for PHP applications. It provides tools for common tasks like data manipulation, HTTP requests, encoding, and structured data handling, all while maintaining a clean and consistent API.

This stack is organized into various modules to cover different development needs. Whether you’re working with JSON APIs, managing file resources, or implementing custom data structures, the PHP Stack offers pre-built solutions that integrate seamlessly into any PHP project. With dedicated components for both backend logic and general-purpose utilities, it ensures your projects remain well-organized and easy to maintain.

Unlike traditional libraries that focus on a narrow set of features, the PHP Stack is built to provide a holistic development experience. It reduces dependency conflicts, enforces best practices, and allows for quick setup, so you can spend less time configuring tools and more time building features.

## What is Tomchochola

[https://github.com/tomchochola](https://github.com/tomchochola)

This is my personal GitHub profile, where you’ll find public documentation and sample repositories for proprietary packages and templates from Premierstacks. These public repositories are designed to give you an overview of the best practices and high-quality code I follow in all my projects.

## What is Premierstacks

[https://github.com/premierstacks](https://github.com/premierstacks)

Premierstacks is a collection of exclusive, proprietary stacks and templates for PHP, JavaScript, TypeScript, React, and Laravel. It was created to address the common pain points developers face with many open-source projects—quality, consistency, and maintainability. With Premierstacks, you get high-quality tools built with strict attention to detail, designed to help you build and maintain better projects, faster.

## Why Premierstacks?

I created Premierstacks because I wasn’t satisfied with the quality of many open-source projects. Maintaining high-quality code and ensuring long-term reliability is challenging when you’re not earning from the product. When you pay for something, it means the creator truly cares about its success and is committed to delivering the best possible outcome.

Like Apple’s approach with their closed ecosystem, I believe that true excellence can only be achieved when every detail is under your control. That’s why Premierstacks is proprietary software—it's not just about providing solutions; it’s about ensuring those solutions meet the highest standards.

### Why You Should Choose Premierstacks

**🚀 Unmatched Quality**

Our solutions adhere to the highest standards, ensuring clean and maintainable code.

**⚙️ No Setup Hassles**

Pre-configured environments let you start coding immediately—no more complex setups.

**📦 Reuse Across Projects**

Each library and template is built to be reusable, reducing long-term maintenance.

**🔒 Exclusive Resources**

Premierstacks offers tools you won’t find in typical open-source collections.

**🛠️ Always Up-to-Date**

Receive continuous updates and new features, keeping your projects current.

**💪 Expert Creators**

Developed by experienced professionals dedicated to quality and excellence.

## License

**© 2024–Present Tomáš Chochola <chocholatom1997@gmail.com>. All rights reserved.**

This software is proprietary and licensed under specific terms set by its owner.<br />
Any form of access, use, or distribution requires a valid and active license.<br />
For full licensing terms, refer to the LICENSE.md file accompanying this software.<br />

**Purchase a license here: [Github Sponsors](https://github.com/sponsors/tomchochola)**

**See full terms here: [/LICENSE.md](/LICENSE.md)**

## Module exports

Here are the available module exports:

```php
use Premierstacks/PhpStack/Debug/Debugf;
use Premierstacks/PhpStack/Debug/Errorf;
use Premierstacks/PhpStack/Encoding/Csv;
use Premierstacks/PhpStack/Encoding/DataUri;
use Premierstacks/PhpStack/Encoding/Hash;
use Premierstacks/PhpStack/Encoding/Json;
use Premierstacks/PhpStack/Encoding/Signature;
use Premierstacks/PhpStack/Encoding/Svg;
use Premierstacks/PhpStack/Enums/Undefined;
use Premierstacks/PhpStack/Enums/Unknown;
use Premierstacks/PhpStack/Fake/Svg;
use Premierstacks/PhpStack/Http/Client;
use Premierstacks/PhpStack/Http/Message;
use Premierstacks/PhpStack/Http/NetworkException;
use Premierstacks/PhpStack/Http/Request;
use Premierstacks/PhpStack/Http/Response;
use Premierstacks/PhpStack/Http/Stream;
use Premierstacks/PhpStack/Http/Uri;
use Premierstacks/PhpStack/IO/ResourceObject;
use Premierstacks/PhpStack/JsonApi/JsonApi;
use Premierstacks/PhpStack/JsonApi/JsonApiAttributes;
use Premierstacks/PhpStack/JsonApi/JsonApiDocument;
use Premierstacks/PhpStack/JsonApi/JsonApiDocumentInterface;
use Premierstacks/PhpStack/JsonApi/JsonApiError;
use Premierstacks/PhpStack/JsonApi/JsonApiErrorInterface;
use Premierstacks/PhpStack/JsonApi/JsonApiErrors;
use Premierstacks/PhpStack/JsonApi/JsonApiInterface;
use Premierstacks/PhpStack/JsonApi/JsonApiLink;
use Premierstacks/PhpStack/JsonApi/JsonApiLinkInterface;
use Premierstacks/PhpStack/JsonApi/JsonApiLinks;
use Premierstacks/PhpStack/JsonApi/JsonApiMeta;
use Premierstacks/PhpStack/JsonApi/JsonApiRelationship;
use Premierstacks/PhpStack/JsonApi/JsonApiRelationshipInterface;
use Premierstacks/PhpStack/JsonApi/JsonApiRelationships;
use Premierstacks/PhpStack/JsonApi/JsonApiResource;
use Premierstacks/PhpStack/JsonApi/JsonApiResourceIdentifier;
use Premierstacks/PhpStack/JsonApi/JsonApiResourceIdentifierInterface;
use Premierstacks/PhpStack/JsonApi/JsonApiResourceInterface;
use Premierstacks/PhpStack/JsonApi/JsonApiSerializer;
use Premierstacks/PhpStack/JsonApi/JsonApiSource;
use Premierstacks/PhpStack/JsonApi/JsonApiSourceInterface;
use Premierstacks/PhpStack/JsonApi/NullInterface;
use Premierstacks/PhpStack/JsonApi/NullJsonApiLink;
use Premierstacks/PhpStack/JsonApi/NullJsonApiResource;
use Premierstacks/PhpStack/JsonApi/NullJsonApiResourceIdentifier;
use Premierstacks/PhpStack/JsonApi/ThrowableDebugJsonApiMeta;
use Premierstacks/PhpStack/JsonApi/ThrowableJsonApiError;
use Premierstacks/PhpStack/JsonApi/ThrowableJsonApiErrors;
use Premierstacks/PhpStack/Mixed/Assert;
use Premierstacks/PhpStack/Mixed/Check;
use Premierstacks/PhpStack/Mixed/Filter;
use Premierstacks/PhpStack/Mixed/Is;
use Premierstacks/PhpStack/Random/Random;
use Premierstacks/PhpStack/Structures/Struct;
use Premierstacks/PhpStack/Structures/Structs;
use Premierstacks/PhpStack/Testing/PHPUnit;
use Premierstacks/PhpStack/Testing/TestIntEnum;
use Premierstacks/PhpStack/Testing/TestInterface;
use Premierstacks/PhpStack/Testing/TestStringEnum;
use Premierstacks/PhpStack/Testing/TestTrait;
use Premierstacks/PhpStack/Types/Arrays;
use Premierstacks/PhpStack/Types/Files;
use Premierstacks/PhpStack/Types/Resources;
use Premierstacks/PhpStack/Types/Strings;
```

## Samples

Explore the samples in the [/samples](/samples) directory to see how to use the package in various scenarios.

**[/samples/json_api_errors.php](/samples/json_api_errors.php)**<br />
**[/samples/json_api_resources.php](/samples/json_api_resources.php)**<br />
**[/samples/io.php](/samples/io.php)**<br />

## Getting Started

**1. Review the documentation and license**

Ensure this package fits your needs and that you agree with the terms.

**2. Obtain a license**

**Purchase a license here: [Github Sponsors](https://github.com/sponsors/tomchochola)**

**3. Install the package**

Setup composer repostory:

```bash
composer config repositories.premierstacks/php-stack git https://github.com/premierstacks/php-stack.git
```

Install using composer:

```bash
composer require --dev premierstacks/php-stack:@dev
```

**4. See the samples**

Explore the samples in the [/samples](/samples) directory to see how to use the package in various scenarios.

**5. Use the package**

Start using the package in your project.

## About the Creator

I'm Tomáš Chochola, a software developer dedicated to creating exclusive, enterprise-grade software solutions. I specialize in building packages and templates for PHP, JavaScript, and TypeScript, tailored to streamline development workflows, enforce best practices, and save you time.

My mission is to develop reusable solutions that enhance code quality, boost productivity, and ensure that projects remain maintainable and scalable over the long term.

### Specializations

**Backend Development:** Expert in PHP and Laravel<br />
**Frontend Development:** Mastery in TypeScript, React, and JavaScript<br />
**DevOps:** Proficient in managing Ubuntu and AWS environments<br />
**Security:** Focused on implementing best practices and enforcing code standards<br />
**Tooling:** Extensive experience with ESLint, Prettier, PHP CS Fixer, Stylelint, and PHPStan<br />
**Reusable Solutions:** Creating templates and configuration stacks for optimized development<br />
**Development Environments:** Fluent in Windows 11 and Ubuntu (WSL2)<br />

## Contact

**📧 Email: <chocholatom1997@gmail.com>**<br />
**💻 Website: [https://premierstacks.com](https://premierstacks.com)**<br />
**👨 GitHub Personal: [https://github.com/tomchochola](https://github.com/tomchochola)**<br />
**🏢 GitHub Organization: [https://github.com/premierstacks](https://github.com/premierstacks)**<br />
**💰 GitHub Sponsors: [https://github.com/sponsors/tomchochola](https://github.com/sponsors/tomchochola)**<br />

## Tree

The following is a breakdown of the folder and file structure within this repository. It provides an overview of how the code is organized and where to find key components.

```bash
.
├── .editorconfig
├── .gitattributes
├── .gitignore
├── .php-cs-fixer.php
├── .prettierignore
├── AUTHORS.md
├── LICENSE.md
├── Makefile
├── README.md
├── composer.json
├── eslint.config.js
├── package.json
├── phpstan.neon
├── phpunit.xml
├── prettier.config.js
├── samples
│   ├── io.php
│   ├── json_api_errors.php
│   └── json_api_resources.php
├── src
│   ├── Debug
│   │   ├── Debugf.php
│   │   └── Errorf.php
│   ├── Encoding
│   │   ├── Csv.php
│   │   ├── DataUri.php
│   │   ├── Hash.php
│   │   ├── Json.php
│   │   ├── Signature.php
│   │   └── Svg.php
│   ├── Enums
│   │   ├── Undefined.php
│   │   └── Unknown.php
│   ├── Fake
│   │   └── Svg.php
│   ├── Http
│   │   ├── Client.php
│   │   ├── Message.php
│   │   ├── NetworkException.php
│   │   ├── Request.php
│   │   ├── Response.php
│   │   ├── Stream.php
│   │   └── Uri.php
│   ├── IO
│   │   └── ResourceObject.php
│   ├── JsonApi
│   │   ├── JsonApi.php
│   │   ├── JsonApiAttributes.php
│   │   ├── JsonApiDocument.php
│   │   ├── JsonApiDocumentInterface.php
│   │   ├── JsonApiError.php
│   │   ├── JsonApiErrorInterface.php
│   │   ├── JsonApiErrors.php
│   │   ├── JsonApiInterface.php
│   │   ├── JsonApiLink.php
│   │   ├── JsonApiLinkInterface.php
│   │   ├── JsonApiLinks.php
│   │   ├── JsonApiMeta.php
│   │   ├── JsonApiRelationship.php
│   │   ├── JsonApiRelationshipInterface.php
│   │   ├── JsonApiRelationships.php
│   │   ├── JsonApiResource.php
│   │   ├── JsonApiResourceIdentifier.php
│   │   ├── JsonApiResourceIdentifierInterface.php
│   │   ├── JsonApiResourceInterface.php
│   │   ├── JsonApiSerializer.php
│   │   ├── JsonApiSource.php
│   │   ├── JsonApiSourceInterface.php
│   │   ├── NullInterface.php
│   │   ├── NullJsonApiLink.php
│   │   ├── NullJsonApiResource.php
│   │   ├── NullJsonApiResourceIdentifier.php
│   │   ├── ThrowableDebugJsonApiMeta.php
│   │   ├── ThrowableJsonApiError.php
│   │   └── ThrowableJsonApiErrors.php
│   ├── Mixed
│   │   ├── Assert.php
│   │   ├── Check.php
│   │   ├── Filter.php
│   │   └── Is.php
│   ├── Random
│   │   └── Random.php
│   ├── Structures
│   │   ├── Struct.php
│   │   └── Structs.php
│   ├── Testing
│   │   ├── PHPUnit.php
│   │   ├── TestIntEnum.php
│   │   ├── TestInterface.php
│   │   ├── TestStringEnum.php
│   │   └── TestTrait.php
│   └── Types
│       ├── Arrays.php
│       ├── Files.php
│       ├── Resources.php
│       └── Strings.php
└── tests
    └── Unit
        ├── Http
        │   ├── ClientTest.php
        │   ├── MessageTest.php
        │   ├── NetworkExceptionTest.php
        │   ├── RequestTest.php
        │   ├── ResponseTest.php
        │   ├── StreamTest.php
        │   └── UriTest.php
        ├── JsonApi
        │   └── JsonApiSerializerTest.php
        ├── Mixed
        │   ├── AssertTest.php
        │   └── CheckTest.php
        ├── Structures
        │   └── StructTest.php
        └── TestCase.php

20 directories, 94 files
```
