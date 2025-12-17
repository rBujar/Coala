# Coala - PHP to Static HTML

Develop with PHP (components, includes) → Build to static HTML → Deploy anywhere.

## 🚀 Quick Start

```bash
npm install
npm run dev:all
```

Open: **http://localhost:8000**

## 📦 Build

```bash
npm run build
```

Output: `dist/` folder (static HTML + optimized assets)

## 🌐 Deploy

### Auto Deploy (GitHub Actions)
Push to main → Builds automatically → Deploys to Netlify

**Setup:**
1. Add GitHub Secrets:
   - `NETLIFY_AUTH_TOKEN` (from Netlify user settings)
   - `NETLIFY_SITE_ID` (from site settings)
2. Push to main
3. Done! ✅

### Manual Deploy
```bash
npm run deploy
```

## 📁 Structure

```
├── index.php              # Pages (use PHP includes)
├── pages/*.php            # More pages
├── components/*.php       # Reusable components
├── src/
│   ├── css/              # SCSS styles
│   ├── js/               # JavaScript
│   └── assets/           # Images, fonts
└── dist/                 # Built site (after npm run build)
    ├── *.html            # Static HTML
    └── assets/           # Optimized CSS/JS
```

## 🛠️ Commands

| Command | Description |
|---------|-------------|
| `npm run dev:all` | Start dev servers (Vite + PHP) |
| `npm run build` | Build static site |
| `npm run deploy` | Build + deploy to Netlify |
| `npm run preview` | Preview production build |

## 📝 PHP Template

```php
<?php require_once 'vite-helper.php'; ?>
<!doctype html>
<html>
<head>
  <?php viteClient(); ?>
  <?php viteEntry('src/css/style.scss'); ?>
  <title>Page Title</title>
</head>
<body>
  <?php include 'components/header.php'; ?>
  
  <main>Your content</main>
  
  <?php include 'components/footer.php'; ?>
  <?php viteEntry('src/js/main.js'); ?>
</body>
</html>
```

## 🎯 How It Works

**Development:**
- PHP files with includes/components
- Vite dev server for HMR
- Fast development workflow

**Production:**
- PHP → HTML conversion
- CSS/JS optimized & minified
- Pure static site output
- Deploy anywhere (no PHP needed)

## 🔧 Requirements

- Node.js 20+
- PHP 7.4+ (dev only)

---

**Best of both worlds: PHP flexibility + static site speed!** 🚀
