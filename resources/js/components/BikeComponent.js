import Events from '../Events.js';

export default {
    data () {
        return {
            id: Number,
            bikes: [],
            cart: [],
        }
    },
    methods: {
        showconfirmation(item){
            Events.$emit('modal:open', {item: item});
        },
    },
}