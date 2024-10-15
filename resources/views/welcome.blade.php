<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS, different ni nga directory if laravel-->
    <link rel="stylesheet" href="{{ asset('css/landstyle.css') }}">
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container-fluid">
        <!-- Brand -->
        <a class="navbar-brand logo" href="#"><img class="logo" src="{{ asset('images/logo.png') }}" alt="logo"></a>
        <a class="navbar-brand" href="#">GreenConnect</a>

        <!-- Toggler/collapsible Button for Mobile view -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <!-- Links -->
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">SUBSCRIPTION</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">LOGIN</a>
                </li>
                
            </ul>
        </div>
    </div>
</nav>

<div class="div-1">
    <div class="content">
        <h1 class = "title1"><b>Green Connect</b></h1>
        <h1 class = "title1"><b>Nourish Your Body,</b></h1>
        <h1 class = "title1"><b>Nourished by Earth</b></h1>
        <div style = "height: 3vh;"></div>
        <h4 class = "title2"><b>Discover the taste of plant-based meals at Green Chef, where every meal CONNECTS sustainability and flavor</b></h4>
    </div>
    <div class="image-container">
        <img src="{{ asset('images/PLANT-BASED GOODNESS.png') }}" alt="Earth" class="responsive-image">
    </div>
    
</div>
<!-- 4 boxes-->
<div class="div-2 cta">
    <div class="flex-container">
        <div class="flex-item cta">
        <h3>Weight Loss</h3>
            <p>Achieve your weight loss goals effortlessly with our chef-crafted, nutritionist-approved meal plan subscription, delivering delicious, healthy meals straight to your door</p>
            <p><strong>P3000.00/2 weeks</strong></p>
                <ul>
                    <li><i class="fas fa-check"></i>Free consultation and close monitoring from our Registered Nutritionist Dietitian</li>
                    <li><i class="fas fa-check"></i>Calorie-counted plant-based lunch and dinner from Mondays to Fridays</li>
                    <li><i class="fas fa-check"></i>Meal plan guide for everyday breakfast</li>
                    <li><i class="fas fa-check"></i>Meal plan guide for weekends</li>
                    <li><i class="fas fa-check"></i>Free Delivery within Dumaguete City</li>
                </ul>
                 <button type="submit" class="btn btn-success" style="width: 200px; border-radius: 0; background-color: #52634f;">Inquire Now</button>

        </div>
        <div class="flex-item cta">
        <h3>Weight Gain</h3>
                <p>Indulge in hearty, plant-based dishes packed with protein and nutrients at our restaurant, where every meal is crafted to help you gain weight healthily and deliciously</p>
                <p><strong>P3000.00/2 weeks</strong></p>
                <ul>
                    <li><i class="fas fa-check"></i>Free consultation and close monitoring from our Registered Nutritionist Dietitian</li>
                    <li><i class="fas fa-check"></i>Calorie-counted plant-based lunch and dinner from Mondays to Fridays</li>
                    <li><i class="fas fa-check"></i>Meal plan guide for everyday breakfast</li>
                    <li><i class="fas fa-check"></i>Meal plan guide for weekends</li>
                    <li><i class="fas fa-check"></i>Free Delivery within Dumaguete City</li>
                </ul>
                 <button type="submit" class="btn btn-success" style="width: 200px; border-radius: 0; background-color: #52634f;">Inquire Now</button>

        </div>
    </div>
</div>
<div class="div-2 cta">
    <div class="flex-container">
        <div class="flex-item">
        <h3>Therapeutic Diet</h3>
                <p>Experience the healing power of food with our therapeutic diet, featuring carefully curated meals designed to support your unique health needs and promote overall wellness</p>
                <p><strong>P3500.00/2 weeks</strong></p>
                <ul>
                    <li><i class="fas fa-check"></i>Free consultation and close monitoring from our Registered Nutritionist Dietitian</li>
                    <li><i class="fas fa-check"></i>Calorie-counted plant-based lunch and dinner from Mondays to Fridays</li>
                    <li><i class="fas fa-check"></i>Meal plan guide for everyday breakfast</li>
                    <li><i class="fas fa-check"></i>Meal plan guide for weekends</li>
                    <li><i class="fas fa-check"></i>Free Delivery within Dumaguete City</li>
                </ul>
                 <button type="submit" class="btn btn-success" style="width: 200px; border-radius: 0; background-color: #52634f;">Inquire Now</button>

        </div>
        <div class="flex-item">
        <h3>Gluten Free Diet</h3>
                <p>Savor the freedom of delicious, gluten-free dining with our menu of flavorful, carefully crafted dishes that prioritize taste and your health</p>
                <p><strong>P3500.00/2 weeks</strong></p>
                <ul>
                    <li><i class="fas fa-check"></i>Free consultation and close monitoring from our Registered Nutritionist Dietitian</li>
                    <li><i class="fas fa-check"></i>Calorie-counted plant-based lunch and dinner from Mondays to Fridays</li>
                    <li><i class="fas fa-check"></i>Meal plan guide for everyday breakfast</li>
                    <li><i class="fas fa-check"></i>Meal plan guide for weekends</li>
                    <li><i class="fas fa-check"></i>Free Delivery within Dumaguete City</li>
                </ul>
                 <button type="submit" class="btn btn-success" style="width: 200px; border-radius: 0; background-color: #52634f;">Inquire Now</button>

        </div>
    </div>
</div>

<!--testimonial-->
<div style = "height: 7vh;"></div>
<div class="container">
    <h1 class ="title4"><b>Testimonials</b></h1>
</div>

<div class="div-2">
    <div class="flex-container">
        <div class="flex-item2">
            
            <p>I've tried countless diets, but this subscription has been a game-changer! The meals are not only delicious but perfectly portioned and balanced. I’ve lost 8 pounds in 6 weeks, and I feel more energized than ever. The best part? No more meal prep stress!
                Kenny
                Weight Loss Meal Plan Subscriber</p>
        </div>
        <div class="flex-item2">
            <p>I've tried countless diets, but this subscription has been a game-changer! The meals are not only delicious but perfectly portioned and balanced. I’ve lost 8 pounds in 6 weeks, and I feel more energized than ever. The best part? No more meal prep stress!
                Kenny
                Weight Loss Meal Plan Subscriber</p>
        </div>
        <div class="flex-item2">
            <p>I've tried countless diets, but this subscription has been a game-changer! The meals are not only delicious but perfectly portioned and balanced. I’ve lost 8 pounds in 6 weeks, and I feel more energized than ever. The best part? No more meal prep stress!
                Kenny
                Weight Loss Meal Plan Subscriber</p>
        </div>
    </div>
</div>

<div class="footer">
    <div class="footer-left">
        <div><p class = "f-text">Establishment Name</p></div>
        <div><p class = "f-text">Street Address</p></div>
        <div><p class = "f-text">Email: example@example.com</p></div>
        <div><p class = "f-text">Phone: +123 456 7890</p></div>
    
    </div>
    <div class="footer-right">
        <img src="{{ asset('images/panda.jpg') }}" alt="Image 1">
        <img src="{{ asset('images/grab.jpg') }}" alt="Image 2">
    </div>
</div>
<!-- Bootstrap JS and dependencies (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
