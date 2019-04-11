var retrievedObject = localStorage.getItem('cart');
var items = JSON.parse(retrievedObject);
export default {
    data() {
        return {
            isShown: true,
            mounted: true,
            bikeId: '',
            items: [],
            itemsLength: 0,
            total: 0,
            imgUrl: '',
        }
    },
    methods: {
        inc(item) {
            item.qty++;
            this.itemsLength++;
            this.total += item.price;
        },
        dec(item) {
            item.qty--;
            this.itemsLength--;
			this.total -= item.price;
			if(item.qty <= 0) {
				for(var i = 0; i < this.items.length; i++) {
					if(this.items[i].id === item.id) {
                        window.localStorage.removeItem(this.items.splice(i, 1));
                        localStorage.setItem('cart', JSON.stringify(this.items));
                        hideElement()
						break;
					}
                }
			}
        },

        deleteItem(item) {
            this.total -= item.qty * item.price
            this.itemsLength -= item.qty
            console.log(this.itemsLength);
            for(var i = 0; i < this.items.length; i++) {
                if(this.items[i].id === item.id) {
                    window.localStorage.removeItem(this.items.splice(i, 1));
                    localStorage.setItem('cart', JSON.stringify(this.items));
                    break;
                }
            }
        },
    },
    
    mounted() {
        let bike = '';
        let itemLength = this.itemsLength;
        let total = this.total;
        if(items) {
            for(var i = 0; i < items.length; i++) {
                itemLength += items[i].qty
                total += items[i].qty * items[i].price
                bike = items[i];
                this.items.push(bike);
                this.total += bike.price;
            }
            this.itemsLength = itemLength;
            this.total = total;
        };
    },
} 