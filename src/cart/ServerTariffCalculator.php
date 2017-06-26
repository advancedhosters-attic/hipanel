<?php

namespace advancedhosters\hipanel\cart;

use hipanel\modules\finance\cart\Calculation;
use hipanel\modules\finance\logic\ServerTariffCalculatorInterface;
use hipanel\modules\finance\models\Tariff;
use yii\base\InvalidParamException;
use yii\base\NotSupportedException;

class ServerTariffCalculator implements ServerTariffCalculatorInterface
{
    protected $tariffs;

    function __construct($tariffs)
    {
        $this->tariffs = $tariffs;
    }

    /**
     * Calculates price for the model with $id
     *
     * @param $id
     *
     * @return Calculation
     */
    public function getCalculation($id)
    {
        return $this->createCalculationFromTariff($this->getTariffById($id));
    }

    /**
     * @param Tariff $tariff
     * @return \hipanel\modules\finance\models\Calculation
     */
    private function createCalculationFromTariff($tariff)
    {
        $value = floatval($tariff->getResourceByType('monthly')->price);

        $query = Calculation::find()->joinWith(['value'])->indexBy('calculation_id');
        $query->prepare();

        $data = [
            'object' => $tariff->name,
            'currency' => $tariff->currency,
            'value' => [
                $tariff->currency => [
                    'currency' => $tariff->currency,
                    'value' => $value,
                    'price' => $value,
                    'discounted_price' => $value,
                ]
            ]
        ];

        return reset($query->populate([$data]));
    }

    private function getTariffById($id)
    {
        foreach ($this->tariffs as $tariff) {
            if (strcmp($tariff->id, $id) === 0) {
                return $tariff;
            }
        }

        throw new InvalidParamException('Tariff with id "' . $id . '" does not exist in calculator');
    }

    /**
     * Returns calculations for all passed models
     *
     * @return Calculation[]
     */
    public function getCalculations()
    {
        $result = [];
        foreach ($this->tariffs as $tariff) {
            $result[] = $this->createCalculationFromTariff($tariff);
        }

        return $result;
    }
}
