<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RequestStatusesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RequestStatusesTable Test Case
 */
class RequestStatusesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RequestStatusesTable
     */
    public $RequestStatuses;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.request_statuses',
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
        $config = TableRegistry::exists('RequestStatuses') ? [] : ['className' => 'App\Model\Table\RequestStatusesTable'];
        $this->RequestStatuses = TableRegistry::get('RequestStatuses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RequestStatuses);

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
