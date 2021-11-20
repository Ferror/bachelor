import { createApp } from 'vue'
import App from '@/App.vue'
import router from '@/router'
import store from '@/store'
import locale from '@/locales'
import PrimeVue from 'primevue/config';

import '@/assets/reset.css';

import 'primevue/resources/themes/saga-blue/theme.css';
import 'primevue/resources/primevue.min.css';
import 'primeicons/primeicons.css';

const app = createApp(App);

import Button from 'primevue/button'

app.use(locale)
app.use(router)
app.use(store)
app.use(PrimeVue)

app.component('Button', Button)

app.mount('#app')
