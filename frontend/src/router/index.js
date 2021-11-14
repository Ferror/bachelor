import { createRouter, createWebHistory } from 'vue-router'
import Home from '@/views/Home.vue'
import PaintMixing from '@/views/PaintMixing';

const routes = [
    {
        path: '/',
        name: 'Home',
        component: Home
    },
    {
        path: '/mixing',
        name: 'PaintMixing',
        component: PaintMixing
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes: routes
})

export default router
