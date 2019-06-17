<?php

namespace FondOfSpryker\Client\CustomerPriceProductPriceListPageSearch;

use FondOfSpryker\Client\CustomerPriceProductPriceListPageSearch\Dependency\Client\CustomerPriceProductPriceListPageSearchToCustomerClientInterface;
use Spryker\Client\Kernel\AbstractFactory;

class CustomerPriceProductPriceListPageSearchFactory extends AbstractFactory
{
    /**
     * @throws
     *
     * @return \FondOfSpryker\Client\CustomerPriceProductPriceListPageSearch\Dependency\Client\CustomerPriceProductPriceListPageSearchToCustomerClientInterface
     */
    public function getCustomerClient(): CustomerPriceProductPriceListPageSearchToCustomerClientInterface
    {
        return $this->getProvidedDependency(CustomerPriceProductPriceListPageSearchDependencyProvider::CLIENT_CUSTOMER);
    }
}
