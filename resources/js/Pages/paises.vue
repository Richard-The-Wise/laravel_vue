<template xmlns="http://www.w3.org/1999/html">

    <form @submit.prevent="guardar()">
        <input placeholder="Introduce el País" type="text" v-model="input">
        <button type="submit"> Guardar </button>
    </form>


</template>

<script type="text/javascript">
    export default {
        name: "paises",
        props: {

        },
        data: () => ({
            pais: {
                id: 0,
                nombre: '',
            },
            input: ''
        }),

        methods:{ // Usados para modificar información y guardar los cambios.
            guardar() {
                this.pais = {id:(this.pais.id+1), nombre:this.input};
                this.input = '';
                axios.default.post('/paises/create', this.pais).then(
                    response => {
                        console.log(response)
                    }
                ). catch(error => {
                    console.log('Error');
                });

                console.log(this.pais)

            }
        },
        computed:{ //Usados para modificar solo la información para la vista


        },
        created() {

        },
        mounted() {

        }
    };

</script>


<style>

</style>
