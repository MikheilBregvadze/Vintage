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
        showconfirmation(id, item){
            // console.log(id)
            this.id = id;
            Events.$emit('modal:open', {id: this.id});
            var item = this.bikes[id]; 
            var found = false;
            for(var i = 0; i < this.cart.length; i++) {
                if(this.cart[i].id === item.id) {
                    found = true;
                    item.qty += 1;
					break;
                }
            }
            if(!found || item.qty < 2) {
                this.cart.push({
                    id: item.id,
                    description: item.description,
                    title: item.title,
                    src: item.src,
                    price: item.price,
                    color: item.color,
                    qty: item.qty,
                })
            }
        },
    },
}