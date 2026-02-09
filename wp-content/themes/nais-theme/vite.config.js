import { defineConfig } from 'vite';
import { resolve } from 'path';

export default defineConfig({
  plugins: [],
  root: '',
  base: process.env.NODE_ENV === 'development' ? '/' : '/wp-content/themes/nais-theme/dist/',
  
  build: {
    outDir: resolve(__dirname, './dist'),
    emptyOutDir: true,
    manifest: true,
    rollupOptions: {
      input: {
        main: resolve(__dirname, 'assets/js/app.js'),
      },
    },
  },
  
  server: {
    host: '0.0.0.0',
    port: 5173,
    strictPort: true, 
    cors: true,
    hmr: {
      host: 'localhost',
    },
  },
});
