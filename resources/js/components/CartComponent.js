var retrievedObject = localStorage.getItem('testObject');
var items = JSON.parse(retrievedObject)
// parseInt(retrievedObject)
// retrievedObject = retrievedObject.split('[')

// retrievedObject = retrievedObject[1].split('{')
// alert('dff') 
console.log(items)

export default {
    data() {
        return {
            text: 'blabla',
            items
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
        // var items = [localStorage.getItem('testObject')];
        // console.log(items.length)
        // for(var i = 0; i < ) {
            // console.log(typeof this.retrievedObject)
        // }
        // localStorage.clear();
    },
}