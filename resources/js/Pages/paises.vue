<template xmlns="http://www.w3.org/1999/html">

    <form @submit.prevent="guardar()">
        <input placeholder="Introduce el País" type="text" v-model="input">
        <button :disabled="input.length === 0" type="submit"> Guardar </button>
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
                axios.post('/paises/create', { nombre: this.input }).then(
                    response => {
                        console.log(response)
                        this.input = ''
                    }
                ). catch(error => {
                    console.log('Error');
                });


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
