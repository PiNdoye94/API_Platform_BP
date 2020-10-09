<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201009113230 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE compte_courant DROP FOREIGN KEY FK_73F05D6C5859934A');
        $this->addSql('DROP INDEX IDX_73F05D6C5859934A ON compte_courant');
        $this->addSql('ALTER TABLE compte_courant DROP salarie_id');
        $this->addSql('ALTER TABLE compte_epargne DROP FOREIGN KEY FK_19FDB51A5859934A');
        $this->addSql('ALTER TABLE compte_epargne DROP FOREIGN KEY FK_19FDB51AA89E0E67');
        $this->addSql('DROP INDEX IDX_19FDB51A5859934A ON compte_epargne');
        $this->addSql('DROP INDEX IDX_19FDB51AA89E0E67 ON compte_epargne');
        $this->addSql('ALTER TABLE compte_epargne DROP salarie_id, DROP particulier_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE compte_courant ADD salarie_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE compte_courant ADD CONSTRAINT FK_73F05D6C5859934A FOREIGN KEY (salarie_id) REFERENCES client_salarie (id)');
        $this->addSql('CREATE INDEX IDX_73F05D6C5859934A ON compte_courant (salarie_id)');
        $this->addSql('ALTER TABLE compte_epargne ADD salarie_id INT DEFAULT NULL, ADD particulier_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE compte_epargne ADD CONSTRAINT FK_19FDB51A5859934A FOREIGN KEY (salarie_id) REFERENCES client_salarie (id)');
        $this->addSql('ALTER TABLE compte_epargne ADD CONSTRAINT FK_19FDB51AA89E0E67 FOREIGN KEY (particulier_id) REFERENCES client_particulier (id)');
        $this->addSql('CREATE INDEX IDX_19FDB51A5859934A ON compte_epargne (salarie_id)');
        $this->addSql('CREATE INDEX IDX_19FDB51AA89E0E67 ON compte_epargne (particulier_id)');
    }
}
