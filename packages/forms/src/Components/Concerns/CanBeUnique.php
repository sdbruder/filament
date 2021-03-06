<?php

namespace Filament\Forms\Components\Concerns;

trait CanBeUnique
{
    public function unique($table, $column = null, $exceptCurrentRecord = false)
    {
        $rule = "unique:$table,$column";
        if ($exceptCurrentRecord) $rule .= ',{{record}}';

        $this->addRules([$this->name => [$rule]]);

        return $this;
    }
}
