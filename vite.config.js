import { defineConfig } from 'vite';
import { resolve } from 'path';

export default defineConfig({
  build: {
    outDir: 'dist',
    manifest: true,
    rollupOptions: {
      input: {
        main: resolve(__dirname, 'src/js/main.js'),
        style: resolve(__dirname, 'src/css/style.scss'),
      },
    },
  },
  
  publicDir: 'src/assets',
  
  server: {
    port: 5173,
    cors: true,
    watch: {
      include: ['**/*.php'],
    },
  },
});
