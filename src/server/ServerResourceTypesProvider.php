<?php
/**
 * AdvancedHosters implementation of HiPanel
 *
 * @link      https://advancedhosters.com/
 * @package   hipanel
 * @license   proprietary
 * @copyright Copyright (c) 2015-2017, AdvancedHosters (https://advancedhosters.com/)
 */

namespace advancedhosters\hipanel\server;

use hipanel\modules\finance\models\ServerResource;
use hipanel\modules\finance\models\ServerResourceTypesProviderInterface;
use Yii;

class ServerResourceTypesProvider
{
    public function getTypes()
    {
        return [
            ServerResource::TYPE_MONTHLY => Yii::t('hipanel:finance:tariff', 'Monthly fee'),
            ServerResource::TYPE_SUPPORT_TIME => Yii::t('hipanel:finance:tariff', 'Support time'),
            ServerResource::TYPE_IP_NUMBER => Yii::t('hipanel:finance:tariff', 'IP addresses count'),
            ServerResource::TYPE_SERVER_TRAF_MAX => Yii::t('hipanel:finance:tariff', 'Server traffic'),
            ServerResource::TYPE_SERVER_TRAF95_MAX => Yii::t('hipanel:finance:tariff', '95 percentile traffic'),
            ServerResource::TYPE_BACKUP_DU => Yii::t('hipanel:finance:tariff', 'Backup disk usage'),
        ];
    }
}
