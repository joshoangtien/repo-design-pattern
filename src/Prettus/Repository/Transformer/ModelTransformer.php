<?php namespace JosHoangTien\Repository\Transformer;

use League\Fractal\TransformerAbstract;
use JosHoangTien\Repository\Contracts\Transformable;

/**
 * Class ModelTransformer
 * @package JosHoangTien\Repository\Transformer
 * @author Anderson Andrade <contato@andersonandra.de>
 */
class ModelTransformer extends TransformerAbstract
{
    public function transform(Transformable $model)
    {
        return $model->transform();
    }
}
