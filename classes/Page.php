<?php
class Page
{ 
     public static function display(string $page)
    {
        switch ($page) {
            case 'dashboard':
                include 'modules/dasboard_display.php';
                break;
            case 'students':
                include 'modules/student_display.php';
                break;
                 case 'grades':
                include 'modules/grades_display.php';
                break;
            default:
                echo 'error page not assign';
                break;
        }
    }
}
