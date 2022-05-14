import {Middleware} from "@nuxt/types";

const trackingMiddleware: Middleware = (context) => {
    if (!context.isClient) {
        return;
    }

    (window as any).firstparty?.page();
}

export default trackingMiddleware
