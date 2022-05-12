<?php
namespace JosHoangTien\Repository\Events;

/**
 * Class RepositoryEntityDeleted
 * @package JosHoangTien\Repository\Events
 * @author Anderson Andrade <contato@andersonandra.de>
 */
class RepositoryEntityDeleting extends RepositoryEventBase
{
    /**
     * @var string
     */
    protected $action = "deleting";
}
