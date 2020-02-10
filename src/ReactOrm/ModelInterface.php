<?php

namespace ReactOrm;


interface ModelInterface
{
    function assign(array $columns): self;

    function refresh(): void;

    function create(): bool;

    function update(): bool;

    function save(): bool;

    function isDirty(): bool;

    function getSource(): string;

    function getColumnMap(): array;
}
