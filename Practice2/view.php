<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 8/26/2018
 * Time: 10:47 PM
 */
require_once 'vendor/autoload.php';
/*
 * Method One of Creating Object
 * */

/*
if(isset($_POST['btn'])) {
    $myOb = new  App\Classes\Counter();

   $res= $myOb->getResult($_POST);

}
*/

/*
 * Method 2 Of creating Object
 */
use App\Classes\Counter;

use App\Classes\Student;

if(isset($_POST['btn'])) {
    $res = Counter::getResult($_POST);

    Student::addition();
}

?>

<form action="" method="post">
    <table>
        <tr>
            <td>Sting</td>
            <td>
                <input type="text" name="myString">
            </td>
        </tr>
        <tr>
            <td>Number of Character</td>
            <td>
                <input type="text" value="<?php echo $res['numberOfCharacter'];?>">
            </td>
        </tr>
        <tr>
            <td>Number of words</td>
            <td>
                <input type="text" value="<?php echo $res['numberOfWord'];?>">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="btn" value="Submit">
            </td>
        </tr>
    </table>
</form>
