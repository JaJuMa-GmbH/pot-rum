<?php
/**
 * @author    JaJuMa GmbH <info@jajuma.de>
 * @copyright Copyright (c) 2023 JaJuMa GmbH <https://www.jajuma.de>. All rights reserved.
 * @license   http://opensource.org/licenses/mit-license.php MIT License
 */

namespace Jajuma\PotRum\Block\PowerToys;

use Jajuma\PowerToys\Block\PowerToys\Dashboard;
use Magento\Framework\View\Element\Template\Context;
use Jajuma\PotRum\Helper\Config as HelperConfig;
use Jajuma\Rum\Block\Adminhtml\Rum\View\Card\PercentileContent;

class RumDashboard extends Dashboard
{
    /**
     * @var HelperConfig
     */
    protected $helperConfig;

    /**
     * @var PercentileContent
     */
    protected $percentileContent;

    /**
     * @param Context $context
     * @param HelperConfig $helperConfig
     * @param PercentileContent $percentileContent
     * @param array $data
     */
    public function __construct(
        Context $context,
        HelperConfig $helperConfig,
        PercentileContent $percentileContent,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->helperConfig = $helperConfig;
        $this->percentileContent = $percentileContent;
    }

    /**
     * Is Enable
     *
     * @return bool
     */
    public function isEnable(): bool
    {
        return $this->helperConfig->isEnable();
    }

    /**
     * Get kpi keys sort
     *
     * @return string[]
     */
    public function getKpiKeysSort()
    {
        return $this->percentileContent->getKpiKeysSort();
    }

    /**
     * Get base value
     *
     * @return array
     */
    public function getBaseValue()
    {
        return $this->percentileContent->getBaseValue();
    }

    /**
     * Get card data
     *
     * @return mixed
     */
    public function getCardData()
    {
        return $this->percentileContent->getCardData();
    }

    /**
     * Get card info cache hits
     *
     * @return array|bool|float|int|string|null
     */
    public function getCardInfoCacheHits()
    {
        return $this->percentileContent->getCardInfoCacheHits();
    }

    /**
     * Get card info error log
     *
     * @return array|bool|float|int|string|null
     */
    public function getCardInfoErrorLog()
    {
        return $this->percentileContent->getCardInfoErrorLog();
    }
}
