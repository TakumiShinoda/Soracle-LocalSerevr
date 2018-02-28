<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BatteryVoltsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BatteryVoltsTable Test Case
 */
class BatteryVoltsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BatteryVoltsTable
     */
    public $BatteryVolts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.battery_volts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('BatteryVolts') ? [] : ['className' => BatteryVoltsTable::class];
        $this->BatteryVolts = TableRegistry::get('BatteryVolts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BatteryVolts);

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
