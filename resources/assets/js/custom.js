

var data = {
    items: ['Bananas', 'Apples', 'Bear', 'Monkey', 'Bird'],
    title: 'My Shopping List'
};

new Vue ({
    el: '#list',
    data: data,
    methods: {
        ClickButton: function (e) {
            console.log('day: ' + e.target.attributes[0].nodeValue);
            console.log('menu: ' + e.target.attributes[1].nodeValue);
        }
    }
});

new Vue({
    el: '#meals-list',
    data: {
        items: []
    },
    created() {
        fetch('http://tempproj.loc/main/meals-list-json')
            .then((res) => res.json())
            .then((data) => {
                this.items = data;
            });
    },
    methods: {
        clickBtn: function (e) {
            console.log(e.target.attributes[0]);
            fetch('http://tempproj.loc/main/meals-list-json2')
                .then((res) => res.json())
                .then((data) => {
                    this.items = data;
                });
        }  
    }
});