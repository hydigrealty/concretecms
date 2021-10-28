<?php

namespace Concrete\Core\Page\Theme\Color;

use Doctrine\Common\Collections\ArrayCollection;

class ColorCollection extends ArrayCollection implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return ['colors' => $this->toArray()];
    }

}
