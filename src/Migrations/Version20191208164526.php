<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration.
 */
final class Version20191208164526 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["908",
          "1",
          "Macarthur Baskets",
          "https://c.cfjump.com/Avatars/D41909C3-0052-4DFE-B3BD-DEDBE0C51D79.png",
          "macarthurbaskets.com.au",
          "90",
          "commissionfactory",
          "394"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["910",
          "1",
          "Naturally Sweet Products",
          "https://c.cfjump.com/Avatars/491AE94B-B496-4469-AB4F-39E573526488.png",
          "naturallysweet.com.au",
          "90",
          "commissionfactory",
          "871"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["912",
          "1",
          "Vision Direct",
          "https://c.cfjump.com/Avatars/3B7DEB04-5619-49E9-91E2-1F3A67F068A2.png",
          "visiondirect.com.au",
          "30",
          "commissionfactory",
          "1381"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["913",
          "1",
          "Twenty8",
          "https://c.cfjump.com/Avatars/2C00D61C-E86F-443B-9659-AABDBF528601.png",
          "twenty8.com",
          "30",
          "commissionfactory",
          "3478"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["914",
          "1",
          "Zanui",
          "https://c.cfjump.com/Avatars/A88F0A85-D10D-40FF-9D96-1A8C8A2FACF7.png",
          "zanui.com.au",
          "30",
          "commissionfactory",
          "4210"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["915",
          "1",
          "WorkwearHub",
          "https://c.cfjump.com/Avatars/CD947B13-6492-43EA-ADA9-8958CEF8020C.png",
          "workwearhub.com.au",
          "30",
          "commissionfactory",
          "6013"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["916",
          "1",
          "isubscribe",
          "https://c.cfjump.com/Avatars/4587DB16-5136-4CC6-A2B6-83CD99A63B3B.png",
          "isubscribe.com.au",
          "30",
          "commissionfactory",
          "6502"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["917",
          "1",
          "Smart Buy Glasses",
          "https://c.cfjump.com/Avatars/326CF38F-D559-447D-B088-E2A62A355FE1.png",
          "smartbuyglasses.co.nz",
          "30",
          "commissionfactory",
          "7437"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["918",
          "1",
          "Get Wines Direct",
          "https://c.cfjump.com/Avatars/D8C4FC3E-8289-4773-95C3-E616CE8F0757.png",
          "getwinesdirect.com",
          "30",
          "commissionfactory",
          "9371"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["919",
          "1",
          "Kitchen Style",
          "https://c.cfjump.com/Avatars/09406516-C8EA-4F43-AA40-3BACCF547D2F.png",
          "kitchenstyle.com.au",
          "60",
          "commissionfactory",
          "9604"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["920",
          "1",
          "Artist Guitars",
          "https://c.cfjump.com/Avatars/82EC6F30-B850-40F3-8312-C0E81911A5B6.png",
          "artistguitars.com.au",
          "30",
          "commissionfactory",
          "9729"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["921",
          "1",
          "Yardgames",
          "https://c.cfjump.com/Avatars/868448BE-7C71-410E-8D7A-C1F68EB34528.png",
          "yardgames.com.au",
          "30",
          "commissionfactory",
          "10506"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["922",
          "1",
          "MyTopia",
          "https://c.cfjump.com/Avatars/7E5F8C84-EB72-47BA-8765-70D5C7940682.png",
          "mytopia.com.au",
          "30",
          "commissionfactory",
          "10966"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["923",
          "1",
          "Cover-More",
          "https://c.cfjump.com/Avatars/91433544-B92F-4D70-9E94-A80D67A740A2.png",
          "covermore.com.au",
          "30",
          "commissionfactory",
          "11003"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["924",
          "1",
          "Onsport",
          "https://c.cfjump.com/Avatars/AC1F2527-B666-47CB-9E8B-379CDF91CA60.png",
          "onsport.com.au",
          "30",
          "commissionfactory",
          "11057"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["925",
          "1",
          "Yellow Octopus",
          "https://c.cfjump.com/Avatars/05ED1A37-7C70-4950-906E-5B387969333E.png",
          "yellowoctopus.com.au",
          "30",
          "commissionfactory",
          "11542"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["926",
          "1",
          "LivingStyles.com.au",
          "https://c.cfjump.com/Avatars/BA5E59C4-6DB7-4FC7-B17F-76D7AC8AEEEF.png",
          "livingstyles.com.au",
          "30",
          "commissionfactory",
          "11771"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["927",
          "1",
          "OzGameShop",
          "https://c.cfjump.com/Avatars/A9D49B32-890D-4A15-B603-A8F3D9C8A55D.png",
          "ozgameshop.com",
          "30",
          "commissionfactory",
          "11793"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["928",
          "1",
          "Ruby Olive",
          "https://c.cfjump.com/Avatars/8E79B75A-66F9-4E28-B85C-7CB2051F2F35.png",
          "rubyolive.com",
          "30",
          "commissionfactory",
          "11995"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["929",
          "1",
          "Crazy Sales",
          "https://c.cfjump.com/Avatars/F027D236-8B19-4E3F-8D3F-CA52FCAD8BCA.png",
          "crazysales.com.au",
          "30",
          "commissionfactory",
          "12475"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["930",
          "1",
          "NZGameShop",
          "https://c.cfjump.com/Avatars/AE66A71D-EC7B-496E-BAB2-87DBABFD79D5.png",
          "nzgameshop.com",
          "30",
          "commissionfactory",
          "13121"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["931",
          "1",
          "ThatBabyShop",
          "https://c.cfjump.com/Avatars/76A34748-C4DC-45A0-B0B8-F27D9AA84EA7.png",
          "thatbabyshop.com",
          "30",
          "commissionfactory",
          "13526"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["932",
          "1",
          "Price Rite Mart",
          "https://c.cfjump.com/Avatars/DBC13F60-E699-4CC5-AB9D-0D18A07011D9.png",
          "priceritemart.com.au",
          "90",
          "commissionfactory",
          "13804"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["933",
          "1",
          "Brosa Furniture",
          "https://c.cfjump.com/Avatars/39BD094A-24B5-4659-8A7A-FE6E023E9ED8.png",
          "brosa.com.au",
          "30",
          "commissionfactory",
          "13865"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["934",
          "1",
          "Wilderness Wear",
          "https://c.cfjump.com/Avatars/978159F1-3067-4927-BBB2-8FB9C6120245.png",
          "wildernesswear.com.au",
          "30",
          "commissionfactory",
          "14143"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["935",
          "1",
          "Light In The Box",
          "https://c.cfjump.com/Avatars/3A06D4F1-EC25-412A-A83F-9F4A04ED9992.png",
          "lightinthebox.com",
          "30",
          "commissionfactory",
          "14207"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["936",
          "1",
          "Mini In The Box",
          "https://c.cfjump.com/Avatars/AF88C772-D9ED-4F4D-801F-0A573CD27482.png",
          "miniinthebox.com",
          "30",
          "commissionfactory",
          "14316"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["937",
          "1",
          "Biome Eco Stores",
          "https://c.cfjump.com/Avatars/A3AE730B-389B-4093-A038-73AF4C5570D1.png",
          "biome.com.au",
          "30",
          "commissionfactory",
          "14846"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["938",
          "1",
          "Amber Sceats",
          "https://c.cfjump.com/Avatars/15804C42-3915-46D3-A8D4-5F7DD69D1046.png",
          "ambersceats.com",
          "30",
          "commissionfactory",
          "14981"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["939",
          "1",
          "Neverland Store",
          "https://c.cfjump.com/Avatars/40A7309A-1060-4ECB-8618-DD326415B40D.png",
          "neverlandstore.com.au",
          "30",
          "commissionfactory",
          "15149"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["940",
          "1",
          "Atomic Cherry",
          "https://c.cfjump.com/Avatars/044E5DA9-7438-40FC-A1BA-682A3169FD9D.png",
          "atomiccherry.com.au",
          "30",
          "commissionfactory",
          "15502"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["941",
          "1",
          "Elinz",
          "https://c.cfjump.com/Avatars/DD4AAC52-B528-47C4-BB1B-7D85EDB75F46.png",
          "elinz.com.au",
          "30",
          "commissionfactory",
          "17913"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["942",
          "1",
          "Artist Guitars (NZ)",
          "https://c.cfjump.com/Avatars/697CC3ED-EC89-463A-92CE-352D1AAA24FC.png",
          "artistguitars.co.nz",
          "30",
          "commissionfactory",
          "18105"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["943",
          "1",
          "Mosmann Australia",
          "https://c.cfjump.com/Avatars/BDA80593-ECD0-4F9D-8D37-A95B03FBF23E.png",
          "mosmannaustralia.com.au",
          "30",
          "commissionfactory",
          "18802"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["944",
          "1",
          "Pilgrim Clothing",
          "https://c.cfjump.com/Avatars/5E33F1C3-2731-4E38-A577-E3AA09E8FDC2.png",
          "pilgrimclothing.com.au",
          "30",
          "commissionfactory",
          "18926"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["945",
          "1",
          "Edisons",
          "https://c.cfjump.com/Avatars/F8FC9C79-62A6-43FE-A5FF-0B60667FB8EB.png",
          "edisons.com.au",
          "30",
          "commissionfactory",
          "19456"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["946",
          "1",
          "Taking Shape",
          "https://c.cfjump.com/Avatars/6D54BC3E-E04F-44D0-A406-749004CCF860.png",
          "takingshape.com",
          "30",
          "commissionfactory",
          "19827"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["947",
          "1",
          "HealthPost (AU)",
          "https://c.cfjump.com/Avatars/F5EBB9BA-6095-4C57-B30F-00D1AFF93411.png",
          "healthpost.com.au",
          "30",
          "commissionfactory",
          "20134"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["948",
          "1",
          "Sephora ",
          "https://c.cfjump.com/Avatars/E6360BFC-7D8D-4859-BA83-297F4CC6C727.png",
          "sephora.com.au",
          "30",
          "commissionfactory",
          "20838"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["949",
          "1",
          "Sunday Somewhere",
          "https://c.cfjump.com/Avatars/E654D800-BE6D-4A2C-B49D-96CCE3D71E71.png",
          "sundaysomewhere.com",
          "30",
          "commissionfactory",
          "20914"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["950",
          "1",
          "Camera House",
          "https://c.cfjump.com/Avatars/C7902761-B50C-4649-AB63-73F8304D279B.png",
          "camerahouse.com.au",
          "30",
          "commissionfactory",
          "21198"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["951",
          "1",
          "Shaver Shop (AU)",
          "https://c.cfjump.com/Avatars/A117F604-B469-4F5E-9558-EF944EC2BA2D.png",
          "shavershop.com.au",
          "30",
          "commissionfactory",
          "21392"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["952",
          "1",
          "Glasshouse Fragrances",
          "https://c.cfjump.com/Avatars/789BDFC2-EB08-4095-8682-0637C70C9C74.png",
          "glasshousefragrances.com",
          "30",
          "commissionfactory",
          "22006"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["953",
          "1",
          "Life Reader",
          "https://c.cfjump.com/Avatars/F4A093F9-6043-4CAC-9036-1085B4DDCCF0.png",
          "lifereader.com",
          "30",
          "commissionfactory",
          "22041"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["954",
          "1",
          "Merchant 1948 (NZ)",
          "https://c.cfjump.com/Avatars/189C8AFF-8D2F-47B9-BD3E-980D626E0848.png",
          "merchant1948.co.nz",
          "30",
          "commissionfactory",
          "22137"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["955",
          "1",
          "Personal Digital Services",
          "https://c.cfjump.com/Avatars/2533033B-F6B9-4831-B9F1-A7D046376677.png",
          "personaldigital.com.au",
          "30",
          "commissionfactory",
          "22702"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["956",
          "1",
          "Heaven Gifts",
          "https://c.cfjump.com/Avatars/B3717AE3-B0CD-4AFF-94A2-6B25BD05EE04.png",
          "heavengifts.com",
          "30",
          "commissionfactory",
          "22931"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["957",
          "1",
          "HealthPost",
          "https://c.cfjump.com/Avatars/AAEB082E-C6A6-49E4-830D-8D7C29AF771A.png",
          "healthpost.co.nz",
          "30",
          "commissionfactory",
          "23442"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["958",
          "1",
          "Froothie",
          "https://c.cfjump.com/Avatars/BFFFEAE9-198F-480D-80B9-CE54307C1838.png",
          "froothie.com.au",
          "30",
          "commissionfactory",
          "24870"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["959",
          "1",
          "FORCAST",
          "https://c.cfjump.com/Avatars/5214125F-4FB8-4691-B43B-7693D6EE6C21.png",
          "forcast.com.au",
          "30",
          "commissionfactory",
          "26452"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["960",
          "1",
          "Windsor Smith",
          "https://c.cfjump.com/Avatars/21A088F7-9B43-449C-9557-C36F2D65A723.png",
          "windsorsmith.com.au",
          "30",
          "commissionfactory",
          "26780"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["961",
          "1",
          "Bohemian Traders",
          "https://c.cfjump.com/Avatars/8901CB09-F21B-4652-9958-913D893737DE.png",
          "bohemiantraders.com",
          "30",
          "commissionfactory",
          "27280"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["964",
          "1",
          "Qatar Airways",
          "https://c.cfjump.com/Avatars/60A5D368-0B26-4EE1-B10D-1D6BAD401B08.png",
          "qatarairways.com",
          "30",
          "commissionfactory",
          "28707"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["965",
          "1",
          "Lovehoney",
          "https://c.cfjump.com/Avatars/5B25E08E-B602-45B8-954D-36855EE2B1D3.png",
          "lovehoney.com.au",
          "90",
          "commissionfactory",
          "29682"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["966",
          "1",
          "Dymocks Books",
          "https://c.cfjump.com/Avatars/833A4168-B89F-4337-B5E4-EDDF6A9D737F.png",
          "dymocks.com.au",
          "30",
          "commissionfactory",
          "29692"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["967",
          "1",
          "Ces Deals",
          "https://c.cfjump.com/Avatars/329FD597-61B2-42BA-8556-5D007D6C3C91.png",
          "cesdeals.com",
          "30",
          "commissionfactory",
          "29706"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["968",
          "1",
          "Naritas Finance",
          "https://c.cfjump.com/Avatars/E8241C7D-5675-4FE7-AD0E-F937A28F580E.png",
          "naritas.com.au",
          "90",
          "commissionfactory",
          "29994"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["969",
          "1",
          "Sephora NZ",
          "https://c.cfjump.com/Avatars/5951AB66-ECDF-4F97-866B-234EB779FC64.png",
          "sephora.nz",
          "30",
          "commissionfactory",
          "30464"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["970",
          "1",
          "Jumbo Pets",
          "https://c.cfjump.com/Avatars/1348CF75-8E22-4E9E-AC0C-D4594AF6F47B.png",
          "jumbopets.com",
          "30",
          "commissionfactory",
          "30946"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["971",
          "1",
          "Fairyseason",
          "https://c.cfjump.com/Avatars/466FEE33-8BA6-4AA0-B8DE-6614C8F5ACBD.png",
          "fairyseason.com",
          "30",
          "commissionfactory",
          "31113"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["972",
          "1",
          "Reid Cycles",
          "https://c.cfjump.com/Avatars/A16F9910-00D2-400F-BEAA-5B3840C16BB8.png",
          "reidcycles.com.au",
          "30",
          "commissionfactory",
          "31152"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["973",
          "1",
          "Motoquipe",
          "https://c.cfjump.com/Avatars/54A5873A-FD9F-4F3C-BD6A-EF86AF5FC68C.png",
          "motoquipe.com.au",
          "30",
          "commissionfactory",
          "31314"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["974",
          "1",
          "Zookal",
          "https://c.cfjump.com/Avatars/918B71B1-CDDE-4AC5-99E4-1C7E450A5DCB.png",
          "zookal.com",
          "30",
          "commissionfactory",
          "31531"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["975",
          "1",
          "Cookware Brands",
          "https://c.cfjump.com/Avatars/99782E3C-E51F-47A1-819C-DB9FD2839262.png",
          "cookwarebrands.com.au",
          "30",
          "commissionfactory",
          "31577"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["976",
          "1",
          "Wild Secrets",
          "https://c.cfjump.com/Avatars/A49834CF-C09C-444D-AEE6-76E59D1A579E.png",
          "wildsecrets.com.au",
          "30",
          "commissionfactory",
          "31924"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["977",
          "1",
          "Fantasy Lingerie",
          "https://c.cfjump.com/Avatars/21BE7D14-B988-4F27-A03A-A2453DA3C7E4.png",
          "fantasylingerie.com.au",
          "30",
          "commissionfactory",
          "31925"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["978",
          "1",
          "VetSupply.com.au",
          "https://c.cfjump.com/Avatars/15AAB250-FE9B-4D48-910B-21B7F508B024.png",
          "vetsupply.com.au",
          "30",
          "commissionfactory",
          "32003"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["979",
          "1",
          "Toy Universe",
          "https://c.cfjump.com/Avatars/53BA615A-C8F3-4B63-B282-660EB53B3AF7.png",
          "toyuniverse.com.au",
          "30",
          "commissionfactory",
          "32448"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["980",
          "1",
          "Sanity",
          "https://c.cfjump.com/Avatars/C1E51B8E-8A68-4EAD-8C93-E9EF2E2D1857.png",
          "sanity.com.au",
          "30",
          "commissionfactory",
          "32550"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["981",
          "1",
          "Adrift",
          "https://c.cfjump.com/Avatars/EC361DCF-1225-4A7D-A34D-5339FFB65372.png",
          "adrift.com.au",
          "30",
          "commissionfactory",
          "32734"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["982",
          "1",
          "Billy Guyatts",
          "https://c.cfjump.com/Avatars/5678AE7F-93D3-4318-9F89-E652DF2A14B9.png",
          "billyguyatts.com.au",
          "30",
          "commissionfactory",
          "32977"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["983",
          "1",
          "Rosegal",
          "https://c.cfjump.com/Avatars/B7163A21-4DC4-4E62-AF72-85CC34EF8933.png",
          "rosegal.com",
          "30",
          "commissionfactory",
          "33414"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["984",
          "1",
          "Esther & Co",
          "https://c.cfjump.com/Avatars/E0D14C01-5BC0-405A-8936-4BCF1775FA0A.png",
          "esther.com.au",
          "30",
          "commissionfactory",
          "33681"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["985",
          "1",
          "Lime Tree Kids",
          "https://c.cfjump.com/Avatars/05BFD45D-6ED6-4445-B218-2DD1E59FC038.png",
          "limetreekids.com.au",
          "30",
          "commissionfactory",
          "34279"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["986",
          "1",
          "Adultshop.com",
          "https://c.cfjump.com/Avatars/4C5FA33D-6D10-4B99-9020-01F926B8E2EA.png",
          "adultshop.com.au",
          "30",
          "commissionfactory",
          "34726"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["987",
          "1",
          "Femplay",
          "https://c.cfjump.com/Avatars/5996AE4A-E19A-45A2-9AA4-2094A9EA196D.png",
          "femplay.com.au",
          "30",
          "commissionfactory",
          "34852"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["988",
          "1",
          "Pharmacy Online",
          "https://c.cfjump.com/Avatars/AE4A4F0C-1F2D-47C2-AE87-0969369637C8.png",
          "pharmacyonline.com.au",
          "30",
          "commissionfactory",
          "34879"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["989",
          "1",
          "Amaroso Boutique",
          "https://c.cfjump.com/Avatars/37BB243E-117B-4D77-9400-98E09A5D6061.png",
          "amaroso.com.au",
          "30",
          "commissionfactory",
          "34915"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["990",
          "1",
          "The Christmas Warehouse",
          "https://c.cfjump.com/Avatars/42D729A9-FCCF-4AC5-AE49-762736FE74C0.png",
          "christmaswarehouse.com.au",
          "30",
          "commissionfactory",
          "35174"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["991",
          "1",
          "Shopzero",
          "https://c.cfjump.com/Avatars/AC35ACD9-8A35-4F00-8040-FAB138539463.png",
          "shopzero.com.au",
          "30",
          "commissionfactory",
          "35761"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["993",
          "1",
          "Mamaway",
          "https://c.cfjump.com/Avatars/DC015397-AEBA-4117-810C-D3F18D3F09CF.png",
          "mamaway.com",
          "30",
          "commissionfactory",
          "37379"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["996",
          "1",
          "180 Nutrition",
          "https://c.cfjump.com/Avatars/63969C03-53AD-4570-A85E-A1A49827130F.png",
          "180nutrition.com.au",
          "30",
          "commissionfactory",
          "38153"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["997",
          "1",
          "Myprotein",
          "https://c.cfjump.com/Avatars/366E3412-2F52-4602-8DB6-223E0AC6DD85.png",
          "au.myprotein.com",
          "30",
          "commissionfactory",
          "38206"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["998",
          "1",
          "Nisbets Australia",
          "https://c.cfjump.com/Avatars/B97B4DDD-8498-4362-832C-965AFD416744.png",
          "nisbets.com.au",
          "30",
          "commissionfactory",
          "38943"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["999",
          "1",
          "Missguided",
          "https://c.cfjump.com/Avatars/1DCB12C4-465A-4999-9098-41CFAB5DEACD.png",
          "missguidedau.com",
          "30",
          "commissionfactory",
          "39098"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1000",
          "1",
          "CSIRO Total Wellbeing Diet",
          "https://c.cfjump.com/Avatars/3291EC45-1B49-47F3-A516-CDD4DA2B6C9F.png",
          "totalwellbeingdiet.com",
          "30",
          "commissionfactory",
          "39270"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1001",
          "1",
          "April & Oak Ltd",
          "https://c.cfjump.com/Avatars/0D4B923E-3C24-4463-A12A-B7DA8B032F5F.png",
          "aprilandoak.com.au",
          "7",
          "commissionfactory",
          "39351"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1002",
          "1",
          "Now Finance",
          "https://c.cfjump.com/Avatars/1E1689CE-86FB-441E-B11F-41B3A26DF0F0.png",
          "nowfinance.com.au",
          "30",
          "commissionfactory",
          "40595"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1003",
          "1",
          "HoneyPeaches",
          "https://c.cfjump.com/Avatars/869B786C-D15E-4FF9-93AA-7982A75B1740.png",
          "honeypeaches.com",
          "30",
          "commissionfactory",
          "41462"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1004",
          "1",
          "Crumpler",
          "https://c.cfjump.com/Avatars/6BBB5BED-0D0F-4525-8623-9C5CC63BF28E.png",
          "crumpler.com",
          "30",
          "commissionfactory",
          "41496"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1005",
          "1",
          "CAT Workwear",
          "https://c.cfjump.com/Avatars/6656F165-315A-4DB6-86EC-ABB41AB3F990.png",
          "catworkwear.com.au",
          "30",
          "commissionfactory",
          "42731"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1006",
          "1",
          "Merrell Australia ",
          "https://c.cfjump.com/Avatars/89DCF8BE-62F2-4FFB-8B6C-C82B08F56057.png",
          "merrellaustralia.com.au",
          "30",
          "commissionfactory",
          "42733"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1007",
          "1",
          "Sperry",
          "https://c.cfjump.com/Avatars/4C951F5D-9E84-4001-BB1E-1682F8BBE589.png",
          "sperry.com.au",
          "30",
          "commissionfactory",
          "42735"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1008",
          "1",
          "Saucony",
          "https://c.cfjump.com/Avatars/E899044D-9E55-4C0D-81A7-1E4013F3FF84.png",
          "saucony.com.au",
          "30",
          "commissionfactory",
          "42736"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1009",
          "1",
          "Siren Shoes",
          "https://c.cfjump.com/Avatars/427FBF80-83AF-407F-B6DE-EB00DBDD3EA7.png",
          "sirenshoes.com.au",
          "30",
          "commissionfactory",
          "42837"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1010",
          "1",
          "Catch.com.au",
          "https://c.cfjump.com/Avatars/4C9D1DFD-BCC1-442A-9640-82E1AB3ED7A3.png",
          "catch.com.au",
          "1",
          "commissionfactory",
          "42872"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1011",
          "1",
          "Scoopon",
          "https://c.cfjump.com/Avatars/B67584DF-E834-4F5A-99D4-D2212453AF99.png",
          "scoopon.com.au",
          "30",
          "commissionfactory",
          "42875"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1012",
          "1",
          "Van Heusen",
          "https://c.cfjump.com/Avatars/952AD04A-3434-42A7-BD40-D3938C1A1A2E.png",
          "vanheusen.com.au",
          "30",
          "commissionfactory",
          "43689"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1014",
          "1",
          "Billini",
          "https://c.cfjump.com/Avatars/4EEAB25A-FA49-4665-BF8D-F00E644E998B.png",
          "billini.com",
          "30",
          "commissionfactory",
          "44001"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1015",
          "1",
          "JasonL Office Furniture ",
          "https://c.cfjump.com/Avatars/A1D8E05E-9E54-400E-AC55-6803C1D1408F.png",
          "jasonl.com.au",
          "30",
          "commissionfactory",
          "44450"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1016",
          "1",
          "ThePharmacy",
          "https://c.cfjump.com/Avatars/0FC92976-17AD-4792-BA62-B46725EF43F3.png",
          "thepharmacy.com.au",
          "30",
          "commissionfactory",
          "45232"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1017",
          "1",
          "Boody Eco Wear",
          "https://c.cfjump.com/Avatars/E53255E1-67AF-44F2-8F6F-1F633159CF43.png",
          "boody.com.au",
          "30",
          "commissionfactory",
          "45247"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1018",
          "1",
          "Purple Turtle Toys",
          "https://c.cfjump.com/Avatars/466C8C17-9814-4247-A2D6-134E894B9814.png",
          "purpleturtletoys.com.au",
          "30",
          "commissionfactory",
          "45598"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1019",
          "1",
          "My Generator",
          "https://c.cfjump.com/Avatars/658104CE-8A3C-4E18-A163-FEDFCE28697F.png",
          "mygenerator.com.au",
          "30",
          "commissionfactory",
          "45738"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1020",
          "1",
          "eDreams",
          "https://c.cfjump.com/Avatars/1CBF632A-BCDA-43B2-9F84-717AFFD88DF3.png",
          "edreams.com.au",
          "30",
          "commissionfactory",
          "45847"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1022",
          "1",
          "Superdry",
          "https://c.cfjump.com/Avatars/28B746E7-9A71-4CE8-B8A8-57737CE8A5DF.png",
          "superdry.com.au",
          "30",
          "commissionfactory",
          "45852"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1023",
          "1",
          "ProBikeKit",
          "https://c.cfjump.com/Avatars/F93F1418-F6E4-4F3D-8D2B-DD63A9ADB06F.png",
          "probikekit.com.au",
          "30",
          "commissionfactory",
          "45890"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1024",
          "1",
          "Shouz",
          "https://c.cfjump.com/Avatars/A1B974A7-BBF5-48BC-9A87-81DE0ACC30B6.png",
          "shouz.com.au",
          "30",
          "commissionfactory",
          "47097"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1025",
          "1",
          "DLTradingau",
          "https://c.cfjump.com/Avatars/D6DA9ED8-4CA4-4F52-AB11-BC02877F9979.png",
          "dltradingau.com.au",
          "30",
          "commissionfactory",
          "47447"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1026",
          "1",
          "Speedo",
          "https://c.cfjump.com/Avatars/969FA113-EF24-4750-AB54-75DC1ADC3FA9.png",
          "speedo.com.au",
          "30",
          "commissionfactory",
          "47628"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1027",
          "1",
          "Bump Shoes",
          "https://c.cfjump.com/Avatars/35B53E0E-EFF5-4B32-AB2F-95992EB80794.png",
          "bumpshoes.com",
          "30",
          "commissionfactory",
          "47629"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1028",
          "1",
          "FitMyCar",
          "https://c.cfjump.com/Avatars/F57FF728-C44D-41EF-8BAD-2B816A706FD7.png",
          "fitmycar.com",
          "30",
          "commissionfactory",
          "47773"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1029",
          "1",
          "Solbari",
          "https://c.cfjump.com/Avatars/A3B9D5C5-3B7B-4219-9766-17276026957C.png",
          "solbari.com",
          "30",
          "commissionfactory",
          "47968"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1030",
          "1",
          "HeyHey.com.au",
          "https://c.cfjump.com/Avatars/0C62993F-7CB1-4A13-BF71-7248AB40829C.png",
          "heyhey.com.au",
          "30",
          "commissionfactory",
          "48158"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1031",
          "1",
          "Thinco",
          "https://c.cfjump.com/Avatars/7E2CAE1D-D76F-4976-B25E-CB3814EC806E.png",
          "thinco.me",
          "30",
          "commissionfactory",
          "48473"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1032",
          "1",
          "Southern Phone",
          "https://c.cfjump.com/Avatars/20DA9109-7E6E-41C8-B002-C07C1C64B6E3.png",
          "southernphone.com.au",
          "30",
          "commissionfactory",
          "48477"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1033",
          "1",
          "Newchic",
          "https://c.cfjump.com/Avatars/B735793B-D34E-4A15-95E3-9A1A958310F1.png",
          "newchic.com",
          "30",
          "commissionfactory",
          "48789"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1034",
          "1",
          "Mica Lighting",
          "https://c.cfjump.com/Avatars/C6D7ADC2-F5F8-434D-A330-3B1CB4C9205E.png",
          "micalighting.com.au",
          "30",
          "commissionfactory",
          "48793"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1035",
          "1",
          "VaporFi",
          "https://c.cfjump.com/Avatars/6D994181-B348-433E-B664-B1FE0BE54BD5.png",
          "vaporfi.com.au",
          "30",
          "commissionfactory",
          "48913"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1036",
          "1",
          "Short Story",
          "https://c.cfjump.com/Avatars/FF9DE826-FE5D-4FC0-858F-C87E2A7AB84A.png",
          "shortstory.com.au",
          "30",
          "commissionfactory",
          "49277"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1037",
          "1",
          "Boutiquefeel",
          "https://c.cfjump.com/Avatars/5DC46450-D58D-44E6-AAE5-D335D6700944.png",
          "boutiquefeel.com",
          "30",
          "commissionfactory",
          "49283"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1038",
          "1",
          "IVRose",
          "https://c.cfjump.com/Avatars/B308160A-BC34-4C83-93D9-4A59003C6617.png",
          "ivrose.com",
          "30",
          "commissionfactory",
          "49285"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1039",
          "1",
          "ChicMe",
          "https://c.cfjump.com/Avatars/5EC481F8-9C71-442F-9BF8-74A10603C379.png",
          "chicme.com",
          "30",
          "commissionfactory",
          "49287"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1040",
          "1",
          "Yoins.com",
          "https://c.cfjump.com/Avatars/C7F815C6-B48E-4C3A-B7E9-5440652D7442.png",
          "yoins.com",
          "30",
          "commissionfactory",
          "49469"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1041",
          "1",
          "The Stork Nest",
          "https://c.cfjump.com/Avatars/12F3A748-725C-43C0-AACD-B4EDBF1F31E8.png",
          "thestorknest.com.au",
          "30",
          "commissionfactory",
          "49527"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1042",
          "1",
          "Trunki",
          "https://c.cfjump.com/Avatars/3525EF16-9D60-4664-8400-254812327288.png",
          "trunki.com.au",
          "30",
          "commissionfactory",
          "49528"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1043",
          "1",
          "Original UGG Boots",
          "https://c.cfjump.com/Avatars/2E33A529-744B-4862-A152-577964067E91.png",
          "originaluggboots.com.au",
          "30",
          "commissionfactory",
          "49934"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1044",
          "1",
          "CarHistory",
          "https://c.cfjump.com/Avatars/9D732B5F-8232-4B46-B4B8-8F6065135F04.png",
          "carhistory.com.au",
          "30",
          "commissionfactory",
          "50082"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1045",
          "1",
          "Bedworks",
          "https://c.cfjump.com/Avatars/A0F07F63-33D3-4097-A82D-F7B159045B91.png",
          "bedworks.com.au",
          "30",
          "commissionfactory",
          "50247"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1046",
          "1",
          "Ziani Beauty",
          "https://c.cfjump.com/Avatars/001A7E36-DB48-4F38-B531-7BC1E490C309.png",
          "zianibeauty.com.au",
          "30",
          "commissionfactory",
          "50329"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1047",
          "1",
          "Automotive Superstore ",
          "https://c.cfjump.com/Avatars/BA519DC7-BC98-4F9E-BA85-164F63365610.png",
          "automotivesuperstore.com.au",
          "30",
          "commissionfactory",
          "50429"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1048",
          "1",
          "BecexTech",
          "https://c.cfjump.com/Avatars/71D670B8-9F73-405E-A16F-819E6BB62E96.png",
          "becextech.com.au",
          "30",
          "commissionfactory",
          "50732"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1049",
          "1",
          "ECHT ",
          "https://c.cfjump.com/Avatars/648A0D82-FD6B-4386-9EA1-6F5E96827603.png",
          "echt.com.au",
          "30",
          "commissionfactory",
          "50888"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1050",
          "1",
          "Bondi Smile Australia",
          "https://c.cfjump.com/Avatars/AE3499E1-01F9-464F-B1AB-528C0175BDED.png",
          "bondismile.com.au",
          "30",
          "commissionfactory",
          "50889"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1051",
          "1",
          "The Spy Store",
          "https://c.cfjump.com/Avatars/4C029402-4FAC-45E4-ADF1-92799A5F53C7.png",
          "thespystore.com.au",
          "30",
          "commissionfactory",
          "51096"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1052",
          "1",
          "Blue Bungalow",
          "https://c.cfjump.com/Avatars/C48C7538-2A3D-47ED-B3D4-AF6DFDA23932.png",
          "bluebungalow.com.au",
          "30",
          "commissionfactory",
          "51137"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1053",
          "1",
          "Belle & Bloom",
          "https://c.cfjump.com/Avatars/172691B2-83F6-4ECA-B696-E641399D4A79.png",
          "belleandbloom.com",
          "30",
          "commissionfactory",
          "51296"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1054",
          "1",
          "Shhh Silk",
          "https://c.cfjump.com/Avatars/FB9D4245-5ECC-468F-B37B-9512F81E4446.png",
          "shhhsilk.com.au",
          "30",
          "commissionfactory",
          "51696"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1055",
          "1",
          "Hire For Baby ",
          "https://c.cfjump.com/Avatars/83B8D5E9-50F3-41CD-AC54-58909BC6E563.png",
          "hireforbaby.com",
          "30",
          "commissionfactory",
          "52680"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1056",
          "1",
          "Direct Art Australia ",
          "https://c.cfjump.com/Avatars/DC4E3FB0-8D3C-4827-AC09-891D0206243A.png",
          "directartaustralia.com.au",
          "30",
          "commissionfactory",
          "52874"]);
    }

    public function down(Schema $schema) : void
    {
        
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'macarthurbaskets.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'naturallysweet.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'visiondirect.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'twenty8.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'zanui.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'workwearhub.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'isubscribe.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'smartbuyglasses.co.nz\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'getwinesdirect.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'kitchenstyle.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'artistguitars.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'yardgames.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'mytopia.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'covermore.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'onsport.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'yellowoctopus.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'livingstyles.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ozgameshop.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'rubyolive.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'crazysales.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'nzgameshop.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'thatbabyshop.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'priceritemart.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'brosa.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'wildernesswear.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'lightinthebox.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'miniinthebox.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'biome.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ambersceats.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'neverlandstore.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'atomiccherry.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'elinz.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'artistguitars.co.nz\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'mosmannaustralia.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'pilgrimclothing.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'edisons.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'takingshape.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'healthpost.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'sephora.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'sundaysomewhere.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'camerahouse.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'shavershop.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'glasshousefragrances.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'lifereader.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'merchant1948.co.nz\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'personaldigital.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'heavengifts.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'healthpost.co.nz\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'froothie.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'forcast.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'windsorsmith.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'bohemiantraders.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'qatarairways.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'lovehoney.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'dymocks.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'cesdeals.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'naritas.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'sephora.nz\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'jumbopets.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'fairyseason.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'reidcycles.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'motoquipe.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'zookal.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'cookwarebrands.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'wildsecrets.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'fantasylingerie.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'vetsupply.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'toyuniverse.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'sanity.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'adrift.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'billyguyatts.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'rosegal.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'esther.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'limetreekids.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'adultshop.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'femplay.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'pharmacyonline.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'amaroso.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'christmaswarehouse.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'shopzero.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'mamaway.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'180nutrition.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'au.myprotein.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'nisbets.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'missguidedau.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'totalwellbeingdiet.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'aprilandoak.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'nowfinance.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'honeypeaches.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'crumpler.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'catworkwear.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'merrellaustralia.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'sperry.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'saucony.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'sirenshoes.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'catch.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'scoopon.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'vanheusen.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'billini.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'jasonl.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'thepharmacy.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'boody.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'purpleturtletoys.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'mygenerator.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'edreams.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'superdry.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'probikekit.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'shouz.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'dltradingau.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'speedo.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'bumpshoes.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'fitmycar.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'solbari.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'heyhey.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'thinco.me\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'southernphone.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'newchic.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'micalighting.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'vaporfi.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'shortstory.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'boutiquefeel.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ivrose.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'chicme.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'yoins.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'thestorknest.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'trunki.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'originaluggboots.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'carhistory.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'bedworks.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'zianibeauty.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'automotivesuperstore.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'becextech.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'echt.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'bondismile.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'thespystore.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'bluebungalow.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'belleandbloom.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'shhhsilk.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'hireforbaby.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'directartaustralia.com.au\'));');
    }
}