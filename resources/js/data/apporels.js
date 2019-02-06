const images = require.context('./images', true, /\.jpg$/)
//https://www.99bikes.com.au/checkout/cart/
const apporels = {
  desc: [
    {
      id: 0,
      qty: 1,
      title: 'Large Cyclops',
      src: 'ap1.png',      
      price: 140.00,
    //   src: images('./n1.jpg'),
    },
  ]
}
export default apporels