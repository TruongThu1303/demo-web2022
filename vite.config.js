const { resolve } = require('path')
const { defineConfig } = require('vite')

module.exports = defineConfig({
  build: {
    rollupOptions: {
      input: {
        Menu: resolve(__dirname, 'index.html'),
        Detail: resolve(__dirname, 'detail.html'),
        Products : resolve(__dirname, 'product.html'),
        Signin: resolve(__dirname, 'signin.html'),
        Signup: resolve(__dirname, 'signup.html')
      },
    },
  },
})