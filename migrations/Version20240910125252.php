<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240910125252 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE post CHANGE id id INT UNSIGNED AUTO_INCREMENT NOT NULL, CHANGE post_date_created post_date_created DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, CHANGE post_date_published post_date_published DATETIME DEFAULT NULL, CHANGE post_published post_published TINYINT(1) DEFAULT 0 NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE post CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE post_date_created post_date_created DATETIME DEFAULT NULL, CHANGE post_date_published post_date_published DATETIME NOT NULL, CHANGE post_published post_published TINYINT(1) DEFAULT NULL');
    }
}
