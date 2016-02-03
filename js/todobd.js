$(function(module, exports) {
    module.exports = {
        el: '#divtodobd',

        // --------------- DATA ---------------
        data: function () {
            return window.$data;
        },

        // --------------- METHODS ---------------
        methods: {
            // -----сохранить БД
            saveBD: function () {
                alert("ID - " + this.testtable.ID + " NAME - " + this.testtable.NAME);
                this.$http.post('/admin/todobd/ajax/save', {id: this.testtable.ID, data: this.testtable},
                    function (data) { // успешно
                        //alert(data.res);
                        this.$notify('Settings saved.');
                    }
                ).error(function (error) { // ошибка
                    this.$notify(error, 'warning');
                });
            }
        }
    };
    Vue.ready(module.exports);
})
