<template xmlns="http://www.w3.org/1999/html">
    <h1>Registro de Clientes</h1>
    <div class="col-md-6" >
        <el-form @submit.prevent="guardar()" ref="form" v-model="form" label-width="120px">
            <el-form-item label="Nombre Com">
                <el-input v-model="form.nombre"></el-input>
            </el-form-item>
            <el-form-item label="Razon Social">
                <el-input v-model="form.razon"></el-input>
            </el-form-item>
            <el-form-item label="Email">
                <el-input v-model="form.email"></el-input>
            </el-form-item>
            <el-form-item label="Calle">
                <el-input v-model="form.calle"></el-input>
            </el-form-item>
            <el-form-item label="Numero Ext">
                <el-input v-model="form.numero_ext"></el-input>
            </el-form-item>
            <el-form-item label="Numero Int">
                <el-input v-model="form.numero_int"></el-input>
            </el-form-item>
            <el-form-item label="Colonia">
                <el-input v-model="form.colonia"></el-input>
            </el-form-item>
            <el-form-item label="Codigo Postal">
                <el-input v-model="form.codigo_postal"></el-input>
            </el-form-item>
            <el-form-item label="Estatus">
                <el-select v-model="form.estatus" placeholder="estatus">
                    <el-option label="Activo" value="Activo"></el-option>
                    <el-option label="Suspendido" value="Suspendido"></el-option>
                    <el-option label="Eliminado" value="Eliminado"></el-option>
                </el-select>
            </el-form-item>
            <el-form-item>
                <el-button @click="guardar" >Create</el-button>
                <el-button>Cancel</el-button>
            </el-form-item>
        </el-form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            form: {
                nombre: '',
                razon:'',
                email:'',
                calle:'',
                numero_ext:'',
                numero_int:'',
                colonia:'',
                codigo_postal:'',
                estatus:'',
            }
        }
    },
    methods: {
        guardar() {
            axios.post('/clientes/create', { cliente: this.form }).then(
                response => {
                    console.log(response)
                    this.form = ''
                }
            ). catch(error => {
                console.log('Error');
            });
        }
    }
}
</script>
