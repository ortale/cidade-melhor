<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RequestTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RequestTypesTable Test Case
 */
class RequestTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RequestTypesTable
     */
    public $RequestTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.request_types',
        'app.requests'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('RequestTypes') ? [] : ['className' => 'App\Model\Table\RequestTypesTable'];
        $this->RequestTypes = TableRegistry::get('RequestTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RequestTypes);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
