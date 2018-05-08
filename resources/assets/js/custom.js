


new Vue({
    el: '#meals-list',
    data: {
        items: [],
        state: true
    },
    methods: {
        clickBtn: function (e) {
            var menu_id = e.target.attributes[0].nodeValue;
            var day_id = e.target.attributes[1].nodeValue;

            fetch('/main/meals-list-json/' + menu_id + '/' + day_id)
                .then((res) => res.json())
                .then((data) => {
                    this.items = data;
                });

        this.state = false;
        }  
    }
});