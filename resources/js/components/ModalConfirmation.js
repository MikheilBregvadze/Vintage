import Events from '../Events.js'

var retrievedObject = localStorage.getItem('testObject');
var items = JSON.parse(retrievedObject);

export default {
    data () {
        return {
            id: Number,
            bikeItem: '',
            isVisible: false,
            testObject: [],
        }
    },

    mounted(){
        Events.$on('modal:open', (obj) => {
            this.isVisible = true
            var qty = 1
            obj.item.qty = qty
            this.bikeItem = obj.item
        });
        
        // localStorage.clear();
        var bike = '';
        if(items) {
            for(var i = 0; i < items.length; i++) {
                bike = items[i];
                this.testObject.push(bike)
            }
        };
    },
    methods: {
        closeModal() {
            this.isVisible = false;
        },
        addToCart() {
            this.isVisible = false;
            let products = this.testObject
            let res = this.bikeItem
            if(products.length == 0){
                products.push(res)
            }else{
                var pushItem = false;
                for(var i = 0; i < products.length; i++){
                    if(res.id != products[i].id){
                        pushItem = true;
                    }else{
                        pushItem = false;
                        return products[i].qty++
                    }
                }
                //console.log(res)
                pushItem ? products.push(res) : null
            }
            // this.testObject.push(this.bikeItem);
            localStorage.setItem('cart', JSON.stringify(products));
        },
    },
}