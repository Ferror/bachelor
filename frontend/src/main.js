import { createApp } from 'vue'
import App from '@/App.vue'
import router from '@/router'
import PrimeVue from 'primevue/config';

import '@/assets/reset.css';

// import 'primevue/resources/themes/saga-blue/theme.css';
// import 'primevue/resources/primevue.min.css';
// import 'primeicons/primeicons.css';

const app = createApp(App);

// import Button from 'primevue/button';

app.use(router);
app.use(PrimeVue)

// app.component('Button', Button)

app.mount('#app')
