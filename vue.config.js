// const { defineConfig } = require("@vue/cli-service");
// module.exports = defineConfig({
//     devServer: {
//         proxy: {
//             '/': {
//                 target: 'http://localhost:8080',
//                 changeOrigin: true,
//                 secure: false,
//                 pathRewrite: { '^/api': '/api' },
//                 logLevel: 'debug'
//             },
//         },
//     },
//     transpileDependencies: true,
// });

const { defineConfig } = require('@vue/cli-service')
module.exports = defineConfig({
  transpileDependencies: true
})