import product from '../data/product';
import Events from '../Events.js';
export default {
    data () {
        return {
            id: Number,
            bikes: product.desc,
            cart: [],
        }
    },
    methods: {
        showconfirmation(id){
            this.id = id;
            Events.$emit('modal:open', {id: this.id});
            // console.log(this.bike);
            var item = this.bikes[id]; 
            var found = false;
            for(var i = 0; i < this.cart.length; i++) {
                if(this.cart[i].id === item.id) {
                    found = true;
					this.cart[i].qty++;
					break;
                }
            }
            if(!found) {
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