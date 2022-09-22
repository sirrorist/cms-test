<?php namespace Acme\Users\Updates;

use Seeder;
use Illuminate\Support\Facades\DB;
use Acme\Users\Models\User;

class SeedUsersTable extends Seeder
{
    public function run()
    {
        Db::table('domains')->insert([
            ['domain_name' => 'http://en.cms.org'],
            ['domain_name' => 'http://ru.cms.org']
        ]);
        Db::table('contacts')->insert([
            ['country' => 'USA', 'city' => 'Chicago', 'street' => '1488 W Street', 'phone' => '+1 234 567891011', 'email' => 'e@mail.com', 'dom_id' => '1'],
            ['country' => 'Россия', 'city' => 'Тюмень', 'street' => 'ул. Ленина, д. 1', 'phone' => '+7 654 3210123', 'email' => 'e@mail.ru', 'dom_id' => '2']
        ]);
}
}