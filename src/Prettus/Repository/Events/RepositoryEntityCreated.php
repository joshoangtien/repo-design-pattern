<?php
namespace JosHoangTien\Repository\Events;

/**
 * Class RepositoryEntityCreated
 * @package JosHoangTien\Repository\Events
 * @author Anderson Andrade <contato@andersonandra.de>
 */
class RepositoryEntityCreated extends RepositoryEventBase
{
    /**
     * @var string
     */
    protected $action = "created";
}
