<?php

namespace JosHoangTien\Repository\Traits;

/**
 * Class TransformableTrait
 * @package JosHoangTien\Repository\Traits
 * @author Anderson Andrade <contato@andersonandra.de>
 */
trait TransformableTrait
{
    /**
     * @return array
     */
    public function transform()
    {
        return $this->toArray();
    }
}
