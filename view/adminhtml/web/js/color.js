/**
 * TurboLinks Extension for Magento 2
 *
 * @author     Volodymyr Konstanchuk http://konstanchuk.com
 * @copyright  Copyright (c) 2017 The authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 */
define(
    [
        'jquery',
        'https://cdnjs.cloudflare.com/ajax/libs/jscolor/2.0.4/jscolor.min.js'
    ],
    function ($) {
        return function (config) {
            var elem = $('#' + config.element_id);
            if (elem) {
                elem.addClass('jscolor {hash:true}');
                jscolor.installByClassName('jscolor');
            }
        };
    }
);