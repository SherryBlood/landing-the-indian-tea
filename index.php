<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icons/pageicon.png" type="image/png">
    <title>The Indian Tea</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300;400;700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="page-up" id="page-up"></div>
    <svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;">
        <?php include 'icons/icon.html'; ?>
    </svg>

    <div class="my-flex-column page-wrapper">
        <div class="content-center">

            <a href="#page-up" class="scroll-to-top">
                <svg class="icon icon-arrow icon-arrow-up">
                    <use xlink:href="#icon-arrow"></use>
                </svg>
            </a>

            <section class="header-section">
                <nav class="my-flex-row">
                    <a href="index.php">
                        <svg class="icon icon-tea-leaf">
                            <use xlink:href="#icon-tea-leaf"></use>
                        </svg>
                    </a>
                    <ul class="my-flex-row">
                        <li><a class="my-flex-row" href="#about-section">About</a></li>
                        <li><a class="my-flex-row" href="#sorts-section">Sorts</a></li>
                        <li><a class="my-flex-row" href="#tea-section">Tea</a></li>
                        <li><a class="my-flex-row" href="#contact-section">Contact</a></li>
                    </ul>
                    <button class="my-btn take-order-btn modal-open-btn">Take order</button>
                </nav>
            </section>

            <section class="hero-section my-flex-row">
                <h1>The Indian Tea</h1>
            </section>

            <section class="about-section my-flex-row section-padding" id="about-section">
                <div>
                    <img class="about-img" src="../images/about.jpg" alt="Cute image">
                </div>
                <div class="about-info my-flex-column">
                    <h2 class="about-headline">About us</h2>
                    <p>Welcome to The Indian Tea, your dedicated source for authentic, premium Indian teas. We are deeply committed to sourcing the finest leaves directly from India's most celebrated regions, including Darjeeling, Assam, and the Nilgiris. Our carefully curated collection spans every variety, from brisk black teas and delicate greens to complex oolongs and traditional Masala Chai, allowing you to explore the rich heritage and diverse flavors of India's tea culture.</p>
                    <p>We strive to make your tea discovery effortless. Our website provides detailed information on the origin, grade, and flavor profile of every tea, guiding you to your perfect selection. Once you've made your choice, our secure platform allows you to easily place your order for worldwide delivery, bringing the authentic taste of Indian tea directly to your home.</p>
                </div>
            </section>

            <section class="sorts-section my-flex-row section-padding" id="sorts-section">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../images/sorts/sort1.jpg" class="d-block" alt="Assam">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/sorts/sort2.jpg" class="d-block" alt="Darjeeling">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/sorts/sort3.jpg" class="d-block" alt="Nilgiri">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-prev-icon" aria-hidden="true">
                            <svg class="icon icon-arrow icon-arrow-prev">
                                <use xlink:href="#icon-arrow"></use>
                            </svg>
                        </span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-next-icon" aria-hidden="true">
                            <svg class="icon icon-arrow">
                                <use xlink:href="#icon-arrow"></use>
                            </svg>
                        </span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="sorts-info" id="sorts-info-container">
                    <div class="sort-description active-description my-flex-column">
                        <h3 class="sorts-headline">Assam</h3>
                        <p>Assam tea is cultivated in the humid lowlands of Northeastern India, near the Brahmaputra River delta. Renowned for its bold, malty flavor and invigorating strength, it produces a deep, bright reddish-brown liquor. This is a full-bodied tea, often described as robust and sometimes featuring notes of spice and honey. Due to its rich, straightforward profile, Assam is the quintessential choice for breakfast blends, such as English or Irish Breakfast, and it pairs exceptionally well with milk and sugar.</p>
                    </div>
                    <div class="sort-description my-flex-column">
                        <h3 class="sorts-headline">Darjeeling</h3>
                        <p>Often referred to as the "Champagne of Teas," Darjeeling is grown at high altitudes in the Himalayan foothills of West Bengal. Unlike the other two, Darjeeling's flavor is typically more nuanced and complex, offering a lighter body and a delicate, pale amber liquor. Its signature characteristic is a unique, subtle muscatel or "grapey" flavor, which can be accompanied by light floral and fruity notes, especially in the prized First Flush harvest. It is best enjoyed plain to appreciate its distinct aroma and flavor complexity.</p>
                    </div>
                    <div class="sort-description my-flex-column">
                        <h3 class="sorts-headline">Nilgiri</h3>
                        <p>Nilgiri tea comes from the high-elevation "Blue Mountains" in Southern India. It is a highly versatile and balanced black tea, known for its smoothness and brisk, clean finish, with a flavor profile often described as having hints of fruit and floral notes without significant astringency. When brewed, it yields a bright, golden-yellow liquor. One of Nilgiri's most notable qualities is that it rarely turns cloudy when chilled, making it an excellent and refreshing choice for preparing iced tea.</p>
                    </div>
                </div>
            </section>

            <section class="tea-section my-flex-column section-padding" id="tea-section">
                <h4 class="tea-headline">Tea</h4>
                <div class="tea-cards my-flex-row">
                    <div class="card" style="width: 18rem;">
                        <img src="../images/tea/tea1.png" class="card-img-top" alt="Assam Orthodox Tea">
                        <div class="card-body">
                            <h5 class="card-title">Assam Orthodox Tea</h5>
                            <p class="card-text">This tea is processed using traditional rolling methods that keep the leaf structure relatively intact. It is considered the premium, whole-leaf expression of Assam, offering a layered, malty flavour with a well-rounded and smooth character. It is often enjoyed as a single-origin brew without milk.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">1 kg</li>
                            <li class="list-group-item">$50</li>
                        </ul>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="../images/tea/tea2.png" class="card-img-top" alt="Assam CTC">
                        <div class="card-body">
                            <h5 class="card-title">Assam CTC</h5>
                            <p class="card-text">This is the most common form of Assam tea, where the leaves are processed into small, uniform pellets. It brews very quickly and produces an incredibly strong, deep-red liquor that is highly robust and pungent. CTC is the backbone of traditional Indian Masala Chai and is perfect for adding milk and sugar.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">1 kg</li>
                            <li class="list-group-item">$30</li>
                        </ul>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="../images/tea/tea3.png" class="card-img-top" alt="Assam Gold Tips">
                        <div class="card-body">
                            <h5 class="card-title">Assam Gold Tips</h5>
                            <p class="card-text">A rare and premium specialty tea, Gold Tips consists primarily of young, unopened buds that have a striking golden colour. It delivers a refined, creamy-smooth cup with rich malty notes and a touch of natural honey sweetness, representing the finest expression of the Assam plant.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">1 kg</li>
                            <li class="list-group-item">$150</li>
                        </ul>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="../images/tea/tea4.png" class="card-img-top" alt="First Flush Darjeeling">
                        <div class="card-body">
                            <h5 class="card-title">First Flush Darjeeling</h5>
                            <p class="card-text">This is the first harvest of the year (March–April), consisting of the youngest, most tender leaves. It is prized for its lively, highly delicate, and floral character. The brew is a pale gold, light-bodied, and beautifully aromatic, often featuring notes of fresh grass and wildflowers. It is best enjoyed plain.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">1 kg</li>
                            <li class="list-group-item">$350</li>
                        </ul>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="../images/tea/tea5.png" class="card-img-top" alt="Second Flush Darjeeling">
                        <div class="card-body">
                            <h5 class="card-title">Second Flush Darjeeling</h5>
                            <p class="card-text">Harvested in May–June, this flush is the most celebrated and develops the tea's famous 'muscatel' flavour—a fruity, wine-like, and sweet note, often compared to ripe grapes. The liquor is richer, a darker amber colour, and the body is more full, striking a perfect balance between complexity and strength.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">1 kg</li>
                            <li class="list-group-item">$200</li>
                        </ul>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="../images/tea/tea6.png" class="card-img-top" alt="Autumn Flush Darjeeling">
                        <div class="card-body">
                            <h5 class="card-title">Autumn Flush Darjeeling</h5>
                            <p class="card-text">The final harvest (October–November) yields a tea with a more mellow, smooth, and full-bodied profile. It has a rich, coppery liquor and a flavour that is often described as slightly toasty, nutty, and comforting, lacking the muscatel of the second flush but offering great depth and balance for an everyday cup.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">1 kg</li>
                            <li class="list-group-item">$120</li>
                        </ul>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="../images/tea/tea7.png" class="card-img-top" alt="Nilgiri Orthodox Black Tea">
                        <div class="card-body">
                            <h5 class="card-title">Nilgiri Orthodox Black Tea</h5>
                            <p class="card-text">This is the whole-leaf version of Nilgiri, celebrated for its exquisitely bright, fragrant, and clean profile. Its smooth, brisk flavour often contains notes of citrus and flower petals, similar to high-grown Ceylon teas. It is excellent as a single-origin black tea and can be enjoyed hot or iced.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">1 kg</li>
                            <li class="list-group-item">$70</li>
                        </ul>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="../images/tea/tea8.png" class="card-img-top" alt="Nilgiri Frost Tea">
                        <div class="card-body">
                            <h5 class="card-title">Nilgiri Frost Tea</h5>
                            <p class="card-text">A special type of tea harvested during the cold, dry winter months when a light frost occurs. The stress on the plant concentrates the sap, leading to a tea with an intense floral aroma, very high natural sweetness, and a bright liquor. It is a rare, premium tea that showcases the best of the Nilgiri terroir.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">1 kg</li>
                            <li class="list-group-item">$50</li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="contact-section my-flex-column section-padding" id="contact-section">
                <h4 class="contact-headline">Contact us</h4>
                <div class="contact-form">
                    <form class="form-contact my-flex-column" action="" autocomplete="off">
                        <div class="my-form-field">
                            <input class="form-inp" type="text" id="clientName" name="client-name" placeholder="" required>
                            <label class="label-form-inp" for="clientName">Your name</label>
                        </div>
                        <div class="my-form-field">
                            <input class="form-inp" type="tel" id="clientPhone" name="client-phone" pattern="^\+[0-9]{12}" placeholder="" required>
                            <label class="label-form-inp" for="clientPhone">Your phone number</label>
                        </div>
                        <div class="my-form-field">
                            <input class="form-inp" type="email" id="clientEmail" name="client-email" placeholder="" required>
                            <label class="label-form-inp" for="clientEmail">Your email</label>
                        </div>
                        <button class="my-btn" type="submit">Send</button>
                    </form>
                </div>
            </section>

            <section class="footer-section my-flex-row section-padding">
                <a href="index.php">
                    <svg class="icon icon-tea-leaf">
                        <use xlink:href="#icon-tea-leaf"></use>
                    </svg>
                </a>
                <div class="footer-info">
                    <p class="footer-general">Work Time</p>
                    <p>Monday to Friday</p>
                    <p>10:00 - 22:00</p>
                </div>
                <div class="footer-info">
                    <p class="footer-general">Contact Info</p>
                    <p><a class="footer-link" href="tel:+111111111111">+111111111111</a></p>
                    <p><a class="footer-link" href="tel:+222222222222">+222222222222</a></p>
                    <p><a class="footer-link" href="mailto:theindiantea@gmail.com">theindiantea@gmail.com</a></p>
                </div>
                <div class="footer-info">
                    <p><a class="footer-link footer-privacy" href="#">Our privacy</a></p>
                    <p class="footer-privacy">&copy The Indian Tea</p>
                </div>
            </section>
        </div>
    </div>

    <div class="my-backdrop is-hidden my-flex-row">
        <div class="my-modal">
            <a class="modal-close-btn">
                <svg class="icon icon-cross">
                    <use xlink:href="#icon-cross"></use>
                </svg>
            </a>
            <form class="my-modal-form my-flex-column" action="" autocomplete="off">
                <div class="my-form-field">
                    <input class="form-inp" type="text" id="clientName" name="client-name" placeholder="" required>
                    <label class="label-form-inp" for="clientName">Your name</label>
                </div>
                <div class="my-form-field">
                    <input class="form-inp" type="tel" id="clientPhone" name="client-phone" pattern="^\+[0-9]{12}" placeholder="" required>
                    <label class="label-form-inp" for="clientPhone">Your phone number</label>
                </div>
                <div class="my-form-field">
                    <input class="form-inp" type="email" id="clientEmail" name="client-email" placeholder="" required>
                    <label class="label-form-inp" for="clientEmail">Your email</label>
                </div>
                <button class="my-btn" type="submit">Send</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/scroll-up.js"></script>
    <script src="../js/sorts-info.js"></script>
    <script src="../js/modal-form.js"></script>
</body>

</html>