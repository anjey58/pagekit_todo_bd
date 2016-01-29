<?php

namespace Pagekit\ToDo\Controller;

use Pagekit\Application as App;
use Pagekit\ToDo\Model\TestBD;

/**
 * @Access(admin=true)
 */
class ToDoController
{
    public function indexAction() {
        $fields=TestBD::find(1);
        return [
            '$view' => [
                'title' => 'ToDo tab2',
                'name' => 'todo:views/admin/index.php'
            ],
            '$data' => [
                'testtable' => $fields
             ]
        ];
    }
}
