<?php
    include 'connection.php';
    include 'header.php';
?>
<style>
.projects-item {
    background-color: #f9f9f9;
    padding: 20px;
    margin-bottom: 20px; /* Adds space between rows */
    text-align: center;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.projects-item .thumb img {
    max-width: 100%;
    height: auto;
}

.projects-item h1 {
    font-size: 36px;
    color: #333;
}

.projects-item h3 {
    font-size: 24px;
    margin: 10px 0;
}

.projects-item .project-btn {
    display: inline-block;
    padding: 8px 16px;
    background-color: #007bff;
    color: white;
    text-decoration: none;
    border-radius: 4px;
    margin-top: 10px;
}

.projects-item .project-btn:hover {
    background-color: #0056b3;
}
.projects-item {
    position: relative;
}

.hover-details {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.7); /* Semi-transparent black */
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.thumb:hover .hover-details {
    opacity: 1; /* Show on hover */
}

.thumb img {
    transition: transform 0.3s ease;
}

.thumb:hover img {
    transform: scale(1.05); /* Slightly zoom in on hover */
}
.projects-item {
    position: relative;
    overflow: hidden; /* Ensures the hover details stay within the item */
}

.hover-details {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(34, 34, 34, 0.8); /* Dark grey background with more opacity */
    color: #f0f0f0
}
</style>

<!-- Inner Section Start -->
<section class="inner-area parallax-bg" data-background="images/graniteh1.jpg" data-type="parallax" data-speed="3">
    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-12">
                    <h4>Granite Types</h4>
                    <p>Home <a href="granite.php">Granite</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Inner Section End -->

<!-- Granite Products Section Start -->
    <section class="projects-section over-layer-white parallax-bg" style="background-image:url(Project/images/stairs.jpeg);" data-type="parallax" data-speed="5">
    <div class="container">
    
   
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusive Granite Collection</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .projects-item {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Exclusive Granite Collection from Leading Granite Supplier</h1>

        <!-- Dropdown filter -->
        <div class="form-group mt-4">
            <label for="productFilter">Select Granite Product:</label>
            <select class="form-control" id="productFilter" onchange="filterProducts()">
                <option value="all">All Products</option>
                <option value="amba-white">Amba White</option>
                <option value="matrix-leather">Matrix - Leather</option>
                <option value="absolute-black">Absolute Black</option>
                <option value="amadeus-blue">Amadeus Blue</option>
                <option value="astoria">Astoria</option>
                <option value="bross-blue">Bross Blue</option>
                <option value="black-galaxy">Black Galaxy</option>
                <option value="blue-oceano">Blue Oceano</option>
                <option value="blue-pearl">Blue Pearl</option>
                <option value="bianco-antico">Bianco Antico</option>
                <option value="black-pearl">Black Pearl</option>
                <option value="bengal-white">Bengal White</option>
                <option value="colonial-cream">Colonial Cream</option>
                <option value="coffee-brown">Coffee Brown</option>
                <option value="copper-red">Copper Red</option>
                <option value="colonial-white">Colonial White</option>
                <option value="imperial-cream">Imperial Cream</option>
                <option value="imperial-gold">Imperial Gold</option>
                <option value="kashmir-gold">Kashmir Gold</option>
                <option value="kashmir-white">Kashmir White</option>
                <option value="bianco-tiffone">Bianco Tiffone</option>
                <option value="mist-black">Mist Black</option>
                <option value="multi-color">Multi Color</option>
                <option value="ivory-brown">Ivory Brown</option>
                <option value="parana-bordeaux">Parana Bordeaux</option>
                <option value="pebble-white">Pebble White</option>
                <option value="imperial-white">Imperial White</option>
                <option value="new-imperial-red">New Imperial Red</option>
                <option value="new-kashmir-white">New Kashmir White</option>
                <option value="royal-ivory">Royal Ivory</option>
                <option value="river-white">River White</option>
                <option value="new-kashmir-cream">New Kashmir Cream</option>
                <option value="tan-brown">Tan Brown</option>
                <option value="thunder-cloud">Thunder Cloud</option>
                <option value="new-multi-color">New Multi Colour</option>
                <option value="colonial-dream">Colonial Dream</option>
                <option value="aviva-white">Aviva White</option>
                <option value="regal-black">Regal Black Impala</option>
                <option value="steel-grey">Steel Grey</option>
                <option value="sapphire-blue">Sapphire Blue</option>
                <option value="new-meera-white">New Meera White</option>
                <option value="meera-white">Meera White</option>
                <option value="kuppam-green">Kuppam Green</option>
                <option value="kashmir-cream">Kashmir Cream</option>
                <option value="prada-gold">Prada Gold</option>
                <option value="emerald-pearl-hq">Emerald Pearl HQ</option>
                <option value="thunder-white">Thunder White</option>
                <option value="vizag-blue">Vizag Blue</option>
                <option value="viscount-wave">Viscount Wave</option>
                <option value="spice-black">Spice Black</option>
                <option value="paradiso-bash">Paradiso Bash</option>
                <option value="indian-juprana">Indian Juparana</option>
                <option value="colombo-juprana">Colombo Juparana</option>
                <option value="colonial-gold">Colonial Gold</option>
                <option value="hassan-green">Hassan Green</option>
                <option value="himalayan-blue">Himalayan Blue</option>
                <option value="indian-aurora">Indian Aurora</option>
                <option value="black-forest">Black Forest</option>
                <option value="bengal-black">Bengal Black</option>
                <option value="andromeda-white">Andromeda White</option>
                <option value="moon-white">Moon White</option>
                <option value="paradiso-classic">Paradiso Classic</option>
                <option value="black-titanium">Black Titanium</option>
            </select>
        </div>

        

        <div class="row" id="productContainer">
            <!-- Example Product Template -->
            
            <div class="col-md-4 col-sm-6 product amba-white">
                 <div class="projects-item">
            <div class="thumb">
            <img src="images\selwada marble.jpg" alt="Amba White Granite">
        </div>
        <div class="content">
            <h3>Amba White</h3>
            <p>A stunning white granite with subtle grey and black flecks.</p>
            <a class="project-btn" href="granite-details.php?type=amba-white">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product matrix-leather">
    <div class="projects-item">
        <div class="thumb">
            <img src="images\selwada marble.jpg" alt="Matrix Leather Granite">
        </div>
        <div class="content">
            <h3>Matrix – Leather</h3>
            <p>A luxurious leather-textured granite ideal for modern spaces.</p>
            <a class="project-btn" href="granite-details.php?type=matrix-leather">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product absolute-black">
    <div class="projects-item">
        <div class="thumb">
            <img src="images\selwada marble.jpg" alt="Absolute Black Granite">
        </div>
        <div class="content">
            <h3>Absolute Black</h3>
            <p>Deep, rich black granite perfect for elegant designs.</p>
            <a class="project-btn" href="granite-details.php?type=absolute-black">View More</a>
           
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product amadeus-blue">
    <div class="projects-item">
        <div class="thumb">
            <img src="images\selwada marble.jpg" alt="Amadeus Blue Granite">
        </div>
        <div class="content">
            <h3>Amadeus Blue</h3>
            <p>A captivating blue granite featuring striking patterns.</p>
            <a class="project-btn" href="granite-details.php?type=amadeus-blue">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product astoria">
    <div class="projects-item">
        <div class="thumb">
            <img src="images\selwada marble.jpg" alt="Astoria Granite">
        </div>
        <div class="content">
            <h3>Astoria</h3>
            <p>A warm, earthy granite with beautiful beige and brown hues.</p>
            <a class="project-btn" href="granite-details.php?type=astoria">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product bross-blue">
    <div class="projects-item">
        <div class="thumb">
            <img src="images\selwada marble.jpg" alt="Bross Blue Granite">
        </div>
        <div class="content">
            <h3>Bross Blue</h3>
            <p>A vibrant blue granite with a mix of subtle white veining.</p>
            <a class="project-btn" href="granite-details.php?type=bross-blue">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product black-galaxy">
    <div class="projects-item">
        <div class="thumb">
            <img src="images\selwada marble.jpg" alt="Black Galaxy Granite">
        </div>
        <div class="content">
            <h3>Black Galaxy</h3>
            <p>A stunning black granite adorned with golden specks.</p>
            <a class="project-btn" href="granite-details.php?type=black-galaxy">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product blue-oceano">
    <div class="projects-item">
        <div class="thumb">
            <img src="images\selwada marble.jpg" alt="Blue Oceano Granite">
        </div>
        <div class="content">
            <h3>Blue Oceano</h3>
            <p>A serene blue granite reminiscent of ocean waves.</p>
            <a class="project-btn" href="granite-details.php?type=blue-oceano">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product blue-pearl">
    <div class="projects-item">
        <div class="thumb">
            <img src="images\selwada marble.jpg" alt="Blue Pearl Granite">
        </div>
        <div class="content">
            <h3>Blue Pearl</h3>
            <p>A dazzling blue granite with silver and white highlights.</p>
            <a class="project-btn" href="granite-details.php?type=blue-pearl">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product bianco-antico">
    <div class="projects-item">
        <div class="thumb">
            <img src="images\selwada marble.jpg" alt="Bianco Antico Granite">
        </div>
        <div class="content">
            <h3>Bianco Antico</h3>
            <p>A beautiful blend of whites, greys, and browns with a polished finish.</p>
            <a class="project-btn" href="granite-details.php?type=bianco-antico">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product black-pearl">
    <div class="projects-item">
        <div class="thumb">
            <img src="images\selwada marble.jpg" alt="Black Pearl Granite">
        </div>
        <div class="content">
            <h3>Black Pearl</h3>
            <p>Elegant black granite featuring deep metallic flecks.</p>
            <a class="project-btn" href="granite-details.php?type=black-pearl">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product bengal-white">
    <div class="projects-item">
        <div class="thumb">
            <img src="images\selwada marble.jpg" alt="Bengal White Granite">
        </div>
        <div class="content">
            <h3>Bengal White</h3>
            <p>A striking white granite with subtle grey patterns.</p>
            <a class="project-btn" href="granite-details.php?type=bengal-white">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product colonial-cream">
    <div class="projects-item">
        <div class="thumb">
            <img src="images\selwada marble.jpg" alt="Colonial Cream Granite">
        </div>
        <div class="content">
            <h3>Colonial Cream</h3>
            <p>A warm, creamy granite with light beige tones.</p>
            <a class="project-btn" href="granite-details.php?type=colonial-cream">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product coffee-brown">
    <div class="projects-item">
        <div class="thumb">
            <img src="images\selwada marble.jpg" alt="Coffee Brown Granite">
        </div>
        <div class="content">
            <h3>Coffee Brown</h3>
            <p>A rich brown granite ideal for traditional settings.</p>
            <a class="project-btn" href="granite-details.php?type=coffee-brown">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product copper-red">
    <div class="projects-item">
        <div class="thumb">
            <img src="images\selwada marble.jpg" alt="Copper Red Granite">
        </div>
        <div class="content">
            <h3>Copper Red</h3>
            <p>A vibrant red granite with copper and gold accents.</p>
            <a class="project-btn" href="granite-details.php?type=copper-red">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product colonial-white">
    <div class="projects-item">
        <div class="thumb">
            <img src="images\selwada marble.jpg" alt="Colonial White Granite">
        </div>
        <div class="content">
            <h3>Colonial White</h3>
            <p>A clean, crisp white granite with subtle grey veining.</p>
            <a class="project-btn" href="granite-details.php?type=colonial-white">View More</a>
        </div>
    </div>
</div>
<div class="col-md-4 col-sm-6 product imperial-cream">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/imperial-cream.jpg" alt="Imperial Cream Granite">
        </div>
        <div class="content">
            <h3>Imperial Cream</h3>
            <p>A luxurious cream granite with light brown flecks.</p>
            <a class="project-btn" href="granite-details.php?type=imperial-cream">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product imperial-gold">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/imperial-gold.jpg" alt="Imperial Gold Granite">
        </div>
        <div class="content">
            <h3>Imperial Gold</h3>
            <p>Elegant golden granite featuring striking brown and grey patterns.</p>
            <a class="project-btn" href="granite-details.php?type=imperial-gold">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product kashmir-gold">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/kashmir-gold.jpg" alt="Kashmir Gold Granite">
        </div>
        <div class="content">
            <h3>Kashmir Gold</h3>
            <p>A stunning blend of gold and cream tones with intricate patterns.</p>
            <a class="project-btn" href="granite-details.php?type=kashmir-gold">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product kashmir-white">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/kashmir-white.jpg" alt="Kashmir White Granite">
        </div>
        <div class="content">
            <h3>Kashmir White</h3>
            <p>A beautiful white granite with delicate grey veining.</p>
            <a class="project-btn" href="granite-details.php?type=kashmir-white">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product bianco-tiffone">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/bianco-tiffone.jpg" alt="Bianco Tiffone Stone">
        </div>
        <div class="content">
            <h3>Bianco Tiffone</h3>
            <p>A premium white granite with grey and beige speckles.</p>
            <a class="project-btn" href="granite-details.php?type=bianco-tiffone">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product mist-black">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/mist-black.jpg" alt="Mist Black Granite">
        </div>
        <div class="content">
            <h3>Mist Black</h3>
            <p>A deep black granite with subtle grey tones.</p>
            <a class="project-btn" href="granite-details.php?type=mist-black">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product multi-color">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/multi-color.jpg" alt="Multi Color Granite">
        </div>
        <div class="content">
            <h3>Multi Color</h3>
            <p>A vibrant granite featuring a blend of various colors.</p>
            <a class="project-btn" href="granite-details.php?type=multi-color">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product ivory-brown">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/ivory-brown.jpg" alt="Ivory Brown Granite">
        </div>
        <div class="content">
            <h3>Ivory Brown</h3>
            <p>A soft brown granite with ivory and cream tones.</p>
            <a class="project-btn" href="granite-details.php?type=ivory-brown">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product parana-bordeaux">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/parana-bordeaux.jpg" alt="Parana Bordeaux Granite">
        </div>
        <div class="content">
            <h3>Parana Bordeaux</h3>
            <p>A rich, dark granite with reddish and purple hues.</p>
            <a class="project-btn" href="granite-details.php?type=parana-bordeaux">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product pebble-white">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/pebble-white.jpg" alt="Pebble White Granite">
        </div>
        <div class="content">
            <h3>Pebble White</h3>
            <p>A beautiful white granite with soft grey speckles.</p>
            <a class="project-btn" href="granite-details.php?type=pebble-white">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product imperial-white">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/imperial-white.jpg" alt="Imperial White Granite">
        </div>
        <div class="content">
            <h3>Imperial White</h3>
            <p>A pure white granite with light grey veining.</p>
            <a class="project-btn" href="granite-details.php?type=imperial-white">View More</a>
        </div>
    </div>
</div>
<div class="col-md-4 col-sm-6 product new-imperial-red">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/new-imperial-red.jpg" alt="New Imperial Red Granite">
        </div>
        <div class="content">
            <h3>New Imperial Red</h3>
            <p>A stunning red granite with intricate patterns.</p>
            <a class="project-btn" href="granite-details.php?type=new-imperial-red">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product new-kashmir-white">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/new-kashmir-white.jpg" alt="New Kashmir White Granite">
        </div>
        <div class="content">
            <h3>New Kashmir White</h3>
            <p>A modern take on the classic Kashmir White granite.</p>
            <a class="project-btn" href="granite-details.php?type=new-kashmir-white">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product royal-ivory">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/royal-ivory.jpg" alt="Royal Ivory Granite">
        </div>
        <div class="content">
            <h3>Royal Ivory</h3>
            <p>A luxurious ivory granite with subtle beige flecks.</p>
            <a class="project-btn" href="granite-details.php?type=royal-ivory">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product river-white">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/river-white.jpg" alt="River White Granite">
        </div>
        <div class="content">
            <h3>River White</h3>
            <p>A soft white granite with grey and brown veining.</p>
            <a class="project-btn" href="granite-details.php?type=river-white">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product new-kashmir-cream">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/new-kashmir-cream.jpg" alt="New Kashmir Cream Granite">
        </div>
        <div class="content">
            <h3>New Kashmir Cream</h3>
            <p>A fresh, creamy granite ideal for contemporary designs.</p>
            <a class="project-btn" href="granite-details.php?type=new-kashmir-cream">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product tan-brown">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/tan-brown.jpg" alt="Tan Brown Granite">
        </div>
        <div class="content">
            <h3>Tan Brown</h3>
            <p>A rich brown granite with warm beige tones.</p>
            <a class="project-btn" href="granite-details.php?type=tan-brown">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product thunder-cloud">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/thunder-cloud.jpg" alt="Thunder Cloud Granite">
        </div>
        <div class="content">
            <h3>Thunder Cloud</h3>
            <p>A dramatic granite with dark grey and black swirling patterns.</p>
            <a class="project-btn" href="granite-details.php?type=thunder-cloud">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product new-multi-color">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/new-multi-color.jpg" alt="New Multi Color Granite">
        </div>
        <div class="content">
            <h3>New Multi Colour</h3>
            <p>A vibrant and dynamic granite featuring multiple colors.</p>
            <a class="project-btn" href="granite-details.php?type=new-multi-color">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product colonial-dream">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/colonial-dream.jpg" alt="Colonial Dream Granite">
        </div>
        <div class="content">
            <h3>Colonial Dream</h3>
            <p>A dreamy blend of cream and light brown tones.</p>
            <a class="project-btn" href="granite-details.php?type=colonial-dream">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product aviva-white">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/aviva-white.jpg" alt="Aviva White Granite">
        </div>
        <div class="content">
            <h3>Aviva White</h3>
            <p>A pure white granite with minimal veining.</p>
            <a class="project-btn" href="granite-details.php?type=aviva-white">View More</a>
        </div>
    </div>
</div>
<div class="col-md-4 col-sm-6 product regal-black">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/regal-black.jpg" alt="Regal Black Granite">
        </div>
        <div class="content">
            <h3>Regal Black Impala</h3>
            <p>An elegant black granite with subtle metallic flecks.</p>
            <a class="project-btn" href="granite-details.php?type=regal-black">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product steel-grey">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/steel-grey.jpg" alt="Steel Grey Granite">
        </div>
        <div class="content">
            <h3>Steel Grey</h3>
            <p>A sophisticated grey granite with a polished finish.</p>
            <a class="project-btn" href="granite-details.php?type=steel-grey">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product sapphire-blue">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/sapphire-blue.jpg" alt="Sapphire Blue Granite">
        </div>
        <div class="content">
            <h3>Sapphire Blue</h3>
            <p>A bright blue granite with sparkling effects.</p>
            <a class="project-btn" href="granite-details.php?type=sapphire-blue">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product new-meera-white">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/new-meera-white.jpg" alt="New Meera White Granite">
        </div>
        <div class="content">
            <h3>New Meera White</h3>
            <p>A clean white granite with a polished finish.</p>
            <a class="project-btn" href="granite-details.php?type=new-meera-white">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product meera-white">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/meera-white.jpg" alt="Meera White Granite">
        </div>
        <div class="content">
            <h3>Meera White</h3>
            <p>A classic white granite with delicate grey veining.</p>
            <a class="project-btn" href="granite-details.php?type=meera-white">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product kuppam-green">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/kuppam-green.jpg" alt="Kuppam Green Granite">
        </div>
        <div class="content">
            <h3>Kuppam Green</h3>
            <p>A rich green granite featuring subtle brown and grey flecks.</p>
            <a class="project-btn" href="granite-details.php?type=kuppam-green">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product kashmir-cream">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/kashmir-cream.jpg" alt="Kashmir Cream Granite">
        </div>
        <div class="content">
            <h3>Kashmir Cream</h3>
            <p>A creamy granite with soft beige and grey patterns.</p>
            <a class="project-btn" href="granite-details.php?type=kashmir-cream">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product prada-gold">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/prada-gold.jpg" alt="Prada Gold Granite">
        </div>
        <div class="content">
            <h3>Prada Gold</h3>
            <p>A luxurious golden granite with intricate veining.</p>
            <a class="project-btn" href="granite-details.php?type=prada-gold">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product emerald-pearl-hq">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/emerald-pearl-hq.jpg" alt="Emerald Pearl HQ Granite">
        </div>
        <div class="content">
            <h3>Emerald Pearl HQ</h3>
            <p>A striking green granite with shimmering effects.</p>
            <a class="project-btn" href="granite-details.php?type=emerald-pearl-hq">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product thunder-white">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/thunder-white.jpg" alt="Thunder White Granite">
        </div>
        <div class="content">
            <h3>Thunder White</h3>
            <p>A beautiful white granite with grey swirls.</p>
            <a class="project-btn" href="granite-details.php?type=thunder-white">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product vizag-blue">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/vizag-blue.jpg" alt="Vizag Blue Granite">
        </div>
        <div class="content">
            <h3>Vizag Blue</h3>
            <p>A unique blue granite with subtle patterns.</p>
            <a class="project-btn" href="granite-details.php?type=vizag-blue">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product viscount-waves">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/viscount-waves.jpg" alt="Viscount Waves Granite">
        </div>
        <div class="content">
            <h3>Viscount Waves</h3>
            <p>A dynamic granite with beautiful wave-like patterns.</p>
            <a class="project-btn" href="granite-details.php?type=viscount-waves">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product spice-black">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/spice-black.jpg" alt="Spice Black Granite">
        </div>
        <div class="content">
            <h3>Spice Black</h3>
            <p>A bold black granite featuring specks of gold and white.</p>
            <a class="project-btn" href="granite-details.php?type=spice-black">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product paradiso-bash">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/paradiso-bash.jpg" alt="Paradiso Bash Granite">
        </div>
        <div class="content">
            <h3>Paradiso Bash</h3>
            <p>A stunning blend of rich browns and greys.</p>
            <a class="project-btn" href="granite-details.php?type=paradiso-bash">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product indian-juparana">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/indian-juparana.jpg" alt="Indian Juparana Granite">
        </div>
        <div class="content">
            <h3>Indian Juparana</h3>
            <p>A beautiful brown granite with intricate patterns.</p>
            <a class="project-btn" href="granite-details.php?type=indian-juparana">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product colombo-juparana">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/colombo-juparana.jpg" alt="Colombo Juparana Granite">
        </div>
        <div class="content">
            <h3>Colombo Juparana</h3>
            <p>A classic brown granite featuring rich color variations.</p>
            <a class="project-btn" href="granite-details.php?type=colombo-juparana">View More</a>
        </div>
    </div>
</div>
<div class="col-md-4 col-sm-6 product colonial-gold">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/colonial-gold.jpg" alt="Colonial Gold Granite">
        </div>
        <div class="content">
            <h3>Colonial Gold</h3>
            <p>A luxurious golden granite with elegant patterns.</p>
            <a class="project-btn" href="granite-details.php?type=colonial-gold">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product hassan-green">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/hassan-green.jpg" alt="Hassan Green Granite">
        </div>
        <div class="content">
            <h3>Hassan Green</h3>
            <p>A vibrant green granite with subtle grey flecks.</p>
            <a class="project-btn" href="granite-details.php?type=hassan-green">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product himalayan-blue">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/himalayan-blue.jpg" alt="Himalayan Blue Granite">
        </div>
        <div class="content">
            <h3>Himalayan Blue</h3>
            <p>A stunning blue granite reminiscent of the sky.</p>
            <a class="project-btn" href="granite-details.php?type=himalayan-blue">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product indian-aurora">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/indian-aurora.jpg" alt="Indian Aurora Granite">
        </div>
        <div class="content">
            <h3>Indian Aurora</h3>
            <p>A beautiful blend of blues and whites.</p>
            <a class="project-btn" href="granite-details.php?type=indian-aurora">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product black-forest">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/black-forest.jpg" alt="Black Forest Granite">
        </div>
        <div class="content">
            <h3>Black Forest</h3>
            <p>A deep black granite with white and grey patterns.</p>
            <a class="project-btn" href="granite-details.php?type=black-forest">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product bengal-black">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/bengal-black.jpg" alt="Bengal Black Granite">
        </div>
        <div class="content">
            <h3>Bengal Black</h3>
            <p>A rich black granite featuring striking patterns.</p>
            <a class="project-btn" href="granite-details.php?type=bengal-black">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product andromeda-white">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/andromeda-white.jpg" alt="Andromeda White Granite">
        </div>
        <div class="content">
            <h3>Andromeda White</h3>
            <p>A luxurious white granite with delicate veining.</p>
            <a class="project-btn" href="granite-details.php?type=andromeda-white">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product moon-white">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/moon-white.jpg" alt="Moon White Granite">
        </div>
        <div class="content">
            <h3>Moon White</h3>
            <p>A soft white granite with subtle grey speckles.</p>
            <a class="project-btn" href="granite-details.php?type=moon-white">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product paradiso-classic">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/paradiso-classic.jpg" alt="Paradiso Classic Granite">
        </div>
        <div class="content">
            <h3>Paradiso Classic</h3>
            <p>A timeless granite featuring rich, warm tones.</p>
            <a class="project-btn" href="granite-details.php?type=paradiso-classic">View More</a>
        </div>
    </div>
</div>

<div class="col-md-4 col-sm-6 product black-titanium">
    <div class="projects-item">
        <div class="thumb">
            <img src="images/black-titanium.jpg" alt="Black Titanium Granite">
        </div>
        <div class="content">
            <h3>Black Titanium</h3>
            <p>An elegant black granite with shimmering highlights.</p>
            <a class="project-btn" href="granite-details.php?type=black-titanium">View More</a>
        </div>
    </div>
</div>







 </div>
</div>

    <script>
        function filterProducts() {
            var filterValue = document.getElementById("productFilter").value;
            var products = document.querySelectorAll(".product");

            products.forEach(function(product) {
                if (filterValue === "all" || product.classList.contains(filterValue)) {
                    product.style.display = "block";
                } else {
                    product.style.display = "none";
                }
            });
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



<!-- Add necessary CSS for styling -->
<style>
    .projects-item {
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        transition: transform 0.3s;
    }

    .projects-item:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .thumb img {
        width: 100%;
        height: 270px; /* Set a fixed height */
        object-fit: cover; /* Ensure the image covers the container */
    }

    .content {
        padding: 15px;
        text-align: center;
    }

    .project-btn {
        display: inline-block;
        padding: 10px 15px;
        margin-top: 10px;
        background-color: #007bff; /* Change this to your desired color */
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
    }

    .project-btn:hover {
        background-color: #0056b3; /* Darker shade for hover effect */
    }
    
    .projects-item {
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        transition: transform 0.3s;
    }

    .projects-item:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .thumb img {
        width: 100%;
        height: 270px; /* Set a fixed height */
        object-fit: cover; /* Ensure the image covers the container */
    }

    .content {
        padding: 15px;
        text-align: center;
    }

    .project-btn {
        display: inline-block;
        padding: 10px 15px;
        margin-top: 10px;
        background-color: #007bff; /* Change this to your desired color */
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
    }

    .project-btn:hover {
        background-color: #0056b3; /* Darker shade for hover effect */
    }

</style>




</div>

    
   
   <div>
   <?php
    include 'footer.php';
    ?>
   </div>

    



