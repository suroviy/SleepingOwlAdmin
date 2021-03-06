<?php

namespace SleepingOwl\Admin\Display\Column;

class Lists extends NamedColumn
{
    /**
     * @var bool
     */
    protected $orderable = false;

    /**
     * @return array
     */
    public function toArray()
    {
        return parent::toArray() + [
            'values' => $this->getModelValue(),
            'append' => $this->getAppends(),
        ];
    }
}
