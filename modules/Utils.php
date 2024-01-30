<?php
    function get_blogs($use_content=false) {
        $dir = 'pages/blogs';
        $blogs = array();
        foreach (new DirectoryIterator($dir) as $file) {
            if ($file->isDot()) continue;
            $url = urlencode('pages/blogs/' . $file);
            $blog = get_markdown($url, $use_content);
            $blog["url"] = $url;
            array_push($blogs, $blog);
        }
        array_multisort(array_column($blogs, 'time'), SORT_DESC, $blogs);
        return $blogs;
    }
    
    function get_projects($use_content=false) {
        $dir = 'pages/projects';
        $projects = array();
        foreach (new DirectoryIterator($dir) as $file) {
            if ($file->isDot()) continue;
            $url = urlencode('pages/projects/' . $file);
            $project = get_markdown($url, $use_content);
            $project["url"] = $url;
            array_push($projects, $project);
        }
        array_multisort(array_column($projects, 'time'), SORT_DESC, $projects);
        return $projects;
    }
    
    function get_markdown($url, $use_content=false) 
    {
        $path = urldecode($url);
        $source = file_get_contents($path);
        $markdown = explode("------", $source);
        $settings = explode("\n", $markdown[0]);
        $content = $markdown[1];
        
        $markdown = array();
        foreach ($settings as $setting) {
            $setting_i = explode(':', $setting);
            if (count($setting_i) != 2) continue;
            $key = trim($setting_i[0]);
            $value = explode(',', trim($setting_i[1]));
            
            if ($key == 'date') {
                $date_i = explode('-', $value[0]);
                $year = (int)$date_i[0];
                $month = (int)$date_i[1];
                $day = (int)$date_i[2];
                $hour = (int)$date_i[3];
                $minute = (int)$date_i[4];
                $second = (int)$date_i[5];
                $markdown["time"] = $year * 10000000000 + $month * 100000000 + $day * 1000000 + $hour * 10000 + $minute * 100 + $second;
                $markdown["date"] = array("year"=>$year, "month"=>$month, "day"=>$day, "hour"=>$hour, "minute"=>$minute, "second"=>$second);
            }
            else {
                $markdown[$key] = $value;
            }
        }
        
        if ($use_content) $markdown["content"] = $content;
        return $markdown;
    }
?>