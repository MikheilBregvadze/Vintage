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
            // this.localStorageArray.push(testObject);
            // for (var prop in testObject) {
                // console.log('  ' + prop + ': ' + testObject[prop]);
            // }
            localStorage.setItem('testObject', JSON.stringify(this.testObject));
            // var retrievedObject = localStorage.getItem('testObject');
            // console.log('retrievedObject: ', JSON.parse(retrievedObject).title);
            // var objLocalStorage = JSON.parse(retrievedObject);

                console.log(this.testObject)

            // localStorage.clear();
               
        }
    },
}