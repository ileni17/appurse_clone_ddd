<?php

declare(strict_types=1);

namespace App\Infrastructure\Driven\Persistence\Doctrine\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221124085035 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE app_information (id CHAR(36) NOT NULL COMMENT \'(DC2Type:wordInformationId)\', identificator VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, score DOUBLE PRECISION NOT NULL, url VARCHAR(255) NOT NULL, icon VARCHAR(255) NOT NULL, INDEX search_idx (identificator), UNIQUE INDEX unique_app_idx (identificator), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE app_information');
    }
}
