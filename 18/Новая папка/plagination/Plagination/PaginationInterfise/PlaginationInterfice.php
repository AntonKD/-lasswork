<?php
namespace Plagination\PaginationInterfise;

interface  PaginationInterface extends PlaginationParamsInterfice
{
    public function getLinksRange():array;
}