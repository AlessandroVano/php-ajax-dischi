const app = new Vue({
    el: '#app',
    data: {
        albums: null
    },
    created() {
        this.getData();
    },
    methods: {
        getData() {
            axios.get('http://localhost/php-ajax-dischi/ex2-vue-axios-php/scripts/api-users.php')
            .then(response => {
                console.log(response.data);
                this.albums = response.data;
               })
               .catch(err => {
                   console.log(err);
               });
        },
    },
});