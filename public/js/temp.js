var data = {
    items: ['Bananas', 'Apples', 'Bear'],
    title: 'My Shopping List'
};

new Vue ({
    el: '#list',
    data: data,
    methods: {
        ClickButton: function () {
            console.log('button click');
        }
    }
});