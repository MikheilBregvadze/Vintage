import Events from '../Events.js';

export default {
    data () {
        return {
            id: Number,
            bikes: [],
            cart: [],
            style: "hidden"
        }
    },
    methods: {
        showconfirmation(item){
            Events.$emit('modal:open', {item: item});
        },
    },
}