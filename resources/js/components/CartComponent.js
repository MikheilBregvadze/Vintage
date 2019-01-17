var retrievedObject = localStorage.getItem('testObject');
var items = JSON.parse(retrievedObject);
export default {
    data() {
        return {
            items: [],
            length: items.length,
            total: 0,
        }
    },
    methods: {
        inc(item) {
            item.qty++;
            this.length++
            // this.length = item.qty
            this.total += item.price;
        },
        dec(item) {
			item.qty--;
			this.total -= item.price;
			if(item.qty <= 0) {
				for(var i = 0; i < this.items.length; i++) {
					if(this.items[i].id === item.id) {
                        // this.items.splice(i, 1);
                        localStorage.removeItem(this.items.splice(i, 1))
						break;
					}
				}
			}
		}
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