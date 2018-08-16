-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2018 at 02:46 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `description` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_article_category` (`category_id`),
  KEY `fk_article_user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `text`, `created_at`, `updated_at`, `category_id`, `user_id`, `description`) VALUES
(18, 'Turkish President Erdogan Vows Action Against ‘Economic Terrorists’ Over Lira Currency Plunge', '<p><img alt=\"\" src=\"https://img.huffingtonpost.com/asset/5b720ea6200000420034a442.jpeg?ops=scalefit_720_noupscale\" style=\"height:479px; width:720px\" /></p>\r\n\r\n<p>NKARA (Reuters) - President Tayyip Erdogan on Monday accused &ldquo;economic terrorists&rdquo; of plotting to harm Turkey by spreading false reports and said they would face the full force of the law, as authorities launched investigations of those suspected of involvement.</p>\r\n\r\n<p>The lira currency, which has lost more than 40 percent against the U.S. dollar this year, pulled back from a record low of 7.24 earlier on Monday after the central bank pledged to provide liquidity, but it remained under selling pressure and its meltdown continued to rattle global markets.</p>\r\n\r\n<p>&ldquo;There are economic terrorists on social media,&rdquo; Erdogan told a gathering of Turkish ambassadors at the presidential palace in Ankara, adding that the judiciary and financial authorities were taking action in response.</p>\r\n\r\n<p>&ldquo;They are truly a network of treason,&rdquo; he added. &ldquo;We will not give them the time of day... We will make those spreading speculations pay the necessary price&rdquo;.</p>\r\n\r\n<p>Erdogan, who gained sweeping new powers following his re-election in June, said rumors had been spread that authorities might impose capital controls in response to the slump in the currency, which tumbled as much as 18 percent on Friday alone.</p>\r\n\r\n<p>The interior ministry said it had so far identified 346 social media accounts carrying posts about the exchange rate that it said created a negative perception of the economy. It said it would take legal measures against them but did not say what these would be.</p>\r\n\r\n<p>Separately, the Istanbul and Ankara prosecutor&rsquo;s offices launched investigations into individuals suspected of being involved in actions that threaten Turkey&rsquo;s economic security, broadcaster CNN Turk and state news agency Anadolu reported.</p>\r\n\r\n<p><img alt=\"\" src=\"https://img.huffingtonpost.com/asset/5b720eca200000430034a443.jpeg?ops=scalefit_720_noupscale\" /></p>\r\n\r\n<p>Turkey&rsquo;s Capital Markets Board (SPK) and financial crime board have also said they would take legal steps against those who spread misinformation about financial institutions and firms, or reports that the government would seize foreign-currency deposits.</p>\r\n\r\n<p>Earlier on Monday, Finance Minister Berat Albayrak, who is also Erdogan&rsquo;s son-in-law, said Turkey would start rolling out an economic action plan on Monday.</p>\r\n\r\n<p>Albayrak stressed the importance of budget discipline, and ruled out any seizure or conversion of dollar-denominated bank deposits into lira.</p>\r\n\r\n<p>Economists say the lira&rsquo;s fall is due to worries about Erdogan&rsquo;s influence over the economy, his repeated calls for lower interest rates, and worsening ties with the United States over the detention of a Christian pastor and other disputes.</p>\r\n\r\n<p>Erdogan reiterated on Monday his view that the currency&rsquo;s crash had no economic basis, saying that U.S. sanctions imposed on Turkey over the terrorism trial of the pastor, Andrew Brunson, represented a &ldquo;stab in the back&rdquo; by a NATO ally.</p>\r\n\r\n<p>The lira stood at 6.89 against the U.S. dollar at 1511 GMT - after Erdogan&rsquo;s comments - up from a record low of 7.24 to the dollar reached in early Monday trade.</p>\r\n', '2018-08-14 06:43:24', '2018-08-14 06:43:24', 3, 3, '“There are economic terrorists on social media,” Turkish President Erdogan said.'),
(19, 'Local Fisherman And Tourist Killed In Kenya Hippo Attacks', '<p><img alt=\"\" src=\"https://img.huffingtonpost.com/asset/5b70cb411900001d03501aa0.jpeg?cache=jylxuikz1z&amp;ops=620_349\" style=\"height:349px; width:620px\" /></p>\r\n\r\n<p>A local fisherman and a Chinese tourist were killed in a single day by hippo attacks in Kenya&rsquo;s Rift Valley, authorities reported.</p>\r\n\r\n<p>Tourist Chang Ming Chuang, 66, was fatally bitten Saturday evening as he was taking photos of hippos near Lake Naivasha, said a statement by the Kenyan Wildlife Service.</p>\r\n\r\n<p>A witness told The Star of Kenya that Chang moved too close to the animal, which suddenly turned on him and <a href=\"https://www.the-star.co.ke/news/2018/08/12/hippo-kills-chinese-tourist-while-taking-photos-at-lake-naivasha_c1801443\" target=\"_blank\">snapped at his chest</a>.</p>\r\n\r\n<p>Chang&rsquo;s companion, Wu Peng Te, 62, was also attacked, but he only suffered bruises and was treated at a local hospital and released.</p>\r\n\r\n<p>The maulings occurred hours after the fisherman was attacked just miles away in the same area, said officials.</p>\r\n\r\n<p>The fisherman was also bitten on the chest. &ldquo;His <a href=\"https://www.news.com.au/travel/travel-updates/incidents/two-people-mauled-to-death-by-hippos-in-separate-kenya-attacks/news-story/a52463de54bbc1b6ffdf3002fa3076e2\">injuries were serious</a> and he died minutes after he was retrieved from the lake,&rdquo; Rift Valley criminal investigations chief Gideon Kibunja told The Associated Press.</p>\r\n\r\n<p>Different hippos were responsible for the two attacks, according to officials. There have now been six fatal hippo attacks at Lake Naivasha this year.</p>\r\n\r\n<p>A boat association owner told the Star that hippos are a particular danger now because high waters have <a href=\"https://www.the-star.co.ke/news/2018/08/12/hippo-kills-chinese-tourist-while-taking-photos-at-lake-naivasha_c1801443\">forced the animals into new pasture areas</a> bringing them closer to humans.</p>\r\n\r\n<p>Hippos and lone water buffalo pose the highest risk to people in the area.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2018-08-14 06:47:24', '2018-08-14 06:47:24', 3, 3, 'The men were bitten in the chest by different hippos in the same area, according to officials.'),
(20, 'How To Keep Your White Shoes White This Summer', '<p><img alt=\"\" src=\"https://img.huffingtonpost.com/asset/5b61bbd71900002a00c6b519.jpeg?cache=jyx5qtzxgb&amp;ops=530_298\" /></p>\r\n\r\n<p>We love a pair of fresh white sneakers,&nbsp;but keeping them clean sometimes seems like an impossible task.</p>\r\n\r\n<p>Of course, it&rsquo;s not.&nbsp;White shoes are bound to get dirty. Luckily, though, there are plenty of things you can do to keep yours looking new.</p>\r\n\r\n<p>Folks on Reddit are fans of two specific brands of cleaning products that we mention below,&nbsp;both of which offer a range of products to protect shoes and keep them clean. But there are also plenty of do-it-yourself methods using supplies you likely already have.&nbsp;</p>\r\n\r\n<p>Below, check out seven methods for keeping your white shoes white:</p>\r\n\r\n<ol>\r\n	<li>Use a shoe protector like Crep Protect.<br />\r\n	&nbsp;<iframe width=\"1206\" height=\"678\" src=\"https://www.youtube.com/embed/J-kNDdqIIdM\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe></li>\r\n</ol>\r\n', '2018-08-14 06:55:24', '2018-08-14 06:55:24', 5, 4, 'Say goodbye to your sneaker stains.'),
(21, 'Here’s Why Portugal Is All Over Your Instagram Feed', '<p><img alt=\"\" src=\"https://img.huffingtonpost.com/asset/5b6c7bb91900002b01501823.jpeg?ops=scalefit_720_noupscale\" style=\"height:478px; width:720px\" /></p>\r\n\r\n<p>It&rsquo;s summertime, so we&rsquo;re deep in vacation mode, with many people getting away from their routines back home. And there&rsquo;s one destination in Europe where many vacationers have recently been flocking.</p>\r\n\r\n<p>If you follow any travel-savvy people (and even just regular friends) on Instagram, you&rsquo;ve probably noticed they&rsquo;ve posted stunning photos from <a href=\"https://www.huffingtonpost.com/entry/portugal-travel_us_585c1ab6e4b0d9a594577b5c\" rel=\"noopener noreferrer\" target=\"_blank\">Portugal</a>&nbsp;in the last few years, especially during peak summer months.&nbsp;</p>\r\n\r\n<p>Mario Fernandes, a co-creator and the editor of <a href=\"https://www.golisbon.com/\" rel=\"noopener noreferrer\" target=\"_blank\">GoLisbon</a>&nbsp;(named for Portugal&rsquo;s capital), told HuffPost he has seen increased interest in traveling to Portugal in the past five years, particularly in the last two or three. Cindy Goldberger, a travel adviser for&nbsp;<a href=\"http://www.hiatustravel.com/\" rel=\"noopener noreferrer\" target=\"_blank\">Hiatus</a>, an agency in Brooklyn, New York, said that she noticed a boost in Portugal trips about three years ago and that she gets more requests to plan people&rsquo;s visits there every year. According to Reuters, the number of foreign tourists visiting Portugal&nbsp;<a href=\"https://www.reuters.com/article/us-portugal-tourism/portugal-tourist-arrivals-spike-12-percent-to-new-record-in-2017-idUSKCN1FY1S9\" rel=\"noopener noreferrer\" target=\"_blank\">hit a record</a>&nbsp;for 2017, the same year the country <a href=\"https://www.visitportugal.com/en/node/351905\" rel=\"noopener noreferrer\" target=\"_blank\">won world&rsquo;s leading destination</a> at the World Travel Awards.</p>\r\n\r\n<p>So what is it about this country that makes it so appealing? Fernandes suggested it&rsquo;s because Portugal is safe (it was voted <a href=\"https://www.businessinsider.com/safest-countries-in-the-world-2018-6#5-denmark-1353-27\" rel=\"noopener noreferrer\" target=\"_blank\">the fourth-safest country</a>&nbsp;this year by the Institute for Economics and Peace) and more affordable than many other Western European countries. But prices are increasing, he noted. The country&rsquo;s frequent sunshine is also attractive to many visitors, and there are plenty of things to do.&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://img.huffingtonpost.com/asset/5b6c78e62000009f00379581.jpeg?ops=scalefit_720_noupscale\" style=\"height:478px; width:720px\" /></p>\r\n\r\n<p>&ldquo;It&rsquo;s usually sunny throughout the year, and temperatures are rarely too cold or too hot,&rdquo; he said. &ldquo;[Lisbon is] now seen as one of Europe&rsquo;s trendiest cities, and word has spread that it&rsquo;s a very authentic place with unique features, such as the tiled facades, the mosaic sidewalks, the hilltop viewpoints and the nightlife lived on the streets.&rdquo;</p>\r\n\r\n<p>Goldberger noted that many airlines have offered better routes to the country in recent years, making it more accessible. She&rsquo;s also a fan of the new hotels that have opened, including boutique-style properties and farms that have been converted to hotels.</p>\r\n\r\n<p>&ldquo;You have these really beautiful hotels that have popped up all over Portugal ― luxury and even moderately priced hotels. It&rsquo;s one of the more affordable destinations in Europe, so that definitely attracts tourists of all types,&rdquo; she said. &ldquo;The beauty of Portugal is that there are hotels that have a real sense of place.&rdquo;</p>\r\n\r\n<p><img alt=\"\" src=\"https://img.huffingtonpost.com/asset/5b6c776d200000dd0237957f.jpeg?ops=scalefit_720_noupscale\" style=\"height:960px; width:720px\" /></p>\r\n\r\n<p>Eric Hrubant, the president of <a href=\"https://ciretravel.com/\" rel=\"noopener noreferrer\" target=\"_blank\">Cire Travel</a>, echoed those sentiments about Portugal and noted that travelers can explore a lot in the cities and do a variety of activities even during short trips.&nbsp;</p>\r\n\r\n<p>&ldquo;It&rsquo;s a small country, yet you have cities with rich history, culture and food, as well as a lot of beach and golfing options,&rdquo; he said. &ldquo;In five to 10 days, you can have a vacation or honeymoon that caters to all of your senses and desires.&rdquo;</p>\r\n\r\n<p>Hrubant pointed out that celebrities <a href=\"https://www.huffingtonpost.com/entry/madonna-donald-trump-portugal_us_5b62a38fe4b0de86f49dedd9\" rel=\"noopener noreferrer\" target=\"_blank\">like Madonna</a> and newlyweds Michael Fassbender and Alicia Vikander have moved to Portugal, which has put the country on more people&rsquo;s radar.</p>\r\n\r\n<p>Along with the increase in tourism, Fernandes said that Portugal has become &ldquo;quite popular&rdquo; on Instagram and other social media platforms, since the country is a &ldquo;very picturesque and photogenic place.&rdquo; Larissa D&rsquo;Sa, a <a href=\"https://www.youtube.com/user/larsadsa/featured\" rel=\"noopener noreferrer\" target=\"_blank\">lifestyle and travel vlogger</a> based in Mumbai, India, told HuffPost that Portugal is &ldquo;one of the most photogenic countries&rdquo; she has ever visited.</p>\r\n', '2018-08-14 07:00:56', '2018-08-14 07:00:56', 4, 4, 'The photos speak for themselves, but we turned to experts to learn more.'),
(22, 'This One-Pan Pasta Recipe Is Flawless In Less Than 30 Minutes', '<p><img alt=\"\" src=\"https://img.huffingtonpost.com/asset/5b6b30dc200000dd023793ee.jpeg?ops=scalefit_720_noupscale\" style=\"height:539px; width:720px\" /></p>\r\n\r\n<p>Weeknight dinners can sometimes be the bane of my existence. With a full-time job, finding the energy to cook at the end of a long day can be enough of a struggle. Add on the exhaustion of prep, plus the awareness that I&rsquo;m going to have to wash dishes, and I&rsquo;ve already opened the Seamless app. However, all that changed when I discovered the magical world of <a href=\"https://www.huffingtonpost.com/2015/02/20/easy-one-pot-pasta-recipe_n_6712998.html\" rel=\"noopener noreferrer\" target=\"_blank\">one-pan pasta</a>.</p>\r\n\r\n<p>What does that entail? Well, like its name suggests, you&rsquo;ll only need a deep 12-inch saut&eacute; pan to cook up this dish. And while I&rsquo;m offering you a recipe, the real takeaway from this is an equation for an infinite number of noodle combinations.</p>\r\n\r\n<p>The first step is blooming the aromatics. That means heating up a healthy glug of olive oil (or butter) with garlic, sliced chiles or hearty herbs. Once your aromatics are infused and golden, it&rsquo;s time for the liquid.</p>\r\n\r\n<p>Since I wanted this dish to be pantry-staple heavy, the base ingredients of this recipe are one quart of chicken stock and one cup of water to one pound of dried spaghetti, all thrown on the stove (you can use vegetable stock if you&rsquo;re vegetarian). By the time the pasta is al dente, the liquid will have reduced down into a glossy, creamy sauce.</p>\r\n\r\n<p>Now&rsquo;s the fun part, when you get to use up whatever random stuff you have lying around in your fridge. I&rsquo;m talking about throwing in all that leftover chicken, that sad handful of cherry tomatoes or that half-empty jar of capers that&rsquo;s been sitting on the shelf for months. And whether it&rsquo;s Parm, pecorino or any other firm cheese, you&rsquo;d better believe I&rsquo;m going to grate up a pile and throw it in.</p>\r\n\r\n<p>The possibilities are as endless as the strange melange of scraps you can wrangle together. But more importantly, the base of this recipe is made completely out of items you probably already have on hand. So do yourself a favor and say no to takeout tonight: An easy weeknight meal is less than 30 minutes away.</p>\r\n\r\n<p><img alt=\"\" src=\"https://img.huffingtonpost.com/asset/5b6b3106200000dd023793ef.jpeg?ops=scalefit_720_noupscale\" style=\"height:540px; width:720px\" /></p>\r\n\r\n<p><strong>One-Pan Garlic Pasta with Cherry Tomatoes</strong></p>\r\n\r\n<p><em>Yield: 4 to 6 servings</em><br />\r\n<em>Prep Time: 10 minutes</em><br />\r\n<em>Cook Time: 15 minutes</em><br />\r\n<em>Total Time: 25 minutes</em></p>\r\n\r\n<ul>\r\n	<li>1/4 cup olive oil</li>\r\n	<li>6 garlic cloves, thinly sliced</li>\r\n	<li>1/4 teaspoon red pepper flakes</li>\r\n	<li>4 cups chicken stock</li>\r\n	<li>1 cup water</li>\r\n	<li>1 pound spaghetti</li>\r\n	<li>1 cup cherry tomatoes, halved</li>\r\n	<li>1 1/2 cups grated Parmesan</li>\r\n	<li>Kosher salt, to taste</li>\r\n</ul>\r\n\r\n<ol>\r\n	<li>In a 12-inch high-sided skillet, heat the oil over medium heat with garlic. Cook until the garlic is lightly golden, 1 to 2 minutes, then add the pepper flakes.</li>\r\n	<li>Pour in the chicken stock and water, then add the spaghetti. Raise the heat to medium-high. Cook, adding the cherry tomatoes after 10 minutes until the stock has reduced into a sauce and the pasta is al dente, 14 to 16 minutes.</li>\r\n	<li>Stir in the Parmesan, then adjust seasoning with salt. Divide between bowls and garnish with more grated Parm, then serve.</li>\r\n</ol>\r\n', '2018-08-14 07:13:51', '2018-08-14 07:13:51', 6, 4, 'And it uses ingredients that you’ve probably got in your pantry.'),
(23, 'Are Car Subscription Services Like Fair and Flexdrive Worth It?', '<p><img alt=\"\" src=\"https://img.huffingtonpost.com/asset/5b6b542f19000014035016e0.jpeg?ops=620_349\" style=\"height:349px; width:620px\" /></p>\r\n\r\n<p>Unless you live under a rock, you probably subscribe to at least a handful of subscription services such as <a href=\"https://www.huffingtonpost.com/topic/netflix\">Netflix</a>, <a href=\"https://www.huffingtonpost.com/entry/is-amazon-prime-worth-it_us_5b3a4e3de4b05127cceaf1dc\">Amazon Prime</a>, <a href=\"https://www.huffingtonpost.com/entry/stitchfix-review_n_6140226?m=false\">Stitch Fix</a> or <a href=\"https://www.huffingtonpost.com/entry/i-gave-barkbox-a-try-heres-what-i-think_us_59a1f321e4b0cb7715bfd645\">BarkBox</a>.</p>\r\n\r\n<p>And what&rsquo;s not to love? Subscriptions let you have everything you could ever need ― from video content to clothes ― delivered to your home without ever having to interact with an actual human. They&rsquo;re fast, they&rsquo;re easy, and now they&rsquo;re available to drivers, too.</p>\r\n\r\n<p><a href=\"https://www.huffingtonpost.com/topic/cars\">Car</a> subscription services, which essentially act as short-term <a href=\"https://www.huffingtonpost.com/entry/should-you-lease-or-buy-a-car_us_58c2e2c6e4b0a797c1d39c06\" rel=\"noopener noreferrer\" target=\"_blank\">leases</a>, allow just about anyone with a clean driving record, good credit and a smartphone to hop into the car of their choice for a monthly fee and no long-term commitment. Even better, costs such as maintenance and roadside assistance, and often even insurance, are also included in the membership fee.</p>\r\n\r\n<p>Intrigued? Here&rsquo;s a closer look at how these services work.</p>\r\n\r\n<p>Taking The Pain Out Of Car Buying</p>\r\n\r\n<p>When you consider all the pain points associated with traditional <a href=\"https://www.huffingtonpost.com/topic/car-buying\">car buying</a> and leasing, it makes sense that things have progressed toward app-based services.</p>\r\n\r\n<p>&ldquo;I think that a lot of people will just want to know what the total cost is,&rdquo; said Brian Moody, executive editor of <a href=\"https://www.autotrader.com/\">Autotrader</a>, which is owned by the same company that owns subscription service <a href=\"https://www.flexdrive.com/\" rel=\"noopener noreferrer\" target=\"_blank\">Flexdrive</a>. For example, if you see a car lease advertised at $199 a month, that figure doesn&rsquo;t include maintenance, insurance and other costs associated with driving the vehicle.</p>\r\n\r\n<p>&ldquo;Imagine if you were subscribed to Netflix for $9 a month, but later if you find out that if you want it to work really well, that&rsquo;s $9.50. And if you want Disney movies, that&rsquo;s $10,&rdquo; said Moody. &ldquo;People don&rsquo;t really want all these perceived tricks.&rdquo;</p>\r\n\r\n<p>Plus, buying or leasing means you&rsquo;re locked into driving that same car for at least a few years. What if that zippy coupe no longer makes sense when you start a family? Or you get a new job in a non-car-friendly city like New York?</p>\r\n\r\n<p>Today&rsquo;s generation of drivers simply want to know the bottom line when it comes to their cars, without having to deal with auto shops, dealerships or insurance agents. And they don&rsquo;t want to be on the hook for years to come.</p>\r\n\r\n<p>So it probably comes as no surprise that, according to Moody, the ideal customers of car subscription services are financially well-off young adults who are more interested in saving time and eliminating hassle from their lives than pinching pennies.</p>\r\n\r\n<p>&ldquo;You&rsquo;re probably going to pay more for the service in the long run,&rdquo; he said.</p>\r\n\r\n<p>But how much more, exactly? That depends pretty heavily on which service you choose. So far, car subscriptions are available through third-party companies that offer a range of brands, as well as through certain car manufacturers themselves. The latter tends to be the pricier option, but both have pros and cons.</p>\r\n\r\n<p>Third-Party Car Subscription Apps</p>\r\n\r\n<p>For more cost-conscious drivers who want to try out different types of vehicles from various brands, third-party car subscription apps ― as opposed to subscribing directly from an automaker itself ― can be a good option. &ldquo;They&rsquo;re not [for] car enthusiasts,&rdquo; said Moody. Rather, these often pre-owned vehicles serve as hassle-free tools to get from point A to B.&nbsp;</p>\r\n\r\n<p>If that sounds like you, you might want to give one of these apps a try.</p>\r\n\r\n<p><a href=\"https://joinborrow.com/\"><strong>Borrow</strong></a></p>\r\n\r\n<p><img alt=\"\" src=\"https://img.huffingtonpost.com/asset/5b6c672c190000140350180d.png?ops=scalefit_720_noupscale\" style=\"height:356px; width:720px\" /></p>\r\n\r\n<p>Borrow is the only car subscription service that focuses on electric cars. Users can choose from terms of three, six or 12 months and two membership tiers; the City tier includes the Fiat 500e and Nissan Leaf, while the Premium tier includes the BMW i3 and VW e-Golf. Coming soon is the Platinum membership, which will put drivers behind the wheel of a Tesla model S. It&rsquo;s possible to request certain trims or colors, but that might mean waiting longer to get the car.</p>\r\n\r\n<p>The least expensive Borrow plan starts at $399 per month; the longer the term, the lower the cost. Drivers must reserve cars with a $25 deposit that is applied to the first month&rsquo;s payment. Included in the membership fee is regular maintenance, roadside assistance and a few other perks. However, unlike most other car subscription services, insurance is not included. But if you don&rsquo;t already have a policy, Borrow will help you get one.</p>\r\n\r\n<p>Right now, Borrow is only available in Los Angeles, but founder and CEO Rodrigo de Guzman said he hopes to expand to a new market such as San Francisco or Portland in the near future.</p>\r\n', '2018-08-14 07:19:59', '2018-08-14 07:21:17', 9, 5, 'Even Cadillac and Volvo are jumping on the trend ― for a hefty monthly fee.'),
(24, 'You May Be Pronouncing The Name Of Nintendo’s Original System All Wrong', '<p><img alt=\"\" src=\"https://img.huffingtonpost.com/asset/5b71af5c2000007a03379970.jpeg?ops=620_349\" style=\"height:349px; width:620px\" /></p>\r\n\r\n<p>There hasn&rsquo;t been a pronunciation debate this hot since the GIF-Jiff wars.&nbsp;</p>\r\n\r\n<p>After all these years, we may have been living an eight-bit lie regarding your Nintendo. Is the name of the original Nintendo Entertainment System, or NES, pronounced &ldquo;N-E-S&rdquo; or &ldquo;Ness&rdquo;?</p>\r\n\r\n<p>A recent tweet by gamer Kyle McLain reveals that within the Japanese version of the game &ldquo;Wario Ware Gold&rdquo; for Nintendo&rsquo;s current 3DS system, Nintendo refers to NES as &ldquo;Ness.&rdquo;</p>\r\n\r\n<p>In the museum section of the Japanese version of Wario Ware Gold, you can unlock some slides showcasing the Famicom. Also included is a picture of the NES. Within the description, Nintendo themselves says that &ldquo;NES&rdquo; is pronounced &ldquo;Ness&rdquo;. <a href=\"https://t.co/Vg5JjXgJgy\">pic.twitter.com/Vg5JjXgJgy</a></p>\r\n\r\n<p>&mdash; Kyle McLain (@FarmboyinJapan) <a href=\"https://twitter.com/FarmboyinJapan/status/1025315977754365952?ref_src=twsrc%5Etfw\">August 3, 2018</a></p>\r\n\r\n<p>But it&rsquo;s not quite settled. Nerdist&rsquo;s Jessica Chobot explains in the video above that Nintendo has also produced ads that refer to the gaming system as the &ldquo;N-E-S.&rdquo;</p>\r\n\r\n<p>&ldquo;Kirby&rsquo;s Adventure Only on N E S&rdquo;<a href=\"https://t.co/B3xII0LGih\">https://t.co/B3xII0LGih</a></p>\r\n\r\n<p>&mdash; Leo (@LeoTheCollector) <a href=\"https://twitter.com/LeoTheCollector/status/1025479430188269575?ref_src=twsrc%5Etfw\">August 3, 2018</a></p>\r\n\r\n<p>It&rsquo;s unclear what this will mean for the future of the human race, but one thing is certain: The internet has an awful lot of time on its hands.</p>\r\n', '2018-08-14 08:30:39', '2018-08-14 08:31:29', 8, 5, 'Is it “N-E-S” or “Ness”?'),
(25, ' The Truth About What It’s Like To Live In A Tiny Home', '<p><img alt=\"\" src=\"https://img.huffingtonpost.com/asset/5b6dd736200000dd02379718.jpeg?ops=scalefit_720_noupscale\" style=\"height:540px; width:720px\" /></p>\r\n\r\n<p>I didn&rsquo;t choose to live tiny. Tiny living chose me. Seven years ago, during the most brutal year of my life, I was knocked on my rear by an onslaught of life-changing circumstances: divorce at 50, laid off from my job, losing my house and downsizing into an apartment that was one-quarter the size of my home. With the help of family and friends, I emptied my house and donated half of my stuff.</p>\r\n\r\n<p>Settling into my new, tiny life with no house to tend, I had time to try new experiences. I started paddling on a women&rsquo;s dragon boat team, the Mighty Women. It tested my physical limits and emboldened me to challenge myself more. I tried belly dancing, sang karaoke, skated in roller derby tryouts and even jumped into online dating. Eventually, I met a mountain man who lived in rural Eastern Oregon 300 miles from my city home. We shared a sense of adventure, and when we got together, we had fun &mdash; from swing dancing to backpacking into the Elkhorn Range to camp among mountain goats.</p>\r\n\r\n<p>My new job as a newspaper reporter was satisfying work, but it paid so much less than my previous job that it was financially devastating. In the quest for safe, affordable housing in the city, I moved five times in two years. With each move, I jettisoned more stuff.</p>\r\n\r\n<p>Many people dream of the simplicity of living in a tiny home, but until you&rsquo;re living tiny, you don&rsquo;t realize how it will impact your life daily.</p>\r\n\r\n<p>By now, Mountain Man and I had been dating long distance for a few years. He asked me to continue my tiny living adventure by moving into a camp trailer on a remote ranch to be with him. I&rsquo;d wanted to pursue freelance writing and can do that from anywhere. Plus,&nbsp;I&rsquo;d already downsized from 2,400 to 600 square feet. How hard would it be for two people to live in 323 square feet on an isolated ranch that&rsquo;s 27 miles from town?</p>\r\n\r\n<p>Here&rsquo;s the skinny on living in a tiny home. Everything is tiny: refrigerator, oven, kitchen cabinets, countertops, shower, toilet, closets and floor space. This is my biggest challenge.</p>\r\n\r\n<p>Shortly after moving into our tiny home, I was determined to continue my exercise regimen despite the cramped quarters. I grasped my weighted hula hoop and planted my feet so I stood an equal distance from the room&rsquo;s obstacles: loveseat, recliner, dining table and kitchen island. I began gyrating my hips, and the hoop twirled.&nbsp;But when I moved my right foot one inch, the hoop bumped into the island, crashed to the floor and abruptly ended my workout. Exercising outdoors was not an option, because it was winter, 14 degrees and snowing. Many people dream of the simplicity of living in a tiny home, but until you&rsquo;re living tiny, you don&rsquo;t realize how it will impact your life daily.</p>\r\n\r\n<p><img alt=\"\" src=\"https://img.huffingtonpost.com/asset/5b6de1251900001403501993.jpeg?ops=scalefit_720_noupscale\" /></p>\r\n\r\n<p>We&rsquo;ve had to adjust every inch of our kitchen. Our dinner plates don&rsquo;t fit, so we use salad plates. We have six coffee mugs and glasses, a few pots and pans and seven forks, knives and spoons. We made space for the popcorn air popper, but we stored the blender. Living tiny means making choices.</p>\r\n\r\n<p>Our tiny refrigerator works for camping,&nbsp;it but isn&rsquo;t ideal for full-time living. We buy minuscule condiments and skinny half-gallon cartons of milk. Today it&rsquo;s 103 degrees, but there&rsquo;s no space to chill a jug of iced tea. Instead, I make single-serving tea in a mason jar that fits in the fridge. When you live tiny, you learn to improvise. &nbsp;</p>\r\n\r\n<p>I like baking, but the oven is too small for most cookie sheets. It takes the flexibility of a yoga master to light the pilot light while kneeling between the stove and island with my head in the oven. &nbsp;</p>\r\n\r\n<p>I also used to enjoy the occasional, relaxing soak in a bubble bath, but we don&rsquo;t have a bathtub, and our utilitarian shower is not a pampering experience. Our toilet is squeezed into a closet that measures 30 by 36 inches. When I had the flu, I learned there&rsquo;s no space to kneel in front of the toilet, so I ran outside and threw up into a snowbank.&nbsp;</p>\r\n\r\n<p>Even my longtime habits of sitting in bed to write in the morning or read in the evening had to change. Because our bed platform is raised and our ceiling is low, I can&rsquo;t sit up in bed. This definitely has resulted in us getting creative in our lovemaking.&nbsp;&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://img.huffingtonpost.com/asset/5b6de5832000002d0034a1cd.jpeg?ops=scalefit_720_noupscale\" style=\"height:540px; width:720px\" /></p>\r\n\r\n<p>Other ways living tiny has changed the way I live? My closet is just under four feet wide and has space for one hanging shoe bag. I&rsquo;m no clothes horse, but the lack of closet space has been tough.</p>\r\n\r\n<p>Tiny living and entertaining also don&rsquo;t mix well. When we hosted a dinner for seven people, we were elbow to elbow. We had exactly seven forks, but only six glasses, so one couple shared.</p>\r\n\r\n<p>Living in a tiny house is challenging, particularly if one person (me) is messier than the other. Even a few unwashed dishes or a stack of junk mail gets in the way. It&rsquo;s vital to minimize the clutter by continually tidying up.&nbsp;</p>\r\n\r\n<p>Tiny living has some advantages. Cleaning the house takes minutes, and that makes more time for our adventures. However, lacking a broom closet, we keep the vacuum in the storage unit outside. That&rsquo;s inconvenient in the summer, but a challenge in the winter when snowdrifts and ice block the storage door.</p>\r\n\r\n<p>Although I initially didn&rsquo;t choose tiny living, I have embraced it. I&rsquo;ve adjusted my expectations and learned to live with less. At times, I&rsquo;ve gone without a dishwasher, freezer, closets, and for three months, I even lived without the convenience of heat, running water and a toilet. Living tiny has taught me that I don&rsquo;t need as much as I once believed I did.</p>\r\n', '2018-08-14 08:45:48', '2018-08-14 08:45:48', 10, 4, ''),
(26, 'Man Arrested After Car Crashes Into Barrier Outside UK Parliament', '<p><img alt=\"\" src=\"https://img.huffingtonpost.com/asset/5b728ae72000002d0034a49f.jpeg?cache=apfxeonvt1&amp;ops=432_243,quality_75\" style=\"height:243px; width:432px\" /></p>\r\n\r\n<p>LONDON ― Police arrested a man Monday morning after a car crashed into security barriers located outside the city&rsquo;s Houses of Parliament, the Metropolitan Police <a href=\"https://twitter.com/metpoliceuk/status/1029262404100792320\" rel=\"noopener noreferrer\" target=\"_blank\">said</a>.</p>\r\n\r\n<p>Several pedestrians were injured, but police didn&rsquo;t <a href=\"https://twitter.com/metpoliceuk/status/1029271135144300546\" rel=\"noopener noreferrer\" target=\"_blank\">believe</a> anyone was in a life-threatening condition. Three ambulance crews and a number of responders treated two people at the scene for injuries not believed to be serious, London Ambulance assistant director of operations Peter Rhodes said in a <a href=\"https://twitter.com/Ldn_Ambulance/status/1029277885662515201\" rel=\"noopener noreferrer\" target=\"_blank\">statement</a>. They were later taken to a hospital.&nbsp;</p>\r\n\r\n<p>Streets in the area were cordoned off as police rushed to the scene, <a href=\"https://twitter.com/vinnymcav/status/1029257297858633728?s=12\" rel=\"noopener noreferrer\" target=\"_blank\">eyewitness video showed</a>. The nearby Westminster Underground station was closed.</p>\r\n\r\n<p><img alt=\"\" src=\"https://img.huffingtonpost.com/asset/5b7282052000007a03379a09.png?cache=ysy5fhyi1l&amp;ops=crop_79_4_1680_1246,scalefit_720_noupscale\" style=\"height:534px; width:720px\" /></p>\r\n\r\n<p>&ldquo;I think it looked intentional &ndash; the car drove at speed and towards the barriers,&rdquo; eyewitness Ewalina Ochab told the Press Association.&nbsp;&ldquo;I was walking on the other side [of the road]. I heard some noise and someone screamed. I turned around and I saw a silver car driving very fast close to the railings, maybe even on the pavement.&rdquo;</p>\r\n\r\n<p>The incident began at around 7:37 a.m. BST.&nbsp;</p>\r\n\r\n<p>Added security was installed outside of Parliament last year after a man mowed down pedestrians in Westminster, killing four, and then&nbsp;<a href=\"https://www.telegraph.co.uk/news/2017/03/23/london-attack-mps-warned-last-month-parliaments-security-weak/\" rel=\"noopener noreferrer\" target=\"_blank\">stabbed a police officer to death</a>. The attacker, Khalid Masood, was shot dead by police.</p>\r\n\r\n<p><img alt=\"\" src=\"https://img.huffingtonpost.com/asset/5b728ead2000002c0034a4a2.jpeg?ops=scalefit_720_noupscale\" /></p>\r\n', '2018-08-14 08:52:07', '2018-08-14 08:52:07', 3, 5, 'Several pedestrians were injured.'),
(27, 'Big Retailers Don’t Want You To Know How Much Their Stores Earn From Food Stamps', '<p><img alt=\"\" src=\"https://img.huffingtonpost.com/asset/5b71d7931900001d03501bc6.jpeg?ops=scalefit_720_noupscale\" style=\"height:480px; width:720px\" /></p>\r\n\r\n<p>A local newspaper wants to know exactly how much money retail stores earn from food stamp transactions, and the retail food industry is fighting the disclosure all the way to the Supreme Court.</p>\r\n\r\n<p>Last week, Justice Neil Gorsuch temporarily stayed a lower court&rsquo;s order requiring the government to cough up the data. Now grocers have a chance to try to convince the Supreme Court to take the case.</p>\r\n\r\n<p>The Supplemental Nutrition Assistance Program is the federal government&rsquo;s most responsive economic safety net, giving 40 million Americans a monthly food allowance that can only be spent at food stores and farmers markets. The program dishes out $60 billion in benefits annually, which amounts to a significant portion of retail stores&rsquo; income.</p>\r\n\r\n<p>Throughout the program&rsquo;s history, politicians and news reporters have obsessed over what people purchase with their benefits. In the 1970s, President Ronald Reagan speechified about &ldquo;strapping young bucks&rdquo; buying T-bone steaks, a fist-shaking tradition <a href=\"https://www.huffingtonpost.com/2013/07/01/food-stamps-resentment_n_3518821.html\">Republicans have continued</a>&nbsp;to this day. The benefits used to be distributed on actual stamps but now go on debit cards that are still highly visible in checkout lines.</p>\r\n\r\n<p>The legal case is more about who is selling the food than what the beneficiaries are buying. The Argus Leader, a newspaper in Sioux Falls, South Dakota, filed a records request for store-level SNAP spending data in 2011. When the U.S. Department of Agriculture, which administers the program, didn&rsquo;t hand over the details, the paper sued. &nbsp;</p>\r\n\r\n<p>&ldquo;Taxpayers need to know where their money is spent,&rdquo; Cory Myers, the Argus Leader&rsquo;s news director, <a href=\"https://www.argusleader.com/story/news/2018/05/08/court-government-must-release-food-stamp-sales-data/590132002/\">said earlier this year</a>. &ldquo;This information has importance beyond South Dakota as SNAP is one of the nation&rsquo;s biggest safety net programs.&rdquo;&nbsp;</p>\r\n\r\n<p>The USDA already provides some detail about where food stamps go. Half of all benefits were spent at superstores like Walmart in 2017. Nearly 30 percent were used at supermarkets like Safeway. More than 258,000 firms were authorized to accept SNAP benefits that year. The USDA has also put out <a href=\"https://www.fns.usda.gov/snap/foods-typically-purchased-supplemental-nutrition-assistance-program-snap-households\">detailed information about what people buy</a>. &nbsp;</p>\r\n\r\n<p>The Argus Leader wants to know exactly how much was spent and at exactly which stores. The government argued that disclosing dollar figures for individual firms would hurt their business and that the details should be exempt from the Freedom of Information Act.</p>\r\n\r\n<p>Courts sided with the paper and the USDA gave up on the case, but then retail trade associations swooped in with additional appeals. Among other things, the Food Marketing Institute argued that negative attitudes toward food stamp recipients could cause landlords to increase rent when they learn their tenants process government benefits.&nbsp;</p>\r\n\r\n<p>&ldquo;The stigma might also cause non-SNAP recipients to avoid stores with high SNAP volume, either because of beliefs about the store or a fear of being perceived as SNAP customers,&rdquo; the Food Marketing Institute told an appeals court in 2017.</p>\r\n\r\n<p>Stewart Fried, an attorney for the National Grocers Association, argued in an August 2017 brief that retailers would stop accepting SNAP benefits. He said the disclosure &ldquo;does not shed light on what the federal government is up to,&rdquo; since so much detail is already available. Additionally, he said, &ldquo;gaining access to a competitor&rsquo;s store-level sales data is the holy grail of the retail food industry,&rdquo; because the information can influence decisions about where to open new stores.</p>\r\n\r\n<p>So far, courts have not agreed, calling the stigma argument &ldquo;speculative&rdquo; and saying releasing the data seems unlikely to hurt anyone&rsquo;s business too much. Gorsuch has given retailers a chance to argue this month that the disclosure should be further delayed so the court can consider whether to take the case.&nbsp;</p>\r\n', '2018-08-14 08:54:39', '2018-08-14 08:54:39', 11, 5, 'A newspaper’s lawsuit could force the government to disclose store-level spending data.'),
(28, 'The Best Financial Advice We Got From Our Moms', '<p>She taught you how to make her famous chicken soup, the importance of standing up for yourself and the trick to applying <a href=\"https://shop.nordstrom.com/sr?contextualcategoryid=2375500&amp;origin=keywordsearch&amp;keyword=lipstick\" rel=\"nofollow\" target=\"_blank\">lipstick</a> without getting it on your teeth. (<a href=\"https://www.purewow.com/beauty/lipstick-problems-and-solutions?utm_source=huffpo&amp;utm_medium=syndication&amp;utm_campaign=momfinancialadvice\" rel=\"nofollow\" target=\"_blank\">It&rsquo;s all about the &ldquo;O&rdquo; shape.</a>) But your favorite person in the whole world also knows a thing or two about budgeting, finding a bargain and controlling the family purse strings. Here, <a href=\"https://www.purewow.com/family/best-financial-advice-from-moms?utm_source=huffpo&amp;utm_medium=syndication&amp;utm_campaign=momfinancialadvice\" rel=\"nofollow\" target=\"_blank\">the best financial advice we got from our moms</a>.&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://img.huffingtonpost.com/asset/5af1ec721a00002a00cde0f1.jpg?ops=scalefit_720_noupscale\" style=\"height:518px; width:720px\" /></p>\r\n\r\n<p>&ldquo;Always select the highest percentage option for retirement from the beginning (i.e., your 401K plan), so that you get accustomed to living with the lower income from the get-go.&rdquo;&nbsp;<em>&ndash; Corley, Terri&rsquo;s daughter</em></p>\r\n\r\n<p>&ldquo;Pay off your <a href=\"https://www.purewow.com/money/how-to-get-a-perfect-credit-score?utm_source=huffpo&amp;utm_medium=syndication&amp;utm_campaign=momfinancialadvice\" rel=\"nofollow\" target=\"_blank\">credit card</a> every month. Simple but smart.&rdquo; <em>&ndash; Anna, Natalia&rsquo;s daughter</em></p>\r\n\r\n<p>&ldquo;Stop going to Bloomingdale&rsquo;s. (I haven&rsquo;t listened.)&rdquo; <em>&ndash; Mary, Carol&rsquo;s daughter</em></p>\r\n\r\n<p><em><img alt=\"\" src=\"https://img.huffingtonpost.com/asset/5af1ed221a00002c00cde0f6.jpg?ops=scalefit_720_noupscale\" style=\"height:518px; width:720px\" /></em></p>\r\n\r\n<p>&ldquo;Need and want are two very different things.&rdquo; <em>&ndash; Alana, Andrea&rsquo;s daughter</em></p>\r\n\r\n<p>&ldquo;<a href=\"https://www.purewow.com/money/overspender-marriage-tips?utm_source=huffpo&amp;utm_medium=syndication&amp;utm_campaign=momfinancialadvice\" rel=\"nofollow\" target=\"_blank\">Spreading debt</a> across multiple credit cards is like moving your deck chair around the &rsquo;Titanic<em>.&prime;</em>&rdquo;&nbsp;<em>- Nina, Tricia&rsquo;s daughter</em></p>\r\n\r\n<p>&ldquo;<a href=\"https://www.purewow.com/money/tips-for-saving-money-while-dining-out?utm_source=huffpo&amp;utm_medium=syndication&amp;utm_campaign=momfinancialadvice\" rel=\"nofollow\" target=\"_blank\">Start saving</a> and investing early because every little bit counts and you can&rsquo;t get back time for growing your money with compound interest.&rdquo; <em>- Grace, Jung&rsquo;s daughter</em></p>\r\n\r\n<p><img alt=\"\" src=\"https://img.huffingtonpost.com/asset/5af1edad1a00002c00cde0f9.jpg?ops=scalefit_720_noupscale\" /></p>\r\n\r\n<p>&ldquo;Emotionally categorize all big purchases into two categories&mdash;smart money and stupid money. Smart money is for things like retirement, vacations and kitchen renovations. Stupid money is for things like paying to get your car back when it gets towed to the Navy Yard, or having to replace the boiler when it gives out mid-winter. <a href=\"https://www.purewow.com/money/kakeibo-japanese-budgeting-trick?utm_source=huffpo&amp;utm_medium=syndication&amp;utm_campaign=momfinancialadvice\" rel=\"nofollow\" target=\"_blank\">Budget for both</a>, but don&rsquo;t beat yourself up when the stupid expenses arise: Acknowledge them, pay them and move on.<em>&rdquo; &ndash; Jillian, Marjie&rsquo;s daughter</em></p>\r\n\r\n<p>&ldquo;Always make sure you can provide for yourself and <a href=\"https://www.purewow.com/money/financial-infidelity-confessions?utm_source=huffpo&amp;utm_medium=syndication&amp;utm_campaign=momfinancialadvice\" rel=\"nofollow\" target=\"_blank\">don&rsquo;t need anyone else&rsquo;s financial support</a>. #independentwoman.&rdquo; &ndash; <em>Anne, Sacha&rsquo;s daughter</em></p>\r\n\r\n<p>&ldquo;It&rsquo;s better to be a big fish in a small pond than a small fish in a big pond. She meant that you&rsquo;ll get the best deal and quality when you <a href=\"https://www.purewow.com/home/sustainable-stores-nyc?utm_source=huffpo&amp;utm_medium=syndication&amp;utm_campaign=momfinancialadvice\" rel=\"nofollow\" target=\"_blank\">shop locally</a> and consistently (i.e., going to your neighborhood butcher twice a week rather than getting chicken from a big grocery store every Sunday), but I think it applies to a lot of different things.&rdquo; <em>&ndash; Alexia, Monica&rsquo;s daughter</em></p>\r\n\r\n<p><img alt=\"\" src=\"https://img.huffingtonpost.com/asset/5af1ee5b1e000053008e4db8.jpg?ops=scalefit_720_noupscale\" /></p>\r\n\r\n<p>&ldquo;When I was in college, I used to complain to my mom that going to the movies was so expensive and she told me to never skimp on purchases that give you something valuable in return. I now use the same logic for <a href=\"https://www.purewow.com/money/grocery-store-perks?utm_source=huffpo&amp;utm_medium=syndication&amp;utm_campaign=momfinancialadvice\" rel=\"nofollow\" target=\"_blank\">grocery shopping</a> and health items.&rdquo; &ndash;&nbsp;<em>Katie, Karen&rsquo;s daughter</em></p>\r\n\r\n<p>&ldquo;My mom would kill me if she knew that I shared this, but her her funniest advice was: &lsquo;Don&rsquo;t tell your father.&rsquo;&rdquo; <em>&mdash; Catrina, Susan&rsquo;s daughter</em></p>\r\n\r\n<p>&ldquo;Use store cards to get the points <em>and</em> perks but pay them off right after the purchase in store &mdash; most places let you.&rdquo; <em>&ndash; Courtney, Linda&rsquo;s daughter</em></p>\r\n\r\n<p>&ldquo;Get a job, you lazy slacker.&rdquo; <em>&ndash; Chris, Florence&rsquo;s son</em></p>\r\n', '2018-08-14 08:58:22', '2018-08-14 08:58:22', 12, 5, 'Your favorite person in the whole world also knows a thing or two about budgeting, finding a bargain and controlling the family purse strings.');

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  KEY `auth_assignment_user_id_idx` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', '3', 1534255809),
('author', '4', 1534255809),
('author', '5', 1534255809);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE IF NOT EXISTS `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `idx-auth_item-type` (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('admin', 1, NULL, NULL, NULL, 1534255809, 1534255809),
('author', 1, NULL, NULL, NULL, 1534255809, 1534255809),
('createArticle', 2, 'Can create new article', NULL, NULL, 1534255809, 1534255809),
('createCategory', 2, 'Can create new category', NULL, NULL, 1534255809, 1534255809),
('createUser', 2, 'Can create a new user', NULL, NULL, 1534255809, 1534255809),
('deleteArticle', 2, 'Can delete an existing article', NULL, NULL, 1534255809, 1534255809),
('deleteCategory', 2, 'Can delete an existing category', NULL, NULL, 1534255809, 1534255809),
('deleteOwnArticle', 2, 'Can delete own article', 'isOwnArticle', NULL, 1534255809, 1534255809),
('deleteOwnProfile', 2, 'Can delete their own profile', 'isOwnProfile', NULL, 1534255809, 1534255809),
('deleteUser', 2, 'Can delete an existing user', NULL, NULL, 1534255809, 1534255809),
('updateArticle', 2, 'Can update an existing article', NULL, NULL, 1534255809, 1534255809),
('updateCategory', 2, 'Can update an existing category', NULL, NULL, 1534255809, 1534255809),
('updateOwnArticle', 2, 'Can update own article', 'isOwnArticle', NULL, 1534255809, 1534255809),
('updateOwnProfile', 2, 'Can update their own profile', 'isOwnProfile', NULL, 1534255809, 1534255809),
('updateUser', 2, 'Can update an existing user', NULL, NULL, 1534255809, 1534255809),
('viewAllArticles', 2, 'Can view the list of all articles which allows management', NULL, NULL, 1534255809, 1534255809),
('viewAllUsers', 2, 'Can view all users', NULL, NULL, 1534255809, 1534255809);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE IF NOT EXISTS `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('admin', 'createArticle'),
('admin', 'createCategory'),
('admin', 'createUser'),
('admin', 'deleteArticle'),
('admin', 'deleteCategory'),
('admin', 'deleteUser'),
('admin', 'updateArticle'),
('admin', 'updateCategory'),
('admin', 'updateUser'),
('admin', 'viewAllArticles'),
('admin', 'viewAllUsers'),
('author', 'createArticle'),
('author', 'deleteOwnArticle'),
('author', 'deleteOwnProfile'),
('author', 'updateOwnArticle'),
('author', 'updateOwnProfile'),
('author', 'viewAllArticles'),
('deleteOwnArticle', 'deleteArticle'),
('deleteOwnProfile', 'deleteUser'),
('updateOwnArticle', 'updateArticle'),
('updateOwnProfile', 'updateUser');

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE IF NOT EXISTS `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_rule`
--

INSERT INTO `auth_rule` (`name`, `data`, `created_at`, `updated_at`) VALUES
('isOwnArticle', 0x4f3a32333a226170705c726261635c4f776e41727469636c6552756c65223a333a7b733a343a226e616d65223b733a31323a2269734f776e41727469636c65223b733a393a22637265617465644174223b693a313533343235353830393b733a393a22757064617465644174223b693a313533343235353830393b7d, 1534255809, 1534255809),
('isOwnProfile', 0x4f3a32333a226170705c726261635c4f776e50726f66696c6552756c65223a333a7b733a343a226e616d65223b733a31323a2269734f776e50726f66696c65223b733a393a22637265617465644174223b693a313533343235353830393b733a393a22757064617465644174223b693a313533343235353830393b7d, 1534255809, 1534255809);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(9, 'Cars and Other Vehicles'),
(8, 'Entertainment'),
(6, 'Food and Drink'),
(10, 'Home and living'),
(12, 'Parenting'),
(11, 'Politics'),
(7, 'Sport'),
(5, 'Style and Beauty'),
(4, 'Travel'),
(2, 'US News'),
(3, 'World News');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_image_v_article` (`article_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1533713502),
('m140506_102106_rbac_init', 1534255800),
('m170907_052038_rbac_add_index_on_auth_assignment_user_id', 1534255801),
('m180808_070839_create_article_table', 1533713504),
('m180808_071245_create_category_table', 1533713504),
('m180808_071709_create_user_table', 1533713504),
('m180808_072103_create_image_table', 1533713504),
('m180808_072423_create_article_user_table', 1533713504),
('m180808_072913_create_article_category_table', 1533713504),
('m180808_080452_drop_article_category_table', 1533715596),
('m180808_081036_add_category_id_foreign_key_to_article', 1533716182),
('m180808_081805_drop_article_user_table', 1533716371),
('m180808_082111_add_user_id_foreign_key_to_article', 1533716678),
('m180808_094511_add_auth_key_column', 1533721612),
('m180809_111207_init_rbac', 1534255809),
('m180809_174510_add_author_role_for_Yoni', 1534255809),
('m180810_144939_add_view_sll_articles_permission', 1534255809),
('m180813_124155_add_description_column_to_article', 1534164201),
('m180814_063410_change_max_length_of_title_column_in_article_to_120', 1534228562),
('m180814_083933_increase_max__of_text_column_of_article_to_10000', 1534236099),
('m180814_134747_add_default_to_resume_column_of_user', 1534254591);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `resume` varchar(170) COLLATE utf8_unicode_ci DEFAULT '',
  `auth_key` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `resume`, `auth_key`) VALUES
(3, 'admin', 'admin@email.com', '$2y$13$O96ySmbYqA.7zdm4xfN/e.i4su4PZi0/qAYHdESMIKiywcWAeF7gW', '', 'zdsuozXywGubwWR0K7-JZplZTw1qEkRs'),
(4, 'Yoana', 'yonimail@email.com', '$2y$13$Z3D7DObDa98rOzIo8wULGu2qUGFLQLL0hBPML5N7KpAbYRWtStHnK', 'I\'m the best girl in the universe! ;) <3', 'Z6PSq8VKgm2Lx3e4R1Mhqu3OQ4X0tKUm'),
(5, 'Lyubo', 'liubomirwm@outlook.com', '$2y$13$WoJXjy7ln6jDmmD6L/PJuOrHmdEYCNP0QF1ftgto1V5MFxM6B9Qbe', '', 'Tpy3haiA2IjK-Y1Ek0ZhyvZmUa7cf9MV');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `fk_article_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `fk_article_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `fk_image_v_article` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
