<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration.
 */
final class Version20191207163229 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["1",
      "1",
      "1Dayfly BE - ON HOLD - 10/12/2018",
      "https://ui.awin.com/images/upload/merchant/profile/8429.png?1494427599",
      "1dayfly.com",
      "awin",
      "8429"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["2",
      "1",
      "247 Home Rescue",
      "https://ui.awin.com/images/upload/merchant/profile/6729.png?1446723937",
      "247homerescue.co.uk",
      "awin",
      "6729"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["3",
      "1",
      "365 Tickets",
      "https://ui.awin.com/images/upload/merchant/profile/7055.png?1461234872",
      "365tickets.co.uk",
      "awin",
      "7055"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["4",
      "1",
      "365games.co.uk",
      "https://ui.awin.com/images/upload/merchant/profile/5778.png?1504102709",
      "365games.co.uk",
      "awin",
      "5778"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["5",
      "1",
      "5pointz",
      "https://ui.awin.com/images/upload/merchant/profile/5766.png?1478784895",
      "5pointz.co.uk",
      "awin",
      "5766"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["6",
      "1",
      "66fit Ltd",
      "https://ui.awin.com/images/upload/merchant/profile/1242.png?1425466364",
      "66fit.co.uk",
      "awin",
      "1242"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["7",
      "1",
      "991.com",
      "https://ui.awin.com/images/upload/merchant/profile/1552.png?1412425733",
      "991.com",
      "awin",
      "1552"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["8",
      "1",
      "A Quarter Of...",
      "https://ui.awin.com/images/upload/merchant/profile/978.png?1279019719",
      "aquarterof.co.uk",
      "awin",
      "978"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["9",
      "1",
      "APH",
      "https://ui.awin.com/images/upload/merchant/profile/1478.png?1277824246",
      "aph.com",
      "awin",
      "1478"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["10",
      "1",
      "ASICS IT",
      "https://ui.awin.com/images/upload/merchant/profile/7984.png?1502794357",
      "asics.com",
      "awin",
      "7984"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["11",
      "1",
      "ASICS IT Outlet",
      "https://ui.awin.com/images/upload/merchant/profile/9541.png?1526642030",
      "outlet.asics.com",
      "awin",
      "9541"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["12",
      "1",
      "AXA Travel Insurance",
      "https://ui.awin.com/images/upload/merchant/profile/7970.png?1492637361",
      "axatravelinsurance.com",
      "awin",
      "7970"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["13",
      "1",
      "Acess",
      "https://ui.awin.com/images/upload/merchant/profile/4435.png?1341228044",
      "acess.co.uk",
      "awin",
      "4435"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["14",
      "1",
      "Activity Superstore",
      "https://ui.awin.com/images/upload/merchant/profile/802.png?1312551933",
      "activitysuperstore.com",
      "awin",
      "802"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["15",
      "1",
      "Addison Lee App Download Campaign",
      "https://ui.awin.com/images/upload/merchant/profile/7005.png?1473858951",
      "addisonlee.com",
      "awin",
      "7005"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["16",
      "1",
      "Adnams",
      "https://ui.awin.com/images/upload/merchant/profile/2069.png?1486395651",
      "adnams.co.uk",
      "awin",
      "2069"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["17",
      "1",
      "Advanced MP3 Players",
      "https://ui.awin.com/images/upload/merchant/profile/361.png?1425290820",
      "advancedmp3players.co.uk",
      "awin",
      "361"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["18",
      "1",
      "Agoda FR",
      "https://ui.awin.com/images/upload/merchant/profile/7238.png?1469633584",
      "agoda.com",
      "awin",
      "7238"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["19",
      "1",
      "Airparks",
      "https://ui.awin.com/images/upload/merchant/profile/3494.png?1404393171",
      "airparks.co.uk",
      "awin",
      "3494"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["20",
      "1",
      "Al Fresco Holidays",
      "https://ui.awin.com/images/upload/merchant/profile/2556.png?1385488285",
      "alfresco-holidays.com",
      "awin",
      "2556"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["21",
      "1",
      "AllSaints",
      "https://ui.awin.com/images/upload/merchant/profile/3708.png?1347449256",
      "allsaints.com",
      "awin",
      "3708"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["22",
      "1",
      "Alpine Elements",
      "https://ui.awin.com/images/upload/merchant/profile/6615.png?1450375016",
      "alpineelements.co.uk",
      "awin",
      "6615"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["23",
      "1",
      "Amba Hotels",
      "https://ui.awin.com/images/upload/merchant/profile/6519.png?1442411301",
      "amba-hotel.com",
      "awin",
      "6519"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["24",
      "1",
      "Ample Bosom",
      "https://ui.awin.com/images/upload/merchant/profile/3469.png?1304584948",
      "amplebosom.com",
      "awin",
      "3469"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["25",
      "1",
      "Amstar DMC (US & Canada)",
      "https://ui.awin.com/images/upload/merchant/profile/5315.png?1429107154",
      "amstardmc.com",
      "awin",
      "5315"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["26",
      "1",
      "And So To Bed",
      "https://ui.awin.com/images/upload/merchant/profile/7913.png?1485521766",
      "andsotobed.co.uk",
      "awin",
      "7913"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["27",
      "1",
      "Angels Fancy Dress",
      "https://ui.awin.com/images/upload/merchant/profile/2610.png?1537523039",
      "fancydress.com",
      "awin",
      "2610"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["28",
      "1",
      "Apple Vacations (US & Canada)",
      "https://ui.awin.com/images/upload/merchant/profile/4014.png?1340307846",
      "applevacations.com",
      "awin",
      "4014"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["29",
      "1",
      "Applegate Marketplace",
      "https://ui.awin.com/images/upload/merchant/profile/6018.png?1426753318",
      "applegate.co.uk",
      "awin",
      "6018"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["30",
      "1",
      "Appleyard Flowers",
      "https://ui.awin.com/images/upload/merchant/profile/5837.png?1394552489",
      "appleyardflowers.com",
      "awin",
      "5837"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["31",
      "1",
      "Arena Flowers",
      "https://ui.awin.com/images/upload/merchant/profile/1635.png?1560943040",
      "arenaflowers.com",
      "awin",
      "1635"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["32",
      "1",
      "Argento",
      "https://ui.awin.com/images/upload/merchant/profile/2920.png?1312812016",
      "argento.com",
      "awin",
      "2920"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["33",
      "1",
      "Art of Metal",
      "https://ui.awin.com/images/upload/merchant/profile/1346.png?1393599818",
      "artofmetal.co.uk",
      "awin",
      "1346"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["34",
      "1",
      "Artisanti",
      "https://ui.awin.com/images/upload/merchant/profile/3082.png?1325252387",
      "artisanti.com",
      "awin",
      "3082"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["35",
      "1",
      "Asda George",
      "https://ui.awin.com/images/upload/merchant/profile/2925.png?1375874582",
      "asda.com",
      "awin",
      "2925"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["36",
      "1",
      "Astute Graphics",
      "https://ui.awin.com/images/upload/merchant/profile/7129.png?1463150146",
      "astutegraphics.com",
      "awin",
      "7129"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["37",
      "1",
      "Attraction Tickets Direct UK",
      "https://ui.awin.com/images/upload/merchant/profile/11015.png?1513615212",
      "attraction-tickets-direct.co.uk",
      "awin",
      "11015"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["38",
      "1",
      "Attractiontix",
      "https://ui.awin.com/images/upload/merchant/profile/1356.png?1569836913",
      "attractiontix.co.uk",
      "awin",
      "1356"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["39",
      "1",
      "Audible",
      "https://ui.awin.com/images/upload/merchant/profile/8095.png?1490099984",
      "audible.co.uk",
      "awin",
      "8095"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["40",
      "1",
      "Aurelia Skincare",
      "https://ui.awin.com/images/upload/merchant/profile/7911.png?1485438623",
      "aureliaskincare.com",
      "awin",
      "7911"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["41",
      "1",
      "Autodoc FR",
      "https://ui.awin.com/images/upload/merchant/profile/7845.png?1482481131",
      "auto-doc.fr",
      "awin",
      "7845"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["42",
      "1",
      "Awin",
      "https://ui.awin.com/images/upload/merchant/profile/3.png?1508413331",
      "awin.com",
      "awin",
      "3"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["43",
      "1",
      "B & Q",
      "https://ui.awin.com/images/upload/merchant/profile/483.png?1411577492",
      "diy.com",
      "awin",
      "483"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["44",
      "1",
      "BARGAINMAX LIMITED",
      "https://ui.awin.com/images/upload/merchant/profile/6617.png?1442852279",
      "bargainmax.co.uk",
      "awin",
      "6617"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["45",
      "1",
      "BOTB",
      "https://ui.awin.com/images/upload/merchant/profile/744.png?1547121195",
      "botb.com",
      "awin",
      "744"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["46",
      "1",
      "BULK POWDERS UK",
      "https://ui.awin.com/images/upload/merchant/profile/4822.png?1564676897",
      "bulkpowders.co.uk",
      "awin",
      "4822"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["47",
      "1",
      "BabyBjorn FR",
      "https://ui.awin.com/images/upload/merchant/profile/7871.png?1496932803",
      "babybjorn.fr",
      "awin",
      "7871"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["48",
      "1",
      "BabyBjorn UK",
      "https://ui.awin.com/images/upload/merchant/profile/7872.png?1496933165",
      "babybjorn.co.uk",
      "awin",
      "7872"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["49",
      "1",
      "Balance Me",
      "https://ui.awin.com/images/upload/merchant/profile/9866.png?1574942724",
      "balanceme.com",
      "awin",
      "9866"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["50",
      "1",
      "Barker and Stonehouse",
      "https://ui.awin.com/images/upload/merchant/profile/2879.png?1476795733",
      "barkerandstonehouse.co.uk",
      "awin",
      "2879"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["51",
      "1",
      "Barrhead Travel Insurance",
      "https://ui.awin.com/images/upload/merchant/profile/8075.png?1496920214",
      "barrheadtravel.co.uk",
      "awin",
      "8075"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["52",
      "1",
      "Base.com",
      "https://ui.awin.com/images/upload/merchant/profile/2694.png?1279821405",
      "base.com",
      "awin",
      "2694"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["53",
      "1",
      "Bateaux London",
      "https://ui.awin.com/images/upload/merchant/profile/5106.png?1387200048",
      "bateauxlondon.com",
      "awin",
      "5106"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["54",
      "1",
      "Baytree Interiors",
      "https://ui.awin.com/images/upload/merchant/profile/10898.png?1509030448",
      "baytree-interiors.co.uk",
      "awin",
      "10898"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["55",
      "1",
      "Beauty Expert UK",
      "https://ui.awin.com/images/upload/merchant/profile/988.png?1488804487",
      "beautyexpert.com",
      "awin",
      "988"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["56",
      "1",
      "Beauty Works Online",
      "https://ui.awin.com/images/upload/merchant/profile/5726.png?1398679921",
      "beautyworksonline.com",
      "awin",
      "5726"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["57",
      "1",
      "Beaverbrooks",
      "https://ui.awin.com/images/upload/merchant/profile/5856.png?1400856768",
      "beaverbrooks.co.uk",
      "awin",
      "5856"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["58",
      "1",
      "Bed Star Ltd",
      "https://ui.awin.com/images/upload/merchant/profile/962.png?1328006880",
      "bedstar.co.uk",
      "awin",
      "962"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["59",
      "1",
      "Bed and Bath Emporium",
      "https://ui.awin.com/images/upload/merchant/profile/8012.png?1488300325",
      "bedandbathemporium.com",
      "awin",
      "8012"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["60",
      "1",
      "Bedeck Home",
      "https://ui.awin.com/images/upload/merchant/profile/6321.png?1441794867",
      "bedeckhome.com",
      "awin",
      "6321"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["61",
      "1",
      "Bella Mia Boutique",
      "https://ui.awin.com/images/upload/merchant/profile/6812.png?1451912201",
      "bellamiaboutique.co.uk",
      "awin",
      "6812"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["62",
      "1",
      "Bernards Door Furniture Direct",
      "https://ui.awin.com/images/upload/merchant/profile/1287.png?1280327978",
      "doorfurnituredirect.co.uk",
      "awin",
      "1287"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["63",
      "1",
      "Bestseller UK",
      "https://ui.awin.com/images/upload/merchant/profile/9722.png?1497531439",
      "bestseller.com",
      "awin",
      "9722"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["64",
      "1",
      "Bestsellers EU",
      "https://ui.awin.com/images/upload/merchant/profile/8326.png?1574247854",
      "bestsellers.eu",
      "awin",
      "8326"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["65",
      "1",
      "Beter Bed BE",
      "https://ui.awin.com/images/upload/merchant/profile/8126.png?1494422809",
      "beterbed.be",
      "awin",
      "8126"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["66",
      "1",
      "Beter Bed NL",
      "https://ui.awin.com/images/upload/merchant/profile/8205.png?1494429558",
      "beterbed.nl",
      "awin",
      "8205"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["67",
      "1",
      "Big Green Smile DE",
      "https://ui.awin.com/images/upload/merchant/profile/9183.png?1494920833",
      "biggreensmile.de",
      "awin",
      "9183"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["68",
      "1",
      "Big Green Smile FR",
      "https://ui.awin.com/images/upload/merchant/profile/7339.png?1469633901",
      "biggreensmile.fr",
      "awin",
      "7339"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["69",
      "1",
      "Big Green Smile NL",
      "https://ui.awin.com/images/upload/merchant/profile/8237.png?1494422442",
      "biggreensmile.nl",
      "awin",
      "8237"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["70",
      "1",
      "Big Green Smile UK",
      "https://ui.awin.com/images/upload/merchant/profile/6095.png?1410274773",
      "biggreensmile.com",
      "awin",
      "6095"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["71",
      "1",
      "BitDefender",
      "https://ui.awin.com/images/upload/merchant/profile/2873.png?1539770837",
      "bitdefender.co.uk",
      "awin",
      "2873"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["72",
      "1",
      "Bloom Boutique",
      "https://ui.awin.com/images/upload/merchant/profile/12287.png?1549638884",
      "bloom-boutique.co.uk",
      "awin",
      "12287"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["73",
      "1",
      "Blooming Direct",
      "https://ui.awin.com/images/upload/merchant/profile/1670.png?1279709461",
      "bloomingdirect.com",
      "awin",
      "1670"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["74",
      "1",
      "Blossoming Flowers and Gifts",
      "https://ui.awin.com/images/upload/merchant/profile/5836.png?1496911474",
      "blossominggifts.com",
      "awin",
      "5836"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["75",
      "1",
      "Bluebella",
      "https://ui.awin.com/images/upload/merchant/profile/6756.png?1448548068",
      "bluebella.com",
      "awin",
      "6756"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["76",
      "1",
      "Bonusprint",
      "https://ui.awin.com/images/upload/merchant/profile/7506.png?1475825679",
      "bonusprint.co.uk",
      "awin",
      "7506"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["77",
      "1",
      "Boots.com",
      "https://ui.awin.com/images/upload/merchant/profile/2041.png?1557998494",
      "boots.com",
      "awin",
      "2041"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["78",
      "1",
      "Boux Avenue",
      "https://ui.awin.com/images/upload/merchant/profile/3454.png?1306942808",
      "bouxavenue.com",
      "awin",
      "3454"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["79",
      "1",
      "Britannia Hotels",
      "https://ui.awin.com/images/upload/merchant/profile/2225.png?1279727740",
      "britanniahotels.com",
      "awin",
      "2225"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["80",
      "1",
      "British Corner Shop",
      "https://ui.awin.com/images/upload/merchant/profile/3633.png?1450265187",
      "britishcornershop.co.uk",
      "awin",
      "3633"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["81",
      "1",
      "Britt's Superfoods",
      "https://ui.awin.com/images/upload/merchant/profile/10762.png?1510749348",
      "brittsuperfoods.co.uk",
      "awin",
      "10762"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["82",
      "1",
      "Budget Family Breaks",
      "https://ui.awin.com/images/upload/merchant/profile/3499.png?1333453466",
      "budgetfamilybreaks.co.uk",
      "awin",
      "3499"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["83",
      "1",
      "BudgetAir FR",
      "https://ui.awin.com/images/upload/merchant/profile/7722.png?1477936175",
      "budgetair.fr",
      "awin",
      "7722"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["84",
      "1",
      "Building Supplies Online",
      "https://ui.awin.com/images/upload/merchant/profile/3811.png?1531842754",
      "building-supplies-online.co.uk",
      "awin",
      "3811"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["85",
      "1",
      "Bunches.co.uk",
      "https://ui.awin.com/images/upload/merchant/profile/488.png?1509718115",
      "bunches.co.uk",
      "awin",
      "488"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["86",
      "1",
      "Burton UK",
      "https://ui.awin.com/images/upload/merchant/profile/1052.png?1426694978",
      "burton.co.uk",
      "awin",
      "1052"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["87",
      "1",
      "Buyagift.co.uk",
      "https://ui.awin.com/images/upload/merchant/profile/273.png?1276594219",
      "buyagift.co.uk",
      "awin",
      "273"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["88",
      "1",
      "Buysubscriptions.com - Immediate & BBC magazines",
      "https://ui.awin.com/images/upload/merchant/profile/1866.png?1444060422",
      "buysubscriptions.com",
      "awin",
      "1866"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["89",
      "1",
      "C.W. Sellors",
      "https://ui.awin.com/images/upload/merchant/profile/7154.png?1469523379",
      "cwsellors.co.uk",
      "awin",
      "7154"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["90",
      "1",
      "CW Clothes",
      "https://ui.awin.com/images/upload/merchant/profile/6423.png?1435932651",
      "cwclothes.co.uk",
      "awin",
      "6423"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["91",
      "1",
      "Cadbury Gifts Direct",
      "https://ui.awin.com/images/upload/merchant/profile/736.png?1280739877",
      "cadburygiftsdirect.co.uk",
      "awin",
      "736"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["92",
      "1",
      "Caledonian Travel",
      "https://ui.awin.com/images/upload/merchant/profile/5771.png?1392381687",
      "caledoniantravel.com",
      "awin",
      "5771"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["93",
      "1",
      "Calumet Photo NL",
      "https://ui.awin.com/images/upload/merchant/profile/8164.png?1494426473",
      "calumetphoto.nl",
      "awin",
      "8164"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["94",
      "1",
      "Camera King",
      "https://ui.awin.com/images/upload/merchant/profile/7469.png?1469618774",
      "cameraking.co.uk",
      "awin",
      "7469"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["95",
      "1",
      "Camper (US)",
      "https://ui.awin.com/images/upload/merchant/profile/11304.png?1509379516",
      "camper.com",
      "awin",
      "11304"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["96",
      "1",
      "Camping World",
      "https://ui.awin.com/images/upload/merchant/profile/3463.png?1302514112",
      "campingworld.co.uk",
      "awin",
      "3463"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["97",
      "1",
      "Cancer Research UK - Online Shop",
      "https://ui.awin.com/images/upload/merchant/profile/2584.png?1479901126",
      "cancerresearchuk.org",
      "awin",
      "2584"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["98",
      "1",
      "Canon (UK)",
      "https://ui.awin.com/images/upload/merchant/profile/7230.png?1467720856",
      "canon.co.uk",
      "awin",
      "7230"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["99",
      "1",
      "Car Parts 4 Less",
      "https://ui.awin.com/images/upload/merchant/profile/6409.png?1433329186",
      "carparts4less.co.uk",
      "awin",
      "6409"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["100",
      "1",
      "Carphone Warehouse",
      "https://ui.awin.com/images/upload/merchant/profile/2264.png?1317831763",
      "carphonewarehouse.com",
      "awin",
      "2264"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["101",
      "1",
      "Cartridge People",
      "https://ui.awin.com/images/upload/merchant/profile/3659.png?1568377620",
      "cartridgepeople.com",
      "awin",
      "3659"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["102",
      "1",
      "CartridgeMonkey",
      "https://ui.awin.com/images/upload/merchant/profile/808.png?1287563571",
      "cartridgemonkey.com",
      "awin",
      "808"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["103",
      "1",
      "Cast In Style",
      "https://ui.awin.com/images/upload/merchant/profile/307.png?1280223833",
      "castinstyle.co.uk",
      "awin",
      "307"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["104",
      "1",
      "Celtic & Co",
      "https://ui.awin.com/images/upload/merchant/profile/6301.png?1432893427",
      "celticandco.com",
      "awin",
      "6301"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["105",
      "1",
      "Centara Hotels & Resorts",
      "https://ui.awin.com/images/upload/merchant/profile/6849.png?1459863323",
      "centarahotelsresorts.com",
      "awin",
      "6849"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["106",
      "1",
      "Chain Reaction Cycles (US & Canada)",
      "https://ui.awin.com/images/upload/merchant/profile/5623.png?1556184271",
      "chainreactioncycles.com",
      "awin",
      "5623"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["107",
      "1",
      "Character-Online",
      "https://ui.awin.com/images/upload/merchant/profile/1868.png?1280746933",
      "character-online.com",
      "awin",
      "1868"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["108",
      "1",
      "Chargrilled",
      "https://ui.awin.com/images/upload/merchant/profile/2418.png?1279876497",
      "chargrilled.co.uk",
      "awin",
      "2418"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["109",
      "1",
      "Chocolate Trading Company",
      "https://ui.awin.com/images/upload/merchant/profile/350.png?1279706621",
      "chocolatetradingco.com",
      "awin",
      "350"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["110",
      "1",
      "Choice Furniture Superstore",
      "https://ui.awin.com/images/upload/merchant/profile/6817.png?1452696819",
      "choicefurnituresuperstore.co.uk",
      "awin",
      "6817"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["111",
      "1",
      "Christies Direct",
      "https://ui.awin.com/images/upload/merchant/profile/3379.png?1300878806",
      "christiesdirect.com",
      "awin",
      "3379"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["112",
      "1",
      "Circa",
      "https://ui.awin.com/images/upload/merchant/profile/11206.png?1504193166",
      "circa.co.uk",
      "awin",
      "11206"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["113",
      "1",
      "Citadines FR",
      "https://ui.awin.com/images/upload/merchant/profile/7366.png?1469634009",
      "citadines.com",
      "awin",
      "7366"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["114",
      "1",
      "Clare Florist",
      "https://ui.awin.com/images/upload/merchant/profile/1459.png?1561556854",
      "clareflorist.co.uk",
      "awin",
      "1459"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["115",
      "1",
      "Clarins FR",
      "https://ui.awin.com/images/upload/merchant/profile/7370.png?1469634020",
      "clarins.fr",
      "awin",
      "7370"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["116",
      "1",
      "Click Basin",
      "https://ui.awin.com/images/upload/merchant/profile/4850.png?1546959638",
      "clickbasin.co.uk",
      "awin",
      "4850"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["117",
      "1",
      "Clickgolf.co.uk",
      "https://ui.awin.com/images/upload/merchant/profile/2849.png?1371807377",
      "clickgolf.co.uk",
      "awin",
      "2849"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["118",
      "1",
      "Closet London",
      "https://ui.awin.com/images/upload/merchant/profile/7844.png?1487934026",
      "closetlondon.com",
      "awin",
      "7844"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["119",
      "1",
      "ConceptByCruise",
      "https://ui.awin.com/images/upload/merchant/profile/6097.png?1411117408",
      "conceptbycruise.com",
      "awin",
      "6097"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["120",
      "1",
      "Confetti",
      "https://ui.awin.com/images/upload/merchant/profile/2002.png?1509370297",
      "confetti.co.uk",
      "awin",
      "2002"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["121",
      "1",
      "Conrad Electronic",
      "https://ui.awin.com/images/upload/merchant/profile/5769.png?1390991065",
      "conrad.com",
      "awin",
      "5769"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["122",
      "1",
      "Converse UK",
      "https://ui.awin.com/images/upload/merchant/profile/7826.png?1548242147",
      "converse.com",
      "awin",
      "7826"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["123",
      "1",
      "Cosyfeet",
      "https://ui.awin.com/images/upload/merchant/profile/1806.png?1488976750",
      "cosyfeet.com",
      "awin",
      "1806"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["124",
      "1",
      "Coverwise.co.uk",
      "https://ui.awin.com/images/upload/merchant/profile/3622.png?1310563767",
      "coverwise.co.uk",
      "awin",
      "3622"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["125",
      "1",
      "Cox and Cox",
      "https://ui.awin.com/images/upload/merchant/profile/4746.png?1345634851",
      "coxandcox.co.uk",
      "awin",
      "4746"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["126",
      "1",
      "CraftStash",
      "https://ui.awin.com/images/upload/merchant/profile/7803.png?1551365063",
      "craftstash.co.uk",
      "awin",
      "7803"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["127",
      "1",
      "Crafters Companion Limited",
      "https://ui.awin.com/images/upload/merchant/profile/5655.png?1386580074",
      "crafterscompanion.co.uk",
      "awin",
      "5655"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["128",
      "1",
      "Create",
      "https://ui.awin.com/images/upload/merchant/profile/295.png?1438186839",
      "create.net",
      "awin",
      "295"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["129",
      "1",
      "Create and Craft",
      "https://ui.awin.com/images/upload/merchant/profile/4453.png?1568120808",
      "createandcraft.com",
      "awin",
      "4453"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["130",
      "1",
      "Crew Clothing",
      "https://ui.awin.com/images/upload/merchant/profile/5568.png?1438766358",
      "crewclothing.co.uk",
      "awin",
      "5568"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["131",
      "1",
      "Cuckooland",
      "https://ui.awin.com/images/upload/merchant/profile/6049.png?1502899628",
      "cuckooland.com",
      "awin",
      "6049"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["132",
      "1",
      "Culture Vulture",
      "https://ui.awin.com/images/upload/merchant/profile/5905.png?1526376503",
      "culturevulturedirect.co.uk",
      "awin",
      "5905"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["133",
      "1",
      "Currys PC World",
      "https://ui.awin.com/images/upload/merchant/profile/1599.png?1494204761",
      "currys.co.uk",
      "awin",
      "1599"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["134",
      "1",
      "Currys PC World Business",
      "https://ui.awin.com/images/upload/merchant/profile/2371.png?1485966141",
      "business.currys.co.uk",
      "awin",
      "2371"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["135",
      "1",
      "Currys PC World IE",
      "https://ui.awin.com/images/upload/merchant/profile/5297.png?1493979155",
      "currys.ie",
      "awin",
      "5297"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["136",
      "1",
      "Currys Partmaster",
      "https://ui.awin.com/images/upload/merchant/profile/1663.png?1453898275",
      "partmaster.co.uk",
      "awin",
      "1663"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["137",
      "1",
      "DC Thomson Shop",
      "https://ui.awin.com/images/upload/merchant/profile/7563.png?1558535202",
      "dcthomsonshop.co.uk",
      "awin",
      "7563"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["138",
      "1",
      "DDF Skincare (US)",
      "https://ui.awin.com/images/upload/merchant/profile/6174.png?1415701943",
      "ddfskincare.com",
      "awin",
      "6174"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["139",
      "1",
      "DEEN NL",
      "https://ui.awin.com/images/upload/merchant/profile/8258.png?1494427641",
      "deen.nl",
      "awin",
      "8258"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["140",
      "1",
      "Damart",
      "https://ui.awin.com/images/upload/merchant/profile/5473.png?1372937520",
      "damart.co.uk",
      "awin",
      "5473"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["141",
      "1",
      "Dance Direct",
      "https://ui.awin.com/images/upload/merchant/profile/6427.png?1457003689",
      "dancedirect.com",
      "awin",
      "6427"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["142",
      "1",
      "Dapper Street",
      "https://ui.awin.com/images/upload/merchant/profile/12306.png?1513944198",
      "dapperstreet.co.uk",
      "awin",
      "12306"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["143",
      "1",
      "Dare2b",
      "https://ui.awin.com/images/upload/merchant/profile/3780.png?1554812588",
      "dare2b.com",
      "awin",
      "3780"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["144",
      "1",
      "Darlings of Chelsea",
      "https://ui.awin.com/images/upload/merchant/profile/1148.png?1473254737",
      "darlingsofchelsea.co.uk",
      "awin",
      "1148"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["145",
      "1",
      "David Shuttle",
      "https://ui.awin.com/images/upload/merchant/profile/5654.png?1416600541",
      "davidshuttle.com",
      "awin",
      "5654"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["146",
      "1",
      "DealExtreme - DX.com (Global)",
      "https://ui.awin.com/images/upload/merchant/profile/6398.png?1433387905",
      "dx.com",
      "awin",
      "6398"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["147",
      "1",
      "Dealdigger NL - BE",
      "https://ui.awin.com/images/upload/merchant/profile/8161.png?1494425169",
      "dealdigger.nl",
      "awin",
      "8161"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["148",
      "1",
      "Decluttr (US)",
      "https://ui.awin.com/images/upload/merchant/profile/8053.png?1489073661",
      "decluttr.com",
      "awin",
      "8053"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["149",
      "1",
      "Deguise Toi FR",
      "https://ui.awin.com/images/upload/merchant/profile/7270.png?1500388418",
      "deguisetoi.fr",
      "awin",
      "7270"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["150",
      "1",
      "Denby Retail Ltd",
      "https://ui.awin.com/images/upload/merchant/profile/5855.png?1455276652",
      "denbypottery.com",
      "awin",
      "5855"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["151",
      "1",
      "Deramores",
      "https://ui.awin.com/images/upload/merchant/profile/5626.png?1498226487",
      "deramores.com",
      "awin",
      "5626"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["152",
      "1",
      "Designer Sofas 4U",
      "https://ui.awin.com/images/upload/merchant/profile/11282.png?1505339310",
      "designersofas4u.co.uk",
      "awin",
      "11282"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["153",
      "1",
      "Designerpaint",
      "https://ui.awin.com/images/upload/merchant/profile/3527.png?1525427302",
      "designerpaint.co.uk",
      "awin",
      "3527"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["154",
      "1",
      "DesperateSeller.co.uk",
      "https://ui.awin.com/images/upload/merchant/profile/355.png?1345473724",
      "desperateseller.co.uk",
      "awin",
      "355"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["155",
      "1",
      "Destination Killarney",
      "https://ui.awin.com/images/upload/merchant/profile/5551.png?1536932318",
      "destinationkillarney.ie",
      "awin",
      "5551"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["156",
      "1",
      "Devitt Insurance",
      "https://ui.awin.com/images/upload/merchant/profile/7801.png?1481712718",
      "devittinsurance.com",
      "awin",
      "7801"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["157",
      "1",
      "Dinnerly (US)",
      "https://ui.awin.com/images/upload/merchant/profile/10033.png?1501663375",
      "dinnerly.com",
      "awin",
      "10033"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["158",
      "1",
      "Direct Car Excess Insurance",
      "https://ui.awin.com/images/upload/merchant/profile/5252.png?1498056327",
      "direct-carexcess.co.uk",
      "awin",
      "5252"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["159",
      "1",
      "Direct Fireplaces",
      "https://ui.awin.com/images/upload/merchant/profile/6128.png?1416934630",
      "direct-fireplaces.com",
      "awin",
      "6128"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["160",
      "1",
      "Direct Stoves",
      "https://ui.awin.com/images/upload/merchant/profile/6129.png?1414082443",
      "directstoves.com",
      "awin",
      "6129"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["161",
      "1",
      "Direct-Travel.co.uk",
      "https://ui.awin.com/images/upload/merchant/profile/7014.png?1459867924",
      "direct-travel.co.uk",
      "awin",
      "7014"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["162",
      "1",
      "DirectSaveTelecom",
      "https://ui.awin.com/images/upload/merchant/profile/7818.png?1490020522",
      "directsavetelecom.co.uk",
      "awin",
      "7818"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["163",
      "1",
      "Discount Golf Store",
      "https://ui.awin.com/images/upload/merchant/profile/10153.png?1500375889",
      "discountgolfstore.co.uk",
      "awin",
      "10153"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["164",
      "1",
      "Discount Supplements",
      "https://ui.awin.com/images/upload/merchant/profile/2394.png?1452008654",
      "discount-supplements.co.uk",
      "awin",
      "2394"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["165",
      "1",
      "Dogalogue",
      "https://ui.awin.com/images/upload/merchant/profile/6059.png?1410433338",
      "dogalogue.com",
      "awin",
      "6059"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["166",
      "1",
      "Doggie Solutions Ltd",
      "https://ui.awin.com/images/upload/merchant/profile/4348.png?1335862715",
      "doggiesolutions.co.uk",
      "awin",
      "4348"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["167",
      "1",
      "Dorothy Perkins AU",
      "https://ui.awin.com/images/upload/merchant/profile/10765.png?1500624713",
      "dorothyperkins.com",
      "awin",
      "10765"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["168",
      "1",
      "Dorothy Perkins FR",
      "https://ui.awin.com/images/upload/merchant/profile/7458.png?1469634343",
      "dorothyperkins.fr",
      "awin",
      "7458"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["169",
      "1",
      "DressLily",
      "https://ui.awin.com/images/upload/merchant/profile/7138.png?1568813016",
      "dresslily.com",
      "awin",
      "7138"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["170",
      "1",
      "DrinkSupermarket.com",
      "https://ui.awin.com/images/upload/merchant/profile/3574.png?1565365959",
      "drinksupermarket.com",
      "awin",
      "3574"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["171",
      "1",
      "Drogisterij.net NL",
      "https://ui.awin.com/images/upload/merchant/profile/8227.png?1494428158",
      "drogisterij.net",
      "awin",
      "8227"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["172",
      "1",
      "E-File.com (US)",
      "https://ui.awin.com/images/upload/merchant/profile/6636.png?1442938105",
      "e-file.com",
      "awin",
      "6636"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["173",
      "1",
      "ESE Direct",
      "https://ui.awin.com/images/upload/merchant/profile/5464.png?1526461987",
      "esedirect.co.uk",
      "awin",
      "5464"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["174",
      "1",
      "ESPA Skincare (US)",
      "https://ui.awin.com/images/upload/merchant/profile/11307.png?1506110152",
      "espaskincare.com",
      "awin",
      "11307"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["175",
      "1",
      "Easirent (US & Canada)",
      "https://ui.awin.com/images/upload/merchant/profile/12023.png?1510852315",
      "easirent.com",
      "awin",
      "12023"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["176",
      "1",
      "Easy Lunettes FR",
      "https://ui.awin.com/images/upload/merchant/profile/7459.png?1518089506",
      "easylunettes.fr",
      "awin",
      "7459"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["177",
      "1",
      "Easycar",
      "https://ui.awin.com/images/upload/merchant/profile/5485.png?1375708890",
      "easycar.com",
      "awin",
      "5485"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["178",
      "1",
      "Easylife Group",
      "https://ui.awin.com/images/upload/merchant/profile/6396.png?1441204203",
      "easylifegroup.com",
      "awin",
      "6396"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["179",
      "1",
      "Easyvan",
      "https://ui.awin.com/images/upload/merchant/profile/5486.png?1375708912",
      "easyvan.com",
      "awin",
      "5486"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["180",
      "1",
      "Ebuyer",
      "https://ui.awin.com/images/upload/merchant/profile/2690.png?1309782658",
      "ebuyer.com",
      "awin",
      "2690"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["181",
      "1",
      "EdPlace",
      "https://ui.awin.com/images/upload/merchant/profile/6282.png?1488209188",
      "edplace.com",
      "awin",
      "6282"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["182",
      "1",
      "Edinburgh Airport",
      "https://ui.awin.com/images/upload/merchant/profile/5767.png?1390911218",
      "edinburghairport.com",
      "awin",
      "5767"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["183",
      "1",
      "Electrical Discount UK",
      "https://ui.awin.com/images/upload/merchant/profile/1311.png?1350477900",
      "electricaldiscountuk.co.uk",
      "awin",
      "1311"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["184",
      "1",
      "Electrical Experience",
      "https://ui.awin.com/images/upload/merchant/profile/2276.png?1398355586",
      "electricalexperience.co.uk",
      "awin",
      "2276"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["185",
      "1",
      "ElectroStub (US)",
      "https://ui.awin.com/images/upload/merchant/profile/6198.png?1420663265",
      "electrostub.com",
      "awin",
      "6198"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["186",
      "1",
      "Elke Dag Iets Leuks NL",
      "https://ui.awin.com/images/upload/merchant/profile/8141.png?1494920719",
      "elkedagietsleuks.nl",
      "awin",
      "8141"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["187",
      "1",
      "Encore Tickets",
      "https://ui.awin.com/images/upload/merchant/profile/7920.png?1508403577",
      "encoretickets.co.uk",
      "awin",
      "7920"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["188",
      "1",
      "Energy Helpline",
      "https://ui.awin.com/images/upload/merchant/profile/3793.png?1485179943",
      "energyhelpline.com",
      "awin",
      "3793"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["189",
      "1",
      "Eqvvs",
      "https://ui.awin.com/images/upload/merchant/profile/7684.png?1555420626",
      "eqvvs.co.uk",
      "awin",
      "7684"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["190",
      "1",
      "Essential Travel",
      "https://ui.awin.com/images/upload/merchant/profile/6222.png?1421418585",
      "essentialtravel.co.uk",
      "awin",
      "6222"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["191",
      "1",
      "Estyl PL",
      "https://ui.awin.com/images/upload/merchant/profile/10257.png?1500631277",
      "estyl.pl",
      "awin",
      "10257"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["192",
      "1",
      "Ethical Superstore",
      "https://ui.awin.com/images/upload/merchant/profile/3651.png?1313140980",
      "ethicalsuperstore.com",
      "awin",
      "3651"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["193",
      "1",
      "Etihad Airways UK",
      "https://ui.awin.com/images/upload/merchant/profile/5326.png?1547050021",
      "etihad.com",
      "awin",
      "5326"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["194",
      "1",
      "Eurail.com (Global)",
      "https://ui.awin.com/images/upload/merchant/profile/6370.png?1518517319",
      "eurail.com",
      "awin",
      "6370"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["195",
      "1",
      "Euro Car Parts",
      "https://ui.awin.com/images/upload/merchant/profile/3997.png?1333534048",
      "eurocarparts.com",
      "awin",
      "3997"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["196",
      "1",
      "Europcar (US & Canada)",
      "https://ui.awin.com/images/upload/merchant/profile/5861.png?1395413699",
      "europcar.com",
      "awin",
      "5861"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["197",
      "1",
      "Europcar FR",
      "https://ui.awin.com/images/upload/merchant/profile/7418.png?1469634198",
      "europcar.fr",
      "awin",
      "7418"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["198",
      "1",
      "Europcar International UK and Ireland",
      "https://ui.awin.com/images/upload/merchant/profile/6795.png?1456146679",
      "europcar.co.uk",
      "awin",
      "6795"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["199",
      "1",
      "Evans Clothing UK",
      "https://ui.awin.com/images/upload/merchant/profile/1423.png?1539339970",
      "evans.co.uk",
      "awin",
      "1423"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["200",
      "1",
      "Evengreener",
      "https://ui.awin.com/images/upload/merchant/profile/1453.png?1322050371",
      "evengreener.com",
      "awin",
      "1453"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["201",
      "1",
      "Evolutions Organics",
      "https://ui.awin.com/images/upload/merchant/profile/6263.png?1456405371",
      "evolutionorganics.co.uk",
      "awin",
      "6263"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["202",
      "1",
      "Exante UK",
      "https://ui.awin.com/images/upload/merchant/profile/5386.png?1539335409",
      "exantediet.com",
      "awin",
      "5386"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["203",
      "1",
      "Experience Days",
      "https://ui.awin.com/images/upload/merchant/profile/2201.png?1407154697",
      "experiencedays.co.uk",
      "awin",
      "2201"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["204",
      "1",
      "Expert Verdict",
      "https://ui.awin.com/images/upload/merchant/profile/1925.png?1280824598",
      "expertverdict.com",
      "awin",
      "1925"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["205",
      "1",
      "F.Hinds Jewellers",
      "https://ui.awin.com/images/upload/merchant/profile/1625.png?1279811961",
      "fhinds.co.uk",
      "awin",
      "1625"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["206",
      "1",
      "Facial Co AU",
      "https://ui.awin.com/images/upload/merchant/profile/11211.png?1504581856",
      "facialco.com.au",
      "awin",
      "11211"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["207",
      "1",
      "Farmacia Gallo Loreto IT",
      "https://ui.awin.com/images/upload/merchant/profile/9697.png?1563203933",
      "farmacialoreto.it",
      "awin",
      "9697"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["208",
      "1",
      "Fashion World",
      "https://ui.awin.com/images/upload/merchant/profile/3030.png?1287588165",
      "fashionworld.co.uk",
      "awin",
      "3030"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["209",
      "1",
      "FatFace (US & Canada)",
      "https://ui.awin.com/images/upload/merchant/profile/9275.png?1498664126",
      "fatface.com",
      "awin",
      "9275"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["210",
      "1",
      "Finsbury FR",
      "https://ui.awin.com/images/upload/merchant/profile/7457.png?1470821384",
      "finsbury-shoes.com",
      "awin",
      "7457"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["211",
      "1",
      "First TransPennine Express",
      "https://ui.awin.com/images/upload/merchant/profile/2829.png?1513773351",
      "tpexpress.co.uk",
      "awin",
      "2829"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["212",
      "1",
      "Fitness Options",
      "https://ui.awin.com/images/upload/merchant/profile/899.png?1280244148",
      "fitnessoptions.co.uk",
      "awin",
      "899"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["213",
      "1",
      "Flavourly",
      "https://ui.awin.com/images/upload/merchant/profile/6545.png?1557504462",
      "flavourly.com",
      "awin",
      "6545"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["214",
      "1",
      "FloridaTix",
      "https://ui.awin.com/images/upload/merchant/profile/5442.png?1513855872",
      "floridatix.com",
      "awin",
      "5442"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["215",
      "1",
      "Flower Station Ltd",
      "https://ui.awin.com/images/upload/merchant/profile/7004.png?1459782663",
      "flowerstation.co.uk",
      "awin",
      "7004"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["216",
      "1",
      "Flowercard",
      "https://ui.awin.com/images/upload/merchant/profile/2442.png?1447934687",
      "flowercard.co.uk",
      "awin",
      "2442"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["217",
      "1",
      "Fonehouse",
      "https://ui.awin.com/images/upload/merchant/profile/6224.png?1418743695",
      "fonehouse.co.uk",
      "awin",
      "6224"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["218",
      "1",
      "FoodSpring FR",
      "https://ui.awin.com/images/upload/merchant/profile/7790.png?1531229772",
      "foodspring.fr",
      "awin",
      "7790"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["219",
      "1",
      "Footasylum",
      "https://ui.awin.com/images/upload/merchant/profile/2832.png?1571923628",
      "footasylum.com",
      "awin",
      "2832"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["220",
      "1",
      "Fortnum & Mason",
      "https://ui.awin.com/images/upload/merchant/profile/5682.png?1444138180",
      "fortnumandmason.com",
      "awin",
      "5682"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["221",
      "1",
      "Foyles for books",
      "https://ui.awin.com/images/upload/merchant/profile/1414.png?1525100935",
      "foyles.co.uk",
      "awin",
      "1414"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["222",
      "1",
      "Fragrance Expert Limited",
      "https://ui.awin.com/images/upload/merchant/profile/5715.png?1386074338",
      "fragranceexpert.com",
      "awin",
      "5715"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["223",
      "1",
      "Fragrancedirect",
      "https://ui.awin.com/images/upload/merchant/profile/9.png?1342626159",
      "fragrancedirect.co.uk",
      "awin",
      "9"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["224",
      "1",
      "Fred Olsen Cruise Lines",
      "https://ui.awin.com/images/upload/merchant/profile/5919.png?1510740640",
      "fredolsencruises.com",
      "awin",
      "5919"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["225",
      "1",
      "French Connection UK",
      "https://ui.awin.com/images/upload/merchant/profile/3208.png?1406558567",
      "frenchconnection.com",
      "awin",
      "3208"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["226",
      "1",
      "Friction Free Shaving",
      "https://ui.awin.com/images/upload/merchant/profile/10853.png?1559660028",
      "ffs.co.uk",
      "awin",
      "10853"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["227",
      "1",
      "Frugi",
      "https://ui.awin.com/images/upload/merchant/profile/4459.png?1345112412",
      "welovefrugi.com",
      "awin",
      "4459"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["228",
      "1",
      "Furniture@Work®",
      "https://ui.awin.com/images/upload/merchant/profile/10994.png?1502874429",
      "furniture-work.co.uk",
      "awin",
      "10994"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["229",
      "1",
      "Furntastic",
      "https://ui.awin.com/images/upload/merchant/profile/6819.png?1468410057",
      "furntastic.co.uk",
      "awin",
      "6819"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["230",
      "1",
      "G Adventures",
      "https://ui.awin.com/images/upload/merchant/profile/2204.png?1444035170",
      "gadventures.com",
      "awin",
      "2204"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["231",
      "1",
      "GB Posters",
      "https://ui.awin.com/images/upload/merchant/profile/3810.png?1322748424",
      "gbposters.com",
      "awin",
      "3810"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["232",
      "1",
      "Gamola Golf",
      "https://ui.awin.com/images/upload/merchant/profile/2908.png?1404390105",
      "gamolagolf.co.uk",
      "awin",
      "2908"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["233",
      "1",
      "Garden Bird",
      "https://ui.awin.com/images/upload/merchant/profile/1352.png?1482421251",
      "gardenbird.co.uk",
      "awin",
      "1352"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["234",
      "1",
      "Garden Wildlife Direct",
      "https://ui.awin.com/images/upload/merchant/profile/6046.png?1407933792",
      "gardenwildlifedirect.co.uk",
      "awin",
      "6046"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["235",
      "1",
      "Gardening Direct",
      "https://ui.awin.com/images/upload/merchant/profile/1351.png?1299056697",
      "gardeningdirect.co.uk",
      "awin",
      "1351"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["236",
      "1",
      "Gatineau",
      "https://ui.awin.com/images/upload/merchant/profile/1818.png?1476264812",
      "gatineau.co.uk",
      "awin",
      "1818"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["237",
      "1",
      "Gazzetta Digitale IT",
      "https://ui.awin.com/images/upload/merchant/profile/10880.png?1502281117",
      "gazzetta.it",
      "awin",
      "10880"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["238",
      "1",
      "Gearbest (Global)",
      "https://ui.awin.com/images/upload/merchant/profile/6607.png?1550492471",
      "gearbest.com",
      "awin",
      "6607"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["239",
      "1",
      "Gemondo Jewellery",
      "https://ui.awin.com/images/upload/merchant/profile/2421.png?1562750083",
      "gemondo.com",
      "awin",
      "2421"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["240",
      "1",
      "Get Going Travel Insurance",
      "https://ui.awin.com/images/upload/merchant/profile/6015.png?1523350831",
      "getgoinginsurance.co.uk",
      "awin",
      "6015"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["241",
      "1",
      "Getting Personal",
      "https://ui.awin.com/images/upload/merchant/profile/1261.png?1568880655",
      "gettingpersonal.co.uk",
      "awin",
      "1261"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["242",
      "1",
      "GhostBikes.com",
      "https://ui.awin.com/images/upload/merchant/profile/2695.png?1439988774",
      "ghostbikes.com",
      "awin",
      "2695"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["243",
      "1",
      "Giffgaff Recycle",
      "https://ui.awin.com/images/upload/merchant/profile/9281.png?1540561005",
      "giffgaff.com",
      "awin",
      "9281"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["244",
      "1",
      "Giftpup",
      "https://ui.awin.com/images/upload/merchant/profile/9560.png?1497430964",
      "giftpup.com",
      "awin",
      "9560"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["245",
      "1",
      "Gigaclear",
      "https://ui.awin.com/images/upload/merchant/profile/11269.png?1575021505",
      "gigaclear.com",
      "awin",
      "11269"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["246",
      "1",
      "Gleneagle Hotel",
      "https://ui.awin.com/images/upload/merchant/profile/5552.png?1574155787",
      "gleneaglehotel.com",
      "awin",
      "5552"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["247",
      "1",
      "Glossybox FR",
      "https://ui.awin.com/images/upload/merchant/profile/7301.png?1469633755",
      "glossybox.fr",
      "awin",
      "7301"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["248",
      "1",
      "Glossybox UK",
      "https://ui.awin.com/images/upload/merchant/profile/3749.png?1315862579",
      "glossybox.co.uk",
      "awin",
      "3749"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["249",
      "1",
      "Glossybox US",
      "https://ui.awin.com/images/upload/merchant/profile/11583.png?1508509540",
      "glossybox.com",
      "awin",
      "11583"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["250",
      "1",
      "Go Groopie IE",
      "https://ui.awin.com/images/upload/merchant/profile/11153.png?1504076585",
      "gogroopie.ie",
      "awin",
      "11153"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["251",
      "1",
      "Go Outdoors",
      "https://ui.awin.com/images/upload/merchant/profile/3549.png?1389698275",
      "gooutdoors.co.uk",
      "awin",
      "3549"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["252",
      "1",
      "Goldsmiths",
      "https://ui.awin.com/images/upload/merchant/profile/2174.png?1276186844",
      "goldsmiths.co.uk",
      "awin",
      "2174"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["253",
      "1",
      "Golf Gear Direct",
      "https://ui.awin.com/images/upload/merchant/profile/5447.png?1371807183",
      "golfgeardirect.co.uk",
      "awin",
      "5447"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["254",
      "1",
      "Golf Support",
      "https://ui.awin.com/images/upload/merchant/profile/7714.png?1476876435",
      "golfsupport.com",
      "awin",
      "7714"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["255",
      "1",
      "Gourmesso FR",
      "https://ui.awin.com/images/upload/merchant/profile/7308.png?1469633782",
      "gourmesso.fr",
      "awin",
      "7308"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["256",
      "1",
      "Gousto",
      "https://ui.awin.com/images/upload/merchant/profile/5070.png?1523360007",
      "gousto.co.uk",
      "awin",
      "5070"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["257",
      "1",
      "Graham & Brown",
      "https://ui.awin.com/images/upload/merchant/profile/6718.png?1448388595",
      "grahambrown.com",
      "awin",
      "6718"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["258",
      "1",
      "Graze",
      "https://ui.awin.com/images/upload/merchant/profile/2340.png?1527784171",
      "graze.com",
      "awin",
      "2340"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["259",
      "1",
      "Graze Shop",
      "https://ui.awin.com/images/upload/merchant/profile/6888.png?1527784186",
      "uk.graze.com",
      "awin",
      "6888"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["260",
      "1",
      "Great British Meat",
      "https://ui.awin.com/images/upload/merchant/profile/7550.png?1501255769",
      "greatbritishmeat.com",
      "awin",
      "7550"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["261",
      "1",
      "Great Furniture Trading Company",
      "https://ui.awin.com/images/upload/merchant/profile/4431.png?1452608507",
      "greatfurnituretradingco.co.uk",
      "awin",
      "4431"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["262",
      "1",
      "Great Plains",
      "https://ui.awin.com/images/upload/merchant/profile/3209.png?1397742372",
      "greatplains.co.uk",
      "awin",
      "3209"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["263",
      "1",
      "GreatMagazines",
      "https://ui.awin.com/images/upload/merchant/profile/970.png?1378807023",
      "greatmagazines.co.uk",
      "awin",
      "970"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["264",
      "1",
      "Green People",
      "https://ui.awin.com/images/upload/merchant/profile/1613.png?1452079482",
      "greenpeople.co.uk",
      "awin",
      "1613"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["265",
      "1",
      "Greetz BE",
      "https://ui.awin.com/images/upload/merchant/profile/9008.png?1502371936",
      "greetz.be",
      "awin",
      "9008"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["266",
      "1",
      "Greetz NL",
      "https://ui.awin.com/images/upload/merchant/profile/9007.png?1498552748",
      "greetz.nl",
      "awin",
      "9007"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["267",
      "1",
      "Grow Gorgeous (US)",
      "https://ui.awin.com/images/upload/merchant/profile/7212.png?1570532386",
      "growgorgeous.com",
      "awin",
      "7212"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["268",
      "1",
      "Gtech.co.uk",
      "https://ui.awin.com/images/upload/merchant/profile/4315.png?1475683010",
      "gtech.co.uk",
      "awin",
      "4315"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["269",
      "1",
      "GymCube",
      "https://ui.awin.com/images/upload/merchant/profile/7173.png?1465296750",
      "gymcube.com",
      "awin",
      "7173"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["270",
      "1",
      "HP Canada",
      "https://ui.awin.com/images/upload/merchant/profile/7169.png?1466098406",
      "hp.com",
      "awin",
      "7169"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["271",
      "1",
      "HQhair UK",
      "https://ui.awin.com/images/upload/merchant/profile/3337.png?1488804666",
      "hqhair.com",
      "awin",
      "3337"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["272",
      "1",
      "Hallstone Direct",
      "https://ui.awin.com/images/upload/merchant/profile/3460.png?1410258768",
      "hallstonedirect.co.uk",
      "awin",
      "3460"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["273",
      "1",
      "Hamleys",
      "https://ui.awin.com/images/upload/merchant/profile/1205.png?1279722542",
      "hamleys.com",
      "awin",
      "1205"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["274",
      "1",
      "Happy Socks UK",
      "https://ui.awin.com/images/upload/merchant/profile/6524.png?1439998593",
      "happysocks.com",
      "awin",
      "6524"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["275",
      "1",
      "Hawkins Bazaar",
      "https://ui.awin.com/images/upload/merchant/profile/6313.png?1427276828",
      "hawkin.com",
      "awin",
      "6313"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["276",
      "1",
      "Haysom Interiors",
      "https://ui.awin.com/images/upload/merchant/profile/2043.png?1532705749",
      "haysominteriors.com",
      "awin",
      "2043"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["277",
      "1",
      "Hearing Direct",
      "https://ui.awin.com/images/upload/merchant/profile/3611.png?1314873431",
      "hearingdirect.com",
      "awin",
      "3611"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["278",
      "1",
      "High Street TV",
      "https://ui.awin.com/images/upload/merchant/profile/3759.png?1502277709",
      "highstreettv.com",
      "awin",
      "3759"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["279",
      "1",
      "Hippowaste",
      "https://ui.awin.com/images/upload/merchant/profile/8016.png?1497341754",
      "hippowaste.co.uk",
      "awin",
      "8016"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["280",
      "1",
      "Hive",
      "https://ui.awin.com/images/upload/merchant/profile/6363.png?1513247960",
      "hivehome.com",
      "awin",
      "6363"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["281",
      "1",
      "Holiday Extras",
      "https://ui.awin.com/images/upload/merchant/profile/3496.png?1535455336",
      "holidayextras.co.uk",
      "awin",
      "3496"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["282",
      "1",
      "Holland & Barrett (Ireland)",
      "https://ui.awin.com/images/upload/merchant/profile/6501.png?1463505486",
      "hollandandbarrett.ie",
      "awin",
      "6501"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["283",
      "1",
      "Home24 FR",
      "https://ui.awin.com/images/upload/merchant/profile/7442.png?1503495949",
      "home24.fr",
      "awin",
      "7442"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["284",
      "1",
      "Homecrafts.co.uk",
      "https://ui.awin.com/images/upload/merchant/profile/3937.png?1524739630",
      "homecrafts.co.uk",
      "awin",
      "3937"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["285",
      "1",
      "Hoppa UK",
      "https://ui.awin.com/images/upload/merchant/profile/6386.png?1433257728",
      "hoppa.com",
      "awin",
      "6386"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["286",
      "1",
      "Hot Hair",
      "https://ui.awin.com/images/upload/merchant/profile/9240.png?1500393670",
      "hothair.co.uk",
      "awin",
      "9240"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["287",
      "1",
      "Hotel Du Vin",
      "https://ui.awin.com/images/upload/merchant/profile/4808.png?1518599862",
      "hotelduvin.com",
      "awin",
      "4808"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["288",
      "1",
      "Hotels.com UK",
      "https://ui.awin.com/images/upload/merchant/profile/3617.png?1524745427",
      "hotels.co.uk",
      "awin",
      "3617"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["289",
      "1",
      "House Simple",
      "https://ui.awin.com/images/upload/merchant/profile/5580.png?1554907361",
      "housesimple.com",
      "awin",
      "5580"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["290",
      "1",
      "House of Bath",
      "https://ui.awin.com/images/upload/merchant/profile/3031.png?1294919388",
      "houseofbath.co.uk",
      "awin",
      "3031"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["291",
      "1",
      "HouseWeb",
      "https://ui.awin.com/images/upload/merchant/profile/111.png?1280307712",
      "houseweb.co.uk",
      "awin",
      "111"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["292",
      "1",
      "Hudson Shoes",
      "https://ui.awin.com/images/upload/merchant/profile/8764.png?1494420758",
      "hudsonshoes.com",
      "awin",
      "8764"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["293",
      "1",
      "Hughes",
      "https://ui.awin.com/images/upload/merchant/profile/3133.png?1547225308",
      "hughes.co.uk",
      "awin",
      "3133"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["294",
      "1",
      "Hunkemoller FR",
      "https://ui.awin.com/images/upload/merchant/profile/7508.png?1473689163",
      "hunkemoller.fr",
      "awin",
      "7508"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["295",
      "1",
      "Hunkemoller UK",
      "https://ui.awin.com/images/upload/merchant/profile/10870.png?1504021503",
      "hunkemoller.co.uk",
      "awin",
      "10870"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["296",
      "1",
      "Hussle",
      "https://ui.awin.com/images/upload/merchant/profile/3422.png?1560170937",
      "payasugym.com",
      "awin",
      "3422"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["297",
      "1",
      "Hyperoptic B2B",
      "https://ui.awin.com/images/upload/merchant/profile/6515.png?1511529486",
      "hyperoptic.com",
      "awin",
      "6515"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["298",
      "1",
      "I Saw It First",
      "https://ui.awin.com/images/upload/merchant/profile/10011.png?1502890540",
      "isawitfirst.com",
      "awin",
      "10011"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["299",
      "1",
      "ID Mobile",
      "https://ui.awin.com/images/upload/merchant/profile/6366.png?1559832218",
      "idmobile.co.uk",
      "awin",
      "6366"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["300",
      "1",
      "IT Governance",
      "https://ui.awin.com/images/upload/merchant/profile/6072.png?1409151979",
      "itgovernance.co.uk",
      "awin",
      "6072"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["301",
      "1",
      "IT Governance (US)",
      "https://ui.awin.com/images/upload/merchant/profile/8036.png?1488358800",
      "itgovernanceusa.com",
      "awin",
      "8036"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["302",
      "1",
      "Iceland",
      "https://ui.awin.com/images/upload/merchant/profile/7868.png?1486036577",
      "iceland.co.uk",
      "awin",
      "7868"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["303",
      "1",
      "IdealFit UK",
      "https://ui.awin.com/images/upload/merchant/profile/8745.png?1490776755",
      "idealfit.co.uk",
      "awin",
      "8745"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["304",
      "1",
      "Imagine Ireland",
      "https://ui.awin.com/images/upload/merchant/profile/2593.png?1279788128",
      "imagineireland.com",
      "awin",
      "2593"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["305",
      "1",
      "Indemne FR",
      "https://ui.awin.com/images/upload/merchant/profile/8054.png?1560410778",
      "indemne.fr",
      "awin",
      "8054"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["306",
      "1",
      "Informatique NL",
      "https://ui.awin.com/images/upload/merchant/profile/8508.png?1494429972",
      "informatique.nl",
      "awin",
      "8508"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["307",
      "1",
      "IngramSpark (Global)",
      "https://ui.awin.com/images/upload/merchant/profile/6257.png?1453492367",
      "ingramspark.com",
      "awin",
      "6257"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["308",
      "1",
      "Ink Factory",
      "https://ui.awin.com/images/upload/merchant/profile/260.png?1280326102",
      "inkfactory.com",
      "awin",
      "260"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["309",
      "1",
      "Inktweb NL - BE",
      "https://ui.awin.com/images/upload/merchant/profile/8465.png?1494422792",
      "inktweb.nl",
      "awin",
      "8465"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["310",
      "1",
      "Inov-8",
      "https://ui.awin.com/images/upload/merchant/profile/11023.png?1504605807",
      "inov-8.com",
      "awin",
      "11023"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["311",
      "1",
      "Instant Print",
      "https://ui.awin.com/images/upload/merchant/profile/6200.png?1438173820",
      "instantprint.co.uk",
      "awin",
      "6200"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["312",
      "1",
      "Insure 4 a Day",
      "https://ui.awin.com/images/upload/merchant/profile/5561.png?1375793436",
      "insure4aday.co.uk",
      "awin",
      "5561"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["313",
      "1",
      "InterRose",
      "https://ui.awin.com/images/upload/merchant/profile/129.png?1449673265",
      "interrose.co.uk",
      "awin",
      "129"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["314",
      "1",
      "Interrail by National Rail",
      "https://ui.awin.com/images/upload/merchant/profile/5797.png?1533211868",
      "myinterrail.co.uk",
      "awin",
      "5797"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["315",
      "1",
      "Ivory Isle Designs (US & Canada)",
      "https://ui.awin.com/images/upload/merchant/profile/7935.png?1488367993",
      "ivoryisledesigns.com",
      "awin",
      "7935"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["316",
      "1",
      "Iwantoneofthose.com UK",
      "https://ui.awin.com/images/upload/merchant/profile/1202.png?1525793000",
      "iwantoneofthose.com",
      "awin",
      "1202"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["317",
      "1",
      "JD Williams",
      "https://ui.awin.com/images/upload/merchant/profile/3032.png?1504706529",
      "jdwilliams.co.uk",
      "awin",
      "3032"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["318",
      "1",
      "JML Direct",
      "https://ui.awin.com/images/upload/merchant/profile/1252.png?1279786006",
      "jmldirect.com",
      "awin",
      "1252"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["319",
      "1",
      "JTX Fitness",
      "https://ui.awin.com/images/upload/merchant/profile/5606.png?1378736244",
      "jtxfitness.com",
      "awin",
      "5606"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["320",
      "1",
      "Jaarbeurs NL",
      "https://ui.awin.com/images/upload/merchant/profile/8315.png?1517473501",
      "vakantiebeurs.nl",
      "awin",
      "8315"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["321",
      "1",
      "Jacamo",
      "https://ui.awin.com/images/upload/merchant/profile/3026.png?1456764850",
      "jacamo.co.uk",
      "awin",
      "3026"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["322",
      "1",
      "Jack & Jones UK",
      "https://ui.awin.com/images/upload/merchant/profile/9731.png?1497881079",
      "jackjones.com",
      "awin",
      "9731"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["323",
      "1",
      "Jack's Flight Club",
      "https://ui.awin.com/images/upload/merchant/profile/12296.png?1516018408",
      "jacksflightclub.co.uk",
      "awin",
      "12296"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["324",
      "1",
      "Jam Golf",
      "https://ui.awin.com/images/upload/merchant/profile/7912.png?1508842668",
      "jamgolf.com",
      "awin",
      "7912"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["325",
      "1",
      "James Villa Holidays",
      "https://ui.awin.com/images/upload/merchant/profile/6628.png?1481102810",
      "jamesvillas.co.uk",
      "awin",
      "6628"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["326",
      "1",
      "Jersey Plants Direct",
      "https://ui.awin.com/images/upload/merchant/profile/1485.png?1280305149",
      "jerseyplantsdirect.com",
      "awin",
      "1485"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["327",
      "1",
      "JigsawPuzzle.co.uk",
      "https://ui.awin.com/images/upload/merchant/profile/7228.png?1494856058",
      "jigsaw-and-more.co.uk",
      "awin",
      "7228"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["328",
      "1",
      "Jura Watches",
      "https://ui.awin.com/images/upload/merchant/profile/7153.png?1469523168",
      "jurawatches.co.uk",
      "awin",
      "7153"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["329",
      "1",
      "Just Go Holidays",
      "https://ui.awin.com/images/upload/merchant/profile/7747.png?1525174350",
      "justgoholidays.com",
      "awin",
      "7747"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["330",
      "1",
      "JustPark",
      "https://ui.awin.com/images/upload/merchant/profile/6188.png?1423491381",
      "justpark.com",
      "awin",
      "6188"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["331",
      "1",
      "JustYou",
      "https://ui.awin.com/images/upload/merchant/profile/3553.png?1554999041",
      "justyou.co.uk",
      "awin",
      "3553"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["332",
      "1",
      "Kids Cavern",
      "https://ui.awin.com/images/upload/merchant/profile/9249.png?1567769662",
      "kidscavern.co.uk",
      "awin",
      "9249"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["333",
      "1",
      "Kings Will Dream",
      "https://ui.awin.com/images/upload/merchant/profile/8066.png?1517222670",
      "kingswilldream.com",
      "awin",
      "8066"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["334",
      "1",
      "Kingsmills Hotel",
      "https://ui.awin.com/images/upload/merchant/profile/6373.png?1430993824",
      "kingsmillshotel.com",
      "awin",
      "6373"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["335",
      "1",
      "Kitbag Ltd",
      "https://ui.awin.com/images/upload/merchant/profile/686.png?1509365696",
      "kitbag.com",
      "awin",
      "686"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["336",
      "1",
      "Koi Footwear",
      "https://ui.awin.com/images/upload/merchant/profile/12207.png?1512553998",
      "koifootwear.com",
      "awin",
      "12207"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["337",
      "1",
      "Komplett.ie",
      "https://ui.awin.com/images/upload/merchant/profile/8912.png?1492154777",
      "komplett.ie",
      "awin",
      "8912"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["338",
      "1",
      "Konditor & Cook",
      "https://ui.awin.com/images/upload/merchant/profile/7690.png?1475682791",
      "konditor.co.uk",
      "awin",
      "7690"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["339",
      "1",
      "Kukoon",
      "https://ui.awin.com/images/upload/merchant/profile/6676.png?1481020506",
      "kukoon.com",
      "awin",
      "6676"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["340",
      "1",
      "LA Muscle",
      "https://ui.awin.com/images/upload/merchant/profile/3253.png?1294257739",
      "lamuscle.com",
      "awin",
      "3253"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["341",
      "1",
      "LATAM FR",
      "https://ui.awin.com/images/upload/merchant/profile/8004.png?1488192352",
      "lan.com",
      "awin",
      "8004"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["342",
      "1",
      "LED Bulbs",
      "https://ui.awin.com/images/upload/merchant/profile/6054.png?1410440611",
      "ledbulbs.co.uk",
      "awin",
      "6054"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["343",
      "1",
      "LSA International",
      "https://ui.awin.com/images/upload/merchant/profile/6367.png?1523360879",
      "lsa-international.com",
      "awin",
      "6367"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["344",
      "1",
      "Land's End",
      "https://ui.awin.com/images/upload/merchant/profile/6542.png?1534842701",
      "landsend.co.uk",
      "awin",
      "6542"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["345",
      "1",
      "Lastminute Ireland",
      "https://ui.awin.com/images/upload/merchant/profile/4363.png?1339517147",
      "lastminute.ie",
      "awin",
      "4363"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["346",
      "1",
      "Latest in Beauty",
      "https://ui.awin.com/images/upload/merchant/profile/7698.png?1478528883",
      "latestinbeauty.com",
      "awin",
      "7698"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["347",
      "1",
      "LaughStub (US)",
      "https://ui.awin.com/images/upload/merchant/profile/6197.png?1420663236",
      "laughstub.com",
      "awin",
      "6197"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["348",
      "1",
      "Laura Ashley",
      "https://ui.awin.com/images/upload/merchant/profile/2364.png?1350377249",
      "lauraashley.com",
      "awin",
      "2364"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["349",
      "1",
      "Laybrook Ltd",
      "https://ui.awin.com/images/upload/merchant/profile/5172.png?1471337687",
      "laybrook.com",
      "awin",
      "5172"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["350",
      "1",
      "Leisure Lakes Bikes",
      "https://ui.awin.com/images/upload/merchant/profile/6914.png?1457361257",
      "leisurelakesbikes.com",
      "awin",
      "6914"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["351",
      "1",
      "Liberty Games",
      "https://ui.awin.com/images/upload/merchant/profile/7567.png?1476885412",
      "libertygames.co.uk",
      "awin",
      "7567"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["352",
      "1",
      "Life and Looks",
      "https://ui.awin.com/images/upload/merchant/profile/2068.png?1480670364",
      "lifeandlooks.com",
      "awin",
      "2068"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["353",
      "1",
      "Lights 4 Living",
      "https://ui.awin.com/images/upload/merchant/profile/5723.png?1461149224",
      "lights4living.com",
      "awin",
      "5723"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["354",
      "1",
      "Lights.co.uk",
      "https://ui.awin.com/images/upload/merchant/profile/7574.png?1473253482",
      "lights.co.uk",
      "awin",
      "7574"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["355",
      "1",
      "Lights.ie",
      "https://ui.awin.com/images/upload/merchant/profile/10896.png?1502797247",
      "lights.ie",
      "awin",
      "10896"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["356",
      "1",
      "Ligo Electronics Ltd",
      "https://ui.awin.com/images/upload/merchant/profile/1246.png?1505812777",
      "ligo.co.uk",
      "awin",
      "1246"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["357",
      "1",
      "Linens Bargains (US & Canada)",
      "https://ui.awin.com/images/upload/merchant/profile/4068.png?1331871019",
      "linensbargains.com",
      "awin",
      "4068"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["358",
      "1",
      "Living DNA",
      "https://ui.awin.com/images/upload/merchant/profile/7712.png?1479733391",
      "livingdna.com",
      "awin",
      "7712"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["359",
      "1",
      "LivingSocial - Ireland",
      "https://ui.awin.com/images/upload/merchant/profile/4319.png?1363626716",
      "livingsocial.ie",
      "awin",
      "4319"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["360",
      "1",
      "Lloyds Pharmacy",
      "https://ui.awin.com/images/upload/merchant/profile/2453.png?1436442190",
      "lloydspharmacy.com",
      "awin",
      "2453"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["361",
      "1",
      "Lloyds Pharmacy - Online Doctor",
      "https://ui.awin.com/images/upload/merchant/profile/2876.png?1490604422",
      "onlinedoctor.lloydspharmacy.com",
      "awin",
      "2876"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["362",
      "1",
      "Locks Online",
      "https://ui.awin.com/images/upload/merchant/profile/838.png?1396540731",
      "locksonline.co.uk",
      "awin",
      "838"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["363",
      "1",
      "Loews Hotels (Global)",
      "https://ui.awin.com/images/upload/merchant/profile/7745.png?1533157365",
      "loewshotels.com",
      "awin",
      "7745"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["364",
      "1",
      "Logitravel UK",
      "https://ui.awin.com/images/upload/merchant/profile/8094.png?1491379667",
      "logitravel.co.uk",
      "awin",
      "8094"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["365",
      "1",
      "Lol Travel IT",
      "https://ui.awin.com/images/upload/merchant/profile/9522.png?1558953930",
      "lol.travel",
      "awin",
      "9522"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["366",
      "1",
      "London Theatre Direct",
      "https://ui.awin.com/images/upload/merchant/profile/610.png?1447084981",
      "londontheatredirect.com",
      "awin",
      "610"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["367",
      "1",
      "Lonely Planet Publications",
      "https://ui.awin.com/images/upload/merchant/profile/1238.png?1280756334",
      "lonelyplanet.com",
      "awin",
      "1238"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["368",
      "1",
      "Looking4 – Airport Parking UK",
      "https://ui.awin.com/images/upload/merchant/profile/6316.png?1426598898",
      "looking4.com",
      "awin",
      "6316"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["369",
      "1",
      "Loud Clothing",
      "https://ui.awin.com/images/upload/merchant/profile/6791.png?1450286338",
      "loudshop.com",
      "awin",
      "6791"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["370",
      "1",
      "Lovell Rugby Limited",
      "https://ui.awin.com/images/upload/merchant/profile/2517.png?1502096221",
      "lovell-rugby.co.uk",
      "awin",
      "2517"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["371",
      "1",
      "Lovell Soccer",
      "https://ui.awin.com/images/upload/merchant/profile/2518.png?1485443090",
      "lovellsoccer.co.uk",
      "awin",
      "2518"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["372",
      "1",
      "Luminaire FR",
      "https://ui.awin.com/images/upload/merchant/profile/7498.png?1469634484",
      "luminaire.fr",
      "awin",
      "7498"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["373",
      "1",
      "M&Co",
      "https://ui.awin.com/images/upload/merchant/profile/1685.png?1347467886",
      "mandco.com",
      "awin",
      "1685"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["374",
      "1",
      "MAGIX & VEGAS Creative Software UK",
      "https://ui.awin.com/images/upload/merchant/profile/1684.png?1473941793",
      "magix.co.uk",
      "awin",
      "1684"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["375",
      "1",
      "Macback",
      "https://ui.awin.com/images/upload/merchant/profile/9003.png?1492777352",
      "macback.co.uk",
      "awin",
      "9003"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["376",
      "1",
      "Macdonald Hotels",
      "https://ui.awin.com/images/upload/merchant/profile/1963.png?1279811320",
      "macdonaldhotels.co.uk",
      "awin",
      "1963"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["377",
      "1",
      "Machine Mart",
      "https://ui.awin.com/images/upload/merchant/profile/3131.png?1290162119",
      "machinemart.co.uk",
      "awin",
      "3131"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["378",
      "1",
      "Madam Rage",
      "https://ui.awin.com/images/upload/merchant/profile/5799.png?1393592014",
      "madamrage.com",
      "awin",
      "5799"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["379",
      "1",
      "Maille (US)",
      "https://ui.awin.com/images/upload/merchant/profile/8747.png?1491937790",
      "maille.com",
      "awin",
      "8747"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["380",
      "1",
      "Malmaison",
      "https://ui.awin.com/images/upload/merchant/profile/4818.png?1518599966",
      "malmaison.com",
      "awin",
      "4818"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["381",
      "1",
      "Mankind UK",
      "https://ui.awin.com/images/upload/merchant/profile/987.png?1488804453",
      "mankind.co.uk",
      "awin",
      "987"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["382",
      "1",
      "Manuka Doctor (US)",
      "https://ui.awin.com/images/upload/merchant/profile/6987.png?1458746190",
      "manukadoctor.com",
      "awin",
      "6987"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["383",
      "1",
      "Mappin & Webb",
      "https://ui.awin.com/images/upload/merchant/profile/11017.png?1508854056",
      "mappinandwebb.com",
      "awin",
      "11017"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["384",
      "1",
      "Marisota",
      "https://ui.awin.com/images/upload/merchant/profile/3029.png?1522154532",
      "marisota.co.uk",
      "awin",
      "3029"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["385",
      "1",
      "Mark Warner",
      "https://ui.awin.com/images/upload/merchant/profile/6146.png?1460455535",
      "markwarner.co.uk",
      "awin",
      "6146"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["386",
      "1",
      "Mattress Man",
      "https://ui.awin.com/images/upload/merchant/profile/1298.png?1385636633",
      "mattressman.co.uk",
      "awin",
      "1298"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["387",
      "1",
      "Mattressnextday",
      "https://ui.awin.com/images/upload/merchant/profile/7807.png?1488187380",
      "mattressnextday.co.uk",
      "awin",
      "7807"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["388",
      "1",
      "MaxCleavage.com",
      "https://ui.awin.com/images/upload/merchant/profile/3003.png?1392734389",
      "maxcleavage.com",
      "awin",
      "3003"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["389",
      "1",
      "Maximuscle",
      "https://ui.awin.com/images/upload/merchant/profile/1495.png?1557912761",
      "maxinutrition.com",
      "awin",
      "1495"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["390",
      "1",
      "Medical Travel insurance",
      "https://ui.awin.com/images/upload/merchant/profile/7015.png?1459928591",
      "medicaltravelinsurance.co.uk",
      "awin",
      "7015"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["391",
      "1",
      "Megakoszulki PL",
      "https://ui.awin.com/images/upload/merchant/profile/10170.png?1500616581",
      "megakoszulki.pl",
      "awin",
      "10170"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["392",
      "1",
      "Memory Foam Warehouse",
      "https://ui.awin.com/images/upload/merchant/profile/1334.png?1559656842",
      "memoryfoamwarehouse.co.uk",
      "awin",
      "1334"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["393",
      "1",
      "Menkind",
      "https://ui.awin.com/images/upload/merchant/profile/3135.png?1504526258",
      "menkind.co.uk",
      "awin",
      "3135"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["394",
      "1",
      "MerchandisingPlaza FR",
      "https://ui.awin.com/images/upload/merchant/profile/7484.png?1469634435",
      "merchandisingplaza.com",
      "awin",
      "7484"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["395",
      "1",
      "Mesh Affiliate Programme",
      "https://ui.awin.com/images/upload/merchant/profile/3936.png?1464676530",
      "meshcomputers.com",
      "awin",
      "3936"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["396",
      "1",
      "Metrofone",
      "https://ui.awin.com/images/upload/merchant/profile/6506.png?1435320785",
      "metrofone.co.uk",
      "awin",
      "6506"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["397",
      "1",
      "MiDrive",
      "https://ui.awin.com/images/upload/merchant/profile/11224.png?1504693052",
      "midrive.com",
      "awin",
      "11224"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["398",
      "1",
      "Mindful Chef",
      "https://ui.awin.com/images/upload/merchant/profile/7921.png?1490025398",
      "mindfulchef.com",
      "awin",
      "7921"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["399",
      "1",
      "Minerva Crafts",
      "https://ui.awin.com/images/upload/merchant/profile/5270.png?1360689517",
      "minervacrafts.com",
      "awin",
      "5270"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["400",
      "1",
      "Mio Skincare (US)",
      "https://ui.awin.com/images/upload/merchant/profile/6642.png?1473935618",
      "mioskincare.com",
      "awin",
      "6642"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["401",
      "1",
      "Miss Pap",
      "https://ui.awin.com/images/upload/merchant/profile/6638.png?1481792076",
      "misspap.com",
      "awin",
      "6638"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["402",
      "1",
      "Miss Selfridge UK",
      "https://ui.awin.com/images/upload/merchant/profile/2417.png?1472718949",
      "missselfridge.com",
      "awin",
      "2417"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["403",
      "1",
      "Mister Spex UK",
      "https://ui.awin.com/images/upload/merchant/profile/6769.png?1454922769",
      "misterspex.co.uk",
      "awin",
      "6769"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["404",
      "1",
      "Mobiles.co.uk",
      "https://ui.awin.com/images/upload/merchant/profile/380.png?1383065858",
      "mobiles.co.uk",
      "awin",
      "380"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["405",
      "1",
      "Moda in Pelle",
      "https://ui.awin.com/images/upload/merchant/profile/2527.png?1567170330",
      "modainpelle.com",
      "awin",
      "2527"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["406",
      "1",
      "Modanisa FR",
      "https://ui.awin.com/images/upload/merchant/profile/7927.png?1486040083",
      "modanisa.com",
      "awin",
      "7927"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["407",
      "1",
      "Momox FR",
      "https://ui.awin.com/images/upload/merchant/profile/7481.png?1469634422",
      "momox-shop.fr",
      "awin",
      "7481"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["408",
      "1",
      "MoneySupermarket",
      "https://ui.awin.com/images/upload/merchant/profile/12049.png?1565174830",
      "moneysupermarket.com",
      "awin",
      "12049"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["409",
      "1",
      "Monsoon FR",
      "https://ui.awin.com/images/upload/merchant/profile/7480.png?1513772165",
      "monsoon.co.uk",
      "awin",
      "7480"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["410",
      "1",
      "Monster Pet Supplies",
      "https://ui.awin.com/images/upload/merchant/profile/5483.png?1439217150",
      "monsterpetsupplies.co.uk",
      "awin",
      "5483"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["411",
      "1",
      "Moo FR",
      "https://ui.awin.com/images/upload/merchant/profile/9909.png?1498142959",
      "moo.com",
      "awin",
      "9909"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["412",
      "1",
      "Moonpig UK",
      "https://ui.awin.com/images/upload/merchant/profile/12199.png?1514910978",
      "moonpig.com",
      "awin",
      "12199"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["413",
      "1",
      "Morphy Richards",
      "https://ui.awin.com/images/upload/merchant/profile/4406.png?1341218993",
      "morphyrichards.co.uk",
      "awin",
      "4406"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["414",
      "1",
      "Muscle Food",
      "https://ui.awin.com/images/upload/merchant/profile/11002.png?1556103728",
      "musclefood.com",
      "awin",
      "11002"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["415",
      "1",
      "Museum Selection",
      "https://ui.awin.com/images/upload/merchant/profile/5904.png?1406560082",
      "museumselection.co.uk",
      "awin",
      "5904"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["416",
      "1",
      "Music Magpie",
      "https://ui.awin.com/images/upload/merchant/profile/5792.png?1554459150",
      "musicmagpie.co.uk",
      "awin",
      "5792"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["417",
      "1",
      "My Business Profile",
      "https://ui.awin.com/images/upload/merchant/profile/6181.png?1513246769",
      "mybusinessprofile.com",
      "awin",
      "6181"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["418",
      "1",
      "My Photo Puzzle",
      "https://ui.awin.com/images/upload/merchant/profile/3122.png?1287044275",
      "myphotopuzzle.co.uk",
      "awin",
      "3122"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["419",
      "1",
      "MyM&Ms FR",
      "https://ui.awin.com/images/upload/merchant/profile/8772.png?1491839572",
      "mms.com",
      "awin",
      "8772"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["420",
      "1",
      "Myprotein (Canada)",
      "https://ui.awin.com/images/upload/merchant/profile/7174.png?1541440418",
      "ca.myprotein.com",
      "awin",
      "7174"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["421",
      "1",
      "Myprotein (US)",
      "https://ui.awin.com/images/upload/merchant/profile/5679.png?1541440433",
      "us.myprotein.com",
      "awin",
      "5679"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["422",
      "1",
      "Myprotein UK",
      "https://ui.awin.com/images/upload/merchant/profile/3196.png?1540285081",
      "myprotein.com",
      "awin",
      "3196"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["423",
      "1",
      "NONNON",
      "https://ui.awin.com/images/upload/merchant/profile/3634.png?1314973500",
      "nonnon.co.uk",
      "awin",
      "3634"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["424",
      "1",
      "NOW TV",
      "https://ui.awin.com/images/upload/merchant/profile/11006.png?1505913762",
      "nowtv.com",
      "awin",
      "11006"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["425",
      "1",
      "Names.co.uk",
      "https://ui.awin.com/images/upload/merchant/profile/897.png?1481123699",
      "names.co.uk",
      "awin",
      "897"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["426",
      "1",
      "National Gallery",
      "https://ui.awin.com/images/upload/merchant/profile/3525.png?1497543230",
      "nationalgallery.co.uk",
      "awin",
      "3525"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["427",
      "1",
      "National Holidays",
      "https://ui.awin.com/images/upload/merchant/profile/5287.png?1368622152",
      "nationalholidays.com",
      "awin",
      "5287"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["428",
      "1",
      "National Pen",
      "https://ui.awin.com/images/upload/merchant/profile/6351.png?1429875872",
      "pens.com",
      "awin",
      "6351"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["429",
      "1",
      "National Trust Holidays",
      "https://ui.awin.com/images/upload/merchant/profile/12045.png?1512656936",
      "nationaltrust.org.uk",
      "awin",
      "12045"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["430",
      "1",
      "Natural Collection",
      "https://ui.awin.com/images/upload/merchant/profile/3650.png?1557927997",
      "naturalcollection.com",
      "awin",
      "3650"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["431",
      "1",
      "Natural Image Wigs",
      "https://ui.awin.com/images/upload/merchant/profile/9241.png?1500653795",
      "naturalimagewigs.co.uk",
      "awin",
      "9241"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["432",
      "1",
      "Navigation.com - HERE (EUR)",
      "https://ui.awin.com/images/upload/merchant/profile/6050.png?1544467588",
      "navigation.com",
      "awin",
      "6050"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["433",
      "1",
      "New Era Cap",
      "https://ui.awin.com/images/upload/merchant/profile/5325.png?1362756544",
      "neweracap.co.uk",
      "awin",
      "5325"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["434",
      "1",
      "Nisbets FR",
      "https://ui.awin.com/images/upload/merchant/profile/7926.png?1551360301",
      "nisbets.fr",
      "awin",
      "7926"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["435",
      "1",
      "Nisbets NL",
      "https://ui.awin.com/images/upload/merchant/profile/8179.png?1551360396",
      "nisbets.nl",
      "awin",
      "8179"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["436",
      "1",
      "Norfolk Hideaways",
      "https://ui.awin.com/images/upload/merchant/profile/7672.png?1480509543",
      "norfolkhideaways.co.uk",
      "awin",
      "7672"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["437",
      "1",
      "Noukies FR",
      "https://ui.awin.com/images/upload/merchant/profile/7987.png?1491999679",
      "noukies.com",
      "awin",
      "7987"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["438",
      "1",
      "Novatech Ltd",
      "https://ui.awin.com/images/upload/merchant/profile/957.png?1279534394",
      "novatech.co.uk",
      "awin",
      "957"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["439",
      "1",
      "O2 Recycle",
      "https://ui.awin.com/images/upload/merchant/profile/3234.png?1303144608",
      "o2recycle.co.uk",
      "awin",
      "3234"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["440",
      "1",
      "ODs Designer",
      "https://ui.awin.com/images/upload/merchant/profile/11157.png?1508931637",
      "odsdesignerclothing.com",
      "awin",
      "11157"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["441",
      "1",
      "OLPRO",
      "https://ui.awin.com/images/upload/merchant/profile/11300.png?1505811392",
      "olproshop.com",
      "awin",
      "11300"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["442",
      "1",
      "Oak Furniture Superstore",
      "https://ui.awin.com/images/upload/merchant/profile/4430.png?1339763121",
      "oakfurnituresuperstore.co.uk",
      "awin",
      "4430"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["443",
      "1",
      "Office Monster",
      "https://ui.awin.com/images/upload/merchant/profile/12159.png?1511788141",
      "officemonster.co.uk",
      "awin",
      "12159"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["444",
      "1",
      "Office Stationery",
      "https://ui.awin.com/images/upload/merchant/profile/2193.png?1306917237",
      "officestationery.co.uk",
      "awin",
      "2193"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["445",
      "1",
      "Okamac FR",
      "https://ui.awin.com/images/upload/merchant/profile/7037.png?1469633286",
      "okamac.com",
      "awin",
      "7037"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["446",
      "1",
      "Olive PL",
      "https://ui.awin.com/images/upload/merchant/profile/10177.png?1500629421",
      "olive.pl",
      "awin",
      "10177"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["447",
      "1",
      "On The Beach",
      "https://ui.awin.com/images/upload/merchant/profile/3655.png?1538735482",
      "onthebeach.co.uk",
      "awin",
      "3655"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["448",
      "1",
      "One.com (UK)",
      "https://ui.awin.com/images/upload/merchant/profile/6935.png?1456827873",
      "one.com",
      "awin",
      "6935"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["449",
      "1",
      "Ordnance Survey",
      "https://ui.awin.com/images/upload/merchant/profile/2495.png?1546428104",
      "ordnancesurvey.co.uk",
      "awin",
      "2495"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["450",
      "1",
      "Otel",
      "https://ui.awin.com/images/upload/merchant/profile/6408.png?1523609551",
      "otel.com",
      "awin",
      "6408"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["451",
      "1",
      "OutdoorGear UK",
      "https://ui.awin.com/images/upload/merchant/profile/269.png?1280243029",
      "outdoorgear.co.uk",
      "awin",
      "269"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["452",
      "1",
      "Oxfam Online Shop",
      "https://ui.awin.com/images/upload/merchant/profile/2921.png?1403539888",
      "oxfam.org.uk",
      "awin",
      "2921"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["453",
      "1",
      "Ozobot (US)",
      "https://ui.awin.com/images/upload/merchant/profile/7762.png?1492131048",
      "ozobot.com",
      "awin",
      "7762"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["454",
      "1",
      "PHD Supplements",
      "https://ui.awin.com/images/upload/merchant/profile/6618.png?1442929398",
      "phd.com",
      "awin",
      "6618"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["455",
      "1",
      "PN Home",
      "https://ui.awin.com/images/upload/merchant/profile/9905.png?1545232607",
      "pnhome.com",
      "awin",
      "9905"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["456",
      "1",
      "PRC Direct",
      "https://ui.awin.com/images/upload/merchant/profile/3631.png?1352377579",
      "prcdirect.co.uk",
      "awin",
      "3631"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["457",
      "1",
      "Pacific Holidays",
      "https://ui.awin.com/images/upload/merchant/profile/6728.png?1473168242",
      "pacificholidaysinc.com",
      "awin",
      "6728"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["458",
      "1",
      "Pantofelek24 PL",
      "https://ui.awin.com/images/upload/merchant/profile/9180.png?1503311230",
      "pantofelek24.pl",
      "awin",
      "9180"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["459",
      "1",
      "Papa Johns",
      "https://ui.awin.com/images/upload/merchant/profile/5764.png?1439390039",
      "papajohns.co.uk",
      "awin",
      "5764"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["460",
      "1",
      "Paperchase",
      "https://ui.awin.com/images/upload/merchant/profile/3637.png?1365174900",
      "paperchase.com",
      "awin",
      "3637"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["461",
      "1",
      "Paradigit NL",
      "https://ui.awin.com/images/upload/merchant/profile/8114.png?1494431568",
      "paradigit.nl",
      "awin",
      "8114"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["462",
      "1",
      "ParcelHero",
      "https://ui.awin.com/images/upload/merchant/profile/5950.png?1408363567",
      "parcelhero.com",
      "awin",
      "5950"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["463",
      "1",
      "Parcelcompare",
      "https://ui.awin.com/images/upload/merchant/profile/5949.png?1510570905",
      "parcelcompare.com",
      "awin",
      "5949"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["464",
      "1",
      "Park BCP",
      "https://ui.awin.com/images/upload/merchant/profile/3495.png?1404393186",
      "parkbcp.co.uk",
      "awin",
      "3495"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["465",
      "1",
      "Park Inn",
      "https://ui.awin.com/images/upload/merchant/profile/3567.png?1321523535",
      "parkinn.co.uk",
      "awin",
      "3567"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["466",
      "1",
      "Pauls Boutique",
      "https://ui.awin.com/images/upload/merchant/profile/4433.png?1487679729",
      "paulsboutique.com",
      "awin",
      "4433"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["467",
      "1",
      "PeaceLoveWorld (US & Canada)",
      "https://ui.awin.com/images/upload/merchant/profile/4063.png?1331870824",
      "peaceloveworld.com",
      "awin",
      "4063"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["468",
      "1",
      "Perfume Click",
      "https://ui.awin.com/images/upload/merchant/profile/6561.png?1574417555",
      "perfume-click.co.uk",
      "awin",
      "6561"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["469",
      "1",
      "Perfume Shopping",
      "https://ui.awin.com/images/upload/merchant/profile/5901.png?1398181701",
      "perfumeshopping.com",
      "awin",
      "5901"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["470",
      "1",
      "Pet and Country",
      "https://ui.awin.com/images/upload/merchant/profile/6884.png?1571909349",
      "petandcountrystore.com",
      "awin",
      "6884"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["471",
      "1",
      "Pharmacy First",
      "https://ui.awin.com/images/upload/merchant/profile/3643.png?1322229862",
      "pharmacyfirst.co.uk",
      "awin",
      "3643"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["472",
      "1",
      "Pia Jewellery",
      "https://ui.awin.com/images/upload/merchant/profile/5903.png?1469791685",
      "piajewellery.com",
      "awin",
      "5903"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["473",
      "1",
      "PicStop",
      "https://ui.awin.com/images/upload/merchant/profile/580.png?1280218643",
      "picstop.co.uk",
      "awin",
      "580"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["474",
      "1",
      "Picniq",
      "https://ui.awin.com/images/upload/merchant/profile/7289.png?1498580346",
      "picniq.co.uk",
      "awin",
      "7289"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["475",
      "1",
      "PiecesAuto24 FR",
      "https://ui.awin.com/images/upload/merchant/profile/7876.png?1484142901",
      "piecesauto24.com",
      "awin",
      "7876"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["476",
      "1",
      "Planet Organic",
      "https://ui.awin.com/images/upload/merchant/profile/6179.png?1415288806",
      "planetorganic.com",
      "awin",
      "6179"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["477",
      "1",
      "Platte TV NL",
      "https://ui.awin.com/images/upload/merchant/profile/8198.png?1508233710",
      "plattetv.nl",
      "awin",
      "8198"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["478",
      "1",
      "Polski koszyk PL",
      "https://ui.awin.com/images/upload/merchant/profile/11291.png?1508417020",
      "polskikoszyk.pl",
      "awin",
      "11291"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["479",
      "1",
      "Pooch and Mutt",
      "https://ui.awin.com/images/upload/merchant/profile/10953.png?1502464176",
      "poochandmutt.store",
      "awin",
      "10953"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["480",
      "1",
      "Poppyshop",
      "https://ui.awin.com/images/upload/merchant/profile/6664.png?1444397473",
      "poppyshop.org.uk",
      "awin",
      "6664"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["481",
      "1",
      "Post Office Travel Money",
      "https://ui.awin.com/images/upload/merchant/profile/5423.png?1374245675",
      "postoffice.co.uk",
      "awin",
      "5423"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["482",
      "1",
      "Post-a-Rose",
      "https://ui.awin.com/images/upload/merchant/profile/425.png?1280218854",
      "post-a-rose.com",
      "awin",
      "425"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["483",
      "1",
      "Predator Nutrition",
      "https://ui.awin.com/images/upload/merchant/profile/5412.png?1421663642",
      "predatornutrition.com",
      "awin",
      "5412"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["484",
      "1",
      "Premier Man",
      "https://ui.awin.com/images/upload/merchant/profile/3035.png?1446047765",
      "premierman.com",
      "awin",
      "3035"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["485",
      "1",
      "Prestige Flowers",
      "https://ui.awin.com/images/upload/merchant/profile/4335.png?1335451390",
      "prestigeflowers.co.uk",
      "awin",
      "4335"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["486",
      "1",
      "Prezzybox",
      "https://ui.awin.com/images/upload/merchant/profile/164.png?1541507235",
      "prezzybox.com",
      "awin",
      "164"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["487",
      "1",
      "Pricerighthome.com",
      "https://ui.awin.com/images/upload/merchant/profile/1679.png?1279277793",
      "pricerighthome.com",
      "awin",
      "1679"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["488",
      "1",
      "PrimeSport.com (US)",
      "https://ui.awin.com/images/upload/merchant/profile/3994.png?1542662616",
      "primesport.com",
      "awin",
      "3994"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["489",
      "1",
      "PrinterInks",
      "https://ui.awin.com/images/upload/merchant/profile/1931.png?1341418447",
      "printerinks.com",
      "awin",
      "1931"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["490",
      "1",
      "PrinterPix",
      "https://ui.awin.com/images/upload/merchant/profile/3993.png?1327514466",
      "printerpix.co.uk",
      "awin",
      "3993"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["491",
      "1",
      "ProBikeKit UK",
      "https://ui.awin.com/images/upload/merchant/profile/3977.png?1513353564",
      "probikekit.co.uk",
      "awin",
      "3977"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["492",
      "1",
      "ProBikeKit US & Canada",
      "https://ui.awin.com/images/upload/merchant/profile/3986.png?1513353605",
      "probikekit.com",
      "awin",
      "3986"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["493",
      "1",
      "Protein Dynamix",
      "https://ui.awin.com/images/upload/merchant/profile/6225.png?1446463706",
      "proteindynamix.com",
      "awin",
      "6225"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["494",
      "1",
      "Protyre",
      "https://ui.awin.com/images/upload/merchant/profile/6293.png?1429526137",
      "protyre.co.uk",
      "awin",
      "6293"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["495",
      "1",
      "Proviz",
      "https://ui.awin.com/images/upload/merchant/profile/5010.png?1491925376",
      "provizsports.com",
      "awin",
      "5010"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["496",
      "1",
      "Public Desire (US & Canada)",
      "https://ui.awin.com/images/upload/merchant/profile/6825.png?1484843346",
      "publicdesire.com",
      "awin",
      "6825"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["497",
      "1",
      "Pure Collection (US)",
      "https://ui.awin.com/images/upload/merchant/profile/7184.png?1539766060",
      "purecollection.com",
      "awin",
      "7184"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["498",
      "1",
      "Purely Diamonds",
      "https://ui.awin.com/images/upload/merchant/profile/1992.png?1431009103",
      "purelydiamonds.co.uk",
      "awin",
      "1992"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["499",
      "1",
      "Purple Parking",
      "https://ui.awin.com/images/upload/merchant/profile/12028.png?1509102616",
      "purpleparking.com",
      "awin",
      "12028"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["500",
      "1",
      "QDOS Breakdown",
      "https://ui.awin.com/images/upload/merchant/profile/5441.png?1369338036",
      "qdosbreakdown.co.uk",
      "awin",
      "5441"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["501",
      "1",
      "QP Jewellers",
      "https://ui.awin.com/images/upload/merchant/profile/4251.png?1393490242",
      "qpjewellers.com",
      "awin",
      "4251"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["502",
      "1",
      "Quandoo",
      "https://ui.awin.com/images/upload/merchant/profile/12348.png?1516726488",
      "quandoo.co.uk",
      "awin",
      "12348"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["503",
      "1",
      "Questor Insurance",
      "https://ui.awin.com/images/upload/merchant/profile/8090.png?1513701667",
      "questor-insurance.co.uk",
      "awin",
      "8090"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["504",
      "1",
      "Qustodio",
      "https://ui.awin.com/images/upload/merchant/profile/7874.png?1484142084",
      "qustodio.com",
      "awin",
      "7874"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["505",
      "1",
      "RAJA",
      "https://ui.awin.com/images/upload/merchant/profile/3837.png?1567412408",
      "rajapack.co.uk",
      "awin",
      "3837"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["506",
      "1",
      "RY AU",
      "https://ui.awin.com/images/upload/merchant/profile/11212.png?1504577959",
      "ry.com.au",
      "awin",
      "11212"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["507",
      "1",
      "Radisson Blu",
      "https://ui.awin.com/images/upload/merchant/profile/3566.png?1321452777",
      "radissonblu.com",
      "awin",
      "3566"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["508",
      "1",
      "Radisson Blu Edwardian UK",
      "https://ui.awin.com/images/upload/merchant/profile/3667.png?1337353404",
      "radissonblu-edwardian.com",
      "awin",
      "3667"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["509",
      "1",
      "Radisson Hotels",
      "https://ui.awin.com/images/upload/merchant/profile/7754.png?1562657397",
      "radissonhotels.com",
      "awin",
      "7754"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["510",
      "1",
      "Raffaello Network UK",
      "https://ui.awin.com/images/upload/merchant/profile/9944.png?1506958164",
      "raffaello-network.com",
      "awin",
      "9944"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["511",
      "1",
      "Railcard",
      "https://ui.awin.com/images/upload/merchant/profile/6235.png?1420717869",
      "railcard.co.uk",
      "awin",
      "6235"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["512",
      "1",
      "Raileasy",
      "https://ui.awin.com/images/upload/merchant/profile/3606.png?1314798529",
      "raileasy.co.uk",
      "awin",
      "3606"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["513",
      "1",
      "Rapid Online - Rapid Electronics Ltd.",
      "https://ui.awin.com/images/upload/merchant/profile/1799.png?1280219577",
      "rapidonline.com",
      "awin",
      "1799"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["514",
      "1",
      "Ravensburger (US)",
      "https://ui.awin.com/images/upload/merchant/profile/7992.png?1492600857",
      "ravensburger.us",
      "awin",
      "7992"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["515",
      "1",
      "Raw Denim",
      "https://ui.awin.com/images/upload/merchant/profile/5977.png?1557745649",
      "rawdenim.co.uk",
      "awin",
      "5977"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["516",
      "1",
      "Razer",
      "https://ui.awin.com/images/upload/merchant/profile/7670.png?1490868980",
      "razerzone.com",
      "awin",
      "7670"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["517",
      "1",
      "Red Letter Days",
      "https://ui.awin.com/images/upload/merchant/profile/1983.png?1540985360",
      "redletterdays.co.uk",
      "awin",
      "1983"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["518",
      "1",
      "Redbubble",
      "https://ui.awin.com/images/upload/merchant/profile/7554.png?1476968938",
      "redbubble.com",
      "awin",
      "7554"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["519",
      "1",
      "Regatta",
      "https://ui.awin.com/images/upload/merchant/profile/4114.png?1409581838",
      "regatta.com",
      "awin",
      "4114"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["520",
      "1",
      "Revolution Beauty",
      "https://ui.awin.com/images/upload/merchant/profile/7808.png?1522768376",
      "revolutionbeauty.com",
      "awin",
      "7808"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["521",
      "1",
      "Ribble Cycles",
      "https://ui.awin.com/images/upload/merchant/profile/5923.png?1491306984",
      "ribblecycles.co.uk",
      "awin",
      "5923"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["522",
      "1",
      "Robert Dyas",
      "https://ui.awin.com/images/upload/merchant/profile/1528.png?1501663310",
      "robertdyas.co.uk",
      "awin",
      "1528"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["523",
      "1",
      "Robinson's Shoes",
      "https://ui.awin.com/images/upload/merchant/profile/6786.png?1454057914",
      "robinsonsshoes.com",
      "awin",
      "6786"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["524",
      "1",
      "Roman Originals",
      "https://ui.awin.com/images/upload/merchant/profile/7800.png?1480341026",
      "romanoriginals.co.uk",
      "awin",
      "7800"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["525",
      "1",
      "Royal Albert",
      "https://ui.awin.com/images/upload/merchant/profile/5320.png?1454406572",
      "royalalbert.co.uk",
      "awin",
      "5320"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["526",
      "1",
      "Royal Doulton",
      "https://ui.awin.com/images/upload/merchant/profile/5319.png?1454406597",
      "royaldoulton.co.uk",
      "awin",
      "5319"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["527",
      "1",
      "Rural Retreats",
      "https://ui.awin.com/images/upload/merchant/profile/6289.png?1507021957",
      "ruralretreats.co.uk",
      "awin",
      "6289"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["528",
      "1",
      "Rutland Cycling",
      "https://ui.awin.com/images/upload/merchant/profile/3395.png?1421256219",
      "rutlandcycling.com",
      "awin",
      "3395"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["529",
      "1",
      "Ryman",
      "https://ui.awin.com/images/upload/merchant/profile/3326.png?1433929735",
      "ryman.co.uk",
      "awin",
      "3326"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["530",
      "1",
      "SEVENSTORE",
      "https://ui.awin.com/images/upload/merchant/profile/8035.png?1542292098",
      "sevenstore.com",
      "awin",
      "8035"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["531",
      "1",
      "SHOWPO (US)",
      "https://ui.awin.com/images/upload/merchant/profile/7848.png?1503329902",
      "showpo.com",
      "awin",
      "7848"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["532",
      "1",
      "Safestore",
      "https://ui.awin.com/images/upload/merchant/profile/5915.png?1523008451",
      "safestore.co.uk",
      "awin",
      "5915"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["533",
      "1",
      "Savapoint",
      "https://ui.awin.com/images/upload/merchant/profile/875.png?1299667020",
      "savapoint.com",
      "awin",
      "875"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["534",
      "1",
      "Scholastic",
      "https://ui.awin.com/images/upload/merchant/profile/2957.png?1330519814",
      "scholastic.co.uk",
      "awin",
      "2957"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["535",
      "1",
      "Schuh",
      "https://ui.awin.com/images/upload/merchant/profile/2044.png?1528189211",
      "schuh.co.uk",
      "awin",
      "2044"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["536",
      "1",
      "Schuh Ireland",
      "https://ui.awin.com/images/upload/merchant/profile/2165.png?1528189243",
      "schuh.ie",
      "awin",
      "2165"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["537",
      "1",
      "Scotts Hotel Killarney",
      "https://ui.awin.com/images/upload/merchant/profile/5553.png?1403024183",
      "scottshotelkillarney.com",
      "awin",
      "5553"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["538",
      "1",
      "Scotts of Stow",
      "https://ui.awin.com/images/upload/merchant/profile/1923.png?1280824113",
      "scottsofstow.co.uk",
      "awin",
      "1923"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["539",
      "1",
      "Scottsdale Golf",
      "https://ui.awin.com/images/upload/merchant/profile/813.png?1280847075",
      "scottsdalegolf.co.uk",
      "awin",
      "813"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["540",
      "1",
      "Scribbler",
      "https://ui.awin.com/images/upload/merchant/profile/3965.png?1326110452",
      "scribbler.com",
      "awin",
      "3965"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["541",
      "1",
      "See Tickets",
      "https://ui.awin.com/images/upload/merchant/profile/7816.png?1517487188",
      "seetickets.com",
      "awin",
      "7816"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["542",
      "1",
      "Selections",
      "https://ui.awin.com/images/upload/merchant/profile/5868.png?1396262720",
      "selections.com",
      "awin",
      "5868"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["543",
      "1",
      "Sennheiser UK",
      "https://ui.awin.com/images/upload/merchant/profile/7842.png?1485775579",
      "sennheiser.com",
      "awin",
      "7842"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["544",
      "1",
      "Serenata Flowers",
      "https://ui.awin.com/images/upload/merchant/profile/964.png?1561989230",
      "serenataflowers.com",
      "awin",
      "964"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["545",
      "1",
      "Sewingmachines.shop",
      "https://ui.awin.com/images/upload/merchant/profile/9858.png?1500294691",
      "sewingmachines.shop",
      "awin",
      "9858"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["546",
      "1",
      "Shoe Zone",
      "https://ui.awin.com/images/upload/merchant/profile/4253.png?1473411362",
      "shoezone.com",
      "awin",
      "4253"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["547",
      "1",
      "Shoesinternational.co.uk",
      "https://ui.awin.com/images/upload/merchant/profile/506.png?1390817992",
      "shoesinternational.co.uk",
      "awin",
      "506"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["548",
      "1",
      "ShopTo.Net",
      "https://ui.awin.com/images/upload/merchant/profile/2943.png?1444647278",
      "shopto.net",
      "awin",
      "2943"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["549",
      "1",
      "Shorefield Holidays",
      "https://ui.awin.com/images/upload/merchant/profile/6349.png?1563352496",
      "shorefield.co.uk",
      "awin",
      "6349"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["550",
      "1",
      "ShortBreaks Ltd",
      "https://ui.awin.com/images/upload/merchant/profile/1017.png?1280231342",
      "short-breaks.com",
      "awin",
      "1017"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["551",
      "1",
      "Shot Dead In The Head",
      "https://ui.awin.com/images/upload/merchant/profile/1345.png?1368112408",
      "shotdeadinthehead.com",
      "awin",
      "1345"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["552",
      "1",
      "Simple Landlord Insurance",
      "https://ui.awin.com/images/upload/merchant/profile/3014.png?1475235581",
      "simplelandlordsinsurance.com",
      "awin",
      "3014"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["553",
      "1",
      "Simply Be",
      "https://ui.awin.com/images/upload/merchant/profile/3027.png?1522154497",
      "simplybe.co.uk",
      "awin",
      "3027"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["554",
      "1",
      "Simply Cook",
      "https://ui.awin.com/images/upload/merchant/profile/6314.png?1453215254",
      "simplycook.com",
      "awin",
      "6314"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["555",
      "1",
      "Simply Hike",
      "https://ui.awin.com/images/upload/merchant/profile/1296.png?1548754340",
      "simplyhike.co.uk",
      "awin",
      "1296"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["556",
      "1",
      "Simply Home Entertainment",
      "https://ui.awin.com/images/upload/merchant/profile/2506.png?1364295847",
      "simplyhe.com",
      "awin",
      "2506"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["557",
      "1",
      "Simply LED",
      "https://ui.awin.com/images/upload/merchant/profile/5190.png?1427368718",
      "simplyled.co.uk",
      "awin",
      "5190"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["558",
      "1",
      "Simply Supplements",
      "https://ui.awin.com/images/upload/merchant/profile/5959.png?1517932878",
      "simplysupplements.net",
      "awin",
      "5959"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["559",
      "1",
      "Simply Supplements FR",
      "https://ui.awin.com/images/upload/merchant/profile/7438.png?1491988274",
      "simplysupplements.fr",
      "awin",
      "7438"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["560",
      "1",
      "Simply Swim",
      "https://ui.awin.com/images/upload/merchant/profile/1294.png?1319794631",
      "simplyswim.com",
      "awin",
      "1294"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["561",
      "1",
      "Ski France",
      "https://ui.awin.com/images/upload/merchant/profile/4333.png?1496748968",
      "skifrance.co.uk",
      "awin",
      "4333"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["562",
      "1",
      "Sky ROI",
      "https://ui.awin.com/images/upload/merchant/profile/12422.png?1516899564",
      "sky.com",
      "awin",
      "12422"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["563",
      "1",
      "Slapiton",
      "https://ui.awin.com/images/upload/merchant/profile/761.png?1347541158",
      "slapiton.tv",
      "awin",
      "761"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["564",
      "1",
      "Slendertone",
      "https://ui.awin.com/images/upload/merchant/profile/3628.png?1456151104",
      "slendertone.com",
      "awin",
      "3628"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["565",
      "1",
      "Slingsby",
      "https://ui.awin.com/images/upload/merchant/profile/6540.png?1438097863",
      "slingsby.com",
      "awin",
      "6540"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["566",
      "1",
      "SmartBuyGlasses",
      "https://ui.awin.com/images/upload/merchant/profile/2749.png?1518089359",
      "smartbuyglasses.co.uk",
      "awin",
      "2749"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["567",
      "1",
      "Snapfish Ireland",
      "https://ui.awin.com/images/upload/merchant/profile/3851.png?1442923264",
      "snapfish.ie",
      "awin",
      "3851"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["568",
      "1",
      "Snapfish.co.uk",
      "https://ui.awin.com/images/upload/merchant/profile/3850.png?1442923203",
      "snapfish.co.uk",
      "awin",
      "3850"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["569",
      "1",
      "Sock Shop",
      "https://ui.awin.com/images/upload/merchant/profile/1374.png?1571062909",
      "sockshop.co.uk",
      "awin",
      "1374"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["570",
      "1",
      "Sofas and Stuff Limited",
      "https://ui.awin.com/images/upload/merchant/profile/6419.png?1551182108",
      "sofasandstuff.com",
      "awin",
      "6419"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["571",
      "1",
      "Song Galaxy",
      "https://ui.awin.com/images/upload/merchant/profile/161.png?1281015069",
      "songgalaxy.com",
      "awin",
      "161"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["572",
      "1",
      "Sonic Direct",
      "https://ui.awin.com/images/upload/merchant/profile/5363.png?1365079824",
      "sonicdirect.co.uk",
      "awin",
      "5363"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["573",
      "1",
      "Sony Mobile FR",
      "https://ui.awin.com/images/upload/merchant/profile/7798.png?1485793523",
      "sonymobile.com",
      "awin",
      "7798"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["574",
      "1",
      "Sosandar",
      "https://ui.awin.com/images/upload/merchant/profile/9192.png?1498474486",
      "sosandar.com",
      "awin",
      "9192"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["575",
      "1",
      "SpaBreaks.com",
      "https://ui.awin.com/images/upload/merchant/profile/3489.png?1529319076",
      "spabreaks.com",
      "awin",
      "3489"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["576",
      "1",
      "Sparkol",
      "https://ui.awin.com/images/upload/merchant/profile/8913.png?1507650470",
      "videoscribe.co",
      "awin",
      "8913"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["577",
      "1",
      "Spartoo BE",
      "https://ui.awin.com/images/upload/merchant/profile/8299.png?1494431531",
      "spartoo.be",
      "awin",
      "8299"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["578",
      "1",
      "Spartoo NL",
      "https://ui.awin.com/images/upload/merchant/profile/8412.png?1494423835",
      "spartoo.com",
      "awin",
      "8412"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["579",
      "1",
      "Spartoo.co.uk",
      "https://ui.awin.com/images/upload/merchant/profile/2638.png?1448380047",
      "spartoo.co.uk",
      "awin",
      "2638"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["580",
      "1",
      "SpeedyHen",
      "https://ui.awin.com/images/upload/merchant/profile/7017.png?1459951582",
      "speedyhen.com",
      "awin",
      "7017"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["581",
      "1",
      "Spiral Direct",
      "https://ui.awin.com/images/upload/merchant/profile/9197.png?1496411036",
      "spiraldirect.com",
      "awin",
      "9197"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["582",
      "1",
      "Sport and Leisure UK",
      "https://ui.awin.com/images/upload/merchant/profile/1463.png?1414684831",
      "sportandleisureuk.com",
      "awin",
      "1463"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["583",
      "1",
      "Sportsshoes FR",
      "https://ui.awin.com/images/upload/merchant/profile/7435.png?1516185924",
      "sportsshoes.com",
      "awin",
      "7435"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["584",
      "1",
      "Stuarts London",
      "https://ui.awin.com/images/upload/merchant/profile/3920.png?1490014011",
      "stuartslondon.com",
      "awin",
      "3920"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["585",
      "1",
      "Stubhub.co.uk",
      "https://ui.awin.com/images/upload/merchant/profile/4307.png?1462366872",
      "stubhub.co.uk",
      "awin",
      "4307"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["586",
      "1",
      "Studio",
      "https://ui.awin.com/images/upload/merchant/profile/1657.png?1554731747",
      "studio.co.uk",
      "awin",
      "1657"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["587",
      "1",
      "Summer France",
      "https://ui.awin.com/images/upload/merchant/profile/9242.png?1496662843",
      "summerfrance.co.uk",
      "awin",
      "9242"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["588",
      "1",
      "Super Cheap Signs (US)",
      "https://ui.awin.com/images/upload/merchant/profile/6941.png?1456953464",
      "supercheapsigns.com",
      "awin",
      "6941"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["589",
      "1",
      "SuperStar Tickets (US)",
      "https://ui.awin.com/images/upload/merchant/profile/4037.png?1556892521",
      "superstar.com",
      "awin",
      "4037"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["590",
      "1",
      "Superprezenty PL",
      "https://ui.awin.com/images/upload/merchant/profile/10234.png?1570088392",
      "superprezenty.pl",
      "awin",
      "10234"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["591",
      "1",
      "Swoon",
      "https://ui.awin.com/images/upload/merchant/profile/5703.png?1521630228",
      "swooneditions.com",
      "awin",
      "5703"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["592",
      "1",
      "Sykes Holiday Cottages",
      "https://ui.awin.com/images/upload/merchant/profile/3317.png?1513872868",
      "sykescottages.co.uk",
      "awin",
      "3317"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["593",
      "1",
      "TFNC",
      "https://ui.awin.com/images/upload/merchant/profile/11000.png?1502795423",
      "tfnclondon.com",
      "awin",
      "11000"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["594",
      "1",
      "TV Cables",
      "https://ui.awin.com/images/upload/merchant/profile/851.png?1281013935",
      "tvcables.co.uk",
      "awin",
      "851"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["595",
      "1",
      "Tailorstore UK",
      "https://ui.awin.com/images/upload/merchant/profile/6175.png?1415958130",
      "tailorstore.com",
      "awin",
      "6175"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["596",
      "1",
      "TalkTalk Business Broadband",
      "https://ui.awin.com/images/upload/merchant/profile/5865.png?1505919393",
      "talktalkbusiness.co.uk",
      "awin",
      "5865"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["597",
      "1",
      "TalkTalk Phone and Broadband",
      "https://ui.awin.com/images/upload/merchant/profile/3674.png?1475582692",
      "talktalk.co.uk",
      "awin",
      "3674"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["598",
      "1",
      "Tassimo FR",
      "https://ui.awin.com/images/upload/merchant/profile/7796.png?1479913603",
      "tassimo.fr",
      "awin",
      "7796"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["599",
      "1",
      "Tech Trade",
      "https://ui.awin.com/images/upload/merchant/profile/9002.png?1492700578",
      "tech.trade",
      "awin",
      "9002"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["600",
      "1",
      "Tech21 (US & CA)",
      "https://ui.awin.com/images/upload/merchant/profile/6675.png?1445440570",
      "tech21.com",
      "awin",
      "6675"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["601",
      "1",
      "Ted Baker Ireland",
      "https://ui.awin.com/images/upload/merchant/profile/5633.png?1380036237",
      "tedbaker.com",
      "awin",
      "5633"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["602",
      "1",
      "Teletext Holidays",
      "https://ui.awin.com/images/upload/merchant/profile/5880.png?1433253354",
      "teletextholidays.co.uk",
      "awin",
      "5880"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["603",
      "1",
      "Temple Spa",
      "https://ui.awin.com/images/upload/merchant/profile/9004.png?1493114397",
      "templespa.com",
      "awin",
      "9004"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["604",
      "1",
      "Temple Spa (US)",
      "https://ui.awin.com/images/upload/merchant/profile/12101.png?1511807701",
      "templespa-usa.com",
      "awin",
      "12101"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["605",
      "1",
      "The Book Depository",
      "https://ui.awin.com/images/upload/merchant/profile/5478.png?1475591263",
      "bookdepository.co.uk",
      "awin",
      "5478"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["606",
      "1",
      "The Book Depository (US)",
      "https://ui.awin.com/images/upload/merchant/profile/5487.png?1475591226",
      "bookdepository.com",
      "awin",
      "5487"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["607",
      "1",
      "The Book Of Everyone",
      "https://ui.awin.com/images/upload/merchant/profile/5844.png?1399991925",
      "thebookofeveryone.com",
      "awin",
      "5844"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["608",
      "1",
      "The Brehon",
      "https://ui.awin.com/images/upload/merchant/profile/5554.png?1403023654",
      "thebrehon.com",
      "awin",
      "5554"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["609",
      "1",
      "The Fashion Bible",
      "https://ui.awin.com/images/upload/merchant/profile/6727.png?1446723058",
      "thefashionbible.co.uk",
      "awin",
      "6727"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["610",
      "1",
      "The Fine Jewellery Company",
      "https://ui.awin.com/images/upload/merchant/profile/10836.png?1500897609",
      "thefinejewellerycompany.com",
      "awin",
      "10836"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["611",
      "1",
      "The Garden Furniture Centre Ltd",
      "https://ui.awin.com/images/upload/merchant/profile/3297.png?1298644594",
      "gardenfurniturecentre.co.uk",
      "awin",
      "3297"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["612",
      "1",
      "The Guide Dogs for the Blind Association",
      "https://ui.awin.com/images/upload/merchant/profile/2913.png?1327672187",
      "guidedogs.org.uk/",
      "awin",
      "2913"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["613",
      "1",
      "The Jewel Hut",
      "https://ui.awin.com/images/upload/merchant/profile/4277.png?1438160182",
      "thejewelhut.co.uk",
      "awin",
      "4277"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["614",
      "1",
      "The Maritime",
      "https://ui.awin.com/images/upload/merchant/profile/5556.png?1398684737",
      "themaritime.ie",
      "awin",
      "5556"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["615",
      "1",
      "The Protein Works UK",
      "https://ui.awin.com/images/upload/merchant/profile/5150.png?1513936414",
      "theproteinworks.com",
      "awin",
      "5150"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["616",
      "1",
      "The Radisson Collection",
      "https://ui.awin.com/images/upload/merchant/profile/7756.png?1528976998",
      "radissoncollection.com",
      "awin",
      "7756"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["617",
      "1",
      "The Range",
      "https://ui.awin.com/images/upload/merchant/profile/5238.png?1497516181",
      "therange.co.uk",
      "awin",
      "5238"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["618",
      "1",
      "The Royal British Legion",
      "https://ui.awin.com/images/upload/merchant/profile/6663.png?1444397121",
      "britishlegion.org.uk/",
      "awin",
      "6663"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["619",
      "1",
      "The Safe Shop",
      "https://ui.awin.com/images/upload/merchant/profile/1006.png?1280932618",
      "thesafeshop.co.uk",
      "awin",
      "1006"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["620",
      "1",
      "The Sofa Company",
      "https://ui.awin.com/images/upload/merchant/profile/3020.png?1300457684",
      "sofa-company.co.uk",
      "awin",
      "3020"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["621",
      "1",
      "The Towel Shop",
      "https://ui.awin.com/images/upload/merchant/profile/5611.png?1408632770",
      "thetowelshop.co.uk",
      "awin",
      "5611"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["622",
      "1",
      "The Watch Cabin",
      "https://ui.awin.com/images/upload/merchant/profile/7187.png?1471347205",
      "thewatchcabin.com",
      "awin",
      "7187"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["623",
      "1",
      "The Watch Hut",
      "https://ui.awin.com/images/upload/merchant/profile/5076.png?1501169312",
      "thewatchhut.co.uk",
      "awin",
      "5076"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["624",
      "1",
      "The house shop",
      "https://ui.awin.com/images/upload/merchant/profile/5987.png?1438247163",
      "thehouseshop.com",
      "awin",
      "5987"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["625",
      "1",
      "TheDrinkShop",
      "https://ui.awin.com/images/upload/merchant/profile/61.png?1400672128",
      "thedrinkshop.com",
      "awin",
      "61"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["626",
      "1",
      "Theatre Tickets Direct",
      "https://ui.awin.com/images/upload/merchant/profile/1936.png?1280231004",
      "theatreticketsdirect.co.uk",
      "awin",
      "1936"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["627",
      "1",
      "This is Powder",
      "https://ui.awin.com/images/upload/merchant/profile/9238.png?1497959392",
      "thisispowder.co.uk",
      "awin",
      "9238"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["628",
      "1",
      "Thorntons",
      "https://ui.awin.com/images/upload/merchant/profile/2186.png?1480954651",
      "thorntons.co.uk",
      "awin",
      "2186"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["629",
      "1",
      "Three",
      "https://ui.awin.com/images/upload/merchant/profile/10210.png?1500900901",
      "three.co.uk",
      "awin",
      "10210"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["630",
      "1",
      "Thrifty",
      "https://ui.awin.com/images/upload/merchant/profile/7676.png?1475222949",
      "thrifty.co.uk",
      "awin",
      "7676"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["631",
      "1",
      "Tilley Endurables (US)",
      "https://ui.awin.com/images/upload/merchant/profile/7586.png?1557954031",
      "tilley.com",
      "awin",
      "7586"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["632",
      "1",
      "Tinhat",
      "https://ui.awin.com/images/upload/merchant/profile/6777.png?1450092344",
      "tinhat.co.uk",
      "awin",
      "6777"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["633",
      "1",
      "Tiqets DE",
      "https://ui.awin.com/images/upload/merchant/profile/8616.png?1494428118",
      "tiqets.com",
      "awin",
      "8616"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["634",
      "1",
      "Titan Travel",
      "https://ui.awin.com/images/upload/merchant/profile/4282.png?1539265011",
      "titantravel.co.uk",
      "awin",
      "4282"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["635",
      "1",
      "Toby Deals",
      "https://ui.awin.com/images/upload/merchant/profile/6249.png?1518146584",
      "tobydeals.co.uk",
      "awin",
      "6249"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["636",
      "1",
      "Toby Tiger",
      "https://ui.awin.com/images/upload/merchant/profile/5532.png?1374237616",
      "tobytiger.com",
      "awin",
      "5532"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["637",
      "1",
      "Toffs Ltd",
      "https://ui.awin.com/images/upload/merchant/profile/317.png?1507807693",
      "toffs.com",
      "awin",
      "317"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["638",
      "1",
      "Tokyo Laundry",
      "https://ui.awin.com/images/upload/merchant/profile/4910.png?1403865914",
      "tokyolaundry.com",
      "awin",
      "4910"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["639",
      "1",
      "TomTop",
      "https://ui.awin.com/images/upload/merchant/profile/7566.png?1481622594",
      "tomtop.com",
      "awin",
      "7566"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["640",
      "1",
      "Toner Giant",
      "https://ui.awin.com/images/upload/merchant/profile/5500.png?1373369396",
      "tonergiant.co.uk",
      "awin",
      "5500"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["641",
      "1",
      "Tooled Up",
      "https://ui.awin.com/images/upload/merchant/profile/496.png?1490286711",
      "tooled-up.com",
      "awin",
      "496"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["642",
      "1",
      "Toople",
      "https://ui.awin.com/images/upload/merchant/profile/7538.png?1474378520",
      "toople.com",
      "awin",
      "7538"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["643",
      "1",
      "TopMBA.com (US & Canada)",
      "https://ui.awin.com/images/upload/merchant/profile/10031.png?1503682518",
      "topmba.com",
      "awin",
      "10031"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["644",
      "1",
      "TopUniversities.com (US & Canada)",
      "https://ui.awin.com/images/upload/merchant/profile/10032.png?1503682450",
      "topuniversities.com",
      "awin",
      "10032"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["645",
      "1",
      "Topdoginsurance",
      "https://ui.awin.com/images/upload/merchant/profile/2751.png?1281008174",
      "topdoginsurance.co.uk",
      "awin",
      "2751"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["646",
      "1",
      "Topman UK",
      "https://ui.awin.com/images/upload/merchant/profile/2479.png?1547630814",
      "topman.com",
      "awin",
      "2479"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["647",
      "1",
      "Tostadora - T-shirts FR",
      "https://ui.awin.com/images/upload/merchant/profile/7375.png?1524055381",
      "tostadora.fr",
      "awin",
      "7375"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["648",
      "1",
      "Tough Mudder",
      "https://ui.awin.com/images/upload/merchant/profile/9994.png?1499439599",
      "toughmudder.co.uk",
      "awin",
      "9994"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["649",
      "1",
      "Train Genius",
      "https://ui.awin.com/images/upload/merchant/profile/5501.png?1372755706",
      "traingenius.com",
      "awin",
      "5501"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["650",
      "1",
      "Trampoline Collection",
      "https://ui.awin.com/images/upload/merchant/profile/3510.png?1332835957",
      "trampoline-collection.co.uk",
      "awin",
      "3510"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["651",
      "1",
      "Trampoline Warehouse",
      "https://ui.awin.com/images/upload/merchant/profile/2968.png?1281006959",
      "trampoline-warehouse.co.uk",
      "awin",
      "2968"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["652",
      "1",
      "Travel Insurance 4 Medical",
      "https://ui.awin.com/images/upload/merchant/profile/8050.png?1542633739",
      "travelinsurance4medical.co.uk",
      "awin",
      "8050"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["653",
      "1",
      "Travel Luggage & Cabin Bags Ltd",
      "https://ui.awin.com/images/upload/merchant/profile/6001.png?1434356556",
      "travelluggagecabinbags.com",
      "awin",
      "6001"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["654",
      "1",
      "TravelSupermarket",
      "https://ui.awin.com/images/upload/merchant/profile/8734.png?1493891169",
      "travelsupermarket.com",
      "awin",
      "8734"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["655",
      "1",
      "Travelodge",
      "https://ui.awin.com/images/upload/merchant/profile/1586.png?1365581475",
      "travelodge.co.uk",
      "awin",
      "1586"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["656",
      "1",
      "Travelzoo",
      "https://ui.awin.com/images/upload/merchant/profile/5833.png?1478602281",
      "travelzoo.com",
      "awin",
      "5833"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["657",
      "1",
      "Tredz Limited",
      "https://ui.awin.com/images/upload/merchant/profile/6821.png?1462366152",
      "tredz.co.uk",
      "awin",
      "6821"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["658",
      "1",
      "Tresor Paris",
      "https://ui.awin.com/images/upload/merchant/profile/6232.png?1420555507",
      "tresorparis.com",
      "awin",
      "6232"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["659",
      "1",
      "Tria Beauty",
      "https://ui.awin.com/images/upload/merchant/profile/5870.png?1397207261",
      "triabeauty.co.uk",
      "awin",
      "5870"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["660",
      "1",
      "Trip.com (Global)",
      "https://ui.awin.com/images/upload/merchant/profile/5968.png?1513249858",
      "trip.com",
      "awin",
      "5968"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["661",
      "1",
      "TripAdvisor Rentals (US)",
      "https://ui.awin.com/images/upload/merchant/profile/8092.png?1559155033",
      "tripadvisor.com",
      "awin",
      "8092"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["662",
      "1",
      "TrophySkin (US)",
      "https://ui.awin.com/images/upload/merchant/profile/4011.png?1486393441",
      "trophyskin.com",
      "awin",
      "4011"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["663",
      "1",
      "Trustedhousesitters",
      "https://ui.awin.com/images/upload/merchant/profile/5758.png?1450719636",
      "trustedhousesitters.com",
      "awin",
      "5758"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["664",
      "1",
      "Tub Collection",
      "https://ui.awin.com/images/upload/merchant/profile/3019.png?1300458417",
      "tub-collection.co.uk",
      "awin",
      "3019"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["665",
      "1",
      "TuneStub (US)",
      "https://ui.awin.com/images/upload/merchant/profile/6199.png?1420663297",
      "tunestub.com",
      "awin",
      "6199"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["666",
      "1",
      "Tweak Slumber",
      "https://ui.awin.com/images/upload/merchant/profile/7517.png?1505467500",
      "tweakslumber.com",
      "awin",
      "7517"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["667",
      "1",
      "Twinings Teashop",
      "https://ui.awin.com/images/upload/merchant/profile/3578.png?1413369983",
      "twinings.co.uk",
      "awin",
      "3578"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["668",
      "1",
      "UGG",
      "https://ui.awin.com/images/upload/merchant/profile/3382.png?1476956232",
      "ugg.com",
      "awin",
      "3382"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["669",
      "1",
      "UK Breakaways",
      "https://ui.awin.com/images/upload/merchant/profile/9166.png?1494488878",
      "ukbreakaways.com",
      "awin",
      "9166"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["670",
      "1",
      "UK Sport Imports Ltd",
      "https://ui.awin.com/images/upload/merchant/profile/2455.png?1279285811",
      "uksportimports.com",
      "awin",
      "2455"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["671",
      "1",
      "UK Swimwear",
      "https://ui.awin.com/images/upload/merchant/profile/6585.png?1439981267",
      "ukswimwear.com",
      "awin",
      "6585"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["672",
      "1",
      "UK Tool Centre",
      "https://ui.awin.com/images/upload/merchant/profile/3336.png?1537541648",
      "uktoolcentre.co.uk",
      "awin",
      "3336"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["673",
      "1",
      "UKHost4u",
      "https://ui.awin.com/images/upload/merchant/profile/1757.png?1447091413",
      "ukhost4u.co.uk",
      "awin",
      "1757"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["674",
      "1",
      "UKSoccershop.com",
      "https://ui.awin.com/images/upload/merchant/profile/1826.png?1278431689",
      "uksoccershop.com",
      "awin",
      "1826"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["675",
      "1",
      "Under Armour FR",
      "https://ui.awin.com/images/upload/merchant/profile/7365.png?1469634006",
      "underarmour.fr",
      "awin",
      "7365"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["676",
      "1",
      "United Consumers NL",
      "https://ui.awin.com/images/upload/merchant/profile/8311.png?1494423294",
      "unitedconsumers.com",
      "awin",
      "8311"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["677",
      "1",
      "Urban Surfer",
      "https://ui.awin.com/images/upload/merchant/profile/3899.png?1429882933",
      "urbansurfer.co.uk",
      "awin",
      "3899"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["678",
      "1",
      "VAPEMATE",
      "https://ui.awin.com/images/upload/merchant/profile/6931.png?1492610454",
      "vapemate.co.uk",
      "awin",
      "6931"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["679",
      "1",
      "VITL",
      "https://ui.awin.com/images/upload/merchant/profile/6724.png?1546518134",
      "vitl.com",
      "awin",
      "6724"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["680",
      "1",
      "Value Pet Supplies (US)",
      "https://ui.awin.com/images/upload/merchant/profile/4060.png?1439326816",
      "valuepetsupplies.com",
      "awin",
      "4060"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["681",
      "1",
      "Valueflora.com",
      "https://ui.awin.com/images/upload/merchant/profile/1912.png?1426864173",
      "valueflora.com",
      "awin",
      "1912"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["682",
      "1",
      "Vanmildert",
      "https://ui.awin.com/images/upload/merchant/profile/6227.png?1418909970",
      "vanmildert.com",
      "awin",
      "6227"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["683",
      "1",
      "VegaooParty FR",
      "https://ui.awin.com/images/upload/merchant/profile/7396.png?1469634116",
      "vegaooparty.com",
      "awin",
      "7396"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["684",
      "1",
      "Vestry Online",
      "https://ui.awin.com/images/upload/merchant/profile/3483.png?1305997060",
      "vestryonline.com",
      "awin",
      "3483"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["685",
      "1",
      "Viagogo (US)",
      "https://ui.awin.com/images/upload/merchant/profile/5821.png?1446829004",
      "viagogo.com",
      "awin",
      "5821"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["686",
      "1",
      "Viagogo FR",
      "https://ui.awin.com/images/upload/merchant/profile/7388.png?1469634090",
      "viagogo.fr",
      "awin",
      "7388"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["687",
      "1",
      "VictoriaPlum.com",
      "https://ui.awin.com/images/upload/merchant/profile/9256.png?1496323527",
      "victoriaplum.com",
      "awin",
      "9256"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["688",
      "1",
      "Village Hotels",
      "https://ui.awin.com/images/upload/merchant/profile/6537.png?1497283044",
      "village-hotels.co.uk",
      "awin",
      "6537"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["689",
      "1",
      "Vintage Wine Gifts",
      "https://ui.awin.com/images/upload/merchant/profile/806.png?1279192287",
      "vintagewinegifts.co.uk",
      "awin",
      "806"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["690",
      "1",
      "Virgin Media",
      "https://ui.awin.com/images/upload/merchant/profile/6399.png?1545212987",
      "virginmedia.com",
      "awin",
      "6399"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["691",
      "1",
      "Vitamin Planet",
      "https://ui.awin.com/images/upload/merchant/profile/5735.png?1386615981",
      "vitaminplanet.co.uk",
      "awin",
      "5735"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["692",
      "1",
      "Vivobarefoot UK",
      "https://ui.awin.com/images/upload/merchant/profile/7778.png?1479901571",
      "vivobarefoot.com",
      "awin",
      "7778"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["693",
      "1",
      "Vivomed Limited",
      "https://ui.awin.com/images/upload/merchant/profile/5492.png?1372418464",
      "vivomed.com",
      "awin",
      "5492"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["694",
      "1",
      "Vivre PL",
      "https://ui.awin.com/images/upload/merchant/profile/10124.png?1499865868",
      "vivrehome.pl",
      "awin",
      "10124"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["695",
      "1",
      "Vobis PL",
      "https://ui.awin.com/images/upload/merchant/profile/10125.png?1499865967",
      "vobis.pl",
      "awin",
      "10125"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["696",
      "1",
      "Volcom FR",
      "https://ui.awin.com/images/upload/merchant/profile/9010.png?1493971276",
      "volcom.fr",
      "awin",
      "9010"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["697",
      "1",
      "Votre Carte Grise FR",
      "https://ui.awin.com/images/upload/merchant/profile/7386.png?1469634082",
      "votre-carte-grise.com",
      "awin",
      "7386"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["698",
      "1",
      "W Concept (US)",
      "https://ui.awin.com/images/upload/merchant/profile/6016.png?1561672040",
      "wconcept.com",
      "awin",
      "6016"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["699",
      "1",
      "W.KRUK PL",
      "https://ui.awin.com/images/upload/merchant/profile/10130.png?1499865886",
      "wkruk.pl",
      "awin",
      "10130"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["700",
      "1",
      "Wal G",
      "https://ui.awin.com/images/upload/merchant/profile/10999.png?1514386558",
      "walg.co.uk",
      "awin",
      "10999"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["701",
      "1",
      "Wallis UK",
      "https://ui.awin.com/images/upload/merchant/profile/2419.png?1280304672",
      "wallis.co.uk",
      "awin",
      "2419"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["702",
      "1",
      "Walls and Floors",
      "https://ui.awin.com/images/upload/merchant/profile/2972.png?1515084484",
      "wallsandfloors.co.uk",
      "awin",
      "2972"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["703",
      "1",
      "Waltons",
      "https://ui.awin.com/images/upload/merchant/profile/3314.png?1449489208",
      "waltons.co.uk",
      "awin",
      "3314"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["704",
      "1",
      "Warehouse Aquatics",
      "https://ui.awin.com/images/upload/merchant/profile/6166.png?1425918871",
      "warehouse-aquatics.co.uk",
      "awin",
      "6166"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["705",
      "1",
      "Warner Leisure Hotels",
      "https://ui.awin.com/images/upload/merchant/profile/1015.png?1396975955",
      "warnerleisurehotels.co.uk",
      "awin",
      "1015"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["706",
      "1",
      "Warranty Wise",
      "https://ui.awin.com/images/upload/merchant/profile/5096.png?1359988040",
      "warrantywise.co.uk",
      "awin",
      "5096"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["707",
      "1",
      "Watch Shop",
      "https://ui.awin.com/images/upload/merchant/profile/2764.png?1570714241",
      "watchshop.com",
      "awin",
      "2764"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["708",
      "1",
      "Waterford",
      "https://ui.awin.com/images/upload/merchant/profile/5318.png?1454406618",
      "waterford.co.uk",
      "awin",
      "5318"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["709",
      "1",
      "Waterstones",
      "https://ui.awin.com/images/upload/merchant/profile/3787.png?1348501858",
      "waterstones.com",
      "awin",
      "3787"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["710",
      "1",
      "Weddingplan insurance",
      "https://ui.awin.com/images/upload/merchant/profile/3015.png?1556290443",
      "weddingplaninsurance.co.uk",
      "awin",
      "3015"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["711",
      "1",
      "Wedgwood",
      "https://ui.awin.com/images/upload/merchant/profile/3370.png?1454674747",
      "wedgwood.co.uk",
      "awin",
      "3370"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["712",
      "1",
      "Weekendesk BE",
      "https://ui.awin.com/images/upload/merchant/profile/8379.png?1570107274",
      "weekendesk.be",
      "awin",
      "8379"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["713",
      "1",
      "Weird Fish",
      "https://ui.awin.com/images/upload/merchant/profile/6069.png?1560341641",
      "weirdfish.co.uk",
      "awin",
      "6069"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["714",
      "1",
      "Wendy Wu Tours",
      "https://ui.awin.com/images/upload/merchant/profile/8998.png?1494492992",
      "wendywutours.co.uk",
      "awin",
      "8998"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["715",
      "1",
      "Westend Theatrebreaks",
      "https://ui.awin.com/images/upload/merchant/profile/4349.png?1403190150",
      "westendtheatrebreaks.com",
      "awin",
      "4349"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["716",
      "1",
      "Wex Photo Video",
      "https://ui.awin.com/images/upload/merchant/profile/2298.png?1507825565",
      "wexphotovideo.com",
      "awin",
      "2298"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["717",
      "1",
      "Whittard of Chelsea",
      "https://ui.awin.com/images/upload/merchant/profile/3355.png?1415703885",
      "whittard.co.uk",
      "awin",
      "3355"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["718",
      "1",
      "Wickes",
      "https://ui.awin.com/images/upload/merchant/profile/1563.png?1440756953",
      "wickes.co.uk",
      "awin",
      "1563"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["719",
      "1",
      "Wilpe NL",
      "https://ui.awin.com/images/upload/merchant/profile/8493.png?1494423730",
      "agroluxe.com",
      "awin",
      "8493"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["720",
      "1",
      "Wiltshire Farm Foods",
      "https://ui.awin.com/images/upload/merchant/profile/2536.png?1438004560",
      "wiltshirefarmfoods.com",
      "awin",
      "2536"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["721",
      "1",
      "Womb Concept FR",
      "https://ui.awin.com/images/upload/merchant/profile/7380.png?1469634061",
      "wombconcept.com",
      "awin",
      "7380"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["722",
      "1",
      "Woodyatt Curtains",
      "https://ui.awin.com/images/upload/merchant/profile/1379.png?1332323262",
      "woodyattcurtains.com",
      "awin",
      "1379"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["723",
      "1",
      "Woolovers (US)",
      "https://ui.awin.com/images/upload/merchant/profile/4992.png?1476256868",
      "woolovers.us",
      "awin",
      "4992"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["724",
      "1",
      "Woolovers FR",
      "https://ui.awin.com/images/upload/merchant/profile/7378.png?1493979550",
      "woolovers.fr",
      "awin",
      "7378"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["725",
      "1",
      "Woolovers UK",
      "https://ui.awin.com/images/upload/merchant/profile/790.png?1476255977",
      "woolovers.com",
      "awin",
      "790"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["726",
      "1",
      "Woosh Airport Extras",
      "https://ui.awin.com/images/upload/merchant/profile/5440.png?1537349749",
      "wooshairportextras.com",
      "awin",
      "5440"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["727",
      "1",
      "World Remit LTD",
      "https://ui.awin.com/images/upload/merchant/profile/5877.png?1535986099",
      "worldremit.com",
      "awin",
      "5877"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["728",
      "1",
      "World-First",
      "https://ui.awin.com/images/upload/merchant/profile/8051.png?1542633567",
      "world-first.co.uk",
      "awin",
      "8051"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["729",
      "1",
      "Wowcher",
      "https://ui.awin.com/images/upload/merchant/profile/3595.png?1311779574",
      "wowcher.co.uk",
      "awin",
      "3595"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["730",
      "1",
      "XLN Telecom",
      "https://ui.awin.com/images/upload/merchant/profile/5413.png?1407849337",
      "xln.co.uk",
      "awin",
      "5413"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["731",
      "1",
      "YouGarden.com",
      "https://ui.awin.com/images/upload/merchant/profile/5686.png?1383668053",
      "yougarden.com",
      "awin",
      "5686"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["732",
      "1",
      "Zapals FR",
      "https://ui.awin.com/images/upload/merchant/profile/7883.png?1484318501",
      "zapals.com",
      "awin",
      "7883"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["733",
      "1",
      "Zavvi UK",
      "https://ui.awin.com/images/upload/merchant/profile/2549.png?1547129900",
      "zavvi.com",
      "awin",
      "2549"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["734",
      "1",
      "Zest Beauty",
      "https://ui.awin.com/images/upload/merchant/profile/2878.png?1469445246",
      "zestbeauty.com",
      "awin",
      "2878"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["735",
      "1",
      "ZipVit",
      "https://ui.awin.com/images/upload/merchant/profile/6218.png?1420722147",
      "zipvit.co.uk",
      "awin",
      "6218"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["736",
      "1",
      "Zooplus.co.uk",
      "https://ui.awin.com/images/upload/merchant/profile/2940.png?1281352845",
      "zooplus.co.uk",
      "awin",
      "2940"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["737",
      "1",
      "airconcentre",
      "https://ui.awin.com/images/upload/merchant/profile/6055.png?1410440768",
      "airconcentre.co.uk",
      "awin",
      "6055"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["738",
      "1",
      "allbeauty.com UK",
      "https://ui.awin.com/images/upload/merchant/profile/911.png?1572434284",
      "allbeauty.com",
      "awin",
      "911"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["739",
      "1",
      "anyvan",
      "https://ui.awin.com/images/upload/merchant/profile/2673.png?1528885135",
      "anyvan.com",
      "awin",
      "2673"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["740",
      "1",
      "avira.com FR",
      "https://ui.awin.com/images/upload/merchant/profile/7253.png?1521724981",
      "avira.com",
      "awin",
      "7253"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["741",
      "1",
      "bloom.uk.com",
      "https://ui.awin.com/images/upload/merchant/profile/5920.png?1496759958",
      "uk.com",
      "awin",
      "5920"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["742",
      "1",
      "cable and cotton",
      "https://ui.awin.com/images/upload/merchant/profile/7515.png?1476270905",
      "cableandcotton.co.uk",
      "awin",
      "7515"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["743",
      "1",
      "e2save",
      "https://ui.awin.com/images/upload/merchant/profile/422.png?1450276418",
      "e2save.com",
      "awin",
      "422"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["744",
      "1",
      "eDreams (CA)",
      "https://ui.awin.com/images/upload/merchant/profile/6588.png?1481619469",
      "edreams.com",
      "awin",
      "6588"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["745",
      "1",
      "eDreams (US)",
      "https://ui.awin.com/images/upload/merchant/profile/6587.png?1458305492",
      "edreams.net",
      "awin",
      "6587"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["746",
      "1",
      "eDreams DE",
      "https://ui.awin.com/images/upload/merchant/profile/9857.png?1505995670",
      "edreams.de",
      "awin",
      "9857"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["747",
      "1",
      "eHarmony",
      "https://ui.awin.com/images/upload/merchant/profile/2163.png?1506438553",
      "greatviews.de",
      "awin",
      "2163"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["748",
      "1",
      "ebookers FR",
      "https://ui.awin.com/images/upload/merchant/profile/7901.png?1488391120",
      "ebookers.fr",
      "awin",
      "7901"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["749",
      "1",
      "ebookers IE",
      "https://ui.awin.com/images/upload/merchant/profile/7905.png?1558626007",
      "ebookers.ie",
      "awin",
      "7905"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["750",
      "1",
      "ebookers UK",
      "https://ui.awin.com/images/upload/merchant/profile/7904.png?1558625976",
      "ebookers.com",
      "awin",
      "7904"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["751",
      "1",
      "edX (Global)",
      "https://ui.awin.com/images/upload/merchant/profile/6798.png?1461683907",
      "edx.org",
      "awin",
      "6798"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, NULL, NULL, ?, ?);',
      ["752",
      "1",
      "energybulbs.co.uk",
      "https://ui.awin.com/images/upload/merchant/profile/5854.png?1396878228",
      "energybulbs.co.uk",
      "awin",
      "5854"]);
    }

    public function down(Schema $schema) : void
    {
        
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'1dayfly.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'247homerescue.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'365tickets.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'365games.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'5pointz.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'66fit.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'991.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'aquarterof.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'aph.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'asics.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'outlet.asics.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'axatravelinsurance.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'acess.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'activitysuperstore.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'addisonlee.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'adnams.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'advancedmp3players.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'agoda.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'airparks.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'alfresco-holidays.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'allsaints.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'alpineelements.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'amba-hotel.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'amplebosom.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'amstardmc.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'andsotobed.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'fancydress.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'applevacations.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'applegate.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'appleyardflowers.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'arenaflowers.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'argento.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'artofmetal.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'artisanti.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'asda.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'astutegraphics.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'attraction-tickets-direct.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'attractiontix.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'audible.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'aureliaskincare.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'auto-doc.fr\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'awin.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'diy.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'bargainmax.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'botb.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'bulkpowders.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'babybjorn.fr\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'babybjorn.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'balanceme.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'barkerandstonehouse.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'barrheadtravel.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'base.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'bateauxlondon.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'baytree-interiors.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'beautyexpert.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'beautyworksonline.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'beaverbrooks.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'bedstar.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'bedandbathemporium.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'bedeckhome.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'bellamiaboutique.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'doorfurnituredirect.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'bestseller.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'bestsellers.eu\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'beterbed.be\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'beterbed.nl\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'biggreensmile.de\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'biggreensmile.fr\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'biggreensmile.nl\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'biggreensmile.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'bitdefender.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'bloom-boutique.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'bloomingdirect.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'blossominggifts.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'bluebella.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'bonusprint.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'boots.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'bouxavenue.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'britanniahotels.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'britishcornershop.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'brittsuperfoods.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'budgetfamilybreaks.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'budgetair.fr\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'building-supplies-online.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'bunches.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'burton.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'buyagift.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'buysubscriptions.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'cwsellors.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'cwclothes.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'cadburygiftsdirect.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'caledoniantravel.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'calumetphoto.nl\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'cameraking.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'camper.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'campingworld.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'cancerresearchuk.org\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'canon.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'carparts4less.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'carphonewarehouse.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'cartridgepeople.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'cartridgemonkey.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'castinstyle.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'celticandco.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'centarahotelsresorts.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'chainreactioncycles.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'character-online.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'chargrilled.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'chocolatetradingco.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'choicefurnituresuperstore.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'christiesdirect.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'circa.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'citadines.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'clareflorist.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'clarins.fr\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'clickbasin.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'clickgolf.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'closetlondon.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'conceptbycruise.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'confetti.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'conrad.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'converse.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'cosyfeet.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'coverwise.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'coxandcox.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'craftstash.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'crafterscompanion.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'create.net\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'createandcraft.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'crewclothing.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'cuckooland.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'culturevulturedirect.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'currys.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'business.currys.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'currys.ie\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'partmaster.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'dcthomsonshop.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ddfskincare.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'deen.nl\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'damart.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'dancedirect.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'dapperstreet.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'dare2b.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'darlingsofchelsea.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'davidshuttle.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'dx.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'dealdigger.nl\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'decluttr.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'deguisetoi.fr\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'denbypottery.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'deramores.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'designersofas4u.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'designerpaint.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'desperateseller.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'destinationkillarney.ie\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'devittinsurance.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'dinnerly.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'direct-carexcess.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'direct-fireplaces.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'directstoves.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'direct-travel.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'directsavetelecom.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'discountgolfstore.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'discount-supplements.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'dogalogue.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'doggiesolutions.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'dorothyperkins.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'dorothyperkins.fr\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'dresslily.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'drinksupermarket.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'drogisterij.net\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'e-file.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'esedirect.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'espaskincare.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'easirent.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'easylunettes.fr\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'easycar.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'easylifegroup.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'easyvan.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ebuyer.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'edplace.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'edinburghairport.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'electricaldiscountuk.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'electricalexperience.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'electrostub.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'elkedagietsleuks.nl\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'encoretickets.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'energyhelpline.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'eqvvs.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'essentialtravel.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'estyl.pl\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ethicalsuperstore.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'etihad.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'eurail.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'eurocarparts.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'europcar.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'europcar.fr\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'europcar.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'evans.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'evengreener.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'evolutionorganics.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'exantediet.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'experiencedays.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'expertverdict.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'fhinds.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'facialco.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'farmacialoreto.it\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'fashionworld.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'fatface.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'finsbury-shoes.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'tpexpress.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'fitnessoptions.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'flavourly.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'floridatix.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'flowerstation.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'flowercard.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'fonehouse.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'foodspring.fr\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'footasylum.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'fortnumandmason.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'foyles.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'fragranceexpert.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'fragrancedirect.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'fredolsencruises.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'frenchconnection.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ffs.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'welovefrugi.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'furniture-work.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'furntastic.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'gadventures.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'gbposters.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'gamolagolf.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'gardenbird.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'gardenwildlifedirect.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'gardeningdirect.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'gatineau.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'gazzetta.it\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'gearbest.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'gemondo.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'getgoinginsurance.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'gettingpersonal.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ghostbikes.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'giffgaff.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'giftpup.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'gigaclear.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'gleneaglehotel.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'glossybox.fr\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'glossybox.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'glossybox.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'gogroopie.ie\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'gooutdoors.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'goldsmiths.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'golfgeardirect.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'golfsupport.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'gourmesso.fr\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'gousto.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'grahambrown.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'graze.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'uk.graze.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'greatbritishmeat.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'greatfurnituretradingco.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'greatplains.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'greatmagazines.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'greenpeople.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'greetz.be\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'greetz.nl\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'growgorgeous.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'gtech.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'gymcube.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'hp.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'hqhair.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'hallstonedirect.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'hamleys.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'happysocks.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'hawkin.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'haysominteriors.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'hearingdirect.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'highstreettv.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'hippowaste.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'hivehome.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'holidayextras.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'hollandandbarrett.ie\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'home24.fr\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'homecrafts.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'hoppa.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'hothair.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'hotelduvin.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'hotels.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'housesimple.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'houseofbath.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'houseweb.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'hudsonshoes.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'hughes.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'hunkemoller.fr\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'hunkemoller.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'payasugym.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'hyperoptic.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'isawitfirst.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'idmobile.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'itgovernance.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'itgovernanceusa.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'iceland.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'idealfit.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'imagineireland.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'indemne.fr\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'informatique.nl\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ingramspark.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'inkfactory.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'inktweb.nl\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'inov-8.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'instantprint.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'insure4aday.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'interrose.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'myinterrail.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ivoryisledesigns.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'iwantoneofthose.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'jdwilliams.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'jmldirect.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'jtxfitness.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'vakantiebeurs.nl\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'jacamo.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'jackjones.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'jacksflightclub.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'jamgolf.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'jamesvillas.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'jerseyplantsdirect.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'jigsaw-and-more.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'jurawatches.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'justgoholidays.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'justpark.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'justyou.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'kidscavern.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'kingswilldream.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'kingsmillshotel.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'kitbag.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'koifootwear.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'komplett.ie\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'konditor.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'kukoon.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'lamuscle.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'lan.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ledbulbs.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'lsa-international.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'landsend.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'lastminute.ie\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'latestinbeauty.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'laughstub.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'lauraashley.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'laybrook.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'leisurelakesbikes.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'libertygames.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'lifeandlooks.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'lights4living.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'lights.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'lights.ie\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ligo.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'linensbargains.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'livingdna.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'livingsocial.ie\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'lloydspharmacy.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'onlinedoctor.lloydspharmacy.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'locksonline.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'loewshotels.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'logitravel.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'lol.travel\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'londontheatredirect.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'lonelyplanet.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'looking4.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'loudshop.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'lovell-rugby.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'lovellsoccer.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'luminaire.fr\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'mandco.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'magix.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'macback.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'macdonaldhotels.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'machinemart.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'madamrage.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'maille.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'malmaison.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'mankind.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'manukadoctor.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'mappinandwebb.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'marisota.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'markwarner.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'mattressman.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'mattressnextday.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'maxcleavage.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'maxinutrition.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'medicaltravelinsurance.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'megakoszulki.pl\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'memoryfoamwarehouse.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'menkind.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'merchandisingplaza.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'meshcomputers.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'metrofone.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'midrive.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'mindfulchef.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'minervacrafts.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'mioskincare.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'misspap.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'missselfridge.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'misterspex.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'mobiles.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'modainpelle.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'modanisa.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'momox-shop.fr\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'moneysupermarket.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'monsoon.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'monsterpetsupplies.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'moo.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'moonpig.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'morphyrichards.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'musclefood.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'museumselection.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'musicmagpie.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'mybusinessprofile.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'myphotopuzzle.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'mms.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ca.myprotein.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'us.myprotein.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'myprotein.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'nonnon.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'nowtv.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'names.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'nationalgallery.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'nationalholidays.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'pens.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'nationaltrust.org.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'naturalcollection.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'naturalimagewigs.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'navigation.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'neweracap.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'nisbets.fr\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'nisbets.nl\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'norfolkhideaways.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'noukies.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'novatech.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'o2recycle.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'odsdesignerclothing.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'olproshop.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'oakfurnituresuperstore.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'officemonster.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'officestationery.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'okamac.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'olive.pl\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'onthebeach.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'one.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ordnancesurvey.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'otel.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'outdoorgear.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'oxfam.org.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ozobot.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'phd.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'pnhome.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'prcdirect.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'pacificholidaysinc.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'pantofelek24.pl\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'papajohns.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'paperchase.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'paradigit.nl\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'parcelhero.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'parcelcompare.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'parkbcp.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'parkinn.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'paulsboutique.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'peaceloveworld.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'perfume-click.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'perfumeshopping.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'petandcountrystore.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'pharmacyfirst.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'piajewellery.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'picstop.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'picniq.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'piecesauto24.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'planetorganic.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'plattetv.nl\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'polskikoszyk.pl\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'poochandmutt.store\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'poppyshop.org.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'postoffice.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'post-a-rose.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'predatornutrition.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'premierman.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'prestigeflowers.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'prezzybox.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'pricerighthome.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'primesport.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'printerinks.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'printerpix.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'probikekit.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'probikekit.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'proteindynamix.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'protyre.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'provizsports.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'publicdesire.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'purecollection.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'purelydiamonds.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'purpleparking.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'qdosbreakdown.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'qpjewellers.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'quandoo.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'questor-insurance.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'qustodio.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'rajapack.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ry.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'radissonblu.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'radissonblu-edwardian.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'radissonhotels.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'raffaello-network.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'railcard.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'raileasy.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'rapidonline.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ravensburger.us\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'rawdenim.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'razerzone.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'redletterdays.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'redbubble.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'regatta.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'revolutionbeauty.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ribblecycles.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'robertdyas.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'robinsonsshoes.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'romanoriginals.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'royalalbert.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'royaldoulton.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ruralretreats.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'rutlandcycling.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ryman.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'sevenstore.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'showpo.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'safestore.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'savapoint.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'scholastic.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'schuh.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'schuh.ie\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'scottshotelkillarney.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'scottsofstow.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'scottsdalegolf.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'scribbler.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'seetickets.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'selections.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'sennheiser.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'serenataflowers.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'sewingmachines.shop\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'shoezone.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'shoesinternational.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'shopto.net\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'shorefield.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'short-breaks.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'shotdeadinthehead.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'simplelandlordsinsurance.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'simplybe.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'simplycook.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'simplyhike.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'simplyhe.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'simplyled.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'simplysupplements.net\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'simplysupplements.fr\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'simplyswim.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'skifrance.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'sky.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'slapiton.tv\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'slendertone.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'slingsby.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'smartbuyglasses.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'snapfish.ie\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'snapfish.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'sockshop.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'sofasandstuff.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'songgalaxy.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'sonicdirect.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'sonymobile.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'sosandar.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'spabreaks.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'videoscribe.co\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'spartoo.be\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'spartoo.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'spartoo.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'speedyhen.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'spiraldirect.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'sportandleisureuk.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'sportsshoes.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'stuartslondon.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'stubhub.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'studio.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'summerfrance.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'supercheapsigns.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'superstar.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'superprezenty.pl\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'swooneditions.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'sykescottages.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'tfnclondon.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'tvcables.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'tailorstore.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'talktalkbusiness.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'talktalk.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'tassimo.fr\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'tech.trade\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'tech21.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'tedbaker.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'teletextholidays.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'templespa.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'templespa-usa.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'bookdepository.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'bookdepository.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'thebookofeveryone.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'thebrehon.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'thefashionbible.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'thefinejewellerycompany.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'gardenfurniturecentre.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'guidedogs.org.uk/\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'thejewelhut.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'themaritime.ie\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'theproteinworks.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'radissoncollection.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'therange.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'britishlegion.org.uk/\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'thesafeshop.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'sofa-company.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'thetowelshop.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'thewatchcabin.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'thewatchhut.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'thehouseshop.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'thedrinkshop.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'theatreticketsdirect.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'thisispowder.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'thorntons.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'three.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'thrifty.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'tilley.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'tinhat.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'tiqets.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'titantravel.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'tobydeals.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'tobytiger.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'toffs.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'tokyolaundry.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'tomtop.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'tonergiant.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'tooled-up.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'toople.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'topmba.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'topuniversities.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'topdoginsurance.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'topman.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'tostadora.fr\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'toughmudder.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'traingenius.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'trampoline-collection.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'trampoline-warehouse.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'travelinsurance4medical.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'travelluggagecabinbags.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'travelsupermarket.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'travelodge.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'travelzoo.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'tredz.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'tresorparis.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'triabeauty.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'trip.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'tripadvisor.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'trophyskin.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'trustedhousesitters.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'tub-collection.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'tunestub.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'tweakslumber.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'twinings.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ugg.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ukbreakaways.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'uksportimports.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ukswimwear.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'uktoolcentre.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ukhost4u.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'uksoccershop.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'underarmour.fr\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'unitedconsumers.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'urbansurfer.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'vapemate.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'vitl.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'valuepetsupplies.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'valueflora.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'vanmildert.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'vegaooparty.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'vestryonline.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'viagogo.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'viagogo.fr\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'victoriaplum.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'village-hotels.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'vintagewinegifts.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'virginmedia.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'vitaminplanet.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'vivobarefoot.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'vivomed.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'vivrehome.pl\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'vobis.pl\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'volcom.fr\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'votre-carte-grise.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'wconcept.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'wkruk.pl\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'walg.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'wallis.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'wallsandfloors.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'waltons.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'warehouse-aquatics.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'warnerleisurehotels.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'warrantywise.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'watchshop.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'waterford.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'waterstones.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'weddingplaninsurance.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'wedgwood.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'weekendesk.be\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'weirdfish.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'wendywutours.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'westendtheatrebreaks.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'wexphotovideo.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'whittard.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'wickes.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'agroluxe.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'wiltshirefarmfoods.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'wombconcept.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'woodyattcurtains.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'woolovers.us\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'woolovers.fr\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'woolovers.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'wooshairportextras.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'worldremit.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'world-first.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'wowcher.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'xln.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'yougarden.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'zapals.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'zavvi.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'zestbeauty.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'zipvit.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'zooplus.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'airconcentre.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'allbeauty.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'anyvan.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'avira.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'uk.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'cableandcotton.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'e2save.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'edreams.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'edreams.net\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'edreams.de\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'greatviews.de\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ebookers.fr\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ebookers.ie\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ebookers.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'edx.org\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'energybulbs.co.uk\'));');
    }
}