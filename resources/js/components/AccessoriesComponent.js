import accessories from '../data/accessories';
import Events from '../Events.js'

export default {
  data() {
    return {
      mounted: true,
      accessories: accessories.desc,
      items: [],
      cart: [],
      itemsLength: '',
      id: Number,
    }
  },
  methods: {
    addToStorage(index) {
      this.id = index;
      var item = this.items[index]; 
      var found = false;
      for(var i = 0; i < this.items.length; i++) {
          if(this.items[i].id === item.id) {
            found = true;
            break;
          }
      }
      if(!found || item.qty < 2) {
          this.cart.push({
              id: item.id,
              title: item.title,
              src: item.src,
              price: item.price,
              color: item.color,
              qty: item.qty,
          })
      }

      localStorage.setItem('cart', JSON.stringify(this.cart));

      // console.log(this.cart)
    }
  },
  mounted() {
    // localStorage.clear();
    this.itemsLength = this.accessories.length;
    
    var accessorie = '';
    for(var i = 0; i < this.accessories.length; i++) {
      accessorie = this.accessories[i];
      this.items.push(accessorie)
    }
    console.log(this.accessories)
  }
}