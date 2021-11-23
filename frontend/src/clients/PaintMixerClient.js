import axios from 'axios'

const client = axios.create({
    baseURL: process.env.VUE_APP_BACKEND_URL
})

export default {
    mixColors: async function (colors) {
        if (colors.length < 2) {
            throw new Error('You must provide at least two colors to mix');
        }

        return client
            .post('/colors', {
                colors: colors,
            })
    },
    mixPaints: (paints) => {
        if (paints.length < 2) {
            throw new Error('You must provide at least two paints to mix');
        }

        return client
            .post('/paints', {
                paints: paints
            })
    }
}
