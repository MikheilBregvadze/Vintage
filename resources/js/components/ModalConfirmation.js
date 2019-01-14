import Events from '../Events.js'

export default {
    data () {
        return {
            isVisible: false,
            id: Number
        }
    },

    mounted(){
            Events.$on('modal:open', (id) => {
                this.isVisible = true
                console.log(id)
                this.id = id
            });
    },
    methods: {
        closeModal() {
            this.isVisible = false;
        }
    },
}