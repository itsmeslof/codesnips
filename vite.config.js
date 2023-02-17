import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import sslConfig from "./sslconfig";

let config = {
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
};

if (sslConfig.enabled) {
    config.server = {
        host: sslConfig.host,
        hmr: { host: sslConfig.host },
        https: sslConfig.https,
    };
}

export default defineConfig(config);
