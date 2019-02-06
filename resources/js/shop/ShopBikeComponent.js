import bikes from '../data/bikes';

export default {
    data() {
      return {
        mounted: true,
        bikes: bikes.desc,
        items: [],
        cart: [],
        itemsLength: '',
        id: Number,
      }
    },

    mounted() {
      this.itemsLength = this.bikes.length;
      
    }
}