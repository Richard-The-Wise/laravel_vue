import './bootstrap';
import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/inertia-vue3";
import { InertiaProgress } from "@inertiajs/progress";
import ElementPlus from 'element-plus'
import 'element-plus/theme-chalk/index.css'
InertiaProgress.init();
createInertiaApp({
    resolve: (name) => require(`./Pages/${name}`),
    setup: function ({el, App, props, plugin}) {
        createApp({render: () => h(App, props)})
            .use(plugin)
            .use(ElementPlus)
            .mount(el);
    },
});
