<?php

/**
 * Copyright (c) Antistress.Store® 2021. All rights reserved.
 * See LICENSE.md for license details.
 *
 * @author Sergey Gusev
 */

namespace AntistressStore\CdekSDK2\Traits;

trait ServicesTrait
{
    /**
     * Код дополнительной услуги.
     *
     * @var string
     */
    protected $code;

    /**
     * Параметр дополнительной услуги.
     *
     * @var float
     */
    protected $parameter;

    /**
     * Сумма услуги.
     *
     * @var float
     */
    protected $sum;

    protected $total_sum;
    protected $discount_percent;
    protected $discount_sum;
    protected $vat_rate;
    protected $vat_sum;

    /**
     * @return mixed
     */
    public function getTotalSum()
    {
        return $this->total_sum;
    }

    /**
     * @param mixed $total_sum
     */
    public function setTotalSum($total_sum)
    {
        $this->total_sum = $total_sum;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDiscountPercent()
    {
        return $this->discount_percent;
    }

    /**
     * @param mixed $discount_percent
     */
    public function setDiscountPercent($discount_percent)
    {
        $this->discount_percent = $discount_percent;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDiscountSum()
    {
        return $this->discount_sum;
    }

    /**
     * @param mixed $discount_sum
     */
    public function setDiscountSum($discount_sum)
    {
        $this->discount_sum = $discount_sum;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVatRate()
    {
        return $this->vat_rate;
    }

    /**
     * @param mixed $vat_rate
     */
    public function setVatRate($vat_rate)
    {
        $this->vat_rate = $vat_rate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVatSum()
    {
        return $this->vat_sum;
    }

    /**
     * @param mixed $vat_sum
     */
    public function setVatSum($vat_sum)
    {
        $this->vat_sum = $vat_sum;

        return $this;
    }

    /**
     * Устанавливает код дополнительной услуги.
     *
     * @param string $code Код дополнительной услуги
     *
     * @return self
     */
    public function setCode(string $code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Устанавливает параметр дополнительной услуги.
     *
     * @param float $parameter Параметр дополнительной услуги
     *
     * @return self
     */
    public function setParameter(float $parameter)
    {
        $this->parameter = $parameter;

        return $this;
    }

    /**
     * Установить параметр дополнительной услуги.
     *
     * @return float
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Установить код дополнительной услуги.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Устанавливает суммму услуги.
     *
     * @param float $sum Сумма дополнительной услуги
     *
     * @return self
     */
    public function setSum(float $sum)
    {
        $this->sum = $sum;

        return $this;
    }

    /**
     * Получить сумму услуги.
     *
     * @return float
     */
    public function getSum()
    {
        return $this->sum;
    }
}
