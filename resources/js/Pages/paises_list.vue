<template xmlns="http://www.w3.org/1999/html">

   <div>
       <button
           @click="saveItem"
           class="btn btn-primary">
           Nuevo País
       </button>
   </div>

    <div>
        <li v-for="pais in paises">
        {{pais.nombre}} asdf
        </li>
        adsfa

    </div>


</template>

<script type="text/javascript">
    export default {
        props: {

        },
        data: () => ({
            paises: [],

        }),

        methods:{ // Usados para modificar información y guardar los cambios.

        },
        computed:{ //Usados para modificar solo la información para la vista


        },
        created() {
            axios.get('./api/pais')
                .then(response => this.paises = response.data);
        },
        mounted() {

        }
    };

</script>


<style>

</style>
