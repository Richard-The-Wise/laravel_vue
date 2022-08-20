<template xmlns="http://www.w3.org/1999/html">

    <h1>Registro de Paises</h1>
    <form @submit.prevent="guardar()">
        <input placeholder="Introduce el País" type="text" v-model="input">
        <button class="green white" :disabled="input.length === 0" type="submit">Guardar</button>
    </form>

    <div>
        <button  class ="cancel">
            <a href="paises_list" class="white" >
                Cancelar
            </a>
        </button>
    </div>



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
.cancel{
    background: red;
}

.white{
    color:white;
}

.green{
    background: green;
}

</style>
