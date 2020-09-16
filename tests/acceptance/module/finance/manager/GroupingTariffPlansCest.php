<?php

namespace advancedhosters\hipanel\tests\acceptance\module\finance\manager;

use hipanel\modules\finance\tests\_support\Page\plan\CreateGrouping as Create;
use hipanel\modules\finance\tests\_support\Page\plan\View;
use hipanel\modules\finance\tests\_support\Page\plan\UpdateGrouping as Update;
use hipanel\modules\finance\tests\_support\Page\plan\Delete;
use hipanel\modules\finance\tests\_support\Page\plan\Index;
use hipanel\tests\_support\Step\Acceptance\Manager;

class GroupingTariffPlansCest
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var array
     */
    private $fields;

    /**
     * @param Manager $I
     */
    public function ensureThatICanCreateTariffPlan(Manager $I)
    {
        $this->fields = [
            'name' => uniqid(),
            'type' => 'Template',
            'client' => 'hipanel_test_manager',
            'currency' => 'USD',
            'note' => 'test note',
        ];
        $plan = new Create($I, $this->fields);
        $plan->seeFields();
        $this->id = $plan->createPlan();
        $this->ensureThatICanSeeTariffPlan($I);
    }

    private function ensureThatICanSeeTariffPlan(Manager $I)
    {
        $plan = new View($I, $this->fields, $this->id);
        $plan->visitPlan();
        $plan->seePlan();
        $search = new Index($I);
        $search->ensurePageWorks();
        $search->ensurePlanCanBeFound($this->fields['name']);
    }

    /**
     * @depends ensureThatICanCreateTariffPlan
     *
     * @param Manager $I
     */
    public function ensureThatICanUpdateTariffPlan(Manager $I)
    {
        $this->fields = [
            'name' => uniqid(),
            'type' => 'Server',
            'client' => 'hipanel_test_manager',
            'currency' => 'EUR',
            'note' => 'new_test_note',
        ];
        $plan = new Update($I, $this->fields);
        $this->id = $plan->updatePlan($this->id);
        $this->ensureThatICanSeeTariffPlan($I);
    }

    /**
     * @depends ensureThatICanCreateTariffPlan
     *
     * @param Manager $I
     */
    public function ensureThatICanDeleteTariffPlan(Manager $I)
    {
        (new Delete($I, null, $this->id))->deletePlan();
        $this->ensureThatIDontSeeTariffPlan($I);
    }

    private function ensureThatIDontSeeTariffPlan(Manager $I)
    {
        $search = new Index($I);
        $search->ensurePageWorks();
        $search->ensurePlanNotFound($this->fields['name']);
    }
}
