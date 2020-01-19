<?php

namespace DivineOmega\BaseSearch\Interfaces;

interface SearcherInterface
{
    public function search(string $query): array;
}