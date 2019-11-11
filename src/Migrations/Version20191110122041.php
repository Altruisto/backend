<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191110122041 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SEQUENCE installation_logs_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE notifications_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE users_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE transactions_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE cause_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE partners_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE excluded_subdomains_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE excluded_pages_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE partner_categories_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE reset_password_tokens_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE installation_logs (id INT NOT NULL, user_id INT DEFAULT NULL, referred_by VARCHAR(255) DEFAULT NULL, ip VARCHAR(255) NOT NULL, ref VARCHAR(255) NOT NULL, installation_id VARCHAR(255) NOT NULL, user_agent VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, updated_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_FA28A61FA76ED395 ON installation_logs (user_id)');
        $this->addSql('CREATE TABLE notifications (id INT NOT NULL, user_id INT DEFAULT NULL, content TEXT NOT NULL, type VARCHAR(32) NOT NULL, status VARCHAR(32) DEFAULT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_6000B0D3A76ED395 ON notifications (user_id)');
        $this->addSql('CREATE TABLE users (id INT NOT NULL, password VARCHAR(64) NOT NULL, email VARCHAR(64) NOT NULL, username VARCHAR(64) NOT NULL, currency VARCHAR(255) NOT NULL, referred_by VARCHAR(255) DEFAULT NULL, ref VARCHAR(255) NOT NULL, is_active BOOLEAN NOT NULL, api_key VARCHAR(255) NOT NULL, cause_area VARCHAR(255) NOT NULL, google_id VARCHAR(255) DEFAULT NULL, facebook_id VARCHAR(255) DEFAULT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1483A5E9E7927C74 ON users (email)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1483A5E9F85E0677 ON users (username)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1483A5E9146F3EA3 ON users (ref)');
        $this->addSql('CREATE TABLE transactions (id INT NOT NULL, cause_id INT DEFAULT NULL, user_id INT DEFAULT NULL, partner_id INT DEFAULT NULL, network VARCHAR(255) NOT NULL, external_id VARCHAR(255) NOT NULL, status VARCHAR(255) NOT NULL, commission_amount INT NOT NULL, commission_currency VARCHAR(255) NOT NULL, sale_amount INT NOT NULL, sale_currency VARCHAR(255) NOT NULL, customer_country_code VARCHAR(255) DEFAULT NULL, tracker VARCHAR(255) DEFAULT NULL, ref VARCHAR(255) DEFAULT NULL, response_content JSON DEFAULT NULL, transaction_date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_EAA81A4C66E2221E ON transactions (cause_id)');
        $this->addSql('CREATE INDEX IDX_EAA81A4CA76ED395 ON transactions (user_id)');
        $this->addSql('CREATE INDEX IDX_EAA81A4C9393F8FE ON transactions (partner_id)');
        $this->addSql('CREATE TABLE cause (id INT NOT NULL, cause VARCHAR(255) NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE partners (id INT NOT NULL, category_id INT DEFAULT NULL, name TEXT NOT NULL, logo_url VARCHAR(255) NOT NULL, domain VARCHAR(255) NOT NULL, checkout_url_partial VARCHAR(255) DEFAULT NULL, cookie_expiration_time INT NOT NULL, donation VARCHAR(255) DEFAULT NULL, affiliation_network_name VARCHAR(255) NOT NULL, external_affiliation_id VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_EFEB516412469DE2 ON partners (category_id)');
        $this->addSql('CREATE TABLE excluded_subdomains (id INT NOT NULL, partner_id INT DEFAULT NULL, name TEXT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_B8DCBA819393F8FE ON excluded_subdomains (partner_id)');
        $this->addSql('CREATE TABLE excluded_pages (id INT NOT NULL, partner_id INT DEFAULT NULL, name TEXT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_D1A37D7A9393F8FE ON excluded_pages (partner_id)');
        $this->addSql('CREATE TABLE partner_categories (id INT NOT NULL, name TEXT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE reset_password_tokens (id INT NOT NULL, user_id INT DEFAULT NULL, token VARCHAR(255) NOT NULL, expire_at TIMESTAMP(0) WITH TIME ZONE NOT NULL, valid BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_F045D5AA5F37A13B ON reset_password_tokens (token)');
        $this->addSql('CREATE INDEX IDX_F045D5AAA76ED395 ON reset_password_tokens (user_id)');
        $this->addSql('ALTER TABLE installation_logs ADD CONSTRAINT FK_FA28A61FA76ED395 FOREIGN KEY (user_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE notifications ADD CONSTRAINT FK_6000B0D3A76ED395 FOREIGN KEY (user_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE transactions ADD CONSTRAINT FK_EAA81A4C66E2221E FOREIGN KEY (cause_id) REFERENCES cause (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE transactions ADD CONSTRAINT FK_EAA81A4CA76ED395 FOREIGN KEY (user_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE transactions ADD CONSTRAINT FK_EAA81A4C9393F8FE FOREIGN KEY (partner_id) REFERENCES partners (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE partners ADD CONSTRAINT FK_EFEB516412469DE2 FOREIGN KEY (category_id) REFERENCES partner_categories (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE excluded_subdomains ADD CONSTRAINT FK_B8DCBA819393F8FE FOREIGN KEY (partner_id) REFERENCES partners (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE excluded_pages ADD CONSTRAINT FK_D1A37D7A9393F8FE FOREIGN KEY (partner_id) REFERENCES partners (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE reset_password_tokens ADD CONSTRAINT FK_F045D5AAA76ED395 FOREIGN KEY (user_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE installation_logs DROP CONSTRAINT FK_FA28A61FA76ED395');
        $this->addSql('ALTER TABLE notifications DROP CONSTRAINT FK_6000B0D3A76ED395');
        $this->addSql('ALTER TABLE transactions DROP CONSTRAINT FK_EAA81A4CA76ED395');
        $this->addSql('ALTER TABLE reset_password_tokens DROP CONSTRAINT FK_F045D5AAA76ED395');
        $this->addSql('ALTER TABLE transactions DROP CONSTRAINT FK_EAA81A4C66E2221E');
        $this->addSql('ALTER TABLE transactions DROP CONSTRAINT FK_EAA81A4C9393F8FE');
        $this->addSql('ALTER TABLE excluded_subdomains DROP CONSTRAINT FK_B8DCBA819393F8FE');
        $this->addSql('ALTER TABLE excluded_pages DROP CONSTRAINT FK_D1A37D7A9393F8FE');
        $this->addSql('ALTER TABLE partners DROP CONSTRAINT FK_EFEB516412469DE2');
        $this->addSql('DROP SEQUENCE installation_logs_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE notifications_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE users_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE transactions_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE cause_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE partners_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE excluded_subdomains_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE excluded_pages_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE partner_categories_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE reset_password_tokens_id_seq CASCADE');
        $this->addSql('DROP TABLE installation_logs');
        $this->addSql('DROP TABLE notifications');
        $this->addSql('DROP TABLE users');
        $this->addSql('DROP TABLE transactions');
        $this->addSql('DROP TABLE cause');
        $this->addSql('DROP TABLE partners');
        $this->addSql('DROP TABLE excluded_subdomains');
        $this->addSql('DROP TABLE excluded_pages');
        $this->addSql('DROP TABLE partner_categories');
        $this->addSql('DROP TABLE reset_password_tokens');
    }
}
