<template xmlns="http://www.w3.org/1999/html">
    <div id="shopping_list">
        <div class="header">
            <h1>{{titulo}}</h1>
            <button style="background-color: red" v-if="editing" @click="editar(false)" class="btn btn-primary"> Cancelar </button>
            <button v-else @click="editar(true)" class="btn btn-primary">Agregar Items</button>
        </div>


        <div v-if="editing" class="add-item-form">
            <input @keyup.enter="saveItem" v-model="newItem" placeholder="Agregar Items" type="text" >
            <label>
                <input type="checkbox" v-model="newItemHighPriority"> Prioritario
            </label>
            <button
                v-bind:disabled="newItem.length===0"
                @click="saveItem"
                class="btn btn-primary">
                Guardar
            </button>
            <p class="counter">{{characterCount}}/25</p>
        </div>
<!--        Radio input-->
<!--        <label><input v-model="newItemPriority" type="radio" value="low">Low</label>-->
<!--        <label><input v-model="newItemPriority" type="radio" value="high">High</label>-->
<!--        Select input-->
<!--        <select v-model="newItemPriority">-->
<!--            <option value="low">Low</option>-->
<!--            <option value="high">High</option>-->
<!--        </select>-->
<!--        Checkbox input-->

        <br>
<!--        <a v-bind:href="newItem">Link externo</a>-->
<!--        {{newItemPriority}}-->
        <p v-if="items.length === 0"> Ya no hay más que comprar</p>
        <ul>
            <li v-for="item in items"
                @click="togglePurchased(item)"
                :class="{tachado:purchased}"
            >
                {{item.label}}
<!--                <i v-else>{{item.label}}</i>-->
            </li>
        </ul>
    </div>
</template>

<script type="text/javascript">
    export default {
        name: "prueba",
        props: {

        },
        data: () => ({
            titulo:"App de lista de compras",
            newItem:"",
            editing: false,
            items: [
            ],
            newItemPriority: 'low',
            newItemHighPriority: false,


        }),
        methods:{ // Usados para modificar información y guardar los cambios.
            saveItem(){
                if (this.newItem.length===0){
                    return
                }
                this.items.push({label: this.newItem, purchased: false})
                this.newItem = ""
                this.newItemHighPriority = false
            },

            editar(editing){
                this.editing = editing
                newItem = ""
            },

            togglePurchased(item){
                item.purchased = !item.purchased;
            }

        },
        computed:{ //Usados para modificar solo la información para la vista
            characterCount(){
                return this.newItem.length
            },

            reverseItems(){
                return [...this.items].reverse()
            }

        },
        created() {

        },
        mounted() {

        }
    };

</script>


<style>
.tachado{
    font-weight: bold;
}
</style>
