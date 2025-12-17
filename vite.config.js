import { defineConfig } from 'vite';
import { resolve } from 'path';

export default defineConfig({
  build: {
    outDir: 'dist',
    manifest: true,
    assetsDir: 'assets',
    rollupOptions: {
      input: {
        main: resolve(__dirname, 'src/js/main.js'),
        style: resolve(__dirname, 'src/css/style.scss'),
      },
    },
  },
  
  // Don't copy public dir, we'll handle assets via imports
  publicDir: false,
  base: '/',
  
  server: {
    port: 5173,
    cors: true,
    watch: {
      include: ['**/*.php'],
    },
  },
});
