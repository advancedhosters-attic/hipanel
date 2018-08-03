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
        $this->ensureICanSeeAdvancedSearchBox();
        $this->ensureICanSeeBulkBillSearchBox();
    }

    private function ensureICanSeeAdvancedSearchBox()
    {
        $this->index->containsFilters([
            new Input('Name Ilike'),
            new Select2('Client'),
            (new Dropdown('plansearch-type'))->withItems([
                'Server',
                'vCDN',
                'pCDN',
                'IP',
                'Account',
                'Domain',
                'Client',
                'Template',
            ]),
            new Input('Statuses'),
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
