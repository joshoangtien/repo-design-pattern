<?php
namespace JosHoangTien\Repository\Contracts;

/**
 * Interface Presentable
 * @package JosHoangTien\Repository\Contracts
 * @author Anderson Andrade <contato@andersonandra.de>
 */
interface Presentable
{
    /**
     * @param PresenterInterface $presenter
     *
     * @return mixed
     */
    public function setPresenter(PresenterInterface $presenter);

    /**
     * @return mixed
     */
    public function presenter();
}
