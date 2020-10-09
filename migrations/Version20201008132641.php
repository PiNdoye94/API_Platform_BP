<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201008132641 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE compte_courant DROP FOREIGN KEY FK_73F05D6C5397FDF7');
        $this->addSql('DROP INDEX IDX_73F05D6C5397FDF7 ON compte_courant');
        $this->addSql('ALTER TABLE compte_courant CHANGE salarie_id_id salarie_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE compte_courant ADD CONSTRAINT FK_73F05D6C5859934A FOREIGN KEY (salarie_id) REFERENCES client_salarie (id)');
        $this->addSql('CREATE INDEX IDX_73F05D6C5859934A ON compte_courant (salarie_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE compte_courant DROP FOREIGN KEY FK_73F05D6C5859934A');
        $this->addSql('DROP INDEX IDX_73F05D6C5859934A ON compte_courant');
        $this->addSql('ALTER TABLE compte_courant CHANGE salarie_id salarie_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE compte_courant ADD CONSTRAINT FK_73F05D6C5397FDF7 FOREIGN KEY (salarie_id_id) REFERENCES client_salarie (id)');
        $this->addSql('CREATE INDEX IDX_73F05D6C5397FDF7 ON compte_courant (salarie_id_id)');
    }
}
