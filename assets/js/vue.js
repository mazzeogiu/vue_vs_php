let vue = new Vue({
    el: '#app',
    data: {
        wines: [],
        searchKey: "",
    },
    methods: {
        imgUrl (img) {
            return "assets/uploads/" + img;
        },
    },
    computed: {
        search() {
            return this.wines.filter((wine) => {
                return wine.name.toLowerCase().includes(this.searchKey.toLowerCase())
            });
        }
    },
    mounted: function() {
        axios.get('libraries/controllers/getData.php')
            .then((reponse) => {
                this.wines = reponse.data;
            })
            .catch(function(response){
                console.log('REPONSE ERROR');
            })
    }
});