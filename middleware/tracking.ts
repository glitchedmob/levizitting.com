import { Middleware } from '@nuxt/types';

const trackingMiddleware: Middleware = () => {
    if (!process.client) {
        return;
    }

    (window as any).firstparty?.page();
};

export default trackingMiddleware;
