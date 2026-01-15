# Deployment Instructions for Hostinger

## Important: SEO Protection

This project uses **root-level** `index.php` and `.htaccess` for production deployment on Hostinger.

### File Structure:
- ✅ **Root `index.php`** - Used in production (Hostinger)
- ✅ **Root `.htaccess`** - Used in production (Hostinger)
- ⚠️ **`public/index.php`** - Only for local development (`php artisan serve`)

### SEO Protection:
1. The root `.htaccess` blocks direct access to `/public/index.php` (403 Forbidden)
2. `robots.txt` disallows `/public/index.php` for search engines
3. Only root `index.php` is accessible in production

### Deployment Steps:

1. **Upload all files** to Hostinger (including `public/index.php` for local dev)

2. **Set Document Root** to project root (not `public/` folder)

3. **Verify `.htaccess` is working:**
   - Try accessing: `https://yourdomain.com/public/index.php`
   - Should return: 403 Forbidden (this is correct!)

4. **Test your site:**
   - Main site should work via root `index.php`
   - All assets (CSS, JS, images) should load correctly
   - No duplicate content issues

### Local Development:
- Use `php artisan serve` (requires `public/index.php`)
- The `public/index.php` is safe to keep for local development

### Production:
- Root `index.php` handles all requests
- `public/index.php` is blocked by `.htaccess`
- No SEO issues from duplicate files

