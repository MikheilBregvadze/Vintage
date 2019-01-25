<template>
<div class="select-component" @mouseleave="hideOptions">
<input type="search" 
    :name="name" 
    :id="id"
    v-model="input"
    class="form-control"  
    :placeholder="placeholder" />
    <span class="open-indicator" @mouseover="showOptions"></span>
    <div class="select-items" :class="'select-items-'+name">
        <div v-for="(option, key) in options" :key="key"
            class="select-item" 
            v-text="option"
            @click="chooseOption(option, key)"></div>
    </div>
</div>
</template>

<script>
export default{
    props: ['options', 'name', 'placeholder', 'id'],
    data(){
        return{
            input: '',
            height: 0,
        }
    },
    mounted(){
        //console.log(this.options)
    },
    methods:{
        showOptions(){
            let items = document.querySelectorAll('.select-items')
            for( var i = 0; i < items.length; i++){
                document.querySelectorAll('.select-items')[i].style.height = 0;
            }
                this.height == 'initial' ? this.height = 0 : this.height = 'initial'
                document.querySelector(`.select-items-${this.name}`).style.height = this.height;           
        },
        chooseOption(option, key){
            console.log(option)
            this.input = option
            document.querySelector(`input[name="${this.name}"]`).setAttribute('value', key)
            this.showOptions()
        },
        hideOptions(){
            this.height = 0
            document.querySelector(`.select-items-${this.name}`).style.height = this.height; 
        }
    }
}
</script>
