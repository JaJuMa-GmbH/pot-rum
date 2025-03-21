<?php
/**
 * @author    JaJuMa GmbH <info@jajuma.de>
 * @copyright Copyright (c) 2023 JaJuMa GmbH <https://www.jajuma.de>. All rights reserved.
 * @license   http://opensource.org/licenses/mit-license.php MIT License
 */

namespace Jajuma\PotRum\Helper;

use Magento\Store\Model\ScopeInterface;
use Magento\Framework\App\Helper\AbstractHelper;

class Config extends AbstractHelper
{
    public const NEWS_ENABLED = 'power_toys/rum/is_enabled';

    /**
     * Is enable
     *
     * @param $store
     * @return int
     */
    public function isEnable($store = null)
    {
        return (int) $this->scopeConfig->getValue(
            self::NEWS_ENABLED,
            ScopeInterface::SCOPE_STORE,
            $store
        );
    }
}
