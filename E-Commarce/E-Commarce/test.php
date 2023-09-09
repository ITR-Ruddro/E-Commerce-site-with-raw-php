<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Include any CSS or Bootstrap for styling -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Header section with navigation -->
    <header>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main content section with widgets -->
    <main>


        <section class="widget">
            <h2>Recent Activity</h2>
            <ul>
                <li>User A updated their profile.</li>
                <li>New report generated.</li>
                <li>...</li>
            </ul>
        </section>

        <section class="widget">
            <h2>Statistics</h2>
            <!-- Display charts, graphs, or data tables here -->
        </section>
    </main>

    <!-- Footer section -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Your Company</p>
    </footer>
</body>
</html>