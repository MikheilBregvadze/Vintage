import product from '../data/product';
import Events from '../Events.js'

var retrievedObject = localStorage.getItem('testObject');
var items = JSON.parse(retrievedObject);

export default {
    data () {
        return {
            isVisible: false,
            id: Number,
            cart: product.desc,
            accessories: accessories.desc,
            testObject: [],
        }
    },

    mounted(){
            Events.$on('modal:open', (id) => {
                this.isVisible = true
                this.id = id
            });
            
            var bike = '';
            if(items) {
                for(var i = 0; i < items.length; i++) {
                    bike = items[i];
                    if(bike.qty < 2) {
                        this.testObject.push(bike)
                    }
                }
            };
    },
    methods: {
        closeModal() {
            this.isVisible = false;
        },
        addToCart() {
            this.isVisible = false;
            this.testObject.push(this.cart[this.id.id]);
            localStorage.setItem('testObject', JSON.stringify(this.testObject));
        },
    },
}