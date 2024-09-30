<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zenith Holdings</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/logo-white.png" />
    <link rel="stylesheet" href="./commonStyle.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/aa7454d09f.js" crossorigin="anonymous"></script>
</head>

<body>

    <!-- Header -->
    <header>
        <div id="logo">
            <a href="./index.php">
                <img class="img_size" src="./img/logo-white.png" alt="">
            </a>
        </div>
        <ul class="nav" id="nav">
            <ul class="navLogo">
                <a href="./index.html">
                    <img class="img_size" src="./img/logo-white.png" alt="">
                </a>
            </ul>
            <li class="nav-link"><a href="./index.php">Home</a></li>
            <li class="nav-link"><a href="./aboutus.php">About Us</a></li>
            <li class="nav-link"><a href="./contact.php">Contact</a></li>
            <li class="nav-link"><a href="./Login.html">Login</a></li>
            <li class="sociallinkContainer">
                <img class="sociallink" src="./img/fabook-icon-white.svg" alt="">
                <img class="sociallink" src="./img/twitter-icon-white.svg" alt="">
                <img class="sociallink" src="./img/inkedin-icon-white.svg" alt="">
                <img class="sociallink" src="./img/whatsapp-icon-white.svg" alt="">
            </li>
        </ul>
        <div id="barContainer">
            <i id="bar" class="fa-solid fa-bars"></i>
        </div>
    </header>

    <!-- Hero page -->
    <section class="hero gridSection">
        <div class="sectionDesc">
            <h1 class="headline">
                Most popular way to trade <span class="cryptoText">CRYPTO</span>.
            </h1>
            <p class="sub-headline">
                You can see a record of all your transactions anytime you want and never have to worry about someone
                erasing or stealing your money!
            </p>
            <div class="btnContainer">
                <a href="contact.php"><button class="btn btn1">Contact Now</button></a>
                <button class="btn btn2">Play video <i class="fa-solid fa-play"></i></button>
            </div>
        </div>
        <div class="sectionPic bouncepic" id="sectionPic">
            <img src="./img/hero-image.png" alt="">
        </div>
    </section>

    <!-- Carousel -->
    <section>
        <div class="carouselContainer">
            <!-- Repeatable Carousel Items Start -->
            <?php
            $carousels = [
                ["img/bitcoin-icon.png", "Bitcoin", "Bitcoin is an innovative payment network", "$34,000", "15%"],
                ["img/ethereum-icon.png", "Ethereum", "Ethereum is open-source blockchain currency", "$25,600", "9%"],
                ["img/tether-icon.png", "Tether", "Tether is a stable coin cryptocurrency", "$7,000", "4%"],
                ["img/bitcoin-icon.png", "Bitcoin", "Bitcoin is an innovative payment network", "$34,000", "15%"],
                ["img/ethereum-icon.png", "Ethereum", "Ethereum is open-source blockchain currency", "$25,600", "9%"],
                ["img/tether-icon.png", "Tether", "Tether is a stable coin cryptocurrency", "$7,000", "4%"]
            ];

            foreach ($carousels as $index => $carousel) {
                echo '
                <div class="eachCarousel' . ($index === 0 ? ' eachCarouselBorder' : '') . '">
                    <img src="./img/' . $carousel[0] . '" alt="">
                    <article class="carouselDesc">
                        <h1 class="carouselTitle">' . $carousel[1] . '</h1>
                        <p class="carouselPara">' . $carousel[2] . '</p>
                        <div class="carouselPrice">
                            <h3>' . $carousel[3] . '</h3>
                            <span class="rect"></span>
                            <h3 class="carouselDiscount">' . $carousel[4] . '</h3>
                        </div>
                        <button class="btn carouselBtn">Buy & Trade</button>
                    </article>
                </div>';
            }
            ?>
            <!-- Repeatable Carousel Items End -->
        </div>
        <div class="carouselIndicator">
            <?php for ($i = 0; $i < count($carousels); $i++) {
                echo '<div class="indicator' . ($i === 0 ? ' activeIndicator' : '') . '" onclick="slideCarousel(' . $i . ')"></div>';
            } ?>
        </div>
    </section>

    <!-- Processes -->
    <section class="gridSection">
        <div class="sectionDesc processessDesc">
            <h1 class="sectionHeader">Chain Process</h1>
            <p class="sectionPara">We do not charge any fees and we do not require any registration. You keep your
                privacy and your coins.
            </p>
            <div class="eachProcesses">
                <img src="./img/handshake-icon-white-line.svg" alt="handshake">
                <div class="eachprocessesPara">
                    <h1 class="processTitle">Trading</h1>
                    <p>
                        The act of speculating on cryptocurrency price movements via a CFD trading account, or buying
                        and selling.
                    </p>
                </div>
            </div>
            <div class="eachProcesses">
                <img src="./img/cart-icon-white-line.svg" alt="handshake">
                <div class="eachprocessesPara">
                    <h1 class="processTitle">Buying</h1>
                    <p>
                        Best cryptocurrency exchanges currently purchase Bitcoin, Ethereum, and Litecoin other coins and
                        tokens on the platform.
                    </p>
                </div>
            </div>
        </div>
        <div class="sectionPic bouncepic processesPic sectionPic">
            <img src="./img/chain-process-img.png" alt="">
        </div>
    </section>

    <!-- Markets -->
    <section class="gridSection">
        <div class="sectionDesc marketDesc">
            <h1 class="sectionHeader">Markets at finger</h1>
            <p class="sectionPara">The Blockchain is a decentralized, digital ledger of transactions that are recorded
                confirmed
            </p>
            <div class="eachMarket">
                <img src="./img/buy-icon-color.svg" alt="handshake">
                <div>
                    <h1 class="marketTitle">Buying</h1>
                    <p class="darkPara">
                        Best cryptocurrency exchanges currently purchase Bitcoin, Ethereum, and Litecoin other coins and
                        tokens on the platform.
                    </p>
                </div>
            </div>
            <div class="eachMarket">
                <img src="./img/trading-icon-color.svg" alt="handshake">
                <div>
                    <h1 class="marketTitle">Trading</h1>
                    <p class="darkPara">
                        The act of speculating on cryptocurrency price movements via a CFD trading account, or buying
                        and selling.
                    </p>
                </div>
            </div>
            <div class="eachMarket">
                <img src="./img/support-icon-color.svg" alt="handshake">
                <div>
                    <h1 class="marketTitle">Supporting</h1>
                    <p class="darkPara">
                        Don’t worry if you’re new to crypto and digital currencies – Skrill makes setting up a
                        cryptocurrency wallet easy.
                    </p>
                </div>
            </div>
            <div class="eachMarket">
                <img src="./img/online-icon-color.svg" alt="handshake">
                <div>
                    <h1 class="marketTitle">Online</h1>
                    <p class="darkPara">
                        Cryptocurrency, especially Bitcoin, has proven to be a popular trading vehicle, even if
                        legendary investors as good.
                    </p>
                </div>
            </div>
        </div>
        <div class="sectionPic marketspicSection" id="sectionPic">
            <h1 class="marketspicHeader">CRYPTOCURRENCY</h1>
            <div class="marketsPicContainer">
                <div class="marketPic marketPic1">
                    <img src="./img/persent-icon-white.svg" alt="">
                    <article class="marketTitle">Hot Sale</article>
                </div>

                <div class="marketPic marketPic2">
                    <img src="./img/bitcoin-icon-white.svg" alt="">
                    <article class="marketTitle">Bitcoin</article>
                </div>

                <div class="marketPic marketPic3">
                    <img src="./img/ethereum-white-icon.svg" alt="">
                    <article class="marketTitle">ETHEREUM</article>
                </div>

                <div class="marketPic marketPic4">
                    <img src="./img/handshake-icon-white.svg" alt="">
                    <article class="marketTitle">CONNECTING</article>
                </div>
            </div>
        </div>
    </section>

    <!-- Dashboard -->
    <section class="gridSection">
        <div class="sectionDesc dashboardDesc">
            <h1 class="sectionHeader">Trade crypto in seconds</h1>
            <p class="sectionPara">
                But with prouple, you can mine bitcoin from your own phone!
                You no longer have to worry about costly transactions.
            </p>
            <button class="btn">Explore Now</button>
        </div>

        <div class="sectionPic dashboardPic">
            <img src="./img/dashboard-dark.jpg" alt="">
        </div>

    </section>

    <div class="fundSection">
        <div class="sectionDesc">
            <h1 class="sectionHeader">Control your funds</h1>
            <p class="sectionPara">
                Our mining pool offers some of the most competitive contracts in the market.
            </p>
            <div class="fundsContainer">
                <div class="fund">
                    <img src="./img/cryptocurrency-white-icon.svg" alt="cryptocurrency">
                    <h1 class="fundType">Support All Currency</h1>
                    <p class="darkPara">
                        Accept and process payments from all types of currencies.
                    </p>
                </div>

                <div class="fund">
                    <img src="./img/blockchain-white-icon.svg" alt="cryptocurrency">
                    <h1 class="fundType">Block Chain System</h1>
                    <p class="darkPara">
                        How it Works, Benefits and its Deployment in Financial
                    </p>
                </div>

                <div class="fund">
                    <img src="./img/cryptocurrency-sell-white-icon.svg" alt="cryptocurrency">
                    <h1 class="fundType">Fund Selling</h1>
                    <p class="darkPara">
                        How to Profit in the Crypto Markets through Investing
                    </p>
                </div>

                <div class="fund">
                    <img src="./img/cryptocurrency-card-white-icon.svg" alt="cryptocurrency">
                    <h1 class="fundType">Crypto Card</h1>
                    <p class="darkPara">
                        Crypto Cards and Why Cryptocurrency are the Future
                    </p>
                </div>
            </div>
        </div>
    </div>

    <section class="gridSection">
        <div class="sectionDesc newsletterDesc">
            <h1 class="sectionHeader">Subscribe news!</h1>
            <p class="sectionPara">
                This is where crypto news websites come in handy and stay up-to-date this sphere.
            </p>
            <form action="#" class="newsletter">
                <input type="email" name="" id="newsletter" placeholder="enter your email">
                <button type="submit" class="btn primaryBtn">Subscribe</button>
            </form>
        </div>
        <div class="sectionPic bouncepic newsletterPic">
            <img src="./img/newsletter.png" alt="">
        </div>
    </section>

    <footer>
        <div class="joinSection">
            <div class="joinDesc">
                <h1 class="sectionHeader">Join with us</h1>
                <p class="sectionPara">
                    Once you have created your account, you can purchase coins from website
                </p>
            </div>
            <a href="Signup.html"><button class="btn primaryBtn">JOIN NOW</button></a>
        </div>

        <div class="footerlinksContainer">
            <div class="footerAboutus">
                <img class="img_size " src="./img/logo-white.png" alt="">
                <p class="darkPara">With no commissions and a simple user interface,
                    The most reliable way to trade for
                    Cryptocurrency.
                </p>
                <div class="footersociallinkContainer">
                    <img class="sociallink" src="./img/fabook-icon-white.svg" alt="">
                    <img class="sociallink" src="./img/twitter-icon-white.svg" alt="">
                    <img class="sociallink" src="./img/inkedin-icon-white.svg" alt="">
                    <img class="sociallink" src="./img/whatsapp-icon-white.svg" alt="">
                </div>
            </div>

            <div class="footerlink">
                <h1 class="linkTitle">Explore</h1>
                <a href="aboutus.php" class="eachLink">About us</a>
                <a href="#" class="eachLink">FAQ</a>
                <a href="#" class="eachLink">Blog</a>
                <a href="#" class="eachLink">Contact</a>
            </div>

            <div class="footerlink">
                <h1 class="linkTitle">Service</h1>
                <a href="#" class="eachLink">Mining</a>
                <a href="#" class="eachLink">Control Data</a>
                <a href="#" class="eachLink">Design</a>
                <a href="#" class="eachLink">Security</a>
            </div>

            <div class="footerlink">
                <h1 class="linkTitle">Resource</h1>
                <a href="#" class="eachLink">Style Guide</a>
                <a href="#" class="eachLink">Change Log</a>
                <a href="#" class="eachLink">License</a>
            </div>
        </div>

        <div class="footerCopyright">
            <p>&copy;designed and developed by <a href="https://github.com/Ericcy20" target="_blank"
                    class="developedBy">Ericcy@20</a>.
            </p>
        </div>
    </footer>


    <script src="./script.js"></script>
</body>

</html>
