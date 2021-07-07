<?php

namespace app\lsp\geometry;

class Square extends Rectangle
{
    public function setHeight(int $height)
    {
        $this->width = $this->height = $height;
    }

    public function setWidth(int $width)
    {
        $this->width = $this->height = $width;
    }
}