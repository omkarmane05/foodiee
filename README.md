# 🍔 Foodiee - Your Favorite Food Platform

<div align="center">
  <img width="1200" height="475" alt="Foodiee Banner" src="https://via.placeholder.com/1200x475?text=Foodiee+-+Your+Favorite+Food+Platform" />
</div>

## 📱 About Foodiee

**Foodiee** is an interactive food ordering and management platform where users can discover their favorite foods, manage shopping carts, and save favorites for quick access. Built with pure HTML, CSS, and JavaScript for a lightweight, fast user experience.

### Key Features
- 🍽️ **Browse Food Items** - Explore a wide variety of food options
- 🛒 **Shopping Cart** - Add items to cart with real-time updates
- ❤️ **Favorites** - Save your favorite dishes for quick ordering
- 📱 **Responsive Design** - Works seamlessly on all devices
- ⚡ **Fast & Lightweight** - Pure HTML/CSS/JS, no heavy frameworks
- 💾 **Local Storage** - Persist your cart and favorites

---

## 🚀 Getting Started

### Prerequisites
- Modern web browser (Chrome, Firefox, Safari, Edge)
- No server required - runs entirely in the browser!

### Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/omkarmane05/foodiee.git
   cd foodiee
   ```

2. **Open in browser:**
   ```bash
   # Simply open index.html in your browser
   # Or use a local server:
   python -m http.server 8000
   # Then visit: http://localhost:8000
   ```

---

## 📁 Project Structure

```
foodiee/
├── index.html          # Main HTML file
├── styles/
│   └── style.css       # Styling
├── scripts/
│   └── script.js       # JavaScript functionality
└── README.md           # This file
```

---

## 💻 Technology Stack

| Technology | Purpose |
|-----------|---------|
| **HTML5** | Structure & markup |
| **CSS3** | Styling & responsive design |
| **JavaScript (Vanilla)** | Interactivity & cart management |
| **LocalStorage API** | Data persistence |

---

## 🎯 Features Breakdown

### 🍽️ Food Browsing
- Dynamic food listing with images, prices, and descriptions
- Filter and search capabilities
- Category-based organization

### 🛒 Shopping Cart
- Add/remove items
- Quantity management
- Real-time total calculation
- Cart persistence via LocalStorage

### ❤️ Favorites System
- Mark items as favorites
- Quick access to saved items
- One-click reordering

---

## 🔧 How to Use

1. **Browse**: Explore available food items
2. **Add to Cart**: Click "Add to Cart" button for any item
3. **Save Favorites**: Click the heart icon to save favorites
4. **Checkout**: Review your cart and proceed to order
5. **Enjoy**: Your data persists even after closing the browser!

---

## 📝 Configuration

### Customizing Food Items

Edit `scripts/script.js` to add or modify food items:

```javascript
const foodItems = [
  {
    id: 1,
    name: "Burger",
    price: 150,
    category: "Fast Food",
    image: "burger.jpg",
    description: "Delicious beef burger"
  },
  // Add more items...
];
```

---

## 🌐 Deployment

### Deploy on Vercel (Recommended)
```bash
npm i -g vercel
vercel
```

### Deploy on Netlify
- Connect GitHub repository
- Auto-deploy on push

### Deploy on GitHub Pages
```bash
# Push to gh-pages branch
git checkout -b gh-pages
git push origin gh-pages
```

---

## 🐛 Troubleshooting

| Issue | Solution |
|-------|----------|
| Cart not saving | Check browser's LocalStorage is enabled |
| Styles not loading | Clear browser cache (Ctrl+Shift+Delete) |
| Images not showing | Verify image paths are correct |

---

## 📊 Browser Support

| Browser | Support |
|---------|---------|
| Chrome | ✅ Full support |
| Firefox | ✅ Full support |
| Safari | ✅ Full support |
| Edge | ✅ Full support |
| IE 11 | ⚠️ Limited support |

---

## 🤝 Contributing

Contributions are welcome! Please follow these steps:

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit changes (`git commit -m 'Add AmazingFeature'`)
4. Push to branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

---

## 📄 License

This project is open source and available under the MIT License.

---

## 🙋 Support

Have questions or found a bug? Please open an issue on GitHub or contact the maintainer.

---

<p align="center">
  Made with ❤️ by <a href="https://github.com/omkarmane05">Omkar Mane</a>
</p>

<p align="center">
  <a href="https://github.com/omkarmane05"><img src="https://img.shields.io/badge/GitHub-000?style=for-the-badge&logo=github" /></a>
  <a href="#"><img src="https://img.shields.io/badge/LinkedIn-0077B5?style=for-the-badge&logo=linkedin" /></a>
</p>
