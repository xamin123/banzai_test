<?php
declare(strict_types=1);

namespace app\banzai\Service;

use app\banzai\Model\User;

interface NotificatorInterface
{
    public function send(User $user, string $text): void;
}