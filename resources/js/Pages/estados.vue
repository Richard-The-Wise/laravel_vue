<template xmlns="http://www.w3.org/1999/html">

    <h1>Registro de Estados</h1>
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
    data() {
        return {

        }
    },
    methods:{ // Usados para modificar información y guardar los cambios.


    },
}

</script>


<style>

</style>
