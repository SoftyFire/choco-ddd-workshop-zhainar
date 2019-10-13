<?php
/**
 * Created by Chocolife.me.
 * User: User
 * Date: 13.10.2019
 * Time: 16:25
 */

namespace Billing\Domain\DTO\Merchant;


use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;
use Webmozart\Assert\Assert;

class MerchantRegistrationDto
{
    /**
     * @var UuidInterface
     */
    public $id;

    /**
     * @var $name
     */
    public $name;

    public static function fromArray(array $array): self
    {
        $self = new self();

        Assert::notEmpty($array['id']);
        Assert::notEmpty($array['name']);

        $self->id = Uuid::fromString($array['id']);
        $self->name = $array['name'];

        return $self;
    }
}
