# advancedhosters/hipanel

## [Under development]

    - [07c4c38] 2017-08-15 renamed `hidev.yml` [sol@hiqdev.com]
    - [7bfe621] 2017-06-26 Added ServerResourceTypesProvider, implemented ServerTariffCalculator::getCalculations() [d.naumenko.a@gmail.com]
    - [d703ef7] 2017-06-23 Added ServerTariffCalculator [d.naumenko.a@gmail.com]
    - [634b53e] 2017-02-15 removed requiring omnipay, moved to hipanel-module-finance [sol@hiqdev.com]
    - [9a090fd] 2017-02-07 emptied hisite config: removed use of assets [sol@hiqdev.com]
    - [cd53739] 2017-02-06 fixed dependencies for this package to be generally available for advancedhosters resellers [sol@hiqdev.com]
    - [f9bbb8b] 2017-01-05 Added mailing module [d.naumenko.a@gmail.com]
    - [6638ffc] 2016-12-15 fixed typo [d.naumenko.a@gmail.com]
    - [1fe8732] 2016-12-15 Added Documetns module to composer.json [d.naumenko.a@gmail.com]
    - [828910f] 2016-11-16 removed require michelf/php-smartypants [sol@hiqdev.com]
    - [0b335d5] 2016-08-25 moved require `advancedhosters/yii2-asset-advancedhosters` bottom [sol@hiqdev.com]
    - [f78f9ec] 2016-07-13 added omnipay requires [sol@hiqdev.com]
    - [f1729ee] 2016-06-29 Added news module [d.naumenko.a@gmail.com]
    - [79c32aa] 2016-06-16 csfixed [sol@hiqdev.com]
    - [bc72be6] 2016-06-16 inited empty tests [sol@hiqdev.com]
    - [00a3942] 2016-06-16 changed license to proprietary [sol@hiqdev.com]
    - [c701ea1] 2016-06-16 allowed build failure for PHP 5.5 [sol@hiqdev.com]
    - [9de7fe8] 2016-06-15 used `advancedhosters/hidev-advancedhosters` [sol@hiqdev.com]
    - [ce3405b] 2016-06-15 used `bower-asset/elementquery` instead of manual repository [sol@hiqdev.com]
    - [4237aec] 2016-06-15 tidying up kartik widgets [sol@hiqdev.com]
    - [0110754] 2016-06-15 - require yii2-pluginmanager [sol@hiqdev.com]
    - [898d58c] 2016-05-19 fixed typo [sol@hiqdev.com]
    - [1b0cce3] 2016-05-19 fixed namespace [sol@hiqdev.com]
- Changed: redone to composer-config-plugin
    - [0f958bf] 2016-05-19 csfixed [sol@hiqdev.com]
    - [29363be] 2016-05-19 rehideved [sol@hiqdev.com]
    - [243a7d1] 2016-05-19 fixing dependencies [sol@hiqdev.com]
    - [88cd1fa] 2016-05-19 removed common, console, frontend, backend [sol@hiqdev.com]
    - [dfe82db] 2016-02-29 Temporary daterangepicker dependency removed [d.naumenko.a@gmail.com]
    - [cf74a5e] 2016-02-24 Added temporary daterangepicker dependency [d.naumenko.a@gmail.com]
    - [b8e2d3c] 2016-02-02 composer.json - added yii2 unstable dependency [d.naumenko.a@gmail.com]
    - [30481f0] 2015-12-09 Updated composer.json [d.naumenko.a@gmail.com]
- Added stock module
    - [2e635ae] 2015-09-09 + stock module [sol@hiqdev.com]
- Fixed composer.json requires
    - [9cac0f7] 2015-09-21 - require 2amigos/yii2-editable-widget [sol@hiqdev.com]
    - [4a45c43] 2015-08-18 fixed license to No license [sol@hiqdev.com]
    - [b50eeec] 2015-08-18 fixed requires fr theme and assets [sol@hiqdev.com]
    - [af46e7b] 2015-09-09 fixed requires in composer.json [sol@hiqdev.com]
- Added use of params.php from yii2-asset-advancedhosters for common/config/params.php
    - [bd52636] 2015-08-31 used params.php from yii2-asset-advancedhosters for common/config/params.php [sol@hiqdev.com]
    - [fb67e91] 2015-08-23 + `.php_cs` [sol@hiqdev.com]
    - [964b341] 2015-08-18 php-cs-fixed [sol@hiqdev.com]
    - [2c3c420] 2015-08-18 + orgName and orgUrl params [sol@hiqdev.com]
- Added ProjectAsset with css for logo instead of hipanel-theme-adminlte
    - [464eaf2] 2015-08-24 + css for logo [sol@hiqdev.com]
    - [d9ec49d] 2015-08-23 - require `*/hipane-theme-adminlte` [sol@hiqdev.com]
    - [c173e9d] 2015-08-23 + ProjectAsset [sol@hiqdev.com]
- Added favicon.ico at frontend and backend
    - [1a8cd5c] 2015-08-18 + favicon [sol@hiqdev.com]
    - [0d2f1f2] 2015-08-23 + favicon at backend [sol@hiqdev.com]
- Removed excessive .gitignores
    - [ec7fe80] 2015-08-23 - excessive gitignores [sol@hiqdev.com]
    - [22c631b] 2015-08-23 - excessive gitignores at configs [sol@hiqdev.com]
- Added: gitignore for yii
    - [f821c10] 2015-08-18 + gitignore yii [sol@hiqdev.com]
- Added proper gitignores for runtime, web and assets
    - [18d7a61] 2015-08-18 improved gitignores to not ignore .gitignore [sol@hiqdev.com]
    - [6aec721] 2015-08-18 + necessary empty dirs for frontend and backend web [sol@hiqdev.com]
    - [6b3fbc3] 2015-08-18 + necessary empty dirs for runtime and assets [sol@hiqdev.com]
- Removed domain module
    - [f4c06c7] 2015-08-18 - domain module [sol@hiqdev.com]
- Added basics
    - [be9f961] 2015-08-17 inited [sol@hiqdev.com]

## [Development started] - 2015-08-17

[0f958bf]: https://github.com/advancedhosters/hipanel/commit/0f958bf
[29363be]: https://github.com/advancedhosters/hipanel/commit/29363be
[243a7d1]: https://github.com/advancedhosters/hipanel/commit/243a7d1
[88cd1fa]: https://github.com/advancedhosters/hipanel/commit/88cd1fa
[dfe82db]: https://github.com/advancedhosters/hipanel/commit/dfe82db
[cf74a5e]: https://github.com/advancedhosters/hipanel/commit/cf74a5e
[b8e2d3c]: https://github.com/advancedhosters/hipanel/commit/b8e2d3c
[30481f0]: https://github.com/advancedhosters/hipanel/commit/30481f0
[2e635ae]: https://github.com/advancedhosters/hipanel/commit/2e635ae
[9cac0f7]: https://github.com/advancedhosters/hipanel/commit/9cac0f7
[4a45c43]: https://github.com/advancedhosters/hipanel/commit/4a45c43
[b50eeec]: https://github.com/advancedhosters/hipanel/commit/b50eeec
[af46e7b]: https://github.com/advancedhosters/hipanel/commit/af46e7b
[bd52636]: https://github.com/advancedhosters/hipanel/commit/bd52636
[fb67e91]: https://github.com/advancedhosters/hipanel/commit/fb67e91
[964b341]: https://github.com/advancedhosters/hipanel/commit/964b341
[2c3c420]: https://github.com/advancedhosters/hipanel/commit/2c3c420
[464eaf2]: https://github.com/advancedhosters/hipanel/commit/464eaf2
[d9ec49d]: https://github.com/advancedhosters/hipanel/commit/d9ec49d
[c173e9d]: https://github.com/advancedhosters/hipanel/commit/c173e9d
[1a8cd5c]: https://github.com/advancedhosters/hipanel/commit/1a8cd5c
[0d2f1f2]: https://github.com/advancedhosters/hipanel/commit/0d2f1f2
[ec7fe80]: https://github.com/advancedhosters/hipanel/commit/ec7fe80
[22c631b]: https://github.com/advancedhosters/hipanel/commit/22c631b
[f821c10]: https://github.com/advancedhosters/hipanel/commit/f821c10
[18d7a61]: https://github.com/advancedhosters/hipanel/commit/18d7a61
[6aec721]: https://github.com/advancedhosters/hipanel/commit/6aec721
[6b3fbc3]: https://github.com/advancedhosters/hipanel/commit/6b3fbc3
[f4c06c7]: https://github.com/advancedhosters/hipanel/commit/f4c06c7
[be9f961]: https://github.com/advancedhosters/hipanel/commit/be9f961
[07c4c38]: https://github.com/advancedhosters/hipanel/commit/07c4c38
[7bfe621]: https://github.com/advancedhosters/hipanel/commit/7bfe621
[d703ef7]: https://github.com/advancedhosters/hipanel/commit/d703ef7
[634b53e]: https://github.com/advancedhosters/hipanel/commit/634b53e
[9a090fd]: https://github.com/advancedhosters/hipanel/commit/9a090fd
[cd53739]: https://github.com/advancedhosters/hipanel/commit/cd53739
[f9bbb8b]: https://github.com/advancedhosters/hipanel/commit/f9bbb8b
[6638ffc]: https://github.com/advancedhosters/hipanel/commit/6638ffc
[1fe8732]: https://github.com/advancedhosters/hipanel/commit/1fe8732
[828910f]: https://github.com/advancedhosters/hipanel/commit/828910f
[0b335d5]: https://github.com/advancedhosters/hipanel/commit/0b335d5
[f78f9ec]: https://github.com/advancedhosters/hipanel/commit/f78f9ec
[f1729ee]: https://github.com/advancedhosters/hipanel/commit/f1729ee
[79c32aa]: https://github.com/advancedhosters/hipanel/commit/79c32aa
[bc72be6]: https://github.com/advancedhosters/hipanel/commit/bc72be6
[00a3942]: https://github.com/advancedhosters/hipanel/commit/00a3942
[c701ea1]: https://github.com/advancedhosters/hipanel/commit/c701ea1
[9de7fe8]: https://github.com/advancedhosters/hipanel/commit/9de7fe8
[ce3405b]: https://github.com/advancedhosters/hipanel/commit/ce3405b
[4237aec]: https://github.com/advancedhosters/hipanel/commit/4237aec
[0110754]: https://github.com/advancedhosters/hipanel/commit/0110754
[898d58c]: https://github.com/advancedhosters/hipanel/commit/898d58c
[1b0cce3]: https://github.com/advancedhosters/hipanel/commit/1b0cce3
[Under development]: https://github.com/advancedhosters/hipanel/releases
