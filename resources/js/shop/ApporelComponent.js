import apporels from '../data/apporels'

export default {
    data() {
      return {
        mounted: true,
        apporels: apporels.desc,
        items: [],
        cart: [],
        itemsLength: '',
        id: Number,
      }
    },
    mounted() {
      this.itemsLength = this.apporels.length;
    }
}