<header class="mb-auto">
    <h3 class="float-md-start mb-0">
        MJdoesCode
    </h3>

    <nav class="nav nav-masthead justify-content-center float-md-end">
        <a id="home-b" class="nav-link fw-bold py-1 px-0" href="welcome">Home</a>
        <a id="about-b" class="nav-link fw-bold py-1 px-0" href="about">About</a>
        <a id="blog-b" class="nav-link fw-bold py-1 px-0" href="blog">Blog</a>
    </nav>

    <script>
        // Get the current page's URL
        const currentPage = window.location.pathname;

        // Define the navigation links
        const homeLink = document.getElementById('home-b');
        const aboutLink = document.getElementById('about-b');
        const blogLink = document.getElementById('blog-b');

        // Check if the current page matches the link's href
        if (currentPage.includes('welcome')) {
            homeLink.classList.add('active');
        } else if (currentPage.includes('about')) {
            aboutLink.classList.add('active');
        } else if (currentPage.includes('blog')) {
            blogLink.classList.add('active');
        } else if (currentPage.includes('post')) {
            blogLink.classList.add('active');
        } else if (currentPage.includes('compose')) {
            blogLink.classList.add('active');
        } else if (currentPage.includes('profile')) {
            blogLink.classList.add('active');
        }
    </script>

</header>