<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231109101327 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE course_location (course_id INT NOT NULL, location_id INT NOT NULL, INDEX IDX_F72AE49D591CC992 (course_id), INDEX IDX_F72AE49D64D218E (location_id), PRIMARY KEY(course_id, location_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE course_location ADD CONSTRAINT FK_F72AE49D591CC992 FOREIGN KEY (course_id) REFERENCES course (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE course_location ADD CONSTRAINT FK_F72AE49D64D218E FOREIGN KEY (location_id) REFERENCES location (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE course_location DROP FOREIGN KEY FK_F72AE49D591CC992');
        $this->addSql('ALTER TABLE course_location DROP FOREIGN KEY FK_F72AE49D64D218E');
        $this->addSql('DROP TABLE course_location');
    }
}
