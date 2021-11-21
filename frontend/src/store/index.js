import { createStore } from 'vuex'

const steps = {
    chooseBase: "choose-base",
    chooseColor: "choose-color",
};

export default createStore({
    state: {
        counter: 1,
        paintMixing: {
            steps: steps,
            state: steps.chooseColor
        },
        configuration: {
            colors: [],
        },
    },
    mutations: {
        PaintMixingNextStep: (state, step) => {
            console.log('PaintMixingNextStep');
            state.paintMixing.state = step;
        },
        PaintMixingRestartFlow: (state) => {
            console.log('PaintMixingRestartFlow');
            state.paintMixing.state = steps.chooseBase;
        },
        PaintMixingAddColor: (state, color) => {
            console.log('PaintMixingAddColor');
            state.configuration.colors.push(color);
        }
    },
    actions: {
    },
    modules: {
    }
})
