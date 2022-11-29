<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221129115812 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE apps DROP FOREIGN KEY FK_101C7E5A12469DE2');
        $this->addSql('DROP INDEX IDX_101C7E5A12469DE2 ON apps');
        $this->addSql('ALTER TABLE apps DROP category_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE apps ADD category_id CHAR(36) DEFAULT NULL COMMENT \'(DC2Type:appCategoryId)\'');
        $this->addSql('ALTER TABLE apps ADD CONSTRAINT FK_101C7E5A12469DE2 FOREIGN KEY (category_id) REFERENCES app_category (id)');
        $this->addSql('CREATE INDEX IDX_101C7E5A12469DE2 ON apps (category_id)');
    }
}
