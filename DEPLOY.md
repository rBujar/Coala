# 🚀 Deployment Guide

## Netlify (Recommended)

### Option 1: Auto Deploy via GitHub Actions

**Setup (one time):**

1. Get Netlify credentials:
   - **Auth Token:** https://app.netlify.com/user/applications → New access token
   - **Site ID:** Your site → Site settings → Site information → API ID

2. Add to GitHub:
   - Repo → Settings → Secrets and variables → Actions
   - Add `NETLIFY_AUTH_TOKEN`
   - Add `NETLIFY_SITE_ID`

3. Push to main:
   ```bash
   git push origin main
   ```

**Done!** Every push builds with PHP on GitHub → deploys to Netlify ✅

### Option 2: Manual Deploy

```bash
npm run deploy
```

Builds locally + deploys to Netlify.

---

## Other Platforms

### Vercel
```bash
npm run build
vercel --prod
```

### GitHub Pages
```bash
npm run build
git subtree push --prefix dist origin gh-pages
```

### Any Static Host
Just upload the `dist/` folder!

---

## Troubleshooting

**Build fails?**
- Ensure PHP is installed locally
- Run `npm run build` to test locally first

**Assets not loading?**
- Check paths in HTML are absolute (`/assets/...`)
- Verify `dist/` folder has all files

---

**Your site is ready to deploy!** 🎉
