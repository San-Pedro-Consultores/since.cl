<script>

var fecha = "{$fecha}";
var archivo = "{$archivo}";

var vm = new Vue({
    el: '#tsubit',
    data () {
        return {
            info: null,
            loading: true,
            errored: false
        }
    },
    mounted () {
        axios
        .get('https://www.simce.cl/ficha2019/jsonSimce/ficha-521_fc45d51fd1e7d6711e0c45e552e2a0e2.json')
        //.get('https://www.simce.cl/ficha'+ fecha +'/' + archivo)
        .then(response => {
            this.info = response.data.valores
        })
        .catch(error => {
            console.log(error)
            this.errored = true
        })
        .finally(() => this.loading = false)
    }
});    

</script>