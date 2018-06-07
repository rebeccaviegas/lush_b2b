-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 11, 2018 at 10:20 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `b2c`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` decimal(4,2) NOT NULL,
  `category` varchar(50) NOT NULL,
  `image` varchar(150) NOT NULL,
  `stock` int(150) NOT NULL,
  `description` varchar(500) NOT NULL,
  `howtouse` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `image`, `stock`, `description`, `howtouse`) VALUES
(18, 'The Green Coconut', '5.00', 'Bath Bombs', 'assets/img/product_the_green_coconut.jpg', 3, 'Sink into the tub and escape to your own fragrant, soothing island of tranquility. Sandalwood oil, vanilla and lemon oil create a dreamy scent to soothe the soul, while organic cocoa and shea butters transform your bath water into a silky, softening sanctuary. Lie back and slip away to an island of luxury, and emerge ready to take on the real world.', 'Drop into the tub and let the natural oils and butters soften and moisturize your skin. '),
(19, 'Intergalactic', '6.99', 'Bath Bombs', 'assets/img/product_intergalactic.jpg', 12, 'Ever wonder what bathing in deep space would be like? Invite the cosmos into your tub with this interstellar bomb. An awesome mix of refreshing peppermint and neon colors will send your mood rocketing, while popping candy takes you on a trip around the Milky Way. Before you leap too far, rogue layers of vetivert and cedarwood bring you back to earth.', 'Drop into the tub and let the natural oils and butters soften and moisturize your skin. '),
(20, 'Love Boat', '3.89', 'Bath Bombs', 'assets/img/product_love_boat.jpg', 12, 'Recreate the magic of a dreamy, starry night in your tub with our most relaxing bath bomb yet. As the Love Boat slowly fizzes away in the tub, its dusky pink exterior gives way to streams of purple, and finally to a deep indigo hue with delicate shimmering stars. Relaxing lavender oil and comforting tonka absolute soothe stressed bodies and minds, leaving you feeling warm, fuzzy and ready for a restful slumber.', 'Drop into the tub and let the natural oils and butters soften and moisturize your skin. '),
(21, 'Marmalade', '7.89', 'Bath Bombs', 'assets/img/product_marmalade.jpg', 19, 'Gitchy-get yourself to a tub and drop in this little ball of sunshine to chase away the blues with vibrant yellow and orange fizz. You\'ll unleash a brightening blend of Brazilian orange and grapefruit oils, and magically create a layer of skin-softening jelly on top of your bathwater. Hello, hey Joe: you wanna give it a go?', 'Drop into the tub and let the natural oils and butters soften and moisturize your skin. '),
(22, 'Rose Bomb', '5.85', 'Bath Bombs', 'assets/img/product_rose_bomb.jpg', 13, 'hat’s in a name? When it comes to Rose Bomb, we take things pretty seriously. A must for any romantic bath, this sphere of sex appeal contains all of nature’s most potent and seductive ingredients to get you in the mood for a good… soak.', 'Drop into the tub and let the natural oils and butters soften and moisturize your skin. '),
(23, 'Tisty Tosty', '6.99', 'Bath Bombs', 'assets/img/product_tisty_tosty.jpg', 20, 'Float away from it all with this inspiring deep blue fizzer. Lavender and lemon oils create the perfect balance of relaxation and rejuvenation, bringing a wave of tranquility to your tub. For a truly oceanic experience, we\'ve added in some of nature\'s finest ingredients: sea salt and seaweed. ', 'Drop into the tub and let the natural oils and butters soften and moisturize your skin. '),
(24, 'Bubblegum', '9.99', 'Lipscrub', 'assets/img/product_bubblegum.jpg', 4, 'Have a sweet tooth? This sugary treat was made for you! With a sweet, candy-like flavor that\'s true to its name, Bubblegum is one delightful lip scrub. Fine castor sugar gives lips a gentle exfoliation and hydrating organic jojoba oil leaves them feeling soft, smooth and supple. The best part? Licking off the delicious sugar once you\'re through!', 'Take a pea-sized amount and scrub your lips soft, then lick off the excess. '),
(25, 'Chocolate', '8.99', 'Lipscrub', 'assets/img/product_chocolate.jpg', 14, 'The divine combination of orange and chocolate takes center stage here, making this lip scrub a decadent treat for the senses. Scrub your lips to smooth perfection with cocoa powder and castor sugar as organic jojoba oil preps your pout for the softest smooches.', 'Take a pea-sized amount and scrub your lips soft, then lick off the excess. '),
(26, 'Honey', '6.85', 'Lipscrub', 'assets/img/product_honey.jpg', 9, 'All of our lip scrubs are made with castor sugar, but this might be the sweetest treat yet, made with a lip-smacking combination of syrupy honey, creamy white chocolate and aromatic vanilla. A quick scrub with a pinch of this gets lips bee-autifully soft thanks to conditioning jojoba oil, prepping them perfectly for a lip tint or lipstick.', 'Take a pea-sized amount and scrub your lips soft, then lick off the excess. '),
(27, 'Key Lime', '10.85', 'Lipscrub', 'assets/img/product_key_lime.jpg', 5, 'On the lighter end of our lip balm spectrum you\'ll find this gorgeously glossy number. Smooth this uplifting citrus sorbet-flavored balm on for lickable lips and lightweight moisture thanks to conditioning organic jojoba oil and nourishing argan oil. If you find yourself in the limelight, zest it up with some Key Lime Pie.', 'Take a pea-sized amount and scrub your lips soft, then lick off the excess. '),
(28, 'Rose Lollipop', '8.99', 'Lipscrub', 'assets/img/product_rose_lollipop.jpg', 16, 'Our romantic floral lip balm has a light rose-lemon flavor to lift your mood and beautiful butters to protect your pout. Formulated with nourishing shea and cupuaçu butters, Rose Lollipop also pays homage to its namesake flower with rose oil and rose water to soothe dry or chapped lips.', 'Take a pea-sized amount and scrub your lips soft, then lick off the excess. '),
(29, 'The Kiss', '9.99', 'Lipscrub', 'assets/img/product_the_kiss.jpg', 9, 'Buff your lips to pouting perfection with our limited edition Valentine\'s Day lip scrub! Deliciously sweet and perfectly pink, this sugary scrub has flavors of Sicilian mandarin oil and almond oil, and is topped off with a touch of sea salt and creamy fair trade organic cocoa butter. It will polish your lips and leave them soft, smooth and ready for some serious smooching. Go ahead: kiss and tell!', 'Take a pea-sized amount and scrub your lips soft, then lick off the excess. '),
(30, 'Flowers Barrow', '7.00', 'Bath Oils', 'assets/img/product_flowers_barrow.jpg', 12, 'Soaking in a tub with floating petals sounds like the ultimate bathing experience, right? Add to that moisturizing organic shea and cocoa butters, rose absolute and extra virgin coconut oil and you\'re in heaven. This luxurious bath oil - with its nod to an Iron Age hillfort in Dorset, England - brings the floral scents of the English countryside to your bathtime experience: a wonderfully unique soak in the tub.', 'Drop into the tub and let the natural oils and butters soften and moisturize your skin. '),
(31, 'Floating Island', '9.89', 'Bath Oils', 'assets/img/product_floating_island.jpg', 6, 'Sink into the tub and escape to your own fragrant, soothing island of tranquility. Sandalwood oil, vanilla and lemon oil create a dreamy scent to soothe the soul, while organic cocoa and shea butters transform your bath water into a silky, softening sanctuary. Lie back and slip away to an island of luxury, and emerge ready to take on the real world.', 'Drop into the tub and let the natural oils and butters soften and moisturize your skin. '),
(32, 'Furze', '6.75', 'Bath Oils', 'assets/img/product_furze.jpg', 7, 'This oil looks as if it\'s been picked straight from nature itself. Dried elderflower and amaranth flowers embrace the water in your tub to create a beautifully aromatic bath with hints of tropical coconutty comfort. Uplifting neroli oil swirls and jojoba oil twirls as you dip into the tub, lowering yourself into a moisturizing mix of extra virgin coconut oil and organic shea and cocoa butters. It might look prickly, but it\'s a softy at heart.', 'Drop into the tub and let the natural oils and butters soften and moisturize your skin. '),
(33, 'Golden Egg', '11.99', 'Bath Oils', 'assets/img/product_golden_egg.jpg', 18, 'If only there was a way to feel magnificent after a long, exhausting day... wait, what do we have here? Dip into effervescent, tangerine-colored swirls after dropping this bath oil into the tub. Uplifting grapefruit and tangerine oils will give you an energizing boost while jojoba oil and organic cocoa and shea butters kiss the skin soft. When you step out, you\'ll feel spectacular.', 'Drop into the tub and let the natural oils and butters soften and moisturize your skin. '),
(34, 'Razzle Dazzle', '8.65', 'Bath Oils', 'assets/img/product_razzle_dazzle.jpg', 3, 'Drop this small but mighty oil into the tub for a hypnotic display of lustrous fuchsia swirls. A berry relaxing blend of Persian lime oil, bergamot oil and violet leaf absolute create a juicy raspberry fragrance to treat your senses, while organic shea butter, cocoa butter and jojoba oil leave skin feeling softer than ever before.', 'Drop into the tub and let the natural oils and butters soften and moisturize your skin. '),
(35, 'Revelations', '9.85', 'Bath Oils', 'assets/img/product_revelations.jpg', 18, 'Drop this luxurious bath oil into your water-filled tub and be hypnotized by the gradient of green that reveals itself to you. As it melts away, you\'ll be greeted by the uplifting scents of sweet wild orange and bergamot oils. Slide in and envelop yourself in soothing organic cocoa and shea butters and extra moisturizing coconut oil. When you\'re done, you\'ll find yourself eager for further revelations.', 'Drop into the tub and let the natural oils and butters soften and moisturize your skin. '),
(36, 'Cosmetic Warrior', '10.99', 'Face Masks', 'assets/img/product_cosmetic_warrior.jpg', 9, 'If the slightest change in weather or environment leaves you red-faced and inflamed, don\'t worry: you won\'t miss out on great skin with this wobbly mask in your beauty arsenal. Gentle calamine powder calms redness and irritation, while soothing rose absolute and uplifting neroli oil leave your skin beautifully supple and even. With a softening base of mineral-rich carrageenan, this mask is the ultimate skin-calmer.', 'Pinch off some jelly, work between dry hands to form a paste and apply on the skin. Leave on for 10 minutes, then rinse clean. '),
(37, 'Cup O Coffee', '8.99', 'Face Masks', 'assets/img/product_cup_o_coffee.jpg', 5, 'If you\'re a sucker for the strong, scrubby, stimulating type, this coffee-filled mask is just the thing to kick-start your day. Wake up and invigorate your skin and mind with the rich, intoxicating aroma of freshly brewed coffee and sweet roasted cocoa extract. Kaolin deeply cleanses impurities from the pores and ground coffee acts as a gentle scrub to buff away dryness and reveal glowing skin beneath. Smooth this one all over your body to feel soft, clean and wonderfully fragrant.', 'Pinch off some jelly, work between dry hands to form a paste and apply on the skin. Leave on for 10 minutes, then rinse clean. '),
(38, 'Dont Look At Me', '12.99', 'Face Masks', 'assets/img/product_dont_look_at_me.jpg', 15, 'Well hello, don\'t be shy! Smooth on this vivid blue mask and you\'ll want to show anyone and everyone your vibrant complexion. Ground rice gently scrubs away dry skin, murumuru butter moisturizes and zingy lemon juice tones. And if that wasn\'t enough, we\'ve added organic silken tofu to soften you up in all the right ways. The stunning results will have you coming back for more of this scrubby, softening goodness.', 'Pinch off some jelly, work between dry hands to form a paste and apply on the skin. Leave on for 10 minutes, then rinse clean. '),
(39, 'Mask Of Magnaminty', '9.99', 'Face Masks', 'assets/img/product_mask_of_magnaminty.jpg', 11, 'This tingly, minty face and body mask was formulated to be intensely cleansing but never harsh or abrasive. Kaolin clay and peppermint oil rid your pores of debris, giving you a delightfully tingly clean sensation. We add loads of ground aduki beans to exfoliate flaky or dry skin, vanilla absolute to calm redness and honey to soothe and moisturize', 'Pinch off some jelly, work between dry hands to form a paste and apply on the skin. Leave on for 10 minutes, then rinse clean. '),
(40, 'Rosy Cheeks', '11.99', 'Face Masks', 'assets/img/product_rosy_cheeks.jpg', 5, 'Find the happiness you seek by cleansing cheek to cheek with this gorgeously soothing fresh mask. A simple blend of kaolin, calamine and Turkish rose oil delicately calms the skin and restores balance. Whether you\'re feeling hot and bothered or just love showering your complexion with roses, cleansing calamine and kaolin will gently remove dirt while exquisite rose oil nourishes and tones your face. Calm, matte skin, here you come!', 'Pinch off some jelly, work between dry hands to form a paste and apply on the skin. Leave on for 10 minutes, then rinse clean. '),
(41, 'Oatifix', '11.95', 'Face Masks', 'assets/img/product_oatifix.jpg', 10, 'Sensitive, dry or irritated faces will love this yummy mask for its blend of soothing oats, softening mashed banana and ground almonds to soften and slough away dry, flaky skin. With a rich blend of illipe butter, sandalwood oil and glycerin to lock moisture into your skin, it\'ll leave your face feeling soft and dewy.', 'Pinch off some jelly, work between dry hands to form a paste and apply on the skin. Leave on for 10 minutes, then rinse clean. '),
(42, 'Brun', '27.95', 'Henna Hair Dye', 'assets/img/product_brun.jpg', 8, 'An all-natural alternative to chemical hair dyes, our henna Brun is perfect for mousy brown hair without changing your natural color too drastically. The rich cocoa butter base leaves hair soft while helping henna cling to each individual strand for better all-over coverage. We\'ve also added nettle powder to the mix to keep your hair and scalp in in tip top condition.', '1. Break your henna into several large pieces in a heat-resistant bowl and add hot water sparingly. Mix until it\'s the consistency of melted chocolate, adding water as necessary. 2. Place your bowl in a saucepan of simmering water to keep it warm while you apply. Ensure henna is cool eno'),
(43, 'Marron', '31.99', 'Henna Hair Dye', 'assets/img/product_marron.jpg', 17, 'Made with all-natural ingredients, Marron is the perfect starter henna for those who want to go red, but aren\'t quite brave enough to take the plunge just yet. Instead, Marron will ease you in gently with the perfect balance of daring red and a modest rich brown all while softening, conditioning and adding glorious shine.', '1. Break your henna into several large pieces in a heat-resistant bowl and add hot water sparingly. Mix until it\'s the consistency of melted chocolate, adding water as necessary. 2. Place your bowl in a saucepan of simmering water to keep it warm while you apply. Ensure henna is cool enough to comfortably touch the skin. Apply Ultrabalm around the hairline and ears to prevent staining. 3. Using rubber gloves, apply the henna to clean dry hair, working in sections from back to front. Start at the roots and smooth through the length of the hair. Note: henna should never be applied to an abraded '),
(44, 'Rouge', '28.75', 'Henna Hair Dye', 'assets/img/product_rouge.jpg', 19, 'For aspiring redheads, Rouge is the reddest of our henna dyes and it’s sure to get you noticed. We blend the finest Persian henna with deep-conditioning fair trade cocoa butter and organic lemon juice to bring out the redness and give hair shine. Those with lighter hair will notice fiery locks, while those with darker hair will be left with a lovely auburn glow.', '1. Break your henna into several large pieces in a heat-resistant bowl and add hot water sparingly. Mix until it\'s the consistency of melted chocolate, adding water as necessary. 2. Place your bowl in a saucepan of simmering water to keep it warm while you apply. Ensure henna is cool enough to comfortably touch the skin. Apply Ultrabalm around the hairline and ears to prevent staining. 3. Using rubber gloves, apply the henna to clean dry hair, working in sections from back to front. Start at the roots and smooth through the length of the hair. Note: henna should never be applied to an abraded scalp, or anywhere near the eye area. 4. Leave the henna on your hair for two to four hours. Cover your hair with cling film for a redder shade, or leave it open to the hair for a darker color. Wash the henna from the hair using warm water, shampoo and conditioner. '),
(45, 'Noir', '27.99', 'Henna Hair Dye', 'assets/img/product_noir.jpg', 15, 'The darkest of our henna blocks, Noir is made from fair trade cocoa butter, the finest Persian henna and deep blue indigo hues to leave hair soft, glossy and deeply conditioned. Those with dark hair will notice a rich blue-black tint throughout, and the more you use it, the more the color intensifies. After the first use, your hair will turn several shades darker, but to truly release your dark side, apply every 4-6 weeks.', '1. Break your henna into several large pieces in a heat-resistant bowl and add hot water sparingly. Mix until it\'s the consistency of melted chocolate, adding water as necessary. 2. Place your bowl in a saucepan of simmering water to keep it warm while you apply. Ensure henna is cool enough to comfortably touch the skin. Apply Ultrabalm around the hairline and ears to prevent staining. 3. Using rubber gloves, apply the henna to clean dry hair, working in sections from back to front. Start at the roots and smooth through the length of the hair. Note: henna should never be applied to an abraded scalp, or anywhere near the eye area. 4. Leave the henna on your hair for two to four hours. Cover your hair with cling film for a redder shade, or leave it open to the hair for a darker color. Wash the henna from the hair using warm water, shampoo and conditioner. '),
(46, 'Inhale', '39.99', 'Fragrance', 'assets/img/product_inhale.jpg', 9, 'Take a meditative stroll through an ancient countryside and fill your lungs with the herbal, leafy scent of the wild. Gorgeous, grassy oakmoss sets the scene for this verdant perfume with notes of warm oakwood and breezy, bittersweet orange blossom. Go on and submit to temptation: you know you want to spritz this deep, dark green scent all over.', 'Spritz directly onto your wrists and neck for an immediate dose of your favorite aroma. '),
(47, 'Karma', '35.99', 'Fragrance', 'assets/img/product_karma.jpg', 16, 'Spicy, citrusy and distinctly unique, Karma is a patchouli, sweet orange and lemongrass perfume that creates a scent that\'s both warm and enticing. It\'s our ode to hippies and head shops, and was inspired heavily by music. Karma has topped our charts since it was launched and we love it so much, we had to create a Karma body lotion, soap, shampoo bar and bubble bar so you can surround yourself in it.', 'Spritz directly onto your wrists and neck for an immediate dose of your favorite aroma. '),
(49, 'Smell Of Weather Turning', '36.99', 'Fragrance', 'assets/img/product_smell_of_weather_turning.jpg', 18, 'Take a leisurely stroll through a meadow after the rains have subsided, and enter a portrait of the countryside painted with perfume materials native to the English wilderness. Fresh, energizing mint develops into sweet, smoky hay on your skin while medicinal chamomile and herbaceous bay create a green bouquet. Sniff as the weather turns, turns, turns.', 'Spritz directly onto your wrists and neck for an immediate dose of your favorite aroma. ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `join_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `firstname`, `lastname`, `company`, `join_date`) VALUES
(5, 'myUserName', '482c811da5d5b4bc6d497ffa98491e38', 'email@myuser.com', 'John', 'Smith', 'Company Name', '2018-04-03 20:57:21'),
(4, 'rviegas', '482c811da5d5b4bc6d497ffa98491e38', 'email@rebeccaviegas.com', 'Rebecca', 'Viegas', 'Durham College', '2018-04-03 20:50:24'),
(6, 'meg_griffin', '482c811da5d5b4bc6d497ffa98491e38', 'email@familyguy.ca', 'meg', 'griffin', 'family guy', '2018-04-06 17:10:04'),
(7, 'cheff', 'd829b843a6550a947e82f2f38ed6b7a7', 'cheff@gmail.com', 'carrie', 'heffernan', 'king of queens', '2018-04-11 20:29:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
