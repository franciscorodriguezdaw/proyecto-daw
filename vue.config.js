const { defineConfig } = require("@vue/cli-service");
module.exports = defineConfig({
    devServer: {
        proxy: {
            '/': {
                target: 'http://localhost:80',
                changeOrigin: true,
                secure: false,
                pathRewrite: { '^/api': '/api' },
                logLevel: 'debug'
            },
        },
    },
    transpileDependencies: true,
});