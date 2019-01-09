const images = require.context('./images', true, /\.jpg$/)

const products = {
  desc: [
    {
      id: 1,
      description:
        'A robot head with an unusually large eye and teloscpic neck -- excellent for exploring high spaces.',
      title: 'Large Cyclops',
      src: 'velo.png'
    //   src: images('./n1.jpg'),
    },
    {
      id: 2,
      description: 'A friendly robot head with two eyes and a smile -- great for domestic use.',
      title: 'Friendly Bot',
      src: 'velo1.png'
    //   src: images('./n2.jpg'),
    },
    {
      id: 3,
      description:
        'A large three-eyed head with a shredder for a mouth -- great for crushing light medals or shredding documents.',
      title: 'Shredder',
      src: 'velo2.png',
    //   src: images('./n3.jpg'),
     
    },
    {
      id: 4,
      description:
        'A simple single-eyed head -- simple and inexpensive.',
      title: 'Small Cyclops',
      src: 'velo3.png'
    //   src: images('./n4.jpg'),
    },
    {
      id: 5,
      description:
        'A robot head with three oscillating eyes -- excellent for surveillance.',
      title: 'Surveillance Bot',
      src: 'velo4.png'
    //   src: images('./n5.png'),
    }
  ]
}
// console.log(product.desc)
export default products