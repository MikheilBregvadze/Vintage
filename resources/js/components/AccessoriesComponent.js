import accessories from '../data/accessories';
import Events from '../Events.js'

export default {
  data() {
    return {
      mounted: true,
      accessories: accessories.desc,
      items: [],
      itemsLength: ''
    }
  },
  methods: {
    addToStorage() {
      localStorage.setItem('items', JSON.stringify(this.items));
    }
  },
  mounted() {
    this.itemsLength = this.accessories.length;
    
    var accessorie = '';
    for(var i = 0; i < this.accessories.length; i++) {
      accessorie = this.accessories[i];
      this.items.push(accessorie)
    }
  }
}