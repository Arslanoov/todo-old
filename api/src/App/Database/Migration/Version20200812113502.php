<?php declare(strict_types=1);

namespace App\Database\Migration;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200812113502 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SEQUENCE todo_schedule_task_steps_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('ALTER TABLE oauth_access_tokens ALTER client TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE oauth_access_tokens ALTER client DROP DEFAULT');
        $this->addSql('ALTER TABLE oauth_access_tokens ALTER scopes TYPE JSON');
        $this->addSql('ALTER TABLE oauth_access_tokens ALTER scopes DROP DEFAULT');
        $this->addSql('ALTER TABLE oauth_auth_codes ALTER client TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE oauth_auth_codes ALTER client DROP DEFAULT');
        $this->addSql('ALTER TABLE oauth_auth_codes ALTER scopes TYPE JSON');
        $this->addSql('ALTER TABLE oauth_auth_codes ALTER scopes DROP DEFAULT');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE todo_schedule_task_steps_id_seq CASCADE');
        $this->addSql('ALTER TABLE oauth_auth_codes ALTER client TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE oauth_auth_codes ALTER client DROP DEFAULT');
        $this->addSql('ALTER TABLE oauth_auth_codes ALTER scopes TYPE JSON');
        $this->addSql('ALTER TABLE oauth_auth_codes ALTER scopes DROP DEFAULT');
        $this->addSql('ALTER TABLE oauth_access_tokens ALTER client TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE oauth_access_tokens ALTER client DROP DEFAULT');
        $this->addSql('ALTER TABLE oauth_access_tokens ALTER scopes TYPE JSON');
        $this->addSql('ALTER TABLE oauth_access_tokens ALTER scopes DROP DEFAULT');
    }
}
