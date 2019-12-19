<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration.
 */
final class Version20191208145918 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["821",
      "1",
      "121Doc.co.uk",
      "",
      "121doc.com",
      "30",
      "tradetracker",
      "https://www.121doc.co.uk/content/?tt=3796_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["822",
      "1",
      "20cogs.co.uk",
      "",
      "20cogs.co.uk",
      "100",
      "tradetracker",
      "https://tc.tradetracker.net/?c=25014&m=0&a=282840"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["823",
      "1",
      "A4labels.com",
      "",
      "a4labels.com",
      "100",
      "tradetracker",
      "https://www.a4labels.com/labels/?tt=25370_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["824",
      "1",
      "AA-Sports.co.uk",
      "",
      "aa-sports.co.uk",
      "45",
      "tradetracker",
      "https://www.aa-sports.co.uk/sport/?tt=29781_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["825",
      "1",
      "Alensa.co.uk",
      "",
      "alensa.co.uk",
      "100",
      "tradetracker",
      "https://tc.tradetracker.net/?c=18478&m=0&a=282840"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["826",
      "1",
      "Altum.cc",
      "",
      "altum.cc",
      "100",
      "tradetracker",
      "https://tc.tradetracker.net/?c=25329&m=0&a=282840"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["827",
      "1",
      "Anthoshop.com",
      "",
      "anthoshop.gr",
      "100",
      "tradetracker",
      "https://tc.tradetracker.net/?c=25247&m=0&a=282840"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["828",
      "1",
      "Any-Lamp",
      "",
      "any-lamp.co.uk",
      "30",
      "tradetracker",
      "https://tc.tradetracker.net/?c=24842&m=0&a=282840"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["829",
      "1",
      "BabyMonitorsDirect.co.uk",
      "",
      "babymonitorsdirect.co.uk",
      "30",
      "tradetracker",
      "https://www.babymonitorsdirect.co.uk/infantcare/?tt=3592_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["830",
      "1",
      "BabySecurity.co.uk",
      "",
      "babysecurity.co.uk",
      "30",
      "tradetracker",
      "https://www.babysecurity.co.uk/infantcare/?tt=3591_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["831",
      "1",
      "Banggood.com",
      "",
      "banggood.com",
      "100",
      "tradetracker",
      "https://www.banggood.com/bang/?tt=16943_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["832",
      "1",
      "BirdFood.co.uk",
      "",
      "birdfood.co.uk",
      "30",
      "tradetracker",
      "http://www.birdfood.co.uk/tt/?tt=6544_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["833",
      "1",
      "Birdfood.ie",
      "",
      "birdfood.ie",
      "30",
      "tradetracker",
      "https://www.birdfood.ie/birdfood/?tt=9457_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["834",
      "1",
      "Birdforumshop.com",
      "",
      "birdforumshop.com",
      "100",
      "tradetracker",
      "http://www.birdforumshop.com/tt/?tt=20056_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["835",
      "1",
      "Bivolino.com",
      "",
      "bivolino.com",
      "50",
      "tradetracker",
      "http://www.bivolino.com/custom/index.aspx?tt=12298_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["836",
      "1",
      "Blindsdirectonline.co.uk",
      "",
      "blindsdirectonline.co.uk",
      "100",
      "tradetracker",
      "https://www.blindsdirectonline.co.uk/blinds/?tt=24293_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["837",
      "1",
      "BridgetsBoutique.co.uk",
      "",
      "bridgetsboutique.co.uk",
      "100",
      "tradetracker",
      "https://tc.tradetracker.net/?c=25717&m=0&a=282840"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["838",
      "1",
      "Bungalow.net",
      "",
      "bungalow.net",
      "100",
      "tradetracker",
      "https://tc.tradetracker.net/?c=1118&m=0&a=282840"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["839",
      "1",
      "Buyincoins.com",
      "",
      "buyincoins.com",
      "60",
      "tradetracker",
      "http://www.buyincoins.com/shopping/?tt=25773_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["840",
      "1",
      "Campingselection.co.uk",
      "",
      "campingselection.co.uk",
      "30",
      "tradetracker",
      "http://www.campingselection.com/uk/Partners/TradeTracker/?tt=8294_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["841",
      "1",
      "Cateredskichalets.com",
      "",
      "cateredskichalets.com",
      "100",
      "tradetracker",
      "http://www.cateredskichalets.com/all-inclusive-cateredchalet/?tt=1992_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["842",
      "1",
      "ChessSets.co.uk",
      "",
      "chesssets.co.uk",
      "30",
      "tradetracker",
      "https://tc.tradetracker.net/?c=6064&m=0&a=282840"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["843",
      "1",
      "Cofaro.com",
      "",
      "cofaro.com",
      "100",
      "tradetracker",
      "https://cofaro.com/kitchen/?tt=21794_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["844",
      "1",
      "Dealbanana.co.uk ",
      "",
      "dealbanana.co.uk",
      "100",
      "tradetracker",
      "https://tc.tradetracker.net/?c=22680&m=0&a=282840"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["845",
      "1",
      "Dokteronline.com",
      "",
      "dokteronline.com",
      "21",
      "tradetracker",
      "https://www.dokteronline.com/online/pharmacy/?tt=1159_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["846",
      "1",
      "Eibmarkt.com",
      "",
      "eibmarkt.com",
      "100",
      "tradetracker",
      "http://www.eibmarkt.com/tt/index.html?tt=2427_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["847",
      "1",
      "Ezee-e.co.uk",
      "",
      "ezee-e.co.uk",
      "45",
      "tradetracker",
      "https://tc.tradetracker.net/?c=18755&m=0&a=282840"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["848",
      "1",
      "FlowerBulbsInc.co.uk",
      "",
      "flowerbulbsinc.co.uk",
      "30",
      "tradetracker",
      "http://flowerbulbsinc.co.uk/bol/?tt=4958_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["849",
      "1",
      "Flyerzone.co.uk",
      "",
      "flyerzone.co.uk",
      "30",
      "tradetracker",
      "http://www.flyerzone.co.uk/flyer/?tt=9479_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["850",
      "1",
      "Flyerzone.ie",
      "",
      "flyerzone.ie",
      "100",
      "tradetracker",
      "http://www.flyerzone.ie/aff/tradetracker/?tt=12229_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["851",
      "1",
      "Gardencentrekoeman.co.uk",
      "",
      "gardencentrekoeman.co.uk",
      "45",
      "tradetracker",
      "http://www.gardencentrekoeman.co.uk/bol/?tt=9888_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["852",
      "1",
      "Gardendecoration.co.uk",
      "",
      "gardendecoration.co.uk",
      "100",
      "tradetracker",
      "http://www.gardendecoration.co.uk/canvas/?tt=21790_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["853",
      "1",
      "Greatlittlebreaks.com",
      "",
      "greatlittlebreaks.com",
      "5",
      "tradetracker",
      "https://www.greatlittlebreaks.com/hotels/?tt=8948_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["854",
      "1",
      "Hair-plus.co.uk",
      "",
      "hair-plus.co.uk",
      "100",
      "tradetracker",
      "https://tc.tradetracker.net/?c=14219&m=0&a=282840"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["855",
      "1",
      "HarmanKardon UK",
      "",
      "harmankardon.co.uk",
      "15",
      "tradetracker",
      "https://tc.tradetracker.net/?c=10337&m=0&a=282840"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["856",
      "1",
      "Havens.co.uk",
      "",
      "havens.co.uk",
      "30",
      "tradetracker",
      "https://www.havens.co.uk/tt/?tt=6500_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["857",
      "1",
      "HEMA",
      "",
      "hema.com",
      "30",
      "tradetracker",
      "https://tc.tradetracker.net/?c=16267&m=0&a=282840"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["858",
      "1",
      "Heydudeshoes.co.uk",
      "",
      "heydudeshoes.co.uk",
      "100",
      "tradetracker",
      "http://www.heydudeshoes.co.uk/shoes/?tt=25349_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["859",
      "1",
      "Holidayparkspecials.co.uk",
      "",
      "holidayparkspecials.co.uk",
      "100",
      "tradetracker",
      "https://tc.tradetracker.net/?c=23304&m=0&a=282840"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["860",
      "1",
      "Horze.co.uk",
      "",
      "horze.co.uk",
      "10",
      "tradetracker",
      "https://tc.tradetracker.net/?c=24441&m=0&a=282840"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["861",
      "1",
      "Insjo.com",
      "",
      "insjo.com",
      "30",
      "tradetracker",
      "http://bag.insjo.com/bag/?tt=20669_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["862",
      "1",
      "Intergardshop.co.uk",
      "",
      "intergardshop.co.uk",
      "100",
      "tradetracker",
      "https://tc.tradetracker.net/?c=25046&m=0&a=282840"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["863",
      "1",
      "JBL UK",
      "",
      "uk.jbl.com",
      "15",
      "tradetracker",
      "https://tc.tradetracker.net/?c=10338&m=0&a=282840"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["864",
      "1",
      "Joccashop.com",
      "",
      "joccashop.com",
      "30",
      "tradetracker",
      "http://www.joccashop.com/gb/shop/home/?tt=25325_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["865",
      "1",
      "Keengardener.co.uk",
      "",
      "keengardener.co.uk",
      "30",
      "tradetracker",
      "https://www.keengardener.co.uk/garden/?tt=8412_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["866",
      "1",
      "LibertyCharms.co.uk",
      "",
      "libertycharms.co.uk",
      "100",
      "tradetracker",
      "https://tc.tradetracker.net/?c=25716&m=0&a=282840"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["867",
      "1",
      "Libertytrading.co.uk",
      "",
      "libertytrading.co.uk",
      "100",
      "tradetracker",
      "https://tc.tradetracker.net/?c=25715&m=0&a=282840"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["868",
      "1",
      "Linkwordlanguages.com",
      "",
      "linkwordlanguages.com",
      "90",
      "tradetracker",
      "http://www.linkwordlanguages.com/courses/?tt=10989_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["869",
      "1",
      "magazine.co.uk",
      "",
      "magazine.co.uk",
      "30",
      "tradetracker",
      "https://www.magazine.co.uk/subscriptions/?tt=10863_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["870",
      "1",
      "MarHotels.com",
      "",
      "marhotels.com",
      "30",
      "tradetracker",
      "https://tc.tradetracker.net/?c=5907&m=0&a=282840"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["871",
      "1",
      "MegaCasino.com - Cashback",
      "",
      "megacasino.com",
      "30",
      "tradetracker",
      "https://tc.tradetracker.net/?c=8154&m=0&a=282840"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["872",
      "1",
      "Minifridge.co.uk",
      "",
      "minifridge.co.uk",
      "30",
      "tradetracker",
      "http://www.minifridge.co.uk/fridge/?tt=8600_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["873",
      "1",
      "MummyAndLittleMe.co.uk",
      "",
      "mummyandlittleme.co.uk",
      "30",
      "tradetracker",
      "https://tc.tradetracker.net/?c=5492&m=0&a=282840"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["874",
      "1",
      "MySphereOfLife.com",
      "",
      "mysphereoflife.com",
      "30",
      "tradetracker",
      "https://tc.tradetracker.net/?c=8055&m=0&a=282840"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["875",
      "1",
      "Mytrendyphone.co.uk",
      "",
      "mytrendyphone.co.uk",
      "30",
      "tradetracker",
      "https://tc.tradetracker.net/?c=18854&m=0&a=282840"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["876",
      "1",
      "Newchic.com",
      "",
      "gb.newchic.com",
      "100",
      "tradetracker",
      "https://tc.tradetracker.net/?c=26839&m=0&a=282840"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["877",
      "1",
      "Outdoorcanvas.co.uk",
      "",
      "outdoorcanvas.co.uk",
      "100",
      "tradetracker",
      "http://www.outdoorcanvas.co.uk/canvas/?tt=13914_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["878",
      "1",
      "Oxfordbiolabs.com",
      "",
      "shop.oxfordbiolabs.com",
      "30",
      "tradetracker",
      "https://tc.tradetracker.net/?c=26010&m=0&a=282840"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["879",
      "1",
      "ParkVia.com",
      "",
      "parkvia.com",
      "30",
      "tradetracker",
      "https://www.parkvia.com/Park/index.aspx?tt=25144_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["880",
      "1",
      "Personal-Art.uk",
      "",
      "personal-art.uk",
      "30",
      "tradetracker",
      "https://www.personal-art.uk/popart/?tt=6001_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["881",
      "1",
      "Personalise.co.uk",
      "",
      "personalise.co.uk",
      "100",
      "tradetracker",
      "http://www.personalise.co.uk/gifts/?tt=25168_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["882",
      "1",
      "Plopsa.be",
      "",
      "plopsa.be",
      "100",
      "tradetracker",
      "http://www.plopsa.be/kabouter/?tt=16205_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["883",
      "1",
      "Postbeeld.com",
      "",
      "postbeeld.com",
      "100",
      "tradetracker",
      "http://www.postbeeld.com/tt/?tt=14814_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["884",
      "1",
      "Rattangardenfurniture.co.uk",
      "",
      "rattangardenfurniture.co.uk",
      "30",
      "tradetracker",
      "http://www.rattangardenfurniture.co.uk/rattan/?tt=12228_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["885",
      "1",
      "RegencyChess.co.uk",
      "",
      "regencychess.co.uk",
      "30",
      "tradetracker",
      "https://tc.tradetracker.net/?c=5684&m=0&a=282840"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["886",
      "1",
      "Rentalcars UK",
      "",
      "rentalcars.com",
      "7",
      "tradetracker",
      "https://tc.tradetracker.net/?c=22789&m=0&a=282840"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["887",
      "1",
      "Rugsdirect.co.uk",
      "",
      "rugsdirect.co.uk",
      "30",
      "tradetracker",
      "https://tc.tradetracker.net/?c=16896&m=0&a=282840"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["888",
      "1",
      "Sebogo.co.uk",
      "",
      "sebogo.co.uk",
      "100",
      "tradetracker",
      "http://www.sebogo.co.uk/travel/?tt=15054_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["889",
      "1",
      "Secrexy",
      "",
      "secrexy.com",
      "100",
      "tradetracker",
      "https://tc.tradetracker.net/?c=29741&m=0&a=282840"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["890",
      "1",
      "Seeds4Garden.com",
      "",
      "seeds4garden.com",
      "100",
      "tradetracker",
      "http://www.seeds4garden.com/bol/?tt=7199_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["891",
      "1",
      "Selectcamp.co.uk",
      "",
      "selectcamp.co.uk",
      "30",
      "tradetracker",
      "https://www.selectcamp.co.uk/Partners/TradeTracker/?tt=8295_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["892",
      "1",
      "Sendacuddly.co.uk",
      "",
      "sendacuddly.co.uk",
      "100",
      "tradetracker",
      "https://tc.tradetracker.net/?c=24761&m=0&a=282840"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["893",
      "1",
      "Sheds.co.uk",
      "",
      "sheds.co.uk",
      "100",
      "tradetracker",
      "https://www.sheds.co.uk/wood/?tt=11058_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["894",
      "1",
      "Simbagames.com Incentivised",
      "",
      "simbagames.com",
      "100",
      "tradetracker",
      "https://tc.tradetracker.net/?c=17484&m=0&a=282840"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["895",
      "1",
      "Smoko.com",
      "",
      "smoko.com",
      "30",
      "tradetracker",
      "https://tc.tradetracker.net/?c=13132&m=0&a=282840"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["896",
      "1",
      "Thegumclinic.com",
      "",
      "thegumclinic.com",
      "100",
      "tradetracker",
      "http://www.thegumclinic.com/health/?tt=8806_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["897",
      "1",
      "Toyday.co.uk",
      "",
      "toyday.co.uk",
      "30",
      "tradetracker",
      "http://www.toyday.co.uk/shop/modules/affiliate/Tradetracker/?tt=6274_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["898",
      "1",
      "Trilabshop.com",
      "",
      "trilabshop.com",
      "45",
      "tradetracker",
      "https://www.trilabshop.com/catalogo/?tt=22579_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["899",
      "1",
      "Tukshoes.co.uk",
      "",
      "tukshoes.co.uk",
      "100",
      "tradetracker",
      "http://www.tukshoes.co.uk/shoes/?tt=25350_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["900",
      "1",
      "Ukmeetandgreet.com",
      "",
      "ukmeetandgreet.com",
      "100",
      "tradetracker",
      "http://www.ukmeetandgreet.com/parking/index.php?tt=12172_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["901",
      "1",
      "Vidaxl.co.uk",
      "",
      "vidaxl.co.uk",
      "30",
      "tradetracker",
      "https://tc.tradetracker.net/?c=17939&m=0&a=282840"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["902",
      "1",
      "Vidaxl.ie",
      "",
      "vidaxl.ie",
      "30",
      "tradetracker",
      "https://tc.tradetracker.net/?c=18970&m=0&a=282840"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["903",
      "1",
      "Wallcanvas.co.uk",
      "",
      "wallcanvas.co.uk",
      "100",
      "tradetracker",
      "http://www.wallcanvas.co.uk/canvas/?tt=21825_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["904",
      "1",
      "Winterfieldsafes.co.uk",
      "",
      "winterfieldsafes.co.uk",
      "30",
      "tradetracker",
      "http://www.winterfieldsafes.co.uk/safes/?tt=8599_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["905",
      "1",
      "Xtrawine.com",
      "",
      "xtrawine.com",
      "60",
      "tradetracker",
      "http://www.xtrawine.com/prodotti/?tt=16648_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["906",
      "1",
      "Yoek.co.uk",
      "",
      "yoek.co.uk",
      "30",
      "tradetracker",
      "http://www.yoek.co.uk/tt/?tt=5436_0_282840_"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["907",
      "1",
      "YourSurprise.co.uk",
      "",
      "yoursurprise.co.uk",
      "30",
      "tradetracker",
      "https://www.yoursurprise.co.uk/tt/?tt=2805_0_282840_"]);
    }

    public function down(Schema $schema) : void
    {
        
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'121doc.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'20cogs.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'a4labels.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'aa-sports.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'alensa.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'altum.cc\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'anthoshop.gr\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'any-lamp.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'babymonitorsdirect.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'babysecurity.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'banggood.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'birdfood.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'birdfood.ie\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'birdforumshop.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'bivolino.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'blindsdirectonline.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'bridgetsboutique.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'bungalow.net\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'buyincoins.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'campingselection.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'cateredskichalets.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'chesssets.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'cofaro.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'dealbanana.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'dokteronline.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'eibmarkt.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ezee-e.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'flowerbulbsinc.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'flyerzone.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'flyerzone.ie\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'gardencentrekoeman.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'gardendecoration.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'greatlittlebreaks.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'hair-plus.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'harmankardon.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'havens.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'hema.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'heydudeshoes.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'holidayparkspecials.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'horze.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'insjo.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'intergardshop.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'uk.jbl.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'joccashop.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'keengardener.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'libertycharms.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'libertytrading.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'linkwordlanguages.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'magazine.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'marhotels.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'megacasino.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'minifridge.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'mummyandlittleme.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'mysphereoflife.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'mytrendyphone.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'gb.newchic.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'outdoorcanvas.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'shop.oxfordbiolabs.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'parkvia.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'personal-art.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'personalise.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'plopsa.be\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'postbeeld.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'rattangardenfurniture.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'regencychess.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'rentalcars.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'rugsdirect.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'sebogo.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'secrexy.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'seeds4garden.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'selectcamp.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'sendacuddly.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'sheds.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'simbagames.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'smoko.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'thegumclinic.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'toyday.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'trilabshop.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'tukshoes.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ukmeetandgreet.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'vidaxl.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'vidaxl.ie\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'wallcanvas.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'winterfieldsafes.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'xtrawine.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'yoek.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'yoursurprise.co.uk\'));');
    }
}