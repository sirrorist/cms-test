<?php namespace Test\Test1\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\DB;

class Comp1 extends ComponentBase
{
    public $contacts;

    public function componentDetails()
    {
        return [
            'name'        => 'Comp1 Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $domains[] = Db::table('domains')->select('id', 'domain_name')->get()->toArray();
        $contacts[] = Db::table('contacts')->select('country', 'city', 'street', 'phone', 'email', 'dom_id')->get()->toArray();
        $this->page['domains'] = $domains;
        $this->page['contacts'] = $contacts;
    }
}
