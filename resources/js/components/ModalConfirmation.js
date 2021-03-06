import Events from '../Events.js'

var retrievedObject = localStorage.getItem('cart');
var items = JSON.parse(retrievedObject);

export default {
    data () {
        return {
            id: Number,
            bikeItem: '',
            isVisible: false,
            cart : [],
            // testObject: [],
        }
    },

    mounted(){
        Events.$on('modal:open', (obj) => {
            this.isVisible = true
            var qty = 1
            obj.item.qty = qty
            this.bikeItem = obj.item
            document.body.className = 'o-hidden';
        });
        
        var bike = '';
        if(items) {
            for(var i = 0; i < items.length; i++) {
                bike = items[i];
                this.cart.push(bike)
            }
        };
    },
    methods: {
        closeModal() {
            this.isVisible = false;
            document.body.className = 'o-visible';
        },
        addToCart() {
            this.isVisible = false;
            document.body.className = 'o-visible';
            let products = this.cart
            let res = this.bikeItem
            var pushItem = false;
            var justInserted = false;
            var arrayCount = products.length
           
            if(!products.length){
                products.push(res)
            }else{
                for(var i=0; i< arrayCount; i++)
                {
                    if(products[i].id == res.id && !justInserted)
                    {
                        products[i].qty++
                        break;
                    }else{
                        pushItem = true;
                    } 
                    if(i == products.length-1 && pushItem){
                        justInserted = true;
                        products.push(res)
                    }
                }

            }
            localStorage.setItem('cart', JSON.stringify(products));
        },
    },
}