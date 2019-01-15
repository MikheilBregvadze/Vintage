var retrievedObject = localStorage.getItem('testObject');
var items = JSON.parse(retrievedObject);
// console.log(items.length)
// Cookies.set('name', 'value');
export default {
    data() {
        return {
            items,
            length: items.length,
            total: 0
        }
    },
    methods: {
        inc(item) {
            item.qty++;
            this.total += item.price;
		},
    },
    mounted() {
        this.total = this.items[0].price
    },
}