<?php
declare(strict_types=1);

namespace app\banzai\Model;

class User
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $email;
    /**
     * @var string
     */
    private $phone;
    /**
     * @var array
     */
    private $webPushTokenIds;

    public function __construct(string $name, string $email, string $phone, array $webPushTokenIds)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->webPushTokenIds = $webPushTokenIds;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @return array
     */
    public function getWebPushTokenIds(): array
    {
        return $this->webPushTokenIds;
    }
}