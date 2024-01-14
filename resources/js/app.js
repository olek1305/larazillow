import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import MainLayout from '@/Layouts/MainLayout.vue'
import { ZiggyVue } from 'ziggy'
import '../css/app.css'
import NProgress from 'nprogress'
import { router } from '@inertiajs/vue3'

router.on('start', () => NProgress.start())
router.on('finish', () => NProgress.done())

createInertiaApp({
    progress: {
        color: 'green',
        showSpinner: false
    },
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    let page = pages[`./Pages/${name}.vue`]
    page.default.layout = page.default.layout || MainLayout
    return page

  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(ZiggyVue, Ziggy)
      .mount(el)
  },
})
