import product from '../data/product';
import Events from '../Events.js'

export default {
    data () {
        return {
            isVisible: false,
            id: Number,
            cart: product.desc,
            testObject: []

        }
    },

    mounted(){
            Events.$on('modal:open', (id) => {
                this.isVisible = true
                this.id = id
            });
    },
    methods: {
        closeModal() {
            this.isVisible = false;
        },
        addToCart() {
            this.isVisible = false;
            this.testObject.push(this.cart[this.id.id]);
            localStorage.setItem('testObject', JSON.stringify(this.testObject));

                console.log(this.testObject)

            // localStorage.clear();
               
        }
    },
}