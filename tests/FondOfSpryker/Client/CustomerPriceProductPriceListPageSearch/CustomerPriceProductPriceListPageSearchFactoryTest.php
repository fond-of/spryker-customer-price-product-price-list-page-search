<?php

namespace FondOfSpryker\Client\CustomerPriceProductPriceListPageSearch;

use Codeception\Test\Unit;
use FondOfSpryker\Client\CustomerPriceProductPriceListPageSearch\Dependency\Client\CustomerPriceProductPriceListPageSearchToCustomerClientInterface;
use Spryker\Client\Kernel\Container;

class CustomerPriceProductPriceListPageSearchFactoryTest extends Unit
{
    /**
     * @var \FondOfSpryker\Client\CustomerPriceProductPriceListPageSearch\CustomerPriceProductPriceListPageSearchFactory
     */
    protected $customerPriceProductPriceListPageSearchFactory;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\Spryker\Client\Kernel\Container
     */
    protected $containerMock;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\FondOfSpryker\Client\CustomerPriceProductPriceListPageSearch\Dependency\Client\CustomerPriceProductPriceListPageSearchToCustomerClientInterface
     */
    protected $customerPriceProductPriceListPageSearchToCustomerClientInterfaceMock;

    /**
     * @return void
     */
    protected function _before(): void
    {
        $this->containerMock = $this->getMockBuilder(Container::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->customerPriceProductPriceListPageSearchToCustomerClientInterfaceMock = $this->getMockBuilder(CustomerPriceProductPriceListPageSearchToCustomerClientInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->customerPriceProductPriceListPageSearchFactory = new CustomerPriceProductPriceListPageSearchFactory();
        $this->customerPriceProductPriceListPageSearchFactory->setContainer($this->containerMock);
    }

    /**
     * @return void
     */
    public function testGetCustomerClient(): void
    {
        $this->containerMock->expects($this->atLeastOnce())
            ->method('has')
            ->willReturn(true);

        $this->containerMock->expects($this->atLeastOnce())
            ->method('get')
            ->with(CustomerPriceProductPriceListPageSearchDependencyProvider::CLIENT_CUSTOMER)
            ->willReturn($this->customerPriceProductPriceListPageSearchToCustomerClientInterfaceMock);

        $this->assertInstanceOf(
            CustomerPriceProductPriceListPageSearchToCustomerClientInterface::class,
            $this->customerPriceProductPriceListPageSearchFactory->getCustomerClient()
        );
    }
}
