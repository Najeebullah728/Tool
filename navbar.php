<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary: #6366f1;
            --primary-hover: #4f46e5;
            --background: #f8fafc;
            --surface: #ffffff;
            --text: #1e293b;
            --text-light: #64748b;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: var(--background);
        }

        .navbar {
            background: var(--surface);
            padding: 1rem 2rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all 0.3s ease;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 2rem;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--text);
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .dropdown {
            position: relative;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background: var(--surface);
            min-width: 200px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
            border-radius: 8px;
            top: 100%;
            left: 0;
            z-index: 1000;
            opacity: 0;
            transform: translateY(10px);
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        .dropdown:hover .dropdown-content {
            display: block;
            opacity: 1;
            transform: translateY(0);
        }

        .dropdown-content a {
            padding: 1rem;
            display: block;
            color: var(--text);
            transition: all 0.3s ease;
        }

        .dropdown-content a:hover {
            background: var(--background);
        }

        .mobile-menu {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
        }

        @media (max-width: 1024px) {
            .nav-links {
                display: none;
                flex-direction: column;
                position: absolute;
                background: var(--surface);
                width: 100%;
                top: 70px;
                left: 0;
                padding: 1rem;
                box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            }

            .nav-links.active {
                display: flex;
            }

            .mobile-menu {
                display: block;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            ToolKit Pro
        </div>

        <div class="nav-links">
            <a href="index.html">Home</a>
            <div class="dropdown">
                <a href="tools.php">Tools <i class="fas fa-chevron-down"></i></a>
                <div class="dropdown-content">
                    <a href="tools.php">Image Tools</a>
                    <a href="tools.php">PDF Tools</a>
                    <a href="tools.php">Document Tools</a>
                </div>
            </div>

            <a href="contact.php">Contact</a>
          
        </div>

        <div class="mobile-menu">
            <i class="fas fa-bars"></i>
        </div>
    </nav>

    <script>
        document.querySelector('.mobile-menu').addEventListener('click', function() {
            document.querySelector('.nav-links').classList.toggle('active');
        });
    </script>
</body>
</html>
