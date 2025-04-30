<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Operator Platform</title>

    <!-- Link to the CSS file -->
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">

    <!-- Inline CSS for Quick Styling -->
    <style>
        body {
        background-image: url('/images/tour-bg.jpg'); /* Make sure this path exists */
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

        h1 {
            text-align: center;
            color: #00796b; /* Green color */
        }

        /* Navbar Styles */
        nav {
            background-color:rgb(82, 139, 132);
            padding: 15px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 10px;
            font-size: 16px;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
            color: #004d40;
        }

        /* Content Section */
        .container {
            width: 80%;
            margin: 20px auto;
            background-color: rgba(255, 255, 255, 0.5);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Footer */
        footer {
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background-color: #00796b;
            color: white;
        }

        <style>
.services {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

.service-box {
    position: relative;
    height: 200px;
    color: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
}

.service-box .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.2); /* Black with 50% opacity */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 20px;
    text-align: center;
}

.btn {
    background-color: #ffffff;
    color: #333;
    padding: 10px 15px;
    text-decoration: none;
    border-radius: 5px;
    margin-top: 10px;
    font-weight: bold;
}

.bg-tour {
    background: url('/images/tour.webp') center/cover no-repeat;
}

.bg-book {
    background: url('/images/book.jpg') center/cover no-repeat;
}

.bg-guide {
    background: url('/images/guide.jpg') center/cover no-repeat;
}

.bg-custom {
    background: url('/images/custom.jpg') center/cover no-repeat;
}

.bg-feedback {
    background: url('/images/feedback.jpg') center/cover no-repeat;
}

.main-heading {
    font-size: 2.5em;
    margin-bottom: 10px;
}

.intro-text {
    font-size: 1.2em;
    margin-bottom: 20px;
}

.section-title {
    font-size: 1.8em;
    margin-bottom: 10px;
}
</style>
    </style>
    <style>
.packages-container {
    max-width: 900px;
    margin: 0 auto;
    background-color: rgba(255, 255, 255, 0.6);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.section-heading {
    text-align: center;
    font-size: 2em;
    color: #333;
    margin-bottom: 20px;
    text-transform: uppercase;
}

.packages-table {
    width: 100%;
    border-collapse: collapse;
    background: white;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
}

.packages-table thead {
    background-color: #008080;
    color: white;
    font-weight: bold;
}

.packages-table th,
.packages-table td {
    padding: 15px;
    text-align: center;
    border-bottom: 1px solid #ddd;
}

.packages-table tbody tr:hover {
    background-color: #f1f1f1;
}
</style>
    

<style>
.package-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

.package-card {
    background-color: rgba(255, 255, 255, 0.6);
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.6);
    overflow: hidden;
    transition: transform 0.3s ease;
}

.package-card:hover {
    transform: translateY(-5px);
}

.package-card img {
    width: 100%;
    height: 180px;
    object-fit: cover;
}

.card-content {
    padding: 15px;
    text-align: center;
}

.card-content h3 {
    margin: 10px 0;
    color: #008080;
}

.card-content p {
    margin: 5px 0;
    color: #444;
}

.btn {
    display: inline-block;
    margin-top: 10px;
    padding: 8px 16px;
    background-color: #008080;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background 0.3s ease;
}

.btn:hover {
    background-color: #006666;
}
</style>
<style>
.booking-container {
    max-width: 600px;
    margin: 30px auto;
    padding: 25px;
    background-color: rgba(255, 255, 255, 0.5);    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.section-heading {
    text-align: center;
    color: #004d4d;
    margin-bottom: 20px;
}

.booking-form {
    display: flex;
    flex-direction: column;
}

.booking-form label {
    margin: 10px 0 5px;
    font-weight: bold;
    color: #333;
}

.booking-form input,
.booking-form select {
    padding: 10px;
    border-radius: 6px;
    border: 1px solid #ccc;
    margin-bottom: 15px;
    font-size: 16px;
}

.booking-form input:focus,
.booking-form select:focus {
    outline: none;
    border-color: #008080;
    box-shadow: 0 0 5px rgba(0, 128, 128, 0.3);
}

.btn {
    background-color: #008080;
    color: white;
    border: none;
    padding: 12px;
    font-size: 16px;
    border-radius: 6px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #006666;
}
</style>

<style>
.guide-assign-container {
    max-width: 600px;
    margin: 30px auto;
    padding: 25px;
    background-color: rgba(255, 255, 255, 0.6);   
     border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.section-heading {
    text-align: center;
    color: #004d4d;
    margin-bottom: 20px;
}

.guide-form {
    display: flex;
    flex-direction: column;
}

.guide-form label {
    margin: 10px 0 5px;
    font-weight: bold;
    color: #333;
}

.guide-form input,
.guide-form select {
    padding: 10px;
    border-radius: 6px;
    border: 1px solid #ccc;
    margin-bottom: 15px;
    font-size: 16px;
}

.guide-form input:focus,
.guide-form select:focus {
    outline: none;
    border-color: #008080;
    box-shadow: 0 0 5px rgba(0, 128, 128, 0.3);
}

.btn {
    background-color: #008080;
    color: white;
    border: none;
    padding: 12px;
    font-size: 16px;
    border-radius: 6px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #006666;
}

</style>

<style>
    .custom-tour-container {
    max-width: 650px;
    margin: 30px auto;
    padding: 25px;
    background-color: rgba(255, 255, 255, 0.6);
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.section-heading {
    text-align: center;
    color: #006666;
    margin-bottom: 20px;
}

.custom-tour-form {
    display: flex;
    flex-direction: column;
}

.custom-tour-form label {
    margin: 10px 0 5px;
    font-weight: bold;
    color: #333;
}

.custom-tour-form input,
.custom-tour-form textarea {
    padding: 10px;
    border-radius: 6px;
    border: 1px solid #ccc;
    margin-bottom: 15px;
    font-size: 16px;
}

.custom-tour-form input:focus,
.custom-tour-form textarea:focus {
    outline: none;
    border-color: #00aaaa;
    box-shadow: 0 0 5px rgba(0, 170, 170, 0.3);
}

.btn {
    background-color: #00aaaa;
    color: white;
    border: none;
    padding: 12px;
    font-size: 16px;
    border-radius: 6px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #007777;
}
    </style>


<style>
    .feedback-container {
    max-width: 600px;
    margin: 30px auto;
    padding: 25px;
    background-color: rgba(255, 255, 255, 0.6);    
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.section-heading {
    text-align: center;
    color: #444;
    margin-bottom: 20px;
    font-size: 24px;
}

.feedback-form {
    display: flex;
    flex-direction: column;
}

.feedback-form label {
    margin: 10px 0 5px;
    font-weight: bold;
    color: #333;
}

.feedback-form input,
.feedback-form textarea {
    padding: 10px;
    border-radius: 6px;
    border: 1px solid #ccc;
    margin-bottom: 15px;
    font-size: 16px;
}

.feedback-form input:focus,
.feedback-form textarea:focus {
    outline: none;
    border-color: #8888ff;
    box-shadow: 0 0 5px rgba(136, 136, 255, 0.3);
}

.btn {
    background-color: #4444cc;
    color: white;
    border: none;
    padding: 12px;
    font-size: 16px;
    border-radius: 6px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #333399;
}
    </style>

    <style>

.dashboard-container {
    max-width: 1000px;
    margin: auto;
    padding: 30px;
    background-color: rgba(255, 255, 255, 0.6);
    border-radius: 12px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
}

.dashboard-title {
    text-align: center;
    color: #333;
    margin-bottom: 30px;
    font-size: 28px;
    font-weight: 600;
}

.data-section {
    margin-bottom: 40px;
}

.data-section h3 {
    font-size: 22px;
    margin-bottom: 15px;
    color: #444;
}

.data-cards {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

.card {
    flex: 1 1 200px;
    background-color: #fff;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    font-size: 15px;
    line-height: 1.5;
    color: #333;
}
        </style>



</head>
<body>

    <!-- Header -->
    <h1>Tour Operator Platform</h1>

    <!-- Navigation Bar -->
    <nav>
        <a href="/">Home</a>
        <a href="/packages">Packages</a>
        <a href="/book">Book</a>
        <a href="/assign-guide">Assign Guide</a>
        <a href="/custom-tour">Customize Tour</a>
        <a href="/feedback">Feedback</a>
        <a href="/admin-dashboard">Admin Dashboard</a>

    </nav>

    <!-- Main Content Area -->
    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Tour Operator Platform. All Rights Reserved.</p>
    </footer>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\tour-operator\resources\views/layout.blade.php ENDPATH**/ ?>