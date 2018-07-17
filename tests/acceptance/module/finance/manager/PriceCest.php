<?php

namespace advancedhosters\hipanel\tests\acceptance\module\finance\manager;

use Codeception\Example;
use hipanel\helpers\Url;
use hipanel\modules\finance\tests\_support\Page\price\Create as PriceCreatePage;
use hipanel\modules\finance\tests\acceptance\manager\PriceCest as BasePriceCest;
use hipanel\tests\_support\Step\Acceptance\Manager;

/**
 * Class PriceCest
 *
 * @author Dmytro Naumenko <d.naumenko.a@gmail.com>
 */
class PriceCest extends BasePriceCest
{
    /**
     * @var string
     */
    private $templateName;

    /**
     * @return array of types that should be included in template plan
     *
     * ```php
     * return [
     *     ['vCDN'],
     *     ['pCDN']
     * ];
     * ```
     */
    protected function templatePriceTypesProvider(): array
    {
        return [
            ['Model groups'],
            ['Dedicated Server'],
            ['vCDN'],
            ['pCDN']
        ];
    }

    /**
     * @dataProvider templatePriceTypesProvider
     * @param Manager $I
     * @param Example $example
     */
    public function ensureICanCreateTemplatePlan(Manager $I, Example $example): void
    {
        if (!$this->templateName) {
            $this->templateName = uniqid('TemplatePlan', true);
            $this->id = $this->createPlan($I, $this->templateName, 'Template');
            $I->needPage(Url::to(['@plan/view', 'id' => $this->id]));
            $I->see('No prices found');
        }

        $page = new PriceCreatePage($I, $this->id);
        $page->openModal();
        $page->choosePriceType($example[0]);
        $page->proceedToCreation();
        $page->fillRandomPrices('templateprice');
        $page->saveForm();
        $page->seeRandomPrices();
    }

    protected function suggestedPricesOptionsProvider(): array
    {
        if (empty($this->templateName)) {
            throw new \RuntimeException('Template plan must be created first');
        }

        return [
            [
                'type' => 'Server',
                'templateName' => $this->templateName,
                'priceTypes' => ['Main prices', 'Parts prices'],
                'object' => 'DS5000',
            ],
            [
                'type' => 'vCDN',
                'templateName' => $this->templateName,
                'priceTypes' => ['Main prices'],
                'object' => 'vCDN-soltest',
            ],
        ];
    }
}
