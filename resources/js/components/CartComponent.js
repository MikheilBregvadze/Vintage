var retrievedObject = localStorage.getItem('testObject');
var items = JSON.parse(retrievedObject)
export default {
    data() {
        return {
            items
        }
    },
}