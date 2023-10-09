<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Company;
use App\Models\Employee;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::truncate();
        Company::truncate();
        Company::truncate();

        $user = User::factory()->create([
            'name' => 'Admin',
            'password' => 'admin'
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



        // Employees

        Employee::create([
            "user_id" => $user->id,
            "company_id" => $apple->id,
            "slug" => "tim-cook",
            "name" => "Tim Cook",
            "email" => "tim.cook@apple.com",
            "job_title" => "CEO",
            "phone" => "01234567890",
            "address" => "1 Infinite Loop, Cupertino, CA 95014, United States",
            "summary" => "Timothy Donald Cook is an American business executive, philanthropist and industrial engineer. Cook is the chief executive officer of Apple Inc., and previously served as the company's chief operating officer under its cofounder Steve Jobs.",
            "description" => "Timothy Donald Cook is an American business executive, philanthropist and industrial engineer. Cook is the chief executive officer of Apple Inc., and previously served as the company's chief operating officer under its cofounder Steve Jobs. He improved Apple's product offerings by introducing several new devices to Apple's lineup. In his spare time he fishes and makes plans for taking over the world. He is also a keen philanthropist and has donated over $100 million to charity. Prior to working at Apple, Tim worked at IBM and Compaq. He is known for his calm and collected demeanor and is often seen as a calming influence on the company. He is also known for his love of the outdoors and often goes camping with his family.",
        ]);

        Employee::create([

            "user_id" => $user->id,
            "company_id" => $burberry->id,
            "slug" => "ricardo-tisci",
            "name" => "Ricardo Tisci",
            "email" => "ricardo.tisci@burberry.com",
            "job_title" => "Chief Creative Officer",
            "phone" => "01234567890",
            "address" => "Horseferry House, Horseferry Rd, Westminster, London SW1P 2AW",
            "summary" => "Riccardo Tisci is an Italian fashion designer. He was creative director for Givenchy from 2005 to 2017. In 2018, he was hired as the chief creative officer of British luxury brand Burberry.",
            "description" => "Riccardo Tisci is an Italian fashion designer. He was creative director for Givenchy from 2005 to 2017. In 2018, he was hired as the chief creative officer of British luxury brand Burberry. He added a new and youthful vibe to the brand's lineup and repositioned Burberry at the forefront of luxury designer brands among younger customers. In his spare time he liked to party with all the models at Burberry. Originally from Italy, he moved to London in 2018 to take up the role at Burberry. He is known for making bold fashion statements and is often seen wearing a kilt. He famously designed the wedding dress for Meghan Markle when she married Prince Harry.",

        ]);

        Employee::create([
            "user_id" => $user->id,
            "company_id" => $waitrose->id,
            "slug" => "james-bailey",
            "name" => "James Bailey",
            "email" => "james.bailey@waitrose.com",
            "job_title" => "Executive Director",
            "phone" => "01234567890",
            "address" => "Doncastle Road, Bracknell, Berkshire, RG12 8YA",
            "summary" => "James Bailey is an English businessman, and the executive director of Waitrose & Partners, a division of the John Lewis Partnership.",
            "description" => "James Bailey is an English businessman, and the executive director of Waitrose & Partners, a division of the John Lewis Partnership. He is known for his love of Waitrose's Duchy range of products and is often seen eating them in the office. Prior to working at Waitrose, James worked at Tesco and Sainsbury's. He is known for piloting Waitrose's online delivery service and is often seen driving the delivery vans himself. His favourite saying is \"Never knowingly undersold\" and he is often seen wearing a suit and tie. Originally, he is from London, but now lives in Berkshire with his wife and two children.",
           
        ]);

        Employee::create([
            "user_id" => $user->id,
            "company_id" => $johnLewis->id,
            "slug" => "sharon-white",
            "name" => "Sharon White",
            "email" => "sharon.white@johnlewis.com",
            "job_title" => "Chairman",
            "phone" => "01234567890",
            "address" => "171 Victoria St, Westminster, London SW1E 5NN",
            "summary" => "Sharon White is a British businesswoman who is the chairman of the John Lewis Partnership. She was previously the chief executive of Ofcom.",
            "description" => "Sharon White is a British businesswoman who is the chairman of the John Lewis Partnership. She was previously the chief executive of Ofcom. She is known for her love of John Lewis's home furnishings and is often seen redecorating the office. Prior to working at John Lewis, Sharon worked at the Treasury and the World Bank. She is known for her love of the John Lewis Christmas advert and is often seen singing along to it. Educated at Cambridge University, she is known for her love of the arts and is often seen at the theatre.",
        ]);

        Employee::create([
            "user_id" => $user->id,
            "company_id" => $screwfix->id,
            "slug" => "john-mewett",
            "name" => "John Mewett",
            "email" => "john.mewett@screwfix.com",
            "job_title" => "Chief Executive Officer",
            "phone" => "01234567890",
            "address" => "Trade House, Mead Avenue, Yeovil, Somerset, BA22 8RT",
            "summary" => "John Mewett is a British businessman, and the chief executive officer of Screwfix, a division of Kingfisher plc.",
            "description" => "John Mewett is a British businessman, and the chief executive officer of Screwfix, a division of Kingfisher plc. He is known for his love of Screwfix's range of power tools and is often seen using them in the office. Prior to working at Screwfix, John worked at B&Q and Homebase. Originally from Somerset, he now lives in London with his wife and two children.",
        ]);

        Employee::create([
            "user_id" => $user->id,
            "company_id" => $bosch->id,
            "slug" => "stefan-hartung",
            "name" => "Stefan Hartung",
            "email" => "stefan.hartung@bosch.com",
            "job_title" => "Chief Executive Officer",
            "phone" => "01234567890",
            "address" => "Robert Bosch GmbH, Postfach 10 60 50, 70049 Stuttgart, Germany",
            "summary" => "Stefan Hartung is a German businessman, and the chief executive officer of Bosch, a multinational engineering and technology company.",
            "description" => "Stefan Hartung is a German businessman, and the chief executive officer of Bosch, a multinational engineering and technology company. He is known for his love of Bosch's range of power tools and is often seen using them in the office. Prior to working at Bosch, Stefan worked at Siemens and BMW. Originally from Stuttgart, he now lives in Berlin with his wife and two children.",
        ]);




    }
}
