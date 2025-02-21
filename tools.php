<php>
  include "navbar.php"
</php>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Tools | Digital Toolkit</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Reuse variables and base styles from homepage */
        :root {
            --primary: #6366f1;
            --secondary: #4f46e5;
            --background: #f8fafc;
            --text: #1e293b;
            --surface: #ffffff;
        }

        .tools-page {
            padding: 100px 2rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .tools-filter {
            display: flex;
            gap: 1rem;
            margin-bottom: 2rem;
            flex-wrap: wrap;
        }

        .filter-btn {
            padding: 0.8rem 1.5rem;
            border-radius: 25px;
            border: 1px solid var(--primary);
            background: transparent;
            color: var(--primary);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .filter-btn.active {
            background: var(--primary);
            color: white;
        }

        .search-container {
            position: relative;
            margin-bottom: 2rem;
            max-width: 500px;
        }

        .search-input {
            width: 100%;
            padding: 1rem 2rem;
            border-radius: 30px;
            border: 1px solid #ddd;
            font-size: 1rem;
        }

        .search-icon {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--primary);
        }

        .tools-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .tool-item {
            background: var(--surface);
            border-radius: 15px;
            padding: 1.5rem;
            transition: transform 0.3s ease;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            position: relative;
        }

        .tool-item:hover {
            transform: translateY(-5px);
        }

        .tool-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: var(--primary);
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 15px;
            font-size: 0.8rem;
        }

        .tool-icon {
            font-size: 2rem;
            color: var(--primary);
            margin-bottom: 1rem;
        }

        .tool-content h3 {
            margin-bottom: 0.5rem;
            color: var(--text);
        }

        .tool-content p {
            color: #666;
            font-size: 0.9rem;
            line-height: 1.5;
        }

        .tool-link {
            display: inline-block;
            margin-top: 1rem;
            padding: 0.5rem 1.5rem;
            background: var(--primary);
            color: white;
            border-radius: 20px;
            text-decoration: none;
            transition: background 0.3s ease;
        }

        .tool-link:hover {
            background: var(--secondary);
        }

        @media (max-width: 768px) {
            .tools-page {
                padding-top: 80px;
            }
            
            .filter-btn {
                flex-grow: 1;
            }
        }
    </style>
</head>
<body>
    <!-- Reuse navigation from homepage -->
    
    <div class="tools-page">
        <div class="search-container">
            <input type="text" class="search-input" placeholder="Search tools...">
            <i class="fas fa-search search-icon"></i>
        </div>

        <div class="tools-filter">
            <button class="filter-btn active" data-filter="all">All Tools</button>
            <button class="filter-btn" data-filter="image">Image Tools</button>
            <button class="filter-btn" data-filter="pdf">PDF Tools</button>
            <button class="filter-btn" data-filter="document">Document Tools</button>
        </div>

        <div class="tools-grid">
            <!-- Image Tools -->
            <div class="tool-item" data-category="image">
                <span class="tool-badge">Image</span>
                <i class="tool-icon fas fa-file-image"></i>
                <div class="tool-content">
                    <h3>Image Compressor</h3>
                    <p>Reduce image file size while maintaining quality</p>
                    <a href="#" class="tool-link">Use Tool →</a>
                </div>
            </div>

            <div class="tool-item" data-category="image">
                <span class="tool-badge">Image</span>
                <i class="tool-icon fas fa-exchange-alt"></i>
                <div class="tool-content">
                    <h3>Image Converter</h3>
                    <p>Convert between JPG, PNG, WEBP formats</p>
                    <a href="#" class="tool-link">Use Tool →</a>
                </div>
            </div>

            <!-- PDF Tools -->
            <div class="tool-item" data-category="pdf">
                <span class="tool-badge">PDF</span>
                <i class="tool-icon fas fa-file-pdf"></i>
                <div class="tool-content">
                    <h3>PDF Compressor</h3>
                    <p>Reduce PDF file size without quality loss</p>
                    <a href="#" class="tool-link">Use Tool →</a>
                </div>
            </div>

            <div class="tool-item" data-category="pdf">
                <span class="tool-badge">PDF</span>
                <i class="tool-icon fas fa-file-word"></i>
                <div class="tool-content">
                    <h3>PDF to Word</h3>
                    <p>Convert PDF documents to editable Word files</p>
                    <a href="#" class="tool-link">Use Tool →</a>
                </div>
            </div>

            <!-- Add more tools following the same pattern -->
        </div>
    </div>

    <script>
        // Filter functionality
        const filterButtons = document.querySelectorAll('.filter-btn');
        const toolItems = document.querySelectorAll('.tool-item');
        const searchInput = document.querySelector('.search-input');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                // Add active class to clicked button
                button.classList.add('active');
                
                const filter = button.dataset.filter;
                filterTools(filter);
            });
        });

        // Search functionality
        searchInput.addEventListener('input', (e) => {
            const searchTerm = e.target.value.toLowerCase();
            filterTools(document.querySelector('.filter-btn.active').dataset.filter, searchTerm);
        });

        function filterTools(filter, searchTerm = '') {
            toolItems.forEach(item => {
                const category = item.dataset.category;
                const title = item.querySelector('h3').textContent.toLowerCase();
                const description = item.querySelector('p').textContent.toLowerCase();
                
                const categoryMatch = filter === 'all' || category === filter;
                const searchMatch = title.includes(searchTerm) || description.includes(searchTerm);
                
                item.style.display = (categoryMatch && searchMatch) ? 'block' : 'none';
            });
        }

        // Initial filter
        filterTools('all');
    </script>
</body>
</html>
