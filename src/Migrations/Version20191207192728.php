<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration.
 */
final class Version20191207192728 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["753",
      "1",
      "Aliexpress",
      "https://members.cj.com/member/publisher/logo/10586482.gif",
      "aliexpress.com",
      "3",
      "cj",
      "2270432"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["754",
      "1",
      "Apt2B Furniture and Home Decor",
      "https://members.cj.com/member/publisher/logo/13505476.gif",
      "apt2b.com",
      "45",
      "cj",
      "4460821"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["755",
      "1",
      "Athena Cosmetics",
      "https://cdn.shopify.com/s/files/1/2680/4784/t/13/assets/mobile-logo_210x.png?8035",
      "revitalash.com",
      "45",
      "cj",
      "5015545"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["756",
      "1",
      "BackJoy",
      "https://cdn.shopify.com/s/files/1/1271/7481/files/backjoy-logo-noicon_180x.png?v=1525915580",
      "backjoy.com",
      "45",
      "cj",
      "3593457"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["757",
      "1",
      "Barnes & Noble",
      "https://fontmeme.com/images/Barnes-Noble-Logo.jpg",
      "barnesandnoble.com",
      "1",
      "cj",
      "4258829"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["758",
      "1",
      "Beddinginn.com",
      "https://members.cj.com/member/publisher/logo/13560005.gif",
      "beddinginn.com",
      "30",
      "cj",
      "4479075"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["759",
      "1",
      "Brasty Eastern Europe",
      "https://www.brasty.cz/assets/_common/img/logo_brasty_white.svg",
      "brasty.cz",
      "60",
      "cj",
      "4727030"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["760",
      "1",
      "BRASTY.DE",
      "https://www.brasty.cz/assets/_common/img/logo_brasty_white.svg",
      "brasty.de",
      "60",
      "cj",
      "4727029"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["761",
      "1",
      "BRASTY.PL",
      "https://www.brasty.cz/assets/_common/img/logo_brasty_white.svg",
      "brasty.pl",
      "60",
      "cj",
      "4718383"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["762",
      "1",
      "Carolyn Pollack/American West Jewelry",
      "https://members.cj.com/member/publisher/logo/14119422.gif",
      "carolynpollackjewelry.com",
      "14",
      "cj",
      "4593168"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["763",
      "1",
      "Chemical Guys",
      "https://www.chemicalguys.com/on/demandware.static/Sites-chemicalguys-Site/-/default/dw9a5cb1c2/images/svg-icons/chemical-guys-logo.svg",
      "chemicalguys.com",
      "45",
      "cj",
      "4615063"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["764",
      "1",
      "Clearly AU and NZ",
      "https://en.wikipedia.org/wiki/File:Clearly_logo.svg",
      "clearly.com.au",
      "14",
      "cj",
      "4583502"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["765",
      "1",
      "Crescent Electric Supply Company",
      "https://commons.wikimedia.org/wiki/File:Cesco-logo.png",
      "cesco.com",
      "45",
      "cj",
      "4253806"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["766",
      "1",
      "Defense",
      "https://members.cj.com/member/publisher/logo/14130929.gif",
      "defensebrand.com",
      "30",
      "cj",
      "4618309"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["767",
      "1",
      "Deluxe Business Products",
      "https://members.cj.com/member/publisher/logo/11348823.gif",
      "deluxe.com",
      "60",
      "cj",
      "3471979"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["768",
      "1",
      "Domain.com",
      "https://www.domain.com/static/img/domaincom/logo.svg",
      "domain.com",
      "90",
      "cj",
      "445101"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["769",
      "1",
      "DR-HO'S",
      "https://members.cj.com/member/publisher/logo/15218875.gif",
      "drhonow.com",
      "30",
      "cj",
      "4914709"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["770",
      "1",
      "eM Client",
      "https://emclient.com/assets/img/emc_img_logo_new.svg?v=636872375920000000",
      "emclient.com",
      "45",
      "cj",
      "4124009"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["771",
      "1",
      "Engaged Media Inc.",
      "https://engaged.media/wp-content/uploads/2019/09/EML_Logo_without_R.png",
      "engagedmediamags.com",
      "45",
      "cj",
      "4198549"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["772",
      "1",
      "EricDress.com",
      "https://members.cj.com/member/publisher/logo/13644771.gif",
      "ericdress.com",
      "30",
      "cj",
      "4502591"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["773",
      "1",
      "FactoryOutletStore.com",
      "https://members.cj.com/member/publisher/logo/10456193.gif",
      "factoryoutletstore.com",
      "60",
      "cj",
      "1918541"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["774",
      "1",
      "Flights Mojo",
      "https://members.cj.com/member/publisher/logo/15232626.gif",
      "flightsmojo.com",
      "90",
      "cj",
      "4905786"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["775",
      "1",
      "Fun.com",
      "https://www.couponchief.com/images/logos/65021_sq.jpg",
      "fun.com",
      "30",
      "cj",
      "4449509"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["776",
      "1",
      "Hale Groves",
      "https://members.cj.com/member/publisher/logo/10620722.gif",
      "halegroves.com",
      "45",
      "cj",
      "2511560"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["777",
      "1",
      "HalloweenCostumes.com",
      "https://s3-ap-southeast-2.amazonaws.com/bitcoinrewards/shops/logos/original/halloweencostumes-com?1518045709",
      "halloweencostumes.com",
      "30",
      "cj",
      "3252578"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["778",
      "1",
      "Holiday Autos",
      "https://members.cj.com/member/publisher/logo/13794297.gif",
      "holidayautos.com",
      "30",
      "cj",
      "4532902"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["779",
      "1",
      "Iolo System Mechanic",
      "https://vignette.wikia.nocookie.net/logopedia/images/7/7c/Iolologowithtext.png/revision/latest/scale-to-width-down/200?cb=20110902190001",
      "iolo.com",
      "45",
      "cj",
      "1525519"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["780",
      "1",
      "Kaspersky UK",
      "https://members.cj.com/member/publisher/logo/10735152.gif",
      "kaspersky.co.uk",
      "45",
      "cj",
      "2660710"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["781",
      "1",
      "Love Scent Pheromone",
      "https://love-scent.com/media/wysiwyg/Love_Scent_Logo_Products.jpg",
      "love-scent.com",
      "45",
      "cj",
      "293124"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["782",
      "1",
      "MoneyGram UK",
      "https://www.moneygram.com/mgo/gb/en/assets/images/mgo-logo.svg",
      "moneygram.co.uk",
      "45",
      "cj",
      "4897401"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["783",
      "1",
      "MoneyGram US",
      "https://members.cj.com/member/publisher/logo/14517588.gif",
      "moneygram.com",
      "45",
      "cj",
      "4414998"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["784",
      "1",
      "Nokeys Global",
      "https://members.cj.com/member/publisher/logo/15531384.gif",
      "nokeys.com",
      "30",
      "cj",
      "4992773"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["785",
      "1",
      "NordVPN",
      "https://members.cj.com/member/publisher/logo/14920749.gif",
      "nordvpn.com",
      "30",
      "cj",
      "4837117"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["786",
      "1",
      "PandaHall",
      "https://www.pandahall.com/buyer/images_new/home/en-logo.png",
      "pandahall.com",
      "30",
      "cj",
      "4295086"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["787",
      "1",
      "Park 'N Fly",
      "https://members.cj.com/member/publisher/logo/13677313.gif",
      "pnf.com",
      "30",
      "cj",
      "4159712"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["788",
      "1",
      "PinkBasis",
      "https://www.pinkbasis.com/skin/frontend/pink_rwd/default/images/PBlogo.png",
      "pinkbasis.com",
      "30",
      "cj",
      "4268837"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["789",
      "1",
      "Richmond & Finch",
      "https://www.richmondfinch.com/cdnassets/Banners-home/logo_fact_original.png",
      "richmondfinch.com",
      "45",
      "cj",
      "4880706"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["790",
      "1",
      "SilverRushStyle",
      "http://www.silverrushstyle.com/templates/silver4/media/images/christmas/srs-christmas-logo.png",
      "silverrushstyle.com",
      "60",
      "cj",
      "3874186"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["791",
      "1",
      "Suntransfers.com",
      "https://theme.zdassets.com/theme_assets/1027568/9e50d2618d5d914c0159d83104447ac4890de9e8.png",
      "suntransfers.com",
      "30",
      "cj",
      "4727627"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["792",
      "1",
      "SVMoscow",
      "https://members.cj.com/member/publisher/logo/14585605.gif",
      "svmoscow.com",
      "30",
      "cj",
      "4736281"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["793",
      "1",
      "TallMenShoes.com",
      "https://www.yswcdn.com/3149/L/tms-logo-mobile_11575050944.png",
      "tallmenshoes.com",
      "60",
      "cj",
      "3326244"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["794",
      "1",
      "TNVitamins",
      "https://www.tnvitamins.com/media/logo/stores/1/logo_tnvitamins.png",
      "tnvitamins.com",
      "60",
      "cj",
      "2965253"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["795",
      "1",
      "TopView Sightseeing",
      "https://members.cj.com/member/publisher/logo/15254890.gif",
      "topviewnyc.com",
      "45",
      "cj",
      "4923443"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["796",
      "1",
      "VIAJES CARREFOUR ES",
      "https://back-viajescarrefour.orchestra-platform.com/admin/TS/fckUserFiles/Content_Image/editorial/empresas/logo.png",
      "viajes.carrefour.es",
      "30",
      "cj",
      "4762269"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["797",
      "1",
      "XCoser - Cosplay Costume",
      "https://members.cj.com/member/publisher/logo/15655072.gif",
      "xcoser.com",
      "45",
      "cj",
      "5015546"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["798",
      "1",
      "Zizo Wireless",
      "https://members.cj.com/member/publisher/logo/15304315.gif",
      "zizowireless.com",
      "30",
      "cj",
      "4920320"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["799",
      "1",
      "Zoro Tools & Building Supplies UK",
      "https://members.cj.com/member/publisher/logo/14285701.gif",
      "zoro.co.uk",
      "30",
      "cj",
      "4642615"]);
    }

    public function down(Schema $schema) : void
    {
        
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'aliexpress.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'apt2b.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'revitalash.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'BackJoy.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'BarnesandNoble.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'beddinginn.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'brasty.cz\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'brasty.de\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'brasty.pl\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'carolynpollackjewelry.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'chemicalguys.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'clearly.com.au\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'cesco.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'defensebrand.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'deluxe.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'domain.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'drhonow.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'emclient.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'engagedmediamags.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ericdress.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'factoryoutletstore.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'flightsmojo.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'fun.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'HaleGroves.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'halloweencostumes.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'Holidayautos.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'iolo.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'kaspersky.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'love-scent.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'moneygram.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'moneygram.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'nokeys.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'nordvpn.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'pandahall.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'pnf.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'pinkbasis.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'richmondfinch.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'silverrushstyle.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'suntransfers.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'svmoscow.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'tallmenshoes.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'tnvitamins.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'topviewnyc.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'viajes.carrefour.es\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'xcoser.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'zizowireless.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'zoro.co.uk\'));');
    }
}