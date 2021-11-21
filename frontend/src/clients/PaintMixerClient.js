import axios from 'axios'

const client = axios.create({
    baseURL: process.env.VUE_APP_BACKEND_URL
})

export default {
    mix: async function (colors) {
        if (colors.length < 2) {
            throw new Error("You must provide at least two colors to mix");
        }

        return client
            .post('/paints', {
                colors: colors,
            })
    },
    mixPaint: (base, paint) => {
        client
            .post('/paints', {
                colors: [
                    {
                        model: {
                            r: base.r,
                            g: base.g,
                            b: base.b,
                        },
                        volume: 1
                    },
                    {
                        model: {
                            r: paint.r,
                            g: paint.g,
                            b: paint.b,
                        },
                        volume: 1
                    }
                ]
            })
            .then(function (response) {
                console.log(response);
            })
            .catch(function (error) {
                console.log(error);
            })
    }
}
