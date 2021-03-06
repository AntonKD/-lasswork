<?php
function scan_directory_recurtsive($path, $nesting_level=0):array
{   $result=[];
    if(!file_exists($path))
    {
        return $result;
    }
    $files= scandir($path);

    $item=
        [
            'tepe'=>'',
            'name'=>'',
            'path'=>'',
            'level'=>$nesting_level,
            'children'=>[]

        ];

    foreach ($files as $file)
    {
        if($file === '.'|| $file==='..')
        {
            continue;

        }
        $file_path= $path.DIRECTORY_SEPARATOR .$file;
        $item['name']= $file;
        $item['path']= $file_path;
        if(is_dir($file_path))
        {
           $item['tepe']= 'd';
           $item['children']=scan_directory_recurtsive($file_path,$nesting_level +1);
        }
        else {
            $item['tepe']= 'f';
            $item['children']=[];
        }
        $result[]=$item;
    }
    return $result;
}


$file_list = scan_directory_recurtsive('D:\git\Testgit');

//$files_list_serialized=serialize($file_list);

print_r($file_list);