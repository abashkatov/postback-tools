<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210824170413 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE postback (id INT AUTO_INCREMENT NOT NULL, conversion_type LONGTEXT NOT NULL, conversion_status LONGTEXT NOT NULL, conversion_result LONGTEXT NOT NULL, sub_aff_id LONGTEXT NOT NULL, sub_id1 LONGTEXT NOT NULL, sub_id2 LONGTEXT NOT NULL, sub_id3 LONGTEXT NOT NULL, sub_id4 LONGTEXT NOT NULL, sub_id5 LONGTEXT NOT NULL, sub_id6 LONGTEXT NOT NULL, conversion_time DATETIME NOT NULL, params JSON NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE postback');
    }
}
