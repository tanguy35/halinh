<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211226133540 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaires DROP FOREIGN KEY FK_D9BEC0C41EBAF6CC');
        $this->addSql('DROP INDEX IDX_D9BEC0C41EBAF6CC ON commentaires');
        $this->addSql('ALTER TABLE commentaires CHANGE articles_id article_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE commentaires ADD CONSTRAINT FK_D9BEC0C47294869C FOREIGN KEY (article_id) REFERENCES articles (id) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX IDX_D9BEC0C47294869C ON commentaires (article_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaires DROP FOREIGN KEY FK_D9BEC0C47294869C');
        $this->addSql('DROP INDEX IDX_D9BEC0C47294869C ON commentaires');
        $this->addSql('ALTER TABLE commentaires CHANGE article_id articles_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE commentaires ADD CONSTRAINT FK_D9BEC0C41EBAF6CC FOREIGN KEY (articles_id) REFERENCES articles (id)');
        $this->addSql('CREATE INDEX IDX_D9BEC0C41EBAF6CC ON commentaires (articles_id)');
    }
}
