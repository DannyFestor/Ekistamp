require('./bootstrap');

import { createApp, h } from 'vue';
import {createInertiaApp, Link, Head} from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import Layout from './Layouts/Layout';

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${appName} - ${title}`,
    resolve: async name => {
        let page = (await import(`./Pages/${name}`)).default;

        if (page.layout === undefined) {
            page.layout = Layout;
        }

        return page;
    },
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .mixin({ methods: { route: window.route } })
            .component('Link', Link)
            .component('Head', Head)
            .mount(el);
    },
});

InertiaProgress.init({ color: '#4B5563' });
