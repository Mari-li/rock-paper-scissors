<?php

namespace App\Models;


interface Playing
{
    public function makeChoice($choice): void;
    public function getChoice(): Element;
}
