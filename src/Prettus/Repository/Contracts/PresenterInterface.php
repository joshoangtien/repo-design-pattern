<?php
namespace JosHoangTien\Repository\Contracts;

/**
 * Interface PresenterInterface
 * @package JosHoangTien\Repository\Contracts
 * @author Anderson Andrade <contato@andersonandra.de>
 */
interface PresenterInterface
{
    /**
     * Prepare data to present
     *
     * @param $data
     *
     * @return mixed
     */
    public function present($data);
}
