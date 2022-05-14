import {Middleware} from "@nuxt/types";

const trackingMiddleware: Middleware = (context) => {
    if (!process.client) {
        return;
    }

    (window as any).firstparty?.page();
}

export default trackingMiddleware
