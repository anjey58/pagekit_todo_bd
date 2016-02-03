<?php

namespace Pagekit\todobd\Controller;

use Pagekit\Application as App;
use Pagekit\todobd\Model\TestBD;

/**
 * @Access(admin=true)
 */
class ToDoBDController
{
    public function indexAction() {
        $fields=TestBD::find(1);
        return [
            '$view' => [
                'title' => 'ToDo BD tab2',
                'name' => 'todobd:views/admin/index.php'
            ],
            '$data' => [
                'testtable' => $fields
             ]
        ];
    }
}
