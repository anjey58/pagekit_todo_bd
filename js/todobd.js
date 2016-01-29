$(function(module, exports) {
    module.exports = {
        el: '#divtodo',

        // --------------- DATA ---------------
        data: function () {
            return window.$data;
        },

        // --------------- METHODS ---------------
        methods: {
            // -----сохранить БД
            saveBD: function (e) {
                e.preventDefault();
                alert("ID - " + this.testtable.ID + " NAME - " + this.testtable.NAME);
            }
        }
    };
    Vue.ready(module.exports);
})
