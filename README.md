# Coala - PHP Development → Static HTML Production

Build modern websites using PHP for development (with component includes) and deploy as static HTML.

## 🚀 Quick Start

```bash
# Install
npm install

# Develop
npm run dev:all

# Build
npm run build
```

Open: **http://localhost:8000**

## 📖 How It Works

### Development
- Write PHP files with `<?php include ?>` for components
- Get hot module replacement (HMR) for CSS/JS
- Run on local PHP server

### Production
- Run `npm run build`
- PHP files → HTML files
- CSS/JS optimized and minified
- Deploy `dist/` folder anywhere (no PHP needed!)

## 📁 Project Structure

```
Source (Development):
├── index.php           # Use PHP includes
├── pages/
│   ├── features.php
│   └── ...
├── components/
│   ├── header.php      # Reusable components
│   └── footer.php
└── src/
    ├── css/            # SCSS files
    ├── js/             # JavaScript
    └── assets/         # Images, fonts

Build (Production):
└── dist/
    ├── index.html      # Static HTML
    ├── pages/
    │   └── features.html
    └── assets/         # Optimized CSS/JS/images
```

## 🛠️ Commands

| Command | Description |
|---------|-------------|
| `npm run dev` | Start Vite dev server |
| `npm run php` | Start PHP server |
| `npm run dev:all` | Start both servers |
| `npm run build` | Build static site |
| `npm run preview` | Preview production build |

## 📝 Usage in PHP Files

```php
<?php require_once 'vite-helper.php'; ?>
<!doctype html>
<html>
<head>
  <?php viteClient(); ?>
  <?php viteEntry('src/css/style.scss'); ?>
</head>
<body>
  <?php include 'components/header.php'; ?>
  
  <h1>Your content</h1>
  
  <?php include 'components/footer.php'; ?>
  <?php viteEntry('src/js/main.js'); ?>
</body>
</html>
```

## 🌐 Deploy

1. Run `npm run build`
2. Upload `dist/` folder to:
   - Netlify
   - Vercel
   - GitHub Pages
   - Any static host

No PHP required in production!

## 🔧 Requirements

- Node.js 20+
- PHP 7.4+ (for development only)
- npm

## ⚙️ How It Works

The `vite-helper.php` automatically detects your environment:

**Development:** Loads assets from Vite dev server (HMR enabled)  
**Production:** Loads optimized assets from `dist/` folder

The `build-html.js` script:
1. Starts temporary PHP server
2. Fetches each PHP page as rendered HTML
3. Fixes asset paths for production
4. Saves as `.html` files in `dist/`

---

**Develop with PHP. Deploy as HTML. Best of both worlds!** 🎉
