<?php
declare(strict_types=1);

namespace app\banzai\Notificator;

use app\banzai\Model\User;
use app\banzai\Service\NotificatorInterface;

class EmailNotificator implements NotificatorInterface
{
    public function send(User $user, string $text): void
    {
        $email = $user->getEmail();
        //send $text to $email
    }
}