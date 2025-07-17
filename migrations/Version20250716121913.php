<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250716121913 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE bureaux (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, adresse VARCHAR(255) DEFAULT NULL, statut TINYINT(1) NOT NULL, created_at DATETIME DEFAULT NULL, nombre_pieces INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservations (id INT AUTO_INCREMENT NOT NULL, statut TINYINT(1) NOT NULL, id_bureau INT NOT NULL, id_user INT NOT NULL, date_debut_reservation DATETIME NOT NULL, date_fin_reservation DATETIME NOT NULL, crated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, login VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reservations ADD FOREIGN KEY (id_bureau) REFERENCES bureaux(id) ON DELETE RESTRICT ON UPDATE RESTRICT;');
        $this->addSql('ALTER TABLE reservations ADD FOREIGN KEY (id_user) REFERENCES users(id) ON DELETE RESTRICT ON UPDATE RESTRICT');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE bureaux');
        $this->addSql('DROP TABLE reservations');
        $this->addSql('DROP TABLE users');
    }
}
