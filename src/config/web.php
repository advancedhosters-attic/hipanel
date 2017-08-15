<?php
/**
 * AdvancedHosters implementation of HiPanel
 *
 * @link      https://advancedhosters.com/
 * @package   hipanel
 * @license   proprietary
 * @copyright Copyright (c) 2015-2017, AdvancedHosters (https://advancedhosters.com/)
 */

return [
    'container' => [
        'definitions' => [
            \hipanel\modules\finance\logic\ServerTariffCalculatorInterface::class => \advancedhosters\hipanel\cart\ServerTariffCalculator::class,
        ],
        'singletons' => [
            \hipanel\modules\finance\models\ServerResourceTypesProviderInterface::class => \advancedhosters\hipanel\server\ServerResourceTypesProvider::class
        ],
    ],
];
