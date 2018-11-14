<?php

namespace advancedhosters\hipanel\tests\acceptance\module\finance\manager;

use hipanel\helpers\Url;
use hipanel\tests\_support\Page\IndexPage;
use hipanel\tests\_support\Page\Widget\Input\Input;
use hipanel\tests\_support\Page\Widget\Input\Dropdown;
use hipanel\tests\_support\Page\Widget\Input\Select2;
use hipanel\tests\_support\Step\Acceptance\Manager;

class TariffPlansCest
{
    /**
     * @var IndexPage
     */
    private $index;

    public function _before(Manager $I)
    {
        $this->index = new IndexPage($I);
    }

    public function ensureIndexPageWorks(Manager $I)
    {
        $I->login();
        $I->needPage(Url::to('@plan'));
        $I->see('Tariff plans', 'h1');
        $I->seeLink('Create', Url::to('@plan/create'));
        $this->ensureICanSeeAdvancedSearchBox($I);
        $this->ensureICanSeeBulkBillSearchBox();
    }

    private function ensureICanSeeAdvancedSearchBox(Manager $I)
    {
        $this->index->containsFilters([
            Input::asAdvancedSearch($I, 'Name'),
            Select2::asAdvancedSearch($I,'Client'),
            (Dropdown::asAdvancedSearch($I,'Type'))->withItems([
                'Server',
                'vCDN',
                'pCDN',
                'IP',
                'Account',
                'Domain',
                'Client',
                'Template',
            ]),
            Select2::asAdvancedSearch($I, 'Statuses'),
        ]);
    }

    private function ensureICanSeeBulkBillSearchBox()
    {
        $this->index->containsBulkButtons([
            'Restore',
            'Delete',
        ]);
        $this->index->containsColumns([
            'Name',
            'Client',
            'Type',
            'Status',
        ]);
    }
}
