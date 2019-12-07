<?php
declare(strict_types=1);

namespace app\banzai\Notificator;

use app\banzai\Model\User;
use app\banzai\Service\NotificatorInterface;

class SmsNotificator implements NotificatorInterface
{
    public function send(User $user, string $text): void
    {
        $phone = $user->getPhone();
        //send $text to $phone
    }
}