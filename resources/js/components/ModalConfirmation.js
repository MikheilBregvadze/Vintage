import Events from '../Events.js'

var retrievedObject = localStorage.getItem('testObject');
var items = JSON.parse(retrievedObject);

export default {
    data () {
        return {
            id: Number,
            items: {},
            isVisible: false,
            testObject: [],
        }
    },

    mounted(){
            Events.$on('modal:open', (obj) => {
                this.isVisible = true
                console.log(obj.item)
                var qty = 1
                obj.item.qty = qty
                this.items = obj.item
                console.log(this.items)
            });
            // localStorage.clear();
    },
    methods: {
        closeModal() {
            this.isVisible = false;
        },
        addToCart() {
            this.isVisible = false;
            this.testObject.push(this.items);
            localStorage.setItem('testObject', JSON.stringify(this.testObject));
        },
    },
}