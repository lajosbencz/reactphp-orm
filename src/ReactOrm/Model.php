<?php

namespace ReactOrm;


abstract class Model implements ModelInterface
{
    protected function _setColumn($col, $val)
    {
        $this->$col = $val;
    }

    public function __construct()
    {
    }

    public function __call($name, $arguments)
    {
        $_sg = substr($name, 0, 3);
        switch ($_sg) {
            case 'set':
                $this->_setColumn($name, $arguments[0]);
                break;
            case 'get':
                break;
        }
    }

    function assign(array $columns): ModelInterface
    {
        foreach($columns as $k=>$v) {
            $this->$k = $v;
        }
    }

    function refresh(): void
    {
        // TODO: Implement refresh() method.
    }

    function create(): bool
    {
        // TODO: Implement create() method.
    }

    function update(): bool
    {
        // TODO: Implement update() method.
    }

    function save(): bool
    {
        // TODO: Implement save() method.
    }

    function isDirty(): bool
    {
        // TODO: Implement isDirty() method.
    }

    function getSource(): string
    {
        // TODO: Implement getSource() method.
    }

    function getColumnMap(): array
    {
        // TODO: Implement getColumnMap() method.
    }
}
