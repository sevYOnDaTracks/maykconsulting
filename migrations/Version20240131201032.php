<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240131201032 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE garant_financier ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE garant_financier ADD CONSTRAINT FK_DACFD158A76ED395 FOREIGN KEY (user_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_DACFD158A76ED395 ON garant_financier (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE garant_financier DROP CONSTRAINT FK_DACFD158A76ED395');
        $this->addSql('DROP INDEX UNIQ_DACFD158A76ED395');
        $this->addSql('ALTER TABLE garant_financier DROP user_id');
    }
}
