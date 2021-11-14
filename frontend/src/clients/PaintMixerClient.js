import axios from 'axios'

const client = axios.create({
    baseURL: process.env.VUE_APP_BACKEND_URL
})

export default {
    mix: () => {
        client
            .post('/paints', {
                colors: [
                    {
                        model: {
                            r: 1,
                            g: 1,
                            b: 1,
                        },
                        volume: 1
                    },
                    {
                        model: {
                            r: 1,
                            g: 1,
                            b: 1,
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
