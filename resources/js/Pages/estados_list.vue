<template xmlns="http://www.w3.org/1999/html">

    <div>
        <button
            class="btn btn-primary">
            <a class="white" href="estados">Nuevo Estado</a>
        </button>
    </div>

    <div>

    </div>
    <el-table
        :data="tableData"
        border
        style="width: 100%">
        <el-table-column
            prop="id"
            label="ID"
            width="180">
        </el-table-column>
        <el-table-column
            prop="nombre"
            label="Nombre"
            width="720">
        </el-table-column>
    </el-table>


</template>

<script type="text/javascript">
export default {
    data() {
        return {
            tableData: [{
                id: '',
                nombre:'',

            }]
        }
    },
    methods:{ // Usados para modificar información y guardar los cambios.

        show() {
            axios.get('/estados/show').then(
                response => this.paises = response.data);

            dd(response.data)


        }
    },
}

</script>


<style>
.white{
    color: white;
}
</style>
