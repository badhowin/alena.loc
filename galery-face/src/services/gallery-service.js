export default class GalleryService {

    deleteGallery = (id) => {
        console.log(`delete ${id}`);
    }

    editGallery = (id) => {
        console.log(`edit ${id}`);
    }

    getRandomKey = (arr = []) => {

        let key = 0;

        do {
            key = Math.floor(Math.random() * Number.MAX_SAFE_INTEGER);
        } while (arr.includes(key));

        return key;

    }

    getAllGalleries = () => {
        return [
            { id: 0, header: 'Life of things', group: 'photography project', tmbImg: 'tmb1.jpg' },
            { id: 1, header: 'The matter of life and death', group: 'photography co-project', tmbImg: 'tmb2.jpg' },
            { id: 2, header: 'Imaginary road trip without destination ', group: 'photography co-project', tmbImg: 'tmb3.jpg' },
            { id: 3, header: 'Dialogues', group: 'photography co-project', tmbImg: 'tmb4.jpg' },
            { id: 4, header: 'Chromotherapy ', group: 'photography project', tmbImg: 'tmb5.jpg' },
            { id: 5, header: 'Out of shot ', group: 'photography project', tmbImg: 'tmb6.jpg' },
            { id: 6, header: 'Spring song', group: 'photography series', tmbImg: 'tmb7.jpg' },
            { id: 7, header: 'See you on the dark side of the moon', group: 'photography series', tmbImg: 'tmb8.jpg' },
            { id: 8, header: 'Tenderness', group: 'photography series', tmbImg: 'tmb9.jpg' },
            { id: 9, header: 'Flowers and colours', group: 'photography series', tmbImg: 'tmb10.jpg' },
            { id: 10, header: 'Sea, sing me your song', group: 'photography series', tmbImg: 'tmb11.jpg' },
            { id: 11, header: 'Spring', group: 'photography series', tmbImg: 'tmb12.jpg' },
        ]
    }
}