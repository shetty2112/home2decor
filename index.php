<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home2decor</title>
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <div id="home_first_slide">
        <div id="navbar">
            <h2 id="logo">Home2decor</h2>
            <button id="plus_btn"></button>
            <div id="navbar_main_links_div">
                <a href="" class="navbar_main_links">Home</a>
                <a href="" class="navbar_main_links" id="portfolio">Portfolio</a>
                <a href=""class="navbar_main_links" id="about_us">About Us</a>
                <a href="" class="navbar_main_links">Modular Kitchen</a>
                <a href="" id="how" class="navbar_main_links">How we work</a>
                <a href="" class="navbar_main_links">Design Consultation</a>
            </div>
            <div class="navbar_sublinks_div" id="portfolio_sublinks_div">

            </div>
            <div class="navbar_sublinks_div" id="about_us_sublinks_div">
                <a class="navbar_sublinks" href="" style="border: none;">Meet Designers</a>
                <a class="navbar_sublinks" href="">See the pricing</a>
                <a class="navbar_sublinks" href="">Contact with us</a>
                <a class="navbar_sublinks" href="">F.A.Q</a>
            </div>
        </div>
        <div id="home_text_div">
            <h1 class="home_text" style="font-size: 10vh;">Your home interior to be unique & stylish</h1>
            <h3 class="home_text" style="font-size: 4vh; margin-top: 2vh;">Design Innovation, Service, quality and Perfection</h3>
            <button id="meet_designer_btn">MEET OUR DESIGNER</button>
        </div>
    </div>
    <div id="home_second_slide">
        <div id="home_text_div" style="width: 90vw;">
            <h1 class="home_text" style="font-size: 10vh;">Interior Designers in Mumbai – Let’s Launch Your Dream Home</h1>
            <h3 class="home_text" style="font-size: 2.5vh; font-family: roboto; margin-top: 3vh; word-spacing: 2px;">
                Home2Decor is one of the most versatile and luxury interior designers in Mumbai, Maharashtra, offering interior design solutions for luxury home interior designs. We transform lives and communities with our award-winning contemporary interior design, blending old-world charm with modern comfort. We’ve been doing this since 2010 and delivered <span style="font-weight: bold;">1500+ successful interior design projects</span> across the entire region and nearby areas. We specialise in <span style="font-weight: bold;">premium modular kitchen interiors, bedroom interior, dining, study room interior, pooja room interior, living room interior</span>, and much more. We have a team of 54 young, talented designers with a passion for exuberant spaces who can fix the look and feel of any space. We plan, design, and make prototypes that work. We work closely with our clients from the inception of an idea to the grand finale. With Home2Decor as your design partner, you can rest assured knowing we will give your interior the much-needed attention and design it according to your requirements and needs.
            </h3>
            <h3 class="home_text" style="font-size: 2.5vh; font-family: roboto; margin-top: 3vh; word-spacing: 2px;">
                We started as an <span style="font-weight: bold;">interior design company in Mumbai</span>, and very soon we established our footprint in several cities of Maharashtra and other states of the nation as well. Our designs are contemporary, economical, elegant, and timeless. Our team of designers and interior decorators are fused with the latest technology to design home interiors in a very skilled way. We make use of 3D modeling tools coupled with advanced equipment to create beautiful yet practical designs for our client’s requirements. We also constantly update our knowledge to stay abreast with the latest design trends. To provide value for money services at home2decor, we offer our services at  competitive rates. What sets us apart from other interior design companies is our in-depth understanding of architecture and construction norms.
            </h3>
        </div>
    </div>
    <div id="home_third_slide">
        <div id="home_third_slide_img_div">
            <img src="img/interior-designers-in-mumbai.jpg" style="width: 100%; height: 60%; margin-top: 17%;" alt="">
        </div>
        <div id="home_third_slide_text_div">
            <h1 style="font-family: barlow; font-weight: lighter; margin-top: 5%;">Why Choose Our Interior Design Firm?</h1>
            <h3 style="font-family: barlow; margin-top: 5vh; font-weight: lighter;">At the Home2Decor interior designers in Mumbai, we believe that each client has unique needs and preferences. To cater to that, we add up the best and most creative designs to make your dream a reality. We can amaze you with fresh ideas at every turn. Our experts are trained professionals who will understand your taste and preferences better than anyone else can. They use their creativity to design home interiors from themed living rooms, villas, apartments, bedrooms to elegant bathrooms. We deliver interior design projects promptly while maintaining a high level of quality service. We believe professionalism is key to success and it is reflected in everything we do – from our designing techniques to our workmanship.</h3>
            <button id="talk_designer_btn">TALK TO DESIGNER</button>
        </div>
    </div>
    <div id="home_fourth_slide">

    </div>
    <script>

        
        var portfolio = document.getElementById("portfolio");
        var about_us = document.getElementById("about_us");

        portfolio.addEventListener("mouseover", display_portfolio);
        portfolio.addEventListener("mouseout", remove_portfolio);
        about_us.addEventListener("mouseover", display_about_us);
        about_us.addEventListener("mouseout", remove_about_us);

        function display_portfolio(){
            document.getElementById("portfolio_sublinks_div").style.opacity = 1;
        }
        function remove_portfolio(){
            document.getElementById("portfolio_sublinks_div").style.opacity = 0;
        }
        function display_about_us(){
            document.getElementById("about_us_sublinks_div").style.opacity = 1;
        }
        function remove_about_us(){
            document.getElementById("about_us_sublinks_div").style.opacity = 0;
        }
    </script>
</body>
</html>