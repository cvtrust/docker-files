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
    private $dbh2017;

    /**
     * @var \PDO
     */
    private $dbh2008;

    protected function setUp(): void
    {
        parent::setUp();

        $this->dbh2017 = new \PDO(
            'sqlsrv:server=sql-server;Database=master;APP=PdoSqlServerTest',
            'sa',
            'BdTAekTAdR7cbvpu'
        );

        $this->dbh2008 = new \PDO(
            'sqlsrv:server=172.16.1.49;Database=master;APP=PdoSqlServerTest',
            'cvtrptsapp',
            'CVTrptsapp99'
        );
    }

    /**
     * Can Connect
     *
     * @test
     */
    public function it_can_connect(): void
    {
        self::assertInstanceOf(\PDO::class, $this->dbh2017);
    }

    /**
     * Can select data
     *
     * @test
     */
    public function it_can_select_data(): void
    {
        $now = Carbon::now('UTC');
        $stmt = $this->dbh2017->query('SELECT 1, GETDATE()');

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
         $stmt = $this->dbh2017->query('SELECT REPLICATE(\'*\', 8000)');

         $stmt->execute();

         self::assertEquals(8000, mb_strlen($stmt->fetchColumn(0)));
     }

    /**
     * Can Connect
     *
     * @test
     */
    public function it_can_connect_2008(): void
    {
        self::assertInstanceOf(\PDO::class, $this->dbh2008);
    }

    /**
     * Can select data
     *
     * @test
     */
    public function it_can_select_data_2008(): void
    {
        $now = Carbon::now('America/Los_Angeles');
        $stmt = $this->dbh2008->query('SELECT 1, GETDATE()');

        $stmt->execute();

        $data = $stmt->fetch(\PDO::FETCH_NUM);

        self::assertEquals(1, $data[0]);
        self::assertEquals($now->format('Y-m-d'), Carbon::parse($data[1], 'America/Los_Angeles')->format('Y-m-d'));
    }

    /**
     * Can handle large column data
     *
     * @test
     */
     public function it_can_handle_large_column_data_2008(): void
     {
         $stmt = $this->dbh2008->query('SELECT REPLICATE(\'*\', 8000)');

         $stmt->execute();

         self::assertEquals(8000, mb_strlen($stmt->fetchColumn(0)));
     }
}
