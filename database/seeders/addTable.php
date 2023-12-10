<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;


class addTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('inputkf')->insert([
            ['imageinputkf'=>'k701.svg','Nameinputkf'=>'Spacious pockets'],
            ['imageinputkf'=>'k702.svg','Nameinputkf'=>'Drawstring hood'],
            ['imageinputkf'=>'k703.svg','Nameinputkf'=>'Without side seams'],
            ['imageinputkf'=>'k704.svg','Nameinputkf'=>'Fiber composition'],
            ['imageinputkf'=>'k705.svg','Nameinputkf'=>'100% Polyester'],
            ['imageinputkf'=>'k706.svg','Nameinputkf'=>'Moisture wicking material'],
            ['imageinputkf'=>'k707.svg','Nameinputkf'=>'1x1 Ribbed cuffs and bottom hem'],
            ['imageinputkf'=>'k708.svg','Nameinputkf'=>'Hand-dyed'],
            ['imageinputkf'=>'k709.svg','Nameinputkf'=>'With side seams'],
            ['imageinputkf'=>'k710.svg','Nameinputkf'=>'Hood with drawstring'],
            ['imageinputkf'=>'k711.svg','Nameinputkf'=>'1x1 Ribbed cuffs and bottom hem with spandex'],
            ['imageinputkf'=>'k712.svg','Nameinputkf'=>'Double needle stitching on all seams'],
            ['imageinputkf'=>'k713.svg','Nameinputkf'=>'Ribbed knit collar with seam'],
            ['imageinputkf'=>'k714.svg','Nameinputkf'=>'Overlocked seams'],
            ['imageinputkf'=>'k715.svg','Nameinputkf'=>'Necktape'],
            ['imageinputkf'=>'k716.svg','Nameinputkf'=>'Lapel collar'],
            ['imageinputkf'=>'k717.svg','Nameinputkf'=>'3 Button Placket'],
            ['imageinputkf'=>'k718.svg','Nameinputkf'=>'Round neckline'],
            ['imageinputkf'=>'k719.svg','Nameinputkf'=>'Raw sleeve edge'],
            ['imageinputkf'=>'k720.svg','Nameinputkf'=>'Shoulder tape'],
            ['imageinputkf'=>'k721.svg','Nameinputkf'=>'Fabric'],
            ['imageinputkf'=>'k722.svg','Nameinputkf'=>'Rib Knit'],
            ['imageinputkf'=>'k723.svg','Nameinputkf'=>'All over print'],
            ['imageinputkf'=>'k725.svg','Nameinputkf'=>'With overlock side seams'],
            ['imageinputkf'=>'k726.svg','Nameinputkf'=>'Shoulder tape'],
            ['imageinputkf'=>'k727.svg','Nameinputkf'=>'Zipper with metal head'],
            ['imageinputkf'=>'k728.svg','Nameinputkf'=>'Neck and shoulder tape'],
            ['imageinputkf'=>'k729.svg','Nameinputkf'=>'Direct-to-Film (DTF) print'],
            ['imageinputkf'=>'k730.svg','Nameinputkf'=>'Ribbed-knit cuffs and waistband'],
            ['imageinputkf'=>'k731.svg','Nameinputkf'=>'Twill necktape'],
            ['imageinputkf'=>'k732.svg','Nameinputkf'=>'Microwave-safe'],
            ['imageinputkf'=>'k733.svg','Nameinputkf'=>'Dishwasher-safe'],
            ['imageinputkf'=>'k734.svg','Nameinputkf'=>'Glossy ceramic'],
            ['imageinputkf'=>'k735.svg','Nameinputkf'=>'ORCA coating'],
            ['imageinputkf'=>'k736.svg','Nameinputkf'=>'Stainless Steel with enamel finish'],
            ['imageinputkf'=>'k737.svg','Nameinputkf'=>'Durability'],
            ['imageinputkf'=>'k738.svg','Nameinputkf'=>'Reinforced Stitching'],
            ['imageinputkf'=>'k739.svg','Nameinputkf'=>'Adjustable strap closure'],
            ['imageinputkf'=>'k740.svg','Nameinputkf'=>'Four color combinations'],
            ['imageinputkf'=>'k741.svg','Nameinputkf'=>'Hemmed edges'],
            ['imageinputkf'=>'k742.svg','Nameinputkf'=>'Cotton web handles'],
            ['imageinputkf'=>'k743.svg','Nameinputkf'=>'100% Polyester pillow insert'],
            ['imageinputkf'=>'k744.svg','Nameinputkf'=>'Beige plastic zipper with metal head'],
            ['imageinputkf'=>'k745.svg','Nameinputkf'=>'Two sizes'],
            ['imageinputkf'=>'k746.svg','Nameinputkf'=>'Envelope closure'],
            ['imageinputkf'=>'k747.svg','Nameinputkf'=>'Teddy Bear']
           
        ]);

        \DB::table('inputci')->insert([
            ['imageinputci'=>'k601.svg','description'=>'Machine wash: warm (max 40C or 105F);'],
            ['imageinputci'=>'k602.svg','description'=>'Bleach as needed;'],
            ['imageinputci'=>'k603.svg','description'=>'Tumble dry: medium heat;'],
            ['imageinputci'=>'k604.svg','description'=>'Iron, steam or dry: low heat;'],
            ['imageinputci'=>'k605.svg','description'=>'Do not dryclean.'],
            ['imageinputci'=>'k606.svg','description'=>'Do not iron;'],
            ['imageinputci'=>'k607.svg','description'=>'Tumble dry: low heat;'],
            ['imageinputci'=>'k608.svg','description'=>'Do not bleach;'],
            ['imageinputci'=>'k609.svg','description'=>'Machine wash: cold (max 30C or 90F).'],
            ['imageinputci'=>'k610.svg','description'=>'Do not tumble dry;'],
            ['imageinputci'=>'k611.svg','description'=>'Non-chlorine: bleach as needed;'],
            ['imageinputci'=>'k612.svg','description'=>'steam or dry: medium heat;'],
            ['imageinputci'=>'k613.svg','description'=>'Dry flat; '],
            ['imageinputci'=>'k614.svg','description'=>'Bleach as needed;'],
            ['imageinputci'=>'k615.svg','description'=>'Iron, team or dry: medium heat;'],
            ['imageinputci'=>'','description'=>'Clean in dishwasher or wash by hand with warm water and dish soap.'],
            ['imageinputci'=>'','description'=>'Hand wash only.'],
            ['imageinputci'=>'','description'=>'Use warm water and dish soap and clean spots off your hat. Its not necessary to soak the whole item. For hard to clean spots use a soft bristled brush.'],
            ['imageinputci'=>'','description'=>'Remove all items from the bag before cleaning. Suggested to pretreat visible stains with stain remover. Mix warm water with laundry detergent and clean the bag with terry washcloth or a soft bristle brush. Let the bag air dry.'],
            ['imageinputci'=>'','description'=>'Do not expose to the sun, keep in a dry place; Before cleaning the bag, remove all the items from the bag. Suggested to pretreat visible stains with stain remover. Mix warm water with laundry detergent and clean the bag with terry washcloth or soft bristle brush. Let the bag air dry.'],
            ['imageinputci'=>'','description'=>'Remove the pillow cover. Pre-treat the stains with soft cloth or bristle brush that had been soaked in warm soapy water. Machine wash, max 40°C (104°F), normal cycle. Do not bleach, tumble dry on low, do not dry-clean. Iron, steam, or dry low heat only. Fluff to reshape when assembling it back together.'],
            ['imageinputci'=>'','description'=>'Use warm water and dish soap to clean spots off your pad. Its not necessary to soak the whole pad. For hard-to-clean spots use a soft-bristled brush.'],
            ['imageinputci'=>'k623.svg','description'=>'Line dry;'],
            ['imageinputci'=>'','description'=>'Spot clean the surface with mild soapy water and a microfiber cloth. Then, remove the soap residue with a warm, damp microfiber cloth. Let air dry. Use the same procedure to the t-shirt being careful to avoid rubbing the picture area.']
           
        ]);
        
        \DB::table('Size')->insert([
            ['NameSize'=>'S'],
            ['NameSize'=>'M'],
            ['NameSize'=>'L'],
            ['NameSize'=>'XL'],
            ['NameSize'=>'size2XL'],
            ['NameSize'=>'size3XL'],
            ['NameSize'=>'size4XL'],
            ['NameSize'=>'size5XL']
        ]);
        \DB::table('Color')->insert([
            ['nameColor'=>'White','imageColor' => 'colorWhite.jpg'],
            ['nameColor'=>'Red','imageColor' => 'colorRed.jpg'],
            ['nameColor'=>'Black','imageColor' => 'colorBlack.jpg'],
            ['nameColor'=>'Heather gray','imageColor' => 'colorHeatherGray.jpg'],
            ['nameColor'=>'Royal blue','imageColor' => 'colorRoyalBlue.jpg'],
            ['nameColor'=>'Deep navy','imageColor' => 'colorDeepNavy.jpg'],
            ['nameColor'=>'Navy','imageColor' => 'colorNavy.jpg'],
            ['nameColor'=>'Sun yellow','imageColor' => 'colorSunYellow.jpg'],
            ['nameColor'=>'Burgundy','imageColor' => 'colorBurgundy.jpg'],
            ['nameColor'=>'Sand','imageColor' => 'colorSand.jpg'],
            ['nameColor'=>'Forest green','imageColor' => 'colorForestGreen.jpg'],
            ['nameColor'=>'Purple','imageColor' => 'colorPurple.jpg'],
            ['nameColor'=>'Khaki','imageColor' => 'colorKhaki.jpg'],
            ['nameColor'=>'Pink','imageColor' => 'colorPink.jpg'],
            ['nameColor'=>'Brown','imageColor' => 'colorBrown.jpg']
        ]);
        \DB::table('Users')->insert([
            ['Name'=>'Huyen','password'=> 'huyen123','Email' => 'huyen123@gmail.com', 'role'=>'1','lock'=>'1'],
            ['Name'=>'Hieu','password'=> 'hieu123','Email' => 'hieu123@gmail.com', 'role'=>'1','lock'=>'1'],
            ['Name'=>'Hung','password'=> 'hung123','Email' => 'hung123@gmail.com', 'role'=>'1','lock'=>'1'],
            ['Name'=>'Lan','password'=> 'lan123','Email' => 'lan123@gmail.com', 'role'=>'1','lock'=>'1'],
            ['Name'=>'Linh','password'=> 'linh123','Email' => 'linh123@gmail.com', 'role'=>'1','lock'=>'1'],
            ['Name'=>'Kiet','password'=> 'kiet123','Email' => 'kiet123@gmail.com', 'role'=>'1','lock'=>'1'],
            ['Name'=>'Hai','password'=> 'hai123','Email' => 'hai123@gmail.com', 'role'=>'1','lock'=>'1'],
            ['Name'=>'Hoang','password'=> 'hoang123','Email' => 'hoang123@gmail.com', 'role'=>'1','lock'=>'1'],
            ['Name'=>'Tien','password'=> 'tien123','Email' => 'tien123@gmail.com', 'role'=>'1','lock'=>'1'],
            ['Name'=>'Hong','password'=> 'hong123','Email'=> 'hong123@gmail.com', 'role'=>'1','lock'=>'1'],
            ['Name'=>'Huy ','password'=> 'huy123','Email'=> 'huy123@gmail.com', 'role'=>'1','lock'=>'1'],
            ['Name'=>'Tram','password'=> 'tram123','Email'=> 'tram123@gmail.com', 'role'=>'1','lock'=>'1'],
            ['Name'=>'Tung','password'=> 'tung123','Email'=> 'tung123@gmail.com', 'role'=>'1','lock'=>'1'],
            ['Name'=>'Nhan','password'=> 'nhan123','Email'=> 'nhan123@gmail.com', 'role'=>'1','lock'=>'1'],
            ['Name'=>'Hang','password'=> 'hang123','Email'=> 'hang123@gmail.com', 'role'=>'1','lock'=>'1']
        ]);
        \DB::table('Shop')->insert([
            ['idShop' => 1,'nameShop'=>'Huyenshop','avataShop'=> 'avtUser1.jpg','coverImageShop' => 'coverImg1.jpg', 'locationShop' => 'VietNam','descriptionShop' => 'Passion creates a career'],
            ['idShop' => 2,'nameShop'=>'Hieushop','avataShop'=> 'avtUser2.webp','coverImageShop' => 'coverImg2.jpg', 'locationShop' => 'VietNam','descriptionShop' => 'unique products for you'],
            ['idShop' => 3,'nameShop'=>'Hungshop','avataShop'=> 'avtUser3.jpg','coverImageShop' => 'coverImg3.webp', 'locationShop' => 'USA','descriptionShop' => 'Welcome you to visit'],
            ['idShop' => 4,'nameShop'=>'Lanshop','avataShop'=> 'avtUser4.jpg','coverImageShop' => 'coverImg4.webp', 'locationShop' => 'USA','descriptionShop' => 'Create meaningful products'],
            ['idShop' => 5,'nameShop'=>'Linhshop','avataShop'=> 'avtUser5.jpg','coverImageShop' => 'coverImg5.webp', 'locationShop' => 'VietNam','descriptionShop' => 'Passion creates a career']
        ]);
        \DB::table('category_Pr')->insert([
            ['nameCategoryPr'=>'Products'],
            ['nameCategoryPr'=>'Trending now'],
            ['nameCategoryPr'=>'Licensed merch'],
            ['nameCategoryPr'=>'All kids merch'],
            ['nameCategoryPr'=>'MEN CLOTHING'],
            ['nameCategoryPr'=>'WOMENT CLOTHING'],
            ['nameCategoryPr'=>'CHILDREN'],
            ['nameCategoryPr'=>'ACCESSORIES'],
            ['nameCategoryPr'=>'HOME & LIVING'],
            ['nameCategoryPr'=>'GIFT IDEAS']
        ]);
        \DB::table('category_Pr_Detail')->insert([
            ['idCategoryPr' => '5','nameCategoryPrDetail'=>'Hoodies'],
            ['idCategoryPr' => '5','nameCategoryPrDetail'=>'Sweatshirt'],
            ['idCategoryPr' => '5','nameCategoryPrDetail'=>'Polo shirt'],
            ['idCategoryPr' => '5','nameCategoryPrDetail'=>'Tank top'],
            ['idCategoryPr' => '5','nameCategoryPrDetail'=>'Clothing'],
            ['idCategoryPr' => '5','nameCategoryPrDetail'=>'Shirt'],
            ['idCategoryPr' => '5','nameCategoryPrDetail'=>'Aprons'],
            ['idCategoryPr' => '5','nameCategoryPrDetail'=>'Hat'],
            ['idCategoryPr' => '5','nameCategoryPrDetail'=>'Hoodie zip'],

            ['idCategoryPr' => '6','nameCategoryPrDetail'=>'Hoodies'],
            ['idCategoryPr' => '6','nameCategoryPrDetail'=>'Sweatshirt'],
            ['idCategoryPr' => '6','nameCategoryPrDetail'=>'Polo shirt'],
            ['idCategoryPr' => '6','nameCategoryPrDetail'=>'Tank top'],
            ['idCategoryPr' => '6','nameCategoryPrDetail'=>'Long sleeves'],
            ['idCategoryPr' => '6','nameCategoryPrDetail'=>'Shirt'],
            ['idCategoryPr' => '6','nameCategoryPrDetail'=>'Aprons'],
            ['idCategoryPr' => '6','nameCategoryPrDetail'=>'Hat'],
            ['idCategoryPr' => '6','nameCategoryPrDetail'=>'Hoodie zip'],
            ['idCategoryPr' => '7','nameCategoryPrDetail'=>'Teen T-shirts'],
            ['idCategoryPr' => '7','nameCategoryPrDetail'=>'Childrens Shirts'],
            ['idCategoryPr' => '7','nameCategoryPrDetail'=>'Sleeves for children'],
            ['idCategoryPr' => '7','nameCategoryPrDetail'=>'Childrens hoodies and sweatshirts'],
            ['idCategoryPr' => '7','nameCategoryPrDetail'=>'Childrens T-Shirts'],
            ['idCategoryPr' => '7','nameCategoryPrDetail'=>'Long-sleeved shirts for babies'],
            ['idCategoryPr' => '7','nameCategoryPrDetail'=>'Baby body suitss'],
            ['idCategoryPr' => '7','nameCategoryPrDetail'=>'Childrens hats'],
            ['idCategoryPr' => '8','nameCategoryPrDetail'=>'Phone case'],
            ['idCategoryPr' => '8','nameCategoryPrDetail'=>'Cup'],
            ['idCategoryPr' => '8','nameCategoryPrDetail'=>'Beanie'],
            ['idCategoryPr' => '8','nameCategoryPrDetail'=>'Wrap towel around'],
            ['idCategoryPr' => '8','nameCategoryPrDetail'=>'Tote bag'],
            ['idCategoryPr' => '8','nameCategoryPrDetail'=>'Drawstring bag'],
            ['idCategoryPr' => '8','nameCategoryPrDetail'=>'Gift box'],
            ['idCategoryPr' => '8','nameCategoryPrDetail'=>'Beggar bag'],
            ['idCategoryPr' => '8','nameCategoryPrDetail'=>'Wee bag'],
            ['idCategoryPr' => '9','nameCategoryPrDetail'=>'Cup'],
            ['idCategoryPr' => '9','nameCategoryPrDetail'=>'Travel mug'],
            ['idCategoryPr' => '9','nameCategoryPrDetail'=>'Water bottles'],
            ['idCategoryPr' => '9','nameCategoryPrDetail'=>'Lunch box'],
            ['idCategoryPr' => '9','nameCategoryPrDetail'=>'Apron'],
            ['idCategoryPr' => '9','nameCategoryPrDetail'=>'Pillowcase'],
            ['idCategoryPr' => '9','nameCategoryPrDetail'=>'Mouse pad'],
            ['idCategoryPr' => '9','nameCategoryPrDetail'=>'Teddy bear toy'],
            ['idCategoryPr' => '9','nameCategoryPrDetail'=>'Poster'],
            ['idCategoryPr' => '10','nameCategoryPrDetail'=>'Gifts for Men'],
            ['idCategoryPr' => '10','nameCategoryPrDetail'=>'Gifts for Women'],
            ['idCategoryPr' => '10','nameCategoryPrDetail'=>'Gifts for Kids'],
            ['idCategoryPr' => '10','nameCategoryPrDetail'=>'Gift for Couples'],
            ['idCategoryPr' => '10','nameCategoryPrDetail'=>'Gifts for CFilm Fans'],
            ['idCategoryPr' => '10','nameCategoryPrDetail'=>'Birthday Gifts'],
            ['idCategoryPr' => '10','nameCategoryPrDetail'=>'Wedding Gifts'],
            ['idCategoryPr' => '10','nameCategoryPrDetail'=>'Baby Shower Gifts'],
            ['idCategoryPr' => '10','nameCategoryPrDetail'=>'New Baby Gifts'],
            ['idCategoryPr' => '10','nameCategoryPrDetail'=>'Retirement Gifts'],
        ]);
        \DB::table('Providers')->insert([
            ['Name'=>'X-Print','description' => 'X-Print uses 6 colors CMYKRG + White, Up to 1,200 dpi - Cotton, Polyester, Cotton- Polyester Blends, Lycra, Viscose, Silk, Leather, Denim, Linen, Wool and more. Ink - NeoPigment™, inks are absolutely free of heavy metals, formaldehyde and Alkylphenol Ethoxylates (APE), making them non-hazardous and non-toxic.','location' => 'Germany','evalue' => '4.75'],
            ['Name'=>'Monster Digital','description' => 'The apparel is decorated with the direct-to-garment (DTG) print method. Monster Digital uses only top-of-the-line equipment; they currently run Kornit Avalanche HD6 and the brand new Atlas machines. Monster Digital has built proprietary software and technology that runs throughout our operation. It is the secret sauce that makes their equipment and operation teams run at optimal efficiency. The entire process is eco-friendly; inks are water-based, bio-degradable and non-toxic; their production is fully automated and paperless. Monster Digital uses the newest inks and pre-sprays and there is absolutely no odor.','location' => 'US','evalue' => '4.75'],
            ['Name'=>'Dimona Tee','description' => 'Dimona Tee decorates apparel, using the direct-to-garment (DTG) print method. Dimona Tee uses state-of-the-art Kornit HD6 Machines. Your designs will be printed with exceptional quality.','location' => 'US','evalue' => '4.6'],
            ['Name'=>'SwiftPOD','description' => 'SwiftPOD uses Brother GTX to produce outstanding full-color direct-to-garment (DTG) prints, at 1200 DPI, using cutting-edge Innobella inks. Innobella Textile inks are water-based pigment inks that are OEKO-TEX, Eco-Pass certified and CPSIA-compliant. You can be confident that their print has high durability and washability because Innobella Textile inks have scored 4.0 or higher on the AATCC wash test. !! Please note that while the inner neck labels on SwiftPOD garments are printed using DTF (direct to film) technology, the rest of the garment is printed using DTG (direct to garment) printing technology.','location' => 'US','evalue' => '4.3'],
            ['Name'=>'Awkward Styles','description' => 'Awkward Styles utilizes Kornit Atlas, Kornit Avalanche, Brother GTX and GTX PRO printers for apparel, Mimaki and Epson printers for wall art and home decor. Our gear is designed for versatility, reliability, and guarantees excellent print results for all designs. Meanwhile, our specially formulated inks and advanced features deliver vivid colors that are unmatched.','location' => 'US','evalue' => '4.1'],
            ['Name'=>'Print Clever','description' => 'Print Clever prints with the digital print method using a fleet of Mimaki UCJV300 printers all under 3 years old. The printers are equipped with twin heads, increasing the print time without losing quality. We only use genuine Mimaki inks in all of our printers. !! Please note that while the inner neck labels on Print Clever garments are printed using DTF (direct to film) technology, the rest of the garment is printed using DTG (direct to garment) printing technology.','location' => 'UK','evalue' => '4.1'],
            ['Name'=>'Marco Fine Arts','description' => 'Marco Fine Arts decorate apparel with the direct-to-garment (DTG) print method. They are using OvalJet’s patented closed-loop technology. Each garment is moved through a carousel of automated stations that pretreat, dry, and heat press garments in one smooth motion. OvalJets Ricoh Gen 5 print heads lay down 600x1800 dpi of high-quality ink for each image. This allows designers to experiment with colors, gradients, and photorealistic images.','location' => 'US','evalue' => '4.0'],
            ['Name'=>'Prima Printing','description' => 'Prima Printing uses the official Epson and Ricoh Ink for their printers. For Dye sublimation, they use Japanese inks and papers tailored specifically for the surface type of the blank.','location' => 'Australia','evalue' => '4.8'],
            ['Name'=>'Print Geek','description' => 'The apparel is decorated with direct-to-garment (DTG) method and printed using industry-leading equipment that use water-based, eco-friendly inks that are biodegradable. These non-hazardous, non-toxic inks are proudly free of heavy metals, formaldehyde and Alkylphenol Ethoxylates (APE), making them safe and soft for your skin. These inks stand up to the highest level of environmental and safety tests, making them Oeko-Tex® Standard 100 – Class I accredited, ECO PASSPORT certified, Global Organic Textile Standard (GOTS) certified, and American Association of Textile Chemists and Colorists compliant.','location' => 'Canada','evalue' => '4.75'],
            ['Name'=>'Print Logistic','description' => 'Print Logistic decorate apparel with the direct-to-garment (DTG) method. They use Kornit Avalanche HD6 DTG printers.','location' => 'Poland','evalue' => '4.7'],
            ['Name'=>'Textildruck Europa','description' => 'Textildruck Europa uses Kornit Avalanche HD and Brother GTX machines that use CMYKRG + white, and can print at up to 1,200 DPI. Their ink is environmentally friendly, non-toxic, and resource-saving.','location' => 'Germany','evalue' => '4.5'],
            ['Name'=>'Fulfill Engine','description' => 'These products are printed with the direct-to-garment (DTG) method. For DTG products, Fulfill Engine uses standard Brother water-based inks.','location' => 'Canada','evalue' => '4.75'],
            ['Name'=>'The Print Bar','description' => 'X-Print uses 6 colors CMYKRG + White, Up to 1,200 dpi - Cotton, Polyester, Cotton- Polyester Blends, Lycra, Viscose, Silk, Leather, Denim, Linen, Wool and more. Ink - NeoPigment™, inks are absolutely free of heavy metals, formaldehyde and Alkylphenol Ethoxylates (APE), making them non-hazardous and non-toxic.','location' => 'Australia','evalue' => '4.75'],
            ['Name'=>'SinaLite','description' => 'SinaLite utilizes the latest garment printing technology and inks from Brother Intl. The Brother GTX, is the industry’s acclaimed top-rated DTG printer which provides greater vibrancy and the widest color spectrum. They use water-based pigment inks, non-hazardous, and non-toxic, and it is ECO PASSPORT by OKEO-TEX® certified and CPSIA compliant. The ink comes in innovative packaging which uses less plastic in replaceable pouches, so there is less waste and less impact on the environment. The printed garment will sustain multiple washings and maintain its integrity for a long time.','location' => 'UK','evalue' => '4.1'],
            ['Name'=>'Drive Fulfillment','description' => 'Drive Fulfillment utilizes the Kornit Atlas for all DTG printing. The Atlas is a heavy-duty system created for super-industrial garment decoration and used the new NeoPigment Eco-Rapid Ink. The new NeoPigmentTM Eco-Rapid ink is the main driver of the Atlas’ retail quality prints. It provides an industry-leading white ink opacity, matched to those of conventional screen inks, and meets the highest durability standards on multiple fabric types. Its increased color gamut and saturation allow for deep full tones and precise spot color matching. The new ink has been developed with sustainability in mind, carries the Oeko-Tex Eco-Passport certification, and is GOTS pre-approved.','location' => 'Poland','evalue' => '4.7']
        ]);
        \DB::table('category_OPr')->insert([
            ['nameCategoryOPr'=>'Featured Products','descriptionCategoryOPr' => 'Here are some of the most popular product categories in our catalog'],
            ['nameCategoryOPr'=>'Seasonal Picks' ,'descriptionCategoryOPr' =>'.'],
            ['nameCategoryOPr'=>'Bestsellers' ,'descriptionCategoryOPr' =>'These items have proven themselves over and over again to be customer favorites in various niches. Decorate one (or all) width your original art work and publish them to your store. There high chance that your customers will love them as much as everyone else'],
            ['nameCategoryOPr'=>'New Arrivals' ,'descriptionCategoryOPr' =>'Browse all the latest additions to our catelog in one place. Dive in to find your new bestseller'],
            ['nameCategoryOPr'=>'Eco-friendly' ,'descriptionCategoryOPr' =>'From candles to phone cases to apparel, heres where you will find all Mother Natures picks for your eco-conscious shoppers - all made from organic and sustainable source.'],
            ['nameCategoryOPr'=>'AOP Clothing' ,'descriptionCategoryOPr' =>'Customize these items to the moon and back with vibrant colors and striking pattern. The print and fabric become oane, making sure they will last a lifetime without peeling or cracking'],
            ['nameCategoryOPr'=>'Assembled in the USA' ,'descriptionCategoryOPr' =>'.'],
            ['nameCategoryOPr'=>'Neck Labels' ,'descriptionCategoryOPr' =>'.'],
            ['nameCategoryOPr'=>'Imprint Choice' ,'descriptionCategoryOPr' =>'.'],
            ['nameCategoryOPr'=>'Mens Clothing' ,'descriptionCategoryOPr' =>'Fashion and character meet persinalization in essential pieces for every man wardrobe. From causal tees and all-over-print sweatshirts to workout gear and more - custom mens clothing offers a variety in color, shape, style, and form. 
                Unleash your creativity with the top printing mathods like DTG anf sublimation on popular items like puffer jackets for colder nights or
                Hawaiian shirts for summer vibes. Design print-on-demand mens clothing, and youf custom products will be a hit all year round - as wardrobe staples and online bestsellers.'],
            ['nameCategoryOPr'=>'Women Clothing' ,'descriptionCategoryOPr' =>'From everyday tees and sublimation sweatshirts to skirts, bikinis, workout gear, and more - custom womens clothing has a variety of items to choose from for every life event, occasion, or daily use. Design and sell print-on-demand womens clothing to attract an audience all year round - with cozy pajama pants, custom dresses for bachelorettes, or stylish crop tops to pair with comfy jeans. Our Catalog has everything you need to create a unique collection of custom womens clothing to sell worldwide.'],
            ['nameCategoryOPr'=>'Kid Clothing' ,'descriptionCategoryOPr' =>'Discover everything you need to create your own custom kids clothing line. T-Shirts, baby clothing, pants, sportswear, sweatshirt, baby swaddle blankets, and footwear await your playful and whimsical designs. Ready to make print-on-demand kids clothing that delight parent and makes little ones smila wide? Dive right in.'],
            ['nameCategoryOPr'=>'Accessories' ,'descriptionCategoryOPr' =>'Custom accessories are merchant favorites - they come in uniform sizes and fit everyone. You can quickly design and sell custom accessories to fit any style or jump on a rapidly emerging fashion trend'],
            ['nameCategoryOPr'=>'Home & Living' ,'descriptionCategoryOPr' =>'Find function and fresh aesthetics with customizable pieces made for everyday living']
        ]);
        \DB::table('category_OPr_Detail')->insert([
            ['idCategoryOPr' => '10','nameCategoryOPrDetail'=>'Hoodies', 'image'=>'categoryOPrHoodie.png'],
            ['idCategoryOPr' => '10','nameCategoryOPrDetail'=>'Sweatshirt', 'image'=>'categoryOPr2.png'],
            ['idCategoryOPr' => '10','nameCategoryOPrDetail'=>'Polo shirt', 'image'=>'categoryOPr3.avif'],
            ['idCategoryOPr' => '10','nameCategoryOPrDetail'=>'Tank top', 'image'=>'categoryOPr4.png'],
            ['idCategoryOPr' => '10','nameCategoryOPrDetail'=>'Shirt', 'image'=>'categoryOPr5.png'],
            ['idCategoryOPr' => '10','nameCategoryOPrDetail'=>'Hoodies zip & Jackets', 'image'=>'categoryOPr6.png'],
            ['idCategoryOPr' => '11','nameCategoryOPrDetail'=>'Hoodies', 'image'=>'categoryOPr7.png'],
            ['idCategoryOPr' => '11','nameCategoryOPrDetail'=>'Sweatshirt', 'image'=>'categoryOPr8.png'],
            ['idCategoryOPr' => '11','nameCategoryOPrDetail'=>'Polo shirt', 'image'=>'categoryOPr3.avif'],
            ['idCategoryOPr' => '11','nameCategoryOPrDetail'=>'Tank top', 'image'=>'categoryOPr9.png'],
            ['idCategoryOPr' => '11','nameCategoryOPrDetail'=>'Long sleeves', 'image'=>'categoryOPr10.png'],
            ['idCategoryOPr' => '11','nameCategoryOPrDetail'=>'Shirt', 'image'=>'categoryOPr11.png'],
            ['idCategoryOPr' => '11','nameCategoryOPrDetail'=>'Hoodie zip', 'image'=>'categoryOPr12.png'],
            ['idCategoryOPr' => '12','nameCategoryOPrDetail'=>'Kid Shirts', 'image'=>'categoryOPr13.png'],
            ['idCategoryOPr' => '12','nameCategoryOPrDetail'=>'Sleeves for children', 'image'=>'categoryOPr14.png'],
            ['idCategoryOPr' => '12','nameCategoryOPrDetail'=>'Childrens hoodies and sweatshirts', 'image'=>'categoryOPr15.png'],
            ['idCategoryOPr' => '12','nameCategoryOPrDetail'=>'Baby body suitss', 'image'=>'categoryOPr16.png'],
            ['idCategoryOPr' => '13','nameCategoryOPrDetail'=>'Mugs & Cup', 'image'=>'categoryOPr17.png'],
            ['idCategoryOPr' => '13','nameCategoryOPrDetail'=>'Hat & Cap', 'image'=>'categoryOPr18.png'],
            ['idCategoryOPr' => '13','nameCategoryOPrDetail'=>'Aprons', 'image'=>'categoryOPr19.png'],
            ['idCategoryOPr' => '13','nameCategoryOPrDetail'=>'Bandana', 'image'=>'categoryOPr20.png'],
            ['idCategoryOPr' => '13','nameCategoryOPrDetail'=>'Bags', 'image'=>'categoryOPr21.png'],
            ['idCategoryOPr' => '14','nameCategoryOPrDetail'=>'Water bottles', 'image'=>'categoryOPr22.png'],
            ['idCategoryOPr' => '14','nameCategoryOPrDetail'=>'Pillowcase', 'image'=>'categoryOPr23.png'],
            ['idCategoryOPr' => '14','nameCategoryOPrDetail'=>'Mouse pad', 'image'=>'categoryOPr24.png'],
            ['idCategoryOPr' => '14','nameCategoryOPrDetail'=>'Teddy bear toy', 'image'=>'categoryOPr25.avif'],
        ]);
        \DB::table('OriginalProducts')->insert([
            // idCategoryOPrDetail = 1
            ['idCategoryOPrDetail' => '1',
                'nameOPr' => 'Men Hoodie',
                'descriptionOPr' => 'Recycled polyester from plastic water bottles. 50% cotton (up to 7.7% reclaimed), 50% polyester (up to 7.7% recycled). Fabric Weaight: 7.8 oz (midweaight). Ribbed cuffs and waist hem. Adjustable drawstring hood.',
                'aboutOPr' => 'This Hanes classic is a comfortable classic. King of versatility, the mens hooded sweatshirt has become a staple in any wardrobe. Kangaroo-style front pocket is perfect for your phone, keys or anything else you want to stash.',
                'image'=> 'opr15.webp',
                'image'=> 'opr15.webp'],
            ['idCategoryOPrDetail' => '1',
                'nameOPr' => 'Unisex Lightweight Terry Hoodie',
                'descriptionOPr' => '60% Cotton/40% Polyester | Fabric weight: 7.08 oz (mid weight). Textured, terry (towel-like) fabric on sleeves and hood trim. Rough-cut, open cuffs and waist. Fitting node: Unisex cut falls to the waist and will fit tighter for men.',
                'aboutOPr' => 'Light as a long sleeve t-shirt with the features of a hoodie, our unisex lightweight terry hoodie is a super-versatile choice. When the weather is a little too cold for a short-sleeved tee and a little too warm for a heavy hoodie, this is the way to go. Terrycloth textures and rough-cut hems make this item an eye-catching choice. Bottom hem and sleeves have a raw edge.',
                'image'=> 'opr95.webp'],
                'aboutOPr' => 'Light as a long sleeve t-shirt with the features of a hoodie, our unisex lightweight terry hoodie is a super-versatile choice. When the weather is a little too cold for a short-sleeved tee and a little too warm for a heavy hoodie, this is the way to go. Terrycloth textures and rough-cut hems make this item an eye-catching choice. Bottom hem and sleeves have a raw edge.',
                'image'=> 'opr95.webp'],
            ['idCategoryOPrDetail' => '1',
                'nameOPr' => 'Unisex Contrast Hoodie',
                'descriptionOPr' => '60% cotton / 40% polyester | Fabric Weight: 7.2 oz (midweight). Contrasting jersey hood lining, neck tape and drwstring. Two-ply hood with aluminum grommets. Tear away label; double-needle cover-seamed cuffs, armholes, hood and waistband.',
                'aboutOPr' => 'Fashion-forward and classic comfort come together in this Contrast Hoodie by Fruit of the Loom. The 60/40 cotton/poly blend makes this hoodie not only breathable, but flexible and durable, as well. With quality, comfort and style, this hoodie is a triple threat.',
                'image'=> 'opr105.webp',
                'image'=> 'opr105.webp'],
            ['idCategoryOPrDetail' => '1',
                'nameOPr' => 'Unisex Shawl Collar Hoodie',
                'descriptionOPr' => 'Material: 80% cotton, 20% polyester (heather oatmeal: 70% cotton, 30% polyester) | Fabric weight: 9.66 oz (heavyweight). Cream-colored braided draw cord w/ genuine leather tip',
                'aboutOPr' => 'Winter weather has met its match. If you are looking to escape the cold, opt for the shawl collar hoodie. The sweater covers everything from your hips to your neck, allowing you to stay toasty at all times. Plus, thanks to the side-front pockets, your phone and wallet can stay warm, too.',
                'image'=> 'opr121.png'],
            ['idCategoryOPrDetail' => '1',
                'nameOPr' => 'Adidas Unisex Fleece Hoodie',
                'descriptionOPr' => 'Material: 70% BCI cotton/30% recycled polyester (Charcoal gray is 55% BCI cotton/45% recycled polyester) | Fabric weight: 8.5 oz (mid-weight). Pouch pocket. Cuff sleeves and hem. Contrast adidas logo on right arm.',
                'aboutOPr' => 'A sustainable, sporty staple fit for any occasion, whether working up a sweat or just getting comfy in style. Durable, warm, and designed for movement, this hoodie will do anything you do.',
                'image'=> 'opr141.png'],
            ['idCategoryOPrDetail' => '1','nameOPr' => 'Adidas Unisex Fleece Hoodie',
            'descriptionOPr' => 'Material: 70% BCI cotton/30% recycled polyester (Charcoal gray is 55% BCI cotton/45% recycled polyester) | Fabric weight: 8.5 oz (mid-weight). Pouch pocket. Cuff sleeves and hem. Contrast adidas logo on right arm.',
            'aboutOPr' => 'A sustainable, sporty staple fit for any occasion, whether working up a sweat or just getting comfy in style. Durable, warm, and designed for movement, this hoodie will do anything you do.',
            'image'=> 'opr141.png'],

            // idCategoryOPrDetail = 2
            ['idCategoryOPrDetail' => '2',
                'nameOPr' => 'Champion Unisex Powerblend Sweatshirt',
                'descriptionOPr' => '50% Cotton (up to 7.7% Reclaimed), 50% Polyester | Heavyweight 9.0 oz fabric. Durable cover stitching. Set-in sleeves. Heavy rib knit waistband and cuffs. Champion “C” logo at left cuff',
                'aboutOPr' => 'This Champion staple looks good worn in and won’t wear out. A classic style that is a great base for most outfits. Thick, warm and durable, this old faithful will keep you feeling comfortable and looking good.',
                'image'=> 'opr181.png'],
            ['idCategoryOPrDetail' => '2',
                'nameOPr' => 'Unisex Crewneck Sweatshirt',
                'descriptionOPr' => '50% preshrunk cotton/50% polyester. Made with 50% sustainably and fairly grown USA cotton. | Fabric Weight: 7.75 oz (midweight). Pill-resistant. 1X1 Lycra® spandex ribbed collar, cuffs and waist. Fully double-stitched',
                'aboutOPr' => 'This classic has stood the test of time. Always in fashion, this crewneck sweatshirt by Gildan is perfect as an outer, under or single layer. Soft and comfortable, this stand-by is a must.',
                'image'=> 'opr235.png'],
            ['idCategoryOPrDetail' => '2',
                'nameOPr' => 'Men’s Premium Sweatshirt',
                'descriptionOPr' => 'Material: 80% cotton, 20% polyester (heather: 85% cotton, 15% rayon). Smooth quality fabrics 8.3 oz (midweight). Combed cotton for long durability. Raglan sleeves, crew neck with triangle. Reinforced sleeves & waist cuffs.',
                'aboutOPr' => 'This classic crew-neck sweatshirt is an essential basic for anyone’s wardrobe. The ribbed cuffs on the sleeves and waist are reinforced, and the high-quality cotton ensure that you’ll enjoy this cuddly and cool sweatshirt for many moons to come.',
                'image'=> 'opr311.png'],
            
            // idCategoryOPrDetail = 3
            ['idCategoryOPrDetail' => '3',
                'nameOPr' => 'Men’s Pique Polo Shirt',
                'descriptionOPr' => '100% cotton | Heavyweight fabric (6 oz). Three-button closure. Topstitching for a crisp finish throughout',
                'aboutOPr' => 'Make an impression in this classic and durable men’s polo. A timeless, perfect companion for the office, the golf course, or everyday wear.',
            ['idCategoryOPrDetail' => '1','nameOPr' => 'Adidas Unisex Fleece Hoodie',
            'descriptionOPr' => 'Material: 70% BCI cotton/30% recycled polyester (Charcoal gray is 55% BCI cotton/45% recycled polyester) | Fabric weight: 8.5 oz (mid-weight). Pouch pocket. Cuff sleeves and hem. Contrast adidas logo on right arm.',
            'aboutOPr' => 'A sustainable, sporty staple fit for any occasion, whether working up a sweat or just getting comfy in style. Durable, warm, and designed for movement, this hoodie will do anything you do.',
            'image'=> 'opr141.png'],

        // idCategoryOPrDetail = 2
        ['idCategoryOPrDetail' => '2',
            'nameOPr' => 'Champion Unisex Powerblend Sweatshirt',
            'descriptionOPr' => '50% Cotton (up to 7.7% Reclaimed), 50% Polyester | Heavyweight 9.0 oz fabric. Durable cover stitching. Set-in sleeves. Heavy rib knit waistband and cuffs. Champion “C” logo at left cuff',
            'aboutOPr' => 'This Champion staple looks good worn in and won’t wear out. A classic style that is a great base for most outfits. Thick, warm and durable, this old faithful will keep you feeling comfortable and looking good.',
            'image'=> 'opr181.png'],
        ['idCategoryOPrDetail' => '2',
            'nameOPr' => 'Unisex Crewneck Sweatshirt',
            'descriptionOPr' => '50% preshrunk cotton/50% polyester. Made with 50% sustainably and fairly grown USA cotton. | Fabric Weight: 7.75 oz (midweight). Pill-resistant. 1X1 Lycra® spandex ribbed collar, cuffs and waist. Fully double-stitched',
            'aboutOPr' => 'This classic has stood the test of time. Always in fashion, this crewneck sweatshirt by Gildan is perfect as an outer, under or single layer. Soft and comfortable, this stand-by is a must.',
            'image'=> 'opr235.png'],
        ['idCategoryOPrDetail' => '2',
            'nameOPr' => 'Men’s Premium Sweatshirt',
            'descriptionOPr' => 'Material: 80% cotton, 20% polyester (heather: 85% cotton, 15% rayon). Smooth quality fabrics 8.3 oz (midweight). Combed cotton for long durability. Raglan sleeves, crew neck with triangle. Reinforced sleeves & waist cuffs.',
            'aboutOPr' => 'This classic crew-neck sweatshirt is an essential basic for anyone’s wardrobe. The ribbed cuffs on the sleeves and waist are reinforced, and the high-quality cotton ensure that you’ll enjoy this cuddly and cool sweatshirt for many moons to come.',
            'image'=> 'opr311.png'],
        
        // idCategoryOPrDetail = 3
        ['idCategoryOPrDetail' => '3',
            'nameOPr' => 'Men’s Pique Polo Shirt',
            'descriptionOPr' => '100% cotton | Heavyweight fabric (6 oz). Three-button closure. Topstitching for a crisp finish throughout',
            'aboutOPr' => 'Make an impression in this classic and durable men’s polo. A timeless, perfect companion for the office, the golf course, or everyday wear.',
                'image'=> 'opr355.webp'],
            ['idCategoryOPrDetail' => '3',
                'nameOPr' => 'Gildan Men’s 50/50 Jersey Polo',
                'descriptionOPr' => 'Material: 50% sustainably and fair grown USA cotton/50% polyester. Weight: 6.0 oz (midweight). DryBlend® fabric wicks moisture away from the body. Welt-knit collar and cuffs. Three-button placket. Double-needle stitched hemmed bottom.',
                'aboutOPr' => 'The 50/50 Jersey Polo is made with 50% sustainable and fairly grown USA cotton to ensure high quality at a low cost to the planet. Feel the difference, with advanced production processes and high-tech fabric to give you maximum comfort and durability.',
                'image'=> 'opr381.png'],

            // idCategoryOPrDetail = 4
            ['idCategoryOPrDetail' => '4',
                'nameOPr' => 'Men’s Tank',
                'descriptionOPr' => '100% cotton (heather gray is 95% cotton/5% viscose. charcoal gray is 80% cotton/20% polyester) | Fabric Weight: 4.42 oz (lightweight). Reinforced, double-stitched collar and arm openings. Fairly produced, certified and triple audited. Optimized for vibrant print results.',
                'aboutOPr' => 'Bring a touch of custom style to the gym or to the streets with these customized tank tops. Made to feel incredibly soft to the touch, these tank tops remain comfy on any occasion, and are perfect both as loungewear and leisurewear.',
                'image'=> 'opr434.webp'],
            ['idCategoryOPrDetail' => '4',
                'nameOPr' => 'Men’s Performance Sleeveless Shirt',
                'descriptionOPr' => '100% polyester | Fabric weight: 4 oz (lightweight). Sweat-wicking, lightweight and breathable. PosiCharge technology for vibrant color. Suitable for a variety of indoor and outdoor activities.',
                'aboutOPr' => 'Whether you’re hitting the court, going for a run or just like a sleeveless breeze – the performance shirt moves easily. Equipped with sweat-wicking and lightweight fabric, this shirt lets you do you.',
                'image'=> 'opr491.png'],

            // idCategoryOPrDetail = 5
            ['idCategoryOPrDetail' => '5',
                'nameOPr' => 'Men’s T-Shirt',
                'descriptionOPr' => '100% pre-shrunk cotton that is USA grown and sustainably sourced. (heather gray color is 90% cotton/10% polyester, light heather gray is 98% cotton/2% polyester, heather black and safety yellow are 50% cotton/50% polyester) | Fabric Weight: 5.0 oz (mid-weight). Double-stitched seams at shoulder, sleeve, collar and waist. Tear-away label for added comfort.',
                'aboutOPr' => 'The unisex soft-style t-shirt puts a new spin on casual comfort. Made from very soft materials, this tee is 100% cotton for solid colors. Heather colors and sports grey include polyester. The shoulders have twill tape for improved durability. There are no side seams. The collar is made with ribbed knitting to prevent curling damage.',
                'image'=> 'opr525.webp'],
            ['idCategoryOPrDetail' => '5',
                'nameOPr' => 'Champion Unisex T-Shirt',
                'descriptionOPr' => '100% cotton | Fabric weight: 6.0 oz (heavyweight). “C” logo on left sleeve. Tag-free neck label; shoulder-to-shoulder neck tape. Double-needle sleeves and bottom hem.',
                'aboutOPr' => 'This loose-fitting T-shirt is a unisex basic whose heavy fabric gives it a premium-quality feel. The “Champion” logo on the sleeve gives this shirt a sporty flair. Pairs perfectly with joggers.',
                'image'=> 'opr641.png'],

            // idCategoryOPrDetail = 6
            ['idCategoryOPrDetail' => '6',
                'nameOPr' => 'Men’s Zip Hoodie',
                'descriptionOPr' => '50% cotton/50% polyester | Fabric weight: 8 oz (midweight). Made with 50% sustainably and fairly grown USA cotton. Double-stitched hood, shoulders, pocket and waist. Split-by-zipper, kangaroo-style pocket. Adjustable, same-color drawstring hood.',
                'aboutOPr' => 'Easy to wear, easy to style, and still keeping with your organic aesthetics, we present the iconic mens zip-up hoodie sweatshirt. Laced with cool round drawcords in matching color with their metal tipping, a metal zipper, and eyelets, double-layered hood plus a kangaroo pocket with wide double topstitches, you will definitely enjoy the friendly touch to eco-fashion this zip hoodie brings.',
                'image'=> 'opr675.webp'],
            ['idCategoryOPrDetail' => '6',
                'nameOPr' => 'Men’s Soft Shell Jacket Ascender',
                'descriptionOPr' => '100% polyester Nexegen contour bonded soft shell / 100% polyester microfleece tricot lining | Fabric weight: 9.1 oz (midweight). Water-and-wind resistant. Adjustable cuffs and drawcord at bottom hem. Zippered chest pocket and hand pockets.',
                'aboutOPr' => 'Looking fashionable has never been easier with this men all-over print jacket with ribbed stand-up collar, elastic cuffs, and elasticized hem. Featuring the classic bomber jacket look, a durable zipper and two pouch pockets, this jacket is ready to take your everyday look a notch higher to reflect your unique personality and style.',
                'image'=> 'opr681.png'],

            // idCategoryOPrDetail = 7
            ['idCategoryOPrDetail' => '7',
                'nameOPr' => 'Women’s Hoodie',
                'descriptionOPr' => '80% cotton / 20% polyester (heather gray is 85% cotton / 15% rayon, heather denim and charcoal gray are 60% cotton, 40% polyester)| Fabric weight: 8.3 oz (midweight). Contrasting, complementary-colored drawstring and inner necktape. Stitched slit inside kangaroo-style pocket and a small loop inside the hood for headphone usage. Reinforced cuffs and waist. Combed-cotton exterior, fuzzy fleece interior.',
                'aboutOPr' => 'If you are looking for a top-quality, instant-favorite sweatshirt, you have come to the right place! Our Premium Hoodie from our t Collection is everything you could ask for: it is warm and cozy with a tailored and feminine fit, and it is built to last. This item runs small.',
                'image'=> 'opr706.webp'],
            ['idCategoryOPrDetail' => '7',
                'nameOPr' => 'Champion Unisex Powerblend Hoodie',
                'descriptionOPr' => '50% Cotton (up to 7.7% Reclaimed), 50% Polyester | Heavyweight 9.0 oz fabric. Kangaroo-pouch pocket for hands, phone, produce, or whatever. Durable cover stitching. Set-in sleeves. Heavy rib knit waistband and cuffs. Champion “C” logo at left cuff.',
                'aboutOPr' => 'This Champion staple looks good worn in and won’t wear out. A classic style that is a great base for most outfits. Thick, warm and durable, this old faithful will keep you feeling comfortable and looking good.',
                'image'=> 'opr775.png'],

            // idCategoryOPrDetail = 8
            ['idCategoryOPrDetail' => '8',
                'nameOPr' => 'Champion Unisex Powerblend Sweatshirt',
                'descriptionOPr' => '50% Cotton (up to 7.7% Reclaimed), 50% Polyester | Heavyweight 9.0 oz fabric. Durable cover stitching. Set-in sleeves. Heavy rib knit waistband and cuffs. Champion “C” logo at left cuff',
                'aboutOPr' => 'This Champion staple looks good worn in and won’t wear out. A classic style that is a great base for most outfits. Thick, warm and durable, this old faithful will keep you feeling comfortable and looking good.',
                'image'=> 'opr181.png'],
            ['idCategoryOPrDetail' => '8',
                'nameOPr' => 'Unisex Crewneck Sweatshirt',
                'descriptionOPr' => '50% preshrunk cotton/50% polyester. Made with 50% sustainably and fairly grown USA cotton. | Fabric Weight: 7.75 oz (midweight). Pill-resistant. 1X1 Lycra® spandex ribbed collar, cuffs and waist. Fully double-stitched',
                'aboutOPr' => 'This classic has stood the test of time. Always in fashion, this crewneck sweatshirt by Gildan is perfect as an outer, under or single layer. Soft and comfortable, this stand-by is a must.',
                'image'=> 'opr231.png'],

            // idCategoryOPrDetail = 9
            ['idCategoryOPrDetail' => '9',
                'nameOPr' => 'Women’s Pique Polo Shirt',
                'descriptionOPr' => '100% cotton | Heavyweight fabric (6 oz). Flattering feminine fit. Three-button closure. Topstitching for a crisp finish throughout',
                'aboutOPr' => 'Make an impression in this classic and durable women’s polo. A timeless, perfect companion for the office, the golf course, or everyday wear.',
                'image'=> 'opr955.webp'],

            // idCategoryOPrDetail = 10
            ['idCategoryOPrDetail' => '10',
                'nameOPr' => 'Women’s Performance Racerback Tank Top',
                'descriptionOPr' => '100% polyester | Fabric weight: 3.5 oz (lightweight). Effortless racerback style. Sweat-wicking and lightweight material. UV 40+ Protection.',
                'aboutOPr' => 'Look like a breeze in this sweat-wicking tank top during your next workout. This tank can do it all, from yoga to running errands. Bonus: The breathable fabric is ideal for wearing solo or for layering up post-gym.',
                'image'=> 'opr981.png'],
            ['idCategoryOPrDetail' => '10',
                'nameOPr' => 'Women’s Flowy Muscle Tank',
                'descriptionOPr' => '65% polyester / 35% viscose | Fabric weight: 3.7oz (lightweight). Low-cut arm holes. Loose fitting; drapes on the body. Flowy, lightweight material.',
                'aboutOPr' => 'Looking for the perfect tank for any type of workout? Then this is the item for you! Our flowy muscle tank by Bella is stylish and functional, making it the ideal piece for a run, a Zumba class, spinning, yoga, or any other kind of workout. Heck, you could even wear it lounging around the house or running errands. Its as versatile as it gets.',
                'image'=> 'opr1011.png'],
            ['idCategoryOPrDetail' => '10',
                'nameOPr' => 'Women’s Tank Top',
                'descriptionOPr' => '100% cotton (heather gray is 95% cotton/5% viscose. charcoal gray is 80% cotton/20% polyester) | Fabric Weight: 4.42 oz (lightweight). Wide range of sizes from S-3XL. Fairly produced, certified and triple audited.',
                'aboutOPr' => 'The women’s premium tank is ideal for anything from yoga and Pilates to layering over a bikini at the beach. Our entire collection is optimized for vibrant print results.',
                'image'=> 'opr1034.webp'],

            // idCategoryOPrDetail = 11
            ['idCategoryOPrDetail' => '11',
                'nameOPr' => 'Women’s Long Sleeve T-Shirt',
                'descriptionOPr' => 'Material: 100% cotton (Heather gray is 90% cotton, 10% polyester). Weight: 4.2 oz (lightweight). Made using sustainable processes. Tear-away label. Retail fit.',
                'aboutOPr' => 'A sustainable staple that hits all the right notes. Lightweight and versatile, this long-sleeve has a delicate side-seamed retail fit. Whatever the season, combine with the rest of your wardrobe for diverse looks.',
                'image'=> 'opr1101.png'],
            ['idCategoryOPrDetail' => '11',
            'nameOPr' => 'Women’s Slim Fit Long Sleeve T-Shirt',
                'descriptionOPr' => '100% cotton (heather gray and heather ice blue are 95%/5% viscose. charcoal gray is 80% cotton/20% polyester. heather burgundy is 60% cotton/40% polyester) | Fabric Weight: 4.42 oz (heavyweight). Fairly produced, certified and triple audited. Double stitched, reinforced seams at shoulder, sleeve, collar and waist. Optimized for beautiful brilliance across all printing methods.',
                'aboutOPr' => 'This premium long sleeve t-shirt is as close to perfect as can be. It’s optimized for all types of print and will quickly become your favorite layer. Soft, comfortable and durable, this is a definite must-own and a Spreadshirt recommended product. ITEM RUNS SMALL.',
                'image'=> 'opr1141.png'],

            // idCategoryOPrDetail = 12
            ['idCategoryOPrDetail' => '12',
                'nameOPr' => 'Women’s T-Shirt',
                'descriptionOPr' => '100% preshrunk cotton (heather gray is 90% cotton/10% polyester. Heather Pink, Purple, Coral & Black are 50% cotton/50% polyester) | Fabric Weight: 5.0 oz (mid-weight). Product runs small, check size chart. Double-stitched seams at shoulder, sleeve, collar and waist. Durable and reliable. Tear-away label for added comfort. Available in a wide variety of colors.',
                'aboutOPr' => 'The woman’s softstyle tee is a more feminine take on the classic tee. The sleeves are shortened to reveal some shoulder. The fabric is 100% ringspun cotton for all solid colors. The shoulders are taped with twill to prolong durability. The collar seam is reinforced with ribbed knitting.',
                'image'=> 'opr1195.webp'],
            ['idCategoryOPrDetail' => '12',
                'nameOPr' => 'Women’s V-Neck T-Shirt',
                'descriptionOPr' => '100% preshrunk cotton (heather gray color is 90% cotton/10% polyester) | Fabric Weight: 4.5 oz (lightweight). Tapered-cut sleeves. Double-stitched shoulder, sleeve, collar and waist. ½” ribbed v-neck trim.',
                'aboutOPr' => 'This contoured, classic cut V-neck T-shirt has that flattering style that’s sure to turn some heads. It’s great for layering under a sweater or sweatshirt and even better by itself with a pair of jeans. It’s a good idea to own this one in a few different colors; it’s definitely a go-to item.',
                'image'=> 'opr1275.webp'],
            ['idCategoryOPrDetail' => '12',
                'nameOPr' => 'Women’s Cropped T-Shirt',
                'descriptionOPr' => '65% polyester, 35% viscose | Lightweight fabric (3.7 oz). Flowy fit and modest crop for comfort. Side seamed for durability. Flattering tailored sleeve.',
                'aboutOPr' => 'Show off your curves with this trendy crop top that’s just flirty enough. Ultra-lightweight, super comfy and breezy, this is sure to be an everyday favorite.',
                'image'=> 'opr1313.webp'],
                // idCategoryOPrDetail = 13
            ['idCategoryOPrDetail' => '13',
            'nameOPr' => 'Unisex Full Zip Hoodie',
            'descriptionOPr' => 'Material: 52% cotton/48% polyester | Weight: 8 oz (mid-weight). Retail unisex fit. White drawcord and zipper tape. Split-pouch pocket. Tear-away label.',
            'aboutOPr' => 'Stay cozy and stylish with the Bella + Canvas Unisex Full Zip Hoodie, perfect for layering and everyday wear. Made from a blend of 52% Airlume combed and ringspun cotton and polyester, this midweight hoodie offers comfort and durability. The ribbed cuffs and waistband ensure a snug fit, while the side seams and tear away label add to the overall comfort and convenience.',
            'image'=> 'opr1321.png'],

        // idCategoryOPrDetail = 14
        ['idCategoryOPrDetail' => '14',
            'nameOPr' => 'Ultra Cotton Youth T-Shirt',
            'descriptionOPr' => 'Material: 100% preshrunk cotton (Heather gray is 90% cotton/10% polyester). Made with sustainably and fairly grown USA cotton. Fabric weight: 6 oz (heavyweight). Double-needle stitching, seamless collar.',
            'aboutOPr' => 'We’re assuming kids aren’t using the word “ultra” as an exclamation, but that could change quickly once they get a look at this tee. The comfy cotton option makes for the perfect after-school tee, although it’s versatile enough for any time and occasion.',
            'image'=> 'opr1345.png'],
        ['idCategoryOPrDetail' => '14',
            'nameOPr' => 'Kids’ T-Shirt',
            'descriptionOPr' => '100% preshrunk cotton | Fabric Weight: 5 oz (mid-weight). Double-stitched, reinforced seams at shoulder, sleeve, collar and waist. Tear-away label for added comfort. Please check size charts for accurate fit.',
            'aboutOPr' => 'This durable kids’ T-shirt is made for non-stop play. A durable companion for the playground or the classroom, this tee is sure to keep up with any kid. Heather Gray is 90% cotton/10% polyester. Heather Black is 50% cotton/50% polyester',
            'image'=> 'opr1401.png'],

        // idCategoryOPrDetail = 15
        ['idCategoryOPrDetail' => '15',
            'nameOPr' => 'Kids’ Premium Long Sleeve T-Shirt',
            'descriptionOPr' => '100% cotton (heather gray is 95%/5% viscose. charcoal gray is 80% cotton/20% polyester) | Fabric Weight: 4.42 oz (heavyweight). Wide range of sizes from Youth XS - L. Fairly produced, certified and triple audited. Double stitched, reinforced seams at shoulder, sleeve, collar and waist. Optimized for beautiful brilliance across all printing methods.',
            'aboutOPr' => 'This premium long sleeve T-shirt is as close to perfect as can be. It’s optimized for all types of print and will quickly become your child’s favorite layer. Soft, comfortable and durable, this is a definite must-own and a recommended product.',
            'image'=> 'opr1481.png'],
            ['idCategoryOPrDetail' => '15',
                'nameOPr' => 'Kids’ Long Sleeve T-Shirt',
                'descriptionOPr' => '100% durable cotton | Fabric weight: 6.1 oz (heavyweight). Double-stitched neck and waist hem. Ribbed collar and cuffs. Reinforced shoulder maintains shape after repeated washing.',
                'aboutOPr' => 'This long sleeve has the durability to keep up with any kid. Whether they’re playing outside, running around at school, or pretending to clean their room, this long sleeve will be right there with them through thick and thin.',
                'image'=> 'opr1521.png'],

            // idCategoryOPrDetail = 16
            ['idCategoryOPrDetail' => '16',
                'nameOPr' => 'Kids‘ Premium Hoodie',
                'descriptionOPr' => '80% cotton / 20% polyester (heather denim and charcoal gray are 60% cotton/40% polyester). Fabric weight: 8.3 oz (midweight). Classic kangaroo-style front pocket. Reinforced cuffs and waist. Stitched slit inside kangaroo-style pocket and a small loop inside the hood for headphone usage. Combed-cotton exterior, fuzzy fleece interior.',
                'aboutOPr' => 'If you’re looking for a top-quality, instant-favorite sweatshirt for any child, you’ve come to the right place! Our Premium Hoodie from the Spreadshirt Collection is everything you could ask for: it’s warm and cozy, heavyweight and roomy, and built to last. ITEM RUNS SMALL.',
                'image'=> 'opr1551.png'],
            ['idCategoryOPrDetail' => '16',
                'nameOPr' => 'Kids’ Hoodie',
                'descriptionOPr' => '60% cotton/40% polyester | Fabric weight: 7.5 oz (midweight). Double-stitched hood, shoulder, armholes, collar, cuffs, pocket and waist. Product may run small, please check size charts. Ribbed cuffs and waistband.',
                'aboutOPr' => 'This comfy hoodie is ideal for hanging in tree houses or jumping in piles of leaves. Rugged and durable, it’s sure to keep pace with any kid. It’s tough enough for the skateboarder, tame enough for the video gamer and comfy enough for the bookworm. This is anywear. ITEM RUNS SMALL.',
                'image'=> 'opr1591.png'],
            ['idCategoryOPrDetail' => '16',
                'nameOPr' => 'Kids’ Crewneck Sweatshirt',
                'descriptionOPr' => 'Material: 50% polyester/50% cotton, heavy blend fabric, pill-resistant air jet yarn. Made with 50% sustainable and fairly grown USA cotton. Fabric weight: 8 oz (midweight). 1x1 ribbed collar, cuffs, waistband (with spandex).',
                'aboutOPr' => 'This crewneck sweatshirt will ultimately serve two purposes: it will keep your kids warm and it will cut down on their complaining. Made of cotton and polyester, your child can expect the utmost comfort, and the casual style makes it a perfect choice for any occasion.',
                'image'=> 'opr1671.png'],

            // idCategoryOPrDetail = 17
            ['idCategoryOPrDetail' => '17',
                'nameOPr' => 'Organic Long Sleeve Baby Bodysuit',
                'descriptionOPr' => '100% organic cotton, 1x1 baby rib knit. Heather gray is 85% cotton/15% polyester | Fabric weight: 7 oz. Envelope neck and three-snap leg closure allows for easy dressing. 3 nickle-free snap closures. Reinforced, double-stitching.',
                'aboutOPr' => 'When it comes to superlatives for the daycare yearbook, your baby will be a frontrunner for "most stylish." Of course, that’s assuming your baby is rocking this long sleeve bodysuit, which will keep them both warm and comfy.',
                'image'=> 'opr1701.png'],
            ['idCategoryOPrDetail' => '17',
                'nameOPr' => 'Organic Short Sleeve Baby Bodysuit',
                'descriptionOPr' => '100% organic cotton, (heather gray is 85% cotton/15% polyester) 1x1 baby rib knit | Fabric weight: 7 oz. Envelope neck and three-snap leg closure allows for easy dressing. Nickle-free snap closures. Reinforced, double-stitching.',
                'aboutOPr' => 'Kids grow up so fast. Your little one may still be an infant, but we’re sure they’re crying for something stylish, comfortable, and eco-friendly (of course, they must have just wet their diaper). Well, you can satisfy their "demands" with this practical, organic short sleeve bodysuit.',
                'image'=> 'opr1741.png'],

            // idCategoryOPrDetail = 18 Mug & Cup
            ['idCategoryOPrDetail' => '18',
                'nameOPr' => 'Full Color Mug',
                'descriptionOPr' => '100% ceramic, Capacity: 11 fl oz. Full-color (inside and outside). Hand Wash Only. Do Not Place in Microwave.',
                'aboutOPr' => 'A colorful companion for your favorite brew. Good for all types of beverages, this classic container is a great way to make your hot cocoa cool again.',
                'image'=> 'opr1781.png'],
            ['idCategoryOPrDetail' => '18',
                'nameOPr' => 'Coffee/Tea Mug',
                'descriptionOPr' => 'Ceramic | Capacity: 11 fl oz. Dishwasher & Microwave safe. Lead and Cadmium free.',
                'aboutOPr' => 'Warm-up with a nice cuppa out of this customized ceramic coffee mug. Personalize it with cool designs, photos or logos to make that "aaahhh!" moment even better. It’s BPA and Lead-free, microwave & dishwasher-safe, and made of white, durable ceramic in 11-ounce size. Thanks to the advanced printing tech, your designs come to life with incredibly vivid colors – the perfect gift for coffee, tea, and chocolate lovers.',
                'image'=> 'opr1795.webp'],
            ['idCategoryOPrDetail' => '18',
                'nameOPr' => 'Camper Mug',
                'descriptionOPr' => 'Handwash only. Do not place in microwave. Material: Enamel, rim made of stainless steel. Fills 12oz',
                'aboutOPr' => 'Classic retro cup with enamel coating to be used outdoors. Not only cowboys will enjoy sipping a hot coffee or cool bourbon by the campfire. The mug has rolled rims made of stainless steel for added comfort and timeless style. Small irregularities round up this mug’s vintage look.',
                'image'=> 'opr1801.png'],
            ['idCategoryOPrDetail' => '18',
                'nameOPr' => 'Coffee/Tea Mug 15 oz',
                'descriptionOPr' => '100% ceramic | 15 fl oz. Dishwasher & microwave safe. Lead and cadmium free. Handwashing recommended.',
                'aboutOPr' => 'This ceramic mug is ideal for coffee or tea enthusiasts who love the feeling of holding their favorite mug, whether you’re snuggled up on the couch or working at the office—this mug will make your caffeine dreams come true.',
                'image'=> 'opr1815.png'],

            // idCategoryOPrDetail = 19 HAT
            ['idCategoryOPrDetail' => '19',
                'nameOPr' => 'Baby Cap',
                'descriptionOPr' => 'Fabric weight: 5 oz (midweight). Material: 100% cotton. EasyTear label for extra comfort/branding ability',
                'aboutOPr' => 'Is your baby self-conscious about their bald spot? Or (more realistically), maybe you’re just seeking the perfect cap to keep them warm and comfy. Available in an array of colors, this baby cap is the perfect gift or purchase for that newborn.',
                'image'=> 'opr1821.png'],
            ['idCategoryOPrDetail' => '19',
                'nameOPr' => 'Flexfit Baseball Cap',
                'descriptionOPr' => '97% Polyester/3% Spandex. Structured, firm front panel with low, flexible fit. 5-panel cap with reinforced pro-stitching throughout. embroidered eyelets for ventilation.',
                'aboutOPr' => 'This 5-panel, flexfit, low-profile baseball cap is a great wear. It’s perfect for teams or individuals, for the field or the street. The addition of spandex to the material makes for a form-fit, and the extras like a sewn-in sweatband and embroidered ventilation holes make this piece a smart buy.',
                'image'=> 'opr1841.png'],
            ['idCategoryOPrDetail' => '19',
                'nameOPr' => 'Trucker Cap',
                'descriptionOPr' => '47% Cotton/28%Nylon/25%Polyester. Snap-back closure (one size fits all). Classic structured, high-profile, 5-panel construction',
                'aboutOPr' => 'Logging some miles in your big-rig or just looking to emulate that casual cool style? If so, then our trucker cap is for you. The trucker cap adds a versatile and laid-back style to any outfit, but it’s probably best rocked with a plaid button down and a worn-in pair of jeans (and a Mack truck).',
                'image'=> 'opr1881.png'],

            // idCategoryOPrDetail = 20 Apron
            ['idCategoryOPrDetail' => '20',
                'nameOPr' => 'Adjustable Apron',
                'descriptionOPr' => '100% cotton | Fabric weight: 6.05 oz (mid weight). Over-the-head and around-the-waist adjustable drawstring. Drawstring length is 104". 28” wide X 30” long with a split front pocket. Spot cleaning is recommended.',
                'aboutOPr' => 'The last layer of defense against spillage of all sorts, this adjustable apron is a wonderful gift for yourself or a loved one. With plenty of coverage and pockets for utensils, forget cooking classes... this apron is all you need to become a gourmet chef!',
                'image'=> 'opr1893.webp'],

            // idCategoryOPrDetail = 21 bandana
            ['idCategoryOPrDetail' => '21',
                'nameOPr' => 'Dog Bandana',
                'descriptionOPr' => '100% cotton twill. One size fits most. Measures 20” X 20”.',
                'aboutOPr' => 'Dogs are a man’s best friend and this bandana is a dog’s best friend. Your dog has a personality in its own right, so let it shine through with this great accessory.',
                'image'=> 'opr1973.png'],

            // idCategoryOPrDetail = 22 bag
            ['idCategoryOPrDetail' => '22',
                'nameOPr' => 'Tote Bag',
                'descriptionOPr' => '100% cotton canvas |Fabric weight: 6.05 oz (midweight). Size: 15.5” long x 14.5” wide. Spot clean only - DO NOT PLACE IN WASHING MACHINE',
                'aboutOPr' => 'This canvas tote bag is a multi-functional masterpiece. Use it as a reusable grocery bag, for books or other goodies – wherever you’re going, bring it with you.',
                'image'=> 'opr2015.webp'],
            ['idCategoryOPrDetail' => '22',
                'nameOPr' => 'Recycled Tote Bag',
                'descriptionOPr' => 'Material: 75% recycled cotton/25% recycled polyester | Weight: 12 oz. 20” fabric handles',
                'aboutOPr' => 'Feel good about your trip to the grocery store with this tote bag, made from 100% recycled materials and durable 12 oz fabric. This handy bag can be folded to fit in your pocket, or comfortably slung over your shoulder with 20” fabric handles.',
                'image'=> 'opr2071.webp'],
            ['idCategoryOPrDetail' => '22',
                'nameOPr' => 'Recycled Lunch Bag',
                'descriptionOPr' => '600- denier polyester. Made of 50% recycled material. Color-matched zipper on main compartment, additional front pocket. Aluminum foil insulated interior. Matching 1½" wide color-matched handles, 7" drop length.',
                'aboutOPr' => 'This practical, durable and insulated lunch bag is a practical addition to any routine. For schoolkids and office workers alike, this will keep your lunch at just the right temperature.',
                'image'=> 'opr2094.webp'],

            // idCategoryOPrDetail = 23 water bottle
            ['idCategoryOPrDetail' => '23',
                'nameOPr' => 'Water Bottle',
                'descriptionOPr' => 'Not suitable for carbonated beverages. Made of stainless steel & plastic | Volume 20 oz. Comes with a straw top. Not for use in dishwasher, freezer, or microwave. Not suitable for white designs/design elements.',
                'aboutOPr' => 'Bring your favorite beverage with you wherever you go in a stylish water bottle. We currently offer these eco-friendly and reusable water bottles in the colors silver and white.',
                'image'=> 'opr2113.webp'],
            ['idCategoryOPrDetail' => '23',
                'nameOPr' => 'Insulated Stainless Steel Water Bottle',
                'descriptionOPr' => '100% Stainless Steel | Volume: 17 fl. Oz. Not suitable for white designs. Not suitable for dishwasher, freezer or microwave; hand-wash only.',
                'aboutOPr' => 'Whether you’re in a lecture hall or hiking rugged trails, this insulated water bottle will keep you quenched on all occasions. Featuring a sleek design and double-wall insulation, you can keep any beverage cold for 24 hours or hot for 12.',
                'image'=> 'opr2123.webp'],

            // idCategoryOPrDetail = 24 water bottle
            ['idCategoryOPrDetail' => '24',
                'nameOPr' => 'Throw Pillow Cover',
                'descriptionOPr' => 'One-sided zipper closure. Material: 100% smooth cotton twill. Fabric weight: 6.87 oz (durable).',
                'aboutOPr' => 'Whether you’re looking for a couch decoration, something to rest your head on during a Game of Thrones marathon, or the perfect weapon during a pillow fight, this throw pillow cover is the perfect choice. Soft and durable, you can be confident that your pillows will be "covered" for the foreseeable future.',
                'image'=> 'opr2133.webp'],
            ['idCategoryOPrDetail' => '24',
                'nameOPr' => 'Pillowcase',
                'descriptionOPr' => '100% polyester. 2” hem. Fits standard sized pillows.',
                'aboutOPr' => 'Who doesn’t love a good night’s sleep? Make yours unique with our pillowcase. It is fully customizable to meet your shop or individual needs and offers you the opportunity to match it with your bed separates.',
                'image'=> 'opr2171.png'],

            // idCategoryOPrDetail = 25 mouse pad
            ['idCategoryOPrDetail' => '25',
                'nameOPr' => 'Mouse pad Horizontal',
                'descriptionOPr' => '95% neoprene / 5% rubber (base). Measurement: 9.25” wide x 7.75” tall. Black, anti-slip rubber base. Thick and durable – won’t tear or fray.',
                'aboutOPr' => 'If you’ve ever used your mouse on top of your desk with no mouse pad, you know it’s a shaky experience at best. It can be very frustrating when the pointer doesn’t go where you need it to. Avoid the frustration in style with this office must-have.',
                'image'=> 'opr2181.png'],

            // idCategoryOPrDetail = 26 toy
            ['idCategoryOPrDetail' => '26',
            'nameOPr' => 'Dog toy',
                'descriptionOPr' => 'Dog & T-Shirt 100% Polyester. 14" Long. Stitched nose and eyes. Tiny T-shirt can be printed with designs.',
                'aboutOPr' => 'This cute fluffy dog in a T-shirt is ideal if you’re looking for a cuddly gift for yourself or a loved one. The dog’s fur is extra soft and has a real-life textured look. It makes a sweet snuggle companion and great for comforting kids.',
                'image'=> 'opr2191.png'],
            ['idCategoryOPrDetail' => '26',
                'nameOPr' => 'Teddy Bear',
                'descriptionOPr' => 'Bear & T-Shirt 100% Polyester. 12" Tall. Stitched nose and eyes. Tiny T-shirt can be printed with designs.',
                'aboutOPr' => 'This cute teddy in a T-shirt is ideal if you’re looking for a cuddly gift for yourself or a loved one. The bear’s fur is extra soft and has a real-life textured look. It makes a sweet snuggle companion and is great for comforting kids.',
                'image'=> 'opr2221.png'],
        ]);

        \DB::table('CareInstruction')->insert([
            ['idOPr' => '1','imageCI1'=>'ci11.svg', 'imageCI2'=>'ci12.svg', 'imageCI3'=>'ci13.svg', 'imageCI4'=>'ci14.svg', 'imageCI5'=>'ci15.svg',
            'description' => 'Machine wash: warm (max 40C or 105F); Bleach as needed; Tumble dry: medium; Iron, steam or dry: low heat; Do not dryclean.'],
        
            ['idOPr' => '2','imageCI1'=>'ci21.svg', 'imageCI2'=>'ci22.svg', 'imageCI3'=>'ci23.svg', 'imageCI4'=>'ci24.svg', 'imageCI5'=>'ci25.svg',
            'description' => 'Do not dryclean; Do not iron; Tumble dry: low heat; Do not bleach; Machine wash: cold (max 30C or 90F).'],

            ['idOPr' => '3','imageCI1'=>'ci31.svg', 'imageCI2'=>'ci32.svg', 'imageCI3'=>'ci33.svg', 'imageCI4'=>'ci34.svg', 'imageCI5'=>'ci35.svg',
            'description' => 'Machine wash: cold (max 30C or 90F); Do not bleach; Do not tumble dry; Iron, steam or dry: low heat; Do not dryclean.'],
        
            ['idOPr' => '4','imageCI1'=>'ci41.svg', 'imageCI2'=>'ci42.svg', 'imageCI3'=>'ci43.svg', 'imageCI4'=>'ci44.svg', 'imageCI5'=>'ci45.svg',
            'description' => 'Machine wash: cold (max 30C or 90F); Do not bleach; Tumble dry: low heat; Iron, steam or dry: low heat; Do not dryclean'],

            ['idOPr' => '5','imageCI1'=>'ci51.svg', 'imageCI2'=>'ci52.svg', 'imageCI3'=>'ci53.svg', 'imageCI4'=>'ci54.svg', 'imageCI5'=>'ci55.svg',
            'description' => 'Do not iron; Do not dryclean; Machine wash: cold (max 30C or 90F); Non-chlorine: bleach as needed; Tumble dry: low heat.'],

            ['idOPr' => '6','imageCI1'=>'ci61.svg', 'imageCI2'=>'ci62.svg', 'imageCI3'=>'ci63.svg', 'imageCI4'=>'ci64.svg', 'imageCI5'=>'ci65.svg',
            'description' => 'Machine wash: cold (max 30C or 90F); Do not bleach; Do not tumble dry; Iron, steam or dry: low heat; Do not dryclean.'],

            ['idOPr' => '7','imageCI1'=>'ci71.svg', 'imageCI2'=>'ci72.svg', 'imageCI3'=>'ci73.svg', 'imageCI4'=>'ci74.svg', 'imageCI5'=>'ci75.svg',
            'description' => 'Machine wash: cold (max 30C or 90F); Do not bleach; Tumble dry: low heat; Do not iron; Do not dryclean.'],

            ['idOPr' => '8','imageCI1'=>'ci81.svg', 'imageCI2'=>'ci82.svg', 'imageCI3'=>'ci83.svg', 'imageCI4'=>'ci84.svg', 'imageCI5'=>'ci85.svg',
            'description' => 'Machine wash: cold (max 30C or 90F); Do not bleach; Tumble dry: low heat; Iron, steam or dry: low heat; Do not dryclean.'],

            ['idOPr' => '9','imageCI1'=>'ci91.svg', 'imageCI2'=>'ci92.svg', 'imageCI3'=>'ci93.svg', 'imageCI4'=>'ci94.svg', 'imageCI5'=>'ci95.svg',
            'description' => 'Machine wash: cold (max 30C or 90F); Non-chlorine: bleach as needed; Do not tumble dry; Do not iron; Do not dryclean.'],

            ['idOPr' => '10','imageCI1'=>'ci101.svg', 'imageCI2'=>'ci102.svg', 'imageCI3'=>'ci103.svg', 'imageCI4'=>'ci104.svg', 'imageCI5'=>'ci105.svg',
            'description' => 'Machine wash: cold (max 30C or 90F); Non-chlorine: bleach as needed; Do not tumble dry; Do not iron; Do not dryclean.'],

            ['idOPr' => '11','imageCI1'=>'ci111.svg', 'imageCI2'=>'ci112.svg', 'imageCI3'=>'ci113.svg', 'imageCI4'=>'ci114.svg', 'imageCI5'=>'ci115.svg',
            'description' => 'Do not dryclean; Iron, steam or dry: low heat; Tumble dry: low heat; Do not bleach; Machine wash: cold (max 30C or 90F).'],

            ['idOPr' => '12','imageCI1'=>'ci121.svg', 'imageCI2'=>'ci122.svg', 'imageCI3'=>'ci123.svg', 'imageCI4'=>'ci124.svg', 'imageCI5'=>'ci125.svg',
            'description' => 'Do not dryclean; Machine wash: warm (max 40C or 105F); Non-chlorine: bleach as needed; Tumble dry: medium; Iron, steam or dry: low heat.'],

            ['idOPr' => '13','imageCI1'=>'ci131.svg', 'imageCI2'=>'ci132.svg', 'imageCI3'=>'ci133.svg', 'imageCI4'=>'ci134.svg', 'imageCI5'=>'ci135.svg',
            'description' => 'Do not dryclean; Machine wash: warm (max 40C or 105F); Do not bleach; Tumble dry: low heat; Iron, steam or dry: low heat.'],

            ['idOPr' => '14','imageCI1'=>'ci141.svg', 'imageCI2'=>'ci142.svg', 'imageCI3'=>'ci143.svg', 'imageCI4'=>'ci144.svg', 'imageCI5'=>'ci145.svg',
            'description' => 'Machine wash: cold (max 30C or 90F); Do not bleach; Do not tumble dry; Iron, steam or dry: low heat; Do not dryclean.'],

            ['idOPr' => '15','imageCI1'=>'ci151.svg', 'imageCI2'=>'ci152.svg', 'imageCI3'=>'ci153.svg', 'imageCI4'=>'ci154.svg', 'imageCI5'=>'ci155.svg',
            'description' => 'Machine wash: cold (max 30C or 90F); Do not bleach; Do not tumble dry; Iron, steam or dry: low heat; Do not dryclean.'],

            ['idOPr' => '16','imageCI1'=>'ci161.svg', 'imageCI2'=>'ci162.svg', 'imageCI3'=>'ci163.svg', 'imageCI4'=>'ci164.svg', 'imageCI5'=>'ci165.svg',
            'description' => 'Do not dryclean; Iron, steam or dry: medium heat; Dry flat; Do not bleach; Machine wash: cold (max 30C or 90F).'],

            ['idOPr' => '17','imageCI1'=>'ci171.svg', 'imageCI2'=>'ci172.svg', 'imageCI3'=>'ci173.svg', 'imageCI4'=>'ci174.svg', 'imageCI5'=>'ci175.svg',
            'description' => 'Machine wash: warm (max 40C or 105F); Bleach as needed; Tumble dry: medium; Iron, steam or dry: low heat; Do not dryclean.'],

            ['idOPr' => '18','imageCI1'=>'ci181.svg', 'imageCI2'=>'ci182.svg', 'imageCI3'=>'ci183.svg', 'imageCI4'=>'ci184.svg', 'imageCI5'=>'ci185.svg',
            'description' => 'Machine wash: cold (max 30C or 90F); Do not bleach; Do not tumble dry; Iron, steam or dry: low heat; Do not dryclean.'],

            ['idOPr' => '19','imageCI1'=>'ci191.svg', 'imageCI2'=>'ci192.svg', 'imageCI3'=>'ci193.svg', 'imageCI4'=>'ci194.svg', 'imageCI5'=>'ci195.svg',
            'description' => 'Machine wash: cold (max 30C or 90F); Do not bleach; Do not tumble dry; Iron, steam or dry: low heat; Do not dryclean.'],

            ['idOPr' => '20','imageCI1'=>'ci201.svg', 'imageCI2'=>'ci202.svg', 'imageCI3'=>'ci203.svg', 'imageCI4'=>'ci204.svg', 'imageCI5'=>'ci205.svg',
            'description' => 'Machine wash: cold (max 30C or 90F); Do not bleach; Tumble dry: low heat; Do not iron; Do not dryclean.'],

            ['idOPr' => '21','imageCI1'=>'ci211.svg', 'imageCI2'=>'ci212.svg', 'imageCI3'=>'ci213.svg', 'imageCI4'=>'ci214.svg', 'imageCI5'=>'ci215.svg',
            'description' => 'Machine wash: cold (max 30C or 90F); Non-chlorine: bleach as needed; Do not tumble dry; Do not iron; Do not dryclean.'],

            ['idOPr' => '22','imageCI1'=>'ci221.svg', 'imageCI2'=>'ci222.svg', 'imageCI3'=>'ci223.svg', 'imageCI4'=>'ci224.svg', 'imageCI5'=>'ci225.svg',
            'description' => 'Machine wash: warm (max 40C or 105F); Non-chlorine: bleach as needed; Tumble dry: low heat; Iron, steam or dry: medium heat; Do not dryclean.'],

            ['idOPr' => '23','imageCI1'=>'ci231.svg', 'imageCI2'=>'ci232.svg', 'imageCI3'=>'ci233.svg', 'imageCI4'=>'ci234.svg', 'imageCI5'=>'ci235.svg',
            'description' => 'Do not dryclean; Machine wash: warm (max 40C or 105F); Non-chlorine: bleach as needed; Tumble dry: medium; Iron, steam or dry: low heat.'],

            ['idOPr' => '24','imageCI1'=>'ci241.svg', 'imageCI2'=>'ci242.svg', 'imageCI3'=>'ci243.svg', 'imageCI4'=>'ci244.svg', 'imageCI5'=>'ci245.svg',
            'description' => 'Machine wash: cold (max 30C or 90F); Do not bleach; Do not tumble dry; Iron, steam or dry: low heat; Do not dryclean.'],

            ['idOPr' => '25','imageCI1'=>'ci251.svg', 'imageCI2'=>'ci252.svg', 'imageCI3'=>'ci253.svg', 'imageCI4'=>'ci254.svg', 'imageCI5'=>'ci255.svg',
            'description' => 'Machine wash: warm (max 40C or 105F); Tumble dry: low heat; Iron, team or dry: medium heat; Non-chlorine: bleach as needed; Do not dryclean.'],

            ['idOPr' => '26','imageCI1'=>'ci261.svg', 'imageCI2'=>'ci262.svg', 'imageCI3'=>'ci263.svg', 'imageCI4'=>'ci264.svg', 'imageCI5'=>'ci265.svg',
            'description' => 'Machine wash: cold (max 30C or 90F); Do not bleach; Do not tumble dry; Iron, steam or dry: low heat; Do not dryclean.'],

            ['idOPr' => '27','imageCI1'=>'ci271.svg', 'imageCI2'=>'ci272.svg', 'imageCI3'=>'ci273.svg', 'imageCI4'=>'ci274.svg', 'imageCI5'=>'ci275.svg',
            'description' => 'Machine wash: cold (max 30C or 90F); Non-chlorine: bleach as needed; Tumble dry: medium; Do not iron; Do not dryclean.'],

            ['idOPr' => '28','imageCI1'=>'ci281.svg', 'imageCI2'=>'ci282.svg', 'imageCI3'=>'ci283.svg', 'imageCI4'=>'ci284.svg', 'imageCI5'=>'ci285.svg',
            'description' => 'Do not dryclean; Machine wash: warm (max 40C or 105F); Non-chlorine: bleach as needed; Tumble dry: low heat; Iron, steam or dry: medium heat.'],

            ['idOPr' => '29','imageCI1'=>'ci291.svg', 'imageCI2'=>'ci292.svg', 'imageCI3'=>'ci293.svg', 'imageCI4'=>'ci294.svg', 'imageCI5'=>'ci295.svg',
            'description' => 'Machine wash: cold (max 30C or 90F); Non-chlorine: bleach as needed; Tumble dry: low heat; Iron, steam or dry: low heat; Do not dryclean.'],

            ['idOPr' => '30','imageCI1'=>'ci301.svg', 'imageCI2'=>'ci302.svg', 'imageCI3'=>'ci303.svg', 'imageCI4'=>'ci304.svg', 'imageCI5'=>'ci305.svg',
            'description' => 'Machine wash: cold (max 30C or 90F); Do not bleach; Tumble dry: low heat; Iron, steam or dry: low heat; Do not dryclean.'],

            ['idOPr' => '31','imageCI1'=>'ci311.svg', 'imageCI2'=>'ci312.svg', 'imageCI3'=>'ci313.svg', 'imageCI4'=>'ci314.svg', 'imageCI5'=>'ci315.svg',
            'description' => 'Machine wash: cold (max 30C or 90F); Do not bleach; Tumble dry: low heat; Iron, steam or dry: low heat; Do not dry clean.'],

            ['idOPr' => '32','imageCI1'=>'ci321.svg', 'imageCI2'=>'ci322.svg', 'imageCI3'=>'ci323.svg', 'imageCI4'=>'ci324.svg', 'imageCI5'=>'ci325.svg',
            'description' => 'Do not dryclean; Do not iron; Tumble dry: low heat; Do not bleach; Machine wash: cold (max 30C or 90F), *hand wash will extend the quality of the product.'],

            ['idOPr' => '33','imageCI1'=>'ci331.svg', 'imageCI2'=>'ci332.svg', 'imageCI3'=>'ci333.svg', 'imageCI4'=>'ci334.svg', 'imageCI5'=>'ci335.svg',
            'description' => 'Machine wash: cold (max 30C or 90F); Do not bleach; Tumble dry: low heat; Iron, steam or dry: low heat; Do not dry clean.'],

            ['idOPr' => '34','imageCI1'=>'ci341.svg', 'imageCI2'=>'ci342.svg', 'imageCI3'=>'ci343.svg', 'imageCI4'=>'ci344.svg', 'imageCI5'=>'ci345.svg',
            'description' => 'Do not iron; Machine wash: cold (max 30C or 90F); Do not bleach; Do not tumble dry; Do not dry clean.'],

            ['idOPr' => '35','imageCI1'=>'ci351.svg', 'imageCI2'=>'ci352.svg', 'imageCI3'=>'ci353.svg', 'imageCI4'=>'ci354.svg', 'imageCI5'=>'ci355.svg',
            'description' => 'Machine wash: cold (max 30C or 90F); Non-chlorine: bleach as needed; Tumble dry: low heat; Iron, steam or dry: low heat; Do not dry clean.'],

            ['idOPr' => '36','imageCI1'=>'ci361.svg', 'imageCI2'=>'ci362.svg', 'imageCI3'=>'ci363.svg', 'imageCI4'=>'ci364.svg', 'imageCI5'=>'ci365.svg',
            'description' => 'Machine wash: warm (max 40C or 105F); Bleach as needed; Tumble dry: medium heat; Do not dry clean; Do not iron.'],

            ['idOPr' => '37','imageCI1'=>'ci371.svg', 'imageCI2'=>'ci372.svg', 'imageCI3'=>'ci373.svg', 'imageCI4'=>'ci374.svg', 'imageCI5'=>'ci375.svg',
            'description' => 'Machine wash: cold (max 30C or 90F); Non-chlorine: bleach as needed; Do not tumble dry; Do not dry clean; Do not iron.'],

            ['idOPr' => '38','imageCI1'=>'ci381.svg', 'imageCI2'=>'ci382.svg', 'imageCI3'=>'ci383.svg', 'imageCI4'=>'ci384.svg', 'imageCI5'=>'ci385.svg',
            'description' => 'Machine wash: cold (max 30C or 90F); Non-chlorine: bleach as needed; Tumble dry: low heat; Do not dry clean; Do not iron.'],

            ['idOPr' => '39','imageCI1'=>'ci391.svg', 'imageCI2'=>'ci392.svg', 'imageCI3'=>'ci393.svg', 'imageCI4'=>'ci394.svg', 'imageCI5'=>'ci395.svg',
            'description' => 'Do not iron; Machine wash: cold (max 30C or 90F); Non-chlorine: bleach as needed; Tumble dry: low heat; Do not dry clean.'],

            ['idOPr' => '40','imageCI1'=>'', 'imageCI2'=>'', 'imageCI3'=>'', 'imageCI4'=>'', 'imageCI5'=>'',
            'description' => 'Clean in dishwasher or wash by hand with warm water and dish soap.'],

            ['idOPr' => '41','imageCI1'=>'', 'imageCI2'=>'', 'imageCI3'=>'', 'imageCI4'=>'', 'imageCI5'=>'',
            'description' => 'Clean in dishwasher or wash by hand with warm water and dish soap.'],

            ['idOPr' => '42','imageCI1'=>'', 'imageCI2'=>'', 'imageCI3'=>'', 'imageCI4'=>'', 'imageCI5'=>'',
            'description' => 'Hand wash only.'],

            ['idOPr' => '43','imageCI1'=>'', 'imageCI2'=>'', 'imageCI3'=>'', 'imageCI4'=>'', 'imageCI5'=>'',
            'description' => 'Clean in dishwasher or wash by hand with warm water and dish soap.'],

            ['idOPr' => '44','imageCI1'=>'ci441.svg', 'imageCI2'=>'ci442.svg', 'imageCI3'=>'ci443.svg', 'imageCI4'=>'ci444.svg', 'imageCI5'=>'',
            'description' => 'Machine wash: cold (max 30C or 90F), *recommended to place a small amount of soap before placing in the washing machine; Do not bleach; Tumble dry: low heat; Do not iron.'],

            ['idOPr' => '45','imageCI1'=>'', 'imageCI2'=>'', 'imageCI3'=>'', 'imageCI4'=>'', 'imageCI5'=>'',
            'description' => 'Use warm water and dish soap and clean spots off your hat. It s not necessary to soak the whole item. For hard to clean spots use a soft bristled brush.'],

            ['idOPr' => '46','imageCI1'=>'', 'imageCI2'=>'', 'imageCI3'=>'', 'imageCI4'=>'', 'imageCI5'=>'',
            'description' => 'Use warm water and dish soap and clean spots off your hat. It s not necessary to soak the whole item. For hard to clean spots use a soft bristled brush.'],

            ['idOPr' => '47','imageCI1'=>'ci471.svg', 'imageCI2'=>'ci472.svg', 'imageCI3'=>'ci473.svg', 'imageCI4'=>'ci474.svg', 'imageCI5'=>'',
            'description' => 'Machine wash: cold (max 30C or 90F), *recommended to place a small amount of soap before placing in the washing machine; Do not bleach; Tumble dry: low heat; Do not iron.'],

            ['idOPr' => '48','imageCI1'=>'', 'imageCI2'=>'', 'imageCI3'=>'', 'imageCI4'=>'', 'imageCI5'=>'',
            'description' => 'Machine wash: cold (max 30C or 90F); Do not bleach; Tumble dry: low heat; Do not iron; Do not dryclean.'],

            ['idOPr' => '49','imageCI1'=>'', 'imageCI2'=>'', 'imageCI3'=>'', 'imageCI4'=>'', 'imageCI5'=>'',
            'description' => 'Remove all items from the bag before cleaning. Suggested to pretreat visible stains with stain remover. Mix warm water with laundry detergent and clean the bag with terry washcloth or a soft bristle brush. Let the bag air dry.'],

            ['idOPr' => '50','imageCI1'=>'ci501.svg', 'imageCI2'=>'ci502.svg', 'imageCI3'=>'ci503.svg', 'imageCI4'=>'ci504.svg', 'imageCI5'=>'ci505.svg',
            'description' => 'Machine wash: cold (max 30C or 90F); Do not bleach; Do not tumble dry; Iron, steam or dry: low heat; Do not dryclean.'],

            ['idOPr' => '51','imageCI1'=>'', 'imageCI2'=>'', 'imageCI3'=>'', 'imageCI4'=>'', 'imageCI5'=>'',
            'description' => 'Do not expose to the sun, keep in a dry place; Before cleaning the bag, remove all the items from the bag. Suggested to pretreat visible stains with stain remover. Mix warm water with laundry detergent and clean the bag with terry washcloth or soft bristle brush. Let the bag air dry.'],

            ['idOPr' => '52','imageCI1'=>'', 'imageCI2'=>'', 'imageCI3'=>'', 'imageCI4'=>'', 'imageCI5'=>'',
            'description' => 'Hand wash only.'],

            ['idOPr' => '53','imageCI1'=>'', 'imageCI2'=>'', 'imageCI3'=>'', 'imageCI4'=>'', 'imageCI5'=>'',
            'description' => 'Hand wash only.'],

            ['idOPr' => '54','imageCI1'=>'', 'imageCI2'=>'', 'imageCI3'=>'', 'imageCI4'=>'', 'imageCI5'=>'',
            'description' => 'Remove the pillow cover. Pre-treat the stains with soft cloth or bristle brush that had been soaked in warm soapy water. Machine wash, max 40°C (104°F), normal cycle. Do not bleach, tumble dry on low, do not dry-clean. Iron, steam, or dry low heat only. Fluff to reshape when assembling it back together.'],

            ['idOPr' => '55','imageCI1'=>'ci551.svg', 'imageCI2'=>'ci552.svg', 'imageCI3'=>'ci553.svg', 'imageCI4'=>'ci554.svg', 'imageCI5'=>'',
            'description' => 'Machine wash separately: cold (max 30C or 90F), gentle cycle; Do not bleach; Tumble dry: low heat; Iron, steam or dry: low heat.'],

            ['idOPr' => '56','imageCI1'=>'', 'imageCI2'=>'', 'imageCI3'=>'', 'imageCI4'=>'', 'imageCI5'=>'',
            'description' => 'Use warm water and dish soap to clean spots off your pad. It s not necessary to soak the whole pad. For hard-to-clean spots use a soft-bristled brush.'],

            ['idOPr' => '57','imageCI1'=>'ci571.svg', 'imageCI2'=>'ci572.svg', 'imageCI3'=>'ci573.svg', 'imageCI4'=>'ci574.svg', 'imageCI5'=>'',
            'description' => 'Machine wash: cold (max 30C or 90F); Do not bleach; Line dry; Do not dryclean.'],

            ['idOPr' => '58','imageCI1'=>'', 'imageCI2'=>'', 'imageCI3'=>'', 'imageCI4'=>'', 'imageCI5'=>'',
            'description' => 'Spot clean the surface with mild soapy water and a microfiber cloth. Then, remove the soap residue with a warm, damp microfiber cloth. Let air dry. Use the same procedure to the t-shirt being careful to avoid rubbing the picture area.']
        ]);
        \DB::table('OriginalProductsDetail')->insert([
            ['idOPr' => '1', 'idColor' => '1'],
            ['idOPr' => '1', 'idColor' => '2'],
            ['idOPr' => '1', 'idColor' => '3'],
            ['idOPr' => '1', 'idColor' => '4'],
            ['idOPr' => '1', 'idColor' => '5'],
            ['idOPr' => '1', 'idColor' => '7'],
            ['idOPr' => '1', 'idColor' => '9'],
            ['idOPr' => '1', 'idColor' => '11'],

            ['idOPr' => '2', 'idColor' => '4'],

            ['idOPr' => '3', 'idColor' => '1'],
            ['idOPr' => '3', 'idColor' => '3'],

            ['idOPr' => '4', 'idColor' => '3'],
            ['idOPr' => '4', 'idColor' => '7'],

            ['idOPr' => '5', 'idColor' => '2'],
            ['idOPr' => '5', 'idColor' => '3'],
            ['idOPr' => '5', 'idColor' => '4'],
            ['idOPr' => '5', 'idColor' => '5'],

            ['idOPr' => '6', 'idColor' => '1'],
            ['idOPr' => '6', 'idColor' => '3'],
            ['idOPr' => '6', 'idColor' => '4'],
            ['idOPr' => '6', 'idColor' => '7'],
            ['idOPr' => '6', 'idColor' => '10'],

            ['idOPr' => '7', 'idColor' => '1'],
            ['idOPr' => '7', 'idColor' => '2'],
            ['idOPr' => '7', 'idColor' => '3'],
            ['idOPr' => '7', 'idColor' => '4'],
            ['idOPr' => '7', 'idColor' => '5'],
            ['idOPr' => '7', 'idColor' => '7'],
            ['idOPr' => '7', 'idColor' => '11'],
            ['idOPr' => '7', 'idColor' => '12'],

            ['idOPr' => '8', 'idColor' => '1'],
            ['idOPr' => '8', 'idColor' => '3'],
            ['idOPr' => '8', 'idColor' => '4'],
            ['idOPr' => '8', 'idColor' => '7'],

            ['idOPr' => '9', 'idColor' => '1'],
            ['idOPr' => '9', 'idColor' => '4'],
            ['idOPr' => '9', 'idColor' => '5'],

            ['idOPr' => '10', 'idColor' => '1'],
            ['idOPr' => '10', 'idColor' => '2'],
            ['idOPr' => '10', 'idColor' => '3'],
            ['idOPr' => '10', 'idColor' => '4'],
            ['idOPr' => '10', 'idColor' => '7'],

            ['idOPr' => '11', 'idColor' => '1'],
            ['idOPr' => '11', 'idColor' => '2'],
            ['idOPr' => '11', 'idColor' => '3'],
            ['idOPr' => '11', 'idColor' => '4'],
            ['idOPr' => '11', 'idColor' => '5'],
            ['idOPr' => '11', 'idColor' => '6'],

            ['idOPr' => '12', 'idColor' => '1'],
            ['idOPr' => '12', 'idColor' => '3'],
            ['idOPr' => '12', 'idColor' => '5'],

            ['idOPr' => '13', 'idColor' => '1'],
            ['idOPr' => '13', 'idColor' => '2'],
            ['idOPr' => '13', 'idColor' => '3'],
            ['idOPr' => '13', 'idColor' => '4'],
            ['idOPr' => '13', 'idColor' => '5'],
            ['idOPr' => '13', 'idColor' => '7'],
            ['idOPr' => '13', 'idColor' => '9'],
            ['idOPr' => '13', 'idColor' => '11'],
            ['idOPr' => '13', 'idColor' => '12'],
            ['idOPr' => '13', 'idColor' => '13'],
            ['idOPr' => '13', 'idColor' => '14'],
            ['idOPr' => '13', 'idColor' => '15'],
            
            ['idOPr' => '14', 'idColor' => '1'],
            ['idOPr' => '14', 'idColor' => '3'],
            ['idOPr' => '14', 'idColor' => '7'],

            ['idOPr' => '15', 'idColor' => '3'],

            ['idOPr' => '16', 'idColor' => '3'],
            ['idOPr' => '16', 'idColor' => '7'],

            ['idOPr' => '17', 'idColor' => '1'],
            ['idOPr' => '17', 'idColor' => '2'],
            ['idOPr' => '17', 'idColor' => '3'],
            ['idOPr' => '17', 'idColor' => '4'],
            ['idOPr' => '17', 'idColor' => '7'],
            ['idOPr' => '17', 'idColor' => '9'],
            ['idOPr' => '17', 'idColor' => '12'],

            ['idOPr' => '18', 'idColor' => '1'],
            ['idOPr' => '18', 'idColor' => '3'],
            ['idOPr' => '18', 'idColor' => '4'],
            ['idOPr' => '18', 'idColor' => '7'],
            ['idOPr' => '18', 'idColor' => '10'],

            ['idOPr' => '19', 'idColor' => '1'],
            ['idOPr' => '19', 'idColor' => '3'],
            ['idOPr' => '19', 'idColor' => '4'],
            ['idOPr' => '19', 'idColor' => '7'],
            ['idOPr' => '19', 'idColor' => '10'],

            ['idOPr' => '20', 'idColor' => '1'],
            ['idOPr' => '20', 'idColor' => '2'],
            ['idOPr' => '20', 'idColor' => '3'],
            ['idOPr' => '20', 'idColor' => '4'],
            ['idOPr' => '20', 'idColor' => '5'],
            ['idOPr' => '20', 'idColor' => '7'],
            ['idOPr' => '20', 'idColor' => '11'],
            ['idOPr' => '20', 'idColor' => '12'],

            ['idOPr' => '21', 'idColor' => '1'],
            ['idOPr' => '21', 'idColor' => '4'],
            ['idOPr' => '21', 'idColor' => '5'],

            ['idOPr' => '22', 'idColor' => '1'],
            ['idOPr' => '22', 'idColor' => '3'],
            ['idOPr' => '22', 'idColor' => '7'],

            ['idOPr' => '23', 'idColor' => '1'],
            ['idOPr' => '23', 'idColor' => '3'],

            ['idOPr' => '24', 'idColor' => '1'],
            ['idOPr' => '24', 'idColor' => '2'],
            ['idOPr' => '24', 'idColor' => '3'],
            ['idOPr' => '24', 'idColor' => '4'],
            ['idOPr' => '24', 'idColor' => '5'],
            ['idOPr' => '24', 'idColor' => '6'],
            ['idOPr' => '24', 'idColor' => '12'],

            ['idOPr' => '25', 'idColor' => '1'],
            ['idOPr' => '25', 'idColor' => '3'],
            ['idOPr' => '25', 'idColor' => '4'],
            ['idOPr' => '25', 'idColor' => '7'],

            ['idOPr' => '26', 'idColor' => '1'],
            ['idOPr' => '26', 'idColor' => '2'],
            ['idOPr' => '26', 'idColor' => '3'],
            ['idOPr' => '26', 'idColor' => '4'],
            ['idOPr' => '26', 'idColor' => '6'],

            ['idOPr' => '27', 'idColor' => '1'],
            ['idOPr' => '27', 'idColor' => '2'],
            ['idOPr' => '27', 'idColor' => '3'],
            ['idOPr' => '27', 'idColor' => '4'],
            ['idOPr' => '27', 'idColor' => '5'],
            ['idOPr' => '27', 'idColor' => '7'],
            ['idOPr' => '27', 'idColor' => '12'],
            ['idOPr' => '27', 'idColor' => '14'],

            ['idOPr' => '28', 'idColor' => '1'],
            ['idOPr' => '28', 'idColor' => '3'],
            ['idOPr' => '28', 'idColor' => '7'],
            ['idOPr' => '28', 'idColor' => '14'],

            ['idOPr' => '29', 'idColor' => '1'],

            ['idOPr' => '30', 'idColor' => '3'],
            ['idOPr' => '30', 'idColor' => '7'],

            ['idOPr' => '31', 'idColor' => '1'],
            ['idOPr' => '31', 'idColor' => '3'],
            ['idOPr' => '31', 'idColor' => '4'],
            ['idOPr' => '31', 'idColor' => '5'],
            ['idOPr' => '31', 'idColor' => '7'],
            ['idOPr' => '31', 'idColor' => '12'],

            ['idOPr' => '32', 'idColor' => '1'],
            ['idOPr' => '32', 'idColor' => '2'],
            ['idOPr' => '32', 'idColor' => '3'],
            ['idOPr' => '32', 'idColor' => '4'],
            ['idOPr' => '32', 'idColor' => '5'],
            ['idOPr' => '32', 'idColor' => '7'],
            ['idOPr' => '32', 'idColor' => '9'],
            ['idOPr' => '32', 'idColor' => '14'],

            ['idOPr' => '33', 'idColor' => '1'],
            ['idOPr' => '33', 'idColor' => '2'],
            ['idOPr' => '33', 'idColor' => '3'],
            ['idOPr' => '33', 'idColor' => '6'],

            ['idOPr' => '34', 'idColor' => '1'],
            ['idOPr' => '34', 'idColor' => '3'],
            ['idOPr' => '34', 'idColor' => '5'],

            ['idOPr' => '35', 'idColor' => '2'],
            ['idOPr' => '35', 'idColor' => '3'],
            ['idOPr' => '35', 'idColor' => '5'],
            ['idOPr' => '35', 'idColor' => '9'],

            ['idOPr' => '36', 'idColor' => '1'],
            ['idOPr' => '36', 'idColor' => '2'],
            ['idOPr' => '36', 'idColor' => '3'],
            ['idOPr' => '36', 'idColor' => '4'],
            ['idOPr' => '36', 'idColor' => '5'],
            ['idOPr' => '36', 'idColor' => '7'],
            ['idOPr' => '36', 'idColor' => '12'],
            ['idOPr' => '36', 'idColor' => '14'],

            ['idOPr' => '37', 'idColor' => '3'],
            ['idOPr' => '37', 'idColor' => '4'],
            ['idOPr' => '37', 'idColor' => '5'],

            ['idOPr' => '38', 'idColor' => '1'],
            ['idOPr' => '38', 'idColor' => '2'],
            ['idOPr' => '38', 'idColor' => '3'],
            ['idOPr' => '38', 'idColor' => '4'],

            ['idOPr' => '39', 'idColor' => '1'],
            ['idOPr' => '39', 'idColor' => '2'],
            ['idOPr' => '39', 'idColor' => '3'],
            ['idOPr' => '39', 'idColor' => '4'],

            ['idOPr' => '40', 'idColor' => '3'],

            ['idOPr' => '41', 'idColor' => '1'],

            ['idOPr' => '42', 'idColor' => '1'],

            ['idOPr' => '43', 'idColor' => '1'],

            ['idOPr' => '44', 'idColor' => '1'],
            ['idOPr' => '44', 'idColor' => '3'],

            ['idOPr' => '45', 'idColor' => '1'],
            ['idOPr' => '45', 'idColor' => '3'],
            ['idOPr' => '45', 'idColor' => '7'],
            ['idOPr' => '45', 'idColor' => '13'],

            ['idOPr' => '46', 'idColor' => '1'],

            ['idOPr' => '47', 'idColor' => '1'],
            ['idOPr' => '47', 'idColor' => '2'],
            ['idOPr' => '47', 'idColor' => '3'],
            ['idOPr' => '47', 'idColor' => '5'],
            ['idOPr' => '47', 'idColor' => '7'],
            ['idOPr' => '47', 'idColor' => '9'],
            ['idOPr' => '47', 'idColor' => '11'],
            ['idOPr' => '47', 'idColor' => '13'],

            ['idOPr' => '48', 'idColor' => '1'],
            ['idOPr' => '48', 'idColor' => '3'],

            ['idOPr' => '49', 'idColor' => '1'],
            ['idOPr' => '49', 'idColor' => '2'],
            ['idOPr' => '49', 'idColor' => '3'],
            ['idOPr' => '49', 'idColor' => '5'],
            ['idOPr' => '49', 'idColor' => '7'],
            ['idOPr' => '49', 'idColor' => '9'],
            ['idOPr' => '49', 'idColor' => '11'],
            ['idOPr' => '49', 'idColor' => '13'],

            ['idOPr' => '50', 'idColor' => '1'],
            ['idOPr' => '50', 'idColor' => '3'],

            ['idOPr' => '51', 'idColor' => '2'],
            ['idOPr' => '51', 'idColor' => '3'],

            ['idOPr' => '52', 'idColor' => '1'],

            ['idOPr' => '53', 'idColor' => '1'],

            ['idOPr' => '54', 'idColor' => '1'],
            ['idOPr' => '54', 'idColor' => '3'],
            ['idOPr' => '54', 'idColor' => '7'],
            ['idOPr' => '54', 'idColor' => '9'],

            ['idOPr' => '55', 'idColor' => '1'],

            ['idOPr' => '56', 'idColor' => '1'],

            ['idOPr' => '57', 'idColor' => '1'],
            ['idOPr' => '57', 'idColor' => '2'],
            ['idOPr' => '57', 'idColor' => '3'],

            ['idOPr' => '58', 'idColor' => '1'],
            ['idOPr' => '58', 'idColor' => '2'],
            ['idOPr' => '58', 'idColor' => '3'],
        ]);
        \DB::table('image_OPr')->insert([
            ['idOPrDetail' => '1', 'image1' => 'opr11.png','image2' => 'opr12.png','image3' => 'opr13.png','image4' => 'opr14.png','image5' => 'opr15.webp','image6' => 'opr16.webp','image7' => 'opr17.avif','image8' => 'opr18.png','image9' => 'opr19.png','image10' => 'opr1v10.png','image11' => 'opr1v11.png','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '2', 'image1' => 'opr21.png','image2' => 'opr22.png','image3' => 'opr23.png','image4' => 'opr24.png','image5' => 'opr25.webp','image6' => 'opr26.webp','image7' => 'opr27.webp','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '3', 'image1' => 'opr31.png','image2' => 'opr32.png','image3' => 'opr33.png','image4' => 'opr34.png','image5' => 'opr35.webp','image6' => 'opr36.webp','image7' => 'opr37.webp','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '4', 'image1' => 'opr41.png','image2' => 'opr42.png','image3' => 'opr43.png','image4' => 'opr44.png','image5' => 'opr45.webp','image6' => 'opr46.webp','image7' => 'opr47.webp','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '5', 'image1' => 'opr51.png','image2' => 'opr52.png','image3' => 'opr53.png','image4' => 'opr54.png','image5' => 'opr55.webp','image6' => 'opr56.webp','image7' => 'opr57.webp','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '6', 'image1' => 'opr61.png','image2' => 'opr62.png','image3' => 'opr63.png','image4' => 'opr64.png','image5' => 'opr65.webp','image6' => 'opr66.webp','image7' => 'opr67.webp','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '7', 'image1' => 'opr71.png','image2' => 'opr72.png','image3' => 'opr73.png','image4' => 'opr74.png','image5' => 'opr75.webp','image6' => 'opr76.webp','image7' => 'opr77.webp','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '8', 'image1' => 'opr81.png','image2' => 'opr82.png','image3' => 'opr83.png','image4' => 'opr84.png','image5' => 'opr85.webp','image6' => 'opr86.webp','image7' => 'opr87.webp','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '9', 'image1' => 'opr91.png','image2' => 'opr92.png','image3' => 'opr93.png','image4' => 'opr94.png','image5' => 'opr95.webp','image6' => 'opr96.webp','image7' => 'opr97.webp','image8' => 'opr98.webp','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '10', 'image1' => 'opr101.png','image2' => 'opr102.png','image3' => 'opr103.png','image4' => 'opr104.png','image5' => 'opr105.webp','image6' => 'opr106.webp','image7' => 'opr107.webp','image8' => 'opr108.webp','image9' => 'opr109.png','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '11', 'image1' => 'opr111.png','image2' => 'opr112.png','image3' => 'opr113.png','image4' => 'opr114.png','image5' => 'opr115.webp','image6' => 'opr116.webp','image7' => 'opr117.webp','image8' => 'opr118.webp','image9' => 'opr119.png','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '12', 'image1' => 'opr121.png','image2' => 'opr122.png','image3' => 'opr123.png','image4' => 'opr124.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '13', 'image1' => 'opr131.png','image2' => 'opr132.png','image3' => 'opr133.png','image4' => 'opr134.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '14', 'image1' => 'opr141.png','image2' => 'opr142.png','image3' => 'opr143.png','image4' => 'opr144.png','image5' => 'opr145.png','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '15', 'image1' => 'opr151.png','image2' => 'opr152.png','image3' => 'opr153.png','image4' => 'opr154.png','image5' => 'opr155.png','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '16', 'image1' => 'opr161.png','image2' => 'opr162.png','image3' => 'opr163.png','image4' => 'opr164.png','image5' => 'opr165.png','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '17', 'image1' => 'opr171.png','image2' => 'opr172.png','image3' => 'opr173.png','image4' => 'opr174.png','image5' => 'opr175.png','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '18', 'image1' => 'opr181.png','image2' => 'opr182.png','image3' => 'opr183.png','image4' => 'opr184.png','image5' => 'opr185.avif','image6' => 'opr186.avif','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '19', 'image1' => 'opr191.png','image2' => 'opr192.png','image3' => 'opr193.png','image4' => 'opr194.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '20', 'image1' => 'opr201.png','image2' => 'opr202.png','image3' => 'opr203.png','image4' => 'opr204.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '21', 'image1' => 'opr211.png','image2' => 'opr212.png','image3' => 'opr213.png','image4' => 'opr214.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '22', 'image1' => 'opr221.png','image2' => 'opr222.png','image3' => 'opr223.png','image4' => 'opr224.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '23', 'image1' => 'opr231.png','image2' => 'opr232.png','image3' => 'opr233.png','image4' => 'opr234.png','image5' => 'opr235.png','image6' => 'opr236.png','image7' => 'opr237.avif','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '24', 'image1' => 'opr241.png','image2' => 'opr242.png','image3' => 'opr243.png','image4' => 'opr244.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '25', 'image1' => 'opr251.png','image2' => 'opr252.png','image3' => 'opr253.png','image4' => 'opr254.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '26', 'image1' => 'opr261.png','image2' => 'opr262.png','image3' => 'opr263.png','image4' => 'opr264.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '27', 'image1' => 'opr271.png','image2' => 'opr272.png','image3' => 'opr273.png','image4' => 'opr274.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '28', 'image1' => 'opr281.png','image2' => 'opr282.png','image3' => 'opr283.png','image4' => 'opr284.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '29', 'image1' => 'opr291.png','image2' => 'opr292.png','image3' => 'opr293.png','image4' => 'opr294.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '30', 'image1' => 'opr301.png','image2' => 'opr302.png','image3' => 'opr303.png','image4' => 'opr304.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '31', 'image1' => 'opr311.png','image2' => 'opr312.png','image3' => 'opr313.png','image4' => 'opr314.png','image5' => 'opr315.png','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '32', 'image1' => 'opr321.png','image2' => 'opr322.png','image3' => 'opr323.png','image4' => 'opr324.png','image5' => 'opr325.png','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '33', 'image1' => 'opr331.png','image2' => 'opr332.png','image3' => 'opr333.png','image4' => 'opr334.png','image5' => 'opr335.png','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '34', 'image1' => 'opr341.png','image2' => 'opr342.png','image3' => 'opr343.png','image4' => 'opr344.png','image5' => 'opr345.png','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '35','image1' => 'opr351.png','image2' => 'opr352.png','image3' => 'opr353.png','image4' => 'opr354.png','image5' => 'opr355.webp','image6' => 'opr356.webp','image7' => 'opr357.webp','image8' => 'opr358.webp','image9' => 'opr359.png','image10' => 'opr35v10.png','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '36','image1' => 'opr361.png','image2' => 'opr362.png','image3' => 'opr363.png','image4' => 'opr364.png','image5' => 'opr365.webp','image6' => 'opr366.webp','image7' => 'opr367.webp','image8' => 'opr368.webp','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '37','image1' => 'opr371.png','image2' => 'opr372.png','image3' => 'opr373.png','image4' => 'opr374.png','image5' => 'opr375.webp','image6' => 'opr376.webp','image7' => 'opr377.webp','image8' => 'opr378.webp','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '38','image1' => 'opr381.png','image2' => 'opr382.png','image3' => 'opr383.png','image4' => 'opr384.png','image5' => 'opr385.png','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '39','image1' => 'opr391.png','image2' => 'opr392.png','image3' => 'opr393.png','image4' => 'opr394.png','image5' => 'opr395.png','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '40','image1' => 'opr401.png','image2' => 'opr402.png','image3' => 'opr403.png','image4' => 'opr404.png','image5' => 'opr405.png','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '41','image1' => 'opr411.png','image2' => 'opr412.png','image3' => 'opr413.png','image4' => 'opr414.png','image5' => 'opr415.png','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '42','image1' => 'opr421.png','image2' => 'opr422.png','image3' => 'opr423.png','image4' => 'opr424.png','image5' => 'opr425.png','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '43','image1' => 'opr431.png','image2' => 'opr432.png','image3' => 'opr433.png','image4' => 'opr434.webp','image5' => 'opr435.webp','image6' => 'opr436.webp','image7' => 'opr437.webp','image8' => 'opr438.avif','image9' => 'opr439.avif','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '44','image1' => 'opr441.png','image2' => 'opr442.png','image3' => 'opr443.png','image4' => 'opr444.webp','image5' => 'opr445.webp','image6' => 'opr446.webp','image7' => 'opr447.webp','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '45','image1' => 'opr451.png','image2' => 'opr452.png','image3' => 'opr453.png','image4' => 'opr454.webp','image5' => 'opr455.webp','image6' => 'opr456.webp','image7' => 'opr457.webp','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '46','image1' => 'opr461.png','image2' => 'opr462.png','image3' => 'opr463.png','image4' => 'opr464.webp','image5' => 'opr465.webp','image6' => 'opr466.webp','image7' => 'opr467.webp','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '47','image1' => 'opr471.png','image2' => 'opr472.png','image3' => 'opr473.png','image4' => 'opr474.webp','image5' => 'opr475.webp','image6' => 'opr476.webp','image7' => 'opr477.webp','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '48','image1' => 'opr481.png','image2' => 'opr482.png','image3' => 'opr483.png','image4' => 'opr484.webp','image5' => 'opr485.webp','image6' => 'opr486.webp','image7' => 'opr487.webp','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '49','image1' => 'opr491.png','image2' => 'opr492.png','image3' => 'opr493.avif','image4' => 'opr494.avif','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '50','image1' => 'opr501.png','image2' => 'opr502.png','image3' => '','image4' => '','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '51','image1' => 'opr511.png','image2' => 'opr512.png','image3' => '','image4' => '','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '52','image1' => 'opr521.png','image2' => 'opr522.png','image3' => 'opr523.png','image4' => 'opr524.png','image5' => 'opr525.webp','image6' => 'opr526.webp','image7' => 'opr527.webp','image8' => 'opr528.webp','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '53','image1' => 'opr531.png','image2' => 'opr532.png','image3' => 'opr533.png','image4' => 'opr534.png','image5' => 'opr535.webp','image6' => 'opr536.webp','image7' => 'opr537.webp','image8' => 'opr538.webp','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '54','image1' => 'opr541.png','image2' => 'opr542.png','image3' => 'opr543.png','image4' => 'opr544.png','image5' => 'opr545.webp','image6' => 'opr546.webp','image7' => 'opr547.webp','image8' => 'opr548.webp','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '55','image1' => 'opr551.png','image2' => 'opr552.png','image3' => 'opr553.png','image4' => 'opr554.png','image5' => 'opr555.webp','image6' => 'opr556.webp','image7' => 'opr557.webp','image8' => 'opr558.webp','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '56','image1' => 'opr561.png','image2' => 'opr562.png','image3' => 'opr563.png','image4' => 'opr564.png','image5' => 'opr565.webp','image6' => 'opr566.webp','image7' => 'opr567.webp','image8' => 'opr568.webp','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '57','image1' => 'opr571.png','image2' => 'opr572.png','image3' => 'opr573.png','image4' => 'opr574.png','image5' => 'opr575.webp','image6' => 'opr576.webp','image7' => 'opr577.webp','image8' => 'opr578.webp','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '58','image1' => 'opr581.png','image2' => 'opr582.png','image3' => 'opr583.png','image4' => 'opr584.png','image5' => 'opr585.webp','image6' => 'opr586.webp','image7' => 'opr587.webp','image8' => 'opr588.webp','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '59','image1' => 'opr591.png','image2' => 'opr592.png','image3' => 'opr593.png','image4' => 'opr594.png','image5' => 'opr595.webp','image6' => 'opr596.webp','image7' => 'opr597.webp','image8' => 'opr598.webp','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '60','image1' => 'opr601.png','image2' => 'opr602.png','image3' => 'opr603.png','image4' => 'opr604.png','image5' => 'opr605.webp','image6' => 'opr606.webp','image7' => 'opr607.webp','image8' => 'opr608.webp','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '61','image1' => 'opr611.png','image2' => 'opr612.png','image3' => 'opr613.png','image4' => 'opr614.png','image5' => 'opr615.webp','image6' => 'opr616.webp','image7' => 'opr617.webp','image8' => 'opr618.webp','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '62','image1' => 'opr621.png','image2' => 'opr622.png','image3' => 'opr623.png','image4' => 'opr624.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '63','image1' => 'opr631.png','image2' => 'opr632.png','image3' => 'opr633.png','image4' => 'opr634.png','image5' => 'opr635.webp','image6' => 'opr636.webp','image7' => 'opr637.webp','image8' => 'opr638.webp','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '64','image1' => 'opr641.png','image2' => 'opr642.png','image3' => 'opr643.png','image4' => 'opr644.png','image5' => 'opr65.avif','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '65','image1' => 'opr651.png','image2' => 'opr652.png','image3' => 'opr653.png','image4' => 'opr654.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '66','image1' => 'opr661.png','image2' => 'opr662.png','image3' => 'opr663.png','image4' => 'opr664.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '67','image1' => 'opr671.png','image2' => 'opr672.png','image3' => 'opr673.png','image4' => 'opr674.png','image5' => 'opr675.webp','image6' => 'opr676.webp','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '68','image1' => 'opr681.png','image2' => 'opr682.png','image3' => 'opr683.png','image4' => '','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '69','image1' => 'opr691.png','image2' => 'opr692.png','image3' => 'opr693.png','image4' => '','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '70','image1' => 'opr701.png','image2' => 'opr702.png','image3' => 'opr703.png','image4' => 'opr704.png','image5' => 'opr705.png','image6' => 'opr706.webp','image7' => 'opr707.webp','image8' => 'opr708.webp','image9' => 'opr709.webp','image10' => 'opr70v10.webp','image11' => 'opr70v11.webp','image12' => 'opr70v12.png','image13' => 'opr70v13.png','image14' => 'opr70v14.avif','image15' => ''],
            ['idOPrDetail' => '71','image1' => 'opr711.png','image2' => 'opr712.png','image3' => 'opr713.png','image4' => 'opr714.png','image5' => 'opr715.png','image6' => 'opr716.webp','image7' => 'opr717.webp','image8' => 'opr718.webp','image9' => 'opr719.webp','image10' => 'opr71v10.webp','image11' => 'opr71v11.webp','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '72','image1' => 'opr721.png','image2' => 'opr722.png','image3' => 'opr723.png','image4' => 'opr724.png','image5' => 'opr725.png','image6' => 'opr726.webp','image7' => 'opr727.webp','image8' => 'opr728.webp','image9' => 'opr729.webp','image10' => 'opr72v10.webp','image11' => 'opr72v11.webp','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '73','image1' => 'opr731.png','image2' => 'opr732.png','image3' => 'opr733.png','image4' => 'opr734.png','image5' => 'opr735.png','image6' => 'opr736.webp','image7' => 'opr737.webp','image8' => 'opr738.webp','image9' => 'opr739.webp','image10' => 'opr73v10.webp','image11' => 'opr73v11.webp','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '74','image1' => 'opr741.png','image2' => 'opr742.png','image3' => 'opr743.png','image4' => 'opr744.png','image5' => 'opr745.png','image6' => 'opr746.webp','image7' => 'opr747.webp','image8' => 'opr748.webp','image9' => 'opr749.webp','image10' => 'opr74v10.webp','image11' => 'opr74v11.webp','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '75','image1' => 'opr751.png','image2' => 'opr752.png','image3' => 'opr753.png','image4' => 'opr754.png','image5' => 'opr755.png','image6' => 'opr756.webp','image7' => 'opr757.webp','image8' => 'opr758.webp','image9' => 'opr759.webp','image10' => 'opr75v10.webp','image11' => 'opr75v11.webp','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '76','image1' => 'opr761.png','image2' => 'opr762.png','image3' => 'opr763.png','image4' => 'opr764.png','image5' => 'opr765.png','image6' => 'opr766.webp','image7' => 'opr767.webp','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '77','image1' => 'opr771.png','image2' => 'opr772.png','image3' => 'opr773.png','image4' => 'opr774.png','image5' => 'opr775.png','image6' => 'opr776.avif','image7' => 'opr777.png','image8' => 'opr778.png','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '78','image1' => 'opr781.png','image2' => 'opr782.png','image3' => 'opr783.png','image4' => 'opr784.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '79','image1' => 'opr791.png','image2' => 'opr792.png','image3' => 'opr793.png','image4' => 'opr794.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '80','image1' => 'opr801.png','image2' => 'opr802.png','image3' => 'opr803.png','image4' => 'opr804.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '81','image1' => 'opr811.png','image2' => 'opr812.png','image3' => 'opr813.png','image4' => 'opr814.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '82', 'image1' => 'opr181.png','image2' => 'opr182.png','image3' => 'opr183.png','image4' => 'opr184.png','image5' => 'opr185.avif','image6' => 'opr186.avif','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '83', 'image1' => 'opr191.png','image2' => 'opr192.png','image3' => 'opr193.png','image4' => 'opr194.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '84', 'image1' => 'opr201.png','image2' => 'opr202.png','image3' => 'opr203.png','image4' => 'opr204.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '85', 'image1' => 'opr211.png','image2' => 'opr212.png','image3' => 'opr213.png','image4' => 'opr214.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '86', 'image1' => 'opr221.png','image2' => 'opr222.png','image3' => 'opr223.png','image4' => 'opr224.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '87', 'image1' => 'opr231.png','image2' => 'opr232.png','image3' => 'opr233.png','image4' => 'opr234.png','image5' => '','image6' => '','image7' => 'opr237.avif','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '88', 'image1' => 'opr241.png','image2' => 'opr242.png','image3' => 'opr243.png','image4' => 'opr244.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '89', 'image1' => 'opr251.png','image2' => 'opr252.png','image3' => 'opr253.png','image4' => 'opr254.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '90', 'image1' => 'opr261.png','image2' => 'opr262.png','image3' => 'opr263.png','image4' => 'opr264.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '91', 'image1' => 'opr271.png','image2' => 'opr272.png','image3' => 'opr273.png','image4' => 'opr274.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '92', 'image1' => 'opr281.png','image2' => 'opr282.png','image3' => 'opr283.png','image4' => 'opr284.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '93', 'image1' => 'opr291.png','image2' => 'opr292.png','image3' => 'opr293.png','image4' => 'opr294.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '94', 'image1' => 'opr301.png','image2' => 'opr302.png','image3' => 'opr303.png','image4' => 'opr304.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '95','image1' => 'opr951.png','image2' => 'opr952.png','image3' => 'opr953.png','image4' => 'opr954.png','image5' => 'opr955.webp','image6' => 'opr956.webp','image7' => 'opr957.png','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '96','image1' => 'opr961.png','image2' => 'opr962.png','image3' => 'opr963.png','image4' => 'opr964.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '97','image1' => 'opr971.png','image2' => 'opr972.png','image3' => 'opr973.png','image4' => 'opr974.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '98','image1' => 'opr981.png','image2' => 'opr982.png','image3' => '','image4' => '','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '99','image1' => 'opr991.png','image2' => 'opr992.png','image3' => '','image4' => '','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '100','image1' => 'opr1001.png','image2' => 'opr1002.png','image3' => '','image4' => '','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '101','image1' => 'opr1011.png','image2' => 'opr1012.png','image3' => 'opr1013.avif','image4' => 'opr1014.avif','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '102','image1' => 'opr1021.png','image2' => 'opr1022.png','image3' => '','image4' => '','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '103','image1' => 'opr1031.png','image2' => 'opr1032.png','image3' => 'opr1033.png','image4' => 'opr1034.webp','image5' => 'opr1035.webp','image6' => 'opr1036.webp','image7' => 'opr1037.webp','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '104','image1' => 'opr1041.png','image2' => 'opr1042.png','image3' => 'opr1043.png','image4' => 'opr1044.webp','image5' => 'opr1045.webp','image6' => 'opr1046.webp','image7' => 'opr1047.webp','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '105','image1' => 'opr1051.png','image2' => 'opr1052.png','image3' => 'opr1053.png','image4' => 'opr1054.webp','image5' => 'opr1055.webp','image6' => 'opr1056.webp','image7' => 'opr1057.webp','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '106','image1' => 'opr1061.png','image2' => 'opr1062.png','image3' => 'opr1063.png','image4' => 'opr1064.webp','image5' => 'opr1065.webp','image6' => 'opr1066.webp','image7' => 'opr1067.webp','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '107','image1' => 'opr1071.png','image2' => 'opr1072.png','image3' => 'opr1073.png','image4' => 'opr1074.webp','image5' => 'opr1075.webp','image6' => 'opr1076.webp','image7' => 'opr1077.webp','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '108','image1' => 'opr1081.png','image2' => 'opr1082.png','image3' => 'opr1083.png','image4' => '','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '109','image1' => 'opr1091.png','image2' => 'opr1092.png','image3' => 'opr1093.png','image4' => 'opr1094.webp','image5' => 'opr1095.webp','image6' => 'opr1096.webp','image7' => 'opr1097.webp','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '110','image1' => 'opr1101.png','image2' => 'opr1102.png','image3' => 'opr1103.png','image4' => 'opr1104.png','image5' => 'opr1105.png','image6' => 'opr1106.png','image7' => 'opr1107.png','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '111','image1' => 'opr1111.png','image2' => 'opr1112.png','image3' => 'opr1113.png','image4' => 'opr1114.png','image5' => 'opr1115.png','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '112','image1' => 'opr1121.png','image2' => 'opr1122.png','image3' => 'opr1123.png','image4' => 'opr1124.png','image5' => 'opr1125.png','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '113','image1' => 'opr1131.png','image2' => 'opr1132.png','image3' => 'opr1133.png','image4' => 'opr1134.png','image5' => 'opr1135.png','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '114','image1' => 'opr1141.png','image2' => 'opr1142.png','image3' => 'opr1143.png','image4' => 'opr1144.png','image5' => 'opr1145.png','image6' => 'opr1146.webp','image7' => 'opr1147.webp','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '115','image1' => 'opr1151.png','image2' => 'opr1152.png','image3' => 'opr1153.png','image4' => 'opr1154.png','image5' => 'opr1155.png','image6' => 'opr1156.webp','image7' => 'opr1157.webp','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '116','image1' => 'opr1161.png','image2' => 'opr1162.png','image3' => 'opr1163.png','image4' => 'opr1164.png','image5' => 'opr1165.png','image6' => 'opr1166.webp','image7' => 'opr1167.webp','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '117','image1' => 'opr1171.png','image2' => 'opr1172.png','image3' => 'opr1173.png','image4' => 'opr1174.png','image5' => 'opr1175.png','image6' => 'opr1176.webp','image7' => 'opr1177.webp','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '118','image1' => 'opr1181.png','image2' => 'opr1182.png','image3' => 'opr1183.png','image4' => 'opr1184.png','image5' => 'opr1185.png','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '119','image1' => 'opr1191.png','image2' => 'opr1192.png','image3' => 'opr1193.png','image4' => 'opr1194.png','image5' => 'opr1195.webp','image6' => 'opr1196.webp','image7' => 'opr1197.webp','image8' => 'opr1198.webp','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '120','image1' => 'opr1201.png','image2' => 'opr1202.png','image3' => 'opr1203.png','image4' => 'opr1204.png','image5' => 'opr1205.webp','image6' => 'opr1206.webp','image7' => 'opr1207.webp','image8' => 'opr1208.webp','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '121','image1' => 'opr1211.png','image2' => 'opr1212.png','image3' => 'opr1213.png','image4' => 'opr1214.png','image5' => 'opr1215.webp','image6' => 'opr1216.webp','image7' => 'opr1217.webp','image8' => 'opr1218.webp','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '122','image1' => 'opr1221.png','image2' => 'opr1222.png','image3' => 'opr1223.png','image4' => 'opr1224.png','image5' => 'opr1225.webp','image6' => 'opr1226.webp','image7' => 'opr1227.webp','image8' => 'opr1228.webp','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '123','image1' => 'opr1231.png','image2' => 'opr1232.png','image3' => 'opr1233.png','image4' => 'opr1234.png','image5' => 'opr1235.webp','image6' => 'opr1236.webp','image7' => 'opr1237.webp','image8' => 'opr1238.webp','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '124','image1' => 'opr1241.png','image2' => 'opr1242.png','image3' => 'opr1243.png','image4' => 'opr1244.png','image5' => 'opr1245.webp','image6' => 'opr1246.webp','image7' => 'opr1247.webp','image8' => 'opr1248.webp','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '125','image1' => 'opr1251.png','image2' => 'opr1252.png','image3' => 'opr1253.png','image4' => 'opr1254.png','image5' => 'opr1255.webp','image6' => 'opr1256.webp','image7' => 'opr1257.webp','image8' => 'opr1258.webp','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '126','image1' => 'opr1261.png','image2' => 'opr1262.png','image3' => 'opr1263.png','image4' => 'opr1264.png','image5' => 'opr1265.webp','image6' => 'opr1266.webp','image7' => 'opr1267.webp','image8' => 'opr1268.webp','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '127','image1' => 'opr1271.png','image2' => 'opr1272.png','image3' => 'opr1273.png','image4' => 'opr1274.png','image5' => 'opr1275.webp','image6' => 'opr1276.webp','image7' => 'opr1277.webp','image8' => 'opr1278.webp','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '128','image1' => 'opr1281.png','image2' => 'opr1282.png','image3' => 'opr1283.png','image4' => 'opr1284.png','image5' => 'opr1285.webp','image6' => 'opr1286.webp','image7' => 'opr1287.webp','image8' => 'opr1288.webp','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '129','image1' => 'opr1291.png','image2' => 'opr1292.png','image3' => 'opr1293.png','image4' => 'opr1294.png','image5' => 'opr1295.webp','image6' => 'opr1296.webp','image7' => 'opr1297.webp','image8' => 'opr1298.webp','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '130','image1' => 'opr1301.png','image2' => 'opr1302.png','image3' => 'opr1303.png','image4' => 'opr1304.png','image5' => 'opr1305.webp','image6' => 'opr1306.webp','image7' => 'opr1307.webp','image8' => 'opr1308.webp','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '131','image1' => 'opr1311.png','image2' => 'opr1312.png','image3' => 'opr1313.webp','image4' => 'opr1314.webp','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '132','image1' => 'opr1321.png','image2' => 'opr1322.png','image3' => 'opr1323.png','image4' => 'opr1324.png','image5' => 'opr1325.png','image6' => 'opr1326.png','image7' => 'opr1327.png','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '133','image1' => 'opr1331.png','image2' => 'opr1332.png','image3' => 'opr1333.png','image4' => 'opr1334.png','image5' => 'opr1335.png','image6' => 'opr1336.png','image7' => 'opr1337.png','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '134','image1' => 'opr1341.png','image2' => 'opr1342.png','image3' => 'opr1343.png','image4' => 'opr1344.png','image5' => 'opr1345.png','image6' => 'opr1346.png','image7' => 'opr1347.png','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '135','image1' => 'opr1351.png','image2' => 'opr1352.png','image3' => 'opr1353.png','image4' => 'opr1354.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '136','image1' => 'opr1361.png','image2' => 'opr1362.png','image3' => 'opr1363.png','image4' => 'opr1364.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '137','image1' => 'opr1371.png','image2' => 'opr1372.png','image3' => 'opr1373.png','image4' => 'opr1374.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '138','image1' => 'opr1381.png','image2' => 'opr1382.png','image3' => 'opr1383.png','image4' => 'opr1384.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '139','image1' => 'opr1391.png','image2' => 'opr1392.png','image3' => 'opr1393.png','image4' => 'opr1394.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '140','image1' => 'opr1401.png','image2' => 'opr1402.png','image3' => 'opr1403.png','image4' => 'opr1404.png','image5' => 'opr1405.avif','image6' => 'opr1406.avif','image7' => 'opr1407.png','image8' => 'opr1408.png','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '141','image1' => 'opr1411.png','image2' => 'opr1412.png','image3' => 'opr1413.png','image4' => 'opr1414.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '142','image1' => 'opr1421.png','image2' => 'opr1422.png','image3' => 'opr1423.png','image4' => 'opr1424.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '143','image1' => 'opr1431.png','image2' => 'opr1432.png','image3' => 'opr1433.png','image4' => 'opr1434.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '144','image1' => 'opr1441.png','image2' => 'opr1442.png','image3' => 'opr1443.png','image4' => 'opr1444.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '145','image1' => 'opr1451.png','image2' => 'opr1452.png','image3' => 'opr1453.png','image4' => 'opr1454.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '146','image1' => 'opr1461.png','image2' => 'opr1462.png','image3' => 'opr1463.png','image4' => 'opr1464.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '147','image1' => 'opr1471.png','image2' => 'opr1472.png','image3' => 'opr1473.png','image4' => 'opr1474.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '148','image1' => 'opr1481.png','image2' => 'opr1482.png','image3' => 'opr1483.png','image4' => 'opr1484.png','image5' => 'opr1485.png','image6' => 'opr1486.png','image7' => 'opr1487.png','image8' => 'opr1488.png','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '149','image1' => 'opr1491.png','image2' => 'opr1492.png','image3' => 'opr1493.png','image4' => 'opr1494.png','image5' => 'opr1495.png','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '150','image1' => 'opr1501.png','image2' => 'opr1502.png','image3' => 'opr1503.png','image4' => 'opr1504.png','image5' => 'opr1505.png','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '151','image1' => 'opr1511.png','image2' => 'opr1512.png','image3' => 'opr1513.png','image4' => 'opr1514.png','image5' => 'opr1515.png','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '152','image1' => 'opr1521.png','image2' => 'opr1522.png','image3' => 'opr1523.png','image4' => 'opr1524.png','image5' => 'opr1525.avif','image6' => 'opr1526.avif','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '153','image1' => 'opr1531.png','image2' => 'opr1532.png','image3' => 'opr1533.png','image4' => 'opr1534.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '154','image1' => 'opr1541.png','image2' => 'opr1542.png','image3' => 'opr1543.png','image4' => 'opr1544.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '155','image1' => 'opr1551.png','image2' => 'opr1552.png','image3' => 'opr1553.png','image4' => 'opr1554.png','image5' => 'opr1555.png','image6' => 'opr1556.png','image7' => 'opr1557.png','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '156','image1' => 'opr1561.png','image2' => 'opr1562.png','image3' => 'opr1563.png','image4' => 'opr1564.png','image5' => 'opr1565.png','image6' => 'opr1566.png','image7' => 'opr1567.png','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '157','image1' => 'opr1571.png','image2' => 'opr1572.png','image3' => 'opr1573.png','image4' => 'opr1574.png','image5' => 'opr1575.png','image6' => 'opr1576.png','image7' => 'opr1577.png','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '158','image1' => 'opr1581.png','image2' => 'opr1582.png','image3' => 'opr1583.png','image4' => 'opr1584.png','image5' => 'opr1585.png','image6' => 'opr1586.png','image7' => 'opr1587.png','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '159','image1' => 'opr1591.png','image2' => 'opr1592.png','image3' => 'opr1593.png','image4' => 'opr1594.png','image5' => 'opr1595.png','image6' => 'opr1596.png','image7' => 'opr1597.avif','image8' => 'opr1598.png','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '160','image1' => 'opr1601.png','image2' => 'opr1602.png','image3' => 'opr1603.png','image4' => 'opr1604.png','image5' => 'opr1605.png','image6' => 'opr1606.png','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '161','image1' => 'opr1611.png','image2' => 'opr1612.png','image3' => 'opr1613.png','image4' => 'opr1614.png','image5' => 'opr1615.png','image6' => 'opr1616.png','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '162','image1' => 'opr1621.png','image2' => 'opr1622.png','image3' => 'opr1623.png','image4' => 'opr1624.png','image5' => 'opr1625.png','image6' => 'opr1626.png','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '163','image1' => 'opr1631.png','image2' => 'opr1632.png','image3' => 'opr1633.png','image4' => 'opr1634.png','image5' => 'opr1635.png','image6' => 'opr1636.png','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '164','image1' => 'opr1641.png','image2' => 'opr1642.png','image3' => 'opr1643.png','image4' => 'opr1644.png','image5' => 'opr1645.png','image6' => 'opr1646.png','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '165','image1' => 'opr1651.png','image2' => 'opr1652.png','image3' => 'opr1653.png','image4' => 'opr1654.png','image5' => 'opr1655.png','image6' => 'opr1656.png','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '166','image1' => 'opr1661.png','image2' => 'opr1662.png','image3' => 'opr1663.png','image4' => 'opr1664.png','image5' => 'opr1665.png','image6' => 'opr1666.png','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '167','image1' => 'opr1671.png','image2' => 'opr1672.png','image3' => '','image4' => '','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '168','image1' => 'opr1681.png','image2' => 'opr1682.png','image3' => '','image4' => '','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '169','image1' => 'opr1691.png','image2' => 'opr1692.png','image3' => '','image4' => '','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '170','image1' => 'opr1701.png','image2' => 'opr1702.png','image3' => '','image4' => '','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '171','image1' => 'opr1711.png','image2' => 'opr1712.png','image3' => '','image4' => '','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '172','image1' => 'opr1721.png','image2' => 'opr1722.png','image3' => '','image4' => '','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '173','image1' => 'opr1731.png','image2' => 'opr1732.png','image3' => '','image4' => '','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '174','image1' => 'opr1741.png','image2' => 'opr1742.png','image3' => 'opr1743.png','image4' => 'opr1744.png','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '175','image1' => 'opr1751.png','image2' => 'opr1752.png','image3' => '','image4' => '','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '176','image1' => 'opr1761.png','image2' => 'opr1762.png','image3' => '','image4' => '','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '177','image1' => 'opr1771.png','image2' => 'opr1772.png','image3' => '','image4' => '','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '178','image1' => 'opr1781.png','image2' => 'opr1782.png','image3' => 'opr1783.png','image4' => '','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '179','image1' => 'opr1791.png','image2' => 'opr1792.png','image3' => 'opr1793.png','image4' => 'opr1794.webp','image5' => 'opr1795.webp','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '180','image1' => 'opr1801.png','image2' => 'opr1802.png','image3' => 'opr1803.png','image4' => 'opr1804.webp','image5' => 'opr1805.avif','image6' => 'opr1806.avif','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '181','image1' => 'opr1811.png','image2' => 'opr1812.png','image3' => 'opr1813.png','image4' => 'opr1814.webp','image5' => 'opr1815.png','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '182','image1' => 'opr1821.png','image2' => '','image3' => '','image4' => '','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '183','image1' => 'opr1831.png','image2' => '','image3' => '','image4' => '','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '184','image1' => 'opr1841.png','image2' => 'opr1842.png','image3' => 'opr1843.png','image4' => 'opr1844.png','image5' => 'opr1845.png','image6' => 'opr1846.avif','image7' => 'opr1847.avif','image8' => 'opr1848.png','image9' => 'opr1849.avif','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '185','image1' => 'opr1851.png','image2' => 'opr1852.png','image3' => 'opr1853.png','image4' => 'opr1854.png','image5' => 'opr1855.png','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '186','image1' => 'opr1861.png','image2' => 'opr1862.png','image3' => 'opr1863.png','image4' => 'opr1864.png','image5' => 'opr1865.png','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '187','image1' => 'opr1871.png','image2' => 'opr1872.png','image3' => 'opr1873.png','image4' => 'opr1874.png','image5' => 'opr1875.png','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '188','image1' => 'opr1881.png','image2' => 'opr1882.png','image3' => 'opr1883.png','image4' => 'opr1884.png','image5' => 'opr1885.png','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '189','image1' => 'opr1891.png','image2' => 'opr1892.png','image3' => 'opr1893.webp','image4' => 'opr1894.webp','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '190','image1' => 'opr1901.png','image2' => 'opr1902.png','image3' => 'opr1903.webp','image4' => 'opr1904.webp','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '191','image1' => 'opr1911.png','image2' => 'opr1912.png','image3' => 'opr1913.webp','image4' => 'opr1914.webp','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '192','image1' => 'opr1921.png','image2' => 'opr1922.png','image3' => 'opr1923.webp','image4' => 'opr1924.webp','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '193','image1' => 'opr1931.png','image2' => 'opr1932.png','image3' => 'opr1933.webp','image4' => 'opr1934.webp','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '194','image1' => 'opr1941.png','image2' => 'opr1942.png','image3' => 'opr1943.webp','image4' => 'opr1944.webp','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '195','image1' => 'opr1951.png','image2' => 'opr1952.png','image3' => 'opr1953.webp','image4' => 'opr1954.webp','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '196','image1' => 'opr1961.png','image2' => 'opr1962.png','image3' => '','image4' => '','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            
            ['idOPrDetail' => '197','image1' => 'opr1971.png','image2' => 'opr1972.avif','image3' => 'opr1973.png','image4' => '','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '198','image1' => 'opr1981.png','image2' => '','image3' => '','image4' => '','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '199','image1' => 'opr1991.png','image2' => 'opr1992.png','image3' => 'opr1993.png','image4' => '','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '200','image1' => 'opr2001.png','image2' => 'opr2002.png','image3' => 'opr2003.png','image4' => 'opr2004.webp','image5' => 'opr2005.webp','image6' => 'opr2006.webp','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '201','image1' => 'opr2011.png','image2' => 'opr2012.png','image3' => 'opr2013.png','image4' => 'opr2014.webp','image5' => 'opr2015.webp','image6' => 'opr2016.webp','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '202','image1' => 'opr2021.png','image2' => 'opr2022.png','image3' => 'opr2023.png','image4' => 'opr2024.webp','image5' => 'opr2025.webp','image6' => 'opr2026.webp','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '203','image1' => 'opr2031.png','image2' => 'opr2032.png','image3' => 'opr2033.png','image4' => 'opr2034.webp','image5' => 'opr2035.webp','image6' => 'opr2036.webp','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '204','image1' => 'opr2041.png','image2' => 'opr2042.png','image3' => 'opr2043.png','image4' => '','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '205','image1' => 'opr2051.png','image2' => 'opr2052.png','image3' => 'opr2053.png','image4' => 'opr2054.webp','image5' => 'opr2055.webp','image6' => 'opr2056.webp','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '206','image1' => 'opr2061.png','image2' => 'opr2062.png','image3' => 'opr2063.png','image4' => '','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '207','image1' => 'opr2071.webp','image2' => 'opr2072.webp','image3' => '','image4' => '','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '208','image1' => 'opr2081.webp','image2' => 'opr2082.webp','image3' => '','image4' => '','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '209','image1' => 'opr2091.png','image2' => 'opr2091.png','image3' => 'opr2093.webp','image4' => 'opr2094.webp','image5' => 'opr2095.webp','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '210','image1' => 'opr2101.png','image2' => 'opr2101.png','image3' => 'opr2103.webp','image4' => 'opr2104.webp','image5' => 'opr2105.webp','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '211','image1' => 'opr2111.png','image2' => 'opr2112.png','image3' => 'opr2113.webp','image4' => 'opr2114.webp','image5' => 'opr2115.webp','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '212','image1' => 'opr2121.png','image2' => 'opr2122.png','image3' => 'opr2123.webp','image4' => 'opr2124.webp','image5' => 'opr2125.avif','image6' => 'opr2126.png','image7' => 'opr2127.png','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '213','image1' => 'opr2131.png','image2' => 'opr2132.png','image3' => 'opr2133.webp','image4' => 'opr2134.webp','image5' => 'opr2135.webp','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '214','image1' => 'opr2141.png','image2' => 'opr2142.png','image3' => 'opr2143.webp','image4' => 'opr2144.webp','image5' => 'opr2145.webp','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '215','image1' => 'opr2151.png','image2' => 'opr2152.png','image3' => 'opr2153.webp','image4' => 'opr2154.webp','image5' => 'opr2155.webp','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '216','image1' => 'opr2161.png','image2' => 'opr2162.png','image3' => 'opr2163.webp','image4' => 'opr2164.webp','image5' => 'opr2165.webp','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '217','image1' => 'opr2171.png','image2' => 'opr2172.png','image3' => 'opr2173.png','image4' => '','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '218','image1' => 'opr2181.png','image2' => '','image3' => '','image4' => '','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '219','image1' => 'opr2191.png','image2' => 'opr2192.png','image3' => '','image4' => '','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '220','image1' => 'opr2201.png','image2' => 'opr2202.png','image3' => '','image4' => '','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '221','image1' => 'opr2211.png','image2' => 'opr2212.png','image3' => '','image4' => '','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],

            ['idOPrDetail' => '222','image1' => 'opr2221.png','image2' => 'opr2222.png','image3' => '','image4' => '','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '223','image1' => 'opr2231.png','image2' => 'opr2232.png','image3' => '','image4' => '','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
            ['idOPrDetail' => '224','image1' => 'opr2241.png','image2' => 'opr2242.png','image3' => '','image4' => '','image5' => '','image6' => '','image7' => '','image8' => '','image9' => '','image10' => '','image11' => '','image12' => '','image13' => '','image14' => '','image15' => ''],
        ]);
        \DB::table('SizeGuide')->insert([    
            ['idOPr' => '1', 'width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'20.08','M'=>'22.05','L' => '24.02','XL' => '25.98','size2XL' => '27.99','size3XL'=>'29.92','size4XL'=>'31.89','size5XL'=>'33.86'],     
            ['idOPr' => '1','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'27.17','M'=>'27.95','L' => '29.13','XL' => '29.92','size2XL' => '31.10','size3XL'=>'31.89','size4XL'=>'33.07','size5XL'=>'33.86'],
            ['idOPr' => '1','width'=>'0','length'=>'0','sleeveLength'=>'1','S'=>'33.50','M'=>'34.50','L' => '35.50','XL' => '36.50','size2XL' => '37.50','size3XL'=>'38.50','size4XL'=>'39.50','size5XL'=>'40.50'],
    
            ['idOPr' => '2','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'17.00 - 18.00','M' => '19.00 - 20.00','L' => '21.00 - 22.00','XL' => '23.00 - 24.00','size2XL'=>'25.00 - 26.00','size3XL'=>'27.00 - 28.00','size4XL'=>'29.00 - 30.00','size5XL'=>''],
            ['idOPr' => '2','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'28.00','M' => '29.00','L' => '30.00','XL' => '31.00','size2XL'=>'32.00','size3XL'=>'33.00','size4XL'=>'34.00','size5XL'=>''],
            ['idOPr' => '2','width'=>'0','length'=>'0','sleeveLength'=>'1','S'=>'27.50','M' => '27.80','L' => '28.00','XL' => '28.30','size2XL'=>'28.40','size3XL'=>'28.50','size4XL'=>'28.60','size5XL'=>''],
    
            ['idOPr' => '3','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'21.50','M' => '23.00','L' => '24.00','XL' => '25.00','size2XL'=>'27.00','size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '3','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'26.00','M' => '27.00','L' => '29.00','XL' => '30.00','size2XL'=>'30.00','size3XL'=>'','size4XL'=>'','size5XL'=>'', ],
            ['idOPr' => '3','width'=>'0','length'=>'0','sleeveLength'=>'1','S'=>'22.00','M' => '22.00','L' => '25.00','XL' => '25.50','size2XL'=>'28.00','size3XL'=>'','size4XL'=>'','size5XL'=>''],
    
            ['idOPr' => '4','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'20.08','M' => '22.05','L' => '24.02','XL' => '25.59','size2XL'=>'27.17','size3XL'=>'28.74','size4XL'=>'30.71','size5XL'=>'32.68'],
            ['idOPr' => '4','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'26.38','M' => '27.56','L' => '28.74','XL' => '29.92','size2XL'=>'31.10','size3XL'=>'32.28','size4XL'=>'33.86','size5XL'=>'35.43'],
            ['idOPr' => '4','width'=>'0','length'=>'0','sleeveLength'=>'1','S'=>'23.23','M' => '23.82','L' => '24.41','XL' => '25.00','size2XL'=>'25.59','size3XL'=>'26.18','size4XL'=>'26.97','size5XL'=>'27.76'],
    
            ['idOPr' => '5','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'20.00','M' => '22.00','L' => '24.00','XL' => '26.00','size2XL'=>'28.00','size3XL'=>'30.00','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '5','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'27.00','M' => '28.00','L' => '29.00','XL' => '30.00','size2XL'=>'31.00','size3XL'=>'32.00','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '5','width'=>'0','length'=>'0','sleeveLength'=>'1','S'=>'33.50','M' => '34.50','L' => '35.50','XL' => '36.50','size2XL'=>'37.50','size3XL'=>'38.50','size4XL'=>'','size5XL'=>''],
    
            ['idOPr' => '6','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'20.00','M' => '21.99','L' => '24.00','XL' => '26.00','size2XL'=>'28.00','size3XL'=>'','size4XL'=>'','size5XL'=>''],         
            ['idOPr' => '6','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'27.00','M' => '28.00','L' => '29.00','XL' => '30.00','size2XL'=>'31.00','size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '6','width'=>'0','length'=>'0','sleeveLength'=>'1','S'=>'36.00','M' => '36.75','L' => '37.25','XL' => '38.25','size2XL'=>'39.00','size3XL'=>'','size4XL'=>'','size5XL'=>''],
    
            ['idOPr' => '7','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'20.50','M' => '22.00','L' => '23.50','XL' => '25.00','size2XL'=>'26.50','size3XL'=>'28.00','size4XL'=>'29.50','size5XL'=>'31.00'],
            ['idOPr' => '7','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'26.50','M' => '28.00','L' => '29.50','XL' => '31.00','size2XL'=>'32.50','size3XL'=>'34.00','size4XL'=>'35.50','size5XL'=>'37.00'],                               
            ['idOPr' => '7','width'=>'0','length'=>'0','sleeveLength'=>'1','S'=>'35.00','M' => '36.00','L' => '37.00','XL' => '38.00','size2XL'=>'39.00','size3XL'=>'40.00','size4XL'=>'41.00','size5XL'=>'42.00'],
    
            ['idOPr' => '8','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'20.47','M' => '22.05','L' => '23.62','XL' => '25.20','size2XL'=>'26.77','size3XL'=>'28.35','size4XL'=>'29.92','size5XL'=>'31.50'], 
            ['idOPr' => '8','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'26.77','M' => '27.95','L' => '29.13','XL' => '30.31','size2XL'=>'31.50','size3XL'=>'32.68','size4XL'=>'33.86','size5XL'=>'35.04'],    
            ['idOPr' => '8','width'=>'0','length'=>'0','sleeveLength'=>'1','S'=>'25.59','M' => '26.18','L' => '26.77','XL' => '27.36','size2XL'=>'27.95','size3XL'=>'28.54','size4XL'=>'29.13','size5XL'=>'30.51'],  
    
            ['idOPr' => '9','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'20.25','M' => '21.75','L' => '23.75','XL' => '24.75','size2XL'=>'26.25', 'size3XL'=>'28.25','size4XL'=>'','size5XL'=>''],    
            ['idOPr' => '9','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'29.00','M' => '30.00','L' => '31.00','XL' => '32.00','size2XL'=>'33.00', 'size3XL'=>'33.50','size4XL'=>'','size5XL'=>''],    
            ['idOPr' => '9','width'=>'0','length'=>'0','sleeveLength'=>'1','S'=>'18.50','M' => '19.25','L' => '20.00','XL' => '20.75','size2XL'=>'21.50', 'size3XL'=>'22.25','size4XL'=>'','size5XL'=>''],
    
            ['idOPr' => '10','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'20.25','M' => '21.75','L' => '23.75','XL' => '24.75','size2XL'=>'26.25', 'size3XL'=>'28.25','size4XL'=>'','size5XL'=>''],      
            ['idOPr' => '10','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'29.00','M' => '30.00','L' => '31.00','XL' => '32.00','size2XL'=>'33.00', 'size3XL'=>'33.50','size4XL'=>'','size5XL'=>''],   
            ['idOPr' => '10','width'=>'0','length'=>'0','sleeveLength'=>'1','S'=>'18.50','M' => '19.25','L' => '20.00','XL' => '20.75','size2XL'=>'21.50', 'size3XL'=>'22.25','size4XL'=>'','size5XL'=>''],
            
            ['idOPr' => '11','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'27.56','M' => '27.95','L' => '28.35','XL' => '29.13','size2XL'=>'29.53', 'size3XL'=>'29.92','size4XL'=>'','size5XL'=>''],  
            ['idOPr' => '11','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'14.96','M' => '16.14','L' => '16.93','XL' => '18.11','size2XL'=>'18.90', 'size3XL'=>'19.69','size4XL'=>'','size5XL'=>''],  
            
            ['idOPr' => '12','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'17.72','M' => '18.90','L' => '20.08','XL' => '21.26','size2XL'=>'22.44', 'size3XL'=>'23.62', 'size4XL'=>'','size5XL'=>''],   
            ['idOPr' => '12','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'27.17','M' => '28.35','L' => '29.53','XL' => '30.71','size2XL'=>'31.89', 'size3XL'=>'33.07','size4XL'=>'','size5XL'=>''],
    
            ['idOPr' => '13','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'18.00','M' => '20.00','L' => '22.00','XL' => '24.00','size2XL'=>'26.00', 'size3XL'=>'28.00','size4XL'=>'30.00','size5XL'=>'32.00'],
            ['idOPr' => '13','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'28.00','M' => '29.00','L' => '30.00','XL' => '31.00','size2XL'=>'32.00', 'size3XL'=>'33.00','size4XL'=>'34.00','size5XL'=>'35.00'],
            ['idOPr' => '13','width'=>'0','length'=>'0','sleeveLength'=>'1','S'=>'8.23','M' => '8.50','L' => '8.74','XL' => '9.02','size2XL'=>'9.25', 'size3XL'=>'9.49','size4XL'=>'9.72','size5XL'=>'9.96'],
            
            ['idOPr' => '14','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'17.99','M' => '20.00','L' => '21.97','XL' => '23.98','size2XL'=>'25.98', 'size3XL'=>'27.99','size4XL'=>'29.97','size5XL'=>''],
            ['idOPr' => '14','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'27.99','M' => '28.98','L' => '30.00','XL' => '30.98','size2XL'=>'32.99', 'size3XL'=>'33.98','size4XL'=>'34.98','size5XL'=>''],
            
            ['idOPr' => '15','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'20.28','M' => '21.26','L' => '22.44','XL' => '23.62','size2XL'=>'24.80', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '15','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'27.56','M' => '28.35','L' => '29.13','XL' => '29.92','size2XL'=>'30.71', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '15','width'=>'0','length'=>'0','sleeveLength'=>'1','S'=>'25.20','M' => '25.79','L' => '26.38','XL' => '26.97','size2XL'=>'27.56', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            
            ['idOPr' => '16','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'26.57','M' => '27.56','L' => '28.54','XL' => '29.53','size2XL'=>'30.51', 'size3XL'=>'31.50','size4XL'=>'32.01','size5XL'=>'33.70'],
            ['idOPr' => '16','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'22.24','M' => '23.23','L' => '24.21','XL' => '25.20','size2XL'=>'26.18', 'size3XL'=>'27.17','size4XL'=>'28.15','size5XL'=>'29.53'],
            ['idOPr' => '16','width'=>'0','length'=>'0','sleeveLength'=>'1','S'=>'25.59','M' => '26.38','L' => '27.36','XL' => '28.35','size2XL'=>'29.13', 'size3XL'=>'29.92','size4XL'=>'30.63','size5XL'=>'31.89'],
            
            ['idOPr' => '17','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'20.08','M' => '22.05','L' => '24.02','XL' => '25.98','size2XL'=>'27.99', 'size3XL'=>'29.92','size4XL'=>'31.89','size5XL'=>'33.86'],
            ['idOPr' => '17','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'27.17','M' => '27.95','L' => '29.13','XL' => '29.92','size2XL'=>'31.10', 'size3XL'=>'31.89','size4XL'=>'33.07','size5XL'=>'33.86'],
            ['idOPr' => '17','width'=>'0','length'=>'0','sleeveLength'=>'1','S'=>'33.50','M' => '34.50','L' => '35.50','XL' => '36.50','size2XL'=>'37.50', 'size3XL'=>'38.50','size4XL'=>'39.50','size5XL'=>'40.50'],
            
            ['idOPr' => '18','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'20.00','M' => '21.99','L' => '24.00','XL' => '26.00','size2XL'=>'28.00', 'size3XL'=>'30.00','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '18','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'27.00','M' => '28.00','L' => '29.00','XL' => '30.00','size2XL'=>'31.00', 'size3XL'=>'32.00','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '18','width'=>'0','length'=>'0','sleeveLength'=>'1','S'=>'36.00','M' => '36.75','L' => '37.50','XL' => '38.25','size2XL'=>'39.00', 'size3XL'=>'39.37','size4XL'=>'','size5XL'=>''],
            
            ['idOPr' => '19','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'20.00','M' => '21.99','L' => '24.00','XL' => '26.00','size2XL'=>'28.00', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '19','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'27.00','M' => '28.00','L' => '29.00','XL' => '30.00','size2XL'=>'31.00', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '19','width'=>'0','length'=>'0','sleeveLength'=>'1','S'=>'36.00','M' => '36.75','L' => '37.25','XL' => '38.25','size2XL'=>'39.00', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            
            ['idOPr' => '20','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'20.50','M' => '22.00','L' => '23.50','XL' => '25.00','size2XL'=>'26.50', 'size3XL'=>'28.00','size4XL'=>'29.50','size5XL'=>'31.00'],
            ['idOPr' => '20','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'26.50','M' => '28.00','L' => '29.50','XL' => '31.00','size2XL'=>'32.50', 'size3XL'=>'34.00','size4XL'=>'35.50','size5XL'=>'37.00'],
            ['idOPr' => '20','width'=>'0','length'=>'0','sleeveLength'=>'1','S'=>'35.00','M' => '36.00','L' => '37.50','XL' => '38.00','size2XL'=>'39.50', 'size3XL'=>'40.00','size4XL'=>'41.50','size5XL'=>'42.00'],
            
            ['idOPr' => '21','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'20.25','M' => '21.75','L' => '23.75','XL' => '24.75','size2XL'=>'26.25', 'size3XL'=>'28.25','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '21','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'29.00','M' => '30.00','L' => '31.00','XL' => '32.00','size2XL'=>'33.00', 'size3XL'=>'33.50','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '21','width'=>'0','length'=>'0','sleeveLength'=>'1','S'=>'18.50','M' => '19.25','L' => '20.00','XL' => '20.75','size2XL'=>'21.50', 'size3XL'=>'22.25','size4XL'=>'','size5XL'=>''],
            
            ['idOPr' => '22','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'15.87','M' => '16.50','L' => '17.36','XL' => '18.23','size2XL'=>'19.13', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '22','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'19.25','M' => '19.72','L' => '20.35','XL' => '20.98','size2XL'=>'21.61', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            
            ['idOPr' => '23','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'18.90','M' => '20.08','L' => '21.26','XL' => '22.44','size2XL'=>'23.62', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '23','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'28.35','M' => '29.53','L' => '30.71','XL' => '31.89','size2XL'=>'33.07', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            
            ['idOPr' => '24','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'18.00','M' => '20.00','L' => '22.00','XL' => '24.00','size2XL'=>'26.00', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '24','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'28.00','M' => '29.00','L' => '30.00','XL' => '31.00','size2XL'=>'32.00', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
    
            ['idOPr' => '25','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'17.99','M' => '20.00','L' => '21.97','XL' => '23.98','size2XL'=>'25.98', 'size3XL'=>'27.99','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '25','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'27.99','M' => '28.98','L' => '30.00','XL' => '30.98','size2XL'=>'32.01', 'size3XL'=>'32.99','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '25','width'=>'0','length'=>'0','sleeveLength'=>'1','S'=>'26.93','M' => '27.17','L' => '27.56','XL' => '27.95','size2XL'=>'28.35', 'size3XL'=>'28.74','size4XL'=>'','size5XL'=>''],
            
            ['idOPr' => '26','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'28.50','M' => '29.50','L' => '30.50','XL' => '31.50','size2XL'=>'32.50', 'size3XL'=>'33.50','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '26','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'18.00','M' => '20.00','L' => '22.00','XL' => '24.00','size2XL'=>'26.00', 'size3XL'=>'28.00','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '26','width'=>'0','length'=>'0','sleeveLength'=>'1','S'=>'23.75','M' => '24.25','L' => '25.00','XL' => '25.50','size2XL'=>'26.00', 'size3XL'=>'26.50','size4XL'=>'','size5XL'=>''],
            
            ['idOPr' => '27','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'17.00','M' => '18.00','L' => '19.50','XL' => '20.50','size2XL'=>'23.00', 'size3XL'=>'24.50','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '27','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'25.00','M' => '26.00','L' => '27.00','XL' => '27.75','size2XL'=>'28.00', 'size3XL'=>'28.50','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '27','width'=>'0','length'=>'0','sleeveLength'=>'1','S'=>'13.75','M' => '14.25','L' => '15.12','XL' => '15.62','size2XL'=>'16.50', 'size3XL'=>'17.37','size4XL'=>'','size5XL'=>''],
            
            ['idOPr' => '28','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'17.99','M' => '20.00','L' => '22.01','XL' => '23.98','size2XL'=>'25.98', 'size3XL'=>'27.99','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '28','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'27.72','M' => '28.74','L' => '29.72','XL' => '30.75','size2XL'=>'31.73', 'size3XL'=>'32.72','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '28','width'=>'0','length'=>'0','sleeveLength'=>'1','S'=>'8.90','M' => '9.17','L' => '9.45','XL' => '9.72','size2XL'=>'10.00', 'size3XL'=>'10.39','size4XL'=>'','size5XL'=>''],
            
            ['idOPr' => '29','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'19.25','M' => '20.00','L' => '20.75','XL' => '21.50','size2XL'=>'22.25', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '29','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'20.00','M' => '21.00','L' => '22.50','XL' => '24.25','size2XL'=>'25.12', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            
            ['idOPr' => '30','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'20.28','M' => '21.65','L' => '23.03','XL' => '24.41','size2XL'=>'25.79', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '30','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'25.98','M' => '26.77','L' => '27.56','XL' => '28.35','size2XL'=>'29.13', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '30','width'=>'0','length'=>'0','sleeveLength'=>'1','S'=>'23.82','M' => '24.21','L' => '24.61','XL' => '25.00','size2XL'=>'25.39', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            
            ['idOPr' => '31','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'12.00','M' => '13.00','L' => '14.00','XL' => '15.00','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '31','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'15.50','M' => '16.50','L' => '17.50','XL' => '16.00','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            
            ['idOPr' => '32','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'10.50','M' => '11.00','L' => '12.00','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '32','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'19.00','M' => '20.00','L' => '12.00','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            
            ['idOPr' => '33','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'15.50','M' => '16.50','L' => '17.50','XL' => '18.50','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '33','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'13.00','M' => '14.00','L' => '15.00','XL' => '16.00','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '33','width'=>'0','length'=>'0','sleeveLength'=>'1','S'=>'11.00','M' => '11.75','L' => '12.50','XL' => '14.75','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            
            ['idOPr' => '34','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'16.00','M' => '17.00','L' => '18.00','XL' => '19.50','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '34','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'21.50','M' => '23.00','L' => '25.00','XL' => '27.00','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '34','width'=>'0','length'=>'0','sleeveLength'=>'1','S'=>'26.50','M' => '27.50','L' => '28.50','XL' => '30.00','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            
            ['idOPr' => '35','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'15.62','M' => '16.62','L' => '17.62','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '35','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'14.50','M' => '15.50','L' => '16.50','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '35','width'=>'0','length'=>'0','sleeveLength'=>'1','S'=>'12.00','M' => '12.75','L' => '13.50','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            
            ['idOPr' => '36','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'16.93','M' => '18.11','L' => '18.90','XL' => '20.08','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '36','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'21.26','M' => '22.44','L' => '24.02','XL' => '25.59','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '36','width'=>'0','length'=>'0','sleeveLength'=>'1','S'=>'26.50','M' => '27.76','L' => '30.24','XL' => '32.99','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            
            ['idOPr' => '37','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'17.00','M' => '18.00','L' => '19.00','XL' => '20.00','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '37','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'21.25','M' => '22.50','L' => '24.00','XL' => '25.50','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '37','width'=>'0','length'=>'0','sleeveLength'=>'1','S'=>'26.50','M' => '27.75','L' => '30.25','XL' => '33.00','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            
            ['idOPr' => '38','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'7.24','M' => '8.74','L' => '9.72','XL' => '10.75','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '38','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'10.75','M' => '11.73','L' => '12.76','XL' => '13.78','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '38','width'=>'0','length'=>'0','sleeveLength'=>'1','S'=>'8.37','M' => '8.62','L' => '8.87','XL' => '10.00','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            
            ['idOPr' => '39','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'7.24','M' => '8.74','L' => '9.72','XL' => '10.75','size2XL'=>'11.73', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '39','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'10.75','M' => '11.73','L' => '12.76','XL' => '13.74','size2XL'=>'14.76', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            
            ['idOPr' => '40','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'3.78','M' => '','L' => '','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '40','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'3.19','M' => '','L' => '','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            
            ['idOPr' => '41','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'3.74','M' => '','L' => '','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '41','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'3.15','M' => '','L' => '','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            
            ['idOPr' => '42','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'3.07','M' => '','L' => '','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '42','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'3.39','M' => '','L' => '','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            
            ['idOPr' => '43','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'4.72','M' => '','L' => '','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '43','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'3.39','M' => '','L' => '','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '43','width'=>'0','length'=>'0','sleeveLength'=>'1','S'=>'4.92','M' => '','L' => '','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            
            ['idOPr' => '44','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'23.50','M' => '','L' => '','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '44','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'33.19','M' => '','L' => '','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '44','width'=>'0','length'=>'0','sleeveLength'=>'1','S'=>'32.09','M' => '','L' => '','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            
            ['idOPr' => '45','width'=>'1','length' =>'0','sleeveLength'=>'0','S'=>'22.83','M' => '','L' => '','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            
            ['idOPr' => '46','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'22.80','M' => '','L' => '','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '46','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'3.50','M' => '','L' => '','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '46','width'=>'0','length'=>'0','sleeveLength'=>'1','S'=>'3.03','M' => '','L' => '','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            
            ['idOPr' => '47','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'23.50','M' => '','L' => '','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '47','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'33.19','M' => '','L' => '','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '47','width'=>'0','length'=>'0','sleeveLength'=>'1','S'=>'32.09','M' => '','L' => '','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            
            ['idOPr' => '48','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'20.00','M' => '27.00','L' => '25.00','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '48','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'9.75','M' => '13.00','L' => '12.00','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            
            ['idOPr' => '49','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'15.00','M' => '','L' => '','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '49','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'16.50','M' => '','L' => '','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            
            ['idOPr' => '50','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'14.60','M' => '','L' => '','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '50','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'16.60','M' => '','L' => '','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '50','width'=>'0','length'=>'0','sleeveLength'=>'1','S'=>'22.64','M' => '','L' => '','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            
            ['idOPr' => '51','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'9.30','M' => '','L' => '','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '51','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'7.70','M' => '','L' => '','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '51','width'=>'0','length'=>'0','sleeveLength'=>'1','S'=>'4.70','M' => '','L' => '','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            
            ['idOPr' => '52','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'8.90','M' => '','L' => '','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '52','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'2.80','M' => '','L' => '','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            
            ['idOPr' => '53','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'2.68','M' => '','L' => '','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '53','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'10.63','M' => '','L' => '','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '53','width'=>'0','length'=>'0','sleeveLength'=>'1','S'=>'1.57','M' => '','L' => '','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            
            ['idOPr' => '54','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'14.00','M' => '16.00','L' => '18.00','XL' => '20.00','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '54','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'14.00','M' => '16.00','L' => '18.00','XL' => '20.00','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            
            ['idOPr' => '55','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'25.98','M' => '35.98','L' => '','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '55','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'20.00','M' => '20.00','L' => '','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            
            ['idOPr' => '56','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'9.30','M' => '','L' => '','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '56','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'7.80','M' => '','L' => '','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '56','width'=>'0','length'=>'0','sleeveLength'=>'1','S'=>'0.20','M' => '','L' => '','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            
            ['idOPr' => '57','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'8.27','M' => '7.48','L' => '7.87','XL' => '8.66','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            
            ['idOPr' => '58','width'=>'1','length'=>'0','sleeveLength'=>'0','S'=>'7.01','M' => '','L' => '','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
            ['idOPr' => '58','width'=>'0','length'=>'1','sleeveLength'=>'0','S'=>'10.00','M' => '','L' => '','XL' => '','size2XL'=>'', 'size3XL'=>'','size4XL'=>'','size5XL'=>''],
        ]);
        \DB::table('KeyFeatures')->insert([
            ['idOPr' => '1','imageKF' => 'KF11.svg','nameKF' => 'Spacious pockets','descriptionKF' => 'Kangaroo pouch pocket will always keep your hands warm'],
            ['idOPr' => '1','imageKF' => 'KF12.svg','nameKF' => 'Drawstring hood','descriptionKF' => 'Adjustable hood with self-colored woven cord'],
            ['idOPr' => '1','imageKF' => 'KF13.svg','nameKF' => 'Without side seams','descriptionKF' => 'Knitted in one piece using a tubular knit, it reduces fabric waste and makes the garment more attractive'],
            ['idOPr' => '1','imageKF' => 'KF14.svg','nameKF' => '50% cotton, 50% polyester','descriptionKF' => 'Made from specially spun fibers that make for a very strong, smooth fabric which is perfect for printing. Polyester fibers are extremely resilient, resistant to most chemicals, stretching, and shrinking. Heather Sport colors are 40% Cotton, 60% Polyester'],
           
            ['idOPr' => '2','imageKF' => 'KF21.svg','nameKF' => '100% Polyester','descriptionKF' => 'This extremely strong and durable synthetic fabric retains its shape and dries quickly'],
            ['idOPr' => '2','imageKF' => 'KF22.svg','nameKF' => 'Moisture wicking material','descriptionKF' => 'Transfers moisture away from your skin during any physical activity and keeps you cool'],
            
            ['idOPr' => '3','imageKF' => 'KF31.svg','nameKF' => '1x1 Ribbed cuffs and bottom hem','descriptionKF' => 'Allows the sweatshirt to stretch as it s put on, afterwards going back to its original size, leaving a well-fitted garment'],
            ['idOPr' => '3','imageKF' => 'KF32.svg','nameKF' => 'Spacious pocket','descriptionKF' => 'Kangaroo pouch pocket will always keep your hands warm'],
            ['idOPr' => '3','imageKF' => 'KF32.svg','nameKF' => 'Hand-dyed','descriptionKF' => 'Each garment is hand-dyed, creating unique patterns'],
            ['idOPr' => '3','imageKF' => 'KF34.svg','nameKF' => '60% Cotton 40% Polyester','descriptionKF' => 'The fabric is soft and pleasant to touch, has a subtle luxurious feel. Made from specially spun fibers that make very strong and smooth fabric, perfect for printing'],
            
            ['idOPr' => '4','imageKF' => 'KF41.svg','nameKF' => 'With side seams','descriptionKF' => 'Located along the sides, they help hold the garment s shape longer and give it structural support'],
            ['idOPr' => '4','imageKF' => 'KF42.svg','nameKF' => 'Hood with drawstring','descriptionKF' => 'Adjustable hood with self-colored woven cord and metal grommets'],
            ['idOPr' => '4','imageKF' => 'KF43.svg','nameKF' => 'Spacious pocket','descriptionKF' => 'Kangaroo pouch pocket will always keep your hands warm'],
            ['idOPr' => '4','imageKF' => 'KF44.svg','nameKF' => 'Fiber composition','descriptionKF' => '80% Ringsoun Cotton, 30% Polyester (Solid Colors), 70% Ringspun Cotton, 30% Polyester (Smoke Colors), 75% Ringspun Cotton, 25% Polyester (Heather Grey), 52% Ringspun Cotton, 48% Polyester (Charcoal)'],
        
             
            ['idOPr' => '5','imageKF' => 'KF51.svg','nameKF' => '50% cotton, 50% polyester','descriptionKF' => 'Made from specially spun fibers that make very strong and smooth fabric. Polyester fibers are extremely strong, resistant to most chemicals, stretching and shrinking. The fabric is made with DryBlend® technology that gives moisture-wicking properties'],
            ['idOPr' => '5','imageKF' => 'KF52.svg','nameKF' => 'Hood with drawstrings','descriptionKF' => 'Adjustable hood with self-colored woven cord'],
            ['idOPr' => '5','imageKF' => 'KF53.svg','nameKF' => 'Double needle stitching on all seams','descriptionKF' => 'The garment is sewn around the finished edges with double stitching, making it long-lasting'],
            ['idOPr' => '5','imageKF' => 'KF54.svg','nameKF' => '1x1 Ribbed cuffs and bottom hem with spandex','descriptionKF' => 'Allows the sweatshirt to stretch as it s put on, afterwards going back to its original size, leaving a well-fitted garment'],
        
            ['idOPr' => '6','imageKF' => 'KF61.svg','nameKF' => '50% cotton, 50% polyester','descriptionKF' => 'Made from specially spun fibers that make very strong and smooth fabric, perfect for printing. Polyester fibers are extremely strong, resistant to most chemicals, stretching and shrinking'],
            ['idOPr' => '6','imageKF' => 'KF62.svg','nameKF' => 'Ribbed knit collar with seam','descriptionKF' => 'Ribbed knit makes the waistband and cuffs highly elastic and helps retain shape'],
            ['idOPr' => '6','imageKF' => 'KF63.svg','nameKF' => 'Overlocked seams','descriptionKF' => 'Durable coverstitching throughout the product makes the seams stronger and long-lasting'],
            ['idOPr' => '6','imageKF' => 'KF64.svg','nameKF' => 'Without side seams','descriptionKF' => 'Knit in one piece using tubular knit, it reduces fabric waste and makes the garment more attractive'],
        
         
            ['idOPr' => '7','imageKF' => 'KF71.svg','nameKF' => 'Fiber composition','descriptionKF' => 'Solid colors are 80% cotton 20% polyester (Heather Grey is 75% cotton 25% polyester; Other heather colors are 55% cotton 45% polyester)'],
            ['idOPr' => '7','imageKF' => 'KF72.svg','nameKF' => '1x1 Ribbed collar, cuffs and bottom hem','descriptionKF' => 'Allows the sweatshirt to stretch as it s put on, afterwards it goes back to its original size, leaving a well-fitted garment'],
            ['idOPr' => '7','imageKF' => 'KF73.svg','nameKF' => 'Necktape','descriptionKF' => 'Twill tape covers the neck seam to stabilize the back of the garment for a more comfortable feel and to prevent stretching'],
            ['idOPr' => '7','imageKF' => 'KF74.svg','nameKF' => 'Double needle stitching on all seams','descriptionKF' => 'The garment is sewn around the finished edges with double stitching, making it long-lasting'],
        
            ['idOPr' => '8','imageKF' => 'KF81.svg','nameKF' => 'With side seams','descriptionKF' => 'Located along the sides, they help hold the garment s shape longer and give it structural support'],
            ['idOPr' => '8','imageKF' => 'KF82.svg','nameKF' => 'Ribbed knit collar with seam, cuffs and bottom hem','descriptionKF' => 'Ribbed knit makes the collar highly elastic and helps retain its shape'],
            ['idOPr' => '8','imageKF' => 'KF83.svg','nameKF' => 'Necktape','descriptionKF' => 'Twill tape covers the neck seam to stabilize the back of the shirt for a more comfortable feel and prevent stretching'],
            ['idOPr' => '8','imageKF' => 'KF84.svg','nameKF' => 'Fiber composition','descriptionKF' => 'Solid and heather colors are 80% cotton, 20% polyester, Smoke colors are 70% cotton, 30% polyester, Heather Grey is 75% cotton, 25% polyester, Charcoal is 52% cotton, 48% polyester.'],
        
            ['idOPr' => '9','imageKF' => 'KF91.svg','nameKF' => '100% Polyesters','descriptionKF' => 'This extremely strong and durable synthetic fabric retains its shape and dries quickly'],
            ['idOPr' => '9','imageKF' => 'KF92.svg','nameKF' => 'Moisture wicking material','descriptionKF' => 'Transfers moisture away from your skin during any physical activity and keeps you cool'],
            ['idOPr' => '9','imageKF' => 'KF93.svg','nameKF' => 'Necktape','descriptionKF' => 'Self-fabric tape covers the neck seam to stabilize the back of the garment for a more comfortable feel and prevent stretching'],
            ['idOPr' => '9','imageKF' => 'KF94.svg','nameKF' => '3 Button Placket','descriptionKF' => 'Has a 3-button placket with dyed-to-match rubber buttons'],
            ['idOPr' => '9','imageKF' => 'KF95.svg','nameKF' => 'Lapel collar','descriptionKF' => 'The flat knit collar gives the shirt a stylish accent'],
            ['idOPr' => '9','imageKF' => 'KF96.svg','nameKF' => 'Double needle stitching on all seams','descriptionKF' => 'The garment is sewn around the finished edges with double stitching, making it long-lasting'],
            
            
            ['idOPr' => '10','imageKF' => 'KF101.svg','nameKF' => '100% Polyesters','descriptionKF' => 'This extremely strong and durable synthetic fabric retains its shape and dries quickly'],
            ['idOPr' => '10','imageKF' => 'KF102.svg','nameKF' => 'Moisture wicking material','descriptionKF' => 'Transfers moisture away from your skin during any physical activity and keeps you cool'],
            ['idOPr' => '10','imageKF' => 'KF103.svg','nameKF' => 'Necktape','descriptionKF' => 'Self-fabric tape covers the neck seam to stabilize the back of the garment for a more comfortable feel and prevent stretching'],
            ['idOPr' => '10','imageKF' => 'KF104.svg','nameKF' => '3 Button Placket','descriptionKF' => 'Has a 3-button placket with dyed-to-match rubber buttons'],
            ['idOPr' => '10','imageKF' => 'KF105.svg','nameKF' => 'Lapel collar','descriptionKF' => 'The flat knit collar gives the shirt a stylish accent'],
            ['idOPr' => '10','imageKF' => 'KF106.svg','nameKF' => 'Double needle stitching on all seams','descriptionKF' => 'The garment is sewn around the finished edges with double stitching, making it long-lasting'],
            
              
            ['idOPr' => '11','imageKF' => 'KF111.svg','nameKF' => '100% Polyesters','descriptionKF' => 'This extremely strong and durable synthetic fabric retains its shape and dries quickly'],
            ['idOPr' => '11','imageKF' => 'KF112.svg','nameKF' => 'Double needle sleeve and bottom hem','descriptionKF' => 'The garment is sewn around the edges with a wide double topstitch, making it long-lasting and durable'],
            ['idOPr' => '11','imageKF' => 'KF113.svg','nameKF' => 'Round neckline','descriptionKF' => 'This tank top features a round neckline for a classic look'],
        
            ['idOPr' => '12','imageKF' => 'KF121.svg','nameKF' => 'Fiber composition','descriptionKF' => 'Solid colors are 100% cotton, heather colors are 85% cotton, 15% viscose'],
            ['idOPr' => '12','imageKF' => 'KF122.svg','nameKF' => 'Raw sleeve edge','descriptionKF' => 'Ribbed knit collar with a seam'],
            ['idOPr' => '12','imageKF' => 'KF123.svg','nameKF' => 'Ribbed knit collar with a seam','descriptionKF' => 'The ribbed knit makes the collar highly elastic and helps retain its shape'],
        
        
            ['idOPr' => '13','imageKF' => 'KF131.svg','nameKF' => 'Without side seams','descriptionKF' => 'Knit in one piece using tubular knit, it reduces fabric waste and makes the garment more attractive'],
            ['idOPr' => '13','imageKF' => 'KF132.svg','nameKF' => 'Ribbed knit with seam','descriptionKF' => 'Ribbed knit makes the collar highly elastic and helps retain its shape'],
            ['idOPr' => '13','imageKF' => 'KF133.svg','nameKF' => 'Shoulder tape','descriptionKF' => 'Twill tape covers the neck seam to stabilize the back of the shirt for a more comfortable feel and prevent stretching'],
            ['idOPr' => '13','imageKF' => 'KF134.svg','nameKF' => 'Fabric','descriptionKF' => 'Made from specially spun fibers that make very durable and smooth fabric that is perfect for printing. The "Natural" color is made with unprocessed cotton, which results in small black flecks throughout the fabric'],
        
        
            ['idOPr' => '14','imageKF' => 'KF141.svg','nameKF' => 'Fiber composition','descriptionKF' => 'Solid colors are 100% cotton (Light Steel is 90% cotton, 10% polyester), heather colors are 60% cotton, 40% polyester'],
            ['idOPr' => '14','imageKF' => 'KF142.svg','nameKF' => 'Neck and shoulder tape','descriptionKF' => 'Twill tape covers the shoulder and neck seams to stabilize the back of the shirt and prevent stretching'],
            ['idOPr' => '14','imageKF' => 'KF143.svg','nameKF' => 'Without side seams','descriptionKF' => 'Knit in one piece using tubular knit, it reduces fabric waste and makes the garment more attractive'],
            ['idOPr' => '14','imageKF' => 'KF144.svg','nameKF' => 'Double needle topstitch on all seams','descriptionKF' => 'The garment is sewn around the edges with double stitching, making it durable and long lasting'],
        
            
            ['idOPr' => '15','imageKF' => 'KF151.svg','nameKF' => '85% organic combed ring spun cotton 15% recycled polyester','descriptionKF' => 'The fabric is soft and pleasant to touch, has a subtle luxurious feel. Made from specially spun fibers that make very strong and smooth fabric, perfect for printing'],
            ['idOPr' => '15','imageKF' => 'KF152.svg','nameKF' => 'Hood with drawstrings','descriptionKF' => 'Adjustable hood with self colored woven cord and metal grommets'],
            ['idOPr' => '15','imageKF' => 'KF153.svg','nameKF' => 'Twill necktape','descriptionKF' => 'Twill tape covers the neck seam to stabilize the back of the garment for a more comfortable feel and prevent stretching'],
            ['idOPr' => '15','imageKF' => 'KF154.svg','nameKF' => 'Spacious pocket','descriptionKF' => 'Kangaroo pouch pocket will always keep your hands warm'],
        
            
            ['idOPr' => '16','imageKF' => 'KF161.svg','nameKF' => '100% Polyester base','descriptionKF' => 'This extremely strong and durable synthetic fabric retains its shape and resists wind, sun and rain'],
            ['idOPr' => '16','imageKF' => 'KF162.svg','nameKF' => 'All over print','descriptionKF' => 'Print covers entire jacket'],
            ['idOPr' => '16','imageKF' => 'KF163.svg','nameKF' => 'Rib Knit','descriptionKF' => 'Twill tape covers the neck seam to stabilize the back of the shirt for a more comfortable feel and prevent stretching'],
            ['idOPr' => '16','imageKF' => 'KF164.svg','nameKF' => 'Fiber composition','descriptionKF' => 'The jacket has black 2" x 2" rib knit cuffs, collar and bottom hem'],
        
            
            ['idOPr' => '17','imageKF' => 'KF171.svg','nameKF' => 'Spacious pockets','descriptionKF' => 'Kangaroo pouch pocket will always keep your hands warm'],
            ['idOPr' => '17','imageKF' => 'KF172.svg','nameKF' => 'Drawstring hood','descriptionKF' => 'Adjustable hood with self-colored woven cord'],
            ['idOPr' => '17','imageKF' => 'KF173.svg','nameKF' => 'Without side seams','descriptionKF' => 'Knitted in one piece using a tubular knit, it reduces fabric waste and makes the garment more attractive'],
            ['idOPr' => '17','imageKF' => 'KF174.svg','nameKF' => '50% cotton, 50% polyester','descriptionKF' => 'Made from specially spun fibers that make for a very strong, smooth fabric which is perfect for printing. Polyester fibers are extremely resilient, resistant to most chemicals, stretching, and shrinking. Heather Sport colors are 40% Cotton, 60% Polyester'], 
        
            ['idOPr' => '18','imageKF' => 'KF181.svg','nameKF' => '50% cotton, 50% polyester','descriptionKF' => 'Made from specially spun fibers that make very strong and smooth fabric, perfect for printing. Polyester fibers are extremely strong, resistant to most chemicals, stretching and shrinking'],
            ['idOPr' => '18','imageKF' => 'KF182.svg','nameKF' => 'Hood with drawstrings','descriptionKF' => 'Adjustable 2-ply hood with self colored woven cord and metal grommets'],
            ['idOPr' => '18','imageKF' => 'KF183.svg','nameKF' => 'Spacious pocket','descriptionKF' => 'Spacious Kangaroo pouch pocket on the lower front section of the hoodie'],
            ['idOPr' => '18','imageKF' => 'KF184.svg','nameKF' => 'Without side seams','descriptionKF' => 'Knit in one piece using tubular knit, it reduces fabric waste and makes the garment more attractive'], 
        
           
            ['idOPr' => '19','imageKF' => 'KF191.svg','nameKF' => '50% cotton, 50% polyester','descriptionKF' => 'Made from specially spun fibers that make very strong and smooth fabric, perfect for printing. Polyester fibers are extremely strong, resistant to most chemicals, stretching and shrinking'],
            ['idOPr' => '19','imageKF' => 'KF192.svg','nameKF' => 'Ribbed knit collar with seam','descriptionKF' => 'Ribbed knit makes the waistband and cuffs highly elastic and helps retain shape'],
            ['idOPr' => '19','imageKF' => 'KF193.svg','nameKF' => 'Overlocked seams','descriptionKF' => 'Durable coverstitching throughout the product makes the seams stronger and long-lasting'],
            ['idOPr' => '19','imageKF' => 'KF194.svg','nameKF' => 'Without side seams','descriptionKF' => 'Knit in one piece using tubular knit, it reduces fabric waste and makes the garment more attractive'],
        
            ['idOPr' => '20','imageKF' => 'KF201.svg','nameKF' => 'Fiber composition','descriptionKF' => 'Solid colors are 80% cotton 20% polyester (Heather Grey is 205% cotton 25% polyester; Other heather colors are 55% cotton 45% polyester)'],
            ['idOPr' => '20','imageKF' => 'KF202.svg','nameKF' => '1x1 Ribbed collar, cuffs and bottom hem','descriptionKF' => 'Allows the sweatshirt to stretch as it s put on, afterwards it goes back to its original size, leaving a well-fitted garment'],
            ['idOPr' => '20','imageKF' => 'KF203.svg','nameKF' => 'Necktape','descriptionKF' => 'Twill tape covers the neck seam to stabilize the back of the garment for a more comfortable feel and to prevent stretching'],
            ['idOPr' => '20','imageKF' => 'KF204.svg','nameKF' => 'Double needle stitching on all seams','descriptionKF' => 'The garment is sewn around the finished edges with double stitching, making it long-lasting'],
        
        
            ['idOPr' => '21','imageKF' => 'KF211.svg','nameKF' => '10% Polyesters','descriptionKF' => 'This extremely strong and durable synthetic fabric retains its shape and dries quickly'],
            ['idOPr' => '21','imageKF' => 'KF212.svg','nameKF' => 'Moisture wicking material','descriptionKF' => 'Transfers moisture away from your skin during any physical activity and keeps you cool'],
            ['idOPr' => '21','imageKF' => 'KF213.svg','nameKF' => 'Necktape','descriptionKF' => 'Self-fabric tape covers the neck seam to stabilize the back of the garment for a more comfortable feel and prevent stretching'],
            ['idOPr' => '21','imageKF' => 'KF214.svg','nameKF' => '3 Button Placket','descriptionKF' => 'Has a 3-button placket with dyed-to-match rubber buttons'],
            ['idOPr' => '21','imageKF' => 'KF215.svg','nameKF' => 'Lapel collar','descriptionKF' => 'The flat knit collar gives the shirt a stylish accent'],
            ['idOPr' => '21','imageKF' => 'KF216.svg','nameKF' => 'Double needle stitching on all seams','descriptionKF' => 'The garment is sewn around the finished edges with double stitching, making it long-lasting'],
        
            ['idOPr' => '22','imageKF' => 'KF221.svg','nameKF' => 'Fiber composition','descriptionKF' => 'Solid and Heather colors are 65% polyester, 35% viscose (Heather Navy is 70% rayon, 30% polyester)'],
            ['idOPr' => '22','imageKF' => 'KF222.svg','nameKF' => 'Fabric','descriptionKF' => 'Polyester fibers are extremely strong, resistant to most chemicals, stretching and shrinking. Viscose adds amazing draping and softness to the shirt'],
            ['idOPr' => '22','imageKF' => 'KF223.svg','nameKF' => 'With overlock side seams','descriptionKF' => 'Located along the sides, they help hold the garment s shape longer and give it structural support'],
            ['idOPr' => '22','imageKF' => 'KF224.svg','nameKF' => 'Self fabric binding with overlock','descriptionKF' => 'Bindings are made from the same fabric as the body of the garment. Decorative overlock seam on top'],
         
            ['idOPr' => '23','imageKF' => 'KF231.svg','nameKF' => 'Fiber composition','descriptionKF' => 'Polyester fibers are extremely strong, resistant to most chemicals, stretching and shrinking. Viscose adds amazing draping and softness to the shirt'],
            ['idOPr' => '23','imageKF' => 'KF232.svg','nameKF' => 'Raw sleeve edge','descriptionKF' => 'Cut off sleeves with raw edges'],
            ['idOPr' => '23','imageKF' => 'KF233.svg','nameKF' => 'Ribbed knit collar with a seam','descriptionKF' => 'The ribbed knit makes the collar highly elastic and helps retain its shape'],
        
            ['idOPr' => '23','imageKF' => 'KF231.svg','nameKF' => 'Fiber composition','descriptionKF' => 'Solid colors are 100% cotton (Sport Gray is 90% cotton, 10% polyester)'],
            ['idOPr' => '23','imageKF' => 'KF232.svg','nameKF' => 'Double needle bottom hem','descriptionKF' => 'The bottom hem is sewn around the edges with a narrow double topstitch, making it long-lasting and durable.'],
            ['idOPr' => '23','imageKF' => 'KF233.svg','nameKF' => 'Self fabric necktape','descriptionKF' => 'Necktape covers the neck seam to stabilize the back of the garment for a more comfortable feel and prevent stretching'], 
        
        
            ['idOPr' => '24','imageKF' => 'KF241.svg','nameKF' => 'Fiber composition','descriptionKF' => 'Solid colors are 100% cotton (Sport Gray is 90% cotton, 10% polyester)'],
            ['idOPr' => '24','imageKF' => 'KF242.svg','nameKF' => 'Double needle bottom hem','descriptionKF' => 'The bottom hem is sewn around the edges with a narrow double topstitch, making it long-lasting and durable.'],
            ['idOPr' => '24','imageKF' => 'KF243.svg','nameKF' => 'Self fabric necktape','descriptionKF' => 'Necktape covers the neck seam to stabilize the back of the garment for a more comfortable feel and prevent stretching'], 
        
            ['idOPr' => '25','imageKF' => 'KF251.svg','nameKF' => 'With side seams','descriptionKF' => 'Located along the sides, they help hold the garment s shape longer and give it structural support'],
            ['idOPr' => '25','imageKF' => 'KF252.svg','nameKF' => 'Ribbed knit collar with seam, cuffs and bottom hem','descriptionKF' => 'Ribbed knit makes the collar highly elastic and helps retain its shape'],
            ['idOPr' => '25','imageKF' => 'KF253.svg','nameKF' => 'Shoulder tape','descriptionKF' => 'Twill tape covers the shoulder seams to stabilize the back of the garment and prevent stretching'],
            ['idOPr' => '25','imageKF' => 'KF254.svg','nameKF' => 'Fiber composition','descriptionKF' => 'Solid colors are 100% cotton; heather colors are 52% cotton, 48% polyester; Athletic Heather is 90% cotton, 10% polyester. Triblend colors are 50% cotton, 25% polyester, and 25% rayon.'],
        
            
            ['idOPr' => '26','imageKF' => 'KF261.svg','nameKF' => '100% Combed ring-spun cotton','descriptionKF' => 'Made from specially spun fibers that make very strong and smooth fabric, perfect for printing'],
            ['idOPr' => '26','imageKF' => 'KF262.svg','nameKF' => 'With side seams','descriptionKF' => 'Placed along the sides of a garment, they hold the shirt s shape longer and lend it structural support.'],
            ['idOPr' => '26','imageKF' => 'KF263.svg','nameKF' => 'Double needle sleeve and bottom hem','descriptionKF' => 'The garment is sewn around the edges with double stitching, making it long-lasting and durable'],
            ['idOPr' => '26','imageKF' => 'KF264.svg','nameKF' => 'Shoulder tape','descriptionKF' => 'Twill tape covers the shoulder seams to stabilize the back of the garment and prevent stretching'],
        
            ['idOPr' => '27','imageKF' => 'KF271.svg','nameKF' => 'Ribbed knit collar with a seam','descriptionKF' => 'The ribbed knit makes the collar highly elastic and helps retain its shape'],
            ['idOPr' => '27','imageKF' => 'KF272.svg','nameKF' => 'Shoulder tape','descriptionKF' => 'Twill tape covers the shoulder seams to stabilize the back of the garment and prevent stretching'],
            ['idOPr' => '27','imageKF' => 'KF273.svg','nameKF' => 'Fiber composition','descriptionKF' => 'Solid colors are 100% cotton; heather colors are 52% cotton, 48% polyester; Athletic Heather is 90% cotton, 10% polyester. Triblend colors are 50% cotton, 25% polyester, and 25% rayon.'],
            ['idOPr' => '27','imageKF' => 'KF274.svg','nameKF' => 'Double needle sleeve and bottom hem','descriptionKF' => 'The garment is sewn around the edges with double stitching, making it long-lasting and durable'],
            ['idOPr' => '27','imageKF' => 'KF275.svg','nameKF' => 'With side seams','descriptionKF' => 'Placed along the sides of a garment, they hold the shirt s shape longer and lend it structural support.'],
            
            ['idOPr' => '28','imageKF' => 'KF281.svg','nameKF' => 'With side seams','descriptionKF' => 'Placed along the sides of a garment, they hold the shirt s shape longer and lend it structural support.'],
            ['idOPr' => '28','imageKF' => 'KF282.svg','nameKF' => 'Ribbed knit collar with seam','descriptionKF' => 'Ribbed knit makes the waistband and cuffs highly elastic and helps retain shape'],
            ['idOPr' => '28','imageKF' => 'KF283.svg','nameKF' => 'Shoulder tape','descriptionKF' => 'Twill tape covers the neck seam to stabilize the back of the shirt for a more comfortable feel and prevent stretching'],
        
            ['idOPr' => '28','imageKF' => 'KF281.svg','nameKF' => 'With side seams','descriptionKF' => 'Placed along the sides of a garment, they hold the shirt s shape longer and lend it structural support.'],
            ['idOPr' => '28','imageKF' => 'KF282.svg','nameKF' => 'Ribbed knit collar with seam','descriptionKF' => 'Ribbed knit makes the waistband and cuffs highly elastic and helps retain shape'],
            ['idOPr' => '28','imageKF' => 'KF283.svg','nameKF' => 'Shoulder tape','descriptionKF' => 'Twill tape covers the neck seam to stabilize the back of the shirt for a more comfortable feel and prevent stretching'],
        
            ['idOPr' => '29','imageKF' => 'KF291.svg','nameKF' => 'Double-needle stitched','descriptionKF' => 'The garment is sewn around the edges with a wide double topstitch, making it long-lasting and durable'],
            ['idOPr' => '29','imageKF' => 'KF292.svg','nameKF' => '100% cotton','descriptionKF' => 'Made from specially spun fibers that make very strong and smooth fabric, perfect for printing'],
            ['idOPr' => '29','imageKF' => 'KF293.svg','nameKF' => 'Ribbed collar','descriptionKF' => 'Allows the shirt to stretch as it is put on, afterwards the collar goes back to its original size, leaving a well-fitted tee.'],
        
            ['idOPr' => '30','imageKF' => 'KF301.svg','nameKF' => 'With side seams','descriptionKF' => 'Located along the sides, they help hold the garment s shape longer and give it structural support'],
            ['idOPr' => '30','imageKF' => 'KF302.svg','nameKF' => 'Hood with drawstring','descriptionKF' => 'Adjustable hood with self-colored woven cord and metal grommets'],
            ['idOPr' => '30','imageKF' => 'KF303.svg','nameKF' => 'Spacious pocket','descriptionKF' => 'Kangaroo pouch pocket will always keep your hands warm'],
            ['idOPr' => '30','imageKF' => 'KF304.svg','nameKF' => 'Zipper with metal head','descriptionKF' => 'Long-lasting qualitative tone-on-tone coil zipper with metal slider and puller'],
        
            ['idOPr' => '31','imageKF' => 'KF311.svg','nameKF' => 'Fiber composition','descriptionKF' => 'Solid colors are 100% cotton, heather colors are 52% cotton, 48% polyester (Athletic Heather is 90% cotton, 10% polyester)'],
            ['idOPr' => '31','imageKF' => 'KF312.svg','nameKF' => 'Side seams','descriptionKF' => 'Side seams form the structure and shape of the garment'],
        
            ['idOPr' => '32','imageKF' => 'KF321.svg','nameKF' => '100% Polyester','descriptionKF' => 'This extremely strong and durable synthetic fabric retains its shape and dries quickly'],
            ['idOPr' => '32','imageKF' => 'KF322.svg','nameKF' => '1x1 Ribbed collar and armholes','descriptionKF' => 'Allows the shirt to stretch as it s put on, afterwards the collar and armholes go back to their original size, leaving a well-fitted top'],
            ['idOPr' => '32','imageKF' => 'KF323.svg','nameKF' => 'Vibrant colors','descriptionKF' => 'The latest printing techniques provide bright and crisp colors matching your craziest designs'],
            ['idOPr' => '32','imageKF' => 'KF324.svg','nameKF' => 'Moisture wicking material','descriptionKF' => 'Transfers moisture away from your skin during any physical activity and keeps you cool'],
        
            ['idOPr' => '33','imageKF' => 'KF331.svg','nameKF' => 'Fiber composition', 'descriptionKF' => 'Solid colors are 100% cotton (Heather colors are 90% cotton 10% polyester, CVC (Vintage) colors are 60% cotton 40% polyester)'],
            ['idOPr' => '33','imageKF' => 'KF332.svg','nameKF' => 'With side seams','descriptionKF' => 'Side seams form the structure and shape of the garment'],
            ['idOPr' => '33','imageKF' => 'KF333.svg','nameKF' => 'Ribbed collar and cuffs','descriptionKF' => 'Provides clean garment lines and prevents stretching.'],
            ['idOPr' => '33','imageKF' => 'KF334.svg','nameKF' => 'Neck and shoulder tape','descriptionKF' => 'The self-fabric tape covers the shoulder and neck seams to stabilize the back of the shirt and prevents stretching.'],
        
            ['idOPr' => '34','imageKF' => 'KF341.svg','nameKF' => '100% Polyester','descriptionKF' => 'This extremely strong and durable synthetic fabric retains its shape and dries quickly'],
            ['idOPr' => '34','imageKF' => 'KF342.svg','nameKF' => 'Moisture wicking material','descriptionKF' => 'Transfers moisture away from your skin during any physical activity and keeps you cool'],
            ['idOPr' => '34','imageKF' => 'KF343.svg','nameKF' => 'Direct-to-Film (DTF) print','descriptionKF' => 'The design is printed on a special film and then transferred to the garment'],
        
            ['idOPr' => '35','imageKF' => 'KF351.svg','nameKF' => '60% Combed ring-spun cotton, 40% Polyester','descriptionKF' => 'The fabric is soft and pleasant to the touch, with a subtle, luxurious feel. Made from spun fibers that make a very strong and smooth fabric'],
            ['idOPr' => '35','imageKF' => 'KF352.svg','nameKF' => 'Ribbed-knit cuffs and waistband','descriptionKF' => 'The ribbed-knit cuffs and waistband provide high elasticity while helping the garment retain its shape'],
            ['idOPr' => '35','imageKF' => 'KF353.svg','nameKF' => 'Side-seam construction with pockets','descriptionKF' => 'Side seams form the structure and shape of the garment with convenient pockets on both sides'],
            ['idOPr' => '35','imageKF' => 'KF354.svg','nameKF' => 'Coverstitched shoulders and armholes','descriptionKF' => 'Coverstitched shoulders and armholes help the seams stay strong and retain garments shape'],
        
            ['idOPr' => '36','imageKF' => 'KF361.svg','nameKF' => 'Twill necktape','descriptionKF' => 'Twill tape covers the neck seam to stabilize the back of the shirt for a more comfortable feel and prevent stretching'],
            ['idOPr' => '36','imageKF' => 'KF362.svg','nameKF' => 'Spacious pocket','descriptionKF' => 'Kangaroo pouch pocket will always keep your hands warm'],
            ['idOPr' => '36','imageKF' => 'KF363.svg','nameKF' => '50% cotton, 50% polyester','descriptionKF' => 'Made from specially spun fibers that make very strong and smooth fabric, perfect for printing. Polyester fibers are extremely strong, resistant to most chemicals, stretching and shrinking. Heather colors: 40% cotton, 60% polyester'],
        
            ['idOPr' => '37','imageKF' => 'KF371.svg','nameKF' => '50% Cotton 50% Polyester','descriptionKF' => 'Made by specially spinned fibers that make very strong and smooth fabric, perfect for printing. Polyester fibers are extremely strong, resistant to most chemicals, stretching and shrinking'],
            ['idOPr' => '37','imageKF' => 'KF372.svg','nameKF' => 'Without side seams','descriptionKF' => 'Knitted in one piece using tubular knit, it reduces fabric waste and makes garment more attractive'],
            ['idOPr' => '37','imageKF' => 'KF373.svg','nameKF' => 'Ribbed knit collar with seam','descriptionKF' => 'Ribbed knit makes collar highly elastic and helps retain its shape'],
        
            ['idOPr' => '38','imageKF' => 'KF381.svg','nameKF' => 'Ribbed knit binding','descriptionKF' => 'Binding is made from rib knit adding softness and freedom of movement'],
            ['idOPr' => '38','imageKF' => 'KF382.svg','nameKF' => 'Fiber composition','descriptionKF' => 'Solid colors are 100% cotton, heather colors are 60% cotton, 40% polyester (Heather (grey) is 90% cotton, 10% polyester)'],
            ['idOPr' => '38','imageKF' => 'KF383.svg','nameKF' => 'With 3 snaps','descriptionKF' => 'Matching plastic snaps at the cross closure'],
        
            ['idOPr' => '39','imageKF' => 'KF391.svg','nameKF' => 'Double-needle ribbed binding','descriptionKF' => 'Binding on neck, shoulders, sleeves and leg openings provides clean garment lines and prevents stretching'],
            ['idOPr' => '39','imageKF' => 'KF392.svg','nameKF' => 'Lap Shoulder','descriptionKF' => 'Provides easy dressing experience'],
            ['idOPr' => '39','imageKF' => 'KF393.svg','nameKF' => 'Fiber composition','descriptionKF' => 'Solid colors are made of 100% combed ringspun cotton (heather colors are 10% polyester)'],
            ['idOPr' => '39','imageKF' => 'KF394.svg','nameKF' => 'Side seams','descriptionKF' => 'Side seams form the structure and shape of the garment'],
            ['idOPr' => '39','imageKF' => 'KF395.svg','nameKF' => 'Rib Knit','descriptionKF' => 'The 1x1 rib knit makes the fabric highly elastic and helps retain its shape'],
            ['idOPr' => '39','imageKF' => 'KF396.svg','nameKF' => 'Innovative three-snap closure','descriptionKF' => 'Snap tapes result in a soft, smooth closure'],
        
            ['idOPr' => '40','imageKF' => 'KF401.svg','nameKF' => 'Microwave-safe','descriptionKF' => 'Mug can be placed in the microwave for food or liquid heating'],
            ['idOPr' => '40','imageKF' => 'KF402.svg','nameKF' => 'Dishwasher-safe','descriptionKF' => 'Suitable for dishwasher use'],
            ['idOPr' => '40','imageKF' => 'KF403.svg','nameKF' => 'Glossy ceramic','descriptionKF' => 'The mug is made from black ceramic and has a glossy finish'],
            ['idOPr' => '40','imageKF' => 'KF404.svg','nameKF' => 'Vibrant colors','descriptionKF' => 'The latest printing techniques provide bright and crisp colors matching your craziest designs'],
        
            ['idOPr' => '41','imageKF' => 'KF411.svg','nameKF' => 'Vibrant colors','descriptionKF' => 'The latest printing techniques provide bright and crisp colors matching your craziest designs'],
            ['idOPr' => '41','imageKF' => 'KF412.svg','nameKF' => 'Microwave-safe','descriptionKF' => 'Mug can be safely placed in microwave for food or liquid heating'],
            ['idOPr' => '41','imageKF' => 'KF413.svg','nameKF' => 'Dishwasher-safe','descriptionKF' => 'Suitable for dishwasher use'],
            ['idOPr' => '41','imageKF' => 'KF414.svg','nameKF' => 'ORCA coating','descriptionKF' => 'Rigorously tested ORCA coating ensures a brighter color transfer and a harder coating quality. An ORCA logo is printed on the bottom of the mug'],
        
            ['idOPr' => '42','imageKF' => 'KF421.svg','nameKF' => 'Stainless Steel with enamel finish','descriptionKF' =>'Resistant to rust, staining and corrosion'],
            ['idOPr' => '42','imageKF' => 'KF422.svg','nameKF' => 'Vibrant colors','descriptionKF' => 'The latest printing techniques provide bright and crisp colors matching your craziest designs'],
        
            ['idOPr' => '43','imageKF' => 'KF431.svg','nameKF' => 'Microwave-safe','descriptionKF' => 'Mug can be safely placed in a microwave for food or liquid heating'],
            ['idOPr' => '43','imageKF' => 'KF432.svg','nameKF' => 'Dishwasher-safe','descriptionKF' => 'Suitable for dishwasher use'],
        
            ['idOPr' => '44','imageKF' => 'KF441.svg','nameKF' => 'Overlocked seams','descriptionKF' => 'The product is sewn with an overlock, making the seams strong and long-lasting'],
            ['idOPr' => '44','imageKF' => 'KF442.svg','nameKF' => 'Lightweight','descriptionKF' => 'Apron is lightweight, which makes the product even more comfortable to move around in'],
            ['idOPr' => '44','imageKF' => 'KF443.svg','nameKF' => '100% polyester canvas','descriptionKF' => 'Fine weave texture fabric and foamed lining makes wearing super soft'],
            ['idOPr' => '44','imageKF' => 'KF444.svg','nameKF' => 'Tie back closure','descriptionKF' => 'This product has a tie back closure'],
        
            ['idOPr' => '45','imageKF' => 'KF451.svg','nameKF' => '100% Cotton','descriptionKF' => 'Made by specially spinned fibers that make very strong and smooth fabric, perfect for printing'],
            ['idOPr' => '45','imageKF' => 'KF452.svg','nameKF' => 'Durability','descriptionKF' => 'A fused hard buckram sewn into the front crown provides structure and an original, flexible shape'],
            ['idOPr' => '45','imageKF' => 'KF453.svg','nameKF' => 'Reinforced Stitching','descriptionKF' => 'All inside seams are covered with a cotton ribbon for added durability'],
        
            ['idOPr' => '46','imageKF' => 'KF461.svg','nameKF' => 'Adjustable strap closure','descriptionKF' => 'The cap features an adjustable plastic strap closure that adjusts from 20” to 24” for the perfect fit'],
            ['idOPr' => '46','imageKF' => 'KF462.svg','nameKF' => 'Four color combinations','descriptionKF' => 'Choose between four different multicolor options for your style preferences - Black, Green, Pink, and Red/Blue'],
            ['idOPr' => '46','imageKF' => 'KF463.svg','nameKF' => 'Vibrant colors','descriptionKF' => 'The caps are professionally printed with sharp and vivid designs that resist fading.'],
            ['idOPr' => '46','imageKF' => 'KF464.svg','nameKF' => 'Color-matched features','descriptionKF' => 'The caps are dyed to match the fabric undervisor, sweatband, braid and the plastic closure'],
        
            ['idOPr' => '47','imageKF' => 'KF471.svg','nameKF' => 'Overlocked seams','descriptionKF' => 'The product is sewn with an overlock, making the seams strong and long-lasting'],
            ['idOPr' => '47','imageKF' => 'KF472.svg','nameKF' => 'Lightweight','descriptionKF' => 'Apron is lightweight, which makes the product even more comfortable to move around in'],
            ['idOPr' => '47','imageKF' => 'KF473.svg','nameKF' => '100% polyester canvas','descriptionKF' => 'Fine weave texture fabric and foamed lining makes wearing super soft'],
            ['idOPr' => '47','imageKF' => 'KF474.svg','nameKF' => 'Tie back closure','descriptionKF' => 'This product has a tie back closure'],
        
            ['idOPr' => '48','imageKF' => 'KF481.svg','nameKF' => '100% polyester','descriptionKF' => 'This strong and durable synthetic fabric retains its shape and dries quickly'],
            ['idOPr' => '48','imageKF' => 'KF482.svg','nameKF' => 'All over print','descriptionKF' => 'Print entirely covers one side of the fabric'],
            ['idOPr' => '48','imageKF' => 'KF483.svg','nameKF' => 'Hemmed edges','descriptionKF' => 'The product is sewn around the edges, making it durable and long-lasting'],
        
            ['idOPr' => '49','imageKF' => 'KF491.svg','nameKF' => 'Cotton web handles','descriptionKF' => 'Durable and comfortable to carry, can be carried by hand or over the shoulder'],
            ['idOPr' => '49','imageKF' => 'KF492.svg','nameKF' => 'Flat corners', 'descriptionKF' => 'The front and back sides are sewn together without any extra space inside'],
            ['idOPr' => '49','imageKF' => 'KF493.svg','nameKF' => 'Reinforced stitching on handles','descriptionKF' => 'A second row of stitching to make a seam stronger'],
            ['idOPr' => '49','imageKF' => 'KF494.svg','nameKF' => '100% Cotton','descriptionKF' => 'Made with specially spun fibers for a fabric that is highly durable, smooth, and perfect for printing'],
        
            ['idOPr' => '50','imageKF' => 'KF501.svg','nameKF' => 'Reinforced stitching on handles.','descriptionKF' => 'A second row of stitching to make the seam stronger.'],
            ['idOPr' => '50','imageKF' => 'KF502.svg','nameKF' => '95% polyester, 5% cottons', 'descriptionKF' => 'Lightweight polyester with cotton material combination makes the product extremely durable and makes it retain its shape '],
            ['idOPr' => '50','imageKF' => 'KF503.svg','nameKF' => 'Long handles','descriptionKF' => 'Due to the long handles, it s comfortable to carry this product on your shoulder'],
            ['idOPr' => '50','imageKF' => 'KF504.svg','nameKF' => 'Spacious interior','descriptionKF' => 'It has one large main compartment to fit all you need'],
        
        
            ['idOPr' => '51','imageKF' => 'KF511.svg','nameKF' => 'Vibrant colors','descriptionKF' => 'The latest printing techniques provide bright and crisp colors matching your craziest designs'],
            ['idOPr' => '51','imageKF' => 'KF512.svg','nameKF' => 'Spacious interior','descriptionKF' =>'The bag includes one large main compartment for all your needs '],
            ['idOPr' => '51','imageKF' => 'KF513.svg','nameKF' => 'Magnetic button closure','descriptionKF' => 'The bag comes with a magnetic button closure'],
            ['idOPr' => '51','imageKF' => 'KF514.svg','nameKF' => 'Carrying handles','descriptionKF' => 'The durable and soft handles make the lunch bag easy to carry everywhere you go'],
        
        
            ['idOPr' => '52','imageKF' => 'KF521.svg','nameKF' => 'ORCA coating','descriptionKF' => 'Rigorously tested ORCA coating ensures a brighter color transfer and a harder coating quality. An ORCA logo is engraved on the bottom of the bottle'],
            ['idOPr' => '52','imageKF' => 'KF522.svg','nameKF' => 'Loop handle lid','descriptionKF' =>'The leak-proof handle lid of the bottle is designed for comfortable carrying and everyday use'],
            ['idOPr' => '52','imageKF' => 'KF523.svg','nameKF' => 'Vibrant colors','descriptionKF' => 'The latest printing techniques provide bright and crisp colors matching your craziest designs'],
            ['idOPr' => '52','imageKF' => 'KF524.svg','nameKF' => 'Flip-top spout','descriptionKF' => 'This stylish 20 oz coated stainless steel water bottle comes with a flip-top spout and a straw for easy sipping'],
        
            ['idOPr' => '53','imageKF' => 'KF531.svg','nameKF' => 'Stainless Steel','descriptionKF' => 'Resistant to rust, staining and corrosion'],
            ['idOPr' => '53','imageKF' => 'KF532.svg','nameKF' => 'Leak-proof','descriptionKF' => 'Perfect for everyday use'],
        
            ['idOPr' => '54','imageKF' => 'KF541.svg','nameKF' => '100% Spun polyester','descriptionKF' =>'Made from spun polyester threads, it retains its shape, doesn t wrinkle, and doesn t require ironing'],
            ['idOPr' => '54','imageKF' => 'KF542.svg','nameKF' => 'Beige plastic zipper with metal head','descriptionKF' => 'The beige zipper will look great together with your design'],
            ['idOPr' => '54','imageKF' => 'KF543.svg','nameKF' => '100% Polyester pillow','descriptionKF' => 'Goes inside the cover and is made from recycled polyester'],
        
            ['idOPr' => '55','imageKF' => 'KF551.svg','nameKF' => 'Two sizes','descriptionKF' => 'You can choose between two sizes at 26" x 20" (66cm x 50.8cm) and 36" x 20" (91.4cm x 50.8cm)'],
            ['idOPr' => '55','imageKF' => 'KF552.svg','nameKF' => 'Microfiber fabric','descriptionKF' =>'The pillow shams are made from a soft-to-touch microfiber fabric'],
            ['idOPr' => '55','imageKF' => 'KF553.svg','nameKF' => 'Envelope closure','descriptionKF' => 'They with an envelope closure on back for easy pillow insert'],
            ['idOPr' => '55','imageKF' => 'KF554.svg','nameKF' => 'Vibrant colors','descriptionKF' => 'The latest printing techniques provide bright and crisp colors matching your craziest designs'],
        
            ['idOPr' => '56','imageKF' => 'KF561.svg','nameKF' => 'Vibrant colors','descriptionKF' => 'The latest printing techniques provide bright and crisp colors matching your craziest designs'],
            ['idOPr' => '56','imageKF' => 'KF562.svg','nameKF' => 'Rubber base','descriptionKF' =>'The non-slip rubber base keeps the mouse pad firmly gripped to the desk providing smooth and even surface'],
            ['idOPr' => '56','imageKF' => 'KF563.svg','nameKF' => 'Optical-friendly','descriptionKF' => 'The mouse pad is optical-friendly for improved mouse tracking'],
            ['idOPr' => '56','imageKF' => 'KF564.svg','nameKF' => 'Rectangular shapes','descriptionKF' => 'This custom mouse pad comes in a rectangular shape and in one size: 9.3" × 7.8"'],
        
            ['idOPr' => '57','imageKF' => 'KF571.svg','nameKF' => '100% Polyester','descriptionKF' =>'This extremely strong and durable synthetic fabric retains its shape and dries quickly'],
            ['idOPr' => '57','imageKF' => 'KF572.svg','nameKF' => '4 different animals','descriptionKF' => 'Choose from 4 different animals - Teddy Bear, Sheep, Bunny and Elephant'],
            ['idOPr' => '57','imageKF' => 'KF573.svg','nameKF' => 'Removable t-shirt','descriptionKF' => 'The t-shirt can be removed at any time and washed separately'],
        
            ['idOPr' => '58','imageKF' => 'KF581.svg','nameKF' => 'Teddy Bear','descriptionKF' =>'The Teddy Bear has soft light brown fur, round black eyes, stitched paws, a nose, and a smile. Comes with a black bow tie and a white t-shirt that is ready for custom decoration on the front. The bear is seated with outstretched arms'],
            ['idOPr' => '58','imageKF' => 'KF582.svg','nameKF' => 'Vibrant prints','descriptionKF' => 'The latest printing techniques provide bright and crisp colors matching your craziest designs'],
            ['idOPr' => '58','imageKF' => 'KF583.svg','nameKF' => 'Removable t-shirt','descriptionKF' => 'The t-shirt can be removed at any time and hand-washed separately'],
        
        
        ]);
        \DB::table('DetailProvider')->insert([
            ['idOPr' => '1','idProvider'=>'9','priceOPr' => '23.70','shippingCost' => '7.99','productTime' => '1.0','printAreaOPr' => 'Front side'],
            ['idOPr' => '1','idProvider'=>'8','priceOPr' => '24.73','shippingCost' => '9.59','productTime' => '2.8','printAreaOPr' => 'Front side'],    
            ['idOPr' => '1','idProvider'=>'2','priceOPr' => '24.69','shippingCost' => '9.99','productTime' => '1.6','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '1','idProvider'=>'3','priceOPr' => '22.10','shippingCost' => '9.99','productTime' => '1.1','printAreaOPr' => 'Front side, Back side'],  
            ['idOPr' => '1','idProvider'=>'4','priceOPr' => '22.16','shippingCost' => '8.49','productTime' => '1.5','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '1','idProvider'=>'5','priceOPr' => '22.85','shippingCost' => '8.49','productTime' => '1.4','printAreaOPr' => 'Front side, Back side'],    
            ['idOPr' => '1','idProvider'=>'13','priceOPr' => '28.82','shippingCost' => '9.59','productTime' => '2.0','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '1','idProvider'=>'12','priceOPr' => '19.07','shippingCost' => '11.59','productTime' => '2.9','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '1','idProvider'=>'1','priceOPr' => '21.28','shippingCost' => '4.99','productTime' => '1.8','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '1','idProvider'=>'7','priceOPr' => '24.45','shippingCost' => '9.99','productTime' => '2.5','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '1','idProvider'=>'10','priceOPr' => '20.30','shippingCost' => '10.09','productTime' => '1.3','printAreaOPr' => 'Front side, Back side'],  
            ['idOPr' => '1','idProvider'=>'6','priceOPr' => '22.13','shippingCost' => '5.99','productTime' => '2.0','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '1','idProvider'=>'11','priceOPr' => '22.51','shippingCost' => '4.99','productTime' => '2.1','printAreaOPr' => 'Front side, Back side'],

            ['idOPr' => '2','idProvider'=>'2','priceOPr' => '38.81','shippingCost' => '5.79','productTime' => '3.7','printAreaOPr' => 'All over print'],
            
            ['idOPr' => '3','idProvider'=>'2','priceOPr' => '44.93','shippingCost' => '9.99','productTime' => '1.7','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '4','idProvider'=>'2','priceOPr' => '23.25','shippingCost' => '8.49','productTime' => '1.5','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '4','idProvider'=>'1','priceOPr' => '19.55','shippingCost' => '4.99','productTime' => '1.6','printAreaOPr' => 'Front side, Back side'],   
            ['idOPr' => '4','idProvider'=>'10','priceOPr' => '22.52','shippingCost' => '6.59','productTime' => '1.2','printAreaOPr' => 'Front side, Back side'],   
            ['idOPr' => '4', 'idProvider'=>'6','priceOPr' => '22.58','shippingCost' => '5.99','productTime' => '2.3','printAreaOPr' => 'Front side, Back side'],   
            ['idOPr' => '4','idProvider'=>'11','priceOPr' => '22.75','shippingCost' => '4.99','productTime' => '2.0','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '5','idProvider'=>'2','priceOPr' => '36.00','shippingCost' => '8.49','productTime' => '1.4','printAreaOPr' => 'Front side, Back side'],

            ['idOPr' => '6','idProvider'=>'2','priceOPr' => '36.63','shippingCost' => '9.99','productTime' => '2.5','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '6','idProvider'=>'3','priceOPr' => '31.34','shippingCost' => '9.99','productTime' => '1.4','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '7','idProvider'=>'2','priceOPr' => '28.36','shippingCost' => '9.99','productTime' => '1.3','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '8','idProvider'=>'2','priceOPr' => '17.75','shippingCost' => '8.49','productTime' => '1.5','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '8','idProvider'=>'1','priceOPr' => '16.52','shippingCost' => '4.99','productTime' => '1.8','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '8','idProvider'=>'15','priceOPr' => '18.12','shippingCost' => '6.59','productTime' => '1.2','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '8','idProvider'=>'10','priceOPr' => '18.12','shippingCost' => '6.59','productTime' => '1.2','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '8','idProvider'=>'6','priceOPr' => '18.12','shippingCost' => '6.59','productTime' => '1.2','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '9','idProvider'=>'2','priceOPr' => '27.24','shippingCost' => '5.19','productTime' => '2.9','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '10','idProvider'=>'2','priceOPr' => '27.24','shippingCost' => '5.19','productTime' => '2.9','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '11','idProvider'=>'2','priceOPr' => '5.09','shippingCost' => '5.19','productTime' => '3.3','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '12','idProvider'=>'8','priceOPr' => '16.01','shippingCost' => '6.09','productTime' => '2.0','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '13','idProvider'=>'9','priceOPr' => '11.8','shippingCost' => '6.79','productTime' => '1.0','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '13','idProvider'=>'8','priceOPr' => '7.38','shippingCost' => '6.39','productTime' => '2.5','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '13','idProvider'=>'2','priceOPr' => '11.25','shippingCost' => '5.19','productTime' => '1.6','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '13','idProvider'=>'3','priceOPr' => '10.79','shippingCost' => '5.19','productTime' => '1.0','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '13','idProvider'=>'4','priceOPr' => '4.75','shippingCost' => '5.19','productTime' => '1.1','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '13','idProvider'=>'5','priceOPr' => '11.30','shippingCost' => '4.75','productTime' => '1.4','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '13','idProvider'=>'7','priceOPr' => '9.59','shippingCost' => '4.75','productTime' => '1.4','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '13','idProvider'=>'13','priceOPr' => '10.71','shippingCost' => '6.09','productTime' => '1.7','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '13','idProvider'=>'1','priceOPr' => '7.30','shippingCost' => '3.09','productTime' => '2.0','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '13','idProvider'=>'10','priceOPr' => '7.81','shippingCost' => '4.99','productTime' => '1.2','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '13','idProvider'=>'12','priceOPr' => '9.16','shippingCost' => '6.59','productTime' => '1.1','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '13','idProvider'=>'6','priceOPr' => '7.26','shippingCost' => '3.99','productTime' => '2.0','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '13','idProvider'=>'11','priceOPr' => '7.85','shippingCost' => '4.75','productTime' => '1.4','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '14','idProvider'=>'2','priceOPr' => '18.30','shippingCost' => '5.19','productTime' => '2.4','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '14','idProvider'=>'3','priceOPr' => '19.40','shippingCost' => '5.19','productTime' => '1.3','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '15','idProvider'=>'1','priceOPr' => '42.92','shippingCost' => '4.99','productTime' => '1.6','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '16','idProvider'=>'2','priceOPr' => '27.24','shippingCost' => '5.19','productTime' => '2.9','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '17','idProvider'=>'9','priceOPr' => '23.70','shippingCost' => '7.99','productTime' => '1.0','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '17','idProvider'=>'8','priceOPr' => '24.73','shippingCost' => '5.95','productTime' => '2.8','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '17','idProvider'=>'2','priceOPr' => '24.69','shippingCost' => '9.99','productTime' => '1.6','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '17','idProvider'=>'3','priceOPr' => '22.10','shippingCost' => '9.99','productTime' => '1.1','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '17','idProvider'=>'4','priceOPr' => '21.87','shippingCost' => '8.49','productTime' => '1.0','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '17','idProvider'=>'5','priceOPr' => '22.16','shippingCost' => '8.49','productTime' => '1.5','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '17','idProvider'=>'7','priceOPr' => '22.85','shippingCost' => '8.49','productTime' => '1.4','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '17','idProvider'=>'13','priceOPr' => '28.82','shippingCost' => '5.59','productTime' => '2.0','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '17','idProvider'=>'12','priceOPr' => '11.59','shippingCost' => '7.99','productTime' => '2.9','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '17','idProvider'=>'10','priceOPr' => '21.67','shippingCost' => '6.59','productTime' => '1.2','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '17','idProvider'=>'14','priceOPr' => '22.13','shippingCost' => '5.99','productTime' => '2.0','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '17','idProvider'=>'1','priceOPr' => '22.51','shippingCost' => '4.99','productTime' => '2.1','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '18','idProvider'=>'2','priceOPr' => '36.36','shippingCost' => '9.99','productTime' => '2.6','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '18','idProvider'=>'9','priceOPr' => '34.99','shippingCost' => '10.09','productTime' => '1.2','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '18','idProvider'=>'3','priceOPr' => '39.55','shippingCost' => '9.99','productTime' => '1.3','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '19','idProvider'=>'2','priceOPr' => '30.63','shippingCost' => '9.99','productTime' => '2.5','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '19','idProvider'=>'3','priceOPr' => '31.34','shippingCost' => '9.99','productTime' => '1.4','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '20','idProvider'=>'2','priceOPr' => '28.36','shippingCost' => '9.99','productTime' => '1.3','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '21','idProvider'=>'2','priceOPr' => '26.64','shippingCost' => '4.75','productTime' => '1.9','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '22','idProvider'=>'3','priceOPr' => '19.34','shippingCost' => '5.19','productTime' => '1.5','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '22','idProvider'=>'4','priceOPr' => '15.48','shippingCost' => '4.75','productTime' => '1.8','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '23','idProvider'=>'8','priceOPr' => '16.01','shippingCost' => '6.09','productTime' => '2.0','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '24','idProvider'=>'10','priceOPr' => '9.58','shippingCost' => '4.99','productTime' => '1.3','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '25','idProvider'=>'9','priceOPr' => '17.94','shippingCost' => '6.79','productTime' => '1.0','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '25','idProvider'=>'2','priceOPr' => '18.46','shippingCost' => '5.19','productTime' => '2.7','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '25','idProvider'=>'12','priceOPr' => '20.31','shippingCost' => '6.59','productTime' => '1.1','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '25','idProvider'=>'3','priceOPr' => '15.03','shippingCost' => '4.75','productTime' => '1.5','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '26','idProvider'=>'2','priceOPr' => '17.07','shippingCost' => '5.19','productTime' => '2.4','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '27','idProvider'=>'2','priceOPr' => '12.25','shippingCost' => '5.19','productTime' => '2.5','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '27','idProvider'=>'3','priceOPr' => '10.28','shippingCost' => '4.75','productTime' => '1.1','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '27','idProvider'=>'4','priceOPr' => '13.21','shippingCost' => '4.75','productTime' => '1.6','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '27','idProvider'=>'5','priceOPr' => '8.15','shippingCost' => '4.75','productTime' => '1.2','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '27','idProvider'=>'10','priceOPr' => '8.67','shippingCost' => '4.99','productTime' => '1.2','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '27','idProvider'=>'12','priceOPr' => '10.04','shippingCost' => '6.59','productTime' => '1.1','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '28','idProvider'=>'9','priceOPr' => '15.04','shippingCost' => '6.79','productTime' => '1.2','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '28','idProvider'=>'2','priceOPr' => '14.43','shippingCost' => '5.19','productTime' => '1.0','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '28','idProvider'=>'3','priceOPr' => '13.66','shippingCost' => '4.75','productTime' => '1.0','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '28','idProvider'=>'4','priceOPr' => '12.79','shippingCost' => '4.75','productTime' => '1.4','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '28','idProvider'=>'1','priceOPr' => '14.51','shippingCost' => '3.09','productTime' => '2.1','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '28','idProvider'=>'5','priceOPr' => '16.22','shippingCost' => '5.19','productTime' => '2.7','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '28','idProvider'=>'12','priceOPr' => '13.90','shippingCost' => '6.59','productTime' => '1.1','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '28','idProvider'=>'6','priceOPr' => '11.93','shippingCost' => '3.99','productTime' => '2.6','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '28','idProvider'=>'7','priceOPr' => '15.87','shippingCost' => '5.19','productTime' => '1.8','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '29','idProvider'=>'2','priceOPr' => '17.15','shippingCost' => '4.75','productTime' => '1.8','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '29','idProvider'=>'3','priceOPr' => '20.90','shippingCost' => '5.19','productTime' => '1.1','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '30','idProvider'=>'1','priceOPr' => '30.45','shippingCost' => '4.99','productTime' => '2.0','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '31','idProvider'=>'2','priceOPr' => '13.07','shippingCost' => '4.75','productTime' => '1.5','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '32','idProvider'=>'3','priceOPr' => '18.66','shippingCost' => '5.79','productTime' => '3.6','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '33','idProvider'=>'2','priceOPr' => '14.58','shippingCost' => '4.75','productTime' => '1.4','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '33','idProvider'=>'3','priceOPr' => '16.79','shippingCost' => '5.19','productTime' => '2.4','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '34','idProvider'=>'2','priceOPr' => '15.67','shippingCost' => '5.19','productTime' => '2.7','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '35','idProvider'=>'2','priceOPr' => '20.66','shippingCost' => '4.75','productTime' => '1.8','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '35','idProvider'=>'3','priceOPr' => '222.73','shippingCost' => '5.19','productTime' => '2.5','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '36','idProvider'=>'2','priceOPr' => '24.99','shippingCost' => '4.75','productTime' => '1.7','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '36','idProvider'=>'10','priceOPr' => '24.18','shippingCost' => '4.99','productTime' => '2.7','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '36','idProvider'=>'3','priceOPr' => '25.03','shippingCost' => '9.99','productTime' => '2.5','printAreaOPr' => 'Front side, Back side'], 
            ['idOPr' => '36','idProvider'=>'9','priceOPr' => '22.33','shippingCost' => '5.99','productTime' => '1.0','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '37','idProvider'=>'2','priceOPr' => '16.06','shippingCost' => '4.75','productTime' => '1.5','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '38','idProvider'=>'9','priceOPr' => '11.75','shippingCost' => '6.79','productTime' => '1.4','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '38','idProvider'=>'2','priceOPr' => '15.60','shippingCost' => '5.19','productTime' => '2.2','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '38','idProvider'=>'12','priceOPr' => '11.42','shippingCost' => '6.59','productTime' => '1.0','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '38','idProvider'=>'3','priceOPr' => '16.55','shippingCost' => '4.75','productTime' => '1.4','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '38','idProvider'=>'4','priceOPr' => '16.79','shippingCost' => '5.49','productTime' => '1.5','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '39','idProvider'=>'2','priceOPr' => '9.45','shippingCost' => '4.75','productTime' => '1.3','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '39','idProvider'=>'3','priceOPr' => '14.97','shippingCost' => '5.19','productTime' => '2.2','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '39','idProvider'=>'4','priceOPr' => '5.19','shippingCost' => '5.19','productTime' => '2.2','printAreaOPr' => 'Front side, Back side'],
            ['idOPr' => '39','idProvider'=>'5','priceOPr' => '11.88','shippingCost' => '5.19','productTime' => '3.4','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '40','idProvider'=>'2','priceOPr' => '6.34','shippingCost' => '6.39','productTime' => '2.3','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '41','idProvider'=>'2','priceOPr' => '4.40','shippingCost' => '6.39','productTime' => '1.6','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '42','idProvider'=>'2','priceOPr' => '9.93','shippingCost' => '5.09','productTime' => '2.4','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '43','idProvider'=>'2','priceOPr' => '8.58','shippingCost' => '8.59','productTime' => '1.0','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '44','idProvider'=>'6','priceOPr' => '14.64','shippingCost' => '7.59','productTime' => '1.0','printAreaOPr' => 'Front side, Back side'],       
            
            ['idOPr' => '45','idProvider'=>'9','priceOPr' => '16.07','shippingCost' => '7.49','productTime' => '1.0','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '46','idProvider'=>'9','priceOPr' => '9.90','shippingCost' => '7.49','productTime' => '1.3','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '47','idProvider'=>'6','priceOPr' => '14.64','shippingCost' => '7.59','productTime' => '1.0','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '48','idProvider'=>'2','priceOPr' => '8.81','shippingCost' => '5.49','productTime' => '1.7','printAreaOPr' => 'Front side, Back side'],       
            
            ['idOPr' => '49','idProvider'=>'1','priceOPr' => '10.60','shippingCost' => '3.89','productTime' => '2.0','printAreaOPr' => 'Front side, Back side'],       
            
            ['idOPr' => '50','idProvider'=>'8','priceOPr' => '9.04','shippingCost' => '5.29','productTime' => '2.9','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '51','idProvider'=>'2','priceOPr' => '13.43','shippingCost' => '5.09','productTime' => '2.7','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '52','idProvider'=>'2','priceOPr' => '17.09','shippingCost' => '6.09','productTime' => '1.6','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '53','idProvider'=>'2','priceOPr' => '18.93','shippingCost' => '5.99','productTime' => '2.2','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '54','idProvider'=>'2','priceOPr' => '13.12','shippingCost' => '9.79','productTime' => '1.5','printAreaOPr' => 'Front side, Back side'],       
            
            ['idOPr' => '55','idProvider'=>'2','priceOPr' => '12.09','shippingCost' => '5.29','productTime' => '1.8','printAreaOPr' => 'Front side, Back side'],       
            
            ['idOPr' => '56','idProvider'=>'9','priceOPr' => '5.00','shippingCost' => '6.59','productTime' => '1.0','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '57','idProvider'=>'2','priceOPr' => '5.79','shippingCost' => '6.09','productTime' => '1.0','printAreaOPr' => 'Front side, Back side'],
            
            ['idOPr' => '58','idProvider'=>'2','priceOPr' => '16.55','shippingCost' => '5.99','productTime' => '4.0','printAreaOPr' => 'Front side'],                                            
        ]);
        \DB::table('DetailSize')->insert([
            ['idOPrDetail' => '1',  'idProvider'=>'9', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '8'],
            ['idOPrDetail' => '1',  'idProvider'=>'8', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '8'], 
            ['idOPrDetail' => '1',  'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '8'],  
            ['idOPrDetail' => '1',  'idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '8'],
            ['idOPrDetail' => '2',  'idProvider'=>'4', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '8'],
            ['idOPrDetail' => '2',  'idProvider'=>'5', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '8'],
            ['idOPrDetail' => '2',  'idProvider'=>'13','idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '8'],
            ['idOPrDetail' => '2',  'idProvider'=>'12','idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '8'],
            ['idOPrDetail' => '3',  'idProvider'=>'1', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '8'],
            ['idOPrDetail' => '3',  'idProvider'=>'7', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '8'],
            ['idOPrDetail' => '3',  'idProvider'=>'10','idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '8'],
            ['idOPrDetail' => '3',  'idProvider'=>'6', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '8'],
            ['idOPrDetail' => '4',  'idProvider'=>'11','idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '8'],
            ['idOPrDetail' => '4',  'idProvider'=>'9', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '8'],
            ['idOPrDetail' => '4',  'idProvider'=>'8', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '8'],
            ['idOPrDetail' => '4',  'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '8'],
            ['idOPrDetail' => '5',  'idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '8'],
            ['idOPrDetail' => '5',  'idProvider'=>'4', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '8'],
            ['idOPrDetail' => '5',  'idProvider'=>'5', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '8'],
            ['idOPrDetail' => '5',  'idProvider'=>'13','idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '8'],
            ['idOPrDetail' => '6',  'idProvider'=>'12','idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '8'],
            ['idOPrDetail' => '6',  'idProvider'=>'1', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '8'],
            ['idOPrDetail' => '6',  'idProvider'=>'7', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '8'],
            ['idOPrDetail' => '6',  'idProvider'=>'10','idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '8'],
            ['idOPrDetail' => '7',  'idProvider'=>'6', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '8'],
            ['idOPrDetail' => '7',  'idProvider'=>'11','idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '8'],
            ['idOPrDetail' => '7',  'idProvider'=>'9', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '8'],
            ['idOPrDetail' => '7',  'idProvider'=>'8', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '8'],
            ['idOPrDetail' => '8',  'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '8'],
            ['idOPrDetail' => '8',  'idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '8'],
            ['idOPrDetail' => '8',  'idProvider'=>'4', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '8'],
            ['idOPrDetail' => '8',  'idProvider'=>'5', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '8'],
            ['idOPrDetail' => '9',  'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '10', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '11', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '12', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '12', 'idProvider'=>'1', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '12', 'idProvider'=>'10','idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '13', 'idProvider'=>'6', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '13', 'idProvider'=>'11','idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '14', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '0'],
            ['idOPrDetail' => '15', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '0'],
            ['idOPrDetail' => '16', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '0'],
            ['idOPrDetail' => '17', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '0'],
            ['idOPrDetail' => '18', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '18', 'idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '19', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '19', 'idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '20', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '20', 'idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '21', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '21', 'idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '22', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '22', 'idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '23', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '8'],
            ['idOPrDetail' => '24', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '8'],
            ['idOPrDetail' => '25', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '8'],
            ['idOPrDetail' => '26', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '8'],
            ['idOPrDetail' => '27', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '8'],
            ['idOPrDetail' => '28', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '8'],
            ['idOPrDetail' => '29', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '8'],
            ['idOPrDetail' => '30', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '8'],
            ['idOPrDetail' => '31', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '31', 'idProvider'=>'1', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '32', 'idProvider'=>'10','idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '33', 'idProvider'=>'15','idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '34', 'idProvider'=>'6', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '35', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '0'],
            ['idOPrDetail' => '36', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '0'],
            ['idOPrDetail' => '37', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '0'],
            ['idOPrDetail' => '38', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '0'],
            ['idOPrDetail' => '39', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '0'],
            ['idOPrDetail' => '40', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '0'],
            ['idOPrDetail' => '41', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '0'],
            ['idOPrDetail' => '42', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '0'],
            ['idOPrDetail' => '43', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '44', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '45', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '46', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '47', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '48', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '49', 'idProvider'=>'8', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '50', 'idProvider'=>'8', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '51', 'idProvider'=>'8', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '52', 'idProvider'=>'9', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '0'],
            ['idOPrDetail' => '53', 'idProvider'=>'8', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '0'],
            ['idOPrDetail' => '54', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '0'],
            ['idOPrDetail' => '55', 'idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '0'],
            ['idOPrDetail' => '56', 'idProvider'=>'4', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '0'],
            ['idOPrDetail' => '57', 'idProvider'=>'5', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '0'],
            ['idOPrDetail' => '58', 'idProvider'=>'7', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '0'],
            ['idOPrDetail' => '59', 'idProvider'=>'13','idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '0'],
            ['idOPrDetail' => '60', 'idProvider'=>'1', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '0'],
            ['idOPrDetail' => '61', 'idProvider'=>'10','idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '0'],
            ['idOPrDetail' => '62', 'idProvider'=>'12','idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '0'],
            ['idOPrDetail' => '63', 'idProvider'=>'6', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '0'],
            ['idOPrDetail' => '64', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '64', 'idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '65', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '65', 'idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '66', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '66', 'idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '67', 'idProvider'=>'1', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '68', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],                                                                                                           
            ['idOPrDetail' => '69', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '70', 'idProvider'=>'9', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '70', 'idProvider'=>'13','idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '71', 'idProvider'=>'8', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '71', 'idProvider'=>'12','idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '72', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],                                                                                                      
            ['idOPrDetail' => '72', 'idProvider'=>'1', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '73', 'idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '73', 'idProvider'=>'14','idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '74', 'idProvider'=>'4', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '74', 'idProvider'=>'1', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '75', 'idProvider'=>'5', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '76', 'idProvider'=>'7', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '77', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '77', 'idProvider'=>'9', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '78', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '78', 'idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '79', 'idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '79', 'idProvider'=>'9', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '80', 'idProvider'=>'9', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '80', 'idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '81', 'idProvider'=>'9', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '81', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '82', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '82', 'idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '83', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '83', 'idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'], 
            ['idOPrDetail' => '84', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '84', 'idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '85', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '85', 'idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'], 
            ['idOPrDetail' => '86', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '86', 'idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'], 
            ['idOPrDetail' => '87', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '0'],
            ['idOPrDetail' => '88', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '0'],
            ['idOPrDetail' => '89', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '0'], 
            ['idOPrDetail' => '90', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '0'], 
            ['idOPrDetail' => '91', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '0'],
            ['idOPrDetail' => '92', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '0'],
            ['idOPrDetail' => '93', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '0'],
            ['idOPrDetail' => '94', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '7','idsize8' => '0'], 
            ['idOPrDetail' => '95', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '96', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '97', 'idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '98', 'idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '98', 'idProvider'=>'4', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],   
            ['idOPrDetail' => '99', 'idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '99', 'idProvider'=>'4', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],    
            ['idOPrDetail' => '100','idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '100','idProvider'=>'4', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],   
            ['idOPrDetail' => '101','idProvider'=>'8', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '102','idProvider'=>'8', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],  
            ['idOPrDetail' => '103','idProvider'=>'10','idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '104','idProvider'=>'10','idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'], 
            ['idOPrDetail' => '105','idProvider'=>'10','idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '106','idProvider'=>'10','idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],    
            ['idOPrDetail' => '107','idProvider'=>'10','idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '108','idProvider'=>'10','idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'], 
            ['idOPrDetail' => '109','idProvider'=>'10','idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'], 
            ['idOPrDetail' => '110','idProvider'=>'9', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],    
            ['idOPrDetail' => '111','idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],   
            ['idOPrDetail' => '112','idProvider'=>'12','idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '113','idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],     
            ['idOPrDetail' => '114','idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '115','idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],   
            ['idOPrDetail' => '116','idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],   
            ['idOPrDetail' => '117','idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'], 
            ['idOPrDetail' => '118','idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],  
            ['idOPrDetail' => '119','idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],   
            ['idOPrDetail' => '120','idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],   
            ['idOPrDetail' => '121','idProvider'=>'4', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],  
            ['idOPrDetail' => '122','idProvider'=>'5', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],  
            ['idOPrDetail' => '123','idProvider'=>'10','idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],  
            ['idOPrDetail' => '124','idProvider'=>'12','idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'], 
            ['idOPrDetail' => '125','idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '125','idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '126','idProvider'=>'10','idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '126','idProvider'=>'12','idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '6','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '127','idProvider'=>'9', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '127','idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '128','idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '128','idProvider'=>'4', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '129','idProvider'=>'1', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '129','idProvider'=>'5', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '130','idProvider'=>'7', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '130','idProvider'=>'9', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '131','idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '131','idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '132','idProvider'=>'1', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '133','idProvider'=>'1', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '134','idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'], 
            ['idOPrDetail' => '135','idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'], 
            ['idOPrDetail' => '136','idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'], 
            ['idOPrDetail' => '137','idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'], 
            ['idOPrDetail' => '138','idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'], 
            ['idOPrDetail' => '139','idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '5','idsize6' => '0','idsize7' => '0','idsize8' => '0'], 
            ['idOPrDetail' => '140','idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'], 
            ['idOPrDetail' => '141','idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'],  
            ['idOPrDetail' => '142','idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'],  
            ['idOPrDetail' => '143','idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'],  
            ['idOPrDetail' => '144','idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'],  
            ['idOPrDetail' => '145','idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'],  
            ['idOPrDetail' => '146','idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'],  
            ['idOPrDetail' => '147','idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'],  
            ['idOPrDetail' => '148','idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'],  
            ['idOPrDetail' => '148','idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '149','idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'],  
            ['idOPrDetail' => '149','idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '150','idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'],  
            ['idOPrDetail' => '150','idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '151','idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'],  
            ['idOPrDetail' => '151','idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '152','idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'],  
            ['idOPrDetail' => '153','idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '148','idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'],  
            ['idOPrDetail' => '154','idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '148','idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'],  
            ['idOPrDetail' => '155','idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '155','idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'], 
            ['idOPrDetail' => '156','idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '156','idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'], 
            ['idOPrDetail' => '157','idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '157','idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'], 
            ['idOPrDetail' => '158','idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '158','idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '159','idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '160','idProvider'=>'10','idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'], 
            ['idOPrDetail' => '161','idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '162','idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'], 
            ['idOPrDetail' => '162','idProvider'=>'10','idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '162','idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '162','idProvider'=>'9', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '163','idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'], 
            ['idOPrDetail' => '163','idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '164','idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '164','idProvider'=>'9', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '165','idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '165','idProvider'=>'9', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '166','idProvider'=>'9', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'], 
            ['idOPrDetail' => '167','idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'], 
            ['idOPrDetail' => '168','idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '169','idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'],   
            ['idOPrDetail' => '170','idProvider'=>'9', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'], 
            ['idOPrDetail' => '171','idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'], 
            ['idOPrDetail' => '172','idProvider'=>'12','idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'], 
            ['idOPrDetail' => '173','idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'], 
            ['idOPrDetail' => '173','idProvider'=>'4', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'], 
            ['idOPrDetail' => '174','idProvider'=>'2', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'], 
            ['idOPrDetail' => '175','idProvider'=>'3', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'], 
            ['idOPrDetail' => '176','idProvider'=>'4', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'], 
            ['idOPrDetail' => '177','idProvider'=>'5', 'idSize1' => '1','idSize2' => '2','idSize3' => '3','idsize4' => '4','idsize5' => '0', 'idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '178','idProvider'=>'2', 'idSize1' => '1','idSize2' => '0', 'idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '179','idProvider'=>'2', 'idSize1' => '1','idSize2' => '0', 'idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '180','idProvider'=>'2', 'idSize1' => '1','idSize2' => '0', 'idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '181','idProvider'=>'2', 'idSize1' => '1','idSize2' => '0', 'idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '182','idProvider'=>'6', 'idSize1' => '1','idSize2' => '0', 'idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '183','idProvider'=>'6', 'idSize1' => '1','idSize2' => '0', 'idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '184','idProvider'=>'9', 'idSize1' => '1','idSize2' => '2','idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '185','idProvider'=>'9', 'idSize1' => '1','idSize2' => '2','idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],   
            ['idOPrDetail' => '186','idProvider'=>'9', 'idSize1' => '1','idSize2' => '2','idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'], 
            ['idOPrDetail' => '187','idProvider'=>'9', 'idSize1' => '1','idSize2' => '2','idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],   
            ['idOPrDetail' => '188','idProvider'=>'9', 'idSize1' => '1','idSize2' => '2','idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],   
            ['idOPrDetail' => '189','idProvider'=>'6', 'idSize1' => '1','idSize2' => '0', 'idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],   
            ['idOPrDetail' => '190','idProvider'=>'6', 'idSize1' => '1','idSize2' => '0', 'idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],   
            ['idOPrDetail' => '191','idProvider'=>'6', 'idSize1' => '1','idSize2' => '0', 'idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],  
            ['idOPrDetail' => '192','idProvider'=>'6', 'idSize1' => '1','idSize2' => '0', 'idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],  
            ['idOPrDetail' => '193','idProvider'=>'6', 'idSize1' => '1','idSize2' => '0', 'idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '194','idProvider'=>'6', 'idSize1' => '1','idSize2' => '0', 'idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],  
            ['idOPrDetail' => '195','idProvider'=>'6', 'idSize1' => '1','idSize2' => '0', 'idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'], 
            ['idOPrDetail' => '196','idProvider'=>'6', 'idSize1' => '1','idSize2' => '0', 'idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],  
            ['idOPrDetail' => '197','idProvider'=>'2', 'idSize1' => '1','idSize2' => '0', 'idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],   
            ['idOPrDetail' => '198','idProvider'=>'2', 'idSize1' => '1','idSize2' => '0', 'idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],     
            ['idOPrDetail' => '199','idProvider'=>'1', 'idSize1' => '1','idSize2' => '0', 'idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'], 
            ['idOPrDetail' => '200','idProvider'=>'1', 'idSize1' => '1','idSize2' => '0', 'idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],   
            ['idOPrDetail' => '201','idProvider'=>'1', 'idSize1' => '1','idSize2' => '0', 'idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],   
            ['idOPrDetail' => '202','idProvider'=>'1', 'idSize1' => '1','idSize2' => '0', 'idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],  
            ['idOPrDetail' => '203','idProvider'=>'1', 'idSize1' => '1','idSize2' => '0', 'idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],  
            ['idOPrDetail' => '204','idProvider'=>'1', 'idSize1' => '1','idSize2' => '0', 'idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],  
            ['idOPrDetail' => '205','idProvider'=>'1', 'idSize1' => '1','idSize2' => '0', 'idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],   
            ['idOPrDetail' => '206','idProvider'=>'1', 'idSize1' => '1','idSize2' => '0', 'idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],  
            ['idOPrDetail' => '207','idProvider'=>'8', 'idSize1' => '1','idSize2' => '0', 'idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],    
            ['idOPrDetail' => '208','idProvider'=>'8', 'idSize1' => '1','idSize2' => '0', 'idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],   
            ['idOPrDetail' => '209','idProvider'=>'2', 'idSize1' => '1','idSize2' => '0', 'idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],    
            ['idOPrDetail' => '210','idProvider'=>'2', 'idSize1' => '1','idSize2' => '0', 'idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],  
            ['idOPrDetail' => '211','idProvider'=>'2', 'idSize1' => '1','idSize2' => '0', 'idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],  
            ['idOPrDetail' => '212','idProvider'=>'2', 'idSize1' => '1','idSize2' => '0', 'idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],    
            ['idOPrDetail' => '213','idProvider'=>'2', 'idSize1' => '1','idSize2' => '0', 'idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],    
            ['idOPrDetail' => '214','idProvider'=>'2', 'idSize1' => '1','idSize2' => '0', 'idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],    
            ['idOPrDetail' => '215','idProvider'=>'2', 'idSize1' => '1','idSize2' => '0', 'idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],   
            ['idOPrDetail' => '216','idProvider'=>'2', 'idSize1' => '1','idSize2' => '0', 'idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],  
            ['idOPrDetail' => '217','idProvider'=>'2', 'idSize1' => '1','idSize2' => '0', 'idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],   
            ['idOPrDetail' => '218','idProvider'=>'9', 'idSize1' => '1','idSize2' => '0', 'idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],   
            ['idOPrDetail' => '219','idProvider'=>'2', 'idSize1' => '1','idSize2' => '0', 'idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],  
            ['idOPrDetail' => '220','idProvider'=>'2', 'idSize1' => '1','idSize2' => '0', 'idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],
            ['idOPrDetail' => '221','idProvider'=>'2', 'idSize1' => '1','idSize2' => '0', 'idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],   
            ['idOPrDetail' => '222','idProvider'=>'2', 'idSize1' => '1','idSize2' => '0', 'idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],   
            ['idOPrDetail' => '223','idProvider'=>'2', 'idSize1' => '1','idSize2' => '0', 'idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],    
            ['idOPrDetail' => '224','idProvider'=>'2', 'idSize1' => '1','idSize2' => '0', 'idSize3' => '0', 'idsize4' => '0','idsize5' => '0','idsize6' => '0','idsize7' => '0','idsize8' => '0'],                                    
        ]);
    
        \DB::table('Products')->insert([
            // idcategory = 1
            ['idOPrDetail' => '1','idShop' => '3','idCategoryPrDetail' => '1','idProvider' => '9','imagePr' =>  'pr11.jpg','namePr' => 'Cookies | Marijuana Cannabis 420 Pot/Weed Stoner on Mens Hoodie','pricePr' => '47.99','colorPr' => '1','evalue' => '4.3','imageDesign' => 'pr12.webp','nameDesign' => 'Cookies | Marijuana Cannabis 420 Pot/Weed Stoner','descriptionDesign' => 'This cannabis 420 t-shirt design with it is mary jane message I is perfect for pot users & medical marijuana advocates. It is perfect for all men & women who love weed & has a cannabis leaf motif', 'note'=>''],
            ['idOPrDetail' => '3','idShop' => '1','idCategoryPrDetail' => '1','idProvider' => '7','imagePr' =>  'pr21.jpg','namePr' => 'DUECES Peace Sign White Gloves New Black Mens Cali on Mens Hoodie','pricePr' => '47.99','colorPr' => '3','evalue' => '4.3','imageDesign' => 'pr22.jpg','nameDesign' => 'DUECES Peace Sign White Gloves New Black Mens Cali','descriptionDesign' => 'DUECES Peace Sign White Gloves New Black Mens California Tee California america', 'note'=>''],
            ['idOPrDetail' => '5','idShop' => '2','idCategoryPrDetail' => '1','idProvider' => '3','imagePr' =>  'pr31.jpg','namePr' => 'Teddy Bear Toys Lunchboxes Aprons on Mens Hoodie','pricePr' => '47.99','colorPr' => '5','evalue' => '4.3','imageDesign' => 'pr32.webp','nameDesign' => 'Teddy Bear Toys Lunchboxes Aprons','descriptionDesign' => '*Just Released for a Limited Time* The campaign ends soon! Get yours while they are still available.', 'note'=>''],
            ['idOPrDetail' => '7','idShop' => '5','idCategoryPrDetail' => '1','idProvider' => '11','imagePr' =>  'pr41.jpg','namePr' => 'Black KING - African AMERICAN MEN on Mens Hoodie','pricePr' => '47.99','colorPr' => '9','evalue' => '4.3','imageDesign' => 'pr42.webp','nameDesign' => 'Black KING - African AMERICAN MEN','descriptionDesign' => 'Together We Rise Men**PERFECT FOR SCHOOL : I am african american pride year 2020 shirt with themed black history month, afrocentric facts, dashiki, culture, heritage, hbcu empowerment awareness. This', 'note'=>''],

            ['idOPrDetail' => '9','idShop' => '4','idCategoryPrDetail' => '1','idProvider' => '2','imagePr' =>  'pr51.jpg','namePr' => 'Matching Family Christmas Reindeer Face Glasses on Unisex Lightweight Terry Hoodie','pricePr' => '37.99','colorPr' => '4','evalue' => '4.4','imageDesign' => 'pr52.webp','nameDesign' => 'Matching Family Christmas Reindeer Face Glasses','descriptionDesign' => 'Matching Family Christmas Reindeer Face Glasses', 'note'=>''],

            ['idOPrDetail' => '12','idShop' => '2','idCategoryPrDetail' => '1','idProvider' => '1','imagePr' =>  'pr61.jpg','namePr' => 't shirt design template california sunny dsys all on Unisex Shawl Collar Hoodie','pricePr' => '57.99','colorPr' => '3','evalue' => '4.6','imageDesign' => 'pr62.png','nameDesign' => 't shirt design template california sunny dsys all','descriptionDesign' => '* CUSTOMER SATISFACTION - Were trusted by customers to deliver high quality products at a great price. If you are not satisfied with your order for any reason, get in touch with us and well make righ', 'note'=>''],

            ['idOPrDetail' => '19','idShop' => '4','idCategoryPrDetail' => '2','idProvider' => '2','imagePr' =>  'pr71.jpg','namePr' => 'War 40K Thousand Sons on Champion Unisex Powerblend Sweatshirt','pricePr' => '52.99','colorPr' => '3','evalue' => '3.7','imageDesign' => 'pr72.png','nameDesign' => 'War 40K Thousand Sons','descriptionDesign' => '"The minds of gods are not for mortals to know, or to judge. Accept that Tzeentch has a place for all of us in his grand scheme, and be happy in the part you have to play."', 'note'=>''],
            ['idOPrDetail' => '22','idShop' => '5','idCategoryPrDetail' => '2','idProvider' => '3','imagePr' =>  'pr81.jpg','namePr' => 'Nazca lines, condor on Champion Unisex Powerblend Sweatshirt','pricePr' => '50.99','colorPr' => '10','evalue' => '4.5','imageDesign' => 'pr82.png','nameDesign' => 'Nazca lines, condor','descriptionDesign' => 'Inspired by the Nazca lines in Peru, the condor.', 'note'=>''],

            ['idOPrDetail' => '23','idShop' => '1','idCategoryPrDetail' => '2','idProvider' => '2','imagePr' =>  'pr91.jpg','namePr' => 'Unisex Crewneck Sweatshirt on Unisex Crewneck Sweatshirt','pricePr' => '41.99','colorPr' => '1','evalue' => '4.7','imageDesign' => 'pr92.webp','nameDesign' => 'Unisex Crewneck Sweatshirt','descriptionDesign' => 'Unisex Crewneck Sweatshirt', 'note'=>''],
            ['idOPrDetail' => '25','idShop' => '3','idCategoryPrDetail' => '2','idProvider' => '2','imagePr' =>  'pr101.jpg','namePr' => 'Love Needs No Words - Autism Mom Tee on Unisex Crewneck Sweatshirt','pricePr' => '41.99','colorPr' => '3','evalue' => '4.7','imageDesign' => 'pr102.webp','nameDesign' => 'Love Needs No Words - Autism Mom Tee','descriptionDesign' => 'Autism Support Crewneck Shirt Love Needs No Words Tshirt Autism Gift T Shirt Autism Mom Tee Unisex Shirt Gift for Him and Her', 'note'=>''],
            ['idOPrDetail' => '27','idShop' => '5','idCategoryPrDetail' => '2','idProvider' => '2','imagePr' =>  'pr111.jpg','namePr' => 'A PANTHERS THROWN UNISEX CREWNECK GRAPHIC SWEATSH on Unisex Crewneck Sweatshirt','pricePr' => '51.49','colorPr' => '5','evalue' => '4.6','imageDesign' => 'pr112.webp','nameDesign' => 'A PANTHERS THROWN UNISEX CREWNECK GRAPHIC SWEATSH','descriptionDesign' => 'A PANTHERS THROWN UNISEX CREWNECK GRAPHIC SWEATSHIRT: ALL POWER TO THE PEOPLE, BLAQ PANTHER PARTY, FBIS MOST WANTED, THE ULTIMATE JUSTICE FOR THE PEOPLE.', 'note'=>''],
            ['idOPrDetail' => '29','idShop' => '2','idCategoryPrDetail' => '2','idProvider' => '2','imagePr' =>  'pr121.jpg','namePr' => 'SUPERIOR MYSTIC SPIRIT UNISEX CREWNECK GRAPHIC SWE on Unisex Crewneck Sweatshirt','pricePr' => '51.49','colorPr' => '11','evalue' => '4.7','imageDesign' => 'pr122.png','nameDesign' => 'SUPERIOR MYSTIC SPIRIT UNISEX CREWNECK GRAPHIC SWE','descriptionDesign' => 'YOUTH CULTURE AT LARGE URBAN STREETWEAR SLY SPORT SUPERIOR MYSTIC SPIRIT UNISEX CREWNECK GRAPHIC SWEATSHIRT', 'note'=>''],

            ['idOPrDetail' => '32','idShop' => '3','idCategoryPrDetail' => '2','idProvider' => '10','imagePr' =>  'pr131.jpg','namePr' => 'Mens Premium T-Shirt on Mens Premium Sweatshirt','pricePr' => '51.99','colorPr' => '3','evalue' => '4.5','imageDesign' => 'pr132.webp','nameDesign' => 'Mens Premium T-Shirt','descriptionDesign' => 'Mens Premium T-Shirt with the our high-quality logo placed in the corner.', 'note'=>''],

            ['idOPrDetail' => '35','idShop' => '1','idCategoryPrDetail' => '3','idProvider' => '2','imagePr' =>  'pr141.jpg','namePr' => 'Jesus is happiness on Mens Pique Polo Shirt','pricePr' => '30.99','colorPr' => '1','evalue' => '4.4','imageDesign' => 'pr142.png','nameDesign' => 'Jesus is happiness','descriptionDesign' => 'jesus is happiness', 'note'=>''],
            ['idOPrDetail' => '41','idShop' => '4','idCategoryPrDetail' => '3','idProvider' => '2','imagePr' =>  'pr151.jpg','namePr' => 'gti logo full red on Gildan Men’s 50/50 Jersey Polo','pricePr' => '29.99','colorPr' => '4','evalue' => '4.4','imageDesign' => 'pr152.webp','nameDesign' => 'gti logo full red','descriptionDesign' => 'gto logo full red', 'note'=>''],

            ['idOPrDetail' => '44','idShop' => '2','idCategoryPrDetail' => '4','idProvider' => '2','imagePr' =>  'pr161.jpg','namePr' => 'bicycle with flowers tank tops mens premium ta on Mens Premium Tank Top','pricePr' => '25.99','colorPr' => '2','evalue' => '4.3','imageDesign' => 'pr162.png','nameDesign' => 'bicycle with flowers tank tops mens premium ta','descriptionDesign' => 'bicycle with flowers tank tops mens premium ta', 'note'=>''],
            ['idOPrDetail' => '48','idShop' => '4','idCategoryPrDetail' => '4','idProvider' => '2','imagePr' =>  'pr171.jpg','namePr' => 'RAGNAROK DESIGN on Mens Premium Tank Top','pricePr' => '25.99','colorPr' => '6','evalue' => '4.5','imageDesign' => 'pr172.webp','nameDesign' => 'RAGNAROK DESIGN','descriptionDesign' => 'Introducing our captivating and exclusive "Ragnarok Old Man" design, now available on a range of premium products to suit every age and style', 'note'=>''],

        ]);
        \DB::table('image_Pr')->insert([
            ['idProduct' => '1','image1'=>'pr13.jpg','image2'=>'pr14.jpg','image3'=>'pr15.jpg','image4'=>'','image5'=>'','image6'=>'','image7'=>'','image8'=>'','image9'=>'','image10'=>'',],
            ['idProduct' => '2','image1'=>'pr23.jpg','image2'=>'pr24.jpg','image3'=>'pr25.jpg','image4'=>'','image5'=>'','image6'=>'','image7'=>'','image8'=>'','image9'=>'','image10'=>'',],
            ['idProduct' => '3','image1'=>'pr33.jpg','image2'=>'pr34.jpg','image3'=>'pr35.jpg','image4'=>'','image5'=>'','image6'=>'','image7'=>'','image8'=>'','image9'=>'','image10'=>'',],
            ['idProduct' => '4','image1'=>'pr43.jpg','image2'=>'pr44.jpg','image3'=>'pr45.jpg','image4'=>'','image5'=>'','image6'=>'','image7'=>'','image8'=>'','image9'=>'','image10'=>'',],
            
            ['idProduct' => '5','image1'=>'pr53.jpg','image2'=>'pr54.jpg','image3'=>'pr55.jpg','image4'=>'','image5'=>'','image6'=>'','image7'=>'','image8'=>'','image9'=>'','image10'=>'',],

            ['idProduct' => '6','image1'=>'pr63.jpg','image2'=>'pr64.jpg','image3'=>'pr65.jpg','image4'=>'','image5'=>'','image6'=>'','image7'=>'','image8'=>'','image9'=>'','image10'=>'',],

            ['idProduct' => '7','image1'=>'pr73.jpg','image2'=>'','image3'=>'','image4'=>'','image5'=>'','image6'=>'','image7'=>'','image8'=>'','image9'=>'','image10'=>'',],
            ['idProduct' => '8','image1'=>'pr83.jpg','image2'=>'','image3'=>'','image4'=>'','image5'=>'','image6'=>'','image7'=>'','image8'=>'','image9'=>'','image10'=>'',],
            
            ['idProduct' => '9','image1'=>'pr93.jpg','image2'=>'','image3'=>'','image4'=>'','image5'=>'','image6'=>'','image7'=>'','image8'=>'','image9'=>'','image10'=>'',],
            ['idProduct' => '10','image1'=>'pr103.jpg','image2'=>'pr104.jpg','image3'=>'','image4'=>'','image5'=>'','image6'=>'','image7'=>'','image8'=>'','image9'=>'','image10'=>'',],
            ['idProduct' => '11','image1'=>'pr113.jpg','image2'=>'pr114.jpg','image3'=>'pr115.jpg','image4'=>'','image5'=>'','image6'=>'','image7'=>'','image8'=>'','image9'=>'','image10'=>'',],
            ['idProduct' => '12','image1'=>'pr123.jpg','image2'=>'pr124.jpg','image3'=>'pr125.jpg','image4'=>'','image5'=>'','image6'=>'','image7'=>'','image8'=>'','image9'=>'','image10'=>'',],
            
            ['idProduct' => '13','image1'=>'pr133.jpg','image2'=>'','image3'=>'','image4'=>'','image5'=>'','image6'=>'','image7'=>'','image8'=>'','image9'=>'','image10'=>'',],
            
            ['idProduct' => '14','image1'=>'pr143.jpg','image2'=>'pr144.jpg','image3'=>'pr145.jpg','image4'=>'pr146.jpg','image5'=>'','image6'=>'','image7'=>'','image8'=>'','image9'=>'','image10'=>'',],
            ['idProduct' => '15','image1'=>'pr153.jpg','image2'=>'','image3'=>'','image4'=>'','image5'=>'','image6'=>'','image7'=>'','image8'=>'','image9'=>'','image10'=>'',],
            
            ['idProduct' => '16','image1'=>'pr163.jpg','image2'=>'pr164.jpg','image3'=>'pr165.jpg','image4'=>'pr166.jpg','image5'=>'','image6'=>'','image7'=>'','image8'=>'','image9'=>'','image10'=>'',],
            ['idProduct' => '17','image1'=>'pr172.jpg','image2'=>'pr173.jpg','image3'=>'pr174.jpg','image4'=>'pr175.jpg','image5'=>'pr176.jpg','image6'=>'','image7'=>'','image8'=>'','image9'=>'','image10'=>'',],
            

        ]);
        \DB::table('SavePr')->insert([
            ['idSavePr'=>'1','idProduct' => '1','namePr'=>'Cookies | Marijuana Cannabis 420 Pot/Weed Stoner on Mens Hoodie','pricePr'=>'47.99','imagePr'=>'pr11.jpg'],
            ['idSavePr'=>'1','idProduct' => '2','namePr'=>'DUECES Peace Sign White Gloves New Black Mens Cali on Mens Hoodie','pricePr'=>'47.99','imagePr'=>'pr21.jpg'],
            ['idSavePr'=>'2','idProduct' => '3','namePr'=>'Teddy Bear Toys Lunchboxes Aprons on Mens Hoodie','pricePr'=>'47.99','imagePr'=>'pr31.jpg'],
            ['idSavePr'=>'2','idProduct' => '4','namePr'=>'Black KING - African AMERICAN MEN on Mens Hoodie','pricePr'=>'47.99','imagePr'=>'pr41.jpg'],
            ['idSavePr'=>'2','idProduct' => '5','namePr'=>'Matching Family Christmas Reindeer Face Glasses on Unisex Lightweight Terry Hoodie','pricePr'=>'37.99','imagePr'=>'pr51.jpg'],
            ['idSavePr'=>'3','idProduct' => '6','namePr'=>'t shirt design template california sunny dsys all on Unisex Shawl Collar Hoodie','pricePr'=>'57.99','imagePr'=>'pr61.jpg'],
            ['idSavePr'=>'4','idProduct' => '7','namePr'=>'War 40K Thousand Sons on Champion Unisex Powerblend Sweatshirt','pricePr'=>'52.99','imagePr'=>'pr71.jpg'],
            ['idSavePr'=>'4','idProduct' => '8','namePr'=>'Nazca lines, condor on Champion Unisex Powerblend Sweatshirt','pricePr'=>'50.99','imagePr'=>'pr81.jpg'],
            ['idSavePr'=>'4','idProduct' => '9','namePr'=>'Unisex Crewneck Sweatshirt on Unisex Crewneck Sweatshirt','pricePr'=>'41.99','imagePr'=>'pr91.jpg'],
            ['idSavePr'=>'4','idProduct' => '10','namePr'=>'Love Needs No Words - Autism Mom Tee on Unisex Crewneck Sweatshirt','pricePr'=>'41.99','imagePr'=>'pr101.jpg'],
        ]);
        \DB::table('comment')->insert([
        ]);
        \DB::table('Cart')->insert([
        ]);
        \DB::table('Order')->insert([
        ]);
        \DB::table('payment')->insert([
        ]);


    }
}
