<?php

namespace advancedhosters\hipanel\tests\acceptance\module\finance\manager;

use hipanel\helpers\Url;
use hipanel\tests\_support\Page\IndexPage;
use hipanel\tests\_support\Page\Widget\Input\Dropdown;
use hipanel\tests\_support\Page\Widget\Input\Input;
use hipanel\tests\_support\Page\Widget\Input\Select2;
use hipanel\tests\_support\Step\Acceptance\Manager;

class PriceIndexCest
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
        $I->needPage(Url::to('@price'));
        $I->see('Price', 'h1');
        $this->ensureICanSeeAdvancedSearchBox($I);
        $this->ensureICanSeeBulkBillSearchBox();
    }

    private function ensureICanSeeAdvancedSearchBox(Manager $I)
    {
        $this->index->containsFilters([
            Input::asAdvancedSearch($I, 'Tariff plan buyer'),
            Input::asAdvancedSearch($I, 'Tariff plan owner'),
            Input::asAdvancedSearch($I, 'Tariff plan name'),
            Input::asAdvancedSearch($I, 'Object name'),
            Input::asAdvancedSearch($I, 'Group model name'),
            Input::asAdvancedSearch($I, 'Model partno'),
            Input::asAdvancedSearch($I, 'Price'),
            Dropdown::asAdvancedSearch($I, 'Type')->withItems([
                'Monthly fee',
                'Server traffic monthly fee',
                'IP addresses monthly fee',
                'Rack unit monthly fee',
                'Server traffic 95% overuse',
                'Domain traffic',
                'Number of domains',
                'Backup disk usage monthly fee',
                'Backup traffic monthly fee',
                'IP traffic',
                'Number of IP addresses',
                'Support time monthly fee',
                'Account traffic',
                'Number of accounts',
                'Account disk usage',
                'Biggest directory',
                'CDN disk usage',
                'Backup traffic',
                'Number of mailboxes',
                'Support time',
                'Quantity',
            ]),
            Select2::asAdvancedSearch($I, 'Currency')
        ]);
    }

    private function ensureICanSeeBulkBillSearchBox()
    {
        $this->index->containsBulkButtons([
            'Update',
            'Delete',
        ]);
        $this->index->containsColumns([
            'Object',
            'Details',
            'Price',
            'Type',
            'Note',
            'Tariff plan',
        ]);
    }
}
