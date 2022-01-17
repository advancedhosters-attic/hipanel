<?php

namespace advancedhosters\hipanel\menus;

use hiqdev\yii2\menus\Menu;
use Yii;

class SidebarMenu extends Menu
{
    public function items()
    {
        $isVisible = true;
        $targetBlank = [
            'target'    => '_blank',
            'rel'       => 'noopener noreferrer',
        ];

        return [
            'cloud_servers' => [
                'label' => Yii::t('hipanel', 'Cloud Servers'),
                'url' => 'https://websa.advancedhosting.com/servers',
                'icon' => 'fa-cloud',
                'visible' => $isVisible,
                'linkOptions' => $targetBlank,
            ],
            'cloud_storage' => [
                'label' => Yii::t('hipanel', 'Cloud Storage'),
                'url' => 'https://websa.advancedhosting.com/bucketList',
                'icon' => 'fa-cloud-upload',
                'visible' => $isVisible,
                'linkOptions' => $targetBlank,
            ],
            'video_cdn' => [
                'label' => Yii::t('hipanel', 'VideoCDN'),
                'url' => 'https://vcp.advancedhosting.com/dashboard',
                'icon' => 'fa-video-camera',
                'visible' => $isVisible,
                'linkOptions' => $targetBlank,
            ],
            'anycast_cdn' => [
                'label' => Yii::t('hipanel', 'Anycast CDN'),
                'url' => 'https://websa.advancedhosting.com/cdn',
                'icon' => 'fa-globe',
                'visible' => $isVisible,
                'linkOptions' => $targetBlank,
            ],
            'anycast_dns' => [
                'label' => Yii::t('hipanel', 'Anycast DNS'),
                'url' => 'https://websa.advancedhosting.com/anycastns',
                'icon' => 'fa-globe',
                'visible' => $isVisible,
                'linkOptions' => $targetBlank,
            ],
        ];
    }
}
