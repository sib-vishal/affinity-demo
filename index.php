<?php $page = 'home'; ?>
<?php
$projects = [
    [
        'image' => 'https://images.pexels.com/photos/2343468/pexels-photo-2343468.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'title' => 'Sunset Over the Ocean',
        'description' => 'A breathtaking view of the sunset over the ocean waves.',
        'useFancyBox' => false,
        'pageUrl' => 'project-details.php',
        'type' => 'other'
    ],
    // [
    //     'image' => 'https://images.pexels.com/photos/2249959/pexels-photo-2249959.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
    //     'title' => 'Mountain Adventure',
    //     'description' => 'Exploring the beautiful mountain ranges and valleys.',
    //     'useFancyBox' => false,
    //     'pageUrl' => 'project-details.php',
    //     'type' => 'other'
    // ],
    // [
    //     'image' => 'https://images.pexels.com/photos/2251247/pexels-photo-2251247.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
    //     'title' => 'City Skyline at Night',
    //     'description' => 'The dazzling city lights against a starry night sky.',
    //     'useFancyBox' => false,
    //     'pageUrl' => 'project-details.php',
    //     'type' => 'other'
    // ],
    // [
    //     'image' => 'https://images.pexels.com/photos/1457842/pexels-photo-1457842.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
    //     'title' => 'Autumn Forest',
    //     'description' => 'A tranquil forest scene showcasing the colors of autumn.',
    //     'useFancyBox' => false,
    //     'pageUrl' => 'project-details.php',
    //     'type' => 'other'
    // ],
    // [
    //     'image' => 'https://images.pexels.com/photos/667838/pexels-photo-667838.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
    //     'title' => 'Desert Dunes',
    //     'description' => 'The serene beauty of rolling sand dunes in the desert.',
    //     'useFancyBox' => false,
    //     'pageUrl' => 'project-details.php',
    //     'type' => 'other'
    // ],
    // [
    //     'image' => 'https://images.pexels.com/photos/1090638/pexels-photo-1090638.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
    //     'title' => 'Snowy Mountains',
    //     'description' => 'Majestic snowy peaks during the winter season.',
    //     'useFancyBox' => false,
    //     'pageUrl' => 'project-details.php',
    //     'type' => 'other'
    // ],
    // [
    //     'image' => 'https://images.pexels.com/photos/1129413/pexels-photo-1129413.jpeg?auto=compress&cs=tinysrgb&w=600',
    //     'title' => 'Beach Paradise',
    //     'description' => 'Relaxing on a pristine beach with crystal-clear water.',
    //     'useFancyBox' => false,
    //     'pageUrl' => 'project-details.php',
    //     'type' => 'other'
    // ],
    // [
    //     'image' => 'https://images.pexels.com/photos/827518/pexels-photo-827518.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
    //     'title' => 'Floral Garden',
    //     'description' => 'A vibrant garden filled with colorful blooming flowers.',
    //     'useFancyBox' => false,
    //     'pageUrl' => 'project-details.php',
    //     'type' => 'other'
    // ],
    // [
    //     'image' => 'https://images.pexels.com/photos/2227832/pexels-photo-2227832.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
    //     'title' => 'Peaceful Lake',
    //     'description' => 'A serene lake reflecting the surrounding nature.',
    //     'useFancyBox' => false,
    //     'pageUrl' => 'project-details.php',
    //     'type' => 'other'
    // ],
    // [
    //     'image' => 'https://images.pexels.com/photos/245208/pexels-photo-245208.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
    //     'title' => 'Rugged Coastline',
    //     'description' => 'The dramatic cliffs and waves crashing on the shore.',
    //     'useFancyBox' => false,
    //     'pageUrl' => 'project-details.php',
    //     'type' => 'other'
    // ],
    // [
    //     'image' => 'https://images.pexels.com/photos/462235/pexels-photo-462235.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
    //     'title' => 'Starry Night Sky',
    //     'description' => 'The beauty of the Milky Way shining bright at night.',
    //     'useFancyBox' => false,
    //     'pageUrl' => 'project-details.php',
    //     'type' => 'other'
    // ],
    // [
    //     'image' => 'https://images.pexels.com/photos/1648776/pexels-photo-1648776.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
    //     'title' => 'Lush Green Fields',
    //     'description' => 'Expansive fields filled with greenery and wildflowers.',
    //     'useFancyBox' => false,
    //     'pageUrl' => 'project-details.php',
    //     'type' => 'other'
    // ],
    // [
    //     'image' => 'https://images.pexels.com/photos/276583/pexels-photo-276583.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
    //     'title' => 'Misty Forest',
    //     'description' => 'A mystical forest enveloped in morning fog.',
    //     'useFancyBox' => false,
    //     'pageUrl' => 'project-details.php',
    //     'type' => 'other'
    // ],
    [
        'image' => 'https://images.pexels.com/photos/1571471/pexels-photo-1571471.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'title' => 'Wildlife Safari',
        'description' => 'Encountering wildlife in their natural habitat.',
        'useFancyBox' => false,
        'pageUrl' => 'project-details.php',
        'type' => 'other'
    ],
    // New projects for bathrooms and kitchens
    [
        'image' => 'https://images.pexels.com/photos/105934/pexels-photo-105934.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'title' => 'Modern Bathroom',
        'description' => 'A sleek and modern bathroom design.',
        'useFancyBox' => false,
        'pageUrl' => 'project-details.php',
        'type' => 'bathroom'
    ],
    [
        'image' => 'https://images.pexels.com/photos/1358900/pexels-photo-1358900.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'title' => 'Cozy Kitchen',
        'description' => 'A cozy kitchen with warm lighting and a rustic feel.',
        'useFancyBox' => false,
        'pageUrl' => 'project-details.php',
        'type' => 'kitchen'
    ],
    [
        'image' => 'https://images.pexels.com/photos/105934/pexels-photo-105934.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'title' => 'Elegant Bathroom',
        'description' => 'An elegant bathroom with luxurious fixtures.',
        'useFancyBox' => false,
        'pageUrl' => 'project-details.php',
        'type' => 'bathroom'
    ],
    [
        'image' => 'https://images.pexels.com/photos/2062426/pexels-photo-2062426.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        'title' => 'Sleek Kitchen',
        'description' => 'A sleek kitchen design with modern appliances.',
        'useFancyBox' => false,
        'pageUrl' => 'project-details.php',
        'type' => 'kitchen'
    ],
];
?>
<?php
$services = [
    [
        'title' => 'KITCHENS',
        'image' => 'https://images.pexels.com/photos/1599791/pexels-photo-1599791.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700&amp;h=500&amp;dpr=1',
        'link' => 'kitchens-details.php',
    ],
    [
        'title' => 'BATHROOM',
        'image' => 'https://images.pexels.com/photos/105934/pexels-photo-105934.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700&amp;h=500&amp;dpr=1',
        'link' => 'bathroom-details.php',
    ],
    [
        'title' => 'Exterior and Interior Remodels',
        'image' => 'https://images.pexels.com/photos/28836085/pexels-photo-28836085/free-photo-of-bright-empty-room-with-wooden-flooring-and-closet.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700&amp;h=500&amp;dpr=1',
        'link' => 'remodels-details.php',
    ],
    [
        'title' => 'BASEMENTS',
        'image' => 'https://images.pexels.com/photos/2635038/pexels-photo-2635038.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700&amp;h=500&amp;dpr=1',
        'link' => 'basements-details.php',
    ],
    [
        'title' => 'BEDROOMS',
        'image' => 'https://images.pexels.com/photos/2635038/pexels-photo-2635038.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700&amp;h=500&amp;dpr=1',
        'link' => 'basements-details.php',
    ],
    [
        'title' => 'DINING ROOMS',
        'image' => 'https://images.pexels.com/photos/2635038/pexels-photo-2635038.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700&amp;h=500&amp;dpr=1',
        'link' => 'basements-details.php',
    ],
    [
        'title' => 'OUTDOOR SPACES',
        'image' => 'https://images.pexels.com/photos/2635038/pexels-photo-2635038.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700&amp;h=500&amp;dpr=1',
        'link' => 'basements-details.php',
    ],
    [
        'title' => 'HOME OFFICES',
        'image' => 'https://images.pexels.com/photos/2635038/pexels-photo-2635038.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700&amp;h=500&amp;dpr=1',
        'link' => 'basements-details.php',
    ],
];



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Affinity Buildersco </title>
    <?php include 'include/head-links.php'; ?>
    <meta property="og:url" content="<?php echo $page_url ?>">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="images/logo.png">
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="<?php echo $page_url ?>">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="images/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body onload="createCaptcha();">
    <div class="wrapper ">
        <?php include 'include/header.php'; ?>
        <div class="banner-wrapper">

            <div class="banner-text d-flex  ">
                <div class="inner_content">
                    <small class="text_third title ">
                        <span class="fontWeight600">Welcome to</span>
                        <span class="fontWeight700 text_primary_light">Affinity Builders</span>
                    </small>
                    <h1 class="fontHeading large_heading text_third mt-5" data-aos="fade-up" data-aos-duration="1000">
                        Transform Your Space: Affordable & Elegant <span
                            class=" fontWeight700 text_primary_light">Design Solutions</span>
                    </h1>

                    <p class="mt-4 text-white" data-aos="fade-up" data-aos-duration="1100">
                        Kitchen & Bath Remodeling | Home Additions | Outdoor Living
                    </p>
                    <div class="mt-5">
                        <a class="btn_3" href="tel:+91-9867508639">
                            <span class=" btn_icon bg-white circle pulse">
                                <i class="fa-solid fa-phone text_third "></i>
                            </span> <span>
                                <p class="btn_letterspacing text_third ">
                                    Contact with us
                                </p>
                                <h4 class="fontWeight700">
                                    +91-9867508639
                                </h4>
                            </span> &nbsp;</a>

                        <!-- <a class="btn fontWeight600 btn_1 " href="#">
                            Explore More <i class="fa-solid fa-arrow-right  ms-1 " style="rotate:-45deg"></i></a>
                        <a class="btn fontWeight600 btn_2 ms-2 " href="#">
                            Explore More <i class="fa-solid fa-arrow-right ms-1 " style="rotate:-45deg"></i></a> -->
                    </div>
                </div>
            </div>
            <div class="experience">
                14+ Years of Excellence
            </div>
        </div>
        <!-- about  -->
        <section>
            <div class="containerFull">
                <div class="row">
                    <div class="col-lg-5 ps-3  aboutLeft">
                        <small class="text_primary title fontWeight700">
                            About Us

                        </small>

                        <h4 class="text_secondary heading fontHeading mt-3 ">
                            Transforming Houses into Homes & Crafting Interiors
                        </h4>
                    </div>
                    <div class="col-lg-7 ">
                        <p class="ps-5 text_secondary">
                            At Affinity Builders, we believe that your home should be a reflection of your unique
                            style and personality. Our mission is to create beautiful, functional, and affordable
                            interior spaces that inspire and uplift. With a passion for design and a commitment to
                            excellence, we take pride in transforming houses into homes.

                            We understand that every detail matters, and we work closely with our clients to ensure
                            their vision is realized. Let us help you create a space that not only looks amazing but
                            also feels like a true sanctuary.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- services -->
        <section class="bg_secondary">
            <div class="containerFull">
                <small class="text_primary_light title fontWeight700">
                    Our Services
                </small>
                <h4 class="text_third heading fontHeading mt-3 ">
                    Explore Our Services: Crafted for You
                </h4>
                <div class="row mt-5">
                    <?php foreach ($services as $service): ?>
                        <div class="col-lg-3">
                            <div>
                                <div class="services_item">
                                    <div class="imgStyles">
                                        <a href="<?php echo $service['link']; ?>">
                                            <picture>
                                                <source srcset="<?php echo $service['image']; ?>" type="image/webp">
                                                <img src="<?php echo $service['image']; ?>" alt="">
                                            </picture>
                                        </a>
                                    </div>
                                    <div class="text-center py-3 w-100 position-absolute bottom-0 z-2 heading_box">
                                        <h3 class="title fontHeading fontWeight600 text-center">
                                            <a class="text-white"
                                                href="<?php echo $service['link']; ?>"><?php echo $service['title']; ?></a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- why choose us -->

        <section class="bg_third">
            <div class="containerFull">

                <div class="row ">
                    <div class="col-lg-6">
                        <div class="why_choose_video  pe-4">
                            <video autoplay loop muted>
                                <source src="images/banner/banner.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <div class="video_content">
                                <!-- <div class="play_icon">
                                    <i class="fa-solid fa-play yiyle"></i>

                                </div> -->
                                <small class="text_primary_light title fontWeight700">
                                    An Intro About
                                </small>
                                <h4 class=" mt-2 heading text_third">
                                    Why Choose Us
                                </h4>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="why_choose">
                            <small class="text_primary_light title fontWeight700">
                                Why Choose Us
                            </small>
                            <h4 class=" heading fontHeading mt-3 text_secondary ">
                                Best Way To Design Your Home,Office,Etc.
                            </h4>
                            <p class="mt-4 text_secondary">
                                Magna inceptos purus tempor cursus pulvinar magnis libero eu. Conubia orci vulputate
                                neque fermentum ultricies penatibus.Laoreet aptent arcu maximus curabitur non. Conubia
                                orci vulputate inceptos purus tempor cursus pulvinar
                            </p>

                            <ul class="list_items_main mt-4">
                                <li class="list_items">
                                    <span class="list_icon">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;"
                                            xml:space="preserve">
                                            <path
                                                d="M43.7,7.6c0,0.3-0.1,0.5-0.2,0.7l-1-1l-1,1c-0.1-0.2-0.2-0.4-0.2-0.7c0-0.7,0.5-1.2,1.2-1.2C43.1,6.3,43.7,6.9,43.7,7.6z">
                                            </path>
                                            <path
                                                d="M42.4,7.2l1,1c-0.2,0.3-0.6,0.5-1,0.5c-0.4,0-0.8-0.2-1-0.5L42.4,7.2z">
                                            </path>
                                            <path
                                                d="M46.8,12.3c-0.2,0-0.3-0.1-0.5-0.2L43,8.7c-0.3-0.3-0.3-0.7,0-0.9c0.3-0.3,0.7-0.3,0.9,0l3.4,3.4c0.3,0.3,0.3,0.7,0,0.9 C47.2,12.2,47,12.3,46.8,12.3z">
                                            </path>
                                            <path
                                                d="M38,12.3c-0.2,0-0.3-0.1-0.5-0.2c-0.3-0.3-0.3-0.7,0-0.9L41,7.8c0.3-0.3,0.7-0.3,0.9,0c0.3,0.3,0.3,0.7,0,0.9l-3.4,3.4 C38.4,12.2,38.2,12.3,38,12.3z">
                                            </path>
                                            <path
                                                d="M49.3,21.4H35.5c-0.4,0-0.7-0.3-0.7-0.7v-9.1c0-0.4,0.3-0.7,0.7-0.7h13.8c0.4,0,0.7,0.3,0.7,0.7v9.1 C50,21.1,49.7,21.4,49.3,21.4z M36.2,20.1h12.5v-7.8H36.2V20.1z">
                                            </path>
                                            <path
                                                d="M44.4,43.7H0.7C0.3,43.7,0,43.4,0,43s0.3-0.7,0.7-0.7h43.8c0.4,0,0.7,0.3,0.7,0.7S44.8,43.7,44.4,43.7z">
                                            </path>
                                            <path
                                                d="M36.8,43.7c-0.4,0-0.7-0.3-0.7-0.7v-3.6h-4.4c-0.4,0-0.7-0.3-0.7-0.7v-2.9h-4.4c-0.4,0-0.7-0.3-0.7-0.7v-2.9h-4.4 c-0.4,0-0.7-0.3-0.7-0.7v-2.9h-4.4c-0.4,0-0.7-0.3-0.7-0.7v-2.9h-4.4c-0.4,0-0.7-0.3-0.7-0.7v-2.9H2.9c-0.4,0-0.7-0.3-0.7-0.7 c0-0.4,0.3-0.7,0.7-0.7h8.8c0.4,0,0.7,0.3,0.7,0.7v2.9h4.4c0.4,0,0.7,0.3,0.7,0.7v2.9h4.4c0.4,0,0.7,0.3,0.7,0.7V31h4.4 c0.4,0,0.7,0.3,0.7,0.7v2.9h4.4c0.4,0,0.7,0.3,0.7,0.7v2.9h4.4c0.4,0,0.7,0.3,0.7,0.7V43C37.5,43.4,37.2,43.7,36.8,43.7z">
                                            </path>
                                            <path
                                                d="M35.5,39.5c-0.4,0-0.7-0.3-0.7-0.7V27.5c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7v11.3C36.1,39.2,35.8,39.5,35.5,39.5z">
                                            </path>
                                            <path
                                                d="M38.6,32.7c-0.4,0-0.7-0.3-0.7-0.7v-1.5c0-0.2-0.1-0.4-0.3-0.6L10.6,10.7c-0.1-0.1-0.3-0.2-0.5-0.2 c-0.2-0.1-0.4-0.1-0.6-0.1H2.9c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7h6.7c0.3,0,0.7,0.1,1,0.2c0.3,0.1,0.6,0.2,0.8,0.4l27.1,19.2 c0.5,0.4,0.8,1,0.8,1.6V32C39.3,32.4,39,32.7,38.6,32.7z">
                                            </path>
                                            <path
                                                d="M10.4,21.7c-0.4,0-0.7-0.3-0.7-0.7V9.9c0-0.4,0.3-0.7,0.7-0.7S11,9.5,11,9.9V21C11,21.4,10.7,21.7,10.4,21.7z">
                                            </path>
                                            <path
                                                d="M5.4,21.7c-0.4,0-0.7-0.3-0.7-0.7V9.9c0-0.4,0.3-0.7,0.7-0.7S6,9.5,6,9.9V21C6,21.4,5.7,21.7,5.4,21.7z">
                                            </path>
                                            <path
                                                d="M15.4,25.2c-0.4,0-0.7-0.3-0.7-0.7V13.3c0-0.4,0.3-0.7,0.7-0.7S16,13,16,13.3v11.3C16,24.9,15.7,25.2,15.4,25.2z">
                                            </path>
                                            <path
                                                d="M20.4,28.8c-0.4,0-0.7-0.3-0.7-0.7V16.9c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7v11.3C21,28.5,20.8,28.8,20.4,28.8z">
                                            </path>
                                            <path
                                                d="M25.4,32.3c-0.4,0-0.7-0.3-0.7-0.7V20.4c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7v11.3C26.1,32.1,25.8,32.3,25.4,32.3z">
                                            </path>
                                            <path
                                                d="M30.4,35.9c-0.4,0-0.7-0.3-0.7-0.7V24c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7v11.3C31.1,35.6,30.8,35.9,30.4,35.9z">
                                            </path>
                                            <path
                                                d="M39.6,21c-0.1,0-0.1,0-0.2,0c-0.3-0.1-0.5-0.5-0.4-0.8c0.1-0.3,0.1-0.7-0.1-1c-0.2-0.3-0.5-0.6-0.8-0.7l-0.1,0 c-0.2,0-0.4-0.1-0.6-0.3c-0.4-0.3-0.6-0.9-0.5-1.4c0.1-0.4,0.4-0.8,0.6-1c0.4-0.5,0.9-0.9,1.5-1.2c0.3-0.2,0.7-0.1,0.9,0.3 c0.2,0.3,0.1,0.7-0.3,0.9c-0.4,0.2-0.8,0.5-1.1,0.9c-0.1,0.1-0.2,0.3-0.3,0.4c0,0,0,0.1,0,0.1c0,0,0.1,0,0.1,0l0.1,0 c0.7,0.2,1.3,0.7,1.6,1.3c0.3,0.6,0.4,1.4,0.2,2C40.1,20.9,39.9,21,39.6,21z">
                                            </path>
                                            <path
                                                d="M45.8,17.9c-0.6,0-1.1-0.1-1.6-0.4c-0.3-0.2-0.5-0.5-0.3-0.9c0.2-0.3,0.5-0.5,0.9-0.3c0.6,0.3,1.4,0.4,1.8,0 c0.4-0.3,0.9-0.5,1.4-0.6c0.5-0.1,0.9-0.1,1.3,0c0.4,0,0.6,0.3,0.6,0.7c0,0.4-0.3,0.7-0.7,0.6c-0.4,0-0.8,0-1.1,0 c-0.3,0.1-0.6,0.2-0.8,0.3C46.9,17.8,46.3,17.9,45.8,17.9z">
                                            </path>
                                            <path
                                                d="M37.9,16.9c-0.2,0-0.4-0.1-0.5-0.3c-0.4-0.5-1-0.9-1.6-1c-0.4-0.1-0.6-0.4-0.5-0.7c0.1-0.4,0.4-0.6,0.7-0.5 c1,0.2,1.9,0.7,2.4,1.5c0.2,0.3,0.2,0.7-0.1,0.9C38.2,16.8,38.1,16.9,37.9,16.9z">
                                            </path>
                                            <path
                                                d="M40.8,16.8c-1.1,0-1.8-0.8-1.8-2.1c0-1.2,1.3-2.1,2.5-2.1c1.1,0,1.8,0.8,1.8,2.1C43.2,15.8,41.9,16.8,40.8,16.8z M41.4,13.8 c-0.5,0-1.2,0.5-1.2,0.8c0,0.8,0.4,0.8,0.5,0.8c0.5,0,1.2-0.5,1.2-0.8C41.9,13.8,41.5,13.8,41.4,13.8z">
                                            </path>
                                            <path
                                                d="M8.5,33.6c-0.3,0-0.6-0.3-0.6-0.6c-0.1-0.9,0-1.8,0.2-2.8H6.2c0.2,0.9,0.2,1.9,0.2,2.8c0,0.4-0.4,0.6-0.7,0.6 c-0.4,0-0.6-0.3-0.6-0.7c0.1-1.1,0-2.2-0.3-3.2c-0.1-0.2,0-0.4,0.1-0.6s0.3-0.3,0.5-0.3h3.4c0.2,0,0.4,0.1,0.5,0.3 c0.1,0.2,0.2,0.4,0.1,0.6c-0.3,1.1-0.4,2.2-0.3,3.2C9.1,33.3,8.9,33.6,8.5,33.6C8.5,33.6,8.5,33.6,8.5,33.6z">
                                            </path>
                                            <path
                                                d="M6.5,30.2c-0.1,0-0.1,0-0.2,0C6,30,5.8,29.7,5.9,29.4C5.9,29.2,6,29.1,6,29c0-0.2,0-0.7-1.1-1.4c-0.3-0.2-0.4-0.6-0.2-0.9 c0.2-0.3,0.6-0.4,0.9-0.2c0.3,0.2,0.5,0.4,0.7,0.5c0-0.9-0.2-1.7-0.6-2.4c-0.2-0.3-0.1-0.7,0.2-0.9c0.3-0.2,0.7-0.1,0.9,0.2 c0.9,1.5,1,3.2,0.4,5.4c0,0.2-0.1,0.3-0.2,0.5C7,30,6.8,30.2,6.5,30.2z">
                                            </path>
                                            <path
                                                d="M7.7,30.2c-0.4,0-0.6-0.3-0.7-0.6c0-2.1,0.5-3.6,1.5-4.4C8.9,25,9.3,25,9.5,25.3c0.2,0.3,0.2,0.7-0.1,0.9 c-0.7,0.5-1,1.6-1,3.3C8.3,29.9,8,30.2,7.7,30.2C7.7,30.2,7.7,30.2,7.7,30.2z">
                                            </path>
                                            <path
                                                d="M17.4,38.5c-0.4,0-0.7-0.3-0.7-0.7v-4.3H4.1v4.3c0,0.4-0.3,0.7-0.7,0.7s-0.7-0.3-0.7-0.7V33c0-0.4,0.3-0.7,0.7-0.7h13.9 c0.4,0,0.7,0.3,0.7,0.7v4.9C18,38.3,17.7,38.5,17.4,38.5z">
                                            </path>
                                            <path
                                                d="M11.3,36.1H9.6c-0.4,0-0.7-0.3-0.7-0.7c0-0.4,0.3-0.7,0.7-0.7h1.7c0.4,0,0.7,0.3,0.7,0.7C11.9,35.8,11.6,36.1,11.3,36.1z">
                                            </path>
                                            <path
                                                d="M17.4,43.5H3.5c-0.4,0-0.7-0.3-0.7-0.7v-4.9c0-0.4,0.3-0.7,0.7-0.7h13.9c0.4,0,0.7,0.3,0.7,0.7v4.9 C18,43.2,17.7,43.5,17.4,43.5z M4.1,42.2h12.6v-3.6H4.1V42.2z">
                                            </path>
                                            <path
                                                d="M11.3,41H9.6c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7h1.7c0.4,0,0.7,0.3,0.7,0.7S11.6,41,11.3,41z">
                                            </path>
                                            <path
                                                d="M43.6,21.2c-0.3,0-0.5-0.2-0.6-0.5c-0.3-0.8-0.5-1.7-0.7-2.5c0-0.1-0.1-0.5,0.1-0.8c0.2-0.3,0.4-0.4,0.5-0.4 c0.5-0.2,0.8-0.4,1.1-0.6c0.1-0.1,0.2-0.2,0.2-0.2c0.4-0.5,0.6-1.3,0.4-2c-0.2-0.7-0.6-1.4-1.2-2.1c-0.2-0.3-0.2-0.7,0-0.9 c0.3-0.2,0.7-0.2,0.9,0c0.8,0.8,1.3,1.7,1.5,2.6c0.3,1.2,0,2.3-0.6,3.2c-0.1,0.1-0.2,0.3-0.4,0.4c-0.3,0.3-0.7,0.5-1.2,0.8 c0.2,0.7,0.4,1.5,0.6,2.2c0.1,0.3-0.1,0.7-0.4,0.8C43.8,21.2,43.7,21.2,43.6,21.2z">
                                            </path>
                                        </svg> </span>
                                    <span class="list_title">Planning</span>
                                </li>
                                <li class="list_items">
                                    <span class="list_icon">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;"
                                            xml:space="preserve">
                                            <path
                                                d="M18.4,27.3c0.4,0,0.8,0.3,0.8,0.8c0,0.4-0.3,0.8-0.8,0.8c-0.4,0-0.8-0.3-0.8-0.8C17.6,27.6,18,27.3,18.4,27.3z">
                                            </path>
                                            <path
                                                d="M7.8,27.4c0.4,0,0.7,0.3,0.7,0.7c0,0.3-0.2,0.5-0.4,0.6H7.6c-0.2-0.1-0.4-0.3-0.4-0.6C7.2,27.7,7.5,27.4,7.8,27.4z">
                                            </path>
                                            <path d="M7.6,28.6h0.5c-0.1,0-0.2,0-0.2,0C7.8,28.7,7.7,28.7,7.6,28.6z">
                                            </path>
                                            <path
                                                d="M13.5,45.9H0.7c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7h12.9c0.4,0,0.7,0.3,0.7,0.7S13.9,45.9,13.5,45.9z">
                                            </path>
                                            <path
                                                d="M49.3,45.9H36.5c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7h12.9c0.4,0,0.7,0.3,0.7,0.7S49.7,45.9,49.3,45.9z">
                                            </path>
                                            <path
                                                d="M16.2,45.9h-2.7c-0.4,0-0.7-0.3-0.7-0.7V2.5c0-0.4,0.3-0.7,0.7-0.7h2.7c0.4,0,0.7,0.3,0.7,0.7s-0.3,0.7-0.7,0.7h-2v41.5h2 c0.4,0,0.7,0.3,0.7,0.7C16.9,45.6,16.6,45.9,16.2,45.9z">
                                            </path>
                                            <path
                                                d="M36.5,45.9h-2.7c-0.4,0-0.7-0.3-0.7-0.7c0-0.4,0.3-0.7,0.7-0.7h2.1V3.1h-12c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7h12.7 c0.4,0,0.7,0.3,0.7,0.7v42.8C37.1,45.6,36.8,45.9,36.5,45.9z">
                                            </path>
                                            <path
                                                d="M16.2,49.9c-0.1,0-0.3,0-0.4-0.1c-0.2-0.1-0.2-0.3-0.2-0.5V0.8c0-0.2,0.1-0.4,0.2-0.5c0.2-0.1,0.4-0.2,0.6-0.1l17.5,4 c0.3,0.1,0.5,0.3,0.5,0.6v40.5c0,0.3-0.2,0.6-0.5,0.6l-17.5,4C16.3,49.9,16.3,49.9,16.2,49.9z M16.9,1.6v46.8l16.2-3.7V5.3L16.9,1.6 z M33.7,45.3L33.7,45.3L33.7,45.3z">
                                            </path>
                                            <path
                                                d="M18.3,26.7c-0.4,0-0.7-0.3-0.7-0.6c0-0.4,0.3-0.7,0.6-0.7l3.4-0.1c0.4,0,0.7,0.3,0.7,0.6c0,0.4-0.3,0.7-0.6,0.7L18.3,26.7 C18.3,26.7,18.3,26.7,18.3,26.7z">
                                            </path>
                                            <path
                                                d="M20,24.4c-0.2,0-0.3-0.1-0.5-0.2c-0.1-0.1-0.2-0.3-0.2-0.5V6c0-0.2,0.1-0.4,0.2-0.5c0.2-0.1,0.4-0.2,0.6-0.1l10,2.3 c0.3,0.1,0.5,0.3,0.5,0.6v15.1c0,0.4-0.3,0.6-0.6,0.7L20,24.4C20,24.4,20,24.4,20,24.4z M29.9,23.4L29.9,23.4L29.9,23.4z M20.6,6.9 v16.2l8.6-0.3V8.8L20.6,6.9z">
                                            </path>
                                            <path
                                                d="M20,44.9c-0.1,0-0.3,0-0.4-0.1c-0.2-0.1-0.2-0.3-0.2-0.5V29.7c0-0.3,0.3-0.6,0.6-0.7l10-0.7c0.2,0,0.4,0,0.5,0.2 c0.1,0.1,0.2,0.3,0.2,0.5V42c0,0.3-0.2,0.6-0.5,0.6l-10,2.3C20.1,44.9,20,44.9,20,44.9z M20.6,30.3v13.2l8.6-2V29.7L20.6,30.3z">
                                            </path>
                                            <path
                                                d="M9,29.3h-1c-0.1,0-0.2,0-0.2,0c-0.1,0-0.2,0-0.2,0h-1c-0.8,0-1.4-0.6-1.4-1.4v-3.1c0-0.4,0.3-0.7,0.7-0.7h3.9 c0.4,0,0.7,0.3,0.7,0.7v3.1C10.4,28.7,9.8,29.3,9,29.3z M6.6,25.4v2.5c0,0,0,0.1,0.1,0.1h1c0.1,0,0.2,0,0.2,0c0.1,0,0.2,0,0.2,0h1 c0,0,0.1,0,0.1-0.1v-2.5H6.6z">
                                            </path>
                                        </svg> </span>
                                    <span class="list_title">Consultation</span>
                                </li>
                                <li class="list_items">
                                    <span class="list_icon">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;"
                                            xml:space="preserve">
                                            <path
                                                d="M41,26.2c-0.2,0-0.3-0.1-0.5-0.2c-0.3-0.3-0.3-0.7,0-0.9l1-1L30.7,13.2l-1,1c-0.3,0.3-0.7,0.3-0.9,0c-0.3-0.3-0.3-0.7,0-0.9 l1.4-1.4c0.1-0.1,0.3-0.2,0.5-0.2c0.2,0,0.3,0.1,0.5,0.2l11.7,11.8c0.3,0.3,0.3,0.7,0,0.9L41.5,26C41.4,26.1,41.2,26.2,41,26.2z">
                                            </path>
                                            <path
                                                d="M7,24C7,24,7,24,7,24c-0.4,0-0.7-0.3-0.7-0.7l0.2-10.3c0-0.4,0.3-0.6,0.7-0.6H11c0.4,0,0.6,0.3,0.7,0.6l0.2,6.2 c0,0.4-0.3,0.7-0.6,0.7c-0.4,0-0.7-0.3-0.7-0.6l-0.2-5.6H7.9l-0.2,9.6C7.7,23.7,7.4,24,7,24z">
                                            </path>
                                            <path
                                                d="M6.2,48.5c-0.4,0-0.7-0.3-0.7-0.7V29.5c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7v18.4C6.9,48.3,6.6,48.5,6.2,48.5z">
                                            </path>
                                            <path
                                                d="M40,48.5c-0.4,0-0.7-0.3-0.7-0.7V29.5c0-0.4,0.3-0.7,0.7-0.7s0.7,0.3,0.7,0.7v18.4C40.6,48.3,40.3,48.5,40,48.5z">
                                            </path>
                                            <path
                                                d="M2.6,33.5C2.6,33.5,2.6,33.5,2.6,33.5c-0.7,0-1.3-0.3-1.8-0.8C0.3,32.2,0,31.6,0,30.9c0-0.7,0.3-1.3,0.8-1.8L22.6,6.9 c0.2-0.3,0.7-0.3,0.9,0l6.2,6.3l0,0l15.7,15.9c0.5,0.5,0.8,1.1,0.8,1.8c0,0.7-0.3,1.3-0.8,1.8c-0.2,0.2-0.5,0.4-0.8,0.6 c-0.3,0.1-0.7,0.2-1,0.2c-0.2,0-0.3-0.1-0.5-0.2l-20-20l-20,20C2.9,33.4,2.8,33.5,2.6,33.5z M23.1,8.3L1.7,30 c-0.2,0.2-0.4,0.6-0.4,0.9c0,0.3,0.1,0.7,0.4,0.9c0.2,0.2,0.4,0.3,0.6,0.3l20.3-20.2c0.3-0.3,0.7-0.3,0.9,0l20.3,20.2 c0.1,0,0.2,0,0.2-0.1c0.2-0.1,0.3-0.2,0.4-0.3c0.2-0.2,0.4-0.6,0.4-0.9c0-0.3-0.1-0.7-0.4-0.9L23.1,8.3z">
                                            </path>
                                            <path
                                                d="M43.7,48.5H2.5c-0.4,0-0.7-0.3-0.7-0.7c0-0.4,0.3-0.7,0.7-0.7h41.2c0.4,0,0.7,0.3,0.7,0.7C44.4,48.3,44.1,48.5,43.7,48.5z">
                                            </path>
                                            <path
                                                d="M23.1,19.1c-0.4,0-0.7-0.3-0.7-0.7v-6.1c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7v6.1C23.8,18.8,23.5,19.1,23.1,19.1z">
                                            </path>
                                            <path
                                                d="M25.9,21.9h-5.7c-0.4,0-0.7-0.3-0.7-0.7c0-1.9,1.6-3.5,3.5-3.5s3.5,1.6,3.5,3.5C26.6,21.6,26.3,21.9,25.9,21.9z M21,20.6 h4.1c-0.3-0.9-1.1-1.5-2.1-1.5C22.1,19.1,21.3,19.7,21,20.6z">
                                            </path>
                                            <path
                                                d="M23.1,24.8c-0.4,0-0.7-0.3-0.7-0.7v-1.1c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7v1.1C23.8,24.5,23.5,24.8,23.1,24.8z">
                                            </path>
                                            <path
                                                d="M25.4,24.6c-0.3,0-0.5-0.2-0.6-0.5L24.5,23c-0.1-0.3,0.1-0.7,0.4-0.8c0.3-0.1,0.7,0.1,0.8,0.4l0.3,1.1 c0.1,0.3-0.1,0.7-0.4,0.8C25.5,24.6,25.5,24.6,25.4,24.6z">
                                            </path>
                                            <path
                                                d="M20.8,24.6c-0.1,0-0.1,0-0.2,0c-0.3-0.1-0.5-0.5-0.4-0.8l0.3-1.1c0.1-0.4,0.5-0.6,0.8-0.4c0.3,0.1,0.5,0.5,0.4,0.8l-0.3,1.1 C21.3,24.4,21.1,24.6,20.8,24.6z">
                                            </path>
                                            <path
                                                d="M14.8,37.6C14.8,37.6,14.8,37.6,14.8,37.6c-0.4,0-0.7-0.4-0.7-0.7l0.2-2.3c0.1-1.2,1.2-2.1,2.6-2.1h6.1 c0.4,0,0.7,0.3,0.7,0.7c0,0.4-0.3,0.7-0.7,0.7H17c-0.7,0-1.3,0.4-1.3,0.9L15.5,37C15.5,37.3,15.2,37.6,14.8,37.6z">
                                            </path>
                                            <path
                                                d="M23.1,41.8c-0.4,0-0.7-0.3-0.7-0.7v-8.1c0-0.4,0.3-0.7,0.7-0.7h6.1c1.4,0,2.5,0.9,2.6,2.1l0.2,2.3c0,0.4-0.2,0.7-0.6,0.7 c-0.4,0-0.7-0.2-0.7-0.6l-0.2-2.3c0-0.5-0.6-0.9-1.3-0.9h-5.4v7.4C23.8,41.5,23.5,41.8,23.1,41.8z">
                                            </path>
                                            <path
                                                d="M32,47.9h-1.7c-0.5,0-0.9-0.3-1.1-0.8L29,46.4c-0.1-0.3-0.4-0.5-0.7-0.5H17.9c-0.3,0-0.5,0.2-0.6,0.5l-0.3,0.8 c-0.1,0.4-0.6,0.7-1,0.7h-1.7c-0.6,0-1.1-0.5-1.1-1.1v-4.6c-0.9-0.2-1.9-0.8-2.1-2.3c-0.1-0.6-0.3-2.5,1.5-3.3 c0.6-0.3,1.6-0.4,2.5-0.3c1.7,0.2,1.9,1.1,1.9,1.5v2.7h12.6v-2.7c0-0.4,0.2-1.2,1.9-1.5c0.9-0.1,1.9,0,2.5,0.3 c1.8,0.8,1.6,2.7,1.5,3.3c-0.2,1.5-1.3,2.1-2.1,2.3v4.6C33.2,47.4,32.7,47.9,32,47.9z M15.7,46.7C15.6,46.7,15.6,46.7,15.7,46.7 L15.7,46.7z M30.5,46.7L30.5,46.7C30.5,46.7,30.5,46.7,30.5,46.7z M30.5,46.6h1.3v-5c0-0.2,0.1-0.4,0.2-0.5c0.1-0.1,0.3-0.2,0.5-0.2 c0.2,0,1.3,0,1.4-1.2c0.2-1.3-0.2-1.7-0.7-2c-0.4-0.2-1.2-0.2-1.8-0.2c-0.5,0.1-0.7,0.2-0.8,0.3l0,3.3c0,0.4-0.3,0.7-0.7,0.7H16.2 c-0.4,0-0.7-0.3-0.7-0.7v-3.4c0,0-0.2-0.1-0.8-0.2c-0.6-0.1-1.4,0-1.8,0.2c-0.6,0.3-0.9,0.7-0.7,2c0.2,1.2,1.2,1.2,1.4,1.2 c0.2,0,0.4,0.1,0.5,0.2c0.1,0.1,0.2,0.3,0.2,0.5v5h1.3l0.3-0.7c0.2-0.8,1-1.3,1.9-1.3h10.5c0.9,0,1.6,0.6,1.9,1.4L30.5,46.6z">
                                            </path>
                                            <path
                                                d="M42.4,12.7c-0.7,0-1.4-0.2-2-0.6c-0.8-0.5-1.4-1.4-1.6-2.4c-0.2-1,0-2,0.5-2.8c0.5-0.8,1.4-1.4,2.4-1.6c2-0.4,4,0.8,4.4,2.9 l0,0c0.2,1,0,2-0.5,2.8c-0.5,0.8-1.4,1.4-2.4,1.6C43,12.7,42.7,12.7,42.4,12.7z M42.5,6.6c-0.2,0-0.3,0-0.5,0.1 c-0.6,0.1-1.2,0.5-1.5,1.1c-0.4,0.5-0.5,1.2-0.3,1.8c0.1,0.6,0.5,1.2,1.1,1.5c0.5,0.4,1.2,0.5,1.8,0.3c0.6-0.1,1.2-0.5,1.5-1.1 c0.4-0.5,0.5-1.2,0.3-1.8c0,0,0,0,0,0c-0.1-0.6-0.5-1.2-1.1-1.5C43.4,6.7,42.9,6.6,42.5,6.6z">
                                            </path>
                                            <path
                                                d="M41.4,4.7c-0.3,0-0.6-0.2-0.6-0.5l-0.4-1.9c-0.1-0.4,0.2-0.7,0.5-0.8c0.4-0.1,0.7,0.2,0.8,0.5L42,3.9 c0.1,0.4-0.2,0.7-0.5,0.8C41.5,4.7,41.4,4.7,41.4,4.7z">
                                            </path>
                                            <path
                                                d="M35.6,11.1c-0.3,0-0.6-0.2-0.6-0.5c-0.1-0.4,0.1-0.7,0.5-0.8l1.9-0.4c0.4-0.1,0.7,0.1,0.8,0.5c0.1,0.4-0.1,0.7-0.5,0.8 l-1.9,0.4C35.7,11.1,35.6,11.1,35.6,11.1z">
                                            </path>
                                            <path
                                                d="M43.9,16.5c-0.3,0-0.6-0.2-0.6-0.5l-0.4-1.9c-0.1-0.4,0.1-0.7,0.5-0.8c0.4-0.1,0.7,0.1,0.8,0.5l0.4,1.9 c0.1,0.4-0.1,0.7-0.5,0.8C44,16.5,44,16.5,43.9,16.5z">
                                            </path>
                                            <path
                                                d="M47.4,8.6c-0.3,0-0.6-0.2-0.6-0.5c-0.1-0.4,0.1-0.7,0.5-0.8l1.9-0.4C49.6,6.8,49.9,7,50,7.4c0.1,0.4-0.1,0.7-0.5,0.8 l-1.9,0.4C47.5,8.6,47.5,8.6,47.4,8.6z">
                                            </path>
                                            <path
                                                d="M38.2,6.9c-0.1,0-0.2,0-0.4-0.1l-1-0.7c-0.3-0.2-0.4-0.6-0.2-0.9c0.2-0.3,0.6-0.4,0.9-0.2l1,0.7c0.3,0.2,0.4,0.6,0.2,0.9 C38.6,6.8,38.4,6.9,38.2,6.9z">
                                            </path>
                                            <path
                                                d="M39,15c-0.1,0-0.2,0-0.4-0.1c-0.3-0.2-0.4-0.6-0.2-0.9l0.7-1c0.2-0.3,0.6-0.4,0.9-0.2c0.3,0.2,0.4,0.6,0.2,0.9l-0.7,1 C39.4,14.9,39.2,15,39,15z">
                                            </path>
                                            <path
                                                d="M47.8,13.1c-0.1,0-0.2,0-0.4-0.1l-1-0.7c-0.3-0.2-0.4-0.6-0.2-0.9c0.2-0.3,0.6-0.4,0.9-0.2l1,0.7c0.3,0.2,0.4,0.6,0.2,0.9 C48.2,13,48,13.1,47.8,13.1z">
                                            </path>
                                            <path
                                                d="M45.2,5.4c-0.1,0-0.2,0-0.4-0.1c-0.3-0.2-0.4-0.6-0.2-0.9l0.7-1c0.2-0.3,0.6-0.4,0.9-0.2c0.3,0.2,0.4,0.6,0.2,0.9l-0.7,1 C45.7,5.3,45.4,5.4,45.2,5.4z">
                                            </path>
                                        </svg> </span>
                                    <span class="list_title">Woodwork</span>
                                </li>
                                <li class="list_items">
                                    <span class="list_icon">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;"
                                            xml:space="preserve">
                                            <path
                                                d="M13.3,50H8c-0.2,0-0.4-0.1-0.6-0.2c-0.1-0.2-0.2-0.4-0.2-0.6c0.2-2.2-0.1-4.3-0.6-6.4c-0.1-0.2,0-0.5,0.1-0.7 c0.1-0.2,0.4-0.3,0.6-0.3H14c0.2,0,0.5,0.1,0.6,0.3c0.1,0.2,0.2,0.4,0.1,0.7c-0.6,2.3-0.8,4.4-0.6,6.4c0,0.2-0.1,0.4-0.2,0.6 C13.7,49.9,13.5,50,13.3,50z M8.8,48.5h3.7c-0.1-1.6,0.1-3.3,0.5-5.1H8.3C8.7,45.1,8.9,46.8,8.8,48.5z">
                                            </path>
                                            <path
                                                d="M8.9,43.4c-0.1,0-0.1,0-0.2,0c-0.4-0.1-0.6-0.5-0.5-0.9c0.7-3.8,0.3-6.5-1.1-8.6c-0.2-0.3-0.1-0.8,0.2-1 c0.3-0.2,0.8-0.1,1,0.2c1.6,2.4,2.1,5.6,1.3,9.7c0,0,0,0.1,0,0.1C9.5,43.2,9.2,43.4,8.9,43.4z M8.9,42.6L8.9,42.6L8.9,42.6z">
                                            </path>
                                            <path
                                                d="M11,42.9C11,42.9,10.9,42.9,11,42.9c-0.4,0-0.7-0.3-0.8-0.6c0-0.1-0.3-2,0.7-3.6c1.1-1.7,3.7-1.9,3.8-1.9 c0.2,0,0.4,0.1,0.6,0.2c0.2,0.1,0.2,0.4,0.2,0.6C15.4,41.9,13,42.9,11,42.9z M14,38.4c-0.6,0.2-1.4,0.5-1.8,1.1 c-0.4,0.7-0.5,1.4-0.6,1.9C12.7,41.2,13.7,40.5,14,38.4z">
                                            </path>
                                            <path
                                                d="M28.8,46.9c-0.4,0-0.8-0.3-0.8-0.8V34.6c0-0.4,0.3-0.8,0.8-0.8c0.4,0,0.8,0.3,0.8,0.8v11.5C29.6,46.6,29.2,46.9,28.8,46.9z">
                                            </path>
                                            <path
                                                d="M26.5,46.9c-0.4,0-0.8-0.3-0.8-0.8V34.6c0-0.4,0.3-0.8,0.8-0.8c0.4,0,0.8,0.3,0.8,0.8v11.5C27.3,46.6,26.9,46.9,26.5,46.9z">
                                            </path>
                                            <path
                                                d="M36.2,35.4H19.2c-0.2,0-0.4-0.1-0.5-0.2c-0.1-0.1-0.2-0.3-0.2-0.5l0.8-33.9c0-0.4,0.3-0.7,0.8-0.7h15.2 c0.4,0,0.7,0.3,0.8,0.7l0.8,33.9c0,0.2-0.1,0.4-0.2,0.5C36.5,35.3,36.4,35.4,36.2,35.4z M20,33.9h15.4L34.6,1.5H20.8l-0.7,28.9l0,0 L20,33.9z M19.3,30.4L19.3,30.4L19.3,30.4z">
                                            </path>
                                            <path
                                                d="M39,50c-0.4,0-0.8-0.3-0.8-0.8v-2.3H17.1v2.3c0,0.4-0.3,0.8-0.8,0.8s-0.8-0.3-0.8-0.8v-3.1c0-0.4,0.3-0.8,0.8-0.8H39 c0.4,0,0.8,0.3,0.8,0.8v3.1C39.8,49.7,39.4,50,39,50z">
                                            </path>
                                            <path
                                                d="M42.5,10.9H40c-0.4,0-0.8-0.3-0.8-0.8s0.3-0.8,0.8-0.8h2.6c0.4,0,0.8,0.3,0.8,0.8S43,10.9,42.5,10.9z">
                                            </path>
                                            <path
                                                d="M38.2,5.6c-0.2,0-0.5-0.1-0.6-0.3c-0.2-0.3-0.2-0.8,0.2-1.1l2.1-1.5c0.3-0.2,0.8-0.2,1.1,0.2s0.2,0.8-0.2,1.1l-2.1,1.5 C38.5,5.6,38.3,5.6,38.2,5.6z">
                                            </path>
                                            <path
                                                d="M40.4,17.8c-0.2,0-0.3,0-0.4-0.1l-2.1-1.5c-0.3-0.2-0.4-0.7-0.2-1.1c0.2-0.3,0.7-0.4,1.1-0.2l2.1,1.5 c0.3,0.2,0.4,0.7,0.2,1.1C40.9,17.7,40.6,17.8,40.4,17.8z">
                                            </path>
                                            <path
                                                d="M15.4,10.9h-2.6c-0.4,0-0.8-0.3-0.8-0.8s0.3-0.8,0.8-0.8h2.6c0.4,0,0.8,0.3,0.8,0.8S15.8,10.9,15.4,10.9z">
                                            </path>
                                            <path
                                                d="M17.2,5.6c-0.2,0-0.3,0-0.4-0.1l-2.1-1.5c-0.3-0.2-0.4-0.7-0.2-1.1c0.2-0.3,0.7-0.4,1.1-0.2l2.1,1.5C18,4.5,18.1,5,17.8,5.3 C17.7,5.5,17.4,5.6,17.2,5.6z">
                                            </path>
                                            <path
                                                d="M15,17.8c-0.2,0-0.5-0.1-0.6-0.3c-0.2-0.3-0.2-0.8,0.2-1.1l2.1-1.5c0.3-0.2,0.8-0.2,1.1,0.2c0.2,0.3,0.2,0.8-0.2,1.1 l-2.1,1.5C15.3,17.7,15.1,17.8,15,17.8z">
                                            </path>
                                            <path
                                                d="M36,31.1H19.3c-0.4,0-0.8-0.3-0.8-0.8s0.3-0.8,0.8-0.8H36c0.4,0,0.8,0.3,0.8,0.8S36.5,31.1,36,31.1z">
                                            </path>
                                            <path
                                                d="M47,50H4.9c-0.4,0-0.8-0.3-0.8-0.8s0.3-0.8,0.8-0.8H47c0.4,0,0.8,0.3,0.8,0.8S47.4,50,47,50z">
                                            </path>
                                            <path
                                                d="M9.5,37.1c-0.1,0-0.2,0-0.3,0c-0.4,0-0.7-0.3-0.7-0.7c0-0.1-0.2-2,0.9-3.6c1.2-1.7,3.8-1.8,3.9-1.8c0.2,0,0.4,0.1,0.6,0.2 c0.1,0.2,0.2,0.4,0.2,0.6C13.8,36.1,11.5,37.1,9.5,37.1z M12.4,32.6c-0.7,0.2-1.4,0.5-1.8,1C10.2,34.3,10,35,10,35.5 C11.1,35.4,12.1,34.8,12.4,32.6z">
                                            </path>
                                            <path
                                                d="M6.6,41c-1.2,0-2.7-0.6-4.2-2.5c-0.1-0.2-0.2-0.4-0.2-0.6c0-0.2,0.1-0.4,0.3-0.5c0.1-0.1,2.3-1.5,4.2-0.8 c1.8,0.7,2.8,2.3,2.8,2.4c0.2,0.3,0.1,0.7-0.2,1C8.6,40.6,7.7,41,6.6,41z M4.2,38.3c1.6,1.6,2.7,1.4,3.7,0.9C7.5,38.8,7,38.3,6.3,38 C5.6,37.8,4.8,38,4.2,38.3z">
                                            </path>
                                            <path
                                                d="M7.7,34c-0.1,0-0.2,0-0.3,0c-1.9-0.7-3.9-2.5-2.4-6.7c0.1-0.2,0.2-0.4,0.4-0.4c0.2-0.1,0.4-0.1,0.6,0c0.1,0,2.5,1.2,2.9,3.2 c0.4,1.9-0.6,3.6-0.6,3.6C8.2,33.9,7.9,34,7.7,34z M6.2,28.7c-0.5,2.1,0.2,3.1,1.1,3.6c0.2-0.5,0.3-1.2,0.2-2 C7.3,29.6,6.7,29,6.2,28.7z">
                                            </path>
                                        </svg> </span>
                                    <span class="list_title">Installation</span>
                                </li>
                                <li class="list_items">
                                    <span class="list_icon">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;"
                                            xml:space="preserve">
                                            <path
                                                d="M43.2,47.8h-9.4c-0.4,0-0.8-0.4-0.8-0.8s0.4-0.8,0.8-0.8h9.4c0.4,0,0.8,0.4,0.8,0.8S43.6,47.8,43.2,47.8z">
                                            </path>
                                            <path
                                                d="M19.7,47.8h-9.4c-0.4,0-0.8-0.4-0.8-0.8s0.4-0.8,0.8-0.8h9.4c0.4,0,0.8,0.4,0.8,0.8S20.1,47.8,19.7,47.8z">
                                            </path>
                                            <path
                                                d="M22.9,50c-1,0-2.4-0.2-3.8-2.6l0,0c-0.3-0.4-0.5-0.9-0.7-1.4c-1.1-2.3-1.5-5.8-1.8-8.3c-0.2-2-0.2-3.4-0.2-3.5 c0-0.2,0.1-0.4,0.2-0.6c0.1-0.1,0.3-0.2,0.6-0.2h19.2c0.2,0,0.4,0.1,0.6,0.2c0.1,0.1,0.2,0.4,0.2,0.6c0,0.1,0,1.5-0.2,3.5 c-0.2,2.5-0.7,5.9-1.8,8.3c-0.2,0.5-0.5,1-0.7,1.4c-1.6,2.7-3.3,2.6-4.2,2.6c-0.1,0-0.2,0-0.3,0c-1,0-3.2,0-3.2,0c0,0-2.2,0-3.2,0 c-0.1,0-0.2,0-0.3,0C23.1,50,23,50,22.9,50z M23.5,48.4c1,0,3.2,0,3.2,0c0,0,2.2,0,3.2,0c0.1,0,0.2,0,0.3,0c0.8,0,1.7,0.1,2.8-1.8 c0.2-0.4,0.4-0.8,0.7-1.3c1-2.1,1.4-5.4,1.6-7.8c0.1-1.1,0.1-2,0.2-2.6H17.9c0,0.6,0.1,1.5,0.2,2.6c0.2,2.4,0.7,5.6,1.6,7.8 c0.2,0.5,0.4,0.9,0.6,1.3l0,0c1.1,1.9,2,1.8,2.8,1.8C23.3,48.4,23.4,48.4,23.5,48.4z">
                                            </path>
                                            <path
                                                d="M31.8,31.7C31.8,31.7,31.7,31.7,31.8,31.7c-0.5,0-0.8-0.4-0.8-0.8c0.1-1.1,0.2-2.1,0.3-3.1c1-7.5,3.2-12.4,7.8-17.2 c-0.4,0-0.8-0.1-1.3-0.1c-0.7,1.5-2.1,2.4-3.6,3c0.1,0.3,0.1,0.7,0,1.1c-0.3,1.2-1.3,2.5-2.5,3.2c0.2,0.7,0.2,1.5-0.1,2.2 c-0.4,1-1.2,1.8-2.2,2.3c0,1.5-0.3,2.9-1.9,4.7c-0.1,0.2-0.4,0.3-0.6,0.3c-0.2,0-0.5-0.1-0.6-0.3c-1.2-1.4-2.6-3.2-1.8-5.8 c-2.3-1.6-3.1-3.9-2.1-6.7c-2.4-1-2.2-3.6-1.9-5.2c-1.8-0.8-2.1-2.6-2-4.6c-0.6-0.1-1.3-0.5-2-0.9c2.3,9.5,3.1,13.6,3.1,20.9 c0,0.4-0.4,0.8-0.8,0.8c-0.4,0-0.8-0.4-0.8-0.8c0-7.6-0.7-11.3-3.8-23.8c-0.1-0.4,0.1-0.8,0.5-0.9c0.4-0.1,0.8,0,1,0.4 c0.7,1.6,2.6,2.8,3.6,2.8c0.2,0,0.5,0.1,0.6,0.2c0.2,0.2,0.2,0.4,0.2,0.6c-0.2,2.9,0.3,3.6,1.5,4c0.4,0.1,0.7,0.5,0.6,0.9 c-0.7,3.1,0,3.9,1.4,4.2c0.2,0.1,0.4,0.2,0.5,0.4c0.1,0.2,0.1,0.5,0,0.7c-1.2,2.6-0.6,4.5,1.7,5.8c0.4,0.2,0.5,0.6,0.3,1 c-0.7,1.7-0.3,2.7,0.7,4c0.9-1.2,1-2.2,0.9-3.4c0-0.4,0.2-0.7,0.6-0.8c0.8-0.2,1.5-0.8,1.8-1.5c0.2-0.4,0.3-1-0.1-1.6 c-0.1-0.2-0.1-0.5,0-0.7c0.1-0.2,0.3-0.4,0.5-0.5c0.9-0.2,2-1.4,2.2-2.3c0.1-0.4-0.1-0.5-0.1-0.6c-0.2-0.2-0.4-0.5-0.3-0.8 c0-0.3,0.2-0.5,0.5-0.6c2.3-0.8,3.4-1.7,3.7-2.9C36.6,9,37,8.8,37.4,8.8c1.9,0.3,2.4,0.4,4.4-0.6c0.4-0.2,0.8-0.1,1,0.2 c0.2,0.3,0.2,0.8-0.1,1c-6.1,5.2-8.7,10.2-9.8,18.5c-0.1,0.9-0.2,2-0.3,3C32.5,31.4,32.2,31.7,31.8,31.7z">
                                            </path>
                                            <path
                                                d="M18.7,35c-0.3,0-0.5-0.1-0.7-0.4l-0.1-0.2c-3.9-7.3-8-14.8-14.5-19.7c-0.3-0.2-0.4-0.7-0.2-1c0.2-0.3,0.7-0.5,1-0.3 c3,1.5,4.8,1.7,6.1,0.6c0.2-0.2,0.5-0.2,0.8-0.1c0.3,0.1,0.5,0.3,0.5,0.6c0.9,3.7,2.9,4,4.4,3.9c0.2,0,0.4,0.1,0.6,0.2 c0.2,0.1,0.3,0.4,0.3,0.6c0,2,1,4,2.5,5.1c0.5,0.3,0.9,0.5,1.4,0.6c0.2,0,0.4,0.2,0.5,0.3c0.1,0.2,0.2,0.4,0.1,0.6 c-0.3,1.4,1.6,3,2.7,3.6c0.7-0.2,2.3-1,2-2.7c-0.1-0.4,0.2-0.8,0.7-0.9c0.4-0.1,0.8,0.2,0.9,0.7c0.4,2.8-2,4.2-3.5,4.5 c-0.2,0-0.4,0-0.6-0.1c-0.2-0.1-3.8-2.1-3.8-4.7c-0.5-0.1-0.9-0.4-1.4-0.7c-1.7-1.2-2.9-3.3-3.1-5.5c-1.8-0.1-3.9-0.9-4.9-4 c-0.9,0.4-1.9,0.5-2.9,0.4c5,4.9,8.4,11.3,11.7,17.5l0.1,0.2c0.2,0.4,0.1,0.9-0.3,1.1C18.9,35,18.8,35,18.7,35z">
                                            </path>
                                            <path
                                                d="M34.1,35c-0.1,0-0.3,0-0.4-0.1c-0.4-0.2-0.5-0.7-0.3-1.1c2.4-4,5.5-8.4,9.8-11.3c-0.7-0.1-1.4-0.3-2-0.7 c-1.2,1.5-2.8,2.4-4.8,2.6c-0.7,2-1.7,3.6-4,4.1c-0.4,0.1-0.8-0.2-0.9-0.6c-0.1-0.4,0.2-0.8,0.6-0.9c1.6-0.4,2.3-1.4,3.1-3.6 c0.1-0.3,0.4-0.5,0.7-0.5c2.1-0.1,3.6-1,4.6-2.6c0.1-0.2,0.3-0.3,0.5-0.4c0.2,0,0.4,0,0.6,0.2c1,0.8,2.4,1,4.5,0.8 c0.4,0,0.7,0.2,0.8,0.6c0.1,0.4-0.1,0.8-0.4,0.9c-5.3,2.5-8.9,7.5-11.6,12.1C34.7,34.9,34.4,35,34.1,35z">
                                            </path>
                                            <path
                                                d="M22.5,32.5c-0.3,0-0.5-0.1-0.7-0.4c-0.2-0.4-0.1-0.8,0.3-1.1c0,0,0,0,0,0c0.3-0.2,1.1-0.6,1.1-1.1c0.1-0.4,0.5-0.7,0.9-0.7 c0.4,0.1,0.7,0.5,0.7,0.9c-0.2,1.2-1.3,1.8-1.9,2.2C22.8,32.5,22.6,32.5,22.5,32.5z">
                                            </path>
                                            <path
                                                d="M36.2,38.4H17.3c-0.4,0-0.8-0.4-0.8-0.8c0-0.4,0.4-0.8,0.8-0.8h18.9c0.4,0,0.8,0.4,0.8,0.8C36.9,38.1,36.6,38.4,36.2,38.4z">
                                            </path>
                                        </svg> </span>
                                    <span class="list_title">Furnishing</span>
                                </li>
                                <li class="list_items">
                                    <span class="list_icon">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;"
                                            xml:space="preserve">
                                            <path
                                                d="M44.7,18.4h-3.3c-0.2,0-0.4-0.1-0.5-0.2c-0.1-0.2-0.2-0.4-0.2-0.6c0.1-1.2,0-2.5-0.4-3.8c-0.1-0.2,0-0.5,0.1-0.6 c0.1-0.2,0.4-0.3,0.6-0.3h4.1c0.2,0,0.4,0.1,0.6,0.3c0.1,0.2,0.2,0.4,0.1,0.6c-0.4,1.2-0.5,2.5-0.4,3.8c0,0.2-0.1,0.4-0.2,0.5 C45.1,18.3,44.9,18.4,44.7,18.4z M42.2,16.9h1.7c0-0.9,0.1-1.8,0.2-2.6h-2.2C42.1,15.2,42.2,16.1,42.2,16.9z">
                                            </path>
                                            <path
                                                d="M42.7,14.1c-0.1,0-0.2,0-0.3-0.1c-0.3-0.1-0.5-0.4-0.4-0.7c0-0.1-0.3-0.4-0.4-0.5c-0.1-0.1-0.3-0.3-0.4-0.4 c-0.4-0.5-0.5-0.9-0.7-1.3c0-0.1-0.1-0.2-0.1-0.3l0-0.1c-0.1-0.3-0.1-0.3-0.5-0.5c-0.4-0.1-0.6-0.5-0.5-0.9c0.1-0.4,0.5-0.6,0.9-0.5 c1,0.3,1.2,0.7,1.5,1.4l0,0.1c0,0.1,0.1,0.3,0.1,0.4c0.1,0.4,0.2,0.6,0.4,0.9c0.1,0.1,0.1,0.1,0.2,0.2c0-0.1-0.1-0.2-0.1-0.4 c-0.1-0.3-0.3-0.7-0.3-1.1c0-0.5,0.2-0.9,0.4-1.3c0-0.1,0.1-0.2,0.1-0.3c0.2-0.6,0.2-1.2,0.1-1.8C42.4,6.4,42.6,6,43,5.8 c0.4-0.1,0.8,0.1,0.9,0.5c0.3,0.9,0.3,1.9-0.1,2.8c0,0.1-0.1,0.3-0.2,0.4c-0.1,0.3-0.2,0.5-0.2,0.7c0,0.2,0.1,0.4,0.2,0.6 c0.1,0.2,0.2,0.4,0.2,0.6c0.2,0.9,0,1.8-0.6,2.6C43.1,14,42.9,14.1,42.7,14.1z">
                                            </path>
                                            <path
                                                d="M43.4,12.6c-0.2,0-0.3-0.1-0.4-0.2c-0.3-0.2-0.4-0.7-0.1-1c0.3-0.3,0.6-0.7,1-1.1c0.4-0.3,0.9-0.6,1.7-0.7 c0.4,0,0.7,0.3,0.8,0.7c0,0.4-0.3,0.7-0.7,0.8c-0.3,0-0.6,0.1-0.8,0.3c-0.3,0.2-0.5,0.5-0.7,0.8C43.8,12.5,43.6,12.6,43.4,12.6z">
                                            </path>
                                            <path
                                                d="M10.2,32.7c-0.1,0-0.1,0-0.2,0c-0.4-0.1-0.6-0.5-0.5-0.9l1-4.5c0.1-0.4,0.5-0.6,0.9-0.5c0.4,0.1,0.6,0.5,0.5,0.9l-1,4.5 C10.8,32.4,10.5,32.7,10.2,32.7z">
                                            </path>
                                            <path
                                                d="M5.3,32.7c-0.1,0-0.1,0-0.2,0c-0.4-0.1-0.6-0.5-0.5-0.9L6.4,24c0.1-0.3,0.4-0.6,0.7-0.6h4.8c0.2,0,0.4,0.1,0.6,0.3 c0.1,0.2,0.2,0.4,0.1,0.6l-0.7,3.2c-0.1,0.4-0.5,0.6-0.9,0.5c-0.4-0.1-0.6-0.5-0.5-0.9l0.5-2.3H7.7l-1.7,7.2 C6,32.4,5.7,32.7,5.3,32.7z">
                                            </path>
                                            <path
                                                d="M13.3,32.7c-0.3,0-0.5-0.2-0.7-0.4c-2.1-4.5-2.1-4.6-2.1-4.8c0-0.4,0.3-0.7,0.7-0.7c0.3,0,0.6,0.2,0.7,0.6 c0.1,0.4,1.2,2.7,2,4.3c0.2,0.4,0,0.8-0.3,1C13.5,32.6,13.4,32.7,13.3,32.7z">
                                            </path>
                                            <path
                                                d="M35.9,18.8c-0.4,0-0.7-0.3-0.7-0.7V6.8c0-1-0.8-1.9-1.9-1.9h-30c-1,0-1.9,0.8-1.9,1.9v10.5h14.1c0.4,0,0.7,0.3,0.7,0.7 c0,0.4-0.3,0.7-0.7,0.7H0.7c-0.4,0-0.7-0.3-0.7-0.7V6.8C0,5,1.5,3.5,3.3,3.5h30c1.8,0,3.3,1.5,3.3,3.3v11.3 C36.6,18.5,36.3,18.8,35.9,18.8z">
                                            </path>
                                            <path
                                                d="M46.7,32.7H35.9c-0.4,0-0.7-0.3-0.7-0.7c0-0.4,0.3-0.7,0.7-0.7h10.8c1,0,1.9-0.8,1.9-1.9V18.8H16.3v13.1 c0,0.4-0.3,0.7-0.7,0.7c-0.4,0-0.7-0.3-0.7-0.7V18.1c0-0.4,0.3-0.7,0.7-0.7h33.7c0.4,0,0.7,0.3,0.7,0.7v11.3 C50,31.2,48.5,32.7,46.7,32.7z">
                                            </path>
                                            <path
                                                d="M33.3,46.5h-30C1.5,46.5,0,45,0,43.2V31.9c0-0.4,0.3-0.7,0.7-0.7h35.2c0.4,0,0.7,0.3,0.7,0.7v11.3 C36.6,45,35.1,46.5,33.3,46.5z M1.5,32.7v10.5c0,1,0.8,1.9,1.9,1.9h30c1,0,1.9-0.8,1.9-1.9V32.7H1.5z">
                                            </path>
                                            <path
                                                d="M9.1,18.4H6.6c-0.4,0-0.7-0.3-0.7-0.7V9.4c0-0.4,0.3-0.7,0.7-0.7h2.5c0.4,0,0.7,0.3,0.7,0.7v1.1c0,0.4-0.3,0.7-0.7,0.7 c-0.4,0-0.7-0.3-0.7-0.7v-0.4h-1v6.8h1.8c0.4,0,0.7,0.3,0.7,0.7S9.5,18.4,9.1,18.4z">
                                            </path>
                                            <path
                                                d="M14.8,18.4H12c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7h2.1v-6.8h-1.3v0.4c0,0.4-0.3,0.7-0.7,0.7s-0.7-0.3-0.7-0.7V9.4 c0-0.4,0.3-0.7,0.7-0.7h2.8c0.4,0,0.7,0.3,0.7,0.7v8.3C15.5,18.1,15.2,18.4,14.8,18.4z">
                                            </path>
                                            <path
                                                d="M12,18.4H9.1c-0.4,0-0.7-0.3-0.7-0.7v-7.2c0-0.4,0.3-0.7,0.7-0.7H12c0.4,0,0.7,0.3,0.7,0.7v7.2C12.7,18.1,12.4,18.4,12,18.4 z M9.8,16.9h1.5v-5.7H9.8V16.9z">
                                            </path>
                                            <path
                                                d="M17.3,18.4c-0.1,0-0.2,0-0.3-0.1c-0.2-0.1-0.3-0.2-0.4-0.4l-2.4-7.9c-0.1-0.4,0.1-0.8,0.5-0.9l1.9-0.6 c0.2-0.1,0.4,0,0.6,0.1c0.2,0.1,0.3,0.2,0.4,0.4l2.4,7.9c0.1,0.2,0,0.4-0.1,0.6c-0.1,0.2-0.2,0.3-0.4,0.4l-1.9,0.6 C17.4,18.4,17.3,18.4,17.3,18.4z M15.8,10.2l2,6.5l0.5-0.2l-2-6.5L15.8,10.2z">
                                            </path>
                                            <path
                                                d="M9.9,46H7.1c-0.4,0-0.7-0.3-0.7-0.7v-8.1c0-0.4,0.3-0.7,0.7-0.7h2.9c0.4,0,0.7,0.3,0.7,0.7c0,0.4-0.3,0.7-0.7,0.7H7.8v6.6 h2.1c0.4,0,0.7,0.3,0.7,0.7C10.7,45.7,10.3,46,9.9,46z">
                                            </path>
                                            <path
                                                d="M15.7,46h-3c-0.4,0-0.7-0.3-0.7-0.7v-7c0-0.4,0.3-0.7,0.7-0.7h3c0.4,0,0.7,0.3,0.7,0.7v7C16.5,45.7,16.1,46,15.7,46z  M13.4,44.5H15V39h-1.6V44.5z">
                                            </path>
                                            <path
                                                d="M12.1,46H9.9c-0.4,0-0.7-0.3-0.7-0.7v-9.8c0-0.4,0.3-0.7,0.7-0.7h2.2c0.4,0,0.7,0.3,0.7,0.7v9.8C12.8,45.7,12.5,46,12.1,46z  M10.7,44.5h0.7v-8.3h-0.7V44.5z">
                                            </path>
                                            <path
                                                d="M28.7,31.8h-2.4c-0.4,0-0.7-0.3-0.7-0.7c0-0.4,0.3-0.7,0.7-0.7h1.7v-6.7h-1V24c0,0.4-0.3,0.7-0.7,0.7s-0.7-0.3-0.7-0.7v-1.1 c0-0.4,0.3-0.7,0.7-0.7h2.4c0.4,0,0.7,0.3,0.7,0.7V31C29.4,31.4,29.1,31.8,28.7,31.8z">
                                            </path>
                                            <path
                                                d="M26.2,31.8h-2.9c-0.4,0-0.7-0.3-0.7-0.7c0-0.4,0.3-0.7,0.7-0.7h2.1v-5.6h-2.1c-0.4,0-0.7-0.3-0.7-0.7c0-0.4,0.3-0.7,0.7-0.7 h2.9c0.4,0,0.7,0.3,0.7,0.7V31C27,31.4,26.6,31.8,26.2,31.8z">
                                            </path>
                                            <path
                                                d="M23.4,31.8H21c-0.4,0-0.7-0.3-0.7-0.7V24c0-0.4,0.3-0.7,0.7-0.7h2.3c0.4,0,0.7,0.3,0.7,0.7V31 C24.1,31.4,23.8,31.8,23.4,31.8z M21.7,30.3h0.9v-5.6h-0.9V30.3z">
                                            </path>
                                            <path
                                                d="M34.8,31.8c-0.1,0-0.2,0-0.2,0L32.3,31c-0.2-0.1-0.3-0.2-0.4-0.4c-0.1-0.2-0.1-0.4,0-0.6l2.5-7.7c0.1-0.4,0.5-0.6,0.9-0.5 l2.3,0.8c0.2,0.1,0.3,0.2,0.4,0.4c0.1,0.2,0.1,0.4,0,0.6l-2.5,7.7C35.4,31.6,35.1,31.8,34.8,31.8z M33.4,29.8l0.9,0.3l2.1-6.3 l-0.9-0.3L33.4,29.8z">
                                            </path>
                                            <path
                                                d="M31.5,18.4h-8.1c-0.3,0-0.5-0.1-0.6-0.3c-0.8-1.3-0.8-2.8,0-4.1c0.1-0.2,0.4-0.3,0.6-0.3h8.1c0.3,0,0.5,0.1,0.6,0.4 c0.1,0.2,0.1,0.5,0,0.7c-0.5,0.9-0.5,1.8,0,2.7c0.1,0.2,0.1,0.5,0,0.7C32,18.3,31.8,18.4,31.5,18.4z M23.9,16.9h6.6 c-0.2-0.6-0.2-1.3,0-1.9h-6.6C23.6,15.7,23.6,16.3,23.9,16.9z">
                                            </path>
                                            <path
                                                d="M44.8,31.8h-7.9c-0.3,0-0.5-0.1-0.6-0.3c-0.8-1.3-0.8-2.7,0-4.1c0.1-0.2,0.4-0.3,0.6-0.3h7.9c0.3,0,0.5,0.1,0.6,0.4 c0.1,0.2,0.1,0.5,0,0.7c-0.5,0.9-0.5,1.7,0,2.6c0.1,0.2,0.1,0.5,0,0.7C45.2,31.6,45,31.8,44.8,31.8z M37.3,30.3h6.4 c-0.1-0.6-0.1-1.2,0-1.8h-6.4C37,29.1,37,29.7,37.3,30.3z">
                                            </path>
                                            <path
                                                d="M45.7,28.2h-7.9c-0.2,0-0.4-0.1-0.6-0.3c-0.9-1.2-0.9-2.4,0-3.6c0.1-0.2,0.4-0.3,0.6-0.3h7.9c0.3,0,0.5,0.1,0.6,0.4 c0.1,0.2,0.1,0.5,0,0.7c-0.4,0.7-0.4,1.3,0,2c0.1,0.2,0.1,0.5,0,0.7C46.2,28.1,46,28.2,45.7,28.2z M38.2,26.8h6.4 c-0.1-0.4-0.1-0.9,0-1.3h-6.4C37.9,25.9,37.9,26.4,38.2,26.8z">
                                            </path>
                                            <path
                                                d="M30.8,46H23c-0.3,0-0.5-0.1-0.6-0.3c-0.8-1.3-0.8-2.7,0-4c0.1-0.2,0.4-0.3,0.6-0.3h7.9c0.3,0,0.5,0.1,0.6,0.4s0.1,0.5,0,0.7 c-0.5,0.9-0.5,1.7,0,2.6c0.1,0.2,0.1,0.5,0,0.7S31.1,46,30.8,46z M23.4,44.5h6.4c-0.1-0.6-0.1-1.2,0-1.8h-6.4 C23.1,43.3,23.1,43.9,23.4,44.5z">
                                            </path>
                                            <path
                                                d="M31.7,42.5h-7.9c-0.2,0-0.4-0.1-0.6-0.3c-0.9-1.2-0.9-2.4,0-3.6c0.1-0.2,0.4-0.3,0.6-0.3h7.9c0.3,0,0.5,0.1,0.6,0.4 c0.1,0.2,0.1,0.5,0,0.7c-0.4,0.7-0.4,1.3,0,1.9c0.1,0.2,0.1,0.5,0,0.7C32.2,42.3,32,42.5,31.7,42.5z M24.3,41h6.4 c-0.1-0.4-0.1-0.8,0-1.3h-6.4C24,40.2,24,40.6,24.3,41z">
                                            </path>
                                            <path
                                                d="M30.7,39.2h-7.9c-0.2,0-0.4-0.1-0.6-0.3c-0.9-1.2-0.9-2.4,0-3.6c0.1-0.2,0.4-0.3,0.6-0.3h7.9c0.3,0,0.5,0.1,0.6,0.4 c0.1,0.2,0.1,0.5,0,0.7c-0.4,0.7-0.4,1.3,0,1.9c0.1,0.2,0.1,0.5,0,0.7C31.2,39,31,39.2,30.7,39.2z M23.3,37.7h6.4 c-0.1-0.4-0.1-0.8,0-1.3h-6.4C23,36.9,23,37.3,23.3,37.7z">
                                            </path>
                                            <path
                                                d="M30.8,14.8h-8.1c-0.2,0-0.4-0.1-0.6-0.3c-0.9-1.1-0.9-2.3,0-3.4c0.1-0.2,0.3-0.3,0.6-0.3h8.1c0.3,0,0.5,0.2,0.6,0.4 c0.1,0.2,0.1,0.5-0.1,0.8c-0.4,0.6-0.4,1,0,1.6c0.2,0.2,0.2,0.5,0.1,0.8C31.4,14.6,31.1,14.8,30.8,14.8z M23.1,13.3h6.6 c-0.1-0.3-0.1-0.7,0-1h-6.6C22.9,12.7,22.9,13,23.1,13.3z">
                                            </path>
                                        </svg> </span>
                                    <span class="list_title">Partitioning</span>
                                </li>
                            </ul>

                            <div class="mt-4">
                                <a class="fontWeight600 btn_4 ms-2 " href="#">
                                    <span class="px-4">Explore More</span> <i
                                        class="fa-solid fa-arrow-right ms-1 "></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    <!-- cta -->
    <section>
        <div class="containerFull">
            <div class="row ">
                <div class="col-lg-6">
                    <small class="text_primary title">
                        Book Your Free Consultation!
                    </small>
                    <h4 class="fontHeading sub_heading mt-3">
                        Transform Your Vision into Reality! <br>Schedule Your Interior Consultation with Us!
                    </h4>

                </div>
                <div class="col-lg-6 ps-5 ">

                    <a href="tel:4977676675">
                        <span>
                            <span class="text_primary d-block">Get in touch with us</span>
                            <h4 class="sub_heading mt-3 text_secondary"><i class="fa-solid fa-phone me-2"></i> +91
                                1234567890</h4>
                        </span></a>
                    <a href="tel:4977676675" class="mt-3 d-block">
                        <i class="fa-regular fa-envelope text_secondary me-2 sub_heading"></i>


                        <h4 class="sub_heading text_secondary d-inline-block">exmple@gmail.com</h4>
                    </a>

                </div>

            </div>

        </div>
    </section>
    <!-- portfolio -->

    <section class="bg_secondary">
        <div class="containerFull">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6">
                    <small class="text_primary_light title fontWeight700">
                        Our portfolio
                    </small>
                    <h4 class=" heading fontHeading mt-3 text_third ">
                        Projects We are Proud of
                    </h4>
                </div>
                <div class="tabs_btn" style="width:fit-content">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="showAll-tab" data-bs-toggle="tab" href="#showAll" role="tab"
                                aria-controls="showAll" aria-selected="true">Show All</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="bathroom-tab" data-bs-toggle="tab" href="#bathroom" role="tab"
                                aria-controls="bathroom" aria-selected="false">Bathrooms</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="kitchen-tab" data-bs-toggle="tab" href="#kitchen" role="tab"
                                aria-controls="kitchen" aria-selected="false">Kitchens</a>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="showAll" role="tabpanel" aria-labelledby="showAll-tab">
                    <div class="project_gallery mt-5">
                        <div class="gallery row row-cols-md-2 row-cols-lg-3">
                            <?php foreach ($projects as $project): ?>
                                <div class="gallery_item">
                                    <a <?php echo $project['useFancyBox'] ? 'data-fancybox="gallery"' : ''; ?>
                                        href="<?php echo $project['useFancyBox'] ? $project['image'] : $project['pageUrl']; ?>">
                                        <img src="<?php echo $project['image']; ?>"
                                            alt="<?php echo $project['title']; ?>" />
                                    </a>
                                    <div class="gallery_card_content">
                                        <h4><?php echo $project['title']; ?></h4>
                                        <p class="text-white"><?php echo $project['description']; ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="bathroom" role="tabpanel" aria-labelledby="bathroom-tab">
                    <div class="project_gallery mt-5">
                        <div class="gallery row row-cols-md-2 row-cols-lg-3">
                            <?php foreach ($projects as $project): ?>
                                <?php if ($project['type'] === 'bathroom'): ?>
                                    <div class="gallery_item">
                                        <a <?php echo $project['useFancyBox'] ? 'data-fancybox="gallery"' : ''; ?>
                                            href="<?php echo $project['useFancyBox'] ? $project['image'] : $project['pageUrl']; ?>">
                                            <img src="<?php echo $project['image']; ?>"
                                                alt="<?php echo $project['title']; ?>" />
                                        </a>
                                        <div class="gallery_card_content">
                                            <h4><?php echo $project['title']; ?></h4>
                                            <p class="text-white"><?php echo $project['description']; ?></p>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="kitchen" role="tabpanel" aria-labelledby="kitchen-tab">
                    <div class="project_gallery mt-5">
                        <div class="gallery row row-cols-md-2 row-cols-lg-3">
                            <?php foreach ($projects as $project): ?>
                                <?php if ($project['type'] === 'kitchen'): ?>
                                    <div class="gallery_item">
                                        <a <?php echo $project['useFancyBox'] ? 'data-fancybox="gallery"' : ''; ?>
                                            href="<?php echo $project['useFancyBox'] ? $project['image'] : $project['pageUrl']; ?>">
                                            <img src="<?php echo $project['image']; ?>"
                                                alt="<?php echo $project['title']; ?>" />
                                        </a>
                                        <div class="gallery_card_content">
                                            <h4><?php echo $project['title']; ?></h4>
                                            <p class="text-white"><?php echo $project['description']; ?></p>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- blogs -->
    <section>
        <div class="containerFull">
            <p class="text_primary title text-center">
                Our Blog
            </p>
            <h4 class="fontHeading heading mt-3 text_secondary text-center">
                Latest Blogs & News
            </h4>

            <div class="blog_main">
                <div class="swiper-button-next"></div>
                <div class="swiper blog mt-4 pb-5">
                    <div class="swiper-wrapper">
                        <?php foreach ($projects as $project): ?>
                            <div class="swiper-slide">
                                <div class="itemBlog" style="width: 100%; display: inline-block;">
                                    <div class="innerBlog">
                                        <div class="imgBlog">
                                            <picture>
                                                <source srcset="https://placehold.co/400" type="image/webp">
                                                <img src="https://placehold.co/400" alt="Blog Image">
                                            </picture>
                                        </div>
                                        <div class="blogDesHome">
                                            <div class="innerDes">
                                                <div class="descriptionHome">
                                                    <div class="userIcon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                    <p>by webdesk</p>
                                                    <h4 class="small_heading fontHeading mt-3">Lorem ipsum dolor sit amet.
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="bottomBtn">
                                                <p><i class="far fa-calendar"></i> 26-06-2024</p>
                                                <a href="#" tabindex="0">Read More <i class="fa fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>
    <!--team -->
    <section class="bg_third">
        <div class="containerFull">
            <div class="row">
                <div class="col-lg-12 col-md-12 xol-12">
                    <div class="text-center mb-7">
                        <small class="title text_primary fontWeight500">Our Team</small>
                        <h2 class="mt-2 heading fontHeading fontWeight700">Our Leadership Team</h2>
                        <p class="mb-0">Working from all around the world to
                            build your home</p>
                    </div>
                </div>
            </div>
            <div class="row  mt-5">
                <div class="col-lg-3 col-md-6 col-12">
                    <figure class="mb-4 zoom-img">
                        <img src="https://block.codescandy.com/assets/images/team/team-img-3.jpg" alt="team"
                            class="rounded-3 img-fluid" />
                    </figure>
                    <div class="mb-4">
                        <h4 class="mb-1"><a href="#!" class="text-reset">Jitu
                                Chauhna</a></h4>
                        <span class="fs-6">Co-Founder & CEO</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <figure class="mb-4 zoom-img">
                        <img src="https://block.codescandy.com/assets/images/team/team-img-3.jpg" alt="team"
                            class="rounded-3 img-fluid" />
                    </figure>
                    <div class="mb-4">
                        <h4 class="mb-1"><a href="#!" class="text-reset">Jitu
                                Chauhna</a></h4>
                        <span class="fs-6">Co-Founder & CEO</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <figure class="mb-4 zoom-img">
                        <img src="https://block.codescandy.com/assets/images/team/team-img-3.jpg" alt="team"
                            class="rounded-3 img-fluid" />
                    </figure>
                    <div class="mb-4">
                        <h4 class="mb-1"><a href="#!" class="text-reset">Jitu
                                Chauhna</a></h4>
                        <span class="fs-6">Co-Founder & CEO</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <figure class="mb-4 zoom-img">
                        <img src="https://block.codescandy.com/assets/images/team/team-img-3.jpg" alt="team"
                            class="rounded-3 img-fluid" />
                    </figure>
                    <div class="mb-4">
                        <h4 class="mb-1"><a href="#!" class="text-reset">Jitu
                                Chauhna</a></h4>
                        <span class="fs-6">Co-Founder & CEO</span>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- contact -->
    <section class="bg-gray-light">
        <div class="containerFull">
            <div class="row">
                <div class="col-lg-6">
                    <div class="d-flex">
                        <div class="m-auto">
                            <h4 class="heading fontHeading fontWeight900">
                                Lets Discuss
                                Your Project!

                            </h4>
                            <p>
                                Contact us today and take the next step building the home of your dreams!
                            </p>
                            <div class="mt-5">
                                <img class="w-100"
                                    src="https://marketingexperts.in/projects/affinitybuildersco/images/contact.jpg"
                                    alt="">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bannerForm_main">
                        <form action="" class="bg-white bannerForm">
                            <div class=" p-4 bg_primary text-white ">
                                <h4 class="fontHeading fontWeight700">
                                    Speak To A Our Expert
                                </h4>
                                <p class="mt-1 text-white-50">
                                    Tell us about your project!
                                </p>
                            </div>
                            <div class="p-4">
                                <div class="form-floating mb-3">
                                    <input type="tel" class="form-control" id="floatingName" placeholder="Name">
                                    <label for="floatingName">Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">
                                    <label for="floatingInput">Email address</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="tel" class="form-control" id="floatingPassword"
                                        placeholder="Phone No.">
                                    <label for="floatingPassword">Phone No.</label>
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here"
                                        style="height: 100px" id="floatingTextarea"></textarea>
                                    <label for="floatingTextarea">Message</label>
                                </div>
                                <button class="btn btn_5 w-100 py-3 mt-3  " type="submit">
                                    Speak To A Design Specialist
                                </button>
                            </div>
                            <!-- <div class="formfooter">
                                    <div class="d-flex justify-content-between">
                                        <div class="item_contact">
                                            <a href="https://api.whatsapp.com/send?phone=amp;text=Hi"><i
                                                    class="fab fa-whatsapp"></i>
                                                &nbsp; WhatsApp</a>
                                        </div>
                                        <div class="item_contact">
                                            <a href="tel:"><i class="fa fa-phone"></i> &nbsp; +91 929424344</a>
                                        </div>
                                    </div>
                                </div> -->
                        </form>
                    </div>

                </div>

            </div>

        </div>
    </section>




    </div>
    <?php include 'include/footer.php'; ?>

    </div>
    <?php include 'include/footer-links.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <script>
        var swiper = new Swiper(".blog", {
            spaceBetween: 0,
            // centeredSlides: true,
            slidesPerView: 3,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },

            // breakpoints: {

            //     320: {
            //         slidesPerView: 2,
            //         spaceBetween: 10
            //     },

            //     480: {
            //         slidesPerView: 2,
            //         spaceBetween: 20
            //     },

            //     640: {
            //         slidesPerView: 3,
            //         spaceBetween: 30
            //     },

            //     768: {
            //         slidesPerView: 4,
            //         spaceBetween: 30
            //     }
            // }
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },

            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
</body>

</html>