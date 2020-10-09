<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201008132205 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE compte_courant (id INT AUTO_INCREMENT NOT NULL, salarie_id_id INT DEFAULT NULL, nom_employeur VARCHAR(255) NOT NULL, rs_employeur VARCHAR(255) NOT NULL, id_employeur VARCHAR(255) NOT NULL, adresse_employeur VARCHAR(255) NOT NULL, solde INT NOT NULL, date_ouverture DATETIME NOT NULL, INDEX IDX_73F05D6C5397FDF7 (salarie_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE compte_courant ADD CONSTRAINT FK_73F05D6C5397FDF7 FOREIGN KEY (salarie_id_id) REFERENCES client_salarie (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE compte_courant');
    }
}
