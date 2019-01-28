import accessories from '../data/accessories';
import Events from '../Events.js'

export default {
  data() {
    return {
      mounted: true,
      accessories: accessories.desc,
      items: [],
    }
  },
  methods: {
    addToStorage() {
      localStorage.setItem('items', JSON.stringify(this.items));
    }
  },
  mounted() {
    var accessorie = '';
    for(var i = 0; i < this.accessories.length; i++) {
      accessorie = this.accessories[i];
      this.items.push(accessorie)
    }
  }
}