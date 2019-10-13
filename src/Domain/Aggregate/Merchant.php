<?php
declare(strict_types=1);

namespace Billing\Domain\Aggregate;

use Billing\Domain\DTO\Merchant\MerchantRegistrationDto;
use Ramsey\Uuid\UuidInterface;

final class Merchant
{
    /**
     * @var UuidInterface
     */
    private $id;

    /** @var string */
    private $name;

    public static function register(MerchantRegistrationDto $dto): self
    {
        $self = new self();
        $self->id = $dto->id;
        $self->name = $dto->name;

        return $self;
    }

    public function id()
    {
        return $this->id;
    }

    public function name()
    {
        return $this->name;
    }
}
