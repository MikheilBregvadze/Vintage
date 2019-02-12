import Events from '../Events.js'

var retrievedObject = localStorage.getItem('testObject');
var items = JSON.parse(retrievedObject);

export default {
    data () {
        return {
            id: Number,
            item: {},
            isVisible: false,
            testObject: [],
        }
    },

    mounted(){
            Events.$on('modal:open', (obj) => {
                this.isVisible = true
                console.log(obj.item)
                
            });
            // localStorage.clear();
            // var bike = '';
            // if(items) {
            //     for(var i = 0; i < items.length; i++) {
            //         bike = items[i];
            //         this.testObject.push(bike)
            //     }
            // };
    },
    methods: {
        closeModal() {
            this.isVisible = false;
        },
        addToCart() {
            this.isVisible = false;
            // console.log(this.item)
            // this.testObject.push(this.cart[this.id.id]);
            // localStorage.setItem('testObject', JSON.stringify(this.testObject));
        },
    },
}