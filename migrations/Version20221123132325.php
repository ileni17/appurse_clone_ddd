<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221123132325 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE app_category (id CHAR(36) NOT NULL COMMENT \'(DC2Type:appCategoryId)\', identificator VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_ECC796CB403FBF1 (identificator), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE apps (id CHAR(36) NOT NULL COMMENT \'(DC2Type:appId)\', category_id CHAR(36) DEFAULT NULL COMMENT \'(DC2Type:appCategoryId)\', identificator VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, score DOUBLE PRECISION NOT NULL, url VARCHAR(255) NOT NULL, icon VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_101C7E5AB403FBF1 (identificator), INDEX IDX_101C7E5A12469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE apps ADD CONSTRAINT FK_101C7E5A12469DE2 FOREIGN KEY (category_id) REFERENCES app_category (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE apps DROP FOREIGN KEY FK_101C7E5A12469DE2');
        $this->addSql('DROP TABLE app_category');
        $this->addSql('DROP TABLE apps');
    }
}
