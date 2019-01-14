var retrievedObject = localStorage.getItem('testObject');
console.log(retrievedObject)
// alert('dff')
export default {
    data() {
        return {
            text: 'blabla',
            retrievedObject: [localStorage.getItem('testObject')]
        }
    },
    // methods: {
    //     addItem() {
    //         alert('ggg')
    //         this.retrievedObject = localStorage.getItem('testObject');
    //         console.log(this.retrievedObject)
    //     }
    // },
    mounted() {
        var items = [localStorage.getItem('testObject')];
        console.log(items.length)
        // for(var i = 0; i < ) {
        //     console.log(item)
        // }
        // localStorage.clear();
    },
}