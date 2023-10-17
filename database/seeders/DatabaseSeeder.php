<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Company;
use App\Models\Employee;
use App\Models\Testimonial;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Company::truncate();
        Testimonial::truncate();

        $admin = User::factory()->create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'password',
            'is_admin' => true,
        ]);

        $userOne = User::factory()->create([
            'name' => 'User One',
            'username' => 'one',
            'email' => 'one@one.com',
            'password' => 'asdasdasd'
        ]);
        
        $userTwo = User::factory()->create([
            'name' => 'User Two',
            'username' => 'two',
            'email' => 'two@two.com',
            'password' => 'asdasdasd'
        ]);
        
        $userThree = User::factory()->create([
            'name' => 'User Three',
            'username' => 'three',
            'email' => 'three@three.com',
            'password' => 'asdasdad'
        ]);

        $userFour = User::factory()->create([
            'name' => 'User Four',
            'username' => 'four',
            'email' => 'four@four.com',
            'password' => 'asdasdasd'
        ]);




        // Companies

        $apple = Company::create([
            "id" => 1,
            "slug" => "apple",
            "name" => "Apple",
            "email" => "info@apple.com",
            "logo" => "https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg",
            "website" => "https://www.apple.com/uk/",
            "summary" => "Apple Inc. is an American multinational technology company headquartered in Cupertino, California, that designs, develops, and sells consumer electronics, computer software, and online services.",
            "description" => "Apple Inc. is an American multinational technology company headquartered in Cupertino, California, that designs, develops, and sells consumer electronics, computer software, and online services. They are considered one of the Big Five companies in the U.S. information technology industry, along with Amazon, Google, Microsoft, and Facebook. Its hardware products include the iPhone smartphone, the iPad tablet computer, the Mac personal computer, the iPod portable media player, the Apple Watch smartwatch, the Apple TV digital media player, the AirPods wireless earbuds, the AirPods Max headphones, and the HomePod smart speaker line. Apple's software includes iOS, iPadOS, macOS, watchOS, and tvOS operating systems, the iTunes media player, the Safari web browser, the Shazam music identifier, and the iLife and iWork creativity and productivity suites, as well as professional applications like Final Cut Pro X, Logic Pro, and Xcode. Its online services include the iTunes Store, the iOS App Store, Mac App Store, Apple Arcade, Apple Music, Apple TV+, Apple Fitness+, iMessage, and iCloud. Other services include Apple Store, Genius Bar, AppleCare, Apple Pay, Apple Pay Cash, and Apple Card. Their employee satisfaction was 77 percent in 2019. Salaries at Apple Inc. range from an average of £67,735 to £173,662 a year. Apple employees with the job title Software Engineering Manager make the most with an average annual salary of £161,610, while employees with the title Sales Associate make the least with an average annual salary of £26,099. The average employee term at Apple is 2 years. Working at Apple is considered prestigious in the tech industry, and is often considered one of the best places to work in the world.",
        ]);

        $burberry = Company::create([
            "id" => 2,
            "slug" => "burberry",
            "name" => "Burberry",
            "email" => "customerservice@burberry.com",
            "logo" => "https://upload.wikimedia.org/wikipedia/commons/b/b4/Logo_Burberry_01.svg",
            "website" => "https://uk.burberry.com/",
            "summary" => "Burberry Group PLC is a British luxury fashion house headquartered in London, England. It currently designs and distributes ready to wear including trench coats, leather goods, footwear, fashion accessories, eyewear, fragrances, and cosmetics.",
            "description" => "Burberry Group PLC is a British luxury fashion house headquartered in London, England. It currently designs and distributes ready to wear including trench coats, leather goods, footwear, fashion accessories, eyewear, fragrances, and cosmetics. Their iconic designs are often copied and imitated across the globe. Burberry is most famous for its iconic trench coat, which was invented by founder Thomas Burberry. The company has branded stores and franchises around the world, and also sells through concessions in third-party stores. HM Queen Elizabeth II and HRH The Prince of Wales have granted the company Royal Warrants. The Chief Creative Officer was Riccardo Tisci until Christopher Bailey took over in 2022 and brought the brand image back into line with its british heritage. The company is listed on the London Stock Exchange and is a constituent of the FTSE 100 Index. In 2015, Burberry ranked 73rd in Interbrand's Best Global Brands report, alongside Louis Vuitton and Prada. Burberry has more than 500 stores in over 50 countries. In 2017, Burberry ranked 29th in the BrandZ top 100 most valuable global brands. Salaries at Burberry range from an average of £40,000 to £120,000 a year. Retail Store Manager make an average annual salary of £60,000, while employees with the title Sales Associate make an average annual salary of £40,000. Employee satisfaction is 80%.",
            
        ]);

        $waitrose = Company::create([
            "id" => 3,
            "slug" => "waitrose",
            "name" => "Waitrose",
            "email" => "customerserviceteam@waitrose.co.uk",
            "logo" => "https://upload.wikimedia.org/wikipedia/en/f/f9/Waitrose_%26_Partners.svg",
            "website" => "https://www.waitrose.com/",
            "summary" => "Waitrose & Partners is a brand of British supermarkets, founded in 1904 and acquired in 1937 by employee-owed retailer John Lewis Partnership, which still sells groceries under the brand.",
            "description" => "Waitrose & Partners is a brand of British supermarkets, founded in 1904 and acquired in 1937 by employee-owed retailer John Lewis Partnership, which still sells groceries under the brand. Their duchy range of products are sold in Waitrose stores and are sourced from farms that meet the standards of the UK government's Department of Environment, Food and Rural Affairs. The Duchy range includes over 200 products, including meats, fish, fruit and vegetables, dairy products, breads, drinks, preserves, ready meals and biscuits. The company has 338 shops across the United Kingdom, including 65 'little Waitrose' convenience shops, and a 5.1% share of the market, making it the eighth-largest retailer of groceries in the UK. Salaries at Waitrose range from an average of £20,000 to £60,000 a year. Retail Store Manager make an average annual salary of £40,000, while employees with the title Sales Associate make an average annual salary of £25,000. Employees typically stay at Waitrose for over 5 years and employee satisfaction typically ranges from 80-90%.",
            
        ]);

        $johnLewis = Company::create([
            "id" => 4,
            "slug" => "john-lewis",
            "name" => "John Lewis",
            "email" => "info.johnlewis.com/",
            "logo" => "https://upload.wikimedia.org/wikipedia/en/a/a4/John_Lewis_%26_Partners_logo.svg",
            "website" => "https://www.johnlewis.com/",
            "summary" => "John Lewis & Partners is a brand of high-end department stores operating throughout Great Britain. Concessions are also located in the Republic of Ireland and Australia.",
            "description" => "John Lewis & Partners is a brand of high-end department stores operating throughout Great Britain. Concessions are also located in the Republic of Ireland and Australia. Customer satisfaction is the highest of any UK department store, and is traditionally high. The chain is known for its policy of \"Never Knowingly Undersold\" which has been in use since 1925. There are 51 stores throughout England, Scotland and Wales, including 12 'At Home' stores, and 'flexible format' stores in Exeter and York. The store in Cardiff was the first to open in Wales, in 2009. The largest store in England is located in Oxford Street, London. In 2017/18, gross sales were £11.6 billion, of which £6.0 billion were from the department stores division and £2.1 billion from its website. John Lewis & Partners is different from its main rivals in that it operates as a partnership owned by its employees. The John Lewis Partnership is an employee-owned trust, where all 80,000 staff are Partners in the business. The profits made by the department stores division are paid as a bonus to all staff. The John Lewis Partnership also operates Waitrose supermarkets, although the two companies are operated as separate businesses. Salaries at John Lewis range from an average of £20,000 to £60,000 a year. Retail Store Manager make an average annual salary of £40,000, while employees with the title Sales Associate make an average annual salary of £25,000. Employees typically stay at John Lewis for over 5 years and employee satisfaction typically ranges from 80-90%.",
            
        ]);

        $screwfix = Company::create([
            "id" => 5,
            "slug" => "screwfix",
            "name" => "Screwfix",
            "email" => "info@screwfix.com/",
            "logo" => "https://upload.wikimedia.org/wikipedia/commons/7/73/Screwfix_logo.svg",
            "website" => "https://www.screwfix.com/",
            "summary" => "Screwfix is the United Kingdom's largest multi channel retailer of trade tools, accessories and hardware products.",
            "description" => "Screwfix is the United Kingdom's largest multi channel retailer of trade tools, accessories and hardware products. Founded in 1979 as the Woodscrew Supply Company, the company was acquired in July 1999 by Kingfisher plc, which also owns B&Q, and is listed on the London Stock Exchange. Screwfix was later established as a separate company in 2005, retaining its brand. The company opened its 500th store in 2018. Screwfix is convenient, straightforward and affordably-priced, helping its trade customers get the job done quickly, affordably and right first time. From power tools and work wear to cables and pipe fittings, Screwfix offers over 11,000 products available to pick up from over 600 stores nationwide. Their full range of over 33,000 products can be ordered over the phone, online or from a local store, with orders taken up until 8pm (weekdays) for next day delivery to home or site. Salaries at Screwfix range from an average of £20,000 to £60,000 a year. Retail Store Manager make an average annual salary of £40,000, while employees with the title Sales Associate make an average annual salary of £25,000. Employees typically stay at Screwfix for over 3 years and employee satisfaction typically ranges from 70-80%.",
        ]);

        $bosch = Company::create([
            "id" => 6,
            "slug" => "bosch",
            "name" => "Bosch",
            "email" => "info@bosch.com/",
            "logo" => "https://upload.wikimedia.org/wikipedia/commons/1/16/Bosch-logo.svg",
            "website" => "https://www.bosch.co.uk/",
            "summary" => "Bosch is a German multinational engineering and technology company headquartered in Gerlingen, near Stuttgart, and dual-listed in Germany and France.",
            "description" => "Bosch is a German multinational engineering and technology company headquartered in Gerlingen, near Stuttgart, and dual-listed in Germany and France. They employ over 400,000 people worldwide and are the largest supplier of automotive components in the world. The company was founded by Robert Bosch in Stuttgart in 1886. Bosch is 92% owned by Robert Bosch Stiftung, a charitable institution. Bosch's core operating areas are spread across four business sectors; mobility (hardware and software), consumer goods (including household appliances and power tools), industrial technology (including drive and control) and energy and building technology. The company has over 440 subsidiaries across 60 countries and its products are sold in around 150 countries. Bosch is a leader in innovation and has filed over 5,000 patents annually. Salaries at Bosch range from £30,000 to £100,000 a year. Software Engineering Manager make an average annual salary of £80,000, while employees with the title Sales Associate make an average annual salary of £30,000. Employees typically stay at Bosch for around 6 years and employee satisfaction typically ranges from 70-80%.",
            
        ]);

        $carechange = Company::create([
            "id" => 7,
            "slug" => "carechange",
            "name" => "Carechange",
            "email" => "info@carechange.com",
            "logo" => "/images/carechange.png",
            "website" => "https://www.carechange.com/",
            "summary" => "Carechange is a British healthcare software company headquartered in Norwich, UK.",
            "description" => "Carechange is a British healthcare software company headquartered in Norwich, UK. Its main product offering is a suite of tools for automating healthcare administration and management. They employ over 400 people worldwide and are the largest supplier of healthcare software in the world. The company was founded by Jason Chalangary in Norwich in 2021. Carechange is 100% owned by Jason Chalangary. Salaries at Carechange range from £30,000 to £100,000 a year. Software Engineering Managers make an average annual salary of £80,000, while employees with the title Sales Associate make an average annual salary of £30,000. Employees typically stay at Carechange for around 6 years and employee satisfaction typically ranges from 90-100%.",
        ]);

        $google = Company::create([
            "id" => 8,
            "slug" => "google",
            "name" => "Google",
            "email" => "info@google.com",
            "logo" => "https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png",
            "website" => "https://www.google.com/",
            "summary" => "Google LLC is an American multinational technology company that specializes in Internet-related services and products.",
            "description" => "Google is known for its search engine but also offers a variety of other products and services like YouTube, Android, Google Cloud, Google Maps, Google Docs, and Google Chrome. Founded in 1998 by Larry Page and Sergey Brin while they were Ph.D. students at Stanford University, California, it's now considered one of the Big Five technology companies alongside Apple, Amazon, Microsoft, and Facebook.",
        ]);
        
        $amazon = Company::create([
            "id" => 9,
            "slug" => "amazon",
            "name" => "Amazon",
            "email" => "info@amazon.com",
            "logo" => "https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg",
            "website" => "https://www.amazon.com/",
            "summary" => "Amazon.com, Inc. is an American multinational technology company which focuses on e-commerce, cloud computing, and artificial intelligence.",
            "description" => "Founded by Jeff Bezos in July 1994, Amazon started as an online bookstore and has expanded its business to include other products like electronics, apparel, furniture, food, and toys. Amazon Web Services (AWS) is its highly profitable cloud service segment. It's considered one of the Big Five tech companies.",
        ]);
        
        $microsoft = Company::create([
            "id" => 10,
            "slug" => "microsoft",
            "name" => "Microsoft",
            "email" => "info@microsoft.com",
            "logo" => "https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg",
            "website" => "https://www.microsoft.com/",
            "summary" => "Microsoft Corporation is an American multinational technology company that develops, licenses, and supports a wide range of software products, computing devices, and services.",
            "description" => "Founded by Bill Gates and Paul Allen in 1975, Microsoft's flagship product is the Windows operating system. Other well-known products include the Office suite, Surface, and Xbox. Azure is their cloud computing service. They're considered one of the Big Five tech companies.",
        ]);
        
        $facebook = Company::create([
            "id" => 11,
            "slug" => "facebook",
            "name" => "Facebook",
            "email" => "info@facebook.com",
            "logo" => "https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg",
            "website" => "https://www.facebook.com/",
            "summary" => "Facebook, Inc. is an American social media conglomerate.",
            "description" => "Founded by Mark Zuckerberg in 2004, Facebook's core is its namesake social networking platform. The company also owns Instagram, WhatsApp, and Oculus VR. Facebook has faced various controversies, especially in areas of privacy and political manipulation.",
        ]);
        
        $netflix = Company::create([
            "id" => 12,
            "slug" => "netflix",
            "name" => "Netflix",
            "email" => "info@netflix.com",
            "logo" => "https://upload.wikimedia.org/wikipedia/commons/0/08/Netflix_2015_logo.svg",
            "website" => "https://www.netflix.com/",
            "summary" => "Netflix, Inc. is an American subscription streaming service that offers a wide variety of award-winning TV shows, movies, anime, documentaries, and more.",
            "description" => "Founded in 1997 by Reed Hastings and Marc Randolph, Netflix began as a DVD rental-by-mail service. Today, with its streaming platform, it has a massive global presence and produces content in various languages, making it a significant player in the entertainment industry.",
        ]);
        
        $tesla = Company::create([
            "id" => 13,
            "slug" => "tesla",
            "name" => "Tesla",
            "email" => "info@tesla.com",
            "logo" => "https://upload.wikimedia.org/wikipedia/commons/b/bd/Tesla_Motors.svg",
            "website" => "https://www.tesla.com/",
            "summary" => "Tesla, Inc. is an American electric vehicle and clean energy company.",
            "description" => "Founded by Elon Musk and several co-founders in 2003, Tesla is known for its electric cars, battery energy storage systems, and renewable energy products. With the mission to accelerate the world's transition to sustainable energy, Tesla is a key player in the automotive and energy sectors.",
        ]);
        
        $adobe = Company::create([
            "id" => 14,
            "slug" => "adobe",
            "name" => "Adobe",
            "email" => "info@adobe.com",
            "logo" => "https://upload.wikimedia.org/wikipedia/commons/7/7b/Adobe_Systems_logo_and_wordmark.svg",
            "website" => "https://www.adobe.com/",
            "summary" => "Adobe Inc. is an American multinational computer software company.",
            "description" => "Founded in December 1982 by John Warnock and Charles Geschke, Adobe is known for various software including Photoshop, Acrobat Reader, and Adobe Creative Cloud. It has historically focused upon the creation of multimedia and creativity software products.",
        ]);
        
        $spotify = Company::create([
            "id" => 15,
            "slug" => "spotify",
            "name" => "Spotify",
            "email" => "info@spotify.com",
            "logo" => "https://upload.wikimedia.org/wikipedia/commons/1/19/Spotify_logo_without_text.svg",
            "website" => "https://www.spotify.com/",
            "summary" => "Spotify Technology S.A. is a Swedish audio streaming and media services provider.",
            "description" => "Founded in 2006 by Daniel Ek and Martin Lorentzon, Spotify allows users to listen to music and podcasts for free with advertisements or with a paid subscription. It's one of the world's largest music streaming service providers.",
        ]);
              



        // Employees

        Employee::create([
            "user_id" => $admin->id,
            "company_id" => $carechange->id,
            "slug" => "jason-chalangary",
            "name" => "Jason Chalangary",
            "email" => "jason@chalangary.com",
            "image" => "/images/jason-chalangary.jpg",
            "job_title" => "Chief Executive Officer",
            "phone" => "01234567890",
            "address" => "Jason House, Jason Road, Jason, Jasonshire, J4 5ON",
            "summary" => "Jason Chalangary is a British businessman, and the chief executive officer of Company, a multinational healthcare technology company.",
            "description" => "Jason Chalangary is a British businessman, and the chief executive officer of Company, a multinational healthcare technology company. He is known for his love of Company's range of tools and is often seen using them in the office. Prior to working at Company, Jason worked in the Nation Health Service and Queen Mary University of London. Originally from Essex, he now lives in Norwich with his partner.",
        ]);        

        Employee::create([
            "user_id" => $admin->id,
            "company_id" => $apple->id,
            "slug" => "tim-cook",
            "name" => "Tim Cook",
            "email" => "tim.cook@apple.com",
            "image" => "https://i.insider.com/5b9944318ea82f1c008b5fc3?width=1000&format=jpeg&auto=webp",
            "job_title" => "Chief Executive Officer",
            "phone" => "01234567890",
            "address" => "1 Infinite Loop, Cupertino, CA 95014, United States",
            "summary" => "Timothy Donald Cook is an American business executive, philanthropist and industrial engineer. Cook is the chief executive officer of Apple Inc., and previously served as the company's chief operating officer under its cofounder Steve Jobs.",
            "description" => "Timothy Donald Cook is an American business executive, philanthropist and industrial engineer. Cook is the chief executive officer of Apple Inc., and previously served as the company's chief operating officer under its cofounder Steve Jobs. He improved Apple's product offerings by introducing several new devices to Apple's lineup. In his spare time he fishes and makes plans for taking over the world. He is also a keen philanthropist and has donated over $100 million to charity. Prior to working at Apple, Tim worked at IBM and Compaq. He is known for his calm and collected demeanor and is often seen as a calming influence on the company. He is also known for his love of the outdoors and often goes camping with his family.",
        ]);

        Employee::create([

            "user_id" => $userOne->id,
            "company_id" => $burberry->id,
            "slug" => "ricardo-tisci",
            "name" => "Ricardo Tisci",
            "email" => "ricardo.tisci@burberry.com",
            "image" => "https://www.interviewmagazine.com/wp-content/uploads/2017/10/Riccardo-Tisci-1.jpg",
            "job_title" => "Chief Creative Officer",
            "phone" => "01234567890",
            "address" => "Horseferry House, Horseferry Rd, Westminster, London SW1P 2AW",
            "summary" => "Riccardo Tisci is an Italian fashion designer. He was creative director for Givenchy from 2005 to 2017. In 2018, he was hired as the chief creative officer of British luxury brand Burberry.",
            "description" => "Riccardo Tisci is an Italian fashion designer. He was creative director for Givenchy from 2005 to 2017. In 2018, he was hired as the chief creative officer of British luxury brand Burberry. He added a new and youthful vibe to the brand's lineup and repositioned Burberry at the forefront of luxury designer brands among younger customers. In his spare time he liked to party with all the models at Burberry. Originally from Italy, he moved to London in 2018 to take up the role at Burberry. He is known for making bold fashion statements and is often seen wearing a kilt. He famously designed the wedding dress for Meghan Markle when she married Prince Harry.",
        ]);

        Employee::create([
            "user_id" => $userOne->id,
            "company_id" => $waitrose->id,
            "slug" => "james-bailey",
            "name" => "James Bailey",
            "email" => "james.bailey@waitrose.com",
            "image" => "https://dmrqkbkq8el9i.cloudfront.net/Pictures/2000x1125/5/4/8/239548_finalwaitrose_executive_director_james_bailey_34_682655_crop.jpg",
            "job_title" => "Executive Director",
            "phone" => "01234567890",
            "address" => "Doncastle Road, Bracknell, Berkshire, RG12 8YA",
            "summary" => "James Bailey is an English businessman, and the executive director of Waitrose & Partners, a division of the John Lewis Partnership.",
            "description" => "James Bailey is an English businessman, and the executive director of Waitrose & Partners, a division of the John Lewis Partnership. He is known for his love of Waitrose's Duchy range of products and is often seen eating them in the office. Prior to working at Waitrose, James worked at Tesco and Sainsbury's. He is known for piloting Waitrose's online delivery service and is often seen driving the delivery vans himself. His favourite saying is \"Never knowingly undersold\" and he is often seen wearing a suit and tie. Originally, he is from London, but now lives in Berkshire with his wife and two children.",
        ]);

        Employee::create([
            "user_id" => $userTwo->id,
            "company_id" => $screwfix->id,
            "slug" => "john-mewett",
            "name" => "John Mewett",
            "email" => "john.mewett@screwfix.com",
            "image" => "https://media.licdn.com/dms/image/D5603AQE2tceYWefnow/profile-displayphoto-shrink_800_800/0/1675265064138?e=1703116800&v=beta&t=C_mWOO7K4MTJC3Un_4LylbEb3I3aCUredKNIXhPXlto",
            "job_title" => "Chief Executive Officer",
            "phone" => "01234567890",
            "address" => "Trade House, Mead Avenue, Yeovil, Somerset, BA22 8RT",
            "summary" => "John Mewett is a British businessman, and the chief executive officer of Screwfix, a division of Kingfisher plc.",
            "description" => "John Mewett is a British businessman, and the chief executive officer of Screwfix, a division of Kingfisher plc. He is known for his love of Screwfix's range of power tools and is often seen using them in the office. Prior to working at Screwfix, John worked at B&Q and Homebase. Originally from Somerset, he now lives in London with his wife and two children.",
        ]);

        Employee::create([
            "user_id" => $userTwo->id,
            "company_id" => $johnLewis->id,
            "slug" => "sharon-white",
            "name" => "Sharon White",
            "email" => "sharon.white@johnlewis.com",
            "image" => "https://www.outreachradio.co.uk/wp-content/uploads/2023/09/localimages/_126251448_shazzer.png?x14876",
            "job_title" => "Chairman",
            "phone" => "01234567890",
            "address" => "171 Victoria St, Westminster, London SW1E 5NN",
            "summary" => "Sharon White is a British businesswoman who is the chairman of the John Lewis Partnership. She was previously the chief executive of Ofcom.",
            "description" => "Sharon White is a British businesswoman who is the chairman of the John Lewis Partnership. She was previously the chief executive of Ofcom. She is known for her love of John Lewis's home furnishings and is often seen redecorating the office. Prior to working at John Lewis, Sharon worked at the Treasury and the World Bank. She is known for her love of the John Lewis Christmas advert and is often seen singing along to it. Educated at Cambridge University, she is known for her love of the arts and is often seen at the theatre.",
        ]);

        Employee::create([
            "user_id" => $userThree->id,
            "company_id" => $bosch->id,
            "slug" => "stefan-hartung",
            "name" => "Stefan Hartung",
            "email" => "stefan.hartung@bosch.com",
            "image" => "https://cdn.prod.www.manager-magazin.de/images/86107bbb-4f34-4e4b-8f9a-0508a5d482b5_w960_r1.778_fpx52_fpy44.99.webp",
            "job_title" => "Chief Executive Officer",
            "phone" => "01234567890",
            "address" => "Robert Bosch GmbH, Postfach 10 60 50, 70049 Stuttgart, Germany",
            "summary" => "Stefan Hartung is a German businessman, and the chief executive officer of Bosch, a multinational engineering and technology company.",
            "description" => "Stefan Hartung is a German businessman, and the chief executive officer of Bosch, a multinational engineering and technology company. He is known for his love of Bosch's range of power tools and is often seen using them in the office. Prior to working at Bosch, Stefan worked at Siemens and BMW. Originally from Stuttgart, he now lives in Berlin with his wife and two children.",
        ]);        

        Employee::create([
            "user_id" => $userThree->id, 
            "company_id" => $apple->id, 
            "slug" => "steve-wozniak",
            "name" => "Steve Wozniak",
            "email" => "woz@apple.com",
            "image" => "https://s1.qwant.com/thumbr/0x380/0/3/2268cc00bf141ac02f627648126d7d2e91cf499024485a66cb198ca3a87348/Wozniak-770x452.jpg?u=https%3A%2F%2Fotakukart.com%2Fwp-content%2Fuploads%2F2021%2F07%2FWozniak-770x452.jpg&q=0&b=1&p=0&a=0",
            "job_title" => "Co-founder and Engineer",
            "phone" => "01234567890", 
            "address" => "Cupertino, CA",
            "summary" => "Co-founder of Apple Inc. and primary developer of the Apple I and Apple II personal computers.",
            "description" => "Steve Wozniak, affectionately known as 'Woz', is an American electronics engineer, computer programmer, and technology entrepreneur. He co-founded Apple Inc. with Steve Jobs and Ronald Wayne. Wozniak single-handedly invented the Apple I computer and also had a major role in the development of the Apple II computer. Both of these inventions are integral parts of the personal computer revolution. Known for his passion for engineering and his down-to-earth personality, Wozniak has been a key figure in the tech industry, advocating for hands-on learning and creativity. Although he left Apple's day-to-day operations in 1985, Wozniak remains an employee and represents the company at various events and public occasions."
        ]);

        $sundarPichai = Employee::create([
            "user_id" => $admin->id,
            "company_id" => $google->id,
            "slug" => "sundar-pichai",
            "name" => "Sundar Pichai",
            "email" => "sundar.pichai@google.com",
            "image" => "https://s1.qwant.com/thumbr/0x380/0/2/da44c4459c71ecb4f131e1202a82c52686804d61ff8c490198b6711baeaabc/google-ceo-sundar-pichai.jpg?u=https%3A%2F%2Fimages.firstpost.com%2Fwp-content%2Fuploads%2F2019%2F10%2Fgoogle-ceo-sundar-pichai.jpg&q=0&b=1&p=0&a=0",
            "job_title" => "Chief Executive Officer",
            "phone" => "01234567891",
            "address" => "1600 Amphitheatre Parkway, Mountain View, CA 94043, United States",
            "summary" => "Sundar Pichai is an Indian-American business executive. He is the chief executive officer (CEO) of Google's parent company, Alphabet Inc.",
            "description" => "Born in India, Sundar Pichai joined Google in 2004 and became CEO in 2015. He's known for his work on Google Chrome and Chrome OS. He has also been involved in the development of Google Drive, Gmail, and Google Maps. Pichai is known for his calm demeanor and has a reputation for building partnerships.",
        ]);
        
        $jeffBezos = Employee::create([
            "user_id" => $admin->id,
            "company_id" => $amazon->id,
            "slug" => "jeff-bezos",
            "name" => "Jeff Bezos",
            "email" => "jeff.bezos@amazon.com",
            "image" => "https://s1.qwant.com/thumbr/0x380/3/a/9f427cd260c6b0757aa46013152751675674ac20ba8f21bddb869d2fe7451e/105815446-1553624918736gettyimages-1078542150.jpeg?u=https%3A%2F%2Fimage.cnbcfm.com%2Fapi%2Fv1%2Fimage%2F105815446-1553624918736gettyimages-1078542150.jpeg%3Fv%3D1562704788&q=0&b=1&p=0&a=0",
            "job_title" => "Founder",
            "phone" => "01234567892",
            "address" => "410 Terry Ave. North, Seattle, WA 98109, United States",
            "summary" => "Jeff Bezos is the founder of Amazon, the world's largest online retailer.",
            "description" => "Bezos founded Amazon in 1994. Under his leadership, Amazon expanded into a variety of other sectors, such as cloud computing with AWS and space travel with Blue Origin. He's one of the world's wealthiest individuals and is known for his emphasis on customer service.",
        ]);
        
        $satyaNadella = Employee::create([
            "user_id" => $admin->id,
            "company_id" => $microsoft->id,
            "slug" => "satya-nadella",
            "name" => "Satya Nadella",
            "email" => "satya.nadella@microsoft.com",
            "image" => "https://s1.qwant.com/thumbr/0x380/b/4/224967b15350fa3f6f32198f976ab3bffe2b2dc21edd56062c22b79db967db/102160051-RTR4AVSL.jpg?u=https%3A%2F%2Fimage.cnbcfm.com%2Fapi%2Fv1%2Fimage%2F102160051-RTR4AVSL.jpg%3Fv%3D1534865345&q=0&b=1&p=0&a=0",
            "job_title" => "Chief Executive Officer",
            "phone" => "01234567893",
            "address" => "One Microsoft Way, Redmond, WA 98052, United States",
            "summary" => "Satya Narayana Nadella is an Indian-American business executive. He is the chief executive officer (CEO) of Microsoft.",
            "description" => "Since becoming CEO in 2014, Nadella has transformed Microsoft by emphasizing cloud computing and diversifying into other areas. Prior to becoming CEO, he was Executive Vice President of Microsoft's cloud and enterprise group.",
        ]);
        
        $markZuckerberg = Employee::create([
            "user_id" => $admin->id,
            "company_id" => $facebook->id,
            "slug" => "mark-zuckerberg",
            "name" => "Mark Zuckerberg",
            "email" => "mark.zuckerberg@facebook.com",
            "image" => "https://starschanges.com/wp-content/uploads/2016/01/Mark-Zuckerberg_5.jpg",
            "job_title" => "Chief Executive Officer",
            "phone" => "01234567894",
            "address" => "1601 Willow Road, Menlo Park, CA 94025, United States",
            "summary" => "Mark Zuckerberg is co-founder and CEO of Facebook, the world's largest social networking site.",
            "description" => "Zuckerberg co-founded Facebook in 2004 while at Harvard. Under his leadership, Facebook acquired Instagram and WhatsApp. He's known for his vision of connecting the world and has faced numerous challenges related to privacy and misinformation on the platform.",
        ]);
        
        $reedHastings = Employee::create([
            "user_id" => $admin->id,
            "company_id" => $netflix->id,
            "slug" => "reed-hastings",
            "name" => "Reed Hastings",
            "email" => "reed.hastings@netflix.com",
            "image" => "https://s2.qwant.com/thumbr/0x380/6/1/391ebfa1975b0dfcf22a2f037b3d9ee6626cc5b37d059a70ea2c67a220f14f/5bd229ab71f7ce26f1393e68-1024x768.jpg?u=https%3A%2F%2Fmillionsofcelebs.com%2Fwp-content%2Fuploads%2F2020%2F09%2F5bd229ab71f7ce26f1393e68-1024x768.jpg&q=0&b=1&p=0&a=0",
            "job_title" => "Co-founder and Co-CEO",
            "phone" => "01234567895",
            "address" => "100 Winchester Circle, Los Gatos, CA 95032, United States",
            "summary" => "Wilmot Reed Hastings Jr. is an American businessman. He is the co-founder and co-CEO of Netflix.",
            "description" => "Hastings co-founded Netflix in 1997. He's been instrumental in transforming the DVD rental service into a global streaming powerhouse. He's known for promoting a unique corporate culture and has been a proponent of
            education reform.",
        ]);

        $elonMusk = Employee::create([
            "user_id" => $admin->id,
            "company_id" => $tesla->id,
            "slug" => "elon-musk",
            "name" => "Elon Musk",
            "email" => "elon.musk@tesla.com",
            "image" => "https://image.cnbcfm.com/api/v1/image/106434195-1595357993564-elon.jpg?v=1625260371&w=740&h=416&ffmt=webp&vtcrop=y",
            "job_title" => "Chief Executive Officer",
            "phone" => "01234567896",
            "address" => "3500 Deer Creek Road, Palo Alto, CA 94304, United States",
            "summary" => "Elon Musk is an entrepreneur known for founding, co-founding, and leading multiple high-tech companies.",
            "description" => "Elon Musk is the CEO and lead designer of SpaceX; early investor, CEO, and product architect of Tesla, Inc.; founder of The Boring Company; co-founder of Neuralink; and co-founder and initial co-chairman of OpenAI. Known for his ambitious vision for the future, Musk's ventures include everything from electric vehicles to neurotechnology, and he's a leading figure in the push for sustainable energy.",
        ]);
        
        $shantanuNarayen = Employee::create([
            "user_id" => $admin->id,
            "company_id" => $adobe->id,
            "slug" => "shantanu-narayen",
            "name" => "Shantanu Narayen",
            "email" => "shantanu.narayen@adobe.com",
            "image" => "https://s1.qwant.com/thumbr/0x380/0/c/004c1e62eef0d415bd3040675020cb63b7c11b1264b06929a049c4181e2c04/AdobeBoss.jpg?u=https%3A%2F%2Fblogs.perficient.com%2Fdigitaltransformation%2Ffiles%2F2015%2F08%2FAdobeBoss.jpg&q=0&b=1&p=0&a=0",
            "job_title" => "Chief Executive Officer",
            "phone" => "01234567897",
            "address" => "345 Park Avenue, San Jose, CA 95110-2704, United States",
            "summary" => "Shantanu Narayen is an Indian-American business executive, and the chairman and CEO of Adobe Inc.",
            "description" => "Narayen joined Adobe in 1998, becoming the CEO in 2007. Under his leadership, Adobe shifted its focus from boxed software to a subscription cloud-based model. He has been recognized as one of the world's best CEOs and has been praised for his leadership style.",
        ]);
        
        $danielEk = Employee::create([
            "user_id" => $admin->id,
            "company_id" => $spotify->id,
            "slug" => "daniel-ek",
            "name" => "Daniel Ek",
            "email" => "daniel.ek@spotify.com",
            "image" => "https://s1.qwant.com/thumbr/0x380/a/e/57b4c0ae5f174b704083a8066ea61b1878eb8807d71450e044c0f04accc414/Daniel-Ek-768x541.png?u=https%3A%2F%2Fmillennialentrepreneurs.com%2Fwp-content%2Fuploads%2F2019%2F09%2FDaniel-Ek-768x541.png&q=0&b=1&p=0&a=0",
            "job_title" => "Chief Executive Officer",
            "phone" => "01234567898",
            "address" => "Regeringsgatan 19, SE-111 53 Stockholm, Sweden",
            "summary" => "Daniel Ek is a Swedish billionaire entrepreneur and technologist. He's the co-founder and CEO of Spotify.",
            "description" => "Ek co-founded Spotify in 2006. The platform has revolutionized the music industry by offering on-demand streaming of a vast music library. Ek's vision for Spotify was to combat music piracy while providing a platform for artists to earn a livelihood.",
        ]);
        
        $oneTest = Testimonial::create([
            "user_id" => $admin->id,
            "employee_id" => $danielEk->id,
            'body' => "Having had the privilege to work closely with Daniel Ek over the past few years, I've been consistently impressed by his visionary approach and commitment to innovation. Daniel has a unique ability to bridge the gap between technical intricacies and user experiences, ensuring that Spotify remains at the forefront of the music streaming industry. His leadership has inspired me, and I've grown tremendously both professionally and personally under his guidance.",
        ]);

        $twoTest = Testimonial::create([
            "user_id" => $admin->id,
            "employee_id" => $shantanuNarayen->id,
            'body' => "Working with Shantanu Narayen has been an extraordinary journey of growth and inspiration. His remarkable blend of technological foresight and business acumen has consistently driven Adobe to new heights. What truly stands out, however, is his unwavering commitment to fostering a culture of innovation and inclusivity. Under Shantanu's leadership, I've not only witnessed the evolution of groundbreaking products but have also experienced a workspace where every voice is valued, and every idea has the potential to shape the future. His leadership style is a testament to the fact that genuine empathy and strategic vision can coexist, propelling a company to global leadership.",
        ]);

        $threeTest = Testimonial::create([
            "user_id" => $userOne->id,
            "employee_id" => $danielEk->id,
            'body' => "As an intern at Spotify, I was initially intimidated by the thought of working at such a renowned company. However, Daniel Ek made the environment welcoming and nurturing. Despite his position, he took the time to mentor and interact with interns, emphasizing the value of fresh perspectives and continual learning. It's rare to find leaders like Daniel who truly believe in nurturing the next generation, and I'm grateful for the invaluable lessons I've learned from him.",
        ]);

        $fourTest = Testimonial::create([
            "user_id" => $userOne->id,
            "employee_id" => $danielEk->id,
            'body' => "Daniel Ek's passion for music and technology is palpable every time he speaks. Working alongside him at Spotify has been an enlightening experience. He's not just a leader; he's a visionary who understands the importance of fostering a culture of creativity and collaboration. Under his leadership, I've seen ideas transform into impactful campaigns that resonate deeply with our user base.",
        ]);
    }
}