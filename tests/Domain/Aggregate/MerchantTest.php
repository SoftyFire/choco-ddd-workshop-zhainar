<?php
/**
 * Created by Chocolife.me.
 * User: User
 * Date: 13.10.2019
 * Time: 16:29
 */

namespace Billing\Tests\Domain\Aggregate;


use Billing\Domain\Aggregate\Merchant;
use Billing\Domain\DTO\Merchant\MerchantRegistrationDto;
use Billing\Tests\Integration\TestCase;
use Faker\Factory;
use Ramsey\Uuid\Uuid;

class MerchantTest extends TestCase
{
    public function testCanBeCreated(): void
    {
        $faker = Factory::create();

        $dto = MerchantRegistrationDto::fromArray([
            'id' => Uuid::uuid4(),
            'name' => $faker->name
        ]);

        $merchant = Merchant::register($dto);

        $this->assertEquals($dto->id, $merchant->id());
        $this->assertEquals($dto->name, $merchant->name());
    }
}
