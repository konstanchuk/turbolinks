<?php

/**
 * TurboLinks Extension for Magento 2
 *
 * @author     Volodymyr Konstanchuk http://konstanchuk.com
 * @copyright  Copyright (c) 2017 The authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 */

namespace Konstanchuk\TurboLinks\Helper;

use Magento\Framework\App\Helper\AbstractHelper;


class Data extends AbstractHelper
{
    const XML_PATH_LOADER_COLOR = 'web/konstanchuk_turbolinks/loader_color';

    public function getLoaderColor()
    {
        return trim($this->scopeConfig->getValue(static::XML_PATH_LOADER_COLOR));
    }
}