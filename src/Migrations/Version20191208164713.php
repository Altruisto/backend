<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191208164713 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1057",
          "1",
          "Booking.com",
          "https://q-cf.bstatic.com/static/img/b26logo/booking_logo_retina/22615963add19ac6b6d715a97c8d477e8b95b7ea.png",
          "booking.com",
          "0",
          "booking",
          "1308879"]);
        $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1058",
          "1",
          "ebay",
          "https://upload.wikimedia.org/wikipedia/commons/4/48/EBay_logo.png",
          "ebay.com",
          "1",
          "ebay",
          "711-53200-19255-0"]);
        $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1059",
          "1",
          "ebay",
          "https://upload.wikimedia.org/wikipedia/commons/4/48/EBay_logo.png",
          "ebay.com.au",
          "1",
          "ebay",
          "705-53470-19255-0"]);
        $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1060",
          "1",
          "ebay",
          "https://upload.wikimedia.org/wikipedia/commons/4/48/EBay_logo.png",
          "ebay.at",
          "1",
          "ebay",
          "5221-53469-19255-0"]);
        $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1061",
          "1",
          "ebay",
          "https://upload.wikimedia.org/wikipedia/commons/4/48/EBay_logo.png",
          "ebay.be",
          "1",
          "ebay",
          "1553-53471-19255-0"]);
        $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1062",
          "1",
          "ebay",
          "https://upload.wikimedia.org/wikipedia/commons/4/48/EBay_logo.png",
          "ebay.fr",
          "1",
          "ebay",
          "709-53476-19255-0"]);
        $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1063",
          "1",
          "ebay",
          "https://upload.wikimedia.org/wikipedia/commons/4/48/EBay_logo.png",
          "ebay.de",
          "1",
          "ebay",
          "707-53477-19255-0"]);
        $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1064",
          "1",
          "ebay",
          "https://upload.wikimedia.org/wikipedia/commons/4/48/EBay_logo.png",
          "ebay.ie",
          "1",
          "ebay",
          "5282-53468-19255-0"]);
        $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1065",
          "1",
          "ebay",
          "https://upload.wikimedia.org/wikipedia/commons/4/48/EBay_logo.png",
          "ebay.it",
          "1",
          "ebay",
          "724-53478-19255-0"]);
        $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1066",
          "1",
          "ebay",
          "https://upload.wikimedia.org/wikipedia/commons/4/48/EBay_logo.png",
          "ebay.nl",
          "1",
          "ebay",
          "1346-53482-19255-0"]);
        $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1067",
          "1",
          "ebay",
          "https://upload.wikimedia.org/wikipedia/commons/4/48/EBay_logo.png",
          "ebay.es",
          "1",
          "ebay",
          "1185-53479-19255-0"]);
        $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1068",
          "1",
          "ebay",
          "https://upload.wikimedia.org/wikipedia/commons/4/48/EBay_logo.png",
          "ebay.ch",
          "1",
          "ebay",
          "5222-53480-19255-0"]);
        $this->addSql('INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
          ["1069",
          "1",
          "ebay",
          "https://upload.wikimedia.org/wikipedia/commons/4/48/EBay_logo.png",
          "ebay.co.uk",
          "1",
          "ebay",
          "710-53481-19255-0"]);
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'booking.com\'));');
        $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ebay.com\'));');
        $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ebay.com.au\'));');
        $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ebay.at\'));');
        $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ebay.be\'));');
        $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ebay.ca\'));');
        $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ebay.fr\'));');
        $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ebay.de\'));');
        $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ebay.ie\'));');
        $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ebay.it\'));');
        $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ebay.nl\'));');
        $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ebay.es\'));');
        $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ebay.ch\'));');
        $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'ebay.co.uk\'));');
    }
}
