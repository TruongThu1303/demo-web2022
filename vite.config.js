const { resolve } = require('path')
const { defineConfig } = require('vite')

module.exports = defineConfig({
  build: {
    rollupOptions: {
      input: {
        main: resolve(__dirname, 'index.html'),
        Detail: resolve(__dirname, 'nested/detail.html'),
        Products : resolve(__dirname, 'nested/product.html'),
        Signin: resolve(__dirname, 'nested/signin.html'),
        Signup: resolve(__dirname, 'nested/signup.html')
      }
    }
  }
})