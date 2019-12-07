<?php
declare(strict_types=1);

namespace app\banzai\Service;

use app\banzai\Model\User;
use Exception;

class NotificationService
{
    /**
     * @var NotificatorInterface[]
     */
    private $notificators;

    /**
     * @param NotificatorInterface[] $notificators
     */
    public function __construct(array $notificators)
    {
        $this->notificators = $notificators;
    }

    public function notify(User $user, string $text): void
    {
        foreach ($this->notificators as $notificator) {
            try {
                $notificator->send($user, $text);
            } catch (Exception $e) {
                //...
            }
        }
    }
}