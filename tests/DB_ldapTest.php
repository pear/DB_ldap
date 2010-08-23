<?php
/**
 * Unit Tests for the DB_ldap createSequence method
 *
 * @todo add tests
 */

/**
 * PHPUnit main() hack
 *
 * "Call class::main() if this source file is executed directly."
 * @since 1.2.0
 */
if (!defined("PHPUnit_MAIN_METHOD")) {
    define("PHPUnit_MAIN_METHOD", "DB_ldapTest::main");
}
/**
 * TestCase
 *
 * required by PHPUnit
 * @since 1.2.0
 */
require_once "PHPUnit/Framework/TestCase.php";
/**
 * TestSuite
 *
 * required by PHPUnit
 * @since 1.2.0
 */
require_once "PHPUnit/Framework/TestSuite.php";


/**
 * Unit Testing of the DB_ldap class
 */
class DB_ldapTest extends PHPUnit_Framework_TestCase {

    /**
     * Runs the test methods of this class.
     * @access public
     * @static
     * @since 1.2.0
     */
    public static function main() {
        require_once "PHPUnit/TextUI/TestRunner.php";

        $suite  = new PHPUnit_Framework_TestSuite("DB_ldapTest");
        $result = PHPUnit_TextUI_TestRunner::run($suite);
    }

    /**
     * NOW LIST THE TEST CASES -------------------------------------------------------|
     */

    /**
     * normal, expected cases ------------------------------------------|
     */

    /**
     * demonstrate the correct behavior -----------------------|
     */

    /**
     * Shows that these tests are run at all.
     * @since 1.2.0
     */
    public function testTestsAreRun() {
        $this->assertTrue(true);
    }
    
    /**
     * Demonstrates that create sequence can cut out the initial word pair
     * @since 1.2.0
     */
    public function testCreateSequence() {
        $seq_name = "sn=123456,ou=sequences,dc=php,dc=net";
        
        $stub = $this->getMock('DB_ldap', array('simpleQuery'));
        $stub->expects($this->any())
             ->method('simpleQuery')
             ->will($this->returnArgument(0));
 
        $v = $stub->createSequence($seq_name);
        
        $this->assertEquals(
            'sn=123456', 
            $v['sn'], 
            "The value should be what the first part of seq_name was!"
        );
    }
    
    /**
     * END OF "demonstrate the correct behavior" --------------|
     */

    /**
     * END OF "normal, expected cases" ---------------------------------|
     */


    /**
     * odd, edge cases -------------------------------------------------|
     */
    /**
     * END OF "odd, edge cases" ----------------------------------------|
     * @todo write some "edge" test cases
     */

    /**
     * END OF "NOW LIST THE TEST CASES" ----------------------------------------------|
     */

}

/**
 * PHPUnit main() hack
 * "Call class::main() if this source file is executed directly."
 * @since 1.2.0
 */
if (PHPUnit_MAIN_METHOD == "ParserPageGetSourceLocationTests::main") {
    tests_ParserPageGetSourceLocationTests::main();
}
?>