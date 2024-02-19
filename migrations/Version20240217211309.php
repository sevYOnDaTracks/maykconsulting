<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240217211309 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE country (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE dossier (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) DEFAULT NULL, sbn VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE garant_financier (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, date_demande DATETIME DEFAULT NULL, pays VARCHAR(255) DEFAULT NULL, statut_demande INT NOT NULL, ville_etude VARCHAR(255) DEFAULT NULL, path_passport VARCHAR(255) DEFAULT NULL, path_admission_file VARCHAR(255) DEFAULT NULL, informations VARCHAR(1500) DEFAULT NULL, path_garant_file VARCHAR(255) DEFAULT NULL, last_update DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_DACFD158A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE public_message (id INT AUTO_INCREMENT NOT NULL, sender_name VARCHAR(255) NOT NULL, sender_email VARCHAR(255) NOT NULL, sender_message VARCHAR(1500) NOT NULL, date_time_reception DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, date_of_birth DATE DEFAULT NULL, name VARCHAR(255) DEFAULT NULL, last_name VARCHAR(255) DEFAULT NULL, is_verified TINYINT(1) NOT NULL, school_level VARCHAR(255) DEFAULT NULL, phone VARCHAR(255) DEFAULT NULL, filiary VARCHAR(255) DEFAULT NULL, avatar VARCHAR(255) DEFAULT NULL, numero_identification_national VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE garant_financier ADD CONSTRAINT FK_DACFD158A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE garant_financier DROP FOREIGN KEY FK_DACFD158A76ED395');
        $this->addSql('DROP TABLE country');
        $this->addSql('DROP TABLE dossier');
        $this->addSql('DROP TABLE garant_financier');
        $this->addSql('DROP TABLE public_message');
        $this->addSql('DROP TABLE `user`');
    }
}
