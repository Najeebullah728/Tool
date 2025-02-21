<?php
include "navbar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Toolkit - All-in-One File Solutions</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary: #6366f1;
            --secondary: #4f46e5;
            --background: #f8fafc;
            --text: #1e293b;
            --surface: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', system-ui, sans-serif;
            text-decoration: none;
        }

        body {
            background: var(--background);
            color: var(--text);
        }

        .hero {
            padding: 8rem 2rem 4rem;
            text-align: center;
            background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
            color: white;
        }

        .search-bar {
            max-width: 600px;
            margin: 2rem auto;
            display: flex;
            align-items: center;
            background: white;
            border-radius: 50px;
            padding: 0.5rem 1rem;
        }

        .search-bar input {
            width: 100%;
            border: none;
            outline: none;
            padding: 0.75rem;
            font-size: 1rem;
        }

        .search-bar i { color: var(--primary); }

        .tools-section, .category-section {
            max-width: 1200px;
            margin: 4rem auto;
            padding: 0 2rem;
            text-align: center;
        }

        .tools-grid, .category-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .tool-card, .category-card {
            background: var(--surface);
            padding: 2rem;
            border-radius: 10px;
            transition: transform 0.3s;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }

        .tool-card:hover, .category-card:hover { transform: translateY(-5px); }

        .tool-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 1rem;
        }

        .footer {
            background: var(--text);
            color: white;
            padding: 4rem 2rem;
            margin-top: 4rem;
            text-align: center;
        }

        @media (max-width: 768px) {
            .hero h1 { font-size: 2rem; }
            .tools-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <section class="hero">
        <h1>Transform Your Files with Ease</h1>
        <p>All-in-one solution for image and PDF processing</p>
        <div class="search-bar">
            <input type="text" placeholder="Search for tools...">
            <i class="fas fa-search"></i>
        </div>
    </section>

    <section class="tools-section">
        <h2>Popular Tools</h2>
       <div class="tools-grid">
    <div class="tool-card">
        <a href="/image-compresser" target="_blank">
            <i class="tool-icon fas fa-file-image"></i>
            <h3>Image Compressor</h3>
            <p>Reduce image size without losing quality</p>
        </a>
    </div>
</div>

            <div class="tool-card">
                <i class="tool-icon fas fa-exchange-alt"></i>
                <h3>Image Converter</h3>
                <p>Convert between JPG, PNG, WEBP formats</p>
            </div>
            <div class="tool-card">
                <i class="tool-icon fas fa-file-pdf"></i>
                <h3>PDF Compressor</h3>
                <p>Reduce PDF file size efficiently</p>
            </div>
            <div class="tool-card">
                <i class="tool-icon fas fa-file-export"></i>
                <h3>PDF to Word</h3>
                <p>Convert PDF documents to editable Word files</p>
            </div>
        </div>
    </section>

    <section class="category-section">
        <h2>Categories</h2>
        <div class="category-grid">
            <div class="category-card">
                <h3>Image Tools</h3>
                <p>20+ specialized image processing tools</p>
            </div>
            <div class="category-card">
                <h3>PDF Tools</h3>
                <p>Complete PDF management toolkit</p>
            </div>
            <div class="category-card">
                <h3>Documents</h3>
                <p>File conversion & compression</p>
            </div>
        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2025 ToolKit Pro. All Rights Reserved.</p>
    </footer>
</body>
</html>
