<?php
namespace JosHoangTien\Repository\Events;

/**
 * Class RepositoryEntityUpdated
 * @package JosHoangTien\Repository\Events
 * @author Anderson Andrade <contato@andersonandra.de>
 */
class RepositoryEntityUpdating extends RepositoryEventBase
{
    /**
     * @var string
     */
    protected $action = "updating";
}
