<?php

/**
 * TurboLinks Extension for Magento 2
 *
 * @author     Volodymyr Konstanchuk http://konstanchuk.com
 * @copyright  Copyright (c) 2017 The authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 */

namespace Konstanchuk\TurboLinks\Block;

use Magento\Config\Block\System\Config\Form\Field;
use Magento\Framework\Data\Form\Element\AbstractElement;


class Color extends Field
{
    protected function _getElementHtml(AbstractElement $element)
    {
        $html = $element->getElementHtml();
        $html .= sprintf(
            '<script type="text/x-magento-init">%s</script>',
            json_encode([
                '*' => [
                    'Konstanchuk_TurboLinks/js/color' => [
                        'element_id' => $element->getHtmlId(),
                        'value' => $element->getData('value')
                    ]
                ]
            ], JSON_FORCE_OBJECT)
        );
        return $html;
    }
}