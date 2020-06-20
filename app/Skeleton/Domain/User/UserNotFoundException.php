<?php
declare(strict_types=1);

namespace App\Skeleton\Domain\User;

use App\Skeleton\Domain\DomainException\DomainRecordNotFoundException;

class UserNotFoundException extends DomainRecordNotFoundException
{
    public $message = 'The user you requested does not exist.';
}
