<?php 
$artext = ['Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porta luctus auctor. Proin neque ligula, pretium nec iaculis consequat, dignissim a eros. Suspendisse potenti. Aenean sed justo nec magna volutpat posuere maximus sed dolor. Etiam vel turpis id orci efficitur elementum id sed odio. Morbi dignissim laoreet fringilla. Morbi porta dapibus suscipit. Nullam arcu nibh, ultricies eu maximus in, tempor a nisi. Nulla et varius eros. Duis dapibus luctus ex, et scelerisque arcu malesuada id. Proin efficitur finibus tellus vitae aliquet. Sed at ullamcorper risus, in mattis massa. Cras ac justo sed turpis viverra vulputate. Duis commodo ornare orci, ut tristique ante blandit vehicula. Cras vulputate venenatis magna, quis molestie nibh laoreet a. Donec tristique porta nisi, a finibus dolor cursus ut.
Praesent elit tellus, congue ac lectus ac, accumsan sollicitudin enim. Vestibulum vehicula egestas hendrerit. Donec bibendum, nibh eget semper sagittis, ex nisi euismod libero, a volutpat felis orci at ante. Sed sit amet tortor lobortis, sollicitudin orci sit amet, ornare metus. Aliquam erat volutpat. Proin sed leo ac dui ullamcorper sodales. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vel justo neque. Maecenas volutpat, justo id vehicula facilisis, urna enim congue leo, ac malesuada ipsum quam vel ante. In tempus hendrerit leo, ut luctus diam suscipit eu. Suspendisse eu rutrum tellus, at aliquet justo. Praesent vitae eros risus. Vivamus efficitur tellus at nisl vulputate condimentum. Pellentesque aliquet in felis ut pharetra. Vestibulum sed leo et mi convallis blandit. Aenean ac lectus in lacus porta pharetra ut ut dui'];	
		foreach ($artext as $key => $string) {
$word = explode(" ", $string);}
 $countsymb = count($word);
        if($countword > 6){
            $arr2[$key][] = $word;
        }
print_r($artext);
?>