<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191114192041 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('INSERT INTO cause ("id", "cause", "created_at") VALUES (1, \'extreme_poverty\', \'2019-11-14 19:35:17\');');
        $this->addSql('INSERT INTO cause ("id", "cause", "created_at") VALUES (2, \'animals\',	\'2019-11-14 19:35:25\');');
    }

    public function down(Schema $schema) : void
    {
    }
}
