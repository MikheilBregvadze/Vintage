<template>
    <div>
        <a v-on:click="onClick" class="nav-link" v-text="text"></a>
    </div>
</template>

<script>
    import Events from '../Events';
    export default {
        props: ['text'],
        methods: {
            onClick() {
                Events.$emit('login:open');
            },
        }
    }
</script>

<style lang="scss" scoped>
.nav-link {
    cursor: pointer;
}
</style>