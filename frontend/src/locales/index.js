import { createI18n } from 'vue-i18n'
import English from '@/locales/en.js'
import Polish from '@/locales/pl.js'

export default createI18n({
    legacy: false,
    locale: process.env.VUE_APP_I18N_LOCALE || 'en',
    fallbackLocale: process.env.VUE_APP_I18N_FALLBACK_LOCALE || 'en',
    globalInjection: true,
    messages: {
        en: English,
        pl: Polish,
    }
})
