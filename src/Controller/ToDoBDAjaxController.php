<?php

namespace Pagekit\todobd\Controller;

use Pagekit\Application as App;
use Pagekit\todobd\Model\TestBD;

/**
 * @Access(admin=true)
 */
class ToDoBDAjaxController
{
    // --------------- ОБРАБОТЧИК По УМОЛЧАНИЮ ---------------
    public function indexAction() {
    }

    // --------------- ОБРАБОТЧИК JS AJAX-ЗАПРОСА ---------------
    /**
     * @Request({"id", "data"}, csrf=true)
     */
    public function saveAction($id, $data) {
        if (!$id || !$record=TestBD::find($id)) {App::abort(404, __('Record not found.'));}
        $record->save($data);
        return ['res' => 'success'];
    }
}
