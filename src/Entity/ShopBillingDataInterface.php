<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\RefundPlugin\Entity;

use Sylius\Component\Resource\Model\ResourceInterface;

interface ShopBillingDataInterface extends ResourceInterface
{
    /**
     * @return mixed
     */
    public function getId();

    public function getCompany(): ?string;

    public function setCompany(?string $company): void;

    public function getTaxId(): ?string;

    public function setTaxId(?string $taxId): void;

    public function getCountryCode(): ?string;

    public function setCountryCode(?string $countryCode): void;

    public function getStreet(): ?string;

    public function setStreet(?string $street): void;

    public function getCity(): ?string;

    public function setCity(?string $city): void;

    public function getPostcode(): ?string;

    public function setPostcode(?string $postcode): void;

    /**
     * @return mixed
     *
     * @deprecated this function is deprecated and will be removed in v1.0.0. Use CustomerBillingDataInterface::getId() instead
     * @see CustomerBillingDataInterface::getId
     */
    public function id();

    /** @deprecated this function is deprecated and will be removed in v1.0.0. Use CustomerBillingDataInterface::getCompany() instead */
    public function company(): ?string;

    /** @deprecated this function is deprecated and will be removed in v1.0.0. Use CustomerBillingDataInterface::getTaxId() instead */
    public function taxId(): ?string;

    /** @deprecated this function is deprecated and will be removed in v1.0.0. Use CustomerBillingDataInterface::getCountryCode() instead */
    public function countryCode(): ?string;

    /** @deprecated this function is deprecated and will be removed in v1.0.0. Use CustomerBillingDataInterface::getStreet() instead */
    public function street(): ?string;

    /** @deprecated this function is deprecated and will be removed in v1.0.0. Use CustomerBillingDataInterface::getCity() instead */
    public function city(): ?string;

    /** @deprecated this function is deprecated and will be removed in v1.0.0. Use CustomerBillingDataInterface::getPostcode() instead */
    public function postcode(): ?string;
}
