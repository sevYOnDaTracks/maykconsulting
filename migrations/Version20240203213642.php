<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240203213642 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE garant_financier ADD raison_sociale VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE garant_financier ADD registre_commerce VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE garant_financier ADD identifiant_fiscale VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE garant_financier ADD adresse VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE garant_financier ADD telephone VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE garant_financier ADD email VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE garant_financier ADD siret VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE garant_financier DROP date_demande');
        $this->addSql('ALTER TABLE garant_financier DROP pays');
        $this->addSql('ALTER TABLE garant_financier DROP statut_demande');
        $this->addSql('ALTER TABLE garant_financier DROP ville_etude');
        $this->addSql('ALTER TABLE garant_financier DROP path_passport');
        $this->addSql('ALTER TABLE garant_financier DROP path_admission_file');
        $this->addSql('ALTER TABLE garant_financier DROP informations');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE garant_financier ADD date_demande TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE garant_financier ADD pays VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE garant_financier ADD statut_demande INT NOT NULL');
        $this->addSql('ALTER TABLE garant_financier ADD ville_etude VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE garant_financier ADD path_passport VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE garant_financier ADD path_admission_file VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE garant_financier ADD informations VARCHAR(1500) DEFAULT NULL');
        $this->addSql('ALTER TABLE garant_financier DROP raison_sociale');
        $this->addSql('ALTER TABLE garant_financier DROP registre_commerce');
        $this->addSql('ALTER TABLE garant_financier DROP identifiant_fiscale');
        $this->addSql('ALTER TABLE garant_financier DROP adresse');
        $this->addSql('ALTER TABLE garant_financier DROP telephone');
        $this->addSql('ALTER TABLE garant_financier DROP email');
        $this->addSql('ALTER TABLE garant_financier DROP siret');
    }
}
