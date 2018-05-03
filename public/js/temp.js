var data = {
    items: ['Bananas', 'Apples', 'Bear'],
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