var retrievedObject = localStorage.getItem('testObject');
var items = JSON.parse(retrievedObject);
// console.log(items.length)
// Cookies.set('name', 'value');
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
            item.price += item.price;
            this.total += item.price;

            // item.price += newPrice.price
            // this.total += item.price;
            console.log(item)
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
            console.log(this.itemPrices)
            console.log(this.items)
    },
}