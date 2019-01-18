var retrievedObject = localStorage.getItem('testObject');
var items = JSON.parse(retrievedObject);
export default {
    data() {
        return {
            isShown: false,
            items: [],
            length: items.length,
            total: 0,
        }
    },
    methods: {
        inc(item) {
            item.qty++;
            this.length++;
            this.total += item.price;
        },
        dec(item) {
            item.qty--;
            this.length--
			this.total -= item.price;
			if(item.qty <= 0) {
				for(var i = 0; i < this.items.length; i++) {
					if(this.items[i].id === item.id) {
                        window.localStorage.removeItem(this.items.splice(i, 1));
                        localStorage.setItem('testObject', JSON.stringify(this.items));
                        console.log(this.items)
						break;
					}
				}
			}
        },
        deleteItem(item) {
            for(var i = 0; i < this.items.length; i++) {
                if(this.items[i].id === item.id) {
                    window.localStorage.removeItem(this.items.splice(i, 1));
                    localStorage.setItem('testObject', JSON.stringify(this.items));
                    console.log(this.items)
                    break;
                }
            }
        }
	},
    mounted() {
        console.log(this.items)
        var bike = '';
            if(items) {
                for(var i = 0; i < items.length; i++) {
                    bike = items[i];
                    this.items.push(bike);
                    this.total += bike.price;
                }
                if(this.length == 0) {
                    this.isShown = true;
                }
            };
            console.log(this.isShown)
    },
}