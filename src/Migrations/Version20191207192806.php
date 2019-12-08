<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration.
 */
final class Version20191207192806 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["800",
      "1",
      "Healthy Pets",
      "",
      "healthypets.com",
      NULL,
      "linkshare",
      "16"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["801",
      "1",
      "Displate",
      "",
      "displate.com",
      NULL,
      "linkshare",
      "17"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["802",
      "1",
      "Christopher and Banks",
      "",
      "christopherandbanks.com",
      NULL,
      "linkshare",
      "19"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["803",
      "1",
      "HatCountry",
      "",
      "hatcountry.com",
      NULL,
      "linkshare",
      "20"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["804",
      "1",
      "Melissa & Doug",
      "",
      "melissaanddoug.com",
      NULL,
      "linkshare",
      "23"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["805",
      "1",
      "ful",
      "",
      "ful.com",
      NULL,
      "linkshare",
      "947"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["806",
      "1",
      "Christys'",
      "",
      "christys-hats.com",
      NULL,
      "linkshare",
      "949"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["807",
      "1",
      "Zaful",
      "",
      "zaful.com",
      NULL,
      "linkshare",
      "957"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["808",
      "1",
      "TBDRESS",
      "",
      "tbdress.com",
      NULL,
      "linkshare",
      "959"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["809",
      "1",
      "Wigsbuy",
      "",
      "wigsbuy.com",
      NULL,
      "linkshare",
      "960"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["810",
      "1",
      "Flower Shopping",
      "",
      "flowershopping.com",
      NULL,
      "linkshare",
      "963"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["811",
      "1",
      "PureVPN",
      "",
      "purevpn.com",
      NULL,
      "linkshare",
      "964"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["812",
      "1",
      "ASPIGA",
      "",
      "aspiga.com",
      NULL,
      "linkshare",
      "966"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["813",
      "1",
      "bloomingdale's",
      "",
      "bloomingdales.com",
      NULL,
      "linkshare",
      "968"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["814",
      "1",
      "YCMC",
      "",
      "ycmc.com",
      NULL,
      "linkshare",
      "971"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["815",
      "1",
      "BHCosmetics",
      "",
      "bhcosmetics.com",
      NULL,
      "linkshare",
      "972"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["816",
      "1",
      "BLACK",
      "",
      "black.co.uk",
      NULL,
      "linkshare",
      "974"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["817",
      "1",
      "B2CJewels",
      "",
      "b2cjewels.com",
      NULL,
      "linkshare",
      "975"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["818",
      "1",
      "GolfEtail",
      "",
      "golfetail.com",
      NULL,
      "linkshare",
      "976"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["819",
      "1",
      "Smash",
      "",
      "samash.com",
      NULL,
      "linkshare",
      "977"]);
      $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
      ["820",
      "1",
      "Microsoft",
      "",
      "microsoft.com",
      NULL,
      "linkshare",
      "978"]);
    }

    public function down(Schema $schema) : void
    {
        
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'healthypets.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'displate.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'christopherandbanks.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'hatcountry.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'melissaanddoug.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ful.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'christys-hats.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'zaful.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'tbdress.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'wigsbuy.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'flowershopping.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'purevpn.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'aspiga.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'bloomingdales.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ycmc.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'bhcosmetics.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'black.co.uk\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'b2cjewels.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'golfetail.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'samash.com\'));');
      $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'microsoft.com\'));');
    }
}