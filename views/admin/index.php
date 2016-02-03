<?php $view->script('todobd', 'todobd:js/todobd.js', ['vue', 'jquery']) ?>

<div id="divtodobd" class="uk-form uk-form-horizontal" v-cloak>
    <div class=uk-form-row>
        <input id="testval" type="text" v-model="testtable.NAME">
        <button class="uk-button uk-button-primary" @click="saveBD">Save BD</button>
    </div>
    
    <pre>{{ $data | json}}</pre>
</div>
