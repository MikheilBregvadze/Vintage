import product from '../data/product';
import Events from '../Events.js'
export default {
    data () {
        return {
            id: Number,
            bikes: product.desc
        }
    },
    methods: {
        showconfirmation(id){
            this.id = id
            Events.$emit('modal:open', {id: this.id});
            console.log(this.bike)
        }
    },
    mounted() {
        console.log(this.bikes)
    },
}