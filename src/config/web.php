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
    'modules' => [
        'language' => [
            'languages' => [
                'en' => 'English',
                'ru' => 'Русский',
            ],
        ],
    ],
    'container' => [
        'definitions' => [
            \hipanel\modules\finance\logic\ServerTariffCalculatorInterface::class => \advancedhosters\hipanel\cart\ServerTariffCalculator::class,
            \hiqdev\thememanager\menus\AbstractSidebarMenu::class => [
                'add' => [
                    'websa' => [
                        'menu' => [
                            'class' => \advancedhosters\hipanel\menus\SidebarMenu::class,
                        ],
                        'where' => [
                            'after' => ['servers', 'domains', 'stock', 'finance', 'clients', 'dashboard'],
                            'before' => ['tickets'],
                        ],
                    ],
                ],
            ],
        ],
        'singletons' => [
            \hipanel\modules\finance\models\ServerResourceTypesProviderInterface::class => \advancedhosters\hipanel\server\ServerResourceTypesProvider::class
        ],
    ],
];
