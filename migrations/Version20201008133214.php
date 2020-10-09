<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201008133214 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE compte_epargne (id INT AUTO_INCREMENT NOT NULL, salarie_id INT DEFAULT NULL, particulier_id INT DEFAULT NULL, num_compte VARCHAR(16) NOT NULL, cle_rib INT NOT NULL, num_agence VARCHAR(255) NOT NULL, solde INT NOT NULL, montant_renum INT NOT NULL, frais_ouverture INT NOT NULL, date_ouverture DATETIME NOT NULL, INDEX IDX_19FDB51A5859934A (salarie_id), INDEX IDX_19FDB51AA89E0E67 (particulier_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE compte_epargne ADD CONSTRAINT FK_19FDB51A5859934A FOREIGN KEY (salarie_id) REFERENCES client_salarie (id)');
        $this->addSql('ALTER TABLE compte_epargne ADD CONSTRAINT FK_19FDB51AA89E0E67 FOREIGN KEY (particulier_id) REFERENCES client_particulier (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE compte_epargne');
    }
}
