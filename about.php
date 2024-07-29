<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["search"])) {
    // Sanitize the search input
    $search = filter_var(trim($_GET["search"]), FILTER_SANITIZE_STRING);

    // Validate the search input
    if (empty($search)) {
        echo "Search term is required.";
    } else {
        // Here you would implement your search logic, e.g., querying the database
        echo "Searching for: " . htmlspecialchars($search);
        
        // Example: Redirect to a search results page
        // header("Location: search_results.php?query=" . urlencode($search));
    }
}
?>
