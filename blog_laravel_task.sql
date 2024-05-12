-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 12, 2024 at 03:11 PM
-- Server version: 8.0.31
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_laravel_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_categories_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `blogs_blog_categories_id_foreign` (`blog_categories_id`),
  KEY `blogs_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `url`, `page_title`, `image`, `description`, `blog_categories_id`, `user_id`, `created_at`, `updated_at`) VALUES
(17, 'Is Narendra Modi Losing Ground In India’s General Election?', 'is-narendra-modi-losing-ground-in-indias-general-election', 'Is Narendra Modi Losing Ground In India’s General Election', '6ce6509f-d964-4448-862f-9464af37ea90.png', '<p>The battle for 2024 is turning out to be the most audacious election in India’s electoral history, even more daring than the 1977 elections, when opposition forces in India were up against Prime Minister Indira Gandhi’s authoritarian regime. Back then, the opposition was led by people who had participated in the Indian freedom struggle and were willing to make sacrifices as they had during the independence movement.</p><p>It is 47 years since that historic election. India is a changed country today. The Narendra Modi regime has been reconfiguring India’s morals and values, and attempting to hijack its history and transform the civilizational moorings of its society. India is heading toward an ideological dictatorship if it does not course-correct in this election.</p><p>The battle of 2024 is not an ordinary battle. It is a battle between David and Goliath. It is a battle between an ideology that harbors luxuries of cult, communication, and capital, ferociously supported by a utopia and the “ordinariness of the other.” No party in the memory of this country has been hallowed with so much cunningness and killer instinct to win an election, so much power in terms of resources, and willingness to resort to any course, with no compunction if the line between the moral and the immoral is blurred. For the BJP, victory is the only value and power is the only currency.</p><p>On the other hand, its opponents are cursed with fracture and disintegration. Fragility is their only attire. Without resources and capital, they are united by a survival instinct, knowing full well that if they lose this time then there will be no second chance..</p><p>This election is not between the two political formations or between the two leaders and thought processes. It is between two instincts, one representing the “fight back of the original” and the other pretending to be the “real” successor of history.</p><p>The Rashtriya Swayamsevak Sangh (RSS) and Narendra Modi are at the cusp of history. If not stopped today, India will lose whatever it has been proud of. It is no accident of history that suddenly, a “save the constitution” campaign has gained unprecedented momentum.</p><p>The fight has taken an interesting turn. The marginalized of society have sensed rather rightly that the BJP’s slogan “Ab ki baar, 400 paar“(This time, [BJP] will cross 400 seats) to win more than 400 seats in the elections to the Lok Sabha, India’s lower house of Parliament, is not a campaign to gain extra power to take the country onto the expressway of development and make it a Vishvaguru (world teacher). Instead, it is a bid to throw the constitution into the dustbin of history and write and thrust a new one on the country, one that would pretend to imbibe Indianness, discarding the foreign-ness.</p>', 2, 2, '2024-05-12 00:19:04', '2024-05-12 00:19:04'),
(18, 'What A Rising India And A New Japan Could Mean For The Indo-pacific?', 'what-a-rising-india-and-a-new-japan-could-mean-for-the-indo-pacific', 'What A Rising India And A New Japan Could Mean For The Indo-pacific', '1fd90d82-2774-493d-b59b-7382663161dd.jpg', '<p>On April 10, the summit between U.S. President Joe Biden and Japanese Prime Minister Kishida Fumio set the stage for the evolution of the Japan-U.S. partnership with the announcement of a “new era of U.S.- Japan strategic cooperation,” which would see Tokyo play a more prominent and active role in the U.S.-led Asian security architecture.</p><p>The above prominent “active role” stems partially from Japan’s own ambitions to shed the overbearing influence of its pacifist constitution and bolster its own military capability in the face of an assertive China and an increasingly belligerent North Korea. This was witnessed in the release of the National Security Strategy in 2022 and the Kishida administration’s decision to boost military spending by 43 million yen and allocate 2 percent of GDP by 2027. This has also been followed by plans to establish a joint operations headquarters to facilitate cross-domain operations between its ground, maritime, and air defense forces. Along with these, Japan has also adopted a policy of defense outreach through Official Security Assistance (OSA) to countries such as the Philippines and lifted the ban on export of next generation fighter jet being co-developed with Italy and United Kingdom.</p><p>From India’s perspective, a strengthened Japan would be a much welcome and beneficial addition in New Delhi’s geopolitical calculations, especially with regard to China and the Indo- Pacific. Given the positive history of Indo-Japanese relations from the days of Rabindranath Tagore and Netaji Subhas Chandra Bose, a more militarily robust and assertive Japan would be well poised to realize the Free and Open Indo-Pacific vision, in which India has been deemed an “indispensable partner.”On closer examination of both the fact sheet readout of the Biden-Kishida Summit and the FOIP policy, there emerges several areas of synergy between the U.S.-Japan and India-Japan initiatives. For instance, the Biden-Kishida summit highlighted the importance of joint Japan-U.S. collaboration in developing and offering quality infrastructure under the Partnership for Global Infrastructure and Investment (PGII). That effort could be synergized with FOIP’s focus on the “Bay of Bengal-Northeast India value chain,” which aims to develop economic and infrastructure linkage between India’s Northeast and Bangladesh, especially through the development of the Matarbari sea port.Another area of possible cooperation includes the laying of stable and sustainable undersea cables in the Indo-Pacific, especially with regard to the Pacific Island countries mentioned in both the above documents. There Japan-U.S. efforts can combine with those of India and Australia under the Quad’s Cable Connectivity Partnership.</p>', 2, 2, '2024-05-12 00:21:02', '2024-05-12 00:21:02'),
(19, 'How To Plan A Motorhome Adventure In Norway', 'how-to-plan-a-motorhome-adventure-in-norway', 'How To Plan A Motorhome Adventure In Norway', '214028e9-d150-4635-b0af-f60050ef95dd.jpg', '<p>Norway is a fantastic destination to explore with a motorhome. Driving through Norway’s stunning landscapes in a motorhome or campervan means every turn reveals a new amazing sight to explore. This country is perfect for road trips with a mobile home: from the awe-inspiring Atlantic Road to the dizzying twists of Trollstigen, you’ll find plenty of sights to see in Norway.&nbsp;</p><p>However, before you plan your road trip and motorhome rental in Norway there are some things you need to know. Let’s get planning!Interested in this kind of adventure in Norway with a motorhome? Pack wisely, respect nature, and get ready for one of the best campervan road trips in Europe!</p><p><strong>Planning your Campervan Journey</strong></p><p>As you can imagine, embarking on a campervan adventure through Norway requires thorough planning. This includes selecting the right vehicle size and mapping out the routes that will lead you through the places you want to see.When it comes to scenic drives on your road trip with a motorhome rental in Norway, this country’s roads are a dream; so you need to plan exactly what you want to see so you don’t miss anything! &amp;nbsp;It is also essential to book your motorhome as far in advance as you can to guarantee your preferred model is available, and to get the best deals.When hiring a campervan or motorhome make sure you review the rental company’s policies regarding insurance coverage, driver requirements, mileage limitations, and any additional fees.If you plan on bringing your own motorhome to Norway, make sure you are aware of the regulations regarding bringing a vehicle into the country, as well as any International Driving License requirements and time limits on your stay in Norway.</p><p>Check if your existing insurance policies provide coverage for campervan travel in Norway, and consider getting travel insurance that covers medical emergencies, trip cancellation, and roadside assistance in case you break down.This article about hiring a campervan for a road trip has lots of tips about hiring a campervan or a motorhome.</p><p><strong>Suggested Norway Motorhome Routes</strong></p><p>There are plenty of things to see in Norway while travelling around in a campervan or motorhome, from amazing fjords to some unique natural and cultural experiences.&lt;/p&gt;&lt;p&gt;Decide on the places you want to visit and plan your route accordingly. Consider the distance between destinations, driving times, and attractions along the way, as well as rest stops and places to spend the night.</p><p><strong>Here are some recommended routes to consider:</strong></p><ul><li><strong>Scenic routes:</strong> The Atlantic Road and Trollstigen offer dramatic twists and turns against the backdrop of Norway’s raw beauty. The Atlantic Road has been called the world’s most beautiful drive .</li><li><strong>Wildlife spotting and coastal camping:</strong> As you navigate the coastal regions, keep your eyes peeled for the rich wildlife – you can see eagles soaring high up, moose hiding in the dense forests… And even whales and polar bears if you go far enough up North.</li><li><strong>Fjord cruising and Northern Lights viewing:</strong> Don’t miss the chance to cruise the fjords, where towering cliffs meet crystal-clear waters. And, if you’re venturing north, the sight of the Northern Lights in the clear Arctic sky is an experience that should definitely be on your radar.</li></ul>', 5, 2, '2024-05-12 00:26:46', '2024-05-12 00:26:46'),
(20, 'How To Visit Dhigurah Island: Budget Paradise In Maldives', 'how-to-visit-dhigurah-island-budget-paradise-in-maldives', 'How To Visit Dhigurah Island: Budget Paradise In Maldives', '73fbca66-50f6-4b9b-84c7-2e192a5e40b1.jpg', '<p>Dhigurah island is probably the most beautiful island you’ve never heard of in the Maldives. It’s a local island without the fancy overwater resorts that are famous in the Maldives, but instead it has a long and wonderful white sand beach.</p><p>If you’re wanting to see the Maldives on a budget, this is one of the best places to do it. Dhigurah has all of the amazing tropical scenery you’d expect from the Maldives, plus family-owned hotels that are as low as $70 USD per night!</p><p>We recently visited two local islands in the Maldives — Dhigurah and Fulidhoo — and couldn’t be happier with our choice. They were both nice and different.</p><p>This travel guide will explain how to get to Dhigurah island, what to do there, where to stay, and everything else you need to know before you go!</p><p><br><strong>How To Get To Dhigurah Island</strong><br>There’s no airport in Dhigurah, so you first have to fly into the capital of the Maldives at Male International Airport (MLE), which is about 100 kilometers (60 miles) from Dhigurah.</p><p>From Male, you can take a speedboat or ferry directly to Dhigurah, or you can take a seaplane or domestic flight to one of the nearby islands and then get a boat the rest of the way.<br><strong>By Public Speedboat</strong></p><p>The main way to get to Dhigurah is by public speedboat, and that’s how we went. There are daily departures in the morning and afternoon from Male airport and the city.</p><p>The speedboat journey to Dhigurah takes 2 hours and costs about $50 USD per person one way. Kids above 3 years old pay full price.</p><p>The boat ride usually isn’t too bumpy (depending on weather), and they have a toilet and plenty of room for storing luggage. The boats are new and the seats are comfortable. They also give you free bottled water.</p><p>The boats from Male to Dhigurah depart at 11 AM and 4:30 PM (Fridays 10 AM). The return boats from Dhigurah to Male depart at 6:30 AM and 1:30 PM (Fridays 1:45 PM). There’s a brief stop in Dhangethi island on the way to Dhigurah.</p><p>However, keep in mind there are multiple speedboat companies operating this route and the timetable seems to change occasionally, so I’d double check the timetable with your hotel in Dhigurah before you go.</p><p><strong>By Domestic Plane</strong><br>One of the easiest ways to get to Dhigurah is by taking a 20 minute domestic flight with Villa Air / FlyMe from Male to the airport in nearby Maamigili island (VAM), followed by a 5 minute taxi ride to the harbor and then a 20 minute speedboat ride to Dhigurah.</p><p>This route usually has 3 or 4 flights per day. One way ticket prices start at $170 USD for adults and $85 for kids under 12 years old, while kids under 2 fly free. The speedboat transfer is normally included in the price.</p><p>In rare cases where the waves are too rough for a normal boat crossing, then this may be your only option of getting to Dhigurah.</p>', 5, 2, '2024-05-12 00:33:09', '2024-05-12 00:33:09'),
(21, 'Lemon Water For Weight Loss: Does It Work?', 'lemon-water-for-weight-loss-does-it-work', 'Lemon Water For Weight Loss Does It Work', 'ba68558e-16df-4808-8433-ec6bff1492b2.jpg', '<p>TikTok loves its trends. From “oatzempic” to okra water to seed cycling, it seems TikTokers will try almost anything to achieve their health goals.</p><p>And now hot lemon water is TikTok’s latest pseudo-health phenomenon. Influencers claim a glass of lemon water before bed every night will increase metabolism, reduce bloating, and help burn calories.</p><p>Seems too good to be true? According to Denise Hernandez, a registered dietitian with MyFitnessPal, it is.</p><p><strong>The verdict on hot lemon water</strong><br>“Lemon water is typically used as a home remedy to improve cold and flu symptoms,” Hernandez says. “There is no evidence that lemon water affects weight loss.”</p><p>Ok, so lemon water doesn’t help with weight loss. But can it help with anything? It’s likely!</p><p><strong>Other health benefits of lemon water</strong><br>“Lemons are rich in antioxidants such as vitamin C and polyphenols. Antioxidants protect our cells from damage. For example, vitamin C helps with the production of collagen—a protein that supports skin, muscle, bones, and connective tissue. It also helps your body absorb iron from food and may boost the immune system. Polyphenols—another antioxidant found in lemons—may help alleviate fatigue, and lower cholesterol and blood pressure.”</p><p>On top of those benefits, lemon water may help with allergies and even alleviate cold and flu symptoms like a sore throat.</p><p>Of course, lemon water, hot or cold, will help you meet your hydration goals. According to the NIH, 75% of people don’t drink enough water. But it’s important for temperature control, cognitive performance, and gastrointestinal function.</p><p>Fun fact: You can track your water intake using the FREE MyFitnessPal app, plus discover other nutritional information about lemons.</p><p><strong>The caveat</strong><br>Be wary of consuming too much lemon in your daily water intake.</p><p>“Too much lemon water can aggravate acid reflux, increase tooth decay, trigger canker sores, and can interact with certain medicines,” says Mercer.</p><p><strong>The bottom line</strong><br>Don’t go looking for an alternative miracle weight loss drink. “It doesn’t exist. It may not be the fun answer, but weight loss and management takes consistency and a holistic approach.”</p><p>But food-logging is scientifically proven to support weight loss over time. Studies show that people who track their food are more likely to achieve their weight loss goals.</p><p>When you’re ready, MyFitnessPal can help: over 2,000 people a day reach their goals using the app!</p>', 6, 2, '2024-05-12 00:41:17', '2024-05-12 00:41:17'),
(22, 'Why Healthy Eating May Cause Stomach Issues', 'why-healthy-eating-may-cause-stomach-issues', 'Why Healthy Eating May Cause Stomach Issues', '882ea549-ec78-4f54-a315-4bc7ba5b5fcd.jpg', '<p>Swapping out fries for broccoli, soda for sparkling water, and fast food for home-cooked meals seems like a straightforward path to a healthier you.</p><p>But the truth is, switching to a wholesome diet doesn’t always feel good right away for some.</p><p>When you break away from a diet high in sugars and fatty foods, your body goes through an adjustment period. Some people transition with no issues.</p><p>Others find themselves dealing with loose stools and frequent bathroom trips.</p><p>Experiencing this might leave you confused. After all, weren’t you supposed to feel better after cleaning up your diet?</p><p>The answer is typically yes. But, the road to reaping the full benefits of a healthy diet can come with a few digestive hiccups along the way.</p><p>3 Reasons Your Healthy Diet Might Cause Stomach Issues<br>Understanding the potential triggers for stomach pain is the first step in addressing this common health problem. Here are three reasons why your new and improved diet might not be sitting well:</p><p><strong>1. Changes in diet can affect the gut microbiome</strong><br>The trillions of microbes living in your gut form the complex ecosystem called the microbiome. When you change your diet, you also change your microbiome.</p><p>It’s important to remember that changes to the gut microbiome don’t happen overnight. The process is gradual. When shifting to a healthier diet, your gut ecosystem undergoes a period of adaptation.</p><p>This transition may lead to symptoms like diarrhea as your body starts to host a new balance of microorganisms.</p><p>Over time, as you consistently feed your body with nutritious foods, these symptoms should decrease.</p><p>This change mirrors the body’s natural response to diet changes. It shows the need for patience and persistence when moving to a healthier lifestyle.</p><p>The foods we eat play a big role. They can influence the growth of certain bacterial strains, boosting gut health.</p><p>Fermented foods are a good example. They are rich in probiotics, which can help the gut.</p><p>Kefir and sauerkraut are great examples. They boost the population of good bacteria like Lactobacilli. These bacteria aid in digestion and strengthen the immune system.</p><p>Additionally, garlic and onions contain prebiotics.</p><p>Prebiotics feed and support the growth of helpful gut bacteria. These foods encourage the presence of Bifidobacteria and can help in reducing harmful bacteria in the gut.</p><p>This can lead to positive long-term changes like more good gut bacteria. But, you might have digestive discomfort when you first change your diet, including diarrhea, as your gut bacteria adjust.</p><p><strong>2. Increased fiber intake can cause temporary digestive upset</strong><br>Fiber is a key part of a healthy diet. It helps you feel full and supports digestive health.</p><p>The downside is that boosting your fiber intake, especially insoluble fiber found in whole grains, can cause gas, bloating, cramping, or alter bowel movements.</p><p>So, while fiber is great (and essential) for your health, your stomach might need time to adjust to having more of it.</p><p>A tool like MyFitnessPal can help you record your daily fiber intake.</p><p>You should aim to increase it by 5g each day until you meet the daily recommendation, which is 25 g/day for women and 38 g/day for men.</p><p><strong>3. Increased water intake can affect bowel movements</strong><br>When eating healthier, you’re often encouraged to boost your water consumption.</p><p>Hydration is critical for overall health. But ramping up your water intake too quickly can lead to more frequent bowel movements.</p><p>Excess water can speed up food’s transit through your digestive tract, resulting in loose stools. It’s like putting your digestion on the fast track, which your gut might not be used to.</p>', 6, 2, '2024-05-12 00:43:59', '2024-05-12 00:43:59'),
(23, 'Reducing Barriers To Injury Prevention Program Implementation', 'reducing-barriers-to-injury-prevention-program-implementation', 'Reducing Barriers To Injury Prevention Program Implementation', 'aaa8e050-543d-4cfe-86b4-c6defca104d7.jpg', '<p>Injury prevention programs (IPPs) have been shown to be effective at reducing the risk of injury. The 11+, for example, has been shown to reduce hamstring injuries by 60%, hip and groin injuries by 41%, knee injuries by 48%, and ankle injuries by 32%. It reduces the risk of all injuries by 39% (Thorborg et al., 2017).</p><p><strong>According to Arundale et al., 2023, the components of effective injury risk reduction programs include:</strong></p><ul><li>Implementation at the youth level.</li><li>Beginning in the pre-season and continuing through the regular season.</li><li>Being performed multiple times for an overall time of at least 30 minutes per week.</li><li>Being multifaceted and including a combination of strength and plyometric exercises.</li><li>Having a high level of compliance.</li><li>Even the best program in the world won’t work if it doesn’t get done.</li></ul><p>Unfortunately, implementing IPPs has proven to be challenging. Barriers to implementation are varied and context-dependent.</p><p>In elite women’s footballers from the 2019 FIFA World Cup, players identified player motivation and the attitude of coaches as the primary barriers to implementation (Geertsema et al., 2021). A review of IPPs found that motivation, time requirements, skill requirements for program facilitators, compliance, and cost were all barriers to implementation (Bogardus et al., 2019). In my own experience as a youth soccer coach, a lack of confidence in delivering the program, a lack of field space, and limited time seem to prevent coaches from implementing IPPs.</p><p>As physical therapists, athletic trainers, performance coaches, and sport scientists, we have access to scientific knowledge on IPPs. However, we are not always the people best positioned to deliver these programs, especially at the youth level, where it is crucial to begin their implementation. While 59% of physical therapists worldwide are aware of IPPs, only 37% actually implement any in their current practice (Al Attar et al., 2021).</p><p>Outside of professional academies, how many of us are ever consistently present at training sessions at the youth level? How many of us have access to youth athletes for the recommended 2–3 times per week? To make the most impact and deliver IPPs to the largest number of athletes possible, it has to come from the people who are actually there with them on a regular basis: their coaches (Bizzini and Dvorak, 2015).</p><p><strong>Coaching the Coaches</strong><br>As we all know, it can take years for scientific knowledge to be translated into practice. However, I believe there are ways that we can begin educating coaches on IPPs. Ideally, youth soccer leagues and national federations would mandate that training on IPPs be part of coaching education courses and a requirement to obtain a coaching license.</p><p>Outside of governance and policy at the macro level, healthcare and performance professionals can run off-season or pre-season clinics and symposiums to teach local coaches how to run an IPP with their teams. Instead of focusing community outreach on individual teams or clubs, promote a one-day training course for as many youth coaches as possible. Social media can also be a powerful tool for disseminating information to the general public.</p><p>If coaches are to be the primary stakeholders responsible for the delivery of IPPs, then the challenges they face in implementing them need to be addressed. One barrier to IPP implementation by youth coaches is a lack of resources and education on what IPPs are, why they’re important, and how exactly to deliver them. Our role, then, as healthcare and performance professionals, needs to shift away from strictly the delivery of these programs to the education of coaches. If we can effectively educate them to deliver IPPs, then more youth athletes might get access to them. When we educate coaches on IPPs, it’s important to highlight their effectiveness in reducing injury risk to increase motivation and buy-in.</p><p>In order to enhance buy-in from coaches, the IPP needs to be easy to integrate into the team’s normal training structure. At the youth level, teams might have access to half a pitch for 60–90 minutes twice per week. Coaches perceive that IPPs take too much time (Minnig et al., 2022) and can feel pressure to jump right into the training session to maximize their time on the pitch. There are a couple of ways that we can address this barrier—perceived or real—and help coaches implement IPPs in their training sessions.</p><p><strong>Strategies for Implementing IPPs</strong><br>In 2019, Whalen et al. found that moving part 2 of the 11+ (strength, plyometrics, and balance exercises) was still effective at reducing injury risk while also improving compliance at the semi-professional level. This might be an effective strategy at the youth level because it reduces the time spent performing the 11+ before starting the training session. Coaches can have the athletes perform part 2 of the 11+ while they are wrapping up the session and summarizing key coaching points. They can also perform this part of the 11+ off to the side of the field so they don’t have to worry about going beyond their allotted time slot or being in the way of another team starting their training session.</p><p>Another possible method of addressing this time barrier is to integrate components of an IPP more seamlessly into the session. Most youth soccer training sessions begin with some type of technical warm-up, consisting of anything from passing patterns to dribbling in a grid. Why not try to integrate aspects of an IPP into this technical warm-up that coaches are already doing?</p>', 1, 2, '2024-05-12 00:49:59', '2024-05-12 00:49:59'),
(24, 'The Dhoni Years', 'the-dhoni-years', 'The Dhoni Years', '0aa71826-ce21-4441-a27b-d231cdfdf4eb.jpg', '<p><strong>Unnoticeable Debut</strong></p><p>Ten years ago, to the day, a stockily-built cricketer with long locks made his debut for India. I was there in Chittagong. But I don\'t recall the moment.</p><p>Today, I needed to revisit the scorecard of that match to find out that MS Dhoni was dismissed for duck.</p><p>All I remember from India\'s tour of Bangladesh in 2004 was Sachin Tendulkar\'s record equaling 34th Test ton and Sunil Gavaskar, the man whose record he broke, congratulating him on the boundary ropes.</p><p>That\'s how unobtrusive MS Dhoni\'s debut was. Little did I know then, that the same man who had been inconspicuous on that windy day in Chittagong would go onto become a phenomenon in Indian cricket.</p><p><strong>From rags to riches</strong></p><p>It was in his 5th match for India that I first noticed MS Dhoni. Rather, he forced me to notice him, just as he forced the entire cricket world to wake up to his batting talents, smashing a hapless Pakistani bowling attack for a 123 ball 148.</p><p>While I saw this particular innings on TV, I promptly booked my tickets to travel to Jamshedpur, the venue of the 2nd ODI vs Pakistan to watch MSD in action.</p><p>Before reaching Jamshedpur though, I made a quick pit stop in Dhoni\'s hometown Ranchi to interview his parents. It was here that I first got a glimpse of his humble background.</p><p>An old, dilapidated flat was where MS Dhoni grew up along with his parents and two siblings. An old fashioned TV in the drawing room seemed to be the most valuable item in the house. The only vehicle parked outside the house was a Royal Enfield motorcycle, which was Mahendra\'s preferred and only mode of transport and something that he was forced to share with his elder brother Narendra.</p><p>A punctured football lying right behind the main door was hard to miss. I was told it still served the purpose of providing entertainment at home wherever Mahi was bored.</p><p>After interviewing Dhoni\'s parents on their son\'s match-winning knock two days ago, I moved onto Jamshedpur. The Indian team in those days featured the likes of Sachin Tendulkar, Virender Sehwag, Sourav Ganguly and Rahul Dravid. Yet, during my 3-day stay in Jamshedpur all I heard were chants of Dhoni... Dhoni... Dhoni. A star was born.</p><p><strong>Baptism by fire</strong></p><p>When I traveled to the West Indies in 2006- Lara was a Legend, Dhoni just a kid. In Test cricket at the time- Lara was the master, Dhoni a novice. And in the West Indies- Lara was King, Dhoni unknown.</p><p>It was the 151st over of India\'s second innings in the Antigua test. Dhoni had smashed 3 consecutive sixes off Dave Mohammed. The fourth ball was also hoicked towards the mid wicket boundary, where Darren Ganga held on to the catch.</p><p>But had the fielder stepped on the boundary rope? The TV replays were inconclusive. As is the norm in cricket, the on field umpires gave Dhoni the benefit of the doubt, a decision that angered Brian Lara. The temperamental West Indian skipper wasted no time in letting his displeasure known to umpire Asad Rauf and batsman MS Dhoni.</p><p>The image of an angry Lara wagging his finger in reproach towards MS Dhoni is still fresh in my mind. But the image that had a bigger impact on me was that of an equanimous Dhoni. He didn\'t throw a word back at Lara, instead just starred back at him. Dhoni\'s eyes didn\'t reveal aggression, only conveyed his resoluteness to one of the most revered cricketers of the time.</p><p>To me, that was a display of remarkable Sangfroid at a time when most other 9 test match old cricketers would have buckled down.</p><p><strong>Content Captain</strong></p><p>After the high of winning the World Cup, MS Dhoni endured the toughest 10 months of his career in 2011, when he oversaw India being whitewashed in two consecutive test series. Soon, the calls of dropping him as captain grew louder.</p><p>I had a brief chat with him in a hotel lobby in New Delhi, in the aftermath of two of India\'s worse overseas tours, and couldn\'t resist asking him- Did he fear the media backlash? Did he worry the same fans that cheered for him would now jeer him? He replied \"I have 3 dogs at home. No matter how I play, they greet me the same way when I return.\"</p><p>To some it may reek of cocksureness, to me it signified confidence.</p><p><i>The man is a Dog lover but he\'s also a Tiger at Heart!</i></p>', 1, 2, '2024-05-12 05:58:16', '2024-05-12 05:58:16');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

DROP TABLE IF EXISTS `blog_categories`;
CREATE TABLE IF NOT EXISTS `blog_categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1' COMMENT '0=>Inactive,1=>Active',
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `status`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Sport', 1, NULL, '2024-05-09 16:38:25', '2024-05-09 16:38:25'),
(2, 'Politics', 1, 'Politics relatted blog', '2024-05-09 16:39:59', '2024-05-09 16:39:59'),
(3, 'Fashion', 1, 'Fashion related blogs', '2024-05-09 16:41:05', '2024-05-09 16:41:05'),
(4, 'Business', 1, 'Business related blogs', '2024-05-09 16:41:47', '2024-05-09 16:41:47'),
(5, 'Travel', 1, 'Travel related blogs', '2024-05-09 16:42:47', '2024-05-09 16:42:47'),
(6, 'Health', 1, 'Health related blogs', '2024-05-09 16:43:21', '2024-05-09 16:43:21');

-- --------------------------------------------------------

--
-- Table structure for table `blog_tags`
--

DROP TABLE IF EXISTS `blog_tags`;
CREATE TABLE IF NOT EXISTS `blog_tags` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_tags`
--

INSERT INTO `blog_tags` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Politics News', 'Politics News', '2024-05-10 05:17:11', '2024-05-10 05:17:11'),
(2, 'Latest News', NULL, '2024-05-10 05:17:29', '2024-05-10 05:17:29'),
(3, 'Trending News', NULL, '2024-05-10 05:17:59', '2024-05-10 05:17:59'),
(4, 'Sport News', NULL, '2024-05-10 05:18:42', '2024-05-10 05:18:42'),
(5, 'Latest Fashion', NULL, '2024-05-10 05:19:06', '2024-05-10 05:19:06'),
(6, 'Trending Fashion', NULL, '2024-05-10 05:19:21', '2024-05-10 05:19:21'),
(7, 'Travel places in india', NULL, '2024-05-10 05:20:06', '2024-05-10 05:20:06'),
(8, 'Best travel place in world', NULL, '2024-05-10 05:20:25', '2024-05-10 05:20:25'),
(9, 'Health Checkup', NULL, '2024-05-10 05:20:56', '2024-05-10 05:20:56'),
(10, 'Health is wealth', NULL, '2024-05-10 05:21:12', '2024-05-10 05:21:12');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_05_08_155911_create_blogs_table', 2),
(6, '2024_05_08_160014_create_blog_categories_table', 2),
(7, '2024_05_08_160525_create_blog_tags_table', 2),
(8, '2024_05_10_025311_add_column_to_blogs_table', 2),
(9, '2024_05_10_172847_change_column_to_blogs_table', 2),
(10, '2024_05_11_190122_delete_user_id_to_blog_table', 2),
(11, '2024_05_12_051435_create_multiple_blog_tags_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `multiple_blog_tags`
--

DROP TABLE IF EXISTS `multiple_blog_tags`;
CREATE TABLE IF NOT EXISTS `multiple_blog_tags` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `blog_tag_id` bigint UNSIGNED DEFAULT NULL,
  `blog_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `multiple_blog_tags_blog_tag_id_index` (`blog_tag_id`),
  KEY `multiple_blog_tags_blog_id_index` (`blog_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multiple_blog_tags`
--

INSERT INTO `multiple_blog_tags` (`id`, `blog_tag_id`, `blog_id`, `created_at`, `updated_at`) VALUES
(1, 1, 17, '2024-05-12 00:19:04', '2024-05-12 00:19:04'),
(2, 2, 17, '2024-05-12 00:19:04', '2024-05-12 00:19:04'),
(3, 3, 17, '2024-05-12 00:19:04', '2024-05-12 00:19:04'),
(4, 1, 18, '2024-05-12 00:21:02', '2024-05-12 00:21:02'),
(5, 2, 18, '2024-05-12 00:21:02', '2024-05-12 00:21:02'),
(6, 7, 19, '2024-05-12 00:26:46', '2024-05-12 00:26:46'),
(7, 8, 19, '2024-05-12 00:26:46', '2024-05-12 00:26:46'),
(8, 7, 20, '2024-05-12 00:33:09', '2024-05-12 00:33:09'),
(9, 8, 20, '2024-05-12 00:33:09', '2024-05-12 00:33:09'),
(10, 9, 21, '2024-05-12 00:41:17', '2024-05-12 00:41:17'),
(11, 10, 21, '2024-05-12 00:41:17', '2024-05-12 00:41:17'),
(12, 9, 22, '2024-05-12 00:43:59', '2024-05-12 00:43:59'),
(13, 10, 22, '2024-05-12 00:43:59', '2024-05-12 00:43:59'),
(14, 3, 23, '2024-05-12 00:49:59', '2024-05-12 00:49:59'),
(15, 4, 23, '2024-05-12 00:49:59', '2024-05-12 00:49:59'),
(16, 4, 24, '2024-05-12 05:58:16', '2024-05-12 05:58:16');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `is_admin`, `created_at`, `updated_at`) VALUES
(1, 'Ritesh Ranjan', 'riteshranjan2594@gmail.com', NULL, '$2y$10$taLV2Ry/a67oRcniqxG/b.pCUxjwRx76/uziMweSpIVPJOEQKYOG.', NULL, 0, '2024-05-08 07:15:54', '2024-05-08 07:15:54'),
(2, 'Admin', 'admin@gmail.com', NULL, '$2y$10$taLV2Ry/a67oRcniqxG/b.pCUxjwRx76/uziMweSpIVPJOEQKYOG.', NULL, 1, '2024-05-08 07:28:02', '2024-05-08 07:28:02');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_blog_categories_id_foreign` FOREIGN KEY (`blog_categories_id`) REFERENCES `blog_categories` (`id`),
  ADD CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `multiple_blog_tags`
--
ALTER TABLE `multiple_blog_tags`
  ADD CONSTRAINT `multiple_blog_tags_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`),
  ADD CONSTRAINT `multiple_blog_tags_blog_tag_id_foreign` FOREIGN KEY (`blog_tag_id`) REFERENCES `blog_tags` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
