<?php

function print_director($path, $nesting_level = 0)
{
   // if(!$file_exists($path)){ echo " director $path doesn\"t exist "; return null;
    $files = scandir($path);
    $spaseces = str_pad(' ', $nesting_level * 4 );
    foreach ($files as $file)
    {

        if($files === '.'|| $file==='..')
        {
            continue;

        }
        $file_path = $path.DIRECTORY_SEPARATOR .$file;

        $formattws_str = $spaseces.'%s'.$file.PHP_EOL;

        if(is_dir($file_path))
        {
            echo sprintf($formattws_str,'(d)');
            print_director($file_path, $nesting_level +1 );
        }
        else
            {
                echo sprintf($formattws_str,'(f)');
            }
    }



}
$path=$_GET['path'] ?? 'D:\git\Testgit\git test 1';
print_director($path);


function r( )
{


}

?>