<?php
declare(strict_types=1);


namespace CVTrustTest\DockerFiles\Database\SqlServer;

use Carbon\Carbon;
use CVTrustTest\DockerFiles\Database\DatabaseTestCase;

/**
 * @group SqlServer
 */
class PdoSqlServerTest extends DatabaseTestCase
{
    /**
     * @var \PDO
     */
    private $dbh;

    protected function setUp()
    {
        parent::setUp();

        $this->dbh = new \PDO('sqlsrv:server=sql-server;Database=master', 'sa', 'BdTAekTAdR7cbvpu');
    }


    /**
     * Can Connect
     *
     * @test
     */
    public function it_can_Connect(): void
    {
        self::assertInstanceOf(\PDO::class, $this->dbh);
    }

    /**
     * Can select data
     *
     * @test
     */
    public function it_can_select_data(): void
    {
        $now = Carbon::now('UTC');
        $stmt = $this->dbh->query('SELECT 1, GETDATE()');

        $stmt->execute();

        $data = $stmt->fetch(\PDO::FETCH_NUM);

        self::assertEquals(1, $data[0]);
        self::assertEquals($now->format('Y-m-d'), Carbon::parse($data[1])->format('Y-m-d'));
    }

    /**
     * Can handle large column data
     *
     * @test
     */
     public function it_can_handle_large_column_data(): void
     {
         $stmt = $this->dbh->query('SELECT REPLICATE(\'*\', 8000)');

         $stmt->execute();

         self::assertEquals(8000, mb_strlen($stmt->fetchColumn(0)));
     }
}
