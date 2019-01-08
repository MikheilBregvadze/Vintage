const images = require.context('./images', true, /\.png$/);

const parts = {
    pictures: [
        {
            src: images('./car1.png')
        },
        {
            src: images('./car2.png')
        },
        {
            src: images('./car3.png')
        }
    ]
}
export default parts;