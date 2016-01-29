<?php $view->script('todoDB', 'todo:js/todoBD.js', ['vue', 'jquery']) ?>

<div id="divtodo" class="uk-form uk-form-horizontal" v-cloak>
    <div class=uk-form-row>
        <input id="testval" type="text" v-model="testtable.NAME">
        <button class="uk-button uk-button-primary" @click="saveBD">Save BD</button>
    </div>
    
    <pre>{{ $data | json}}</pre>
</div>
