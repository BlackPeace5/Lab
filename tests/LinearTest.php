<?php
namespace gazetov;

require_once __DIR__.'/../core/EquationInterface.php';
require_once __DIR__.'./../core/LogAbstract.php';
require_once __DIR__.'./../core/LogInterface.php';
require_once __DIR__.'./../Gazetov/GazetovException.php';
require_once __DIR__.'./../Gazetov/MyLog.php';
require_once __DIR__.'./../Gazetov/Linear.php';

use PHPUnit\Framework\TestCase;

Class LinearTest extends TestCase
{
  protected $linear;

  protected function setUp() : void
  {
    $this->linear = new Linear();
  }

  /**
  * @dataProvider providerGetterAndSetter
  *  Проверка геттера и сеттера
  */

  public function testGetterAndSetter($x) : void
  {
    $this->linear->setX($x);
    $this->assertEquals($x, $this->linear->getX());
  }

  public function providerGetterAndSetter() : array
  {
    return array([1], [5], [2], [8], [-5], [-1], [0], [10], [-20], [100]);
  }

  /**
  * @dataProvider providerLinearEquation
  *  Проверка решения линейного уравнени
  */


  public function testLinearEquation($a, $b, $result) : void
  {
    $this->assertEquals($result, $this->linear->linearEquation($a, $b));
  }

  public function providerLinearEquation() : array
  {
    return array(
      array(4, 0, 0),
      array(2, 2, -1),
      array(8, 3, -0.375)
    );
  }

  /**
  * @dataProvider providerException
  *  Проверка выбрасывания ошибки
  */

  public function testException($a, $b) : void
  {
    $this->expectException(GazetovException::Class);
    $this->linear->linearEquation($a, $b);
  }

  public function providerException() : array
  {
    return array(
      array(0, 2),
      array(0, 0),
      array("a", 0),
    );
  }

}
?>
