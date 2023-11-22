<html>
<?php 
// ini_set('display_errors', 1);
$string = 'casestudy-page2';
$dir = new DirectoryIterator('./');

foreach ($dir as $key=>$file) {
    if ($file->isFile() && $file->getExtension() == 'php' && $file->getFilename() != 'check_broken_links.php') {
        $content = file_get_contents($file->getPathname());
        //print_r($file);
        if (strpos($content, $string) == true) {
            // Bingo
            print_r($file->getFilename());
            print_r('-------------');
            
            // $changed_content = str_replace ($string,'augmented-reality-games',$content);
            // file_put_contents($file, $changed_content);
            if($key>=50){
                break;
            }
        }
    }
}

?>

</html>
