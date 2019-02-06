const images = require.context('./images', true, /\.jpg$/)
//https://www.99bikes.com.au/checkout/cart/
const bikes = {
  desc: [
    {
      id: 0,
      qty: 1,
      title: 'Large Cyclops',
      src: 'velo.png',      
      price: 4458.00,
      color: 'Grey',
    //   src: images('./n1.jpg'),
    },
    {
      id: 1,
      qty: 1,
      title: 'Friendly Bot',
      src: 'velo1.png',      
      price: 4458.00,
      color: 'Grey',
    //   src: images('./n2.jpg'),
    },
    {
      id: 2,
      qty: 1,
      title: 'Shredder',
      src: 'velo2.png',      
      price: 4458.00,
      color: 'Grey',
    //   src: images('./n3.jpg'),
     
    },
    {
      id: 3,
      qty: 1,
      title: 'Small Cyclops',
      src: 'velo3.png',      
      price: 4458.00,
      color: 'Grey',
    //   src: images('./n4.jpg'),
    },
  ]
}
export default bikes