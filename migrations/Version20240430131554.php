<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240430131554 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE hebergement (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, document_file VARCHAR(255) DEFAULT NULL, pays VARCHAR(255) DEFAULT NULL, statut_demande INT DEFAULT NULL, ville_etude VARCHAR(255) DEFAULT NULL, path_passport VARCHAR(255) DEFAULT NULL, path_admission_file VARCHAR(255) DEFAULT NULL, informations VARCHAR(255) DEFAULT NULL, justificatif_paiement VARCHAR(255) DEFAULT NULL, last_update DATETIME DEFAULT NULL, hebergement_file VARCHAR(255) DEFAULT NULL, date_demande DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_4852DD9CA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE hebergement ADD CONSTRAINT FK_4852DD9CA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE hebergement DROP FOREIGN KEY FK_4852DD9CA76ED395');
        $this->addSql('DROP TABLE hebergement');
    }
}
