var retrievedObject = localStorage.getItem('testObject');
var items = JSON.parse(retrievedObject);
export default {
    data() {
        return {
            isShown: true,
            mounted: true,
            bikeId: '',
            items: [],
            itemsLength: items.length,
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
            this.itemsLength--
			this.total -= item.price;
			if(item.qty <= 0) {
				for(var i = 0; i < this.items.length; i++) {
					if(this.items[i].id === item.id) {
                        window.localStorage.removeItem(this.items.splice(i, 1));
                        localStorage.setItem('testObject', JSON.stringify(this.items));
                        hideElement()
						break;
					}
                }
			}
        },

        deleteItem(item) {
            item.qty--;
            this.itemsLength--
            for(var i = 0; i < this.items.length; i++) {
                if(this.items[i].id === item.id) {
                    window.localStorage.removeItem(this.items.splice(i, 1));
                    localStorage.setItem('testObject', JSON.stringify(this.items));
                    break;
                }
            }
        },
    },
    
    mounted() {
        var bike = '';
        if(items) {
            for(var i = 0; i < items.length; i++) {
                bike = items[i];
                this.items.push(bike);
                this.total += bike.price;
            }
        };
    },
}