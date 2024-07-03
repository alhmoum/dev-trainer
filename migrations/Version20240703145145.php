<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240703145145 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE subject (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE subject_trainer (subject_id INT NOT NULL, trainer_id INT NOT NULL, INDEX IDX_6097A48223EDC87 (subject_id), INDEX IDX_6097A482FB08EDF6 (trainer_id), PRIMARY KEY(subject_id, trainer_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE subject_trainer ADD CONSTRAINT FK_6097A48223EDC87 FOREIGN KEY (subject_id) REFERENCES subject (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE subject_trainer ADD CONSTRAINT FK_6097A482FB08EDF6 FOREIGN KEY (trainer_id) REFERENCES trainer (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE subject_trainer DROP FOREIGN KEY FK_6097A48223EDC87');
        $this->addSql('ALTER TABLE subject_trainer DROP FOREIGN KEY FK_6097A482FB08EDF6');
        $this->addSql('DROP TABLE subject');
        $this->addSql('DROP TABLE subject_trainer');
    }
}