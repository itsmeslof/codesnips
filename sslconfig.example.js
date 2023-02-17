/**
 * COPY this file to 'sslconfig.js' to enable ssl for laravel + vite
 *
 * You may encounter a CORS issue when loading frontend assets. If so, you will need to add an exception in your browser if your local ssl certificate is untrusted. You need to do this on BOTH your php server (ex, 'https://codesnips.test') AND your local vite development server (ex, 'https://codesnips.test:5173').
 */
export default {
    host: "codesnips.test",
    sslEnabled: true,
    https: {
        key: "path\\to\\your\\key.key",
        cert: "path\\to\\your\\cert.crt",
    },
};
