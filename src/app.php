<?php
declare(strict_types=1);

use app\banzai\Notificator\EmailNotificator;
use app\banzai\Notificator\SmsNotificator;
use app\banzai\Notificator\WebPushNotificator;
use app\banzai\Repository\UserRepository;
use app\banzai\Service\NotificationService;

require 'vendor/autoload.php';

//в реальном проекте эта конфигурация происходит в di-контейнере
$userRepository = new UserRepository();
$notificators = [
    new SmsNotificator(),
    new EmailNotificator(),
    new WebPushNotificator(),
];

$service = new NotificationService($notificators);

$users = $userRepository->findAll();
$text = 'Какой-то текст';

foreach ($users as $user) {
    $service->notify($user, $text);
}