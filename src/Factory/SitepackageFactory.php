<?php

declare(strict_types=1);

/*
 * This file is part of the package t3o/get.typo3.org.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

namespace App\Factory;

use App\Form\Dto\SitepackageDto;
use App\Package\Sitepackage;

class SitepackageFactory
{
    public static function fromDto(SitepackageDto $dto, Sitepackage $entity = null): Sitepackage
    {
        $sitepackage = $entity ?? new Sitepackage();
        $sitepackage
            ->setBasePackage($dto->basePackage)
            ->setTypo3Version($dto->typo3Version)
            ->setTitle($dto->title ?? '')
            ->setDescription($dto->description ?? '')
            ->setExtensionKey($dto->extensionKey ?? '')
            ->setRepositoryUrl($dto->repositoryUrl ?? '')
            ->setComposerName($dto->composerName ?? '')
            ->setPsr4Namespace($dto->psr4Namespace ?? '')
            ->getAuthor()
            ->setName($dto->name ?? '')
            ->setEmail($dto->email ?? '')
            ->setCompany($dto->company ?? '')
            ->setHomepage($dto->homepage ?? '')
        ;

        return $sitepackage;
    }

    public static function fromEntity(Sitepackage $sitepackage): SitepackageDto
    {
        return SitepackageDto::fromEntity($sitepackage);
    }
}