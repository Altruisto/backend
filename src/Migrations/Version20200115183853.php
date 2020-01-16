<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200115183853 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql(
            'INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
            [
                "1070",
                "1",
                "etsy",
                "https://ui.awin.com/images/upload/merchant/profile/6091.png?1409754355",
                "etsy.com",
                "30",
                "awin",
                "6091"
            ]
        );
        $this->addSql('UPDATE partners SET external_affiliation_id = \'37981\' WHERE domain = \'bloomingdales.com\'');
        $this->addSql('UPDATE partners SET external_affiliation_id = \'37573\' WHERE domain = \'ycmc.com\'');
        $this->addSql('UPDATE partners SET external_affiliation_id = \'36779\' WHERE domain = \'bhcosmetics.com\'');
        $this->addSql('UPDATE partners SET external_affiliation_id = \'35731\' WHERE domain = \'black.co.uk\'');
        $this->addSql('UPDATE partners SET external_affiliation_id = \'35490\' WHERE domain = \'b2cjewels.com\'');
        $this->addSql('UPDATE partners SET external_affiliation_id = \'35397\' WHERE domain = \'golfetail.com\'');
        $this->addSql('UPDATE partners SET external_affiliation_id = \'35126\' WHERE domain = \'samash.com\'');
        $this->addSql('UPDATE partners SET external_affiliation_id = \'42634\' WHERE domain = \'healthypets.com\'');
        $this->addSql('UPDATE partners SET external_affiliation_id = \'42611\' WHERE domain = \'displate.com\'');
        $this->addSql('UPDATE partners SET external_affiliation_id = \'42584\' WHERE domain = \'christopherandbanks.com\'');
        $this->addSql('UPDATE partners SET external_affiliation_id = \'42434\' WHERE domain = \'hatcountry.com\'');
        $this->addSql('UPDATE partners SET external_affiliation_id = \'41493\' WHERE domain = \'melissaanddoug.com\'');
        $this->addSql('UPDATE partners SET external_affiliation_id = \'42086\' WHERE domain = \'ful.com\'');
        $this->addSql('UPDATE partners SET external_affiliation_id = \'41663\' WHERE domain = \'christys-hats.com\'');
        $this->addSql('UPDATE partners SET external_affiliation_id = \'40046\' WHERE domain = \'zaful.com\'');
        $this->addSql('UPDATE partners SET external_affiliation_id = \'39651\' WHERE domain = \'tbdress.com\'');
        $this->addSql('UPDATE partners SET external_affiliation_id = \'39473\' WHERE domain = \'wigsbuy.com\'');
        $this->addSql('UPDATE partners SET external_affiliation_id = \'38726\' WHERE domain = \'flowershopping.com\'');
        $this->addSql('UPDATE partners SET external_affiliation_id = \'38687\' WHERE domain = \'purevpn.com\'');
        $this->addSql('UPDATE partners SET external_affiliation_id = \'38401\' WHERE domain = \'aspiga.com\'');
        $this->addSql('UPDATE partners SET external_affiliation_id = \'24542\' WHERE domain = \'microsoft.com\'');
        $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'getwinesdirect.com\'));');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DELETE FROM "partners" WHERE (("domain" = \'etsy.com\'));');
        $this->addSql('UPDATE partners SET external_affiliation_id = \'968\' WHERE domain = \'bloomingdales.com\'');
        $this->addSql('UPDATE partners SET external_affiliation_id = \'971\' WHERE domain = \'ycmc.com\'');
        $this->addSql('UPDATE partners SET external_affiliation_id = \'972\' WHERE domain = \'bhcosmetics.com\'');
        $this->addSql('UPDATE partners SET external_affiliation_id = \'974\' WHERE domain = \'black.co.uk\'');
        $this->addSql('UPDATE partners SET external_affiliation_id = \'975\' WHERE domain = \'b2cjewels.com\'');
        $this->addSql('UPDATE partners SET external_affiliation_id = \'976\' WHERE domain = \'golfetail.com\'');
        $this->addSql('UPDATE partners SET external_affiliation_id = \'977\' WHERE domain = \'samash.com\'');
        $this->addSql('UPDATE partners SET external_affiliation_id = \'16\' WHERE domain = \'healthypets.com\'');
        $this->addSql('UPDATE partners SET external_affiliation_id = \'17\' WHERE domain = \'displate.com\'');
        $this->addSql('UPDATE partners SET external_affiliation_id = \'19\' WHERE domain = \'christopherandbanks.com\'');
        $this->addSql('UPDATE partners SET external_affiliation_id = \'20\' WHERE domain = \'hatcountry.com\'');
        $this->addSql('UPDATE partners SET external_affiliation_id = \'23\' WHERE domain = \'melissaanddoug.com\'');
        $this->addSql('UPDATE partners SET external_affiliation_id = \'947\' WHERE domain = \'ful.com\'');
        $this->addSql('UPDATE partners SET external_affiliation_id = \'949\' WHERE domain = \'christys-hats.com\'');
        $this->addSql('UPDATE partners SET external_affiliation_id = \'957\' WHERE domain = \'zaful.com\'');
        $this->addSql('UPDATE partners SET external_affiliation_id = \'959\' WHERE domain = \'tbdress.com\'');
        $this->addSql('UPDATE partners SET external_affiliation_id = \'960\' WHERE domain = \'wigsbuy.com\'');
        $this->addSql('UPDATE partners SET external_affiliation_id = \'963\' WHERE domain = \'flowershopping.com\'');
        $this->addSql('UPDATE partners SET external_affiliation_id = \'964\' WHERE domain = \'purevpn.com\'');
        $this->addSql('UPDATE partners SET external_affiliation_id = \'966\' WHERE domain = \'aspiga.com\'');
        $this->addSql('UPDATE partners SET external_affiliation_id = \'978\' WHERE domain = \'microsoft.com\'');
        $this->addSql(
            'INSERT INTO partners ("id", "category_id", "name", "logo_url", "domain", "checkout_url_partial", "cookie_expiration_time", "donation", "affiliation_network_name", "external_affiliation_id") VALUES (?, ?, ?, ?, ?, NULL, ?, NULL, ?, ?);',
            [
                "918",
                "1",
                "Get Wines Direct",
                "https://c.cfjump.com/Avatars/D8C4FC3E-8289-4773-95C3-E616CE8F0757.png",
                "getwinesdirect.com",
                "30",
                "commissionfactory",
                "9371"
            ]
        );
    }
}
