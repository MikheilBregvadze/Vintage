import product from '../data/product';
import Events from '../Events.js';
export default {
    data () {
        return {
            id: Number,
            bikes: product.desc,
            cart: []
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
                    qty: 1,
                })
            }
        },
        // addToCart() {
        //     console.log(this.cart)
        //     var testObject = this.cart;
        //     for (var prop in testObject) {
        //         console.log('  ' + prop + ': ' + testObject[prop]);
        //     }
        //     localStorage.setItem('testObject', JSON.stringify(testObject));
        //     var retrievedObject = localStorage.getItem('testObject');
        //     console.log('retrievedObject: ', JSON.parse(retrievedObject));
        // }
    },
    mounted() {
        // console.log(this.bikes[1]);
    },
}