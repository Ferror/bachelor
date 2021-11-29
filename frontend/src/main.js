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

import Button from 'primevue/button';
import InputNumber from 'primevue/inputnumber';

app.use(locale);
app.use(router);
app.use(store);
app.use(PrimeVue);

app.component('Button', Button);
app.component('InputNumber', InputNumber)

if (process.env.NODE_ENV === 'production' && window.location.protocol !== "https:") {
    window.location.protocol = "https";
}

app.mount('#app');
