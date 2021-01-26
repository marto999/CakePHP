<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContratosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContratosTable Test Case
 */
class ContratosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ContratosTable
     */
    protected $Contratos;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Contratos',
        'app.Clientes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Contratos') ? [] : ['className' => ContratosTable::class];
        $this->Contratos = $this->getTableLocator()->get('Contratos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Contratos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
