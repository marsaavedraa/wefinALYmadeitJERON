# Portfolio Website

A modern, responsive portfolio website featuring a dark theme with cyan accent colors and smooth animations.

## Features

- **Responsive Design**: Fully responsive across all devices
- **Modern UI**: Dark theme with gradient accents and glowing effects
- **Smooth Animations**: Scroll animations, hover effects, and transitions
- **Interactive Elements**: Mobile menu, smooth scrolling, and form validation
- **Multiple Sections**:
  - Hero section with hexagonal profile image
  - About section with statistics
  - Skills showcase
  - Portfolio/Projects gallery
  - Work experience timeline
  - Contact form

## Customization Guide

### 1. Personal Information

**Update the Hero Section** ([index.html:36-51](index.html#L36-L51)):
- Replace "John Kendric" with your name
- Update the role/title
- Modify the description
- Add your social media links

**Update Contact Information** ([index.html:266-286](index.html#L266-L286)):
- Replace email, phone, and location with your details

### 2. Profile Image

**Replace the hero image** ([index.html:52-58](index.html#L52-L58)):
```html
<img src="your-image-path.jpg" alt="Your Name">
```

Replace the Unsplash URL with your own profile photo. For best results, use a square image (500x500px or larger).

### 3. Projects

**Update portfolio projects** ([index.html:171-228](index.html#L171-L228)):
- The three projects are already added with the URLs you provided
- Replace the placeholder images with actual screenshots of your projects
- Update descriptions and tags as needed

To add a screenshot:
1. Take a screenshot of each project
2. Save images in the same folder as index.html
3. Replace the Unsplash URLs with your image paths:
```html
<img src="project-screenshot.jpg" alt="Project Name">
```

### 4. Skills

**Modify skills** ([index.html:118-169](index.html#L118-L169)):
- Add or remove skill cards
- Update icons, titles, and descriptions
- Icon classes use Font Awesome (see [Font Awesome Icons](https://fontawesome.com/icons))

### 5. Experience

**Update timeline** ([index.html:233-262](index.html#L233-L262)):
- Experience entries are already populated with your work history
- Modify dates, titles, or descriptions as needed
- Add more positions by copying a timeline-item block

### 6. Colors

**Change color scheme** ([styles.css:9-16](styles.css#L9-L16)):
```css
:root {
    --primary-color: #00d9ff;      /* Main accent color */
    --secondary-color: #00ffcc;    /* Secondary accent */
    --dark-bg: #0a0e1a;           /* Background color */
    --card-bg: #1a1f2e;           /* Card background */
}
```

### 7. Social Media Links

Update social links in two places:

**Hero section** ([index.html:44-49](index.html#L44-L49)):
```html
<a href="https://facebook.com/yourprofile" class="social-icon">
    <i class="fab fa-facebook-f"></i>
</a>
```

**Footer** ([index.html:306-311](index.html#L306-L311)):
Same format as above

### 8. Download CV Button

**Add your CV/Resume** ([index.html:50](index.html#L50)):
1. Save your CV as a PDF in the same folder
2. Update the button link:
```html
<a href="your-cv.pdf" download class="btn-primary">Download CV</a>
```

## File Structure

```
portfolio/
├── index.html          # Main HTML file
├── styles.css          # All styles and animations
├── script.js           # Interactive functionality
└── README.md          # This file
```

## Technologies Used

- HTML5
- CSS3 (with CSS Grid and Flexbox)
- Vanilla JavaScript
- Font Awesome 6.4.0 (for icons)

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers

## Performance Tips

1. **Optimize Images**: Compress images before uploading (use tools like TinyPNG)
2. **Lazy Loading**: Consider adding lazy loading for images
3. **Hosting**: Deploy to platforms like Netlify, Vercel, or GitHub Pages

## Deployment

### Option 1: GitHub Pages
1. Create a GitHub repository
2. Push these files to the repository
3. Enable GitHub Pages in repository settings

### Option 2: Netlify
1. Create a Netlify account
2. Drag and drop your folder to Netlify
3. Your site is live!

### Option 3: Vercel
1. Install Vercel CLI: `npm i -g vercel`
2. Run `vercel` in your project folder
3. Follow the prompts

## Contact Form Setup

The contact form currently shows an alert message. To make it functional:

1. **Using a Form Service** (easiest):
   - [Formspree](https://formspree.io/)
   - [Netlify Forms](https://www.netlify.com/products/forms/)
   - [FormSubmit](https://formsubmit.co/)

2. **Using a Backend**:
   - Set up a server with Node.js/PHP
   - Add email sending functionality
   - Update the form submission handler in [script.js:58-72](script.js#L58-L72)

## Additional Customization

### Add More Sections
Copy any section structure and modify content to add new sections like:
- Testimonials
- Blog posts
- Certifications
- Awards

### Change Animations
Modify animation speeds in [styles.css:704-732](styles.css#L704-L732)

### Update Fonts
Replace the default font in [styles.css:18](styles.css#L18) with Google Fonts or other web fonts

## Support

If you need help customizing your portfolio, refer to:
- [MDN Web Docs](https://developer.mozilla.org/)
- [CSS-Tricks](https://css-tricks.com/)
- [Font Awesome Documentation](https://fontawesome.com/docs)

## License

Free to use for personal and commercial projects.

---

**Created with modern web technologies and best practices.**
