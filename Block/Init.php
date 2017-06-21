<?php

/**
 * TurboLinks Extension for Magento 2
 *
 * @author     Volodymyr Konstanchuk http://konstanchuk.com
 * @copyright  Copyright (c) 2017 The authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 */

namespace Konstanchuk\TurboLinks\Block;

use Magento\Framework\View\Element\Template;
use Konstanchuk\TurboLinks\Helper\Data as Helper;


class Init extends Template
{
    /** @var Helper */
    protected $_helper;

    public function __construct(
        Template\Context $context,
        Helper $helper,
        array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->_helper = $helper;
    }

    public function getHelper()
    {
        return $this->_helper;
    }
}