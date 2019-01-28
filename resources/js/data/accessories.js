const images = require.context('./images', true, /\.jpg$/)
//https://www.99bikes.com.au/checkout/cart/
const accessories = {
  desc: [
    {
      id: 0,
      qty: 1,
      title: 'Large Cyclops',
      src: 'ac1.png',      
      price: 158.00,
      color: 'Grey',
    //   src: images('./n1.jpg'),
    },
    {
      id: 1,
      qty: 1,
      title: 'Friendly Bot',
      src: 'ac2.png',
      price: 158.00,
      color: 'Yellow',
    //   src: images('./n2.jpg'),
    },
    {
      id: 2,
      qty: 1,
      title: 'Shredder',
      src: 'ac3.png',
      price: 139.00,
      color: 'Red',
    //   src: images('./n3.jpg'),
     
    },
    {
      id: 3,
      qty: 1,
      title: 'Small Cyclops',
      src: 'ac4.png',
      price: 118.00,
      color: 'skyblue',
    //   src: images('./n4.jpg'),
    },
    {
      id: 4,
      qty: 1,
      title: 'Surveillance Bot',
      src: 'ac5.png',
      price: 154.00,
      color: 'greye',
    //   src: images('./n5.png'),
    },
    {
        id: 5,
        qty: 1,
        title: 'Surveillance Bot',
        src: 'ac6.png',
        price: 159.00,
        color: 'greyv',
      //   src: images('./n5.png'),
      },
      {
        id: 6,
        qty: 1,
        title: 'Surveillance Bot',
        src: 'ac7.png',
        price: 153.00,
        color: 'grery',
      //   src: images('./n5.png'),
      },
      {
        id: 7,
        qty: 1,
        title: 'Surveillance Bot',
        src: 'ac8.png',
        price: 151.00,
        color: 'greey',
      //   src: images('./n5.png'),
      },
      {
        id: 8,
        qty: 1,
        title: 'Surveillance Bot',
        src: 'ac9.png',
        price: 151.00,
        color: 'grwey',
      //   src: images('./n5.png'),
      },
      {
        id: 9,
        qty: 1,
        title: 'Surveillance Bot',
        src: 'ac10.png',
        price: 153.00,
        color: 'grqey',
      //   src: images('./n5.png'),
      }
  ]
}
export default accessories