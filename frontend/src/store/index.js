import { createStore } from 'vuex'

const steps = [
    {
        title: "Choose base color",
        name: "choose-base",
    },
    {
        title: "Choose first color",
        name: "choose-color"
    },
];

const bases = [
    {
        name: "white",
        caption: "White",
        lock: "",
        model: {
            r: 255,
            g: 255,
            b: 255,
        },
    },
    {
        name: "light-grey",
        caption: "Light Grey",
        lock: "lock-black",
        model: {
            r: 255,
            g: 255,
            b: 255,
        },
    },
    {
        name: "grey",
        caption: "Grey",
        lock: "lock-white",
        model: {
            r: 255,
            g: 255,
            b: 255,
        },
    },
    {
        name: "dark-grey",
        caption: "Dark Grey",
        lock: "lock-white",
        model: {
            r: 255,
            g: 255,
            b: 255,
        },
    },
    {
        name: "black",
        caption: "Black",
        lock: "lock-white",
        model: {
            r: 255,
            g: 255,
            b: 255,
        },
    },
];

export default createStore({
    state: {
        bases: bases,
        paintMixing: {
            steps: steps,
            state: 0,
        },
        configuration: {
            base: null,
            colors: [],
        },
    },
    getters: {
        GetCurrentStep: function (state) {
            return state.paintMixing.steps[state.paintMixing.state];
        },
        GetAvailableBases: function (state) {
            return state.bases;
        }
    },
    mutations: {
        PaintMixingNextStep: (state, step) => {
            console.log('PaintMixingNextStep');

            state.paintMixing.state = step;
        },
        PaintMixingRestartFlow: (state) => {
            console.log('PaintMixingRestartFlow');

            state.paintMixing.state = 0;
        },
        PaintMixingAddColor: (state, color) => {
            console.log('PaintMixingAddColor');

            state.configuration.colors.push(color);
        },
        PaintMixingAddBase: (state, BaseName) => {
            console.log('PaintMixingAddBase');

            state.configuration.base = state.bases.filter(base => base.name === BaseName).pop();
        },
    },
    actions: {
    },
    modules: {
    }
})
