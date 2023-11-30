import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'

createInertiaApp({
    resolve: name => require(`./Pages/${name}`),
    setup({ el, App, props, plugin }) {
        console.log(props);
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el)
    },
})