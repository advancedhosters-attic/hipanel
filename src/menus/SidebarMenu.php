<?php

namespace advancedhosters\hipanel\menus;

use hiqdev\yii2\menus\Menu;
use Yii;

class SidebarMenu extends Menu
{
    public function items()
    {
        $isVisible = true;

        return [
            'cloud_servers' => [
                'label' => Yii::t('hipanel', 'Cloud Servers'),
                'url' => 'https://websa.advancedhosting.com/servers',
                'icon' => 'fa-cloud',
                'visible' => $isVisible,
            ],
            'cloud_storage' => [
                'label' => Yii::t('hipanel', 'Cloud Storage'),
                'url' => 'https://websa.advancedhosting.com/bucketList',
                'icon' => 'fa-cloud-upload',
                'visible' => $isVisible,
            ],
            'video_cdn' => [
                'label' => Yii::t('hipanel', 'Video CDN'),
                'url' => 'https://vcp.advancedhosting.com/dashboard',
                'icon' => 'fa-video-camera',
                'visible' => $isVisible,
            ],
            'anycast_cdn' => [
                'label' => Yii::t('hipanel', 'Anycast CDN'),
                'url' => 'https://websa.advancedhosting.com/cdn',
                'icon' => 'fa-globe',
                'visible' => $isVisible,
            ],
            'anycast_dns' => [
                'label' => Yii::t('hipanel', 'Anycast DNS'),
                'url' => 'https://websa.advancedhosting.com/anycastns',
                'icon' => 'fa-globe',
                'visible' => $isVisible,
            ],
        ];
    }
}
