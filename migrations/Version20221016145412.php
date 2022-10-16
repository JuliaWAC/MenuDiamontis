<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221016145412 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE menu (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) NOT NULL, description LONGTEXT NOT NULL, price DOUBLE PRECISION NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE menu_ingredient (menu_id INT NOT NULL, ingredient_id INT NOT NULL, INDEX IDX_4A02CCA2CCD7E912 (menu_id), INDEX IDX_4A02CCA2933FE08C (ingredient_id), PRIMARY KEY(menu_id, ingredient_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE menu_ingredient ADD CONSTRAINT FK_4A02CCA2CCD7E912 FOREIGN KEY (menu_id) REFERENCES menu (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE menu_ingredient ADD CONSTRAINT FK_4A02CCA2933FE08C FOREIGN KEY (ingredient_id) REFERENCES ingredient (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE menu_ingredient DROP FOREIGN KEY FK_4A02CCA2CCD7E912');
        $this->addSql('ALTER TABLE menu_ingredient DROP FOREIGN KEY FK_4A02CCA2933FE08C');
        $this->addSql('DROP TABLE menu');
        $this->addSql('DROP TABLE menu_ingredient');
    }
}
